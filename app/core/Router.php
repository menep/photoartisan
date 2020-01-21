<?php

class Router
{
    const ROUTES = [
        'GET' => [
            '' => 'home',
            'gallery' => 'gallery'
        ],
        'POST' => [
            'gallery' => 'gallery'
        ]
    ];

    public static function direct($method)
    {
        $urlComponents = Request::parseUrl();
        if (array_key_exists($urlComponents['path'][0], self::ROUTES[$method])) {
            $action = self::ROUTES[$method][$urlComponents['path'][0]];
            (new PagesController())->$action($urlComponents['path'][1], $method);
        } else {
            (new PagesController())->notFound();
        }
    }

    public static function redirect($path)
    {
        header("Location: $path");
    }
}
