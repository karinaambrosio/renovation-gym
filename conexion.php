<?php
$conexion = new mysqli("localhost", "root", "", "renovation_gym");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
