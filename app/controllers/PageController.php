<?php

class PageController {

    public function show2()
    {
        // Load the show view template and pass in the item data
        require_once __DIR__ . '/../views/page/show.php';
    }

    public function show($route)
    {
        // Construct the path to the view file based on the route
        $viewFile = __DIR__ . "/../views/page/{$route}.php";
    
        if (file_exists($viewFile)) {
            // Load the view template if it exists
            require_once $viewFile;
        } else {
            // Handle the case when the view file doesn't exist, e.g., display an error message or redirect to a default page.
            echo "View not found for route: $route";
        }
    }
    
}
