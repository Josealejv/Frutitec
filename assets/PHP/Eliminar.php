<?php
$id = $_GET['id'];

$conexion = mysqli_connect ("localhost", "root", "root","servicios_generales");
$sql="DELETE FROM inventario WHERE id like $id";
$result=mysqli_query($conexion,$sql);

   if($resultado){
	   echo "No se elimina";
	}
   

   else
   {
    header("Location: Inventario.php");    
	}
?>	