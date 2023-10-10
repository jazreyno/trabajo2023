<?php 

require_once './app/controlador/ControladorJuego.php';
require_once './app/controlador/ControladorEmpresa.php';
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
        case 'VerVideojuego':
            $controladorViedeojuegos->VerVideojuegoId($params[1]);
            break;
    }
    

?>
>>>>>>> 2f9cc3154d60860a7d149a7ce7acd713f8bfc3fd
