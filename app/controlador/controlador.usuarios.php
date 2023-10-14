<?php
    require_once './app/modelo/modelo.usuarios.php';
    require_once './app/vista/vista.usuarios.php';

    
    class ControladorUsurios{
        private $modelo;
        private $vista;

        function __construct(){
            $this->modelo = new ModeloUsuario();
            $this->vista = new VistaUsuarios();
        }

        function verUsuarios(){
            $usuarios=$this->modelo->verUsuarios();
            $this->vista->Usuarios($usuarios);
        }
    }