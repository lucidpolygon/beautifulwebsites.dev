<?php

require_once __DIR__ . '/controllers/PageController.php';

// Define a routing table with the mapping of URLs to controller methods and HTTP request methods
$routes = [
    '/' => [
        'GET' => 'HomeController@index',
        'POST' => null
    ],
    '/websites/{slug}' => [
        'GET' => 'HomeController@show',
        'POST' => null
    ],
    '/submit-your-website' => [
        'GET' => 'SubmitController@submitEntry',
        'POST' => 'SubmitController@sendEmail'
    ],
    '/subscribe' => [
        'GET' => null,
        'POST' => 'SubscribeController@subscribe'
    ],
    '/webpage-sherlock-chrome-extension' => [
        'GET' => function () {
            $controller = new PageController();
            $controller->show('webpage-sherlock-chrome-extension');
        },
        'POST' => null
    ],

];

// Get the current URL from the server request
$requestUrl = $_SERVER['REQUEST_URI'];


// Remove the query string from the URL if present
if (($pos = strpos($requestUrl, '?')) !== false) {
    $requestUrl = substr($requestUrl, 0, $pos);
}

// Strip the base path from the URL to get the relative path
$basePath = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
$relativeUrl = str_replace($basePath, '', $requestUrl);

// Get the HTTP request method
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Match the URL and request method to a route in the routing table
$matchedRoute = null;
foreach ($routes as $routeUrl => $routeActions) {
    $routeUrl = str_replace('/', '\/', $routeUrl);
    $routeUrl = preg_replace('/\{[a-zA-Z]+\}/', '([^\/]+)', $routeUrl);
    if (preg_match('/^' . $routeUrl . '$/', $relativeUrl, $matches)) {
        if (isset($routeActions[$requestMethod])) {
            $action = $routeActions[$requestMethod];
            if (is_callable($action)) {
                $action();
            } else {
                $matchedRoute = [
                    'url' => $routeUrl,
                    'action' => $action,
                    'params' => array_slice($matches, 1)
                ];
            }
            break;
        } else {
            // No matching route for the HTTP request method found, show a 405 error page
            header('HTTP/1.1 405 Method Not Allowed');
            require_once __DIR__ . '/views/405.php';
            exit();
        }
    }
}


// Dispatch the matched route to the appropriate controller method
if ($matchedRoute) {
    $actionParts = explode('@', $matchedRoute['action']);
    $controllerName = $actionParts[0];
    $methodName = $actionParts[1];

    // Include the controller class file
    require_once __DIR__ . '/controllers/' . $controllerName . '.php';

    // Instantiate the controller and call the method with the matched parameters
    $controller = new $controllerName();
    $params = $matchedRoute['params'];
    call_user_func_array([$controller, $methodName], $params);
} else {
    // No matching route found, show a 404 error page
    header('HTTP/1.1 404 Not Found');
    require_once __DIR__ . '/views/404.php';
    exit();
}
