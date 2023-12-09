<?php

include("../../config.php");

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_usuario = $_POST['id_usuario'];

if($password_user == ''){
    if ($password_user == $password_repeat) {
        $password_user= password_hash($password_user, PASSWORD_DEFAULT);
        $sentencia = $pdo->prepare("UPDATE tbl_usuarios SET 
        nombres = :nombres, 
        email = :email, 
        fyh_actualizacion = :fyh_actualizacion
        WHERE id_usuario = :id_usuario");
        $sentencia->bindParam("nombres", $nombres);
        $sentencia->bindParam("email", $email);
        $sentencia->bindParam("fyh_actualizacion", $fecha_hora);
        $sentencia->bindParam("id_usuario", $id_usuario);
        $sentencia->execute();
    
        session_start();
        $_SESSION["mensaje"] = "Se actualizó al usuario correctamente";
        $_SESSION["icono"] = "success";
        $_SESSION["titulo"] = "Éxito";
        header("Location:".$URL."/usuarios/");
    } else {
        //echo 'Error, las contraseñas no son iguales';
        session_start();
        $_SESSION["mensaje"] = "Las contraseñas no son iguales";
        $_SESSION["icono"] = "error";
        $_SESSION["titulo"] = "Error";
        header("Location:".$URL."/usuarios/update.php?id=".$id_usuario);
    }
}else{
    if ($password_user == $password_repeat) {
        $password_user= password_hash($password_user, PASSWORD_DEFAULT);
        $sentencia = $pdo->prepare("UPDATE tbl_usuarios SET 
        nombres = :nombres, 
        email = :email, 
        password_user = :password_user, 
        fyh_actualizacion = :fyh_actualizacion
        WHERE id_usuario = :id_usuario");
        $sentencia->bindParam("nombres", $nombres);
        $sentencia->bindParam("email", $email);
        $sentencia->bindParam("password_user", $password_user);
        $sentencia->bindParam("fyh_actualizacion", $fecha_hora);
        $sentencia->bindParam("id_usuario", $id_usuario);
        $sentencia->execute();
    
        session_start();
        $_SESSION["mensaje"] = "Se actualizó al usuario correctamente";
        $_SESSION["icono"] = "success";
        $_SESSION["titulo"] = "Éxito";
        header("Location:".$URL."/usuarios/");
    } else {
        //echo 'Error, las contraseñas no son iguales';
        session_start();
        $_SESSION["mensaje"] = "Las contraseñas no son iguales";
        $_SESSION["icono"] = "error";
        $_SESSION["titulo"] = "Error";
        header("Location:".$URL."/usuarios/update.php?id=".$id_usuario);
    }
}



?>