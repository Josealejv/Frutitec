<?php 
    $idproveedor=$_POST['idproveedor'];
    $proveedor= $_POST['proveedor'];
    $contacto = $_POST['contacto'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $insertar = $_POST['insertar'];

    if (isset($insertar)) 
      {
     include 'conexion1.php';
    $sql="UPDATE registro_proveedores set proveedor='$proveedor', contacto='$contacto', celular='$celular', direccion='$direccion' WHERE idproveedor='$idproveedor'";
    $result=$conexion->query($sql) or die (mysqli_error($conexion));
    
    if($result){
        echo"
        <script> window.location= 'proveedor.php'</script>
        ";
   };
    }
    else{
        header("Location: proveedor.php");
    }


?>