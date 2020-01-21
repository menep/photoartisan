<?php

class Router
{
    const ROUTES = [
        'GET' => [
            '' => ['home'],
            'gallery' => ['find', 'create']
        ],
        'POST' => [
            'gallery' => ['find', 'create']
        ]
    ];

    public static function direct($method)
    {
        $urlComponents = Request::parseUrl();
        if (array_key_exists($urlComponents['path'][0], self::ROUTES[$method])) {
            $asd = self::ROUTES[$method][$urlComponents['path'][0]];

            if (array_search($urlComponents['path'][1], $asd) !== false) {
                // TODO: get controller method
            } else {
                (new PagesController())->notFound();
            }
        } else {
            (new PagesController())->notFound();
        }
    }

    public static function redirect($path)
    {
        header("Location: $path");
    }
}
