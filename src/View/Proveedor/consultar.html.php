<div id="page-wrapper"> 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Consultar proveedor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Nuevo proveedor                         
                        </div>
                        <br>
                        <br>
                            <div class="form-group">
                                           
                                            <table>
                                                <tbody id="pre_equipo">
                                                    <tr>
                                                        <td><input type="text" name="item[]" id="item1" data-url="<?php echo getUrl("Proveedor", "proveedor", "fitroAjax",false,"ajax") ?>"></td>
                                                    </tr>
                                                    
                                                </tbody>
                                                
                                            </table>        
                                            
                                            <div id="info_ciudad">
                                            </div>
                                           
                                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="proveedor" method="post" action="<?php echo getUrl("Proveedor","proveedor","postCrear"); ?>">
                                         <div class="form-group">

                                            <label></label>
                                            <input class="form-control" name="idp" disabled id='idp' type="number" placeholder="ID">
                                        </div>
                                         <div class="form-group">
                                        
                                            <label>NIT proveedor</label>
                                            <input class="form-control" name="nitp" disabled id='nitp' type="number" placeholder="NIT proveedor">
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label>Nombre proveedor </label>
                                            <input class="form-control" placeholder="Nombre proveedor" id="nombrep" disabled name="nombrep">
                                        </div>
                                        <div class="form-group">
                                            <label>Direccion proveedor</label>
                                            <input class="form-control" name="dirp" disabled id='dirp' type="text" placeholder="Direccion proveedor">
                                        </div> 
                                         <div class="form-group">
                                            <label>Pais</label>
                                            <input class="form-control" disabled placeholder="Pais" id="pais_id" name="pais_id">
                                        </div>
                                        <div class="form-group">
                                            <label>Distrito</label>
                                            <input class="form-control" disabled placeholder="Distrito" id="dist_id" name="dist_id">
                                        </div>
                                        <div class="form-group">
                                            <label>Ciudad</label>
                                            <input class="form-control" disabled placeholder="Ciudad" id="ciudad" name="ciudad">
                                        </div>
                         <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            CONTACTO                      
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    

                                        
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="nombrecl" id='nombrecl' type="text" disabled placeholder="Nombre contacto">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input class="form-control" disabled placeholder="Apellido contacto" id="apel" name="apel">
                                        </div>
                                         

                                         <div class="form-group">
                                            <label>Correo electronico</label>
                                            <input class="form-control" name="corr" id='corr' type="email" placeholder="correo electronico" disabled>
                                        </div> <div class="form-group">
                                            <label>Celular</label>
                                            <input class="form-control" name="cel" id='cel' type="number" placeholder="celular contacto" disabled>
                                        </div> <div class="form-group">
                                            <label>Telefono</label>
                                            <input class="form-control" name="telcl" id='telcl' type="number" placeholder="Telefono contacto" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Extensión</label>
                                            <input class="form-control" name="exten" id='exten' type="number" placeholder="Telefono contacto" disabled>
                                        </div>
                                       
                                       
                                        
                                         
                                    
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                        <button type="reset" class="btn btn-default">Limpiar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                    </div> 
            </div>
</div>