<?php

use Ram\Business\AuthBusiness;
use Ram\Business\UserBusiness;

require '../../vendor/autoload.php';

$user = AuthBusiness::verify();

$error = ''; // null, [], '', 0, '0'

if (!password_verify($_POST['password'], $user->getPassword())) {
    $error = '<p>La contraseña ingresada no es correcta</p>';
}

if ($_POST['new_password'] != $_POST['new_password_confirmation']) {
    $error .= '<p>Las contraseñas no coinciden</p>';
}

if (!$error) {
    $userBusiness = new UserBusiness;
    $userBusiness->update($user->getId(), [
        'password' => password_hash($_POST['new_password'], PASSWORD_BCRYPT),
    ]);
    $message = '<p>La contraseña se modificó con éxito</p>';
} else {
    $message = $error;
}

$_SESSION['message'] = $message;

header('location: ../perfil.php');
