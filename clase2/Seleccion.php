<?php

declare(strict_types=1);

class Seleccion
{
    private array $seleccion;

    public function __construct()
    {
        $this->seleccion = [];
    }

    public function seleccionar(Movible $personaje)
    {
        $this->seleccion[] = $personaje;
    }

    public function each(callable $funcion)
    {
        $index = 0;
        foreach ($this->seleccion as $item) {
            $funcion($item, ++$index);
        }
    }
}
