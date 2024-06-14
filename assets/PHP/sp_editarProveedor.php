<?php 
    $idproveedor=$_POST['idproveedor'];
    $proveedor= $_POST['proveedor'];
    $contacto = $_POST['contacto'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $fecha = $_POST['fecha'];
    $insertar = $_POST['insertar'];

    if (isset($insertar)) 
      {
     include 'conexion1.php';
    $sql="UPDATE registro_proveedores set proveedor='$proveedor', contacto='$contacto', celular='$celular', direccion='$direccion',fecha='$fecha' WHERE idproveedor='$idproveedor'";
    $result=$conexion->query($sql) or die (mysqli_error($conexion));
    
    if($result){
        echo"
        <script> window.location= 'proveedores.php'</script>
        ";
   };
    }
    else{
        header("Location: proveedores.php");
    }


?>