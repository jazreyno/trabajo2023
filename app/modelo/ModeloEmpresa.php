<?php 

    class ModeloEmpresa{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=trabajo_especial;charset=utf8'); //revisar nombre dbname 
        
        }
        function verEmpresa(){
            
        $query =$this->db->prepare("SELECT * FROM companias");
        $query->execute();
        $empresas= $query->fetchAll(PDO::FETCH_OBJ);
     
          return $empresas;
        }
        }


    
    ?>