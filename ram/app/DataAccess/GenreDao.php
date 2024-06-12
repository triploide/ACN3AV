<?php

namespace Ram\DataAccess;

use Ram\Models\GenreModel;

class GenreDao extends Dao
{
    protected function table() : string
    {
        return 'genres';
    }

    protected function columns() : array
    {
        return [
            'value',
        ];
    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM genres WHERE id = :id');
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function all()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM genres');
        $stmt->setFetchMode(\PDO::FETCH_CLASS, GenreModel::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete(int|string $id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM genres where id = :id ');
        $stmt->execute([':id' => $id]);
    }
}
