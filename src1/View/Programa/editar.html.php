<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Programa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar Programa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="frm_pro" method="post" action="<?php echo getUrl("Programa","Pro","postEditar"); ?>">
                                        <div class="form-group">
                                            <label>Codigo Programa</label>
                                            <label><?php foreach($pro as $pros){} echo $pros[0]; ?></label>
                                            <input class="form-control" name="codigo_pro" type="text" readonly value="<?php echo $pros[0]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <input class="form-control" name="pro_descripcion"  value="<?php echo $pros[1]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" name="pro_estado"  value="<?php echo $pros[2]?>">
                                        </div>
                                          
                                        <button type="submit" class="btn btn-default">Editar</button>
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("Programa","Pro","listar"); ?>">Cancelar</a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>