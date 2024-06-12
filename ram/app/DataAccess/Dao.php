<?php

namespace Ram\DataAccess;

use PDO;
use Ram\Config\DBConfig;

abstract class Dao
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = DBConfig::getConnection();
    }

    public function create(array $data) : int
    {
        $qry = $this->createQuery($data);

        $stmt = $this->pdo->prepare($qry);

        $data = $this->prepareExecute($data);

        $stmt->execute($data);

        return $this->pdo->lastInsertId();
    }

    public function update(int $id, array $data) : void
    {
        $qry = $this->updateQuery($data);

        $stmt = $this->pdo->prepare($qry);

        $data = $this->prepareExecute($data, $id);

        $stmt->execute($data);
    }

    protected function createQuery(array $data) : string
    {
        $table = $this->table();
        $params = [];
        $qry = "INSERT INTO $table ";

        $qry .= '(' . implode(', ', $this->columns()) . ') ';
        $qry .= 'VALUES ';
        $qry .= '(:' . str_replace(', ', ', :', implode(', ', $this->columns())) . ')';

        return $qry;
    }

    protected function updateQuery(array $data) : string
    {
        $table = $this->table();
        $params = [];
        $qry = "UPDATE $table SET ";
        foreach($data as $key => $value){
            if (in_array($key, $this->columns())) {
                $params[] = "$key = :$key";
            }
        }
        $qry .= implode(', ', $params);
        $qry .= " WHERE id = :id";

        return $qry;
    }

    protected function prepareExecute(array $data, ?int $id=null) : array
    {
        $response = [];

        foreach ($data as $key => $value) {
            if (in_array($key, $this->columns())) {
                $response[":$key"] = $value;
            }
        }

        if ($id !== null) {
            $response = array_merge($response, ['id' => $id]);
        }

        return $response;
    }

    protected abstract function table() : string;

    protected abstract function columns() : array;
}
