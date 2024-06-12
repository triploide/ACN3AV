<?php

require '../../../vendor/autoload.php';

use Ram\Config\DBConfig;

session_start();

if (!isset($_SESSION['user_id'])) {
    header('location: ../login'); exit;
}

$pdo = DBConfig::getConnection();

$stmt = $pdo->prepare('UPDATE movies SET title = :title, released_date = :released_date, length = :length, rating = :rating, genre = :genre, image = :image WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
    ':title' => $_POST['title'],
    ':released_date' => $_POST['released_date'],
    ':length' => $_POST['length'],
    ':rating' => $_POST['rating'],
    ':genre' => $_POST['genre'],
    ':image' => $_POST['image'],
]);

header('location: ../../peliculas');
