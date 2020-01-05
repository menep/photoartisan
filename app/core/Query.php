<?php

class Query
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function createGallery($params)
    {
        $sql = 'INSERT INTO Galleries (title, description, author) VALUES (:title, :description, :author)';
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute([
                'title' => $params['title'],
                'description' => $params['description'],
                'author' => $params['author'],
            ]);
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function findGallery($params)
    {
        $sql = 'SELECT * FROM Galleries';
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $statement->fetchAll();
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}
