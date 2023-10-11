<?php

    require_once './app/modelo/ModeloEmpresa.php';
    require_once './app/vista/VistaEmpresa.php';

class ControladorEmpresa{

    private $vistaempresa;
    private $modeloempresa;

    function __construct()
    {
        $this->modeloempresa=new ModeloEmpresa();
        $this->vistaempresa=new VistaEmpresa();

    }

    function verEmpresa(){

      $empresas = $this->modeloempresa->verEmpresa();
      $this->vistaempresa->Empresas($empresas);

    }
    function JuegosPorEmpresa($id){
        $empresa= $this ->modeloempresa->verEmpresaId($id);
        $this->vistaempresa->Empresaid($empresa);
    }
    function eliminarEmpresa($id){
        $empresa=$this->modeloempresa->eliminarEmpresa($id);
        $this->vistaempresa->eliminarEmpresa($empresa);
    }

}
?>