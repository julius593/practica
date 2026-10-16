<?php 
include_once '../conexion.php';
$idci=$_POST['idci'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$sql = "INSERT INTO (ci,nombre, correo, contrasena ) VALUES('$ci','$nombre','$correo','$contrasena',' )";

if($conn->query($sql) === TRUE){
    echo"Nueva person< creado exitosamente";
} else{
    echo"Error:". $sql. "<br>". $conn->error;
    
}
$conexion->close();
?>