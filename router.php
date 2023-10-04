<?php 

require_once './app/controlador/ControladorJuego.php';
require_once './app/controlador/ControladorEmpresa.php';
require_once './app/controlador/ControladorUsuarios.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

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



