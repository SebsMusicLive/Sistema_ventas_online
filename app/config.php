<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', 'admin');
define('BD', 'sistemadeventas');
$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "Conexión a la base de datos exitosa";
}catch(PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

$URL = "http://localhost/www.sistemasdeventas.com";

date_default_timezone_set("America/Bogota");
$fecha_hora = date("y-m-d H:i:s");


?>