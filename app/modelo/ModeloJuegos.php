<?php 

    class ModeloJuegos{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=trabajo_especial;charset=utf8');
        }

        //Creo que mejor deberia llamarse obtenerJuegos 
        function verJuegos(){
            $query = $this->db->prepare('SELECT * FROM videojuegos INNER JOIN companias  on videojuegos.id_empresa = companias.id_empresa ');
            $query->execute();

            //Obtengo arreglo de juegos
            $videojuegos= $query->fetchAll(PDO::FETCH_OBJ);
            
              return $videojuegos;
        }

        //Agregamos juegos a la base de datos.
        function agregarJuego($videojuegos,$genero){
            $query=$this->db->prepare('INSERT INTO videojuegos(videojuegos,genero) VALUES(?,?)');
            $query->execute([$videojuegos,$genero]);

            return $this->db->lastInsertId();
        }

        function eliminarJuego($id){            
            $query = $this->db->prepare('DELETE FROM videojuegos WHERE id_videojuegos = ?'); //Verificar los nombres si etan bien.
            $query->execute([$id]);
        }


        }


    
    ?>