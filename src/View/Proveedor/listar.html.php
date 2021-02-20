 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Consultar Vida Plena</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
     <a href="<?php echo getUrl("Proveedor","proveedor","listarIn"); ?>"><button class="btn btn-info">DESPACHADOS</button></a>
     <br>
     <br>
     <br>
    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                Vida Plena 2021
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <table width="50%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th  rowspan="1" colspan="1">ID Pedido</th>
                                        <th  rowspan="1" colspan="1">Fecha</th>
                                        <th  rowspan="1" colspan="1">Directora</th>
                                        <th  rowspan="1" colspan="1">Numero de Pedidos</th>
                                        <th  rowspan="1" colspan="1">Productos</th>
                                        <th  rowspan="1" colspan="1">Color</th>
                                        <th  rowspan="1" colspan="1">Talla</th>
                                        <th  rowspan="1" colspan="1">Ubicación</th>
                                        <th  rowspan="1" colspan="1">Cantidad Solic</th>
                                        <th  rowspan="1" colspan="1">Inventario</th>
                                       
                                        
                                        <th  rowspan="1" colspan="1">Acciones</th>
                                        <th  rowspan="1" colspan="1">Estado</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    foreach ($producto as $productos){   

                                        echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$productos['idp_proveedor'].'</td>
                                                <td>'.$productos['nit'].'</td>
                                                <td>'.$productos['nombre'].'</td>
                                                <td>'.$productos['pass'].'</td>
                                                <td>'.$productos['telefono'].'</td>
                                                <td>'.$productos['telefono_dos'].'</td>
                                                <td>'.$productos['telefono_tres'].'</td>
                                                <td>'.$productos['telefono_cua'].'</td>
                                                <td>'.$productos['direccion'].'</td>
                                                <td>'.$productos['correo'].'</td>
                                                 
                                                
                                                
                                                <td>
                                                    <a href="index.php?modulo=Proveedor&controlador=proveedor&funcion=getEditar&idp='.$productos['idp_proveedor'].'"><button class="btn btn-primary btn-circle btn-md"><i class="fa fa fa-check"></i></button></a>

                                                    
                                                     
                                                </td><td>';

                                               if($productos['id_estado']==1){echo 'Sin Despachar';} else {echo 'INACTIVO';}

                                                echo '</td>
                                                
                                                
                                               
                                                
                                                
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
