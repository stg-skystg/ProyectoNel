<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Eliminar Programa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Est&aacute; Seguro De Eliminar El Programa:
                        </div>
                   
                   
                        <div class="form-group">
                            <label>Codigo Del Programa</label>
                            <label><?php foreach($pro as $pros){} echo $pros[0]; ?></label>
                            <input class="form-control" name="pro_codigo" type="hidden" value="<?php echo $pros['pro_codigo']; ?>">
                        </div>
                   
                        <div class="form-group">
                            <label>Descripcion Del Programa</label>
                            <input class="form-control" name="pro_descripcion" readonly value="<?php echo $pros[1]?>">
                        </div>
                        
                          <div class="form-group">
                            <label>Estado De Programa</label>
                            <input class="form-control" name="pro_estado" readonly value="<?php echo $pros[2]?>">
                        </div>
                   
                   
                        
                        <button>
                            <?php 
                            echo"<a href='index.php?modulo=Programa&controlador=Pro&funcion=postEliminar&pro_codigo=".$pros[0]."'>S&iacute;, estoy seguro</a>";
                            ?>
                        </button>
                   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                         <button><a href="<?php echo 
                             getUrl("Programa","Pro","listar"); ?>">No, cambi&eacute; de opini&oacute;n</a>
                        </button>
                </div>
            </div>                            
</div>
