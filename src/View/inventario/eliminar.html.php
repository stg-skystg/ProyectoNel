<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Eliminar Inventario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            ¿Est&aacute; seguro de eliminar inventario?
                        </div>
                   
                   
                        <div class="form-group">
                            <label>ID Inventario</label>
                            <label><?php foreach($inventario as $inventarios){} echo $inventarios['id_inv']; ?></label>
                            <input class="form-control" name="id_inv" type="hidden" value="<?php echo $inventarios['id_inv']; ?>">
                        </div>
                   
                        <div class="form-group">
                            <label>Línea</label>
                            <input class="form-control" name="linea_inv" readonly value="<?php echo $inventarios['linea_inv']?>">
                        </div>
                   
                        <div class="form-group">
                            <label>Grupo</label>
                            <input class="form-control" name="grupo_inv" readonly value="<?php echo $inventarios['grupo_inv']?>">
                        </div>

                        <div class="form-group">
                            <label>Elemento</label>
                            <input class="form-control" name="elemento_inv" readonly value="<?php echo $inventarios['elemento_inv']?>">
                        </div>
                   
                        <div class="form-group">
                            <label>Descripción</label>
                            <input class="form-control" name="descripcion_inv" readonly value="<?php echo $inventarios['descripcion_inv']?>">
                        </div>
                        
                        
                        <div class="form-group">
                            <label>Estado</label>
                            <input class="form-control" name="id_estado" readonly value="<?php echo $inventarios['id_estado']?>">
                        </div>
                       
                   
                        
                        <button>
                            <?php 
                            echo"<a href='index.php?modulo=inventario&controlador=inventario&funcion=postEliminar&id_inv=".$inventarios['id_inv']."'>SÍ</a>";
                            ?>
                        </button>
                   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                        <button><a href="<?php echo 
                             getUrl("Proveedor","Proveedor","listar"); ?>">NO</a>
                        </button>
                </div>
            </div>                            
</div>
