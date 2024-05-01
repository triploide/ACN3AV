<?php

abstract class Dao
{
    /**
     * @return MovieEntity[]
     */
    abstract public function all(): array;

    abstract public function find(int $id): ?MovieEntity;

    abstract public function create(array $data): MovieEntity;

    protected function hydrate(array $data): MovieEntity
    {
        $entity = new MovieEntity;
        $entity->setId($data['id']);
        $entity->setTitulo($data['titulo']);
        $entity->setDuracion($data['duracion']);
        $entity->setEstreno($data['estreno']);
        $entity->setGenero($data['genero']);
        $entity->setPoster($data['poster']);
        $entity->setRating($data['rating']);

        return $entity;
    }

    // orderBy($columna, $dir)

    // periodo($inicio, $fin)

    // search($columna, $termino, bool $exacto=true)

    // create

    // update

    // delete
}
