<?php

namespace Ram\DataAccess;

use Ram\Models\ImageModel;

class ImageDao extends Dao
{
    protected function table() : string
    {
        return 'images';
    }

    protected function columns() : array
    {
        return [
            'path',
        ];
    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM images WHERE id = :id');
        $stmt->setFetchMode(\PDO::FETCH_CLASS, ImageModel::class);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }
}
