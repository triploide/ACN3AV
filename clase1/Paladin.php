<?php

class Paladin extends UnidadMilitar
{
    function __construct($x, $y)
    {
        $this->setVida(160);
        $this->ataque = 14;
        parent::__construct($x, $y);
    }

    public function mover($x, $y)
    {
        parent::mover($x, $y);

        // if ($this->estoyCercaDeEnemigo()) {
        //     $this->atacar();
        // }
    }
}
