<?php

class PageController {

    public function show()
    {
        // Load the show view template and pass in the item data
        require_once __DIR__ . '/../views/page/show.php';
    }

}
