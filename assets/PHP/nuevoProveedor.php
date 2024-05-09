<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/nuevoProveedor.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Añadir Proveedor</title>
</head>

<body>

    <header>


        <nav>

            <ul>
                <li><img src="../images/Logo.jpg" alt="LogoFrutitec" height="35px" class="logo-nav"></li>
                <h4>Frutitec</h4>

                <li><a href="../PHP/Menu"><i class="fa-solid fa-house"></i> Inicio</a></li>

                <li><a href="../PHP/productos.php"><i class="fa-brands fa-product-hunt"></i> Productos</a></li>

                <li><a href="../PHP/proveedores.php"><i class="fa-solid fa-truck"></i> Proveedores</a></li>

                <li><a href="../PHP/pedidos.php"><i class="fa-solid fa-utensils"></i> Pedidos</a></li>

                <li><a href="../PHP/inventario.php"><i class="fa-solid fa-clipboard"></i> Inventario</a></li>

                <li><a href="../PHP/ventas.php"><i class="fa-solid fa-dollar-sign"></i> Ventas</a></li>

                <li><a href="../PHP/clientes.php"><i class="fa-solid fa-user"></i> Clientes </a></li>
            </ul>


        </nav>
    </header>

    <form action="sp_anadirProveedor.php" method="post">

        <h2>Registro de Proveedor</h2>

        <label>Proveedor</label><br>
        <input type="text" name="proveedor" id="proveedor" placeholder="Nombre del Proveedor"><br>

        <label>Contacto</label><br>
        <input type="text" name="contacto" id="contacto" placeholder="Nombre Completo del Contacto"><br>

        <label>Celular</label><br>
        <input type="text" name="celular" id="celular" placeholder="Celular"><br>

        <label>Direccion</label><br>
        <input type="text" name="direccion" id="direccion" placeholder="Direccion"><br>

        <label>Fecha</label><br>
        <input type="datetime-local" name="fecha" id="fecha" placeholder="fecha"><br>

        <input type="submit" value="Registrar Proveedor" name="insertar" class="btn">

    </form>

</body>

</html>