<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Eliminar requisición</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            ¿Est&aacute; seguro de eliminar la requisición?
                        </div>
                   
                   <br>
                        <div class="form-group">
                            <label>Id proveedor</label>
                            <label><?php foreach($producto as $productos){} echo $productos['id_req']; ?></label>
                            <input class="form-control" name="idr" type="hidden" value="<?php echo $productos['id_req']; ?>">
                        </div>
                   
                        <div class="form-group">
                            <label>Item</label>
                            <input class="form-control" name="item" readonly value="<?php echo $productos['item']?>">
                        </div>
                   
                        <div class="form-group">
                            <label>Fecha</label>
                            <input class="form-control" name="fechar" readonly value="<?php echo $productos['fecha_requi']?>">
                        </div>

                        <div class="form-group">
                            <label>Solicitante</label>
                            <input class="form-control" name="solici" readonly value="<?php echo $productos['encargado']?>">
                        </div>
                   
                        <div class="form-group">
                            <label>Cantidad</label>
                            <input class="form-control" name="cantr" readonly value="<?php echo $productos['cant_re']?>">
                        </div>
                        <div class="form-group">
                            <label>Unidad</label>
                            <input class="form-control" name="undr" readonly value="<?php echo $productos['unidad']?>">
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <input class="form-control" name="desc" readonly value="<?php echo $productos['des_re']?>">
                        </div>
                        <div class="form-group">
                            <label>Obra</label>
                            <input class="form-control" name="codo" readonly value="<?php echo $productos['obra']?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Tipo</label>
                            <input class="form-control" name="tipor" readonly value="<?php echo $productos['tipo']?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Última Fecha Para Entrega</label>
                            <input class="form-control" name="utlf" readonly value="<?php echo $productos['fecha_ult']?>">
                        </div>

                         <div class="form-group">
                            <label>Proveedor</label>
                            <input class="form-control" name="provee" readonly value="<?php echo $productos['nombre_pro']?>">
                        </div>

                         <div class="form-group">
                            <label>Valor Unitario</label>
                            <input class="form-control" name="val" readonly value="<?php echo $productos['valor_u']?>">
                        </div>

                        <div class="form-group">
                            <label>Estado</label>
                            <input class="form-control" name="estado" readonly value="<?php echo $productos['id_estado']?>">
                        </div>
                         
                        
                        <button>
                            <?php 
                            echo"<a href='index.php?modulo=Requisicion&controlador=requisicion&funcion=postEliminar&id_req=".$productos['id_req']."'>SÍ</a>";
                            ?>
                        </button>
                   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                        <button><a href="<?php echo 
                             getUrl("Requisicion","requisicion","listar"); ?>">NO</a>
                        </button>
                </div>
            </div>                            
</div>
