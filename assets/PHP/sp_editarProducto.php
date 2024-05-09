<?php 
    $idproducto=$_POST['idproducto'];
    $tipo = $_POST['tipo'];
    $nombre= $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $insertar = $_POST['insertar'];

    if (isset($insertar)) 
      {
     include 'conexion1.php';
    $sql="UPDATE registroproductos set tipo='$tipo',nombre='$nombre',descripcion='$descripcion' WHERE idproducto='$idproducto'";
    $result=$conexion->query($sql) or die (mysqli_error($conexion));
    
    if($result){
        echo"
        <script> window.location= 'productos.php'</script>
        ";
   };
    }
    else{
        header("Location: productos.php");
    }


?>