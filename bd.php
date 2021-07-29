<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'root';
    $baseDeDatos = 'php_buscador';
    $conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDeDatos);
    $conexion -> set_charset("utf8");
?>
