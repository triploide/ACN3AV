<?php

namespace Ram\Models;

use Ram\Config\DBConfig;

class ImageModel
{
    protected $id;
    protected $path;

    public function getId()
    {
        return $this->id;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }
}
