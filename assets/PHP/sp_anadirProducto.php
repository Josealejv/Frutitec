<?php

$tipo = $_REQUEST['tipo'];
$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];
$insertar= $_REQUEST['insertar'];

if ($insertar)
{
include 'conexion1.php';
$sql="INSERT INTO registroproductos (tipo,nombre,descripcion) VALUES ('$tipo','$nombre','$descripcion')";
$result=mysqli_query($conexion,$sql);

if($result){
   echo "<script> window.location= 'productos.php?'</script>";
         
}
}
?>