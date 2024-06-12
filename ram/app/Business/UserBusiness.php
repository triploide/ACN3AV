<?php

namespace Ram\Business;

use Ram\DataAccess\UserDao;

class UserBusiness extends Business
{
    private $dao;

    public function __construct()
    {
        $this->dao = new UserDao;
    }

    public function find($id)
    {
        // validación
        if (!is_numeric($id)) {
            $this->error404();
        }

        $user = $this->dao->find($id);

        if (!$user) {
            $this->error404();
        }

        return $user;
    }

    public function update(int $id, array $data) : void
    {
        $this->dao->update($id, $data);
    }

    public function all()
    {
        $users = $this->dao->all();

        if ($users === false) {
            $this->error404();
        }

        return $users;
    }

    // public function can($permission): bool
    // {
    //     $permissions = $this->dao->permissions();

    //     return in_array($permission, $permissions);
    // }
}
