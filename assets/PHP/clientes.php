<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/clientes.css">
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
        <div class="cliente"><i class="fa-solid fa-user"></i> Clientes</div>
    </div>

    <div class="pri">
        <div class="sec">Registrar Nuevo Cliente</div>
        <div class="ter">Lista de Clientes</div>
    </div>

    <div class="cont">
        <div class="nuevoCliente">
            <form action="sp_anadirCliente.php" method="post">

                <label>Nombre</label><br>
                <input type="text" name="nombre" id="nombre"><br>

                <label>Correo</label><br>
                <input type="text" name="correo" id="correo"><br>

                <label>Celular</label><br>
                <input type="text" name="celular" id="celular"><br>

                <input type="submit" value="Registrar Cliente" name="insertar" class="btn">

            </form>
        </div>

        <div class="clientes">
            <table>
                <tr>
                    <td>Nombre del Cliente</td>
                    <td>Email</td>
                    <td>Celular</td>
                    <td>Acciones</td>
                </tr>

                <?php

                include 'conexion1.php';
                $sql = "SELECT * FROM registro_clientes";
                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {

                ?>

                    <tr class="tabla2">

                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['correo'] ?></td>
                        <td><?php echo $mostrar['celular'] ?></td>

                        <td><a href="editarCliente.php?
                     idcliente=<?php echo $mostrar['idcliente'] ?>&
                     nombre=<?php echo $mostrar['nombre'] ?>&
                     correo=<?php echo $mostrar['correo'] ?>&
                     celular=<?php echo $mostrar['celular'] ?>&
        
                     " class="editar"><i class="fa-solid fa-pen"></i> Editar</a>

                            <a href="eliminarCliente.php? idcliente=<?php echo $mostrar['idcliente'] ?>" class="eliminar"><i class="fa-solid fa-trash"></i> Eliminar</a>
                        </td>

                    </tr>

                <?php
                }
                ?>

            </table>
        </div>
    </div>

    <footer>
        <h3>Frutitec. Telefono 0426-8317573</h3>
        <strong>
            <p>&copy; Copyright 2024 - Todos los derechos reservados
        </strong>
    </footer>

</body>

</html>