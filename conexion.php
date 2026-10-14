<?php
$servidor="";
$usuario="";
$contrasena="";
$database="";
$conexion = new msql($sservidor,$usuario,$contrasena,$databse);
if ($conexion->connect_error){
    die("ERROR".$conexion->connect_error);
}
$conexion->set_charset("utf8");
$conn=$conexion;
?>