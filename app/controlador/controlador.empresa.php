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

}
?>