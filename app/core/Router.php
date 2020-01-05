<?php
require 'app/core/Connection.php';
require 'app/core/Query.php';

class Router
{
    protected static function parseUri($uri)
    {
        $parsedUri = str_replace('/', '.', trim(parse_url($uri, PHP_URL_PATH), '/'));

        return (bool) $parsedUri ? $parsedUri : 'index';
    }

    public static function direct($method)
    {
        if ($method === 'GET') {
            $view = self::parseUri($_SERVER['REQUEST_URI']) . ".view.php";

            if (file_exists("app/views/pages/$view")) {
                require "app/views/pages/$view";
            } else {
                require 'app/views/pages/not-found.php';
            }
        } else if ($method === 'POST') {
            $config = require 'config.php';
            (new Query(Connection::make($config)))->createGallery($_POST);

            self::redirect('/');
        }
    }

    public static function redirect($path)
    {
        header("Location: $path");
    }
}
