<?php

class MovieDao extends Dao
{
    public function find($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM movies WHERE id = :id');
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function all()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM movies');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
