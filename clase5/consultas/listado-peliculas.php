<?php

require __DIR__ . '/../conn.php';

// Preparo el stament
$stmt = $pdo->prepare('SELECT * FROM peliculas');

// Lo ejecuto
$stmt->execute();

// Lo recupero
$peliculas = $stmt->fetchAll(PDO::FETCH_OBJ);

// --------------------------

// Parámetros con signo de pregunta
// $stmt = $pdo->prepare('SELECT * FROM peliculas where rating >= ? AND estreno >= ?');
// $stmt->execute([
//     8,
//     '2016-01-01'
// ]);
// $peliculas = $stmt->fetchAll(PDO::FETCH_OBJ);

// Parámetros con placeholder
// $stmt = $pdo->prepare('SELECT * FROM peliculas where rating >= :rating AND estreno >= :estreno');
// $stmt->execute([
//     ':estreno' => '2016',
//     ':rating' => 9,
// ]);
// $peliculas = $stmt->fetchAll(PDO::FETCH_OBJ);

// Parámetros con placeholder + bindParam
// $stmt = $pdo->prepare('SELECT * FROM peliculas where rating >= :rating AND estreno >= :estreno');
// $stmt->bindValue(':rating', 8);
// $stmt->bindValue(':estreno', '2016-01-01');
// $stmt->execute();
// $peliculas = $stmt->fetchAll(PDO::FETCH_OBJ);

