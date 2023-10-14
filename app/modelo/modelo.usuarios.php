<?php 

    class ModeloUsuario{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=trabajo_especial;charset=utf8', 'root', '');
        }

        function verUsuarios(){
            $query =$this->db->prepare('SELECT * FROM usuario');
            $query->execute();
            $usuario= $query->fetchAll(PDO::FETCH_OBJ);
         
              return $usuario;
            //
        }

        //OBTENEMOS USUARIOS POR EMAIL quitar el *
        public function obtenerPorEmail($usuario){
            $query = $this->db->prepare('SELECT * FROM usuario WHERE usuario = ?');
            $query->execute([$usuario]);
            return $query->fetch(PDO::FETCH_OBJ);
        }


    }
    ?>