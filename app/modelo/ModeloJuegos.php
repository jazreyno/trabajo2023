<?php 

    class ModeloJuegos{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=trabajo_especial;charset=utf8'); //revisar nombre dbname 
        
        }
        function verJuegos(){
            $query =$this->db->prepare("SELECT * FROM videojuegos INNER JOIN companias  on videojuegos.id_empresa = companias.id_empresa ");
            $query->execute();
            $videojuegos= $query->fetchAll(PDO::FETCH_OBJ);
            
              return $videojuegos;
            }
        function insertarJuegos($videojuegos,$genero){
            $query=$this->db->prepare("INSERT INTO ");
        }
        
        function verJuegosid($id){
            $query =$this->db->prepare("SELECT * FROM videojuegos INNER JOIN companias  on videojuegos.id_empresa = companias.id_empresa ");
            $query->execute([$id]);
            $videojuegos= $query->fetchAll(PDO::FETCH_OBJ);
            
              return $videojuegos;
            }
        }


    
    ?>