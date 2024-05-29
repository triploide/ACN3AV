<?php

class MovieDao
{
    protected PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=ram;port=3306', 'root', '');
        } catch (PDOException $e) {
            var_dump($e);
        }
    }

    // recuperar un listado de registros
    /**
     * @return Movie[]
     */
    public function all() : array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM movies");
        $stmt->setFetchMode(PDO::FETCH_CLASS, Movie::class);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // recuperar un único registro
    public function find(int $id) : Movie
    {
        $stmt = $this->pdo->prepare("SELECT * FROM movies WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, Movie::class);
        $stmt->execute(['id' => $id]);

        return $stmt->fetch();
    }

    // recuperar crear un nuevo registro
    public function create(array $data) : void
    {
        $stmt = $this->pdo->prepare("INSERT INTO movies (title, released_date, length, genre, image, rating, owner_id) VALUE (:title, :released_date, :length, :genre, :image, :rating, :owner_id)");
        $stmt->execute([
            ':title' => $data['title'],
            ':released_date' => $data['released_date'],
            ':length' => $data['length'],
            ':genre' => $data['genre'],
            ':image' => $data['image'],
            ':rating' => $data['rating'],
            ':owner_id' => $data['owner_id'],
        ]);
    }

    // recuperar editar un registro
    public function update(int $id, array $data) : void
    {
        $stmt = $this->pdo->prepare("UPDATE movies SET title = :title, released_date = :released_date, length = :length, genre = :genre, image = :image, rating = :rating, owner_id = :owner_id WHERE id = :id");
        $stmt->execute([
            ':title' => $data['title'],
            ':released_date' => $data['released_date'],
            ':length' => $data['length'],
            ':genre' => $data['genre'],
            ':image' => $data['image'],
            ':rating' => $data['rating'],
            ':owner_id' => $data['owner_id'],
            ':id' => $id,
        ]);
    }

    // recuperar borrar un registro
    public function delete(int $id) : void
    {
        $stmt = $this->pdo->prepare('DELETE FROM movies WHERE id = :id');
        $stmt->execute([':id' => $id]);
    }
}
