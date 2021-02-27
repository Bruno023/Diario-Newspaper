<?php

    include('ConexionBD.php');
    
    $statement = $pdo -> prepare("SELECT * FROM NOTICIA");

    $statement -> execute();

    $Noticia = $statement -> fetchAll(PDO::FETCH_OBJ);

    echo(json_encode($Noticia));

?>