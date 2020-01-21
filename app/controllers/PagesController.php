<?php

class PagesController
{
    public function home()
    {
        require "app/views/pages/index.php";
    }

    public function notFound()
    {
        require "app/views/pages/not-found.php";
    }

    public function gallery($action, $method)
    {
        $routes = [
            'GET' => [
                'find',
                'create'
            ],
            'POST' => [
                'find',
                'create'
            ]
        ];

        if (array_search($action, $routes[$method]) !== false) {
            if ($method === 'GET') {
                require "app/views/pages/gallery.$action.php";
            } else if ($method === 'POST') {
                (new GalleryController())->$action($_POST);
            }
        } else {
            (new PagesController())->notFound();
        }
    }
}
