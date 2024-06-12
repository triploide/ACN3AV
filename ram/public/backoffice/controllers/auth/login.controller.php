<?php

require '../../../../vendor/autoload.php';

use Ram\Config\DBConfig;

session_start();

$pdo = DBConfig::getConnection();

$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
$stmt->execute([
    ':email' => $_POST['email'],
]);
$usuario = $stmt->fetch(PDO::FETCH_OBJ);

// Si lo encuentro
if ($usuario && password_verify($_POST['password'], $usuario->password)) {
    $_SESSION['user_id'] = $usuario->id;
    header('location: ../../peliculas');
    exit;
} else {
    header('location: ../../login');
    exit;
}
