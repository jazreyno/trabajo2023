<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class VistaEmpresa{

    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }

    function Empresas($empresa){
        $this->smarty->assign ("videojuegos",$empresa);
        $this->smarty->display("tablaEmpresas.tpl");
    }
    function Empresaid($id){

    }
    function eliminarEmpresa($id){

    }
    function isertarerror(){
        
    }
    function MostrarSelect($empresa){
        $this->smarty->assign ("empresa",$empresa);
        $this->smarty->display("AgregarVideojuegos.tpl");
       
    }
}
  

?>