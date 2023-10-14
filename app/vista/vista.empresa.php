<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class VistaEmpresa{

    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }

    function Empresas($empresa){
        $this->smarty->assign ("empresa",$empresa);
        $this->smarty->display("tablaempresa.tpl");
    }
    function Empresaid($id){

    }
    function isertarerror(){
        
    }
    function MostrarSelect($empresa){
        $this->smarty->assign ("empresa",$empresa);
        $this->smarty->display("AgregarVideojuegos.tpl");
       
    }
}
  

?>