<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/productos.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Productos</title>
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
        <div class="productos"><i class="fa-brands fa-product-hunt"></i> Productos</div>
        <div class="añadir"><a href="nuevoProducto.php"><i class="fa-solid fa-plus"></i> Añadir Producto</a></div>
    </div>

    <div class="main">
        <table>
            <tr>
                <td></td>
                <td>Tipo</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Acciones</td>
            </tr>

            <?php

            include 'conexion1.php';
            $sql = "SELECT * FROM registroproductos";
            $result = mysqli_query($conexion, $sql);

            while ($mostrar = mysqli_fetch_array($result)) {

            ?>

                <tr class="tabla2">

                    <td></td>
                    <td><?php echo $mostrar['tipo'] ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['descripcion'] ?></td>

                    <td><a href="editarProducto.php?
                     idproducto=<?php echo $mostrar['idproducto'] ?>&
                     tipo=<?php echo $mostrar['tipo'] ?>&
                     nombre=<?php echo $mostrar['nombre'] ?>&
                     descripcion=<?php echo $mostrar['descripcion'] ?>&
        
                     " class="editar"><i class="fa-solid fa-pen"></i> Editar</a>

                        <a href="eliminar.php? idproducto=<?php echo $mostrar['idproducto'] ?>" class="eliminar"><i class="fa-solid fa-trash"></i> Eliminar</a>
                    </td>

                </tr>

            <?php
            }
            ?>

        </table>
    </div>

    <footer>
        <h3>Frutitec. Telefono 0426-8317573</h3>
        <strong>
            <p>&copy; Copyright 2024 - Todos los derechos reservados
        </strong>
    </footer>


    <!-- <div class="seccion">
        Productos:<input type="text">
        Fecha De Compra:<input type="datetime-local">
        Fecha De Vencimiento:<input type="datetime-local">
    </div> -->

</body>

</html>