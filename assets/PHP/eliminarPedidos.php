<?php
$idpedidos= $_GET['idpedidos'];

$conexion = mysqli_connect ("localhost", "root", "root","frutitecbd");
$sql="DELETE FROM tipos WHERE idpedidos like $idpedidos";
$result=mysqli_query($conexion,$sql);

   if($resultado){
	   echo "No se elimina";
	}
   
   else
   {
    header("Location: mesa1.php");    
	}
?>	