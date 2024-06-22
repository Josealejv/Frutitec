<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/Css/index.css">
    <link rel="icon" href="./assets/images/Logo.ico">
    <title>Inicio de Sesion</title>

</head>

<body>

    <img src="./assets/images/Logo.jpg" height="35%" width="15%">

    <div class="Formulario">

        <h2>Inicio de Sesion</h2>
        <?php
        include("./assets/PHP/conexion1.php");
        include("./assets/PHP/controlador.php");
        ?>

        <form action="assets/PHP/loguear.php" method="post">

            <div class="correo">

                <input type="text" id="usuario" name="usuario"  >
                <label for="usuario">Nombre de usuario:</label>

            </div>

            <div class="Clave">

                <input type="password" id="clave" name="clave" >
                <label for="contrasena">Contraseña:</label>

            </div>

            <input type="submit" value="Iniciar sesión" name="ingresar">

        </form>

    </div>

</body>

</html>

</form>