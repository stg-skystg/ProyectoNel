<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar proveedor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar proveedor
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="frm_ciudad" method="post" action="<?php echo getUrl("Proveedor","proveedor","postEditarCon"); ?>">
                                        <div class="form-group">
                                            <label>Id proveedor</label>
                                            <label><?php foreach($producto as $productos){} echo $productos['id_proveedor']; ?></label>
                                            <input class="form-control" name="nit_p" type="hidden" value="<?php echo $ciudades['nit_p']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre de la Ciudad</label>
                                            <input class="form-control" name="ciu_nombre" disabled value="<?php echo $ciudades['ciu_nombre']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Departamento</label>
                                            <select class="form-control" id="dep_id" name="dep_id">                                                
                                                <?php
                                                foreach ($depto as $deptos) 
                                                {                                                   
                                                    $seleccion="";
                                                    if($deptos['dep_codigo']==$ciudades['dep_codigo'])
                                                    {
                                                        $seleccion="selected";
                                                    }
                                                    echo "<option value=" . $deptos['dep_codigo']. " $seleccion>" . $deptos['dep_nombre']. "</option>";  
                                                }                                                     
                                                ?>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Editar</button>
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("usuarios","usuario","listar"); ?>">Cancelar</a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>