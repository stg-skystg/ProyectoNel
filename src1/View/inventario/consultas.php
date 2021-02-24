<body><center>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DESCARGAR FACTURA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            DESCARGA FACTURA
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    <form role="form" name="frm_fac" method="post" action="<?php echo getUrl("facturacion","facturacion","listar.html.php"); ?>">
                                        <div class="form-group">
                                            <label>FACTURA DE VENTA    </label>
                                            <label><?php foreach ($factura as $facturas){} echo $facturas['id_fact']; ?></label>
                                            <input  disabled name="fac_num" type="hidden" value="<?php echo $facturas['id_fact']; ?>">
                                        </div>
                                            COIN S.A.S 
                                            Fabrica y Oficinas: Carrera 34 N° 10-445 Acopi - Cali Colombia <br>
                                            Conmutador: (57) (2) - 6959110 Fax: (57) (2) - 6959231 <BR>
                                            Email: coin@coinsas.com.co<br>
                                            <IMG SRC="logopdf.png">
                                           <BR> 
 
          

                                        <div class="form-group">
                                          &nbsp &nbsp &nbsp   <label>DESCRIPCIÓN</label>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
                                            <input  disabled name="fac_desc"  value="<?php echo $facturas[1]?>">
                                        </div>

                                        
                                         <div class="form-group">
                                          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <label>CANTIDAD</label>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
                                            <input  disabled name="cantidad_pr"  value="<?php echo $facturas[2]?>">
                                        </div>

                                        <div class="form-group">
                                       &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp    
                                       <label> NIT </label>

                                         &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp
                                            <input  disabled name="nitp"  value="<?php echo $facturas[5]?>">
                                        </div>
                                        
                                        <div class="form-group">
                                         &nbsp &nbsp &nbsp &nbsp &nbsp    <label>ID PRODUCTO</label>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 
                                            <input  disabled name="id_producto"  value="<?php echo $facturas[6]?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>FECHA RADICACIÓN</label> &nbsp &nbsp  &nbsp &nbsp 
                                            <input  type="date"  disabled name="radica_fec"  value="<?php echo $facturas[7]?>">
                                        </div>
                                        
                                        <div class="form-group">
                                       &nbsp &nbsp &nbsp <label>FECHA PAGO</label> &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp&nbsp
                                            <input  type="date"  disabled name="pago_fec"  value="<?php echo $facturas[4]?>">
                                        </div>
                                        
                                        <div class="form-group">
                                           &nbsp &nbsp  &nbsp &nbsp <label>VALOR FACTURA</label>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 
                                            <input  disabled name="fac_val"  value="<?php echo $facturas[3]?>">
                                        </div></div>
                                        
                                        
                                      
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("facturacion","facturacion","listar"); ?>">Regresar</a></button> 
                                        &nbsp &nbsp

                                     <button class="btn btn-default">   <i class="fa fa-file-pdf-o   fa-fw"> <a href="<?php echo 
                                        getUrl("facturacion","facturacion","listar"); ?>"></a></button></i>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>
</center>></body>