<?php 

    class ModeloEmpresa{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=trabajo_especial;charset=utf8'); 
        
        }

        //ObtenerEmpresa()
        function verEmpresa(){    
            $query =$this->db->prepare('SELECT * FROM companias');
            $query->execute();
            $empresas= $query->fetchAll(PDO::FETCH_OBJ);

          return $empresas;
        }
        function verEmpresaId($id){
            $query=$this->db->prepare("SELECT * FROM companias  WHERE id_empresa = ? ");
            $query->execute([$id]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        function eliminarEmpresa($id){
            $query=$this->db->prepare("DELETE FROM companias WHERE id_empresa = ?  ");
            $query->execute([$id]);
            
        }
        }


    
    ?>