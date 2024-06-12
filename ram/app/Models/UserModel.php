<?php

namespace Ram\Models;

use Ram\Config\DBConfig;

class UserModel
{
    protected $id;
    protected $email;
    protected $password;
    protected $first_name;
    protected $last_name;
    protected $role_id;

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($value)
    {
        $this->first_name = $value;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($value)
    {
        $this->last_name = $value;
    }

    public function getRoleId()
    {
        return $this->role_id;
    }

    public function setRoleId($value)
    {
        $this->role_id = $value;
    }

    // ---
    public function getPermisos() : ?array
    {
        $pdo = DBConfig::getConnection();
        $stmt = $pdo->prepare('SELECT p.name FROM permissions AS p
        INNER JOIN permission_role AS pr ON p.id = pr.permission_id
        INNER JOIN roles AS r ON r.id = pr.role_id
        INNER JOIN users AS u ON u.role_id = r.id
        WHERE u.id = :id');
        $stmt->execute([
            ':id' => $this->id,
        ]);
        return $stmt->fetchAll(\PDO::FETCH_COLUMN);
    }

    public function can($rule) : bool
    {
        return in_array($rule, $this->getPermisos());
    }
}
