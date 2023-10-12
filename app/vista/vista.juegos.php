<?php 

class VistaJuegos{

    function mostrarJuegos($videojuegos){
    $count = count($videojuegos);
       
    
    require_once 'templates/listaJuegos.phtml';
    //include 'templates/form_tienda.phtml';
    }

    public function mostrarError($error){
        require 'templates/error.phtml';
    }

}

?>