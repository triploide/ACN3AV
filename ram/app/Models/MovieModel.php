<?php

namespace Ram\Models;

use Ram\Config\DBConfig;
use Ram\DataAccess\ImageDao;

class MovieModel
{
    protected $id;
    protected $title;
    protected $released_date;
    protected $length;
    protected $rating;
    protected $genre_id;
    protected $image_id;


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getReleased_date()
    {
        return $this->released_date;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getGenre_id()
    {
        return $this->genre_id;
    }

    public function getImage_id()
    {
        return $this->image_id;
    }

    public function getImage()
    {
        $imageDao = new ImageDao;

        return $imageDao->find($this->image_id);
    }
}
