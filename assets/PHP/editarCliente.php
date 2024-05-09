<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/editarCliente.css">
    <link rel="icon" href="../images/Logo.ico">
    <title>Editar</title>
</head>

<body>
    <?php
    $idcliente = $_GET['idcliente'];
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $celular = $_GET['celular'];

    ?>

    <div>
        <form action="sp_editarCliente.php?" method="post">
            <table>

                <tr>
                    <td><input type="hidden" name="idcliente" id="" value="<?= $idcliente ?>"></td>
                </tr>

                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="" value="<?= $nombre ?>"></td>
                </tr>

                <tr>
                    <td>Correo</td>
                    <td><input type="text" name="correo" id="" value="<?= $correo ?>"></td>
                </tr>

                <tr>
                    <td>Celular</td>
                    <td><input type="text" name="celular" id="" value="<?= $celular ?>"></td>
                </tr>

                <tr>
                    <td><input type="submit" value="Actualizar" name="insertar" class="actualizar"></td>

                    <td><a href="clientes.php">BACK</a></td>
                </tr>


            </table>
        </form>

    </div>


</body>

</html>