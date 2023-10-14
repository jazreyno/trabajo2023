<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class VistaJuegos{
  
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }
    function mostrarJuegos($videojuegos){
        $this->smarty->assign ("videojuegos",$videojuegos);
        $this->smarty->display("TablaVideojuegos.tpl");
    }

    public function mostrarError($error){
        require 'templates/error.phtml';
    }
    function verJuegosId($videojuegos){
        {
            $this->smarty->assign ("videojuegos",$videojuegos);
            $this->smarty->display("vervideojuego.tpl");
        
        }
       

    }

}

?>