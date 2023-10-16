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
        $contrasenia = $_POST['contrasenia'];

         //buscamos el usuarios
        $usuario = $this->modelo->obtenerPorEmail($email);

        if(!empty($usuario) && password_verify($contrasenia, $usuario->contraseña) ){ 
        //inicio la sesion y logueo al usuario
        session_start();

        //  AuthHelper::login($usuario);
        $_SESSION['USER_ID'] = $usuario->id;
        $_SESSION['USER_EMAIL'] = $usuario->email;
        $_SESSION['IS_LOGGED'] = true;

        header('Location: ' . BASE_URL);
            die();
        } else {
            $this->vista->mostrarLogin('Usuario como el cul23o');
        }
            

        

/* segunda manera bien de inicar sesion
        if(empty($usuario)){
            $this->vista->mostrarLogin('Usuario como el cul23o');
            die();
        }

        if(!password_verify($contrasenia, $usuario->contraseña)){
            $this->vista->mostrarLogin('contra mal');
            die();
        } else {
            echo "bien";
        }
            
        //inicio la sesion y logueo al usuario
          session_start();

        //  AuthHelper::login($usuario);
        $_SESSION['USER_ID'] = $usuario->id;
        $_SESSION['USER_EMAIL'] = $usuario->email;

            header('Location: ' . BASE_URL);
         /*else {
            $this->vista->mostrarLogin('Usuario como el culo');
        }*/
    
  
        
    }
       
       
    public function logout() {
        AuthHelper::logout();
        header('Location: ' . BASE_URL);
    }
}