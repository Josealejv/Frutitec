<?php
    $Codigo = $_REQUEST['Codigo'];
    $Marca = $_REQUEST['Marca'];
    $Modelo = $_REQUEST['Modelo'];
    $Seriall= $_REQUEST['Seriall'];
   

      if (isset($insertar)) 
      {
   
        include("conexion.php");
        //---CONSULTA A LA TABLA--//
        $consulta="INSERT INTO inventario (Codigo,Marca,Modelo,Seriall) VALUES ('$Codigo','$Marca','$Modelo','$Seriall')";
        $resultado=mysqli_query($conexion,$consulta);

        if($resultado)
         {
            
            echo "<script type=\"text/javascript\">\n";
            echo "alert(\"Fue registrado con exito\"); \n";
            echo "</script>\n";
            echo "<script> window.location= 'inventario.php?'</script>";
           
           }
           else echo "No se guardo<br>".$usuario."".$clave;
       
   }

      ?>