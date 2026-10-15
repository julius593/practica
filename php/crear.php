<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulario.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <form action="" method="post" id="formUsuarios" onsubmit="return values()">
<label for="CI">CI</label>
<input type="number" id="CI" >

<label for="NOMBRE Y APELLIDOS">NOMBRE Y APELLIDOS</label>
<input type="text" id="NOMBRE Y APELLIDOS" >

<label for="CORREO">CORREO</label>
<input type="e_mail" id="CORREO" >

<label for="CONTRASEÑA">CONTRASEÑA</label>
<input type="password" id="CONTRASEÑA" >
<input type="submit" value="registrar">
<input type="reset" value="borrar">
    </form>
    
</body>
</html>