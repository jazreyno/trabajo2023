<?php

    require_once './app/modelo/ModeloUsuarios.php';
    require_once './app/vista/VistaUsuarios.php';
    
  
    
    class ControladorUsurios{
        private $modelousuarios;
        private $vistausuarios;

        function __construct()
        {
            $this->modelousuarios=new ModeloUsuario();
            $this->vistausuarios=new VistaUsuarios();
        }

        function verusuarios(){
            $usuarios=$this->modelousuarios->verUsuarios();
            $this->vistausuarios->Usuarios($usuarios);
        }
    }