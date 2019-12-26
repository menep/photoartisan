<?php

function parseUri()
{
    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    return (bool) $uri ? $uri : 'index';
}
