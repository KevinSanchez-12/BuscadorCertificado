<?php 
include 'conexion.php';
include 'enviar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL ADMINISTRADOR</title>
    <link rel="stylesheet" href="admin.css">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
</head>
<body>
<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio </a>
            </li>  
            <li class="nav-item active">
              <a class="nav-link" href="administrador-panel.php">Administrador </a>
            </li>    
          </ul>
        </div>
      </nav>
    </header>
    <br><br>
    <br>
    <div class="form-group">
        <form action="administrador-panel.php" method="POST" autocomplete="off">
            <label for="my-input">Nombres</label>
            <input id="my-input" class="form-control" type="text" name="nombre">
            <label for="my-input">Link de certificado</label>
            <input id="my-input" class="form-control" type="link" name="link">
            <label for="my-input">Código</label>
            <input id="my-input" class="form-control" type="text" name="codigo">
            <input  type="submit" value="Registrar Certificado">
        </form>
        
    </div>
</body>
</html>