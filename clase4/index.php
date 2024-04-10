<?php

require 'conn.php';

echo '<pre>';

// ----------------------
// ----- PDO: query -----
// ----------------------
// $sql = 'SELECT * FROM peliculas';
// $respuesta = $pdo->query($sql); // (object)Statament
// $peliculas = $respuesta->fetchAll(PDO::FETCH_ASSOC);

// ---------------------
// ----- PDO: exec -----
// ---------------------
// $sql = 'INSERT INTO peliculas (titulo) VALUES ("Triangle")';
// $pdo->exec($sql);

// $sql = 'UPDATE peliculas SET titulo="Avatar 2" WHERE id = 2';
// $pdo->exec($sql);

// $sql = 'DELETE FROM peliculas WHERE id = 4';
// $pdo->exec($sql);


// ------------------------ 
// ----- PDO: prepare -----
// ------------------------   
$sql = 'SELECT * FROM peliculas';
$stmt = $pdo->prepare($sql);
$stmt->execute();

$peliculas = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($peliculas);

// $sql = 'SELECT * FROM peliculas WHERE id = 2';
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// $pelicula = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($pelicula);

// $sql = 'SELECT titulo FROM peliculas WHERE id = 2';
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// $titulo = $stmt->fetchColumn();

// var_dump($titulo);
