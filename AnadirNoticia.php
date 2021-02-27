<?php
    include ('ConexionBD.php');

  
    $stmt = $pdo -> prepare("INSERT INTO noticia (Titulo,Copete,NoticiaCompleta,Imagen) VALUES (:titulo,:copete,:Completa,:Imagen)");

    $titulo = $_POST["titulo"];
    $copete = $_POST["copete"];
    $completa = $_POST["completa"];
    $img = $_POST["imagen"];

    $stmt -> bindParam(':titulo',$titulo);
    $stmt -> bindParam(':copete',$copete);
    $stmt -> bindParam(':Completa',$completa);
    $stmt -> bindParam(':Imagen',$img);

    $stmt -> execute();

    header("location: index.html");

?>