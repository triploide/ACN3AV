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

    public function all(?array $where=[])
    {
        $sql = "SELECT * FROM movies";
        $params = [];

        if (count($where) > 0) {
            $sql .= " WHERE {$where['columna']} {$where['operador']} :{$where['columna']}";
            $params = [":{$where['columna']}" => $where['valor']];
        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, MovieModel::class);
        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function delete(int|string $id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM movies where id = :id ');
        $stmt->execute([':id' => $id]);
    }
}
