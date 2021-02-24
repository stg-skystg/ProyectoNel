<div id="page-wrapper"> 

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Factura</h1>
                </div>
          
            </div>
            
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                           NUEVA FACTURA                  
                        </div>
                        <div class="panel-body"> 
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="fac_num" method="post" action="<?php echo getUrl("facturacion","facturacion","postCrear"); ?>">
                                        <div class="form-group">
                                            <label>Numero de Factura</label>
                                            <input type="number" class="form-control" name="fac_num" id='fac_num' type="number" placeholder="Numero de Factura">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" class="form-control" name="fac_desc" id='fac_desc' placeholder="Descripcion">
                                        </div>
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input type="number" class="form-control" name="cantidad_pr" id='cantidad_pr' placeholder="Cantidad">
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label>NIT</label>
                                            <input type="number" class="form-control" placeholder="NIT proveedor" id="nitp" name="nitp">
                                        </div>

                                        <div class="form-group">
                                            <label>ID Producto</label>
                                            <input type="number" class="form-control" placeholder="ID Producto" id="id_producto" name="id_producto">
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Fecha Radicación</label>
                                            <input class="form-control" placeholder="Fecha de Radicación" id="radica_fec" name="radica_fec" type="date">
                                        </div>
                                            
                                             <div class="form-group">
                                             <label>Fecha Pago</label>
                                            <input class="form-control" placeholder="Fecha de Pago" id="pago_fec" name="pago_fec" type="date">
                                        </div> 
                                        
                                         <div class="form-group">
                                            <label>Valor Factura</label><i class="fa fa-dollar fa-fw"></i>
                                            <input type="number"  class="form-control" placeholder="Valor Total " id="fac_val" name="fac_val">
                                        </div>
                            
                                            <br>
                                     
                                        <tr><td><input type='hidden' name='cta_campos' id='cta_campos' value="1" >
                                               </td></tr>


                                        <b><button type="submit" class="btn btn-default">Registrar</button>
                                        <b><button type="reset" class="btn btn-default">Limpiar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>

</div>
