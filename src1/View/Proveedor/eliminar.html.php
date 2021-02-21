<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Despachar Vida Plena</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            ¿Est&aacute; seguro de despachar Vida plena?
                        </div>
                   
                   
                        <div class="form-group">
                            <label>ID VIDA PLENA</label>
                            <label><?php foreach($producto as $productos){} echo $productos['idp_proveedor']; ?></label>
                            <input class="form-control" name="idp_proveedor" type="hidden" value="<?php echo $productos['idp_proveedor']; ?>">
                        </div>
                   
                        
                   
                        <div class="form-group">
                            <label>Directora</label>
                            <input class="form-control" name="nombrep" readonly value="<?php echo $productos['nombre']?>">
                        </div>

                       
                   
                        
                        <button>
                            <?php 
                            echo"<a href='index.php?modulo=Proveedor&controlador=Proveedor&funcion=postEliminar&idp_proveedor=".$productos['idp_proveedor']."'>SÍ</a>";
                            ?>
                        </button>
                   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                        <button><a href="<?php echo 
                             getUrl("Proveedor","Proveedor","listar"); ?>">NO</a>
                        </button>
                </div>
            </div>                            
</div>
