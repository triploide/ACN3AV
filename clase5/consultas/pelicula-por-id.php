<?php

require __DIR__ . '/../conn.php';

$id = $_GET['id'];

// Preparo el stament
$stmt = $pdo->prepare('SELECT * FROM peliculas WHERE id = ?');

// Lo ejecuto
$stmt->execute([2]);

// Lo recupero
$pelicula = $stmt->fetch(PDO::FETCH_OBJ);

