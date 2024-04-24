<?php

class MovieBusiness
{
    private $dao;

    public function __construct()
    {
        $this->dao = new MovieDao;
        // $this->dao = new MovieDaoJson;
    }

    public function listar()
    {
        return $this->dao->listar();
    }

    public function get($id)
    {
        return $this->dao->get($id);
    }
}





