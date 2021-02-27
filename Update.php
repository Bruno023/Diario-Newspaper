<?php

    include('ConexionBD.php');

    $stmt = $pdo -> prepare("UPDATE noticia SET Titulo = :titulo, Copete = :copete, NoticiaCompleta = :Completa, Imagen = :Imagen WHERE id = :id");

    $titulo = $_POST["titulo"];
    $copete = $_POST["copete"];
    $completa = $_POST["completa"];
    $img = $_POST["imagen"];
    $id = $_POST["id"];

    $stmt -> bindParam(':titulo',$titulo);
    $stmt -> bindParam(':copete',$copete);
    $stmt -> bindParam(':Completa',$completa);
    $stmt -> bindParam(':Imagen',$img);
    $stmt -> bindParam(':id',$id);

    $stmt -> execute();

    header("location: index.html");



?>