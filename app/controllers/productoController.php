<?php
// require_once(__DIR__ . '/../../public/index.php');
require_once(__DIR__ . '/../models/productos.php');

//despues le pasamos esa conexion a mi objeto Producto y mandamos a llamar el metodo de obetenerProductos
class ProductoController{
    //
    // private $conexion;

    // public function __construct($db)
    // {
    //     $this->conexion = $db;
    // }

    public function mostrarProductos($conexion)
    {
        $producto = new Producto($conexion);

        $productos = $producto->obtenerProductos();

        require_once(
    
            __DIR__ . '/../views/productos/productoView.php'
        );
    }

}

?>