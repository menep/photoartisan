<?php

function parseUri()
{
    $uri = str_replace('/', '.', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

    return (bool) $uri ? $uri : 'index';
}
