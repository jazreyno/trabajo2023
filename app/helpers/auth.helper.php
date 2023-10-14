<?php
require_once 'modelo/modelo.usuarios.php';

class AuthHelper {
    private $modelo;

    function public function __construct(Type $var = null) {
        $this->modelo = new ModeloUsuario();

    }

    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($user, $password) {
        $usuario = $this->modelo->obtenerPorEmail($user);
//        AuthHelper::init();
        if ($usuario && password_verify($password, $usuario->password)) {
            $this->vista->mostrarLogin('Usuario bien');
            $_SESSION['id'] = $usuario->id; //Cambiar nombres por las de la tabla usuario
            $_SESSION['usuario'] = $usuario->usuario; 

        } else echo "Error";
    }


    public static function logout() {
        AuthHelper::init();
        session_destroy();
    }

    /*
    public static function verify() {
        AuthHelper::init();
        if (!isset($_SESSION['USER_ID'])) {
            header('Location: ' . BASE_URL . '/login');
            die();
        }
    }*/
}