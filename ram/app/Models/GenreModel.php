<?php

namespace Ram\Models;

use Ram\Config\DBConfig;

class GenreModel
{
    protected $id;
    protected $value;

    public function getId()
    {
        return $this->id;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}
