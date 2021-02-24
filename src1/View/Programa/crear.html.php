<div id="page-wrapper"> 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Crear Programa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Nuevo Programa                       
                        </div>
                        <div class="panel-body"> 
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="usua" method="post" action="<?php echo getUrl("Programa","Pro","postCrear"); ?>">
                                        <div class="form-group">
                                            <label>Codigo Programa</label>
                                            <input class="form-control" name="codigo_pro" id='codigo_pro' type="number">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <input class="form-control" placeholder="Descripcion" id="descripcion_pro" name="descripcion_pro">
                                        </div>
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" placeholder="Estado" id="estado_pro" name="estado_pro">
                                        </div>                  
                                        <tr><td><input type='hidden' name='cta_campos' id='cta_campos' value="1" >
                                               </td></tr>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                        <button type="reset" class="btn btn-default">Limpiar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>