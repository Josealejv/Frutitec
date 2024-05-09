<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/proveedores.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Proveedores</title>
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
        <div class="proveedores"><i class="fa-solid fa-truck"></i> Lista de Proveedores</div>
        <div class="añadir"><a href="nuevoProveedor.php"><i class="fa-solid fa-plus"></i> Añadir Proveedor</a></div>
    </div>

    <table>
        <tr class="pri">
            <td>Proveedor</td>
            <td>Contacto</td>
            <td>Celular</td>
            <td>Direccion</td>
            <td>Fecha</td>
            <td>Acciones</td>
        </tr>

        <?php

        include 'conexion1.php';
        $sql = "SELECT * FROM registro_proveedores";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {

        ?>

            <tr class="tabla2">

                <td><?php echo $mostrar['proveedor'] ?></td>
                <td><?php echo $mostrar['contacto'] ?></td>
                <td><?php echo $mostrar['celular'] ?></td>
                <td><?php echo $mostrar['direccion'] ?></td>
                <td><?php echo $mostrar['fecha']?></td>

                <td><a href="editarProveedor.php?
                     idproveedor=<?php echo $mostrar['idproveedor'] ?>&
                     proveedor=<?php echo $mostrar['proveedor'] ?>&
                     contacto=<?php echo $mostrar['contacto'] ?>&
                     celular=<?php echo $mostrar['celular'] ?>&
                     direccion=<?php echo $mostrar['direccion'] ?>&
                     fecha=<?php echo $mostrar['fecha'] ?>&
        
                     " class="editar"><i class="fa-solid fa-pen"></i> Editar</a>

                    <a href="eliminarProveedor.php? idproveedor=<?php echo $mostrar['idproveedor'] ?>" class="eliminar"><i class="fa-solid fa-trash"></i> Eliminar</a>
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

    <!-- <div class="seccion">
        Nombre<input type="text">
        Producto<input type="text">
    </div>

    <div class="seccion2">
        Cantidad<input type="age">
        Fecha<input type="datetime-local">
    </div> -->


</body>

</html>