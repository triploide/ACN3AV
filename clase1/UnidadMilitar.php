<?php

class UnidadMilitar
{
    private $vida;
    protected $ataque;
    private $x;
    private $y;

    function __construct($x, $y)
    {
        $this->mover($x, $y);
    }

    public function mover($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getVida()
    {
        return $this->vida;
    }

    public function setVida($vida)
    {
        $this->vida = $vida;
    }
}
