<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class VistaEmpresa{

    private $smarty;

    function __construct(){
        $this->smarty=new Smarty();
    }

    function Empresas($empresa){
        $this->smarty->assign("empresa",$empresa);
        $this->smarty->display("TablaEmpresa.tpl");
    }

    function Empresaid($id){
        
    }
    
    function MostrarSelect($empresa){
        $this->smarty->assign ("empresa",$empresa);
        $this->smarty->display("AgregarVideojuegos.tpl");
    }

    function mostrareditEmpresa($empresa){
        $this->smarty->assign ("empresa",$empresa);
        $this->smarty->display("editVideojuegos2.tpl");
    }
    
     function editar($empresa){
        $this->smarty->assign ("empresa",$empresa);
        $this->smarty->display("editEmpresa.tpl");
     }

    function mostrarError($error = null){
        $this->smarty->assign("error", $error);
        $this->smarty->display("TablaEmpresa.tpl");
    }

}
  

?>