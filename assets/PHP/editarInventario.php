<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/editarProducto.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Editar Producto</title>
</head>

<body>
    <!--HEADER-->
    <header>


        <nav>

            <ul>
                <li><img src="../images/Logo.jpg" alt="LogoFrutitec" height="35px" class="logo-nav"></li>
                <h4>Frutitec</h4>

                <li><a href="../PHP/menu.php"><i class="fa-solid fa-house"></i> Inicio</a></li>

                <li><a href="../PHP/productos.php"><i class="fa-brands fa-product-hunt"></i> Productos</a></li>

                <li><a href="../PHP/proveedores.php"><i class="fa-solid fa-truck"></i> Proveedores</a></li>

                <li><a href="../PHP/pedidos.php"><i class="fa-solid fa-utensils"></i> Pedidos</a></li>

                <li><a href="../PHP/inventario.php"><i class="fa-solid fa-clipboard"></i> Inventario</a></li>

                <li><a href="../PHP/ventas.php"><i class="fa-solid fa-dollar-sign"></i> Ventas</a></li>

                <li><a href="../PHP/clientes.php"><i class="fa-solid fa-user"></i> Clientes </a></li>
            </ul>


        </nav>
    </header>

    <?php
    $idProductoInventario = $_GET['idProductoInventario'];

    include 'conexion1.php';
    $sql = "SELECT * FROM inventario WHERE idProductoInventario='" . $idProductoInventario . "'";
    $result = mysqli_query($conexion, $sql);

    if ($mostrar = mysqli_fetch_array($result)) {

        $nombreProducto = $mostrar['nombreProducto'];
        $costo = $mostrar['costo'];
        $descripcion = $mostrar['descripcion'];
        $cantidad = $mostrar['cantidad'];
    }
    ?>

    <div class="padre">
        <div class="hijo">
            <form action="sp_editarInventario.php?" method="post">
                <table>
                    <th>
                        <h2>Editar Inventario</h2>
                    </th>

                    <tr>
                        <td><input type="hidden" name="idProductoInventario" id="" value="<?= $idProductoInventario ?>"></td>
                    </tr>

                    <tr>
                        <td>Nombre del Producto</td>
                        <td><input type="text" name="nombreProducto" id="" value="<?= $nombreProducto ?>" required="" pattern="[a-zA-Z\s]+">
                        </td>
                    </tr>

                    <tr>
                        <td>Costo</td>
                        <td><input type="text" name="costo" id="" value="<?= $costo ?>" required="" pattern="^\d+(,\d+)?$"></td>
                    </tr>

                    <tr>
                        <td>Descripcion</td>
                        <td><input type="text" name="descripcion" id="" value="<?= $descripcion ?>" required="" pattern="[a-zA-Z\s]+"></td>
                    </tr>

                    <tr>
                        <td>Cantidad</td>
                        <td><input type="text" name="cantidad" id="" value="<?= $cantidad ?>" required="" pattern="^\d+(,\d+)?$"></td>
                    </tr>

                    <tr>
                        <td><input type="submit" value="Actualizar" name="insertar" class="actualizar"></td>

                        <td><a href="inventario.php">Volver</a></td>
                    </tr>


                </table>
            </form>
        </div>

    </div>

    <!-- FOOTER -->
    <footer>
        <h3>Frutitec. Telefono 0426-8317573</h3>
        <strong>
            <p>&copy; Copyright 2024 - Todos los derechos reservados
        </strong>
    </footer>
    <!-- FIN DEL FOOTER -->


</body>

</html>