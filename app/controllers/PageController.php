<?php

class PageController
{

    public function show($route)
    {

        // Construct the path to the view file based on the route
        $viewFile = __DIR__ . "/../views/page/{$route}.php";

        if (file_exists($viewFile)) {
            // Load the view template if it exists
            require_once $viewFile;
            exit();
        } else {
            // No matching route found, show a 404 error page
            header('HTTP/1.1 404 Not Found');
            require_once __DIR__ . '/views/404.php';
            exit();
        }
    }
}
