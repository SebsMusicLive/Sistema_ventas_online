<?php

//$sql_usuarios = 'SELECT * FROM  tbl_usuarios';

$sql_productos = "SELECT *,
    cat.nombre_categoria as categoria,
    u.email as email
    FROM tbl_almacen as a 
    INNER JOIN tbl_categorias as cat 
    ON a.id_categoria = cat.id_categoria
    INNER JOIN tbl_usuarios as u
    ON u.id_usuario = a.id_usuario";
$query_productos = $pdo->prepare($sql_productos);
$query_productos->execute();
$productos_datos = $query_productos->fetchAll(PDO::FETCH_ASSOC);

?>