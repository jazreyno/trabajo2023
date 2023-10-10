<?php

    require_once './app/modelo/ModeloUsuarios.php';
    require_once './app/vista/VistaUsuarios.php';
<<<<<<< HEAD

    class ControladorUsuarios{
        function mostrarUsuarios(){
            
=======
    
  
    
    class ControladorUsurios{
        private $modelousuarios;
        private $vistausuarios;

        function __construct(){
            $this->modelousuarios=new ModeloUsuario();
            $this->vistausuarios=new VistaUsuarios();
        }

        function verUsuarios(){
            $usuarios=$this->modelousuarios->verUsuarios();
            $this->vistausuarios->Usuarios($usuarios);
>>>>>>> 2f9cc3154d60860a7d149a7ce7acd713f8bfc3fd
        }
    }