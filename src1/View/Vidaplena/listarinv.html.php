 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1 class="page-header">Consultar Inventario Vida Plena &nbsp<i class="fa  fa-book fa-fw"></i></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
     <br>
    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                Vida Plena 2021
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <table width="80%" align="center" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th  rowspan="1" colspan="1" >Referencia </th>
                                        <th  rowspan="1" colspan="1" >Nombre</th>
                                        <th  rowspan="1" colspan="1">Unidades Despachadas</th>           
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($producto as $productos){                                
                                        echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$productos['referenc'].'</td>
                                                <td>'.$productos['nompro'].'</td>
                                                
                                                <td>'.$productos['SUM(cantvend)'].'</td>
                                            
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
