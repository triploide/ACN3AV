<?php

$errores = false;

if (!isset($_POST['email']) || empty($_POST['email'])) {
    $errores = true;
    echo 'Tenés que completar el email<br>';
}

if (!isset($_POST['password']) || empty($_POST['password'])) {
    $errores = true;
    echo 'Tenés que completar la contraseña<br>';
}

if (!$errores) {
    echo 'insert email password<br>';
}


