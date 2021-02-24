<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Consultar Requisición</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
        
    <!-- /.row -->
    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            REQUISICIÓN ADMINISTRATIVA
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th  rowspan="1" colspan="1" >Consecutivo</th>
                                        <th  rowspan="1" colspan="1" >Item</th>
                                        <th  rowspan="1" colspan="1" >Cantidad</th>
                                        <th  rowspan="1" colspan="1" >Unidad</th>
                                        <th  rowspan="1" colspan="1" >Solicitante</th>
                                        <th  rowspan="1" colspan="1" >Tipo</th>
                                         <th  rowspan="1" colspan="1">Fecha</th>
                                        <th  rowspan="1" colspan="1" >Descripcion</th>
                                        <th  rowspan="1" colspan="1" >Código Obra</th>
                                        <th  rowspan="1" colspan="1" >Última Fecha Para Entrega</th>
                                        <th  rowspan="1" colspan="1" >Proveedor</th>
                                        <th  rowspan="1" colspan="1">Valor Unitario</th>
                                         <th  rowspan="1" colspan="1">Estado</th>
                                        <th  rowspan="1" colspan="1">Acciones</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($producto as $productos){                                
                                        echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$productos['id_req'].'</td>
                                                <td>'.$productos['item'].'</td>
                                                <td>'.$productos['cant_re'].'</td>
                                                <td>'.$productos['unidad'].'</td>
                                                <td>'.$productos['encargado'].'</td>
                                                <td>'.$productos['tipo'].'</td>
                                                <td>'.$productos['fecha_requi'].'</td>
                                                <td>'.$productos['des_re'].'</td>
                                                <td>'.$productos['obra'].'</td>
                                                <td>'.$productos['fecha_ult'].'</td>
                                                <td>'.$productos['nombre_pro'].'</td>
                                                <td>'.$productos['valor_u'].'</td><td>';
                                                
                                                if($productos['id_estado']==2){echo 'POR APROBAR';}
                                                
                                               echo '</td><td>
                                                   
                                                    <a href="index.php?modulo=Requisicion&controlador=requisicion&funcion=getRestaurar&id_req='.$productos['id_req'].'"><button class="btn btn-primary btn-circle btn-md"><i class="fa fa fa-check"></i></button></a>
                                                      
                                                </td>
                                                
                                                
                                             </tr>';
                                    }
                                ?>
                                    
                                  

                                    </tbody>
                            </table>
                            <a href="<?php echo getUrl("Requisicion","requisicion","listar"); ?>"><button class="btn btn-info">REGRESAR</button></a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
</div>