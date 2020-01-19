<?php

class Router
{
    const ROUTES = [
        'GET' => [
            'index',
            'not-found',
            'gallery.create',
            'gallery.find',
            'gallery.results'
        ],
        'POST' => [
            'gallery'
        ]
    ];

    public static function direct($method)
    {
        if ($method === 'GET') {
            $controller = new PagesController;

            $view = Request::parseUri();

            if (array_search($view, self::ROUTES['GET']) !== false) {
                $controller->getPage($view);
            } else {
                $controller->getPage('not-found');
            }
        } else if ($method === 'POST') {
            $pathInfoComponents = explode('/', trim($_SERVER['PATH_INFO'], '/'));
            $config = require 'config.php';

            if ($pathInfoComponents[0] === 'gallery') {
                $controller = new GalleryController($config);

                switch ($pathInfoComponents[1]) {
                    case 'find':
                        $controller->find($_POST);
                        break;
                    case 'create':
                        $controller->create($_POST);
                        break;
                }
            }
        }
    }

    public static function redirect($path)
    {
        header("Location: $path");
    }
}
