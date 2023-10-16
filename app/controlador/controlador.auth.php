<?php
require_once './app/vista/vista.auth.php';
require_once './app/modelo/modelo.usuarios.php';
require_once './app/helpers/auth.helper.php';

class AuthController {
    private $vista;
    private $modelo;

    function __construct(){
        $this->vista = new AuthVista();
        $this->modelo = new ModeloUsuario();
    }

    public function mostrarLogin(){
        $this->vista->mostrarLogin();
    }
    
    public function auth(){
        //Obtengo datos del formulario
        $email = $_POST['email'];
        $password = $_POST['contrasenia'];

        if(empty($email) || empty($password)) {
            $this->vista->mostrarLogin('Faltan completar campos');
            return;
        }

        $usuario = $this->modelo->obtenerPorEmail($email);
        if ($usuario && password_verify($password, $usuario->password)) {
            $this->vista->mostrarLogin('Usuario bien');
            AuthHelper::login($usuario);
            header('Location: ' . BASE_URL);
        } else {
            $this->vista->mostrarLogin('Usuario como el culo');
        }
    }

    public function logout() {
        AuthHelper::logout();
        header('Location: ' . BASE_URL);
    }
}