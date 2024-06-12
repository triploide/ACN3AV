<?php

namespace Ram\Models;

use Ram\Config\DBConfig;
use Ram\DataAccess\ImageDao;
use Ram\DataAccess\UserDao;

class MovieModel
{
    protected $id;
    protected $title;
    protected $released_date;
    protected $length;
    protected $rating;
    protected $owner_id;
    protected $genre_id;
    protected $image_id;
    protected $description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit similique obcaecati veniam illo reprehenderit, ad eveniet odio voluptatum quo ipsam aliquam amet porro eum. Atque suscipit eius, iste deserunt perspiciatis ex accusamus, error culpa hic amet quidem provident aspernatur nostrum beatae veniam repellat, ipsum reprehenderit nisi! Optio neque dolorem adipisci?';


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getSubtitle()
    {
        return strlen($this->description) > 50 ? substr($this->description,0,50)."..." : $this->description;
    }

    public function getOwner()
    {
        $userDao = new UserDao;

        return $userDao->find($this->owner_id);
    }

    public function getHumanDate()
    {
        $date = \DateTime::createFromFormat('Y-m-d', $this->released_date);

        return $date->format('F jS, Y');
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
