<?php

class ModeloUsuario{

    private $db;

    function __construct()
    {
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=trabajo_especial;charset=utf8', 'root', '');
    }
     
    function traerUsuariosEmail($email){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE email=?");
        $sentencia->execute([$email]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    
   
      
}

?>