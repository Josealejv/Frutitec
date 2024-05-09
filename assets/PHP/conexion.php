<?php
$conexion = mysqli_connect("localhost", "root", "root", "frutitecbd")
    or die("No se puede conectar con el servidor");
if ($conexion) {
    echo '
    <script>
        alert("Usuario ingresado exitosamente");
        window.location = "../PHP/Menu.php";
    </script>
    ';
}
?>
