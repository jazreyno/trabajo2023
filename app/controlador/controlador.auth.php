<?php

require_once './app/modelo/modelo.usuarios.php';
require_once './app/vista/vista.auth.php';
require_once './app/helpers/auth.helper.php';


class controladorUsuarios
{
    private $vista;
    private $modelo;

    function __construct()
    {
        $this->vista = new vistausuarios();
        $this->modelo = new ModeloUsuario();
    }
        public function vistaLogin() {
            $this->vista->mostrarLogin();
    }

    public function validarUsuario(){
        $email = $_POST['email'];
        $contraseña = $_POST['password'];

        $usuario= $this->modelo->traerUsuariosEmail($email);

        if($usuario && password_verify ($contraseña, $usuario->contraseña)){
            session_start();
            $_SESSION['USER_ID'] = $usuario->id;
            $_SESSION['USER_EMAIL'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL );
        } else {
         $this->vista->mostrarLogin("El usuario o la contraseña no existe.");
        } 
      
         }
        function logout() {
            session_start();
            session_destroy();
            header("Location: " . BASE_URL );
        }
            
   
}
?>