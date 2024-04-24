<?php

class MovieDaoJson
{
    public function listar()
    {
        $content = file_get_contents(__DIR__ . '/../db/peliculas.json');

        return json_decode($content, true);
    }
}
