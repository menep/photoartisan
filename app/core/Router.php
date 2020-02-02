<?php

class Router
{
    const ROUTES = [
        'GET' => [
            '' => 'PagesController@home',
            'gallery/create' => 'PagesController@createGallery',
            'gallery/find' => 'PagesController@findGallery'

        ],
        'POST' => [
            'gallery/create' => 'GalleryController@createGallery',
            'gallery/find' => 'GalleryController@findGallery'
        ]
    ];

    public static function direct($method)
    {
        $parsedUrl = Request::parseUrl();
        
        if (array_key_exists($parsedUrl, self::ROUTES[$method])) {
			[$controller, $action] =  explode('@', self::ROUTES[$method][$parsedUrl]);
			(new $controller)->$action();
        } else {
			(new PagesController)->notFound();
		}
    }

    public static function redirect($path)
    {
        header("Location: $path");
    }
}
