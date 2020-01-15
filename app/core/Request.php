<?php

class Request
{
    public static function parseUri($uri)
    {
        $parsedUri = str_replace('/', '.', trim(parse_url($uri, PHP_URL_PATH), '/'));

        return (bool) $parsedUri ? $parsedUri : 'index';
    }
}
