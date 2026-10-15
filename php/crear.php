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
    <style>
        input.invalido { border: 2px solid #dc3545; }
    </style>
</head>
<body>
    <form action="insertarusuario.php" method="post" id="formUsuarios" onsubmit="return validar()" novalidate>

        <label for="ci">CI</label>
        <input type="text" id="ci" name="CI" inputmode="numeric">

        <label for="nombre">NOMBRE Y APELLIDOS</label>
        <input type="text" id="nombre" name="Nombre">

        <label for="correo">CORREO</label>
        <input type="email" id="correo" name="Correo">

        <label for="contrasena">CONTRASEÑA</label>
        <input type="password" id="contrasena" name="Contrasena">

        <input type="submit" value="REGISTRAR">
        <input type="reset" value="BORRAR">
    </form>

    <script src="crear.js"></script>
</body>
</html>