 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Consultar Vida Plena Despachada&nbsp<i class="fa  fa-sort-amount-asc fa-fw"></i></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
     <a href="<?php echo getUrl("Vidaplena","vidaplena","listar"); ?>"><button class="btn btn-danger">Vida Plena sin despachar</button></a>
     <br><br><br> 
    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                Vida Plena 2021
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th  rowspan="1" colspan="1" >ID Pedido</th>
                                        <th  rowspan="1" colspan="1" >ID lote</th>
                                        <th  rowspan="1" colspan="1" >Nombre Gerente</th>
                                        <th  rowspan="1" colspan="1">Cedúla Gerente</th>
                                        <th  rowspan="1" colspan="1" >Fecha</th>
                                        <th  rowspan="1" colspan="1">Estado</th>
                                        <th  rowspan="1" colspan="1">Consultar</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($producto as $productos){                                
                                        echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$productos['idpedido'].'</td>
                                                <td>'.$productos['idlote'].'</td>
                                                <td>'.$productos['nombregere'].'</td>
                                                <td>'.$productos['cedulagere'].'</td>
                                                <td>'.$productos['fecha'].'</td>
                                             
                                                
                                                  <td style="background-color:#f7b9bd">';

                                               if($productos['id_estado']==1){echo 'Sin Despachar';} else {echo 'DESPACHADO';}

                                                echo '</td>
                                                
                                                
                                               <td> 
                                                <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=consultarDesp&idp='.$productos['idpedido'].'"><button class="btn btn-primary  btn-md"><i class="fa fa-search"></i></button></a> 
                                                     
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
