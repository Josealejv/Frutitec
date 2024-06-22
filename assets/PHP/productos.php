<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/productos.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Productos</title>
</head>

<body>
    <!-- MENU DE NAVEGACION -->
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

    <!-- Titulo y boton para añadir -->

    <div class="icon">
        <div class="icon2"><i class="fa-brands fa-product-hunt"></i> Lista de Productos</div>
        <div class="btnAnadir"><button onclick="openModal()">Añadir Producto</button></div>
     <!-- Fin del titulo y boton de añanir -->

        <!-- MODAL PARA AÑADIR  -->
        <dialog class="modal" id="productosModal">
            <form action="sp_anadirProducto.php" method="post">

                <h2>Añadir Productos</h2>

                <label>Tipo</label><br>
                <select  name="tipo" id="tipo">
                    <option disabled selected>Seleccionar</option>
                    <option name="jugo" id="jugo">Jugo</option>
                    <option  name="refresco" id="refresco">Refresco</option>
                    <option  name="alimento" id="jugo">Alimento</option>
                </select><br>

                <label>Nombre</label><br>
                <input minlength="5" maxlength="50" type="text" name="nombre" id="nombre" required="" pattern="[a-zA-Z\s]+"><br>

                <label>Descripcion</label><br>
                <input minlength="4" maxlength="20" type="text" name="descripcion" id="descripcion" required="" pattern="[a-zA-Z\s]+"><br>

                <label>Precio</label><br>
                <input minlength="2" maxlength="10" type="text" name="precio" id="precio" required="" pattern="^\d+(,\d+)?$"><br>

                <input type="submit" value="Registrar Producto" name="insertar" class="btn">
                <input onclick="closeModal()" class="btn2" value="Cerrar Registro de Producto">

            </form>
        </dialog>
        <!-- FIN DEL MODAL -->
    </div>

    <!-- TABLA DE PRODUCTOS -->
    <table>
        <tr>
            <td><b>Tipo</b></td>
            <td><b>Nombre</b></td>
            <td><b>Descripcion</b></td>
            <td><b>Precio</b></td>
            <td><b>Acciones</b></td>
        </tr>

        <?php

        include 'conexion1.php';
        $sql = "SELECT * FROM registroproductos";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {

        ?>

            <tr class="tabla2">

                <td><?php echo $mostrar['tipo'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['descripcion'] ?></td>
                <td><?php echo $mostrar['precio']?> Bs</td>

                <td><a href="editarProducto.php?idproducto=<?php echo $mostrar['idproducto']; ?>" class="editar"><i class="fa-solid fa-pen"></i> Editar</a>

                    <a href="eliminar.php? idproducto=<?php echo $mostrar['idproducto'] ?>" class="eliminar" onclick='return confirmacion()'><i class="fa-solid fa-trash"></i> Eliminar</a>
                </td>

            </tr>

        <?php
        }
        ?>

    </table>

    <!-- FIN DE LA TABLA -->

    <!-- FOOTER -->
    <footer>
        <h3>Frutitec. Telefono 0426-8317573</h3>
        <strong>
            <p>&copy; Copyright 2024 - Todos los derechos reservados
        </strong>
    </footer>
    <!-- FIN DEL FOOTER -->

    <script src="../js/index.js"></script>
    

</body>

</html>