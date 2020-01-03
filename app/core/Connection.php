<?php

class Connection
{
    public static function make($config)
    {
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
