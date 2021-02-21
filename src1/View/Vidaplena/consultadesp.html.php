<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Vida Plena Despachada&nbsp<i class="fa  fa-copy fa-fw"></i></h1>
                </div>
               
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                             Vida Plena 2021
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" name="idpedido" method="post" action="<?php echo getUrl("Vidaplena","vidaplena","listarIn"); ?>">
                                        <div class="form-group">

                                            <label>ID VIDA PLENA1:</label>
                                            <label><?php foreach($producto as $productos){} echo $productos['idpedido']; ?></label>
                                               <br><br>

                                            <table class="table  table-bordered table-hover" width="500px">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Codigo</th>
                                                  <th scope="col">Producto</th>
                                                  <th scope="col">Color</th>
                                                  <th scope="col">Talla</th>
                                                  <th scope="col">Ubicación</th>
                                                  <th scope="col">CantSolicitada</th>
                                                  <th scope="col">Cantidad Vendida</th>
                                                  
                                                  
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
                                                <td>'.$productos['cantvend'].'</td>';
                                            
                                                
                                               

                                                 '</td>
                                                
                                                
                                               
                                                
                                                
                                             </tr>';
                                    }
                                ?>
                                    

                                            

                                                
                              </tbody>
                        </table>
                                            
                  </div>
               &nbsp; &nbsp; &nbsp; 

               <button class="btn btn-danger">
                Cancelar<a href="<?php echo getUrl("Vidaplena","vidaplena","listarIn"); ?>"></a></button>
              </form>
              

              

              
                                    
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>