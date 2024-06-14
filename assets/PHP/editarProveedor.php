<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/editarProveedor.css">
    <link rel="icon" href="../images/Logo.ico">
    <title>Editar Proveedor</title>
</head>

<body>
    <?php
    $idproveedor = $_GET['idproveedor'];
    $proveedor = $_GET['proveedor'];
    $contacto = $_GET['contacto'];
    $celular = $_GET['celular'];
    $direccion = $_GET['direccion'];
    ?>

    <div>
        <form action="sp_editarProveedor.php?" method="post">
            <table>

                <tr>
                    <td><input type="hidden" name="idproveedor" id="" value="<?= $idproveedor ?>"></td>
                </tr>

                <tr>
                    <td>Proveedor</td>
                    <td><input type="text" name="proveedor" id="proveedor" value="<?= $proveedor ?>"></td>
                </tr>

                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="contacto" id="" value="<?= $contacto ?>"></td>
                </tr>

                <tr>
                    <td>Celular</td>
                    <td><input type="text" name="celular" id="" value="<?= $celular ?>"></td>
                </tr>

                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="direccion" id="" value="<?= $direccion ?>"></td>
                </tr>

                <tr>
                    <td>Fecha</td>
                    <td><input type="datetime-local" name="fecha" id="" value="<?= $fecha ?>"></td>
                </tr>

                <tr>
                    <td><input type="submit" value="Actualizar" name="insertar" class="actualizar"></td>

                    <td><a href="proveedores.php">BACK</a></td>
                </tr>


            </table>
        </form>

    </div>


</body>

</html>