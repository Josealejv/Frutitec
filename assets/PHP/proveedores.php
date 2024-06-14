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
    <!-- MENU DE NAVEGACION -->
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
    <!-- FIN DEL MENU DE NAVEGACION -->

    <!-- TITULO DE LA PAGINA -->
    <div class="container">
        <div class="proveedores"><i class="fa-solid fa-truck"></i> Lista de Proveedores</div>
    </div>
    <!-- FIN  -->

    <!--TITULO DE LOS DIVS  -->
    <div class="pri">
        <div class="sec">Registrar Nuevo Proveedor</div>
        <div class="ter">Lista de Proveedor</div>
    </div>
    <!-- FIN DEL DIV -->

    <!--DIV DE REGISTRO Y LISTA DE PROVEEDORES  -->
    <div class="cont">
        <!-- DIV DE REGISTRO DE PROVEEDORES -->
        <div class="nuevoProveedor">
            <form action="sp_anadirProveedor.php" method="post">

                <label>Proveedor</label><br>
                <input type="text" name="proveedor" id="proveedor"><br>

                <label>Contacto</label><br>
                <input type="text" name="contacto" id="contacto"><br>

                <label>Celular</label><br>
                <input type="text" name="celular" id="celular"><br>

                <label>Direccion</label><br>
                <input type="text" name="direccion" id="direccion"><br>

                <label>Fecha</label><br>
                <input type="datetime-local" name="fecha" id="fecha"><br>

                <input type="submit" value="Registrar Proveedor" name="insertar" class="btn"></td>

            </form>
        </div>
        <!-- FIN DEL DIV DE REGISTRO DE PROVEEDORES -->

        <!-- LISTA DE PROVEEDORES -->
        <div class="proveedor">
            <!-- TABLA DE LA LISTA DE PROVEEDORES -->
            <table>
                <tr>
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
                        <td><?php echo $mostrar['fecha'] ?></td>

                        <td style="display: flex;flex-direction:row;"><a href="editarProveedor.php?
                     idproveedor=<?php echo $mostrar['idproveedor'] ?>&
                     proveedor=<?php echo $mostrar['proveedor'] ?>&
                     contacto=<?php echo $mostrar['contacto'] ?>&
                     celular=<?php echo $mostrar['celular'] ?>&
                     direccion=<?php echo $mostrar['direccion'] ?>&
                     fecha=<?php echo $mostrar['fecha'] ?> &
        
                     " class="editar"><i class="fa-solid fa-pen"></i> Editar</a>

                            <a href="eliminarProveedor.php? idproveedor=<?php echo $mostrar['idproveedor'] ?>" class="eliminar"><i class="fa-solid fa-trash"></i> Eliminar</a>
                        </td>

                    </tr>

                <?php
                }
                ?>

            </table>
            <!-- FIN DE LA TABLA DE PROVEEDORES -->
        </div>
        <!-- FIN DE LA LISTA DE PROVEEDORES  -->
    </div>
    <!-- FIN DEL DIV DE REGISTRO Y LISTA DE PROVEEDORES  -->

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