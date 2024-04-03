<?php

class Oveja implements Movible
{
    private int $x;
    private int $y;
    
    public function mover(int $x, int $y)
    {
        echo 'Me estoy teletransportando<br>';
        $this->x = $x;
        $this->y = $y;
    }
}