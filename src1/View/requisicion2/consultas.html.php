<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Consultar Orden de Compra</h1>
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
                                <div class="col-lg-6">
                                    <form role="form" name="frm_ciudad" method="post" action="<?php echo getUrl("Requisicion","requisicion","getConsultar"); ?>">
    
                                        
                               <table>
                                        <table class="table table-bordered jambo_table bulk_action">
                                              <thead>
                                                <tr class="headings">
                                                    <th>Item</th>
                                                    <th>Cantidad</th>
                                                    <th>Unidad</th>
                                                    <th>Descripción</th>
                                                    <th>Obra Codigo</th>
                                                    <th>Valor Unitario</th>
                                                    <th>Valor Total</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="presh_herr">
                                                  <?php                
                                                      foreach ($producto as $productos) 
                                                      {
                                                        echo"<tr>";
                                                            echo"<td><input readonly value=".$productos['item']."></td>";
                                                            echo"<td>".$productos['cantidad']."</td>";
                                                            echo"<td>".$productos['unidad']."</td>";
                                                            echo"<td>".$productos['des_re']."</td>";
                                                            echo"<td>".$productos['obra']."</td>";
                                                            echo"<td>".$productos['valor_u']."</td>";
                                                            echo"<td>".$productos['valor_total']."</td>";

                                                        echo"</tr>";             
                                                      }
                                                  ?>
                                              </tbody>
                                            </table>                 

                                                     <div class="form-group">
                                            <label>Consecutivo</label>
                                            <label><?php foreach($producto as $productos){} echo $productos[0]; ?></label>
                                            <input class="form-control" name="idr" type="hidden"  value="<?php echo $productos['id_req']; ?>">
                                        </div>
                                        
                                      
                                        <div class="form-group">
                                            <label>Item</label>
                                            <input class="form-control" name="item"  value="<?php echo $productos[1]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha</label>
                                          <input class="form-control" name="fechar"  value="<?php echo $productos[7]?>">
                                      </div>
                                          
                                         <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" name="cantr"  value="<?php echo $productos[3]?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Unidad</label>
                                            <input class="form-control" name="undr"  value="<?php echo $productos[4]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input class="form-control" name="desc"  value="<?php echo $productos[5]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Obra</label>
                                            <input class="form-control" name="codo"  value="<?php echo $productos[2]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo</label>
                                            <input class="form-control" name="tipor"  value="<?php echo $productos[9]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Solicitante</label>
                                            <input class="form-control" name="solici"  value="<?php echo $productos[8]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Ultima Fecha Para Entrega</label>
                                            <input class="form-control" name="fech"  value="<?php echo $productos[6]?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Proveedor</label>
                                            <input class="form-control" name="provee"  value="<?php echo $productos[10]?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Valor Unitario</label>
                                            <input class="form-control" name="val"  value="<?php echo $productos[11]?>">

                                        </div>
                                        
                                       
                                         <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" name="estado" disabled value="<?php echo $productos[12]?>">
                                        </div>
                                          
                                        
                                             
                                        
                                        
                                        &nbsp; &nbsp;&nbsp;<button type="submit" class="btn btn-default">Editar</button>
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("Requisicion","requisicion","listar"); ?>">Cancelar</a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>