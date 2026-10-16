<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="formulario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <form action="casacrear.php" method="post" id="formUsuarios" onsubmit="return validar()" >
<div>
        <label for="ci">CI</label>
        <input type="text" id="ci" name="ci" >
</div>
<div>
        <label for="nombre">NOMBRE Y APELLIDOS</label>
        <input type="text" id="nombre" name="nombre">
        </div>
<div>
        <label for="correo">CORREO</label>
        <input type="text" id="correo" name="correo">
        </div>
<div>
        <label for="contrasena">CONTRASEÑA</label>
        <input type="password" id="contrasena"name="contrasena">
        </div>

        <input type="submit" value="REGISTRAR">
        <input type="reset" value="BORRAR">
    
    </form>

    
    <script src="../js/crear.js"></script>
</body>
</html>