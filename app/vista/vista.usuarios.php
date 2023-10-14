<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class VistaUsuarios{
    private $smarty;


    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function mostrarLogin($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/login.phtml');
    }
   

    
    function Usuarios($id){

    }

}

?>