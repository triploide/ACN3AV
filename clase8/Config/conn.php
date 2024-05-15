<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=ram;port=3306', 'root', '');
} catch (PDOException $e) {
    var_dump($e);
}
