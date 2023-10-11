<?php 

require_once './app/controlador/controlador.juegos.php';
require_once './app/controlador/controlador.empresa.php';
require_once './app/controlador/controlador.usuarios.php';
require_once './app/controlador/controlador.auth.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
   
    $action = 'videojuegos';
    if(!empty($_GET['action'])){
        $action=$_GET['action'];
    }

        /*$controladorEmpresa= new ControladorEmpresa();
    $controladorViedeojuegos= new ControladorVideojuegos();
    $controladorUsuarios= new ControladorUsurios();*/
    
    $params = explode('/', $action);

    switch($params[0]) {
        case 'videojuegos':
            $controlador = new ControladorVideojuegos();
            $controlador->VerVideojuegos();
            break;
        case 'videojuegoId':
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
        case 'eliminar':
            $controlador = new ControladorVideojuegos();
            $controlador->eliminarJuego($id);
            break;
case 'eliminarEmpresa':
            $controlador=new ControladorEmpresa();
            $controlador->eliminarEmpresa($params[1]);
            break;
        case 'agregarEmpresa':
            $controlador=new ControladorEmpresa();
            $controlador->agregarEmpresa($params[1]);
            break;

        case 'empresas':
            $controlador = new ControladorEmpresa();
            $controlador->verEmpresa();                
            break;
        case 'usuario':
            $controlador = new ControladorUsurios();
            $controlador->verUsuarios();
            break;   
        case 'login':
            $controlador = new AuthController();
            $controlador->mostrarLogin();
            break;
        case 'auth':
            $controlador = new AuthController();
            $controlador->auth();
            break;
        case 'logout':
            $controlador = new AuthController();
            $controlador->logout();
        default:
            echo "404 Page Not Found"; //cambiar 
            break;
    }
    

?>
