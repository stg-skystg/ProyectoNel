<div id="page-wrapper"> 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar requisición</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form role="form" name="requisicion" method="post" action="<?php echo getUrl("Requisicion","requisicion","postCrear"); ?>">
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                                               
                        </div>
                        <div class="panel-body">
                            <div class="row">
                           
                                <div class="col-lg-6">
                                            
                                         
                                         <div class="form-group">
                                             <label>Consecutivo</label>
                                                 <input class="form-control" type="text"  id="consecutivo" name="consecutivo">
                                        </div>

                                       
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <?php
                                                $hoy=date('Y-m-d');
                                            ?>
                                            <input class="form-control" type="date" placeholder="fecha requisicion" id="fechar" name="fechar" value="<?php echo $hoy; ?>">
                                        </div>
                                           <div class="form-group">
                                            <label>Tipo</label>
                                            <select class="form-control" id="tipor" name="tipor">
                                                <option value="">Seleccione Tipo</option>
                                                <option value="Solicitud Cotización">Solicitud Cotización</option>
                                                <option value="Pedido">Pedido</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Estado de aprobación</label>
                                            <select class="form-control" id="estado" name="estado">
                                                <option value="">Seleccione estado</option>
                                                <option value="2">Por aprobar</option>
                                                <option value="1">Aprobada</option>
                                                <option value="3">Rechazada</option>
                                            </select>
                                        </div>  

                                         <div class="form-group">
                                            <label>Solicitante</label>
                                            <input class="form-control" name="solici" id='solici' type="text" placeholder="solicitante">
                                        </div>
                                        
                                      
                                        <div class="form-group">
                                            <label>Última Fecha Para Entrega</label>
                                            <input class="form-control" name="fech" id='fech' type="date" placeholder="Fecha Entrega">
                                        </div>
                                          <div class="form-group">
                                            <label>Observaciones</label>
                                            <textarea class="form-control" name="observa" id='observa' type="text" placeholder="Observaciones">
                                        </textarea></div>
                                         <!-- <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" name="estado" id='estado' type="number" placeholder="valor unitario" value="1">
                                        </div>
 -->
                                        <button type="submit" class="btn btn-info btn-lg">Enviar</button>
                                        <button type="reset" class="btn btn-danger btn-lg">Limpiar</button>
                                     
                                    

                                 </div>
                                </div>                                     <div class="col-lg-15">
                                    <h1></h1>
                                    <form role="form">
                                        
                                            <div class="form-group">
                                            <table>
                                            <tbody id='requi'>
                                               <tr>
                                                    <th></th>
                                                    <th><CENTER>ITEM</CENTER></th>
                                                    <th><CENTER>DESCRIPCIÓN</center></th>
                                                    <th><CENTER>CANTIDAD</center></th>
                                                    <th><CENTER>UNIDAD</center></th>
                                                   
                                                    <th><CENTER>CÓDIGO OBRA</center></th>
                                                    <th><CENTER>VALOR UNITARIO</center></th>
                                                    <th><CENTER>VALOR TOTAL</center></th>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td width="60PX"><center><input type="text" style="border-radius: 5px; width: 47px;" id="itemrequ" name="itemrequ1" width="10px"></center></td> 

                                                     <td>
                                                    <select style="border-radius: 5px; width: 270px; height: 30px;" id="descrip_req" name="descrip_req1" >
                                                <option value="0">Seleccione descripción</option>
                                                <?php                                                                             foreach($descrip as $descrips)                 
                                                {
                                                    echo "<option value=" . $descrips[0]. ">" . $descrips[0]. "</option>";                                                   
                                                }
                                                ?>
                                            </select>
                                      
                                    </td>

                                           <td><CENTER>
                                                     
                                                        <input type="text" style="border-radius: 5px; width: 55px;" id="cantidad_req" name="cantidad_req1">
                                               
                                            
                                                    </CENTER></td>


                                                <td>
                                                  
                                                    <input type="text" style="border-radius: 5px; width: 55px;" id="undadmsreq" name="undadmsreq1">
                                                   
                                                    </td>
                                                      
                                                  
                                                    <td><input type="text" class="form-control" id="codo_req" name="codo_req1">
                                                    <td><input type="text" class="form-control" id="valor_unitreq" name="valor_unitreq1">
                                                    <td><input type="text" class="form-control" id="valor_totreq" name="valor_totreq1">
                                                   


                                                </tr>
                                            </tbody>
                                        <tr><td> <input type="hidden" name="ag_cam" id="ag_cam" value="1">
                                                <input type="button" class="btn btn-warning " name="validar" id="validar" value="Agregar">
                                                
                                            </td></tr> 
                                       
                                        </table> 
                             
                                    </form>
                             </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>