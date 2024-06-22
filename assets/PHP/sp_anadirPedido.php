<?php

include 'conexion1.php';
$nombre = $_REQUEST['nombre'];
$insertar= $_REQUEST['insertar'];

if ($insertar)
{
include 'conexion1.php';
$sql="INSERT INTO registro_pedidos (nombre) VALUES ('$nombre')"; 
$result=mysqli_query($conexion,$sql);

if($result){
   echo "<script> window.location= 'pedidos.php?'</script>";
        
}
}
?>