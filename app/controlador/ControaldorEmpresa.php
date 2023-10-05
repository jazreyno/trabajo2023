<?php

    require_once './app/modelo/ModeloEmpresa.php';
    require_once './app/vista/VistaEmpresa.php';

class ControladorEmpresa{

    private $vista;
    private $modelo;

    function __construct()
    {
        $this->modelo=new ModeloEmpresa();
        $this->vista=new VistaEmpresa();
    }



    function verEmpresa(){

      $empresas = $this->modelo->verEmpresa();
      $this->vista->Empresas($empresas);

    }

}
?>