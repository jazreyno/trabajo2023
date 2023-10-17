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

    $controladorVideojuegos = new ControladorVideojuegos();
    $controladorEmpresa = new ControladorEmpresa();
    $controladorUsuario = new controladorUsuarios();

    switch($params[0]) {
        case 'videojuegos':
            $controladorEmpresa->MostrarSelect();
            $controladorVideojuegos->VerVideojuegos();
            break;
        case 'videojuegoid':
            $controladorVideojuegos->VerVideojuegoId($params[1]);
            break;
        case 'verEmpresaId':
            $controladorEmpresa->JuegosPorEmpresa($params[1]);
            break;
        case 'agregar':
            $controladorVideojuegos->agregarJuego();
                break; 
        case 'eliminarVideojuego':
            $controladorVideojuegos->eliminarJuego($params[1]);
            break;
        case 'eliminarEmpresa':
            $controladorEmpresa->eliminarEmpresa($params[1]);
            break;
        case 'agregarEmpresa':
            $controladorEmpresa->agregarEmpresa();
            break;
        case 'empresas':
            $controladorEmpresa->verEmpresa();                
            break;
        case 'login':
            $controladorUsuario->vistaLogin();
            break;
        case 'validar':
            $controladorUsuario->validarUsuario();
            break;
        case 'logout':
            $controladorUsuario->logout();
            break;
        case 'editarVideojuegosform':
            $controladorVideojuegos->mostrarEditarJuegos($params[1]);
            break;
        case 'actualizarJuego':
            $controladorVideojuegos->actualizarJuego($params[1]); 
            break;
       case 'editarEmpresa':
            $controladorEmpresa->editarEmpresa($params[1]);
            break;
        case 'editarEmpresaform':
            $controladorEmpresa->editarForm($params[1]);
            break;
        default:
        header('Location: 404.php');
        break;
    }
    

?>
