<?php

class MovieBusiness extends Business
{
    private $dao;

    public function __construct()
    {
        $this->dao = new MovieDao;
    }

    public function find($id)
    {
        // login
        $user_id = 1;

        // validación
        if (!is_numeric($id)) {
            $this->error404();
        }

        $movie = $this->dao->find($id);

        if (!$movie) {
            $this->error404();
        }

        if ($movie->owner_id != $user_id) {
            $this->error403();
        }

        return $movie;
    }

    public function all()
    {
        $movies = $this->dao->all();

        if ($movies === false) {
            var_dump('Todo mal'); exit;
        }

        return $movies;
    }
}
