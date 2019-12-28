<?php
require 'app/core/utils.php';
require 'app/core/Query.php';

class Router
{
    public static function direct($method)
    {
        if ($method === 'GET') {
            $view = parseUri() . ".view.php";

            if (file_exists("app/views/pages/$view")) {
                require "app/views/pages/$view";
            } else {
                require 'app/views/pages/not-found.php';
            }
        } else if ($method === 'POST') {
            $query = new Query();
            $response = $query->selectAll('test');
            foreach ($response as $row) {
                echo '<pre>' . var_export($row->b, true) . '</pre>';
            }
        }
    }
}
