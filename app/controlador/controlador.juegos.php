<?php 

    require_once './app/modelo/ModeloJuegos.php';
    require_once './app/vista/VistaJuegos.php';
   
    class ControladorVideojuegos{
        private $modelojuegos;
        private $vistajuegos;

        function __construct(){
            //agregar login
            AuthHelper::verify();

            $this->modelojuegos=new ModeloJuegos();
            $this->vistajuegos=new VistaJuegos();
        }

        function VerVideojuegos(){
            $videojuegos = $this->modelojuegos->verJuegos();
            $this->vistajuegos->mostrarJuegos($videojuegos);
        }

        function VerVideojuegoId($id){
            $videojuegos=$this->modelojuegos->verJuegosId($id);
            $this->modelojuegos->verJuegosId($videojuegos);
        }

        function agregarJuego(){
            //Obtener datos del juego
            $videojuegos = $_POST['nombre'];
            $genero = $_POST['genero'];

            //Validacion
            if (empty($videojuegos) || empty($genero)) {
                $this->vistajuegos->mostrarError("Completar los campos vacios.");
                return;
            }

           // $empresa=$_POST['id_empresa'];
           
            $id = $this->modelojuegos->agregarJuego($videojuegos,$genero);
            if($id) {
                header('Location: '. BASE_URL);
            } else {
                $this->vistajuegos->mostrarError("Error al insertar juego.");
            }
        }

        function eliminarJuego($id){
            $this->modelojuegos->eliminarJuego($id);
            header('Location: '.BASE_URL);
        }

        

    }