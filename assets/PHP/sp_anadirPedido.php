<?php

$nombrePedido = $_REQUEST['nombreproducto'];
$insertar= $_REQUEST['insertar'];

if ($insertar)
{
include 'conexion1.php';
$sql="INSERT INTO registro_pedidos (nombreproducto) VALUES ('$nombreproducto')"; 
$result=mysqli_query($conexion,$sql);

if($result){
   echo "<script> window.location= 'mesa1.php?'</script>";
        
}
}
?>