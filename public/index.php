<?php
include_once(__DIR__ . '/../app/config/db.php'); 
// include_once(__DIR__ . '/../app/models/productos.php'); 

include_once(__DIR__ . '/../app/controllers/productoController.php'); 

//aqui index esta creando un objeto Database y haciendo la conexion
$db = new Database();
$conexion = $db->conectar(); //$conexion tiene el Data Source Name

$controller = new ProductoController(); 
$controller->mostrarProductos($conexion);

// echo 'hola';
?>