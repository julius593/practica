<?php 
include_onde '../conexion.php';
$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$sql = "INSERT INTO usuarios (CI,Nombre, Apellido, Usuario ) VALUES('$CI','$Nombre','$Apellido','$Usuario',' )";

if($conn->query($sql) === TRUE){
    echo"Nuevo usuario creado exitosamente";
} else{
    echo"Error:". $sql. "<br>". $conn->error;
    
}
$conn->close();
?>