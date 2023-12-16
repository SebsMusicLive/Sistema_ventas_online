<?php

include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');

include('../app/controllers/almacen/cargar_producto.php');

foreach ($productos_datos as $producto_dato) {
    $codigo = $producto_dato['codigo'];
    $nombre_categoria = $producto_dato['nombre_categoria'];
    $nombre = $producto_dato['nombre'];
    $email = $producto_dato['email'];
    $descripcion = $producto_dato['descripcion'];
    $stock = $producto_dato['stock'];
    $stock_minimo = $producto_dato['stock_minimo'];
    $stock_maximo = $producto_dato['stock_maximo'];
    $precio_compra = $producto_dato['precio_compra'];
    $precio_venta = $producto_dato['precio_venta'];
    $fecha_ingreso = $producto_dato['fecha_ingreso'];
    $imagen = $producto_dato['imagen'];
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Datos del producto:
                        <?php echo $nombre; ?>
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datos del producto</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display:block;">
                            <div class="row">
                                <div class="col-md-12">

                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Código:</label>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo $codigo; ?>" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Categoria:</label>
                                                            <input type="text" name="" id=""
                                                                value="<?php echo $nombre_categoria; ?>"
                                                                class="form-control" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Nombre del producto:</label>
                                                            <input type="text" name="nombre" class="form-control"
                                                            value="<?php echo $nombre;?>"disabled="disabled">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Usuario</label>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo $email; ?> "
                                                                disabled='disabled'>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="">Descripción del producto:</label>
                                                            <textarea name="descripcion" id="" cols="30" rows="2"
                                                                class="form-control" disabled><?php echo $descripcion;?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock:</label>
                                                            <input type="number" name='stock' class="form-control"
                                                            value= "<?php echo $stock;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock mínimo:</label>
                                                            <input type="number" name='stock_minimo'
                                                                class="form-control" value="<?php echo $stock_minimo;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock máximo:</label>
                                                            <input type="number" name='stock_maximo'
                                                                class="form-control" value="<?php echo $stock_maximo;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Precio de compra:</label>
                                                            <input type="number" name='precio_compra'
                                                                class="form-control" value="<?php echo $precio_compra;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Precio de venta:</label>
                                                            <input type="number" name='precio_venta'
                                                                class="form-control" value="<?php echo $precio_venta;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Fecha de ingreso:</label>
                                                            <input type="date" name="fecha_ingreso" class="form-control"
                                                            value="<?php echo $fecha_ingreso;?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Imagen del producto</label>
                                                    <center>
                                                        <img src="<?php echo $URL."/almacen/img_productos/". $imagen;?>" width="100%" alt="">
                                                    </center>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                        </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/parte2.php'); ?>