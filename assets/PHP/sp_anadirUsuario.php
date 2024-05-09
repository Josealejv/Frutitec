<?php

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$usuario = $_REQUEST['usuario'];
$contrasena = $_REQUEST['contraseña'];
$insertar= $_REQUEST['insertar'];

if ($insertar)
{
include 'conexion1.php';
$sql="INSERT INTO iniciosesion (nombre,apellido,usuario,contrasena) VALUES ('$nombre','$apellido','$usuario','$contrasena')";
$result=mysqli_query($conexion,$sql);

if($result){
   echo "<script> window.location= 'index.php'</script>";
         
}
}
?>