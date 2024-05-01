<?php

class MovieDaoJson extends Dao
{
    /**
     * @return MovieEntity[]
     */
    public function all(): array
    {
        $content = file_get_contents(__DIR__ . '/../db/peliculas.json');

        $movies = json_decode($content, true);

        $response = [];

        foreach ($movies as $data) {
            $response[] = $this->hydrate($data);
        }

        return $response;
    }

    public function find(int $id): ?MovieEntity
    {
        $movies = $this->all();

        $response = null;

        foreach ($movies as $movie) {
            if ($movie->getId() == $id) {
                $response = $movie;
                break;
            }
        }

        return $response;
    }

    public function create(array $data): MovieEntity
    {
        return new MovieEntity;
    }

    // {
    //     "id": 1,
    //     "titulo": "Avatar",
    //     "estreno": "2009-12-18",
    //     "duracion": "162 min",
    //     "genero": "Action, Adventure, Fantasy",
    //     "poster": "http://ia.media-imdb.com/images/M/MV5BMTYwOTEwNjAzMl5BMl5BanBnXkFtZTcwODc5MTUwMw@@._V1_SX300.jpg",
    //     "rating": "7.9"
    //   }
}
