<?php

include 'conexion1.php';
$query = mysqli_query($conexion, "SELECT idpedidos,nombre From tipos ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/mesa1.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Mesa#1</title>
</head>

<body>
    <header>
        <nav>

            <ul>
                <li><img src="../images/Logo.jpg" alt="LogoFrutitec" height="35px" class="logo-nav"></li>
                <h4>Frutitec</h4>

                <li><a href="../PHP/Menu"><i class="fa-solid fa-house"></i> Inicio</a></li>

                <li><a href="../PHP/productos.php"> Productos</a></li>

                <li><a href="../PHP/proveedores.php"><i class="fa-solid fa-truck"></i> Proveedores</a></li>

                <li><a href="../PHP/pedidos.php"><i class="fa-solid fa-utensils"></i> Pedidos</a></li>

                <li><a href="../PHP/inventario.php"><i class="fa-solid fa-clipboard"></i> Inventario</a></li>

                <li><a href="../PHP/ventas.php"><i class="fa-solid fa-dollar-sign"></i> Ventas</a></li>

                <li><a href="../PHP/clientes.php"><i class="fa-solid fa-user"></i> Clientes </a></li>
            </ul>

        </nav>
    </header>

    <div class="icon">
        <div class="icon2"><i class="fa-solid fa-utensils"></i> Realizar Pedido</div>
    </div>

    <div class="orden">

        <form action="pedidos.php" method="post">

            <label>Tipo De Producto </label>
            <select name="tipos">
                <option disabled selected>Seleccionar</option>
                <?php
                while ($datos = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?php echo $datos['nombre'] ?>"><?php echo $datos['nombre'] ?></option>
                <?php } ?>

            </select>

            <label>Cantidad</label>
            <select name="cantidad">
                <option disabled selected>Seleccionar</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
    </div>

    <div class="boton"><input type="submit" value="Pedir" name="insertar" class="btn"></div>

    </form>

    <table>

        <tr>
            <td>Producto</td>
            <td>Cantidad</td>
            <td>Precio</td>
            <td>SubTotal</td>
            <td>Id Compra</td>
        </tr>

        <tr class="tabla2">

            <td><?php if (isset($_POST['tipos'])) {
                    $tipos = $_POST['tipos'];
                    echo $tipos;
                } ?>
            </td>
            
            <td><?php echo $cantidad['cantidad'] ?></td>

            <td <?php echo $mostrar[''] ?>></td>
            <td><?php echo $mostrar[''] ?></td>

            <td></td>

        </tr>
    </table>


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