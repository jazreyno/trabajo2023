<?php 

require_once './app/controlador/ControaldorJuegos.php';
require_once './app/controlador/ControaldorEmpresa.php';
require_once './app/controlador/ControladorUsuarios.php';




define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
   

    if(!empty($_GET['action'])){
        $action=$_GET['action'];
    }
    $controladorEmpresa= new ControladorEmpresa();
    $controladorViedeojuegos= new ControladorVideojuegos();
    $controladorUsuarios= new ControladorUsurios();
    
    $params=explode('/',$action);
    switch($params[0]){

        case 'home':
            $controladorEmpresa ->verEmpresa();
            break;
        case 'videojuegos':
            $controladorViedeojuegos -> VerVideojuegos();
            break;
        case 'usuario':
            $controladorUsuarios->verusuarios();
            break;
    }
    

?>