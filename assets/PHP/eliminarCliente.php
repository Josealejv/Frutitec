<?php
$idcliente= $_GET['idcliente'];

$conexion = mysqli_connect ("localhost", "root", "root","frutitecbd");
$sql="DELETE FROM registro_clientes WHERE idcliente like $idcliente";
$result=mysqli_query($conexion,$sql);

   if($resultado){
	   echo "No se elimina";
	}
   
   else
   {
    header("Location: clientes.php");    
	}
?>	