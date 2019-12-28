<?php

$config = require 'config.php';

return new PDO($config['connection'] . ';dbname=' . $config['dbname'], $config['username'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
