<?php

class Request
{
    public static function parseUrl()
    {
        $path =  explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
        parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), $query);

        return [
            'path' => $path,
            'query' => $query
        ];
    }

    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
