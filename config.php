<?php

return [
    'connection' => 'mysql:host=localhost',
    'username' => getenv('DBUSER'),
    'password' => getenv('DBPASSWORD'),
    'dbname' => getenv('DBNAME'),
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];
