<?php

namespace Ram\Config;

use PDO;
use PDOException;

class DBConfig
{
    public static function getConnection() : PDO
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=ram;port=3306', 'root', '');
        } catch (PDOException $e) {
            var_dump($e);
        }

        return $pdo;
    }
}

