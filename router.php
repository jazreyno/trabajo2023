<?php 

require_once './app/controlador/controlador.juegos.php';
require_once './app/controlador/controlador.empresa.php';
require_once './app/controlador/controlador.auth.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
   
    $action = 'videojuegos';
    if(!empty($_GET['action'])){
        $action=$_GET['action'];
    }

    $params = explode('/', $action);


    switch($params[0]) {
        case 'videojuegos':
            $controladorVideojuegos = new ControladorVideojuegos();
            $controladorEmpresa = new ControladorEmpresa();
            $controladorEmpresa->MostrarSelect();
            $controladorVideojuegos->VerVideojuegos();
            break;
        case 'videojuegoid':
            $controlador = new ControladorVideojuegos();
            $controlador->VerVideojuegoId($params[1]);
            break;
        case 'verEmpresaId':
            $controlador=new ControladorEmpresa();
            $controlador->JuegosPorEmpresa($params[1]);
            break;
        case 'agregar':
            $controlador = new ControladorVideojuegos();
            $controlador->agregarJuego();
                break; 
        case 'eliminarVideojuego':
            $controlador = new ControladorVideojuegos();
            $id=$params[1];
            $controlador->eliminarJuego($id);
            break;
        case 'eliminarEmpresa':
            $controlador=new ControladorEmpresa();
            $controlador->eliminarEmpresa($params[1]);
            break;
        case 'agregarEmpresa':
            $controlador=new ControladorEmpresa();
            $controlador->agregarEmpresa();
            break;
        case 'empresas':
            $controlador = new ControladorEmpresa();
            $controlador->verEmpresa();                
            break;
        case 'login':
            $controlador = new AuthController();
            $controlador->mostrarLogin();
            break;
        case 'auth':
            $controlador = new AuthController();
            $controlador->auth();
            break;/*
        case 'editarvideojuegos':
            $controlador=new ControladorVideojuegos();
            $controlador->actualizarJuego($params[1]);
            break;*/
        case 'editarVideojuegosform':
            $controladorVideojuegos=new ControladorVideojuegos;
            //$controladorEmpresa=new ControladorEmpresa;
            $controladorVideojuegos->mostrarEditarJuegos($params[1]);
            //$controladorEmpresa->mostrareditEmpresa($params[1]);
            break;
        case 'actualizarJuego':
            $controladorVideojuegos=new ControladorVideojuegos;
            $controladorVideojuegos->actualizarJuego(); 
        
        
       case 'editarEmpresa':
            $controlador=new ControladorEmpresa;
            $controlador->editarEmpresa($params[1]);
            break;
        case 'editarEmpresaform':
            $controlador=new ControladorEmpresa;
            $controlador->editarForm($params[1]);
            break;
        case 'logout':
            $controlador = new AuthController();
            $controlador->logout();
        default:
            echo "404 Page Not Fousnd"; //cambiar 
            break;
    }
    

?>
