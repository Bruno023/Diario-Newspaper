<?php

    include ('ConexionBD.php');

    $statement = $pdo -> prepare("DELETE FROM NOTICIA WHERE id = :id");

    $id= $_GET["id"];

    $statement -> bindParam(":id", $id);

    $statement->execute();

    header("location:index.html");

?>