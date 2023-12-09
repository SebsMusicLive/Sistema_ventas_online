<?php

include("../../config.php");


$id_usuario = $_POST['id_usuario'];


    $sentencia = $pdo->prepare("DELETE FROM tbl_usuarios WHERE id_usuario = :id_usuario");
    $sentencia->bindParam("id_usuario", $id_usuario);
    $sentencia->execute();

    session_start();
    $_SESSION["mensaje"] = "Se eliminó al usuario correctamente";
    $_SESSION["icono"] = "success";
    $_SESSION["titulo"] = "Éxito";
    header("Location:".$URL."/usuarios/");


?>