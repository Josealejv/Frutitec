<?php 

include 'conexion1.php';

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$consulta ="SELECT * FROM iniciosesion where usuario='$usuario' and clave='$clave'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:menu.php");
}
else{
    include("index.php");
    ?>
    <h1>ERROR</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>