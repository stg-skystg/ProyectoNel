<div id="page-wrapper"> 

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Inventario</h1>
                </div>
          
            </div>
            
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                           NUEVO EQUIPO               
                        </div>
                        <div class="panel-body"> 
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="id_inv" method="post" action="<?php echo getUrl("inventario","inventario","postCrear"); ?>">
                                        <div class="form-group">
                                            <label>ID Inventario</label>
                                            <input type="text" class="form-control" name="id_inve" id='id_inve' disabled id='id_inve'  placeholder="ID Inventario">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <?php
                                                $hoy=date('Y-m-d');
                                            ?>
                                            <input class="form-control" type="date" placeholder="fecha requisicion" id="fechar" name="fechar" value="<?php echo $hoy; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>LINEA</label>
                                            <input type="text" class="form-control" name="linea_inv" id='linea_inv'  placeholder="Linea Equipo">
                                        </div>
                                        <div class="form-group">
                                            <label>GRUPO</label>
                                            <input type="text" class="form-control" name="grupo_inv" id='grupo_inv' placeholder="Grupo Equipo">
                                        </div>
                                        <div class="form-group">
                                            <label>ELEMENTO</label>
                                            <input type="text" class="form-control" name="elemento_inv" id='elemento_inv' placeholder="Elemento">
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label>DESCRIPCION</label>
                                            <input type="text" class="form-control" placeholder="descripcion_inv" id="descripcion_inv" name="descripcion_inv">
                                        </div>

                                        <div class="form-group">
                                            <label>VALOR ANTERIOR</label>
                                            <input type="text" class="form-control" name="valoruno" id='valoruno' placeholder="valor">
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label>VALOR ACTUAL</label>
                                            <input type="text" class="form-control" placeholder="valor" id="valordos" name="valordos">
                                        </div>

                                        <div class="form-group">
                                            <label>ESTADO</label>
                                            <input type="text" class="form-control" value="1" id="id_estado" name="id_estado">
                                        </div>

                                     
                                        
                                    
                                        <tr><td><input type='hidden' name='cta_campos' id='cta_campos' value="1" >
                                               </td></tr>


                                        <b><button type="submit" class="btn btn-info">Registrar</button>
                                        <b><button type="reset" class="btn btn-danger">Limpiar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>

</div>
