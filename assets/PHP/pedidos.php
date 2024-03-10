<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/pedidos.css">
    <link rel="icon" href="../images/Logo.ico">
    <title>Pedidos</title>
</head>

<body>
    <header>
        <img src="../images/Logo.ico">
        <h2>Registro De Pedidos</h2>
    </header>

    <div class="seccion">
        Numero De Mesa<select>
            <option>Mesa 1</option>
            <option>Mesa 2</option>
            <option>Mesa 3</option>
        </select> <br>

        Pedido<textarea></textarea>

    </div>

    <div class="seccion2">
        Metodo De Pago<select>
            <option>Efectivo</option>
            <option>Punto de Venta</option>
            <option>Bio-Pago</option>
        </select>
        Monto<input type="number">
    </div>

    <ul>
        <li><a href="#">Guardar</a></li>
        <li><a href="#">Modificar</a></li>
        <li><a href="#">Eliminar</a></li>
        <li><a href="#">Registrar</a></li>
        <li><a href="#">Consultar</a></li>
        <li><a href="/index.php">Menu</a></li>
    </ul>
</body>

</html>