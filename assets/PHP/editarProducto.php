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
    $idproducto = $_GET['idproducto'];

    include 'conexion1.php';
    $sql = "SELECT * FROM registroproductos WHERE idproducto='" . $idproducto . "'";
    $result = mysqli_query($conexion, $sql);

    if ($mostrar = mysqli_fetch_array($result)) {

        $tipo = $mostrar['tipo'];
        $nombre = $mostrar['nombre'];
        $descripcion = $mostrar['descripcion'];
        $precio = $mostrar['precio'];
    }
    ?>

    <div class="padre">
        <div class="hijo">
            <form action="sp_editarProducto.php?" method="post">
                <table>
                    <th>
                        <h2>Editar Cliente</h2>
                    </th>

                    <tr>
                        <td><input type="hidden" name="idproducto" id="" value="<?= $idproducto ?>"></td>
                    </tr>

                    <tr>
                        <td>Tipo</td>
                        <td><select type="text" name="tipo" id="tipo">
                                <option disabled <?=empty($tipo) ?>selected>Seleccionar</option>
                                <option value="Jugo" <?=$tipo==='Jugo'?>selected>Jugo</option>
                                <option value="Refreso" <?=$tipo==='Refresco'?>selected>Refresco</option>
                                <option value="Alimento" <?=$tipo==='Alimento'?>selected>Alimento</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="nombre" id="" value="<?= $nombre ?>" required="" pattern="[a-zA-Z\s]+"></td>
                    </tr>

                    <tr>
                        <td>Descripcion</td>
                        <td><input type="text" name="descripcion" id="" value="<?= $descripcion ?>" required="" pattern="[a-zA-Z\s]+"></td>
                    </tr>

                    <tr>
                        <td>Precio</td>
                        <td><input type="text" name="precio" id="" value="<?= $precio ?>" required="" pattern="^\d+(,\d+)?$"></td>
                    </tr>

                    <tr>
                        <td><input type="submit" value="Actualizar" name="insertar" class="actualizar"></td>

                        <td><a href="productos.php">Volver</a></td>
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