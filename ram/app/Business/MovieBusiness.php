<?php

namespace Ram\Business;

use Ram\DataAccess\ImageDao;
use Ram\DataAccess\MovieDao;

class MovieBusiness extends Business
{
    private $dao;
    private $daoImage;
    private $imageBusiness;

    public function __construct()
    {
        $this->dao = new MovieDao;
        $this->daoImage = new ImageDao;
        $this->imageBusiness = new ImageBusiness;
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
        $movies = $this->dao->all();

        if ($movies === false) {
            var_dump('Todo mal'); exit;
        }

        return $movies;
    }

    public function create(array $data) : int
    {
        // upload image
        $extension = explode('/', $_FILES['image']['type']);
        $name = uniqid() . '.' . $extension[1] ;
        $path = $this->imageBusiness->upload($_FILES['image']['tmp_name'], __DIR__ . '/../../public/content/' . $name);

        // create image
        $imageId = $this->daoImage->create(['path' => $path]);

        $data = array_merge($data, [
            'owner_id' => AuthBusiness::id(),
            'image_id' => $imageId,
        ]);

        return $this->dao->create($data);
    }

    public function delete(int|string $id)
    {
        $this->dao->delete($id);
    }
}
