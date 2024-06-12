<?php

// $password = '123456';

// $password_hash = password_hash($password, PASSWORD_DEFAULT);

// echo $password_hash;

// usuario

$usuarios = [
    [
        'email' => 'test@mail.com',
        'password' => '$2y$10$GYmQKhg3xTiHwFL6kWWLXe5ZWB/dnV6eRY0tAEL62pgtaKF12OIdm'
    ],
    [
        'email' => 'test2@mail.com',
        'password' => '$2y$10$GYmQKhg3xTiHwFL6kWWLXe5ZWB/dnV6eRY0tAEL62pgtaKF12OIdm'
    ]
];

$usuarioEncontrado = null;
$password = '123456';
$email = 'test3@mail.com';

foreach ($usuarios as $usuario) {
    if ($usuario['email'] == $email) {
        $usuarioEncontrado = $usuario;
        break;
    }
}

if ($usuarioEncontrado && password_verify($password, $usuarioEncontrado['password'])) {
    echo 'Usuario logueado';
} else {
    echo 'No podés acceder :(';
}

// $2y$10$GYmQKhg3xTiHwFL6kWWLXe5ZWB/dnV6eRY0tAEL62pgtaKF12OIdm
// $2y$10$L0yeKwUPA8KFbuoubko0JuXIEQ9kn1RuIJRR6FrjWrMEQGmHZarrC

