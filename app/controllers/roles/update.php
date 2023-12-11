<?php

include("../../config.php");

$id_rol = $_POST['id_rol'];
$rol = $_POST['rol'];

$sentencia = $pdo->prepare("UPDATE tbl_roles SET 
        rol = :rol, 
        fyh_actualizacion = :fyh_actualizacion
        WHERE id_rol = :id_rol");
$sentencia->bindParam("rol", $rol);
$sentencia->bindParam("fyh_actualizacion", $fecha_hora);
$sentencia->bindParam("id_rol", $id_rol);
if ($sentencia->execute()) {
    session_start();
    $_SESSION["mensaje"] = "Se actualizó el rol correctamente";
    $_SESSION["icono"] = "success";
    $_SESSION["titulo"] = "Éxito";
    header("Location:" . $URL . "/roles/");
} else {
    //echo 'Error, las contraseñas no son iguales';
    session_start();
    $_SESSION["mensaje"] = "No se ha actualizado el rol de la manera correcta";
    $_SESSION["icono"] = "error";
    $_SESSION["titulo"] = "Error";
    header("Location:" . $URL . "/roles/update.php?id=" . $id_rol);
}

?>