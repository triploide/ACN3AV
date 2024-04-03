<?php

class Arquero extends UnidadMilitar
{
    function __construct($x, $y)
    {
        $this->setVida(40);
        $this->ataque = 6;
        parent::__construct($x, $y);
    }
