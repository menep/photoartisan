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
        $sql = 'INSERT INTO Galleries (title, description, author, created) VALUES (:title, :description, :author, :created);';
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute([
                'title' => $params['title'],
                'description' => $params['description'],
                'author' => $params['author'],
                'created' => (new DateTime())->getTimestamp()
            ]);
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function findGallery($params)
    {
        $title = $params['title'];
        $author = $params['author'];

        $sql = "SELECT * FROM Galleries WHERE title='$title' AND author='$author';";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}
