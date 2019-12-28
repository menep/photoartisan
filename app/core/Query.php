<?php

class Query
{
    public function selectAll($table)
    {
        $pdo = require 'app/core/pdo.php';
        $stmt = $pdo->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
