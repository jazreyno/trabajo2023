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
            
        }

        //OBTENEMOS USUARIOS POR EMAIL?
        public function obtenerPorEmail($email){
            $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
            $query->execute([$email]);

            return $query->fetch(PDO::FETCH_OBJ);
        }


    }
    ?>