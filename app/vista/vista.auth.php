<?php

class AuthVista{/*
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    
    //Vista si hay error
    public function mostrarLogin($error = null){
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/login.phtml');

       require 'templates/login.phtml';
    }*/

    public function mostrarLogin($error = null) {
        require './templates/login.phtml';
    }

}

?>