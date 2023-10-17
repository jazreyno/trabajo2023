<?php 
    require_once './app/vista/vista.juegos.php';
    require_once './app/modelo/modelo.juegos.php';
    require_once './app/helpers/auth.helper.php';
    require_once './app/modelo/modelo.empresa.php';


    class ControladorVideojuegos{
        private $modelojuegos;
        private $modeloEmpresa;
        private $vistajuegos;
        private $helper;

        function __construct(){
            //agregar login
            //AuthHelper::verify();
            $this->modelojuegos=new ModeloJuegos();
            $this->vistajuegos=new VistaJuegos();
            $this->helper=new AuthHelper();
            $this->modeloEmpresa = new ModeloEmpresa();
        }

        function VerVideojuegos(){
            $this->helper->checkInicio();
            $videojuegos = $this->modelojuegos->verJuegos();
            $this->vistajuegos->mostrarJuegos($videojuegos);
        }

        function VerVideojuegoId($id){
            $this->helper->checkInicio();
            $videojuegos=$this->modelojuegos->verJuegosId($id);
            $this->vistajuegos->verJuegosId($videojuegos);
        }

        function agregarJuego(){
            $this->helper->checkLoggedIn();
            //Obtener datos del juego
            $nombre = $_POST['videojuego'];
            $genero = $_POST['genero'];
            $empresa = $_POST['id_empresa'];
           
            //Validacion
            if (empty($nombre) || empty($genero) || empty($empresa)) {
                $this->vistajuegos->mostrarError("Completar los campos vacios.");
                return;
            }

            $id = $this->modelojuegos->agregarJuego($nombre,$genero, $empresa);
            if($id) {
                header('Location: '. BASE_URL . "/videojuegos");
            } else {
                $this->vistajuegos->mostrarError("Error al insertar juego.");
            }
        }

        function eliminarJuego($id){
            $this->helper->checkLoggedIn();
            $this->modelojuegos->eliminarJuego($id);
            header('Location: '. BASE_URL . "/videojuegos");
        }

        ////////////////////
        //EDITAR VIDEOJUEGOS!
        ////////////////////

        function actualizarJuego(){
            
            $nombre = $_POST['videojuego_edit'];
            $genero = $_POST['genero_edit'];
            $empresa = $_POST['empresa_edit'];
            $id= $_POST['videojuego_id'];
            $this->modelojuegos->actualizarJuego($nombre, $genero, $empresa, $id);   

            header("Location: ". BASE_URL . "videojuegos");

        }
        

        function mostrarEditarJuegos($id){
            $this->helper->checkLoggedIn();
            $videojuegos = $this->modelojuegos->verJuegosId($id);
            $empresas = $this->modeloEmpresa->verEmpresa();
            $this->vistajuegos->mostrarEditar($videojuegos, $empresas);

        }

        

    }