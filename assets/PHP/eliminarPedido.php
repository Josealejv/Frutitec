<?php
$idproveedor= $_GET['idpedido'];

$conexion = mysqli_connect ("localhost", "root", "root","frutitecbd");
$sql="DELETE FROM registro_pedidos WHERE idpedido like $idpedido";
$result=mysqli_query($conexion,$sql);

   if($resultado){
	   echo "No se elimina";
	}
   
   else
   {
    header("Location: mesa1.php");    
	}
?>	