<?php

require 'UnidadMilitar.php';
require 'Paladin.php';
require 'Arquero.php';

// $arquero = [
//     'vida' => 14,
//     'ataque' => 6
// ];

// $arquero['vida'] = 20;

// echo $arquero['vida'];

echo '<pre>';

$arquero = new Arquero(10, 20);
$paladin = new Paladin(20, 30);

$arquero->mover(4, 2);
$paladin->mover(10, 50);

// var_dump($arquero);
// var_dump($paladin);

// $arquero->mover(30, 50);

// var_dump($arquero);


