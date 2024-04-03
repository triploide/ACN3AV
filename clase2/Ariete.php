<?php

class Ariete implements Movible
{
    private int $x;
    private int $y;
    
    public function mover(int $x, int $y)
    {
        echo 'Me estoy moviendo<br>';
        $this->x = $x;
        $this->y = $y;
    }
}