<?php

class HomeController
{
    public function index()
    {
        // Generate a CSRF token if it doesn't exist
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = uniqid();
        }
        
        // Load data from data.json file
        $data = json_decode(file_get_contents(__DIR__ . '/../data/data.json'), true);

        // Filter data to include only items with id > 1
        $data = array_filter($data, function ($item) {
            return $item['id'] > 0;
        });

        // Load the home view template and pass in the data
        require_once __DIR__ . '/../views/home.php';
    }

    public function show($slug)
    {
        // Load data from data.json file
        $data = json_decode(file_get_contents(__DIR__ . '/../data/data.json'), true);

        // Find the item with the matching slug
        $item = null;
        foreach ($data as $d) {
            if ($d['slug'] == $slug) {
                $item = $d;
                break;
            }
        }

        // If item not found, show 404 page
        if (!$item) {
            require_once __DIR__ . '/../views/404.php';
            return;
        }

        // Load the show view template and pass in the item data
        require_once __DIR__ . '/../views/show.php';
    }

}
