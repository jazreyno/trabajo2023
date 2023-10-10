<?php
require_once './app/views/auth.view.php';
require_once './app/models/user.model.php';
require_once './app/helpers/auth.helper.php';

class AuthController {
    private $vista;
    private $modelo;

    function __construct(){
        $this->vista = new AuthVista();
        $this->modelo = new ModeloUsuario;
    }

    public function mostrarLogin(){
        $this->vista->mostrarLogin();
    }

    public function auth(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email) || empty($password)) {
            $this->vista->mostrarLogin('Faltan completar campos');
            return;
        }

        $usuario = $this->modelo->obtenerPorEmail($email);
        if ($usuario && password_verify($password, $usuario->password)) {
            
            AuthHelper::login($usuario);
            header('Location: ' . BASE_URL);
        } else {
            $this->vista->mostrarLogin('Usuario invalido');
        }
    }

        public function logout() {
            AuthHelper::logout();
            header('Location: ' . BASE_URL);
        }
    }