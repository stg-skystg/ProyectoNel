<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Consultar Requisición</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Requisición
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" name="frm_ciudad" method="post" action="<?php echo getUrl("Requisicion","requisicion","postConsultar"); ?>">
    
                                        
                               <table>
                                        <table class="table table-bordered jambo_table bulk_action">
                                              <thead>
                                                <tr class="headings">
                                                    <th>Descripcion</th>
                                                    <th>Cant</th>
                                                    <th>Und</th>
                                                    <th>item</th>
                                                    <th>Obra Codigo</th>
                                                    <th>Proveedor   </th>
                                                    <th>Valor Unitario</th>
                                                    <th>Valor Total</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="requi">
                                                  <?php                
                                                      foreach ($producto as $productos) 
                                                      {
                                                        echo"<tr>";
                                                            echo"<td>".$productos['des_re']."></td>";
                                                            echo"<td>".$productos['cant_re']."</td>";
                                                            echo"<td>".$productos['unidad']."</td>";
                                                            echo"<td>".$productos['item']."</td>";
                                                            echo"<td>".$productos['obra']."</td>";
                                                            echo"<td>".$productos['nombre_pro']."</td>";
                                                            echo"<td>".$productos['valor_u']."</td>";
                                                            echo"<td>".$productos['valor_total']."</td>";

                                                        echo"</tr>";             
                                                      }
                                                  ?>
                                              </tbody>
                                            </table>                 

                                            
                                        
                                       <div class="form-group">
                                            <label>Consecutivo</label>
                                          <input class="form-control" name="consecutivo" disabled value="<?php echo $productos[2]?>">
                                      </div>
                                      
                                        <div class="form-group">
                                            <label>Fecha</label>
                                          <input class="form-control" name="fechai"  value="<?php echo $productos[8]?>">
                                      </div>
                                          
                                         <div class="form-group">
                                            <label>Solicitado por</label>
                                            <input class="form-control" name="solici"  value="<?php echo $productos[9]?>">
                                        </div>
                                         
                                        <div class="form-group">
                                            <label>Ultima Fecha Para Entrega</label>
                                            <input class="form-control" name="fech"  value="<?php echo $productos[7]?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Proveedor</label>
                                            <input class="form-control" name="provee"  value="<?php echo $productos[11]?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Tipo</label>
                                            <input class="form-control" name="tipor"  value="<?php echo $productos[10]?>">

                                        </div>
                                         
                                       
                                         <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" name="estado" disabled value="<?php echo $productos[14]?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Observación</label>
                                            <input class="form-control" name="observa"  value="<?php echo $productos[15]?>">
                                        </div>
                                          
                                          
                                        
                                             
                                        
                                        
                                        
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("Requisicion","requisicion","listar"); ?>">Regresar</a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>