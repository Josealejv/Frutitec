<?php

$tipo = $_REQUEST['tipo'];
$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];
$precio = $_REQUEST['precio'];
$insertar= $_REQUEST['insertar'];

if ($insertar)
{
include 'conexion1.php';
$sql="INSERT INTO registroproductos (tipo,nombre,descripcion,precio) VALUES ('$tipo','$nombre','$descripcion','$precio')";
$result=mysqli_query($conexion,$sql);

if($result){
   echo "<script> window.location= 'productos.php?'</script>";
         
}
}
?>