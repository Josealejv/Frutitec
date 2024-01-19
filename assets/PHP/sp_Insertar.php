<?php

$Codigo = $_REQUEST['Codigo'];
$Marca = $_REQUEST['Marca'];
$Modelo = $_REQUEST['Modelo'];
$Serial= $_REQUEST['Serial'];
$insertar= $_REQUEST['insertar'];

if ($insertar)
{
include 'conexion1.php';
$sql="INSERT INTO inventario (Codigo,Marca,Modelo,Serial) VALUES ('$Codigo','$Marca','$Modelo','$Serial')";
$result=mysqli_query($conexion,$sql);

if($result){
   echo "<script> window.location= 'Inventario.php?'</script>";
           
}
}
?>