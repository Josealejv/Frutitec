<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/inventario.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Clientes</title>
</head>

<body>
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

    <div class="container">
        <div class="inventario"><i class="fa-solid fa-clipboard"></i> Inventario</div>
    </div>

    <table>
                <tr>
                    <td>Nombre</td>
                    <td>Cantidad</td>
                    <td>Cantid</td>
                    <td>SubTotal</td>
                    <td>Quitar</td>
                </tr>

                <?php

                include 'conexion1.php';
                $sql = "SELECT * FROM registro_inventario";
                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {

                ?>

                    <tr class="tabla2">

                        <td><?php echo $mostrar['nombreproducto'] ?></td>
                        <td><?php echo $mostrar['precio'] ?></td>
                        <td><input type="number"></td>
                        <td></td>

                        <td><a href="eliminarPedido.php? idpedido=<?php echo $mostrar['idpedido'] ?>" class="eliminar"><i class="fa-solid fa-trash"></i> Quitar</a>
                        </td>

                    </tr>

                <?php
                }
                ?>
            </table>
    

    <footer>
        <h3>Frutitec. Telefono 0426-8317573</h3>
        <strong>
            <p>&copy; Copyright 2024 - Todos los derechos reservados
        </strong>
    </footer>

</body>

</html>