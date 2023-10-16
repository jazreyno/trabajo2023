<?php
    require_once './app/modelo/modelo.usuarios.php';
    require_once './app/vista/vista.usuarios.php';

    /*
    class ControladorUsurios{
        private $modelo;
        private $vista;

        function __construct(){
            $this->modelo = new ModeloUsuario();
            $this->vista = new AuthVista();
        }

        function verUsuarios(){
            $usuarios=$this->modelo->verUsuarios();
            $this->vista->Usuarios($usuarios);
        }

        public function validarUsuario(){
            //Obtengo datos del formulario
            $email = $_POST['email'];
            $password = $_POST['contrasenia'];

            if(empty($email) || empty($password)) {
                $this->vista->mostrarLogin('Faltan completar campos');
                return;
            }
    
            $usuario = $this->modelo->obtenerPorEmail($email);

            if ($usuario && password_verify($password, $usuario->password)) {
                session_start();
                $_SESSION['USER_ID'] = $usuario->id_usuarios;
                $_SESSION['USER_EMAIL'] = $usuario->email;
                $_SESSION['IS_LOGGED'] = true;

                /*$this->vista->mostrarLogin('Usuario bien');
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
    }*/