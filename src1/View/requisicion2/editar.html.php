<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">REGISTRAR ORDEN DE COMPRA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            ORDEN DE COMPRA
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" name="frm_ciudad" method="post" action="<?php echo getUrl("requisicion2","requisicion2","postEditar"); ?>">
    
                                        
                               <table>
                                        <table class="table table-bordered jambo_table bulk_action">
                                              <thead>
                                                <tr class="headings">
                                                    <th>Descripción</th>
                                                    <th>Cantidad</th>
                                                    <th>Unidad</th>
                                                   <!--  <th>Item</th> -->
                                                    <th>Obra Codigo</th>
                                                    <th>Proveedor</th>
                                                    <th>Valor Unitario</th>
                                                    <th>Valor Total</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="requi">
                                                  <?php                
                                                      foreach ($producto as $productos) 
                                                      {
                                                        echo"<tr>";
                                                            echo"<td>".$productos['des_re']."</td>";
                                                            echo"<td>".$productos['cant_re']."</td>";
                                                            echo"<td>".$productos['unidad']."</td>";
                                                            // echo"<td>".$productos['item']."</td>";
                                                            echo"<td>".$productos['obra']."</td>";
                                                            echo"<td>".$productos['nombre_pro']."</td>";
                                                            echo"<td>".$productos['valor_u']."</td>";
                                                            echo"<td>".$productos['valor_total']."</td>";

                                                        echo"</tr>";             
                                                      }
                                                  ?>
                                              </tbody>
                                            </table>                 

                                            
                                   <div class="col-lg-6">    
                                       <div class="form-group">
                                            <label>Consecutivo</label>
                                          <input class="form-control" name="conse" value="<?php echo $productos[2]?>">
                                      </div>
                                     
                                        <div class="form-group">
                                            <label>Fecha</label>
                                          <input type="date" class="form-control" name="fechar"  value="<?php echo $productos[8]?>">
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
                                            <label>Lugar de Entrega</label>
                                            <input class="form-control" name="lugar_entrega" id='lugar_entrega' type="text" placeholder="Lugar de entrega" value="<?php echo $productos[18]?>">
                                        </div> 
                                         <div class="form-group">
                                            <label>Telefono proveedor</label>
                                            <input class="form-control" name="telefono1" id='telefono1' type="number" placeholder="telefono 1" value="<?php echo $productos[19]?>">
                                        </div> 
                                         <div class="form-group">
                                            <label>Telefono proveedor</label>
                                            <input class="form-control" name="telefono2" id='telefono2' type="text" placeholder="Telefono 2" value="<?php echo $productos[20]?>">
                                        </div> 
                                            <div class="form-group" >
                                            <label>Forma de Pago</label>
                                            <select class="form-control" id="forma_pago" name="forma_pago" value="<?php echo $productos[21]?>">
                                                <option value="30 dias">30 DIAS</option>
                                                <option value="60 dias">60 DIAS</option>
                                                <option value="90">90 DIAS</option>
                                                <option value="90">120 DIAS</option>
                                                <option value="90">150 DIAS</option>
                                                
                                            </select>
                                        
                                        </div>   

                                        
                                         <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" name="estado" value="4">
                                        </div>
                                         <div class="form-group">
                                            <label>Observación</label>
                                            <input class="form-control" name="observa"  value="<?php echo $productos[15]?>">
                                        </div>
                                          
                                        
                                             
                                        
                                        
                                        &nbsp; &nbsp;&nbsp;<button type="submit" class="btn btn-info btn-lg">Registrar</button>
                                        <button class="btn btn-danger btn-lg"><a  href="<?php echo 
                                        getUrl("requisicion2","requisicion2","listar"); ?>"><font color="white">Cancelar</font></a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>