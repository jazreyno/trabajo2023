<?php

class AuthVista{
    //Vista si hay error
    public function mostrarLogin($error = null){
        require 'templates/login.phtml';
    }
}

?>