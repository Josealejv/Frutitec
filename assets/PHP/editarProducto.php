<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/editarProducto.css">
    <link rel="icon" href="../images/Logo.ico">
    <title>Editar Producto</title>
</head>

<body>
    <?php
    $idproducto = $_GET['idproducto'];
    $tipo = $_GET['tipo'];
    $nombre = $_GET['nombre'];
    $descripcion = $_GET['descripcion'];
    $precio = $_GET['precio'];

    ?>

    <div>
        <form action="sp_editarProducto.php?" method="post">
            <table>

                <tr>
                    <td><input type="hidden" name="idproducto" id="" value="<?= $idproducto ?>"></td>
                </tr>

                <tr>
                    <td>Tipo</td>
                    <td><select type="text" name="tipo" id="tipo" value="<?= $tipo ?>">
                            <option disabled selected>Seleccionar</option>
                            <option>Bebida</option>
                            <option>Alimento</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="" value="<?= $nombre ?>"></td>
                </tr>

                <tr>
                    <td>Descripcion</td>
                    <td><input type="text" name="descripcion" id="" value="<?= $descripcion ?>"></td>
                </tr>

                <tr>
                    <td>Precio</td>
                    <td><input type="text" name="precio" id="" value="<?= $precio ?>"></td>
                </tr>

                <tr>
                    <td><input type="submit" value="Actualizar" name="insertar" class="actualizar"></td>

                    <td><a href="productos.php">BACK</a></td>
                </tr>


            </table>
        </form>

    </div>


</body>

</html>