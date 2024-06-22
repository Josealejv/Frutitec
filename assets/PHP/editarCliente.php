<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/editarCliente.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Editar</title>
</head>

<header>
    <nav>
        <ul class="menu-screen">
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
<!-- FIN DEL MENU DE NAVEGACION -->


<body>
    <?php
    $idcliente = $_GET['idcliente'];
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $celular = $_GET['celular'];

    ?>

    <div class="padre">
        <div class="hijo">
            <form action="sp_editarCliente.php?" method="post">
                <table>

                    <th>
                        <h2>Editar Producto</h2>
                    </th>
                    
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