<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/inventario.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Inventario</title>
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

    <div class="icon">
        <div class="icon2"><i class="fa-solid fa-clipboard"></i> Inventario</div>
        <div class="btnAnadir"><button onclick="openModal4()">Añadir</button></div>
        <dialog class="modal" id="inventarioModal">

            <form action="sp_anadirInventario.php" method="post">

                <h2>Añadir al Inventario</h2>

                <label>Nombre</label><br>
                <input type="text" name="nombreProducto" id="nombreProducto" minlength="5" maxlength="50" required=""  pattern="[a-zA-Z\s]+"><br>

                <label>Costo</label><br>
                <input type="text" name="costo" id="costo" minlength="2" maxlength="40" required="" pattern="^\d+(,\d+)?$"><br>

                <label>Descripcion</label><br>
                <input type="text" name="descripcion" id="descripcion" minlength="2" maxlength="15" required="" pattern="[a-zA-Z\s]+"><br>

                <label>Cantidad</label><br>
                <input type="text" name="cantidad" id="cantidad" minlength="2" maxlength="40" required="" pattern="^\d+(,\d+)?$"><br>

                <input type="submit" value="Registrar Inventario" name="insertar" class="btn">
                
                <input onclick="closeModal4()" class="btn2" value="Cerrar Registro de Inventario">
            </form>
        </dialog>
    </div> 

    <table>
        <tr>
            <td>Nombre Del Producto</td>
            <td>Costo</td>
            <td>Descripcion</td>
            <td>Cantidad</td>
            <td>Movimiento</td>
            <td>Eliminar</td>
        </tr>

        <?php

        include 'conexion1.php';
        $sql = "SELECT * FROM inventario";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {

        ?>

            <tr class="tabla2">

                <td><?php echo $mostrar['nombreProducto'] ?></td>
                <td><?php echo $mostrar['costo'] ?>$</td>
                <td><?php echo $mostrar['descripcion'] ?></td>
                <td><?php echo $mostrar['cantidad'] ?>kg</td>
                <td><a href="editarInventario.php? idProductoInventario=<?php echo $mostrar['idProductoInventario']; ?>" class="editar"><i class="fa-solid fa-pen"></i> Editar</a></td>
                

                <td><a href="eliminarInventario.php? idProductoInventario=<?php echo $mostrar['idProductoInventario'] ?>" class="eliminar"><i class="fa-solid fa-trash"></i> Quitar</a>
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

    <script src="../js/index.js"></script>

</body>

</html>