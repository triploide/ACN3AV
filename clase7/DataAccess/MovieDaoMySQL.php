<?php

class MovieDaoMySQL extends Dao
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

    /**
     * @return MovieEntity[]
     */
    public function all(): array
    {
        // Preparo el stament
        $stmt = $this->pdo->prepare('SELECT * FROM peliculas');
        $stmt->setFetchMode(PDO::FETCH_CLASS, MovieEntity::class);

        // Lo ejecuto
        $stmt->execute();

        // Lo recupero
        return $stmt->fetchAll();
    }

    public function find($id): ?MovieEntity
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

    public function create(array $data) : MovieEntity
    {
        // array_keys
        // implode(', ', $data);
        // implode(', :', $data);

        $stmt = $this->pdo->prepare('INSERT INTO peliculas (titulo, estreno, duracion, genero, poster, rating) VALUES (:titulo, :estreno, :duracion, :genero, :poster, :rating)');

        $execute = [];

        foreach ($data as $key => $value) {
            $execute[":$key"] = $value;
        }

        $stmt->execute($execute);

        $id = $this->pdo->lastInsertId();

        $data['id'] = $id;

        return $this->hydrate($data);
    }
}
