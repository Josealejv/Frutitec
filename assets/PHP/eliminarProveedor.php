<?php
$idproveedor= $_GET['idproveedor'];

$conexion = mysqli_connect ("localhost", "root", "root","frutitecbd");
$sql="DELETE FROM registro_proveedores WHERE idproveedor like $idproveedor";
$result=mysqli_query($conexion,$sql);

   if($resultado){
	   echo "No se elimina";
	}
   
   else
   {
    header("Location: proveedores.php");    
	}
?>	