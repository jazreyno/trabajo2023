<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class VistaJuegos{
  
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }

    function mostrarJuegos($videojuegos){
        $this->smarty->assign("videojuegos",$videojuegos);
        $this->smarty->display("TablaVideojuegos.tpl");
    }


    function verJuegosId($videojuegos){
            $this->smarty->assign("videojuegos",$videojuegos);
            $this->smarty->display("vervideojuego.tpl");
    }

    //EDITAR
    function mostrarEditar($videojuegos, $empresas){
        $this->smarty->assign("videojuegos", $videojuegos);
        $this->smarty->assign("empresas", $empresas);
        $this->smarty->display("editVideojuegos.tpl");    
    }

    function mostrarError($error = null){
        $this->smarty->assign("error", $error);
        $this->smarty->display("TablaVideojuegos.tpl");
    }
}

?>