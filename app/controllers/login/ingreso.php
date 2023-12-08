<?php

include ("../../config.php");

$email = $_POST["email"];
$password_user = $_POST["password_user"];



$contador = 0;

$sql = "SELECT * FROM tbl_usuarios WHERE email = '$email'";
$query = $pdo -> prepare($sql);
$query -> execute();
$usuarios = $query -> fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario){
    $contador++;
    $email_tbl = $usuario['email'];
    $nombres = $usuario['nombres'];
    echo $password_user_tabla = $usuario['password_user'];
}

if($contador > 0 && (password_verify($password_user, $password_user_tabla))){
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location: '.$URL.'/');
}else{
    echo "Datos incorrectos, vuelve a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Error";
    header('Location:'.$URL.'/login');
}