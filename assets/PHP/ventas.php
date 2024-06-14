<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/ventas.css">
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
        <div class="ventas"><i class="fa-solid fa-dollar-sign"></i> Ventas</div>
    </div>

    <h2> Ventas de la semana</h2>
    <div class="ventaSemana">
        <div class="vs"></div>
    </div>

    <h2> Ventas del mes</h2>
    <div class="ventasMes">
        <div class="vm">
            <select>
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select> 
            <select>
                <option>AÑO</option>
            </select>
        </div> 
    </div>

    <h2> Ventas del año</h2>
    <div class="ventasAño">
        <div class="va">
            <select>
                <option>Año</option>
            </select>
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