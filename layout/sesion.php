<?php

session_start();
if(isset($_SESSION['sesion_email'] )){
  //echo "Sí existe sesión de ".$_SESSION['sesion_email'];
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT us.id_usuario as id_usuario, 
    us.nombres as nombres, 
    us.email as email, 
    rol.rol as rol 
    FROM tbl_usuarios as us 
    INNER JOIN tbl_roles as rol 
    ON us.id_rol = rol.id_rol WHERE email = '$email_sesion'";
    $query = $pdo -> prepare($sql);
    $query -> execute();
    $usuarios = $query -> fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario){
   $id_usuario_sesion = $usuario["id_usuario"];
    $nombre_session = $usuario['nombres'];
    $rol_session = $usuario['rol'];

}
}else{
  echo "No existe sesión";
  header('Location:'.$URL.'/login');
}


?>
