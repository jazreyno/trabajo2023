<?php 

    class ModeloUsuario{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=trabajo_especial;charset=utf8'); //revisar nombre dbname 
        
        }
        function verUsuarios(){
            
        }


    }
    ?>