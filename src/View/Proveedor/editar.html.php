<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Comprobar Vida Plena</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                             Vida Plena 2020
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="frm_ciudad" method="post" action="<?php echo getUrl("Vidaplena","vidaplena","postEditar"); ?>">
                                        <div class="form-group">


                                            
                                            <label>Id Vida Plena</label>
                                            <label><?php foreach($producto as $productos){} echo $productos[0]; ?></label>
                                            <input class="form-control" name="idp" type="hidden"  value="<?php echo $productos['idpedido']; ?>">
                                        </div>
                                        
                                            
                                            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
                                        <div class="form-group">
                                            <label> Fecha</label>
                                            <input class="form-control" disabled name="nitp"  value="<?php echo $idpedido[1]?>">
                                        </div>
                                        
                                          
                                        
                                         <div class="form-group">
                                            <label>Productos</label>  
                                       
                                            <input class="form-control" name="telp"  value="<?php echo $productos[16]?>"> <input type="checkbox" name="">
                                        </div>
                                        
                                        

                                        
                                        
                                       
                                       
                                         
                                         
                                       
                                        
                                             
                                        
                                        
                                        &nbsp; &nbsp;&nbsp;<button type="submit" class="btn btn-default">Editar</button>
                                        <button class="btn btn-default"><a href="<?php echo 
                                        getUrl("Vidaplena","vidaplena","listar"); ?>">Cancelar</a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>