<?php

namespace Ram\Business;

use Ram\DataAccess\UserDao;

class AuthBusiness
{
    protected static $dao;

    public static function getDao()
    {
        return new UserDao;
    }

    // login
    public static function login(string $email, string $password) : bool
    {
        $login = false;

        $user = self::getDao()->find($email, 'email');

        if ($user && password_verify($password, $user->password)) {
            $_SESSION['user_id'] = $user->id;
            $login = true;
        }

        return $login;
    }

    // logout
    public static function logout() : void
    {
        unset($_SESSION['user_id']);
    }

    // check
    public static function check() : bool
    {
        return isset($_SESSION['user_id']);
    }

    public static function user()
    {
        return self::getDao()->find($_SESSION['user_id']);
    }

    public  static function id() : ?int
    {
        return $_SESSION['user_id'];
    }

    /**
     * Verifica si el user está logueado. Caso contrario redirige.
     */
    public static function verify(string $url='/backoffice/login')
    {
        if (!self::check()) {
            header("location: $url");
            exit;
        }

        return self::user();
    }
}