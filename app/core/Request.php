<?php

class Request
{
    public static function parseUrl()
    {
        $parsedUri = str_replace('/', '.', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

        return (bool) $parsedUri ? $parsedUri : 'index';
    }

    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
