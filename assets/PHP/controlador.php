<?php

if (!empty($_POST["ingresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["clave"])) {
        echo "LOS CAMPOS ESTAN VACIOS";
    } else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $sql = $conexion->query("select * from iniciosesion where usuario='$usuario' and clave='$clave'");
        if ($datos = $sql->fetch_objetc()) {
            header("location:menu.php");
        } else {
            echo "ACCESO DENEGADO";
        }
    }
}
