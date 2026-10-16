<?php 
include_once '../conexion.php';
$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$sql = "INSERT INTO formulario(ci,nombre, correo, contrasena ) VALUES(?,?,?,?)";

$stmt = $conexion->prepare($sql);
if (!$stmt) {
    die("Error en prepare: " . $conexion->error);
}

$stmt->bind_param("ssss", $ci, $nombre, $correo, $contrasena);

if ($stmt->execute()) {
    echo "Registro guardado";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conexion->close();
?>