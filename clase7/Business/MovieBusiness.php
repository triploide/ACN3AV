<?php

class MovieBusiness
{
    private Dao $dao;

    public function __construct()
    {
        $this->dao = new MovieDaoMySQL;
        // $this->dao = new MovieDaoJson;
    }

    /**
     * @return MovieEntity[]
     */
    public function all(): array
    {
        return $this->dao->all();
    }

    public function find($id)
    {
        // validación
        // autenticación
        // modificación
        return $this->dao->find($id);
    }

    public function create(): MovieEntity
    {
        $POST = [
            "titulo" => "Joker 2",
            "estreno" => "2024-06-18",
            "duracion" => "191 min",
            "genero" => "Action, Drama",
            "poster" => "http://ia.media-imdb.com/images/M/MV5BMTYwOTEwNjAzMl5BMl5BanBnXkFtZTcwODc5MTUwMw@@._V1_SX300.jpg",
            "rating" => "8.9"
        ];

        return $this->dao->create($POST);
    }
}





