<?php

declare(strict_types=1);

require 'Movible.php';
require 'PersonajeMilitar.php';
require 'Seleccion.php';
require 'Scout.php';
require 'Arquero.php';
require 'Ariete.php';
require 'Oveja.php';

$scout = new Scout(10, 10);
$arquero1 = new Arquero(16, 16);
$arquero2 = new Arquero(20, 30);
$ariete = new Ariete(10, 10);
$oveja = new Oveja(30, 30);

// $seleccion = new Seleccion;
// $seleccion->seleccionar($arquero);
// $seleccion->seleccionar($scout);
// $seleccion->seleccionar($ariete);
// $seleccion->seleccionar($oveja);

// $seleccion->each(function ($item, $i) {
//     $item->mover(20, 30);
// });

// $scout->atacar($arquero);
// $arquero->atacar($scout);

// // Avanzo de edad
// $arquero->atacar($scout);

$arquero1->getRango();
$arquero2->getRango();

// Avanzo de edad
Arquero::$rango = 5;

$arquero1->getRango();
$arquero2->getRango();


