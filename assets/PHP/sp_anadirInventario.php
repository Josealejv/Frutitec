<?php
$nombreProducto = $_REQUEST['nombreProducto'];
$costo = $_REQUEST['costo'];
$descripcion = $_REQUEST['descripcion'];
$cantidad = $_REQUEST['cantidad'];
$movimiento = $_REQUEST['movimiento'];
$insertar = $_REQUEST['insertar'];

if ($insertar) {
    include 'conexion1.php';
    $sql = "INSERT INTO inventario (nombreProducto,costo,descripcion,cantidad,movimiento) VALUES ('$nombreProducto','$costo','$descripcion','$cantidad','$movimiento')";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        echo "<script> window.location= 'inventario.php?'</script>";
    }
}
 
?>