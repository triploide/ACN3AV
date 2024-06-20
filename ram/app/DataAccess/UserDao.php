<?php

namespace Ram\DataAccess;

use Ram\Models\UserModel;

class UserDao extends Dao
{
    protected function table() : string
    {
        return 'users';
    }

    protected function columns() : array
    {
        return [
            'first_name',
            'last_name',
            'password',
            'role_id',
        ];
    }

    public function find(int|string $id, string $column='id')
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE $column = :id");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, UserModel::class);
        $stmt->execute([":$column" => $id]);

        return $stmt->fetch();
    }

    public function all()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}
