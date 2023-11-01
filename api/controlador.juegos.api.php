<?php
    require_once './app/modelo/modelo.juegos.php'; 
    require_once './api/json.vista.php';

    class controladorJuegosApi{
        private $modelo;
        private $vista;

        public function __construct(){
            $this->modelo = new ModeloJuegos();
            $this->vista = new VistaApi();
        }
        


    }