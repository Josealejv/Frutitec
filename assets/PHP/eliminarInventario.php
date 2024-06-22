<?php
$idProductoInventario= $_GET['idProductoInventario'];

$conexion = mysqli_connect ("localhost", "root", "root","frutitecbd");
$sql="DELETE FROM inventario WHERE idProductoInventario like $idProductoInventario";
$result=mysqli_query($conexion,$sql);

   if($resultado){
	   echo "No se elimina";
	}
   
   else
   {
    header("Location: inventario.php");    
	}
?>	