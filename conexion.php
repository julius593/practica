<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$database = "practica";

$conexion = new mysqli($servidor, $usuario, $contrasena, $database);

if ($conexion->connect_error) {
    die("ERROR: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
$conn = $conexion;
?>