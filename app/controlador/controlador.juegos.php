<?php 

    require_once './app/modelo/modelo.juegos.php';
    require_once './app/vista/vista.juegos.php';
   
    class ControladorVideojuegos{
        private $modelojuegos;
        private $vistajuegos;

        function __construct(){
            //agregar login
            //AuthHelper::verify();

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
            $nombre = $_POST['nombre'];
            $genero = $_POST['genero'];
            $empresa = $_POST['id_empresa'];
            var_dump($empresa);

            //Validacion
            if (empty($nombre) || empty($genero) || empty($empresa)) {
                $this->vistajuegos->mostrarError("Completar los campos vacios.");
                return;
            }

            $id = $this->modelojuegos->agregarJuego($nombre,$genero, $empresa);
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