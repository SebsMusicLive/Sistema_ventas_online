<?php

if((isset($_SESSION['mensaje'])) && (isset($_SESSION['icono'])) && (isset($_SESSION['titulo']))){
    $respuesta = $_SESSION['mensaje'];
    $icono = $_SESSION['icono'];
    $titulo = $_SESSION['titulo'];?>
    <script>
        Swal.fire({
            icon: "<?php echo $icono; ?>",
            title: "<?php echo $titulo; ?>",
            text: "<?php echo $respuesta; ?>",
            showConfirmButton: false,
            timer: 1500
        });
        </script>
        <?php
        unset($_SESSION['mensaje']);
        unset($_SESSION['icono']);
        unset($_SESSION['titulo']);
    }


?>