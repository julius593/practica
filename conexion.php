<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$database="practica";
$conexion = new msqli($servidor,$usuario,$contrasena,$databse);
if ($conexion->connect_error){
    die("ERROR".$conexion->connect_error);
}
$conexion->set_charset("utf8mb4");
$conn=$conexion;
?>