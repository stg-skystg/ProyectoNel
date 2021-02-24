<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Consultar Requisición</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- <a href="<?php echo getUrl("Requisicion","requisicion","listarRe"); ?>"><button class="btn btn-primary">POR APROBAR</button></a>
     <a href="<?php echo getUrl("Requisicion","requisicion","listarRequi"); ?>"><button class="btn btn-danger">RECHAZADAS</button></a> -->
    <br>
    <br>

    <!-- /.row -->
   <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ORDENES DE COMPRA
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th  rowspan="1" colspan="1">CONSECUTIVO</th>
                                        <th  rowspan="1" colspan="1">DESCRIPCIÓN</th>
                                        <th  rowspan="1" colspan="1">SOLICITADO POR</th>
                                        <th  rowspan="1" colspan="1">FECHA</th>
                                        <th  rowspan="1" colspan="1">ACCIONES</th>

                                        
                                          </th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($producto as $productos){                                
                                        echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$productos['consecutivo'].'</td>
                                                <td>'.$productos['des_re'].'</td>
                                                <td>'.$productos['encargado'].'</td>
                                                <td>'.$productos['fecha_requi'].'</td>

                                                
                                                <td>

                                                <a href="index.php?modulo=Requisicion&controlador=requisicion&funcion=getConsultarpdf&consecutivo='.$productos['consecutivo'].'"><button class="btn btn-primary btn-circle btn-md"><i class="fa fa fa fa-search "></i></button></a>

                                                    <a href="index.php?modulo=Requisicion&controlador=requisicion&funcion=getConsultar&consecutivo='.$productos['consecutivo'].'"><button class="btn btn-danger btn-circle btn-md"><i class="fa fa  fa-file-pdf-o"></i></button></a>
                                                    
                                                    
                                                    <a href="index.php?modulo=Requisicion&controlador=requisicion&funcion=getEditar&conse='.$productos['consecutivo'].'"><button class="btn btn-succes btn-circle btn-md"><i class="fa fa fa-pencil  "></i></button></a>

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