<?php 

    require_once './app/modelo/ModeloJuegos.php';
    require_once './app/vista/VistaJuegos.php';
   
    class ControladorVideojuegos{

        private $modelojuegos;
        private $vistajuegos;

        function __construct()
    {
        $this->modelojuegos=new ModeloJuegos();
        $this->vistajuegos=new VistaJuegos();
    }

        function VerVideojuegos(){
            $videojuegos= $this->modelojuegos->verJuegos();
            $this->vistajuegos->juegos($videojuegos);
        }
        function instertarJuegos(){
            $videojuegos = $_POST['nombre'];
            $genero=$_POST['genero'];
           // $empresa=$_POST['id_empresa'];
            $this->modelojuegos->insertarJuegos($videojuegos,$genero);
        }

    }