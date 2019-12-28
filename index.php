<?php
require 'app/core/utils.php';

$method = ($_SERVER['REQUEST_METHOD']);

if ($method === 'GET') {
    $view = parseUri() . ".view.php";

    if (file_exists("app/views/pages/$view")) {
        require "app/views/pages/$view";
    } else {
        require 'app/views/pages/not-found.php';
    }
} else if ($method === 'POST') {
    $pdo = require 'app/core/pdo.php';

    $stmt = $pdo->prepare('SELECT * FROM test');
    $stmt->execute();
    $response = $stmt->fetchAll(PDO::FETCH_CLASS);

    foreach ($response as $row) {
        echo '<pre>' . var_export($row->b, true) . '</pre>';
    }
}
