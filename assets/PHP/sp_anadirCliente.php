<?php

$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$celular = $_REQUEST['celular'];
$insertar= $_REQUEST['insertar'];

if ($insertar)
{
include 'conexion1.php';
$sql="INSERT INTO registro_clientes (nombre,correo,celular) VALUES ('$nombre','$correo', '$celular')"; 
$result=mysqli_query($conexion,$sql);

if($result){
   echo "<script> window.location= 'clientes.php?'</script>";
         
}
}
?>