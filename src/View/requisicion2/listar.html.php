<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">REGISTRAR ORDEN DE COMPRA</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
   <!-- /.row -->
   <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DIGITE EL CODIGO DE LA REQUISICION O NOMBRE DEL SOLICITANTE PARA REGISTRAR LA ORDEN DE COMPRA
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th  rowspan="1" colspan="1">CODIGO</th>
                                        <th  rowspan="1" colspan="1">CODIGO OBRA</th>
                                        <th  rowspan="1" colspan="1">DESCRIPCIÓN</th>
                                        <th  rowspan="1" colspan="1">SOLICITADO POR</th>
                                        <th  rowspan="1" colspan="1">FECHA</th>
                                        <th  rowspan="1" colspan="1">REGISTRAR</th>

                                        
                                          </th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($producto as $productos){                                
                                        echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$productos['consecutivo'].'</td>
                                                <td>'.$productos['obra'].'</td>
                                                <td>'.$productos['des_re'].'</td>
                                                <td>'.$productos['encargado'].'</td>
                                                <td>'.$productos['fecha_requi'].'</td>

                                                
                                                <td>

                                            <a href="index.php?modulo=Requisicion2&controlador=requisicion2&funcion=getEditar&conse='.$productos['consecutivo'].'"><button class="btn btn-primary btn-lg"><i class="fa fa  fa-sign-out    "></i></button></a>
                                              
                                                    

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