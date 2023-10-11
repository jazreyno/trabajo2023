<?php 

class VistaJuegos{

    function mostrarJuegos($juegos){
            $count = count($juegos);

            //mostramos el template lista de juegos
            require 'templates/listaJuegos.phtml';
    }

    public function mostrarError($error){
        require 'templates/error.phtml';
    }

}

?>