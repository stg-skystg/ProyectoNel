<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Eliminar Aprendiz</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Est&aacute; Seguro De Eliminar El Aprendiz:
                        </div>
                        <div class="form-group">
                            <label>Aprendiz ID</label>
                            <label>
                                <?php 
                               
                                foreach($apr as $aprs){ 
                                    echo $aprs[0];
                                }
                                 ?>                                 
                                 </label>
                            <input class="form-control" name="id_apr" type="hidden" value="<?php echo $aprs['apr_id']; ?>">
                        </div>
             
                        
                          <div class="form-group">
                            <label>Nombre De Aprendiz</label>
                            <input class="form-control" name="nombre_apr" readonly value="<?php echo $aprs[1]?>">
                        </div>
                            
                             <div class="form-group">
                            <label>Apellido De Aprendiz</label>
                            <input class="form-control" name="ape_apr" readonly value="<?php echo $aprs[2]?>">
                        </div>
                   
                        <div class="form-group">
                            <label>Telefono De Aprendiz</label>
                            <input class="form-control" name="tel_usu" readonly value="<?php echo $aprs[3]?>">
                        </div>

                          <div class="form-group">
                            <label>Ciudad</label>
                            <input class="form-control" name="id_ciu" readonly value="<?php echo $aprs[4]?>">
                        </div>
                         <div class="form-group">
                            <label>Tipo De Sangre</label>
                            <input class="form-control" name="id_tii" readonly value="<?php echo $aprs[5]?>">
                        </div>    
                                      
                   
                        
                        <button>
                            <?php 
                            echo"<a href='index.php?modulo=Aprendiz&controlador=Apr&funcion=postEliminar&id_apr=".$aprs[0]."'>S&iacute;, estoy seguro</a>";
                            ?>
                        </button>
                   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                         <button><a href="<?php echo 
                             getUrl("Aprendiz","Apr","listar"); ?>">No, cambi&eacute; de opini&oacute;n</a>
                        </button>
                </div>
            </div>                            
</div>
