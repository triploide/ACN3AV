<?php

abstract class Dao
{
    protected $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=ram;port=3306', 'root', '');
            $this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        } catch (Exception $e) {
            var_dump($e);
        }
    }
}
