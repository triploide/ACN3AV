<?php

declare(strict_types=1);

class Arquero extends PersonajeMilitar
{
    static public int $rango = 4;

    public function estyARango(PersonajeMilitar $unidadMilitar): bool
    {
        $rectaX = $this->getX() - $unidadMilitar->getX();
        $rectaY = $this->getY() - $unidadMilitar->getY();

        $distancia = ceil(sqrt($rectaX*$rectaX + $rectaY*$rectaY));

        return self::$rango >= $distancia;
    }

    public function getRango(): void
    {
        echo self::$rango . '<br>';
    }
}
