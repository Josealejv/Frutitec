<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/pedidos.css">
    <link rel="icon" href="../images/Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Pedidos</title>
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

    <div>
        <h2><i class="fa-solid fa-pencil"></i> Tomar Orden</h2>
        <div>
            <form>
                <label>Numero de Mesa</label>
                <select type="text" name="tipo" id="">
                    <option disabled selected>Seleccionar</option>
                    <option value="mesa1">Mesa1</option>
                    <option value="mesa2">Mesa2</option>
                    <option value="mesa3">Mesa3</option>
                </select>

                <label>Pedido</label>
                <textarea></textarea><br>

                <label>Metodo de Pago</label><br>
                <select type="text" name="metodo" id="metodo">
                    <option disabled selected>Seleccionar</option>
                    <option value="Efectivo"></option>
                    <option value="Punto de Venta"></option>
                    <option value="Bio-Pago"></option>
                </select><br>

                <label>Monto</label>
                <input type="text" name="monto" id="monto">

            </form>
        </div>
    </div>

</body>

</html>