<?php

namespace Ram\Business;

use Ram\DataAccess\GenreDao;

class GenreBusiness extends Business
{
    private $dao;

    public function __construct()
    {
        $this->dao = new GenreDao;
    }

    public function find($id)
    {
        // login
        // $user_id = 1;

        // validación
        if (!is_numeric($id)) {
            $this->error404();
        }

        $movie = $this->dao->find($id);

        if (!$movie) {
            $this->error404();
        }

        // if ($movie->owner_id != $user_id) {
        //     $this->error403();
        // }

        return $movie;
    }

    public function all()
    {
        $genres = $this->dao->all();

        if ($genres === false) {
            var_dump('Todo mal'); exit;
        }

        return $genres;
    }

    public function create(array $data) : int
    {
        return $this->dao->create($data);
    }

    public function delete(int|string $id)
    {
        $this->dao->delete($id);
    }
}
