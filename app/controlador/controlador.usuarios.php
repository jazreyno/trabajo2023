<?php

    require_once './app/modelo/modelo.usuarios.php';
    require_once './app/vista/vista.usuarios.php';

    class ControladorUsuarios{
        function mostrarUsuarios(){
        }
    }
    
  
    
    class ControladorUsurios{
        private $modelousuarios;
        private $vistausuarios;

        function __construct(){
            $this->modelousuarios = new ModeloUsuario();
            $this->vistausuarios = new VistaUsuarios();
        }

        function verUsuarios(){
            $usuarios=$this->modelousuarios->verUsuarios();
            $this->vistausuarios->Usuarios($usuarios);
        }
    }