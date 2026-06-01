<?php

//Borrar ya que solo fue para confirmar la conexion
include("app/config/db.php");

$db = new Database;

$conexion = $db->conectar();
?>