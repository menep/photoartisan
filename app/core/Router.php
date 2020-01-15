<?php
require 'app/core/Connection.php';
require 'app/core/Query.php';
require 'app/core/Request.php';

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
            $view = Request::parseUri($_SERVER['REQUEST_URI']);

            if (array_search($view, self::ROUTES['GET']) !== false) {
                require "app/views/pages/$view.view.php";
            } else {
                require 'app/views/pages/not-found.php';
            }
        } else if ($method === 'POST') {
            $pathInfoComponents = explode('/', trim($_SERVER['PATH_INFO'], '/'));
            $config = require 'config.php';

            if ($pathInfoComponents[0] === 'gallery') {
                $action = $pathInfoComponents[1] . 'Gallery';
                $response = (new Query(Connection::make($config)))->$action($_POST);

                if ($pathInfoComponents[1] === 'find') {
                    var_dump($response);
                }
            }
        }
    }

    public static function redirect($path)
    {
        header("Location: $path");
    }
}
