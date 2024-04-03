<?php

declare(strict_types=1);

abstract class PersonajeMilitar implements Movible
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        // echo 'Me instanciaron<br>';
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function mover(int $x, int $y)
    {
        echo 'Me estoy moviendo<br>';
        $this->x = $x;
        $this->y = $y;
    }

    public final function atacar(PersonajeMilitar $unidadMilitar)
    {
        if ($this->estyARango($unidadMilitar)) {
            echo 'Estoy atacando<br>';
        } else {
            $this->mover($unidadMilitar->getX(), $unidadMilitar->getY());
            $this->atacar($unidadMilitar);
        }
    }

    public function estyARango(PersonajeMilitar $unidadMilitar): bool
    {
        return $this->x == $unidadMilitar->getX() && $this->y == $unidadMilitar->getY();
    }
}
