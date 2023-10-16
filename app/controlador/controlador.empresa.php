<?php

    require_once './app/modelo/modelo.empresa.php';
    require_once './app/vista/vista.empresa.php';

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
     
        $this->modeloempresa->eliminarEmpresa($id);
        header('Location: '. BASE_URL . "empresas");
    }
    function agregarEmpresa(){
        $nombre=$_POST['nombre'];
        $cotizacion=$_POST['cotizacion'];
        $fecha=$_POST['fecha_creacion'];
        if(empty($nombre)|| empty($cotizacion)||empty($fecha)){
            $this->modeloempresa->insertarEmpresa($nombre,$cotizacion,$fecha);
            
          
        }
        else{
            $this->vistaempresa->isertarerror();
        }
        header('Location: '. BASE_URL . "empresas");
        
    }
    function MostrarSelect(){
            $empresa=$this->modeloempresa->verEmpresa();
            $this->vistaempresa->MostrarSelect($empresa);
    }
    function mostrareditEmpresa(){
        $empresa=$this->modeloempresa->verEmpresa();
        $this->vistaempresa->mostrareditEmpresa($empresa);
    }
    function editarEmpresa($id){
        $nombre_edit= $_POST['nombre_edit'];
        $cotizacion_edit= $_POST['cotizacion_edit'];
        $fecha_edit= $_POST['fecha_creacion_edit'];
        $this->modeloempresa->editarEmpresa($nombre_edit,$cotizacion_edit,$fecha_edit,$id);
        header('Location: '. BASE_URL . "empresas");

    }
    function editarForm($id){
        $empresa=$this->modeloempresa->verEmpresaId($id);
        $this->vistaempresa->editar($empresa);
    }
    
}
?>