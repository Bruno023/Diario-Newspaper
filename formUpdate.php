<?php

include ("ConexionBD.php");

$statement = $pdo -> prepare("SELECT * FROM NOTICIA WHERE id = :id");

$id = $_GET["id"];

$statement -> bindParam(":id", $id);

$statement -> execute();

$Noticia = $statement -> fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Diarin</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>
<body>
     <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Diarin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Configuracion.html">Agregar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Administrar.php">Administrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row text-center">
  <div class="container">
          <form action="Update.php" method="POST">
            <div class="form-group">
              <label for="">Titulo Noticia</label>
              <textarea rows = "1" cols = "60" type = "text" name = "titulo"><?php echo $Noticia[0]["Titulo"]?></textarea>
            </div>
            <div class="form-group">
              <label for="">Copete</label>
              <textarea rows = "2" cols = "60" type = "text" name = "copete"><?php echo $Noticia[0]["Copete"]?></textarea>
            </div>
            <div class="form-group">
              <label for="">Noticia Completa</label>
              <textarea rows = "5" cols = "60" type = "text" name = "completa"><?php echo $Noticia[0]["NoticiaCompleta"]?></textarea>
            </div>
            <div class="form-group">
              <input type = "hidden" name = "id" value=<?php echo $Noticia[0]["id"]?>>
            </div>
            <div class="form-group">
              <label for="">Noticia Completa</label>
              <textarea rows = "5" cols = "60" type = "text" name = "imagen"><?php echo $Noticia[0]["Imagen"]?></textarea>
            </div>
            <input type="submit" class="btn btn-primary"></input>
          </form>
</div>
</div>
    
        <script src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>