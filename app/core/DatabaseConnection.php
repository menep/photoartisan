<?php

class DatabaseConnection
{
    public static function make()
    {
        $config = require 'config.php';

        try {
            $dsn = $config['connection'] . ';dbname=' . $config['dbname'];
            
            return new PDO(
                $dsn,
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}
