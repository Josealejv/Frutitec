<?php 
    $idProductoInventario=$_POST['idProductoInventario'];
    $nombreProducto= $_POST['nombreProducto'];
    $costo = $_POST['costo'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $insertar = $_POST['insertar'];
    if (isset($insertar)) 
      {
     include 'conexion1.php';
    $sql="UPDATE inventario set nombreProducto='$nombreProducto',costo='$costo', descripcion='$descripcion', cantidad='$cantidad' WHERE idProductoInventario='$idProductoInventario'";
    $result=$conexion->query($sql) or die (mysqli_error($conexion));
    
    if($result){
        echo"
        <script> window.location= 'inventario.php'</script>
        ";
   };
    }
    else{
        header("Location: inventario.php");
    }


?>