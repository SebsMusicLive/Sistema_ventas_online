<?php

include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');

include('../app/controllers/almacen/listado_de_productos.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de productos</h1>
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
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Productos registrados</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display:block;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th><center>Nro</center></th>
                                        <th><center>Código</center></th>
                                        <th><center>Categoria</center></th>
                                        <th><center>Imagen</center></th>
                                        <th><center>Nombre</center></th>
                                        <th><center>Descripción</center></th>
                                        <th><center>Stock</center></th>
                                        <th><center>Stock mínimo</center></th>
                                        <th><center>Stock máximo</center></th>
                                        <th><center>Precio compra</center></th>
                                        <th><center>Precio venta</center></th>
                                        <th><center>Fecha compra</center></th>
                                        <th><center>Usuario</center></th>
                                        <th><center>Acciones</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach ($productos_datos as $producto_dato) {
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $contador = $contador +1;?></td>
                                            <td><?php echo $producto_dato['codigo'];?></td>
                                            <td><?php echo $producto_dato['categoria'];?></td> 
                                            <td>
                                                <center><img src="<?php echo $URL."/almacen/img_productos/". $producto_dato['imagen'];?>" width="50px"alt=""></center>
                                            </td>
                                            <td><?php echo $producto_dato['nombre'];?></td>
                                            <td><?php echo $producto_dato['descripcion'];?></td>
                                            <td><?php echo $producto_dato['stock'];?></td>
                                            <td><?php echo $producto_dato['stock_minimo'];?></td>
                                            <td><?php echo $producto_dato['stock_maximo'];?></td>
                                            <td><?php echo $producto_dato['precio_compra'];?></td>
                                            <td><?php echo $producto_dato['precio_venta'];?></td>
                                            <td><?php echo $producto_dato['fecha_ingreso'];?></td>
                                            <td><?php echo $producto_dato['email'];?></td>
                                            <td>
                                                <a href="" class="btn btn-success"><i class="fa fa-pencil-alt"></i> Editar</a>
                                            </td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
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


<?php include('../layout/parte2.php');
include('../layout/mensajes.php');
?>

<script>
    $(function () {
        $("#example1").DataTable({
            /* cambio de idiomas de datatable */
            "pageLength": 5,
            language: {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
                "infoEmpty": "Mostrando 0 a 0 de 0 Productos",
                "infoFiltered": "(Filtrado de _MAX_ total Productos)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Productos",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            /* fin de idiomas */


            "responsive": true, "lengthChange": true, "autoWidth": false,
            /* Ajuste de botones */
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy'
                }, {
                    extend: 'pdf',
                }, {
                    extend: 'csv',
                }, {
                    extend: 'excel',
                }, {
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
            {
                extend: 'colvis',
                text: 'Visor de columnas'
            }
            ],
            /*Fin de ajuste de botones*/
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
</script>