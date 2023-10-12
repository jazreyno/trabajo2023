<?php 

class VistaJuegos{

    function mostrarJuegos($videojuegos){
    //$count = count($videojuegos);
       
    
   
    require_once 'templates/form_tienda.phtml';
    require_once 'templates/listaJuegos.phtml';
    }

    public function mostrarError($error){
        require 'templates/error.phtml';
    }

}

?>