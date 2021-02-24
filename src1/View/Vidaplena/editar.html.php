<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Comprobar Vida Plena&nbsp</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            VP2021
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" name="frm_fac" method="post" action="<?php echo getUrl("Vidaplena","vidaplena","postEditar"); ?>">
                                        <div class="form-group">

<?php foreach ($producto as $productos) {
  echo $productos['9'];
}

                                          $productos['idpedido'];

                                          ?>
                                            <label>ID VIDA PLENA:</label>




                                        <label><?php foreach ($producto as $productos){} echo $productos['idpedido']; ?></label>

                                        <input class="form-control" name="idpedido" type="hidden" value="<?php echo $productos['idpedido']; ?>">

                                        <input class="form-control" name="cantsol" type="hidden" value="<?php echo $productos['cantsol']; ?>"> 
                                        
                                            
                                       
                                       
                                     
                                       <table class="table table-striped table-bordered" width="500px">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Codigo</th>
                                                  <th scope="col">Producto</th>
                                                  <th scope="col">Color</th>
                                                  <th scope="col">Talla</th>
                                                  <th scope="col">Ubicación</th>
                                                  <th scope="col">CantSolicitada</th>
                                                  <th scope="col">CantDespachada</th>
                                                  <th scope="col">Inventario</th>
                                                  
                                                  
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <?php
                                                      foreach ($producto as $productos){                                
                                                   echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$productos['referenc'].'</td>
                                                <td>'.$productos['nompro'].'</td>
                                                <td>'.$productos['color'].'</td>
                                                <td>'.$productos['talla'].'</td>
                                                <td>'.$productos['ubica'].'</td>
                                                <td>'.$productos['cantsol'].'</td>

                                                <td> 
                                       
                                            <input class="form-control" type="number" style="width : 60px; heigth : 1px" name="cantvend" id="cantvend"  value="'.$productos['9'].'"  max="'.$productos['cantsol'].'" min="0">



                                                </td>
                                             
                                                <td>'.$productos['inv'].'</td>
                                               
                                         
                                             
                                             </tr>';

                                    }
                                ?>
                                    

                                            
 
                                                
                              </tbody>
                        </table>
                                       
                      </div>                  
                                       
                                       
                                        </div></div>
                                        
                                        
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                        <button class="btn btn-danger">Cancelar<a href="<?php echo 
                                        getUrl("inventario","inventario","listar"); ?>"></a></button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>
