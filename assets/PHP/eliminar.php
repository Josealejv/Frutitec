<?php
$idproducto= $_GET['idproducto'];

$conexion = mysqli_connect ("localhost", "root", "root","frutitecbd");
$sql="DELETE FROM registroproductos WHERE idproducto like $idproducto";
$result=mysqli_query($conexion,$sql);

   if($resultado){
	   echo "No se elimina";
	}
   
   else
   {
    header("Location: productos.php");    
	}
?>	