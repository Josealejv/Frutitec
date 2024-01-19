<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <?php 
    $id=$_GET['id'];
    $Codigo = $_GET['Codigo'];
    $Marca = $_GET['Marca'];
    $Modelo = $_GET['Modelo'];
    $Serial= $_GET['Serial'];
?>

    <div>
        <form action="sp_editar.php" method="post">
            <table border="1">

                <tr>
                 <td><input type="hidden" name="id" id="" value="<?=$id?>"></td>
                </tr>

                <tr>
                 <td>Codigo:</td>
                 <td><input type="text" name="Codigo" id="" value="<?=$Codigo?>"></td>
                </tr>

                <tr>
                 <td>Marca:</td>
                 <td><input type="text" name="Marca" id="" value="<?=$Marca?>"></td>
                </tr>

                <tr>
                 <td>Modelo:</td>
                <td><input type="text" name="Modelo" id="" value="<?=$Modelo?>"></td>
                </tr>

                <tr>
                 <td>Serial:</td>
                 <td><input type="text" name="Serial" id="" value="<?=$Serial?>"></td>
                </tr>

                <tr>
                 <td><input type="submit" value="Actualizar" name="insertar"></td>
                 <td><a href="Inventario.php">Cancelar</a></td>
                </tr>
                
            </table>
        </form>

    </div>

    <a href="Inventario.php">BACK</a>
</body>
</html>