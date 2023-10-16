<?php 

    class ModeloEmpresa{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=trabajo_especial;charset=utf8', 'root', '');
        
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
            $query=$this->db->prepare("DELETE FROM `companias` WHERE id_empresa = ?  ");
            $query->execute([$id]);
        }
        
        function insertarEmpresa($nombre,$cotizacion,$fecha){
            $query=$this->db->prepare("INSERT INTO companias (nombre,cotizacion,fecha_creacion) VALUES (?,?,?)");
            $query->execute([$nombre, $cotizacion, $fecha]);
            return $this->db->lastInsertId();
        }

        
        function editarEmpresa($nombre_edit,$cotizacion_edit,$fecha_edit,$id_empresa){
            $query=$this->db->prepare("UPDATE `companias` SET nombre = ?,cotizacion = ?, fecha_creacion= ? WHERE id_empresa = ?");
            $query->execute([$nombre_edit,$cotizacion_edit,$fecha_edit,$id_empresa]);
        }
        }


    
    ?>