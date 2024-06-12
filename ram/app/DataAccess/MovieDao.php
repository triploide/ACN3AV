<?php

namespace Ram\DataAccess;

use Ram\Models\MovieModel;

class MovieDao extends Dao
{
    protected function table() : string
    {
        return 'movies';
    }

    protected function columns() : array
    {
        return [
            'title',
            'released_date',
            'length',
            'rating',
            'genre_id',
            'image_id',
            'owner_id',
        ];
    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM movies WHERE id = :id');
        $stmt->setFetchMode(\PDO::FETCH_CLASS, MovieModel::class);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function all()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM movies where owner_id = :id ');
        $stmt->setFetchMode(\PDO::FETCH_CLASS, MovieModel::class);
        $stmt->execute([':id' => $_SESSION['user_id']]);
        return $stmt->fetchAll();
    }

    public function delete(int|string $id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM movies where id = :id ');
        $stmt->execute([':id' => $id]);
    }
}
