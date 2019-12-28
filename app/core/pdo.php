<?php

$dsn = 'mysql:host=localhost;dbname=photo_artisan';
$user = 'testuser';
$pass = 'testpass';

return new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
