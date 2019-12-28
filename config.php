<?php

return [
    'connection' => 'mysql:host=localhost',
    'username' => 'testuser',
    'password' => 'testpass',
    'dbname' => 'photo_artisan',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];
