										<link rel="stylesheet" href="../../Web/vendor/boot/css/bootstrap.min.css">
                                        <script src="../../Web/Js/jquery-1.12.4.min.js"></script>
                                        <script src="../../Web/vendor/boot/css/bootstrap.min.js"></script>

                                        <div id="page-wrapper"> 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Contacto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="cliente" method="post" action="<?php echo getUrl("Proveedor","proveedor","postCrearCon"); ?>">
                                         <div class="form-group">
                    <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            CONTACTO                      
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    

                                        <div class="form-group">
                                            <label>Identificacion</label>
                                            <input class="form-control" name="usuario" id='usuario' type="number" placeholder="ID contacto">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="nombrecl" id='nombrecl' type="text" placeholder="Nombre contacto">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input class="form-control" placeholder="Apellido contacto" id="apel" name="apel">
                                        </div>
                                       <div class="form-group" >
                                            <label>Proveedor</label>
                                            <select class="form-control" id="usuariopr" name="usuariopr">
                                                <option value="">Seleccione Proveedor</option>
                                                <?php                                                                             foreach($nombre as $nombres)                 
                                                {
                                                    echo "<option value=" . $nombres[0]. ">" . $nombres[0]. "</option>";                                                   
                                                }
                                                ?>
                                            </select>
                                        
                                        </div>   
                                         <div class="form-group">
                                            <label>Estado</label>
                                            <select class="form-control" id="estado" name="estado">
                                                <option value="">Seleccione Estado</option>
                                                <option value="1">ACTIVO</option>
                                                <option value="2">INACTIVO</option>
                                            </select>
                                        </div>  

                                         <div class="form-group">
                                            <label>Correo electronico</label>
                                            <input class="form-control" name="corr" id='corr' type="email" placeholder="correo electronico">
                                        </div> 
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input class="form-control" name="cel" id='cel' type="number" placeholder="celular contacto">
                                        </div> <div class="form-group">
                                            <label>Telefono</label>
                                            <input class="form-control" name="telcl" id='telcl' type="number" placeholder="Telefono contacto">
                                        </div>
                                        <div class="form-group">
                                            <label>Extensión</label>
                                            <input class="form-control" name="exten" id='exten' type="number" placeholder="Telefono contacto">
                                        </div>
                                       
                                       
                                        
                                         
                                    
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