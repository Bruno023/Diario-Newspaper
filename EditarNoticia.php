<?php
    include('ConexionBD.php');

    $stmt = $pdo ->prepare("UPDATE noticia SET Titulo=:titulo, Copete=:copete, NoticiaCompleta=:completa, Imagen=:imagen WHERE id=:id");

    $titulo = $_POST["titulo"];
    $copete = $_POST["copete"];
    $completa = $_POST["completa"];
    $img = $_POST["imagen"];
    $id = $_POST["id"];

    $stmt -> bindParam(':titulo',$titulo);
    $stmt -> bindParam(':copete',$copete);
    $stmt -> bindParam(':completa',$completa);
    $stmt -> bindParam(':imagen',$img);
    $stmt -> bindParam(':id',$id);

    header("location: Configuracion.html");
?>