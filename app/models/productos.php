<?php

// require_once(__DIR__ . '/../config/db.php'); //ya no se necesita porque se manda la conexion desde el index en __construc($db)


class Producto{
    //propiedades
    private $conexion; //el objeto PDO ya conectado (new Database)

    // public $nombre_producto;
    // public $producto_activo;
    // public $precio;

    //el constructor obtiene la conexion
    public function __construct($db) //la conexion se recibe desde el metodo del controller
    {
        $this->conexion = $db;
    }
    //metodos como obtener/agregar/eliminar etc

    public function obtenerProductos(){
        //mi consulta
        $query = "SELECT * FROM productos";
        //prepare()
        $statement = $this->conexion->prepare($query);
        //execute() ejecuta la query
        $statement->execute();
        //fetch()
        return($statement->fetchAll()); //En el controller lo pasamos a la variable 'productos'
    }

}

?>
