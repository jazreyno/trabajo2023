<?php
require_once './app/modelo/modelo.usuarios.php';


class AuthHelper {
    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($user, $password) {
        $usuario = $this->modelo->obtenerPorEmail($user);
        AuthHelper::init();
        if ($usuario && password_verify($password, $usuario->password)) {
            $this->vista->mostrarLogin('Usuario bien');
            $_SESSION['USER_ID'] = $usuario->id; 
            $_SESSION['USER_EMAIL'] = $usuario->usuario; 
        } 
    }


    public static function logout() {
        AuthHelper::init();
        session_destroy();
    }

    public static function verify() {
        AuthHelper::init();
        if (!isset($_SESSION['USER_ID'])) {
            header('Location: ' . BASE_URL . '/login');
            die();
        }
    }
}