a<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CONSULTAR INVENTARIO</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            EQUIPOS
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th  rowspan="1" colspan="1" >ID INVENTARIO</th>
                                        <th  rowspan="1" colspan="1" >LINEA</th>
                                        <th  rowspan="1" colspan="1" >GRUPO</th>
                                        <th  rowspan="1" colspan="1" >ELEMENTO</th>
                                        <th  rowspan="1" colspan="1" >DESCRIPCION</th>
                                        
                                        <th  rowspan="1" colspan="1">ESTADO</th>
                                        
                                     <th  rowspan="1" colspan="1">ACCIONES</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($inventario as $inventarios){                                
                                        echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$inventarios['id_inv'].'</td>
                                                <td>'.$inventarios['linea_inv'].'</td>
                                                <td>'.$inventarios['grupo_inv'].'</td>
                                                <td>'.$inventarios['elemento_inv'].'</td>
                                                <td>'.$inventarios['descripcion_inv'].'</td><td>';
                                                

                                                if($inventarios['id_estado']==1){echo 'ACTIVO';} else {echo 'INACTIVO';}
                                              
                                              
                                               echo '</td><td>
                                                    
                                                    <a href="index.php?modulo=inventario&controlador=inventario&funcion=getRestaurar&id_inv='.$inventarios['id_inv'].'"><button class="btn btn-primary btn-circle btn-md"><i class="fa fa fa-check"></i></button></a>
                                                   
                                        
                                                </td>

                                                
                                             </tr>';
                                    }
                                ?>
                                    
                                  

                                    </tbody>
                            </table>
                            <BR>
                            <BR>
                            <a href="<?php echo getUrl("inventario","inventario","listar"); ?>"><button class="btn btn-info">REGRESAR</button></a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
</div>