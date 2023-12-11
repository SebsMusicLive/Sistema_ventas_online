<?php

include("../../config.php");

$rol = $_POST['rol'];

$sentencia = $pdo->prepare("INSERT INTO tbl_roles 
            (rol, fyh_creacion) VALUES (:rol, :fyh_creacion)");
$sentencia->bindParam("rol", $rol);
$sentencia->bindParam("fyh_creacion", $fecha_hora);

if ($sentencia->execute()) {
    session_start();
    $_SESSION["mensaje"] = "Se registró erl rol correctamente";
    $_SESSION["icono"] = "success";
    header("Location:" . $URL . "/roles/");
} else {
    session_start();
    $_SESSION["mensaje"] = "Error no se pudo registrar el rol";
    $_SESSION["icono"] = "error";
    header("Location:" . $URL . "/roles/create.php");
}


?>