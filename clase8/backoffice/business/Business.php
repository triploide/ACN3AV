<?php

abstract class Business
{
    abstract public function find($id);

    abstract public function all();

    protected function error404()
    {
        echo file_get_contents(__DIR__ . '/../404.php');

        exit;
    }

    protected function error403()
    {
        echo file_get_contents(__DIR__ . '/../403.php');

        exit;
    }
}
