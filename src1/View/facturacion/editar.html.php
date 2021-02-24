<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDITAR FACTURA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            EDITAR
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="frm_fac" method="post" action="<?php echo getUrl("facturacion","facturacion","postEditar"); ?>">
                                        <div class="form-group">
                                            <label>Numero de factura</label>
                                            <label><?php foreach ($factura as $facturas){} echo $facturas['id_fact']; ?></label>
                                            <input class="form-control" name="fac_num" type="hidden" value="<?php echo $facturas['id_fact']; ?>">
                                        </div>
                                            
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input class="form-control" name="fac_desc"  value="<?php echo $facturas[1]?>">
                                        </div> 
                                         <div class="form-group">
                                            <label>Cantidad</label>
                                            <input class="form-control" name="cantidad_pr"  value="<?php echo $facturas[5]?>">
                                        </div> 
                                        <div class="form-group">
                                            <label> NIT</label>
                                            <input class="form-control" disabled name="nitp"  value="<?php echo $facturas[4]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>ID Producto</label>
                                            <input class="form-control" name="id_producto"  value="<?php echo $facturas[6]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha radicación</label>
                                            <input  type="date" class="form-control" name="radica_fec"  value="<?php echo $facturas[7]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha Pago</label>
                                            <input  type="date" class="form-control" name="pago_fec"  value="<?php echo $facturas[3]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Valor Factura</label>
                                            <input class="form-control" name="fac_val"  value="<?php echo $facturas[2]?>">
                                        </div></div>
                                        
                                        
                                        <button type="submit" class="btn btn-default">Editar</button>
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("facturacion","facturacion","listar"); ?>">Cancelar</a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>