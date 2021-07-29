<?php
    include 'bd.php';
    if(!empty($_POST['nombre']) && !empty($_POST['link']) && !empty($_POST['codigo'])){
        $nombre = $_POST['nombre'];
        $link = $_POST['link'];
        $codigo = $_POST['codigo'];
            $datos="INSERT INTO usuarios(nombre, certificado, codigo) VALUES ('$nombre', '$link', '$codigo')";
            mysqli_query($conexion, $datos);
            echo "<script> 
            alert('Registro Exitoso'); 
            window.location = 'administrador-panel.php'
            </script>";
    }
?>