<?php
     //Conecta una base de datos MySql Utilizando PHP
     //Conectar con el servidor de base de datos
     $conexion = mysqli_connect ("localhost", "root", "root","frutitecbd")
     or die ("No se puede conectar con el servidor");
     $conexion->set_charset("utf8");
 ?>