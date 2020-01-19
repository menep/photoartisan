<?php

class Router
{
    const ROUTES = [
        'GET' => [
            'about',
            'contact',
            'galleries',
            'index',
            'not-found'
        ],
        'POST' => [
            'gallery'
        ]
    ];

    public static function direct($method)
    {
        if ($method === 'GET') {
            $controller = new PagesController;

            $view = Request::parseUri($_SERVER['REQUEST_URI']);

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

                if ($pathInfoComponents[1] === 'find') {
                    $controller->find($_POST);
                }
            }
        }
    }

    public static function redirect($path)
    {
        header("Location: $path");
    }
}
