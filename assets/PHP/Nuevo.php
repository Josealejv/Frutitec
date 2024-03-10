<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="sp_Insertar.php" method="post">
            <table border="1">
                <tr>
                 <td>Codigo:</td>
                 <td><input type="text" name="Codigo" id="Codigo" ></td>
                </tr>

                <tr>
                 <td>Marca:</td>
                 <td><input type="text" name="Marca" id="Marca" ></td>
                </tr>

                <tr>
                 <td>Modelo:</td>
                <td><input type="text" name="Modelo" id="Modelo" ></td>
                </tr>

                <tr>
                 <td>Serial:</td>
                 <td><input type="text" name="Serial" id="Serial" ></td>
                </tr>

                <tr>
                 <td><input type="submit" value="Guardar" name="insertar"></td>
                </tr>
                
            </table>
        </form>

    </div>

    <a href="Inventario.php">BACK</a>
</body>
</html>