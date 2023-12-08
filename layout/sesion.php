<?php

session_start();
if(isset($_SESSION['sesion_email'] )){
  //echo "Sí existe sesión de ".$_SESSION['sesion_email'];
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM tbl_usuarios WHERE email = '$email_sesion'";
    $query = $pdo -> prepare($sql);
    $query -> execute();
    $usuarios = $query -> fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario){
    $nombre_session = $usuario['nombres'];
}
}else{
  echo "No existe sesión";
  header('Location:'.$URL.'/login');
}


?>
