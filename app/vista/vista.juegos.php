<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class VistaJuegos{
  
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }
    function mostrarJuegos($videojuegos){
    //$count = count($videojuegos);
       
    
   
    $this->smarty->assign ("videojuegos",$videojuegos);
    $this->smarty->display("tablaVideojuegos.tpl");
    }

    public function mostrarError($error){
        require 'templates/error.phtml';
    }

}

?>