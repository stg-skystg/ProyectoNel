<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CONSULTAR FACTURAS</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            FACTURAS
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th  rowspan="1" colspan="1" >ID FACTURA</th>
                                        <th  rowspan="1" colspan="1" >DESCRIPCIÓN</th>
                                        <th  rowspan="1" colspan="1" >CANTIDAD</th>
                                        <th  rowspan="1" colspan="1" >NIT</th>
                                        <th  rowspan="1" colspan="1">FECHA RADICADO</th>
                                        <th  rowspan="1" colspan="1">FECHA DE PAGO</th>
                                        <th  rowspan="1" colspan="1">ID DE PRODUCTO</th>
                                        <th  rowspan="1" colspan="1">VALOR</th>
                                     <th  rowspan="1" colspan="1">ACCIONES</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($factura as $facturas){                                
                                        echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$facturas['id_fact'].'</td>
                                                <td>'.$facturas['descripcion_fact'].'</td>
                                                <td>'.$facturas['cantidad_pr'].'</td>
                                                <td>'.$facturas['nit'].'</td>
                                                <td>'.$facturas['radica_fech'].'</td>
                                                <td>'.$facturas['fecha_fact'].'</td>
                                                   <td>'.$facturas['id_producto'].'</td>
                                                <td>'.$facturas['valor_tot'].'</td>
                                                <td>
                                                    <a href="index.php?modulo=facturacion&controlador=facturacion&funcion=getEditar&fac_num='.$facturas['id_fact'].'"><button class="btn btn-primary btn-circle btn-md"><i class="fa fa fa-list"></i></button></a>
                                                       <a href="index.php?modulo=facturacion&controlador=facturacion&funcion=getEditar&fac_num='.$facturas['id_fact'].'"><button class="btn btn-danger btn-circle btn-md"><i class="fa fa-file-pdf-o  "></i></button></a>
                                        
                                                </td>
                                                
                                             </tr>';
                                    }
                                ?>
                                    
                                  

                                    </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
</div>