<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/nuevoUsuario.css">
    <link rel="icon" href="../images/Logo.ico">
    <title>Nuevo Usuario</title>
</head>

<body>
    <div class="formulario">
        <form action="sp_anadirUsuario.php" method="post">
            <h1>Registrate</h1>

            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <input type="text" name="apellido" id="apellido" placeholder="Apellido"><br>

            <input type="text" name="usuario" id="usuario" placeholder="Usuario"><br>
            <input type="text" name="contrasena" id="contrasena" placeholder="Contraseña"><br>

            <input type="submit" value="Registrar" name="insertar" class="btn">
        </form>
    </div>

</body>

</html>