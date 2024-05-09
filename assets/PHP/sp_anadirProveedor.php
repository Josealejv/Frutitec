<?php

$proveedor = $_REQUEST['proveedor'];
$contacto = $_REQUEST['contacto'];
$celular = $_REQUEST['celular'];
$direccion = $_REQUEST['direccion'];
$fecha = $_REQUEST['fecha'];
$insertar= $_REQUEST['insertar'];

if ($insertar)
{
include 'conexion1.php';
$sql="INSERT INTO registro_proveedores (proveedor,contacto,celular,direccion,fecha) VALUES ('$proveedor','$contacto','$celular', '$direccion', '$fecha')";
$result=mysqli_query($conexion,$sql);

if($result){
   echo "<script> window.location= 'proveedores.php?'</script>";
         
}
}
?>