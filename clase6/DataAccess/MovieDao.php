<?php

class MovieDao
{
    private $pdo;
    
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=peliculas;port=3306', 'root', '');
        } catch (PDOException $e) {
            var_dump($e);
        }
    }

    public function listar()
    {
        // Preparo el stament
        $stmt = $this->pdo->prepare('SELECT * FROM peliculas');
        $stmt->setFetchMode(PDO::FETCH_CLASS, MovieEntity::class);

        // Lo ejecuto
        $stmt->execute();

        // Lo recupero
        return $stmt->fetchAll();
    }

    public function get($id)
    {
        // Preparo el stament
        $stmt = $this->pdo->prepare('SELECT * FROM peliculas WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, MovieEntity::class);

        // Lo ejecuto
        $stmt->execute([
            ':id' => $id
        ]);

        // Lo recupero
        return $stmt->fetch();
    }
}
