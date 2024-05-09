<?php 
    $idcliente=$_POST['idcliente'];
    $nombre= $_POST['nombre'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $insertar = $_POST['insertar'];

    if (isset($insertar)) 
      {
     include 'conexion1.php';
    $sql="UPDATE registro_clientes set nombre='$nombre',correo='$correo', celular='$celular' WHERE idcliente='$idcliente'";
    $result=$conexion->query($sql) or die (mysqli_error($conexion));
    
    if($result){
        echo"
        <script> window.location= 'clientes.php'</script>
        ";
   };
    }
    else{
        header("Location: clientes.php");
    }


?>