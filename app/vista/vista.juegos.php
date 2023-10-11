<?php 

class VistaJuegos{

    function mostrarJuegos($videojuegos){
            $count = count($videojuegos);

            //mostramos el template lista de juegos
            require 'templates/listaJuegos.phtml';
    }

    public function mostrarError($error){
        require 'templates/error.phtml';
    }

}

?>