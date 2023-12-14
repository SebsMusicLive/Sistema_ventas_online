<?php

include('../../config.php');

$nombre_categoria = $_GET['nombre_categoria'];

$sentencia = $pdo->prepare("INSERT INTO tbl_categorias 
            (nombre_categoria, fyh_creacion) 
            VALUES (:nombre_categoria, :fyh_creacion)");


$sentencia->bindParam("nombre_categoria", $nombre_categoria);
$sentencia->bindParam("fyh_creacion", $fecha_hora);

if ($sentencia->execute()) {
    session_start();
    $_SESSION["mensaje"] = "Se registró la categoría correctamente";
    $_SESSION["icono"] = "success";
    //header("Location:" . $URL . "/categorias/");
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/categorias/";
    </script>
    <?php
} else {
    session_start();
    $_SESSION["mensaje"] = "Error no se pudo registrar la categoría";
    $_SESSION["icono"] = "error";
    //header("Location:" . $URL . "/categorias/");
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/categorias/";
    </script>
    <?php
}

?>