<?php

if (!empty($_POST["ingresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["clave"])) {
        echo "LOS CAMPOS ESTAN VACIOS";
    } else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];

        // Preparar la consulta
        $stmt = $conexion->prepare("SELECT * FROM iniciosesion WHERE usuario ='$usuario' AND clave ='$clave'");
        $stmt->bind_param("ss", $usuario, $clave);
        $stmt->execute();

        // Verificar si la consulta se ejecutó correctamente
        if ($stmt->errno) {
            echo "Error al ejecutar la consulta: " . $stmt->error;
        } else {
            // Almacenar el resultado de la consulta
            $result = $stmt->get_result();
            $row = $result->fetch_object();

            if ($row) {
                header("location:menu.php");
            } else {
                echo "ACCESO DENEGADO";
            }
        }
    }
}
