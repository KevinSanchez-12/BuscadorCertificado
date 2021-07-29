<?php include 'conexion.php';?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Buscador-Certificado</title>
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
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>  
            <li class="nav-item active">
              <a class="nav-link" href="administrador-panel.php">Administrador <span class="sr-only">(current)</span></a>
            </li>    
          </ul>
        </div>
      </nav>
    </header>
    <br><br>
    <br>
<div class="container">
 <hr>

<div class="row">
  <div class="col-12 col-md-12">

<ul class="list-group">
  <li class="list-group-item">
<form method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <input required name="PalabraClave" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese el codigo">  
      <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
    </div>
   
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Buscar Ahora</button>
    </div>
  </div>
</form>
  </li>
</ul>
<?php
 
if(!empty($_POST))
{
      $aKeyword = explode(" ", $_POST['PalabraClave']);
      $query ="SELECT * FROM usuarios WHERE codigo like '" . $aKeyword[0] . "'";
      
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR id like '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $db->query($query);
     echo "<br>Has buscado el código:<b> ". $_POST['PalabraClave']."</b>";
                     
     if(mysqli_num_rows($result) > 0) {
        $row_count=0;
        echo "<br><br>Resultados encontrados: ";
        echo "<br><table class='table table-striped'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;    
            echo "<td>".$row['codigo']."</td>"."<td>".$row['nombre']."</td>"."<td><img src='".$row['certificado']."' height=200px width=200px /></td>";
        }
        echo "</table>";
    }
    else {
        echo "<br>Resultados encontrados: Ninguno";
    }
}
?>
</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    </body>
</html>