<?php 
<<<<<<< HEAD
require_once './app/controlador/ControaldorJuegos.php';
require_once './app/controlador/ControaldorEmpresa.php';
=======

require_once './app/controlador/ControladorJuego.php';
require_once './app/controlador/ControladorEmpresa.php';
>>>>>>> 1c7ee3d9f2bf0d37826af74ccf0dda6932d0a1ef
require_once './app/controlador/ControladorUsuarios.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
<<<<<<< HEAD

$action = 'Empresas';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$controladorEmpresa = new ControladorEmpresa();
$controladorJuegos = new ControladorJuegos();
$controladorUsuarios = new ControladorUsuarios();

$params = explode('/', $action);

switch ($params[0]) {
    case 'empresas': 
        $controladorEmpresa -> mostrarEmpresa(); 
        break;
    case 'juegos': 
        $controladorJuegos -> mostrarJuegos(); 
        break;
    case 'usuarios':
        $controladorUsuarios -> mostrarUsuarios();
}



=======
   
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
        case 'agregar':
            $controlador = new ControladorVideojuegos();
            $controlador->agregarJuego();
                break; //Agregamos videojuegos?
        case 'eliminar':
            $controlador = new ControladorVideojuegos();
            $controlador->eliminarJuego($id);
            break;
        case 'empresas':
            $c="DSAD";
            $controlador = new ControladorEmpresa();
            $controlador->verEmpresa();                break;
        case 'usuario':
            $controlador = new ControladorUsurios();
            $controlador->verUsuarios();
            break;
    //las deqweqwe    
        case 'login':
            $controlador = new AuthController();
            //$controlador->mostrarLogin();
            break;
        case 'auth':
            $controlador = new AuthController();
            //$controlador->auth();
            break;
        case 'logout':
            $controlador = new AuthController();
           // $controlador->logout();
            break;
        default:
            echo "404 Page Not Found"; //cambiar obvio
            break;
        case 'VerVideojuego':
            $controladorViedeojuegos->VerVideojuegoId($params[1]);
            break;
    }
    

?>
>>>>>>> 2f9cc3154d60860a7d149a7ce7acd713f8bfc3fd
