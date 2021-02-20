


<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Consultar Facturas</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
       <div class="table-responsive">
   &nbsp <input type='text' name='buscar_fac' id='buscar_fac' data-url='<?php echo getUrl("facturacion", "facturacion", "listarFiltro", false, "ajax")?>'>   <label> <i class="fa fa-search fa-fw"></i></label> 

           
            <table class="table table-hover table-striped" >
                <thead>
                    <tr>
                        <th>ID FACTURA</th>
                        <th>DESCRIPCIÓN</th>
                        <th>CANTIDAD</th>
                        <th>NIT</th>
                        <th>FECHA RADICADO</th>
                        <th>FECHA DE PAGO</th>
                        <th>ID DE PRODUCTO</th>
                        <th>VALOR</th>

                       
                        <th colspan="3" align='/center/' >ACCIONES</th>

                    </tr>
                </thead>
                <tbody id='lista_fic '>
                    <?php                                                                                              
                        foreach ($factura as $facturas) 
                        {
                    
                            echo"<tr>";
                                
                                echo"<td>".$facturas['id_fact']."</td>";
                                echo"<td>".$facturas['descripcion_fact']."</td>";
                                echo"<td>".$facturas['cantidad_pr']."</td>";
                                echo"<td>".$facturas['nit']."</td>";
                                echo"<td>".$facturas['radica_fech']."</td>";
                                echo"<td>".$facturas['fecha_fact']."</td>";
                                echo"<td>".$facturas['id_producto']."</td>";   
                                echo"<td>".$facturas['valor_tot']."</td>"; 


                               
                               
                                                                  
                                echo"<td><a href='index.php?modulo=facturacion&controlador=facturacion&funcion=getEditar&fac_num=".$facturas['id_fact']."'><button class='btn btn-primary btn-circle btn-lg'><i class='fa fa fa-pencil'></i></button></a></td>";

                                echo"<td><a href='index.php?modulo=facturacion&controlador=facturacion&funcion=consultas&fac_num=".$facturas['id_fact']."'><button class='btn btn-primary btn-circle btn-lg'><i class='fa fa-file-pdf-o    '></i></button></a></td>";
                               
                            echo"</tr>";
                                         
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>