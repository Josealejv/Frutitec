<?php 
    $id=$_POST['id'];
    $Codigo = $_POST['Codigo'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Seriall= $_POST['Seriall'];
    $insertar = $_POST['insertar'];

    if (isset($insertar)) 
      {
     include 'conexion1.php';
    $sql="UPDATE inventario set  Codigo='$Codigo',Marca='$Marca',Modelo='$Modelo',Serial='$Serial' WHERE id='$id'";
    $result=$conexion->query($sql) or die (mysqli_error($conexion));
    
    if($result){
        echo"
        <script> window.location= 'Inventario.php?'</script>
        ";
   };
    }
    else{
        header("Location: Inventario.php");
    }


?>