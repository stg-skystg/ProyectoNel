<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDITAR INVENTARIO</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            EDITAR EQUIPO
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="frm_fac" method="post" action="<?php echo getUrl("inventario","inventario","postEditar"); ?>">
                                        <div class="form-group">
                                            <label>ID Inventario</label>
                                            <label><?php foreach ($inventario as $inventarios){} echo $inventarios['id_inv']; ?></label>
                                            <input class="form-control" name="id_inve" type="hidden" value="<?php echo $inventarios['id_inv']; ?>">
                                        </div>
                                            
                                        <div class="form-group">
                                            <label>Línea</label>
                                            <input class="form-control" name="linea_inv"  value="<?php echo $inventarios[1]?>">
                                        </div> 
                                         <div class="form-group">
                                            <label>Grupo</label>
                                            <input class="form-control" name="grupo_inv"  value="<?php echo $inventarios[2]?>">
                                        </div> 
                                        <div class="form-group">
                                            <label>Elemento</label>
                                            <input class="form-control" name="elemento_inv"  value="<?php echo $inventarios[3]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input class="form-control" name="descripcion_inv"  value="<?php echo $inventarios[4]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Valor Actual</label>
                                            <input class="form-control" name="valordos"  value="<?php echo $inventarios[8]?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Valor Anterior</label>
                                            <input class="form-control" name="valoruno"  value="<?php echo $inventarios[9]?>">
                                        </div>
                                       
                                        
                                       
                                       
                                        </div></div>
                                        
                                        
                                        <button type="submit" class="btn btn-default">Editar</button>
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("inventario","inventario","listar"); ?>">Cancelar</a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>