<?php 

    class ModeloUsuario{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=trabajo_especial;charset=utf8'); //revisar nombre dbname 
        
        }
        function verUsuarios(){
            $query =$this->db->prepare("SELECT * FROM usuario");
            $query->execute();
            $usuario= $query->fetchAll(PDO::FETCH_OBJ);
         
              return $usuario;
            
        }


    }
    ?>