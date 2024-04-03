<?php

class User
{
    private static $conn;

    public  static function getConnection()
    {
        if (!self::$conn) {
            self::$conn = new PDO('mysql:host=localhost;dbname=graduados', 'root', '');
        }

        return self::$conn;
    }

    /**
     * @throws DBNotFoundException
     */
    public  static function find($id)
    {
        $conn = self::getConnection();
        $stmt = $conn->prepare('SELECT * FROM admins where id=:id');
        $stmt->execute(['id' => $id]);

        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if (!$user) {
            throw new DBNotFoundException('User not found');
        }

        return $user;
    }

}
