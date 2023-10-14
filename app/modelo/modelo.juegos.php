<?php 

class ModeloJuegos{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=trabajo_especial;charset=utf8', 'root', '');
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
    //INSERT INTO `videojuegos`(`id_videojuegos`, `nombre`, `genero`, `id_empresa`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    function agregarJuego($nombre,$genero,$empresa){
        $query=$this->db->prepare("INSERT INTO `videojuegos`(`videojuego`, `genero`, `id_empresa`) VALUES(?,?,?)");
        $query->execute([$nombre,$genero,$empresa]);

        return $this->db->lastInsertId();
    }

    function eliminarJuego($id){            
        $query = $this->db->prepare('DELETE FROM videojuegos WHERE id_videojuegos = ?'); //Verificar los nombres si estan bien.
        $query->execute([$id]);
    }

    
    function verJuegosId($id){
        $query =$this->db->prepare("SELECT * FROM videojuegos INNER JOIN companias on videojuegos.id_empresa = companias.id_empresa ");
        $query->execute([$id]);
        $videojuegos= $query->fetchAll(PDO::FETCH_OBJ);
        
          return $videojuegos;
        }
    }



?>

    
    ?>