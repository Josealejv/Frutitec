<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/nuevoProducto.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Añadir Producto</title>
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

    <form action="sp_anadirProducto.php" method="post">
        <table>

            <tr>
                <td>Tipo</td>
                <td><select type="text" name="tipo" id="tipo">
                        <option disabled selected>Seleccionar</option>
                        <option>Bebida</option>
                        <option>Alimento</option>
                </td>
            </tr>

            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>

            <tr>
                <td>Descripcion</td>
                <td><input type="text" name="descripcion" id="descripcion"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Guardar" name="insertar" class="btn"></td>

                <td><a href="productos.php">Volver</a></td>
            </tr>

        </table>
    </form>
    
</body>

</html>