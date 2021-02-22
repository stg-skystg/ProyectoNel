<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Comprobar Vida Plena&nbsp<i class="fa  fa-table fa-fw"></i></h1>
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
                                    <form role="form" name="idpedido" method="post" action="<?php echo getUrl("Vidaplena","vidaplena","listar"); ?>">
                                        <div class="form-group">

                                            <label>ID VIDA PLENA1:</label>
                                            <label><?php foreach($producto as $productos){} echo $productos['idpedido']; ?></label>
                                               <br><br>

                                            <table class="table table-striped table-bordered" width="500px">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Codigo</th>
                                                  <th scope="col">Producto</th>
                                                  <th scope="col">Color</th>
                                                  <th scope="col">Talla</th>
                                                  <th scope="col">Ubicación</th>
                                                  <th scope="col">CantSolicitada</th>
                                                  <th scope="col">Inventario</th>
                                                  
                                                  <th scope="col">Check</th>
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
                                                <td>'.$productos['inv'].'</td>
                                               

                                            <td> 
                                       
                                            <input class="form-control" type="number" style="width : 50px; heigth : 1px" name="cantvend" id="cantvend"  value="'.$productos['cantsol'].'"         max="'.$productos['cantsol'].'" >



                                                </td>       
                                                
                                             </tr>';
                                    }
                                ?>
                                    

                                            

                                                
                              </tbody>
                        </table>
                                            
                  </div>
                 <button class="btn btn-danger"><i class="fa  fa-times"></i>&nbsp;
                Cancelar<a href="<?php echo getUrl("Vidaplena","vidaplena","listar"); ?>"></a></button>
                                    
              </form>
              <br>
              

              <?php                            
                      echo ' <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=despachar&idpedido='.$productos['idpedido'].'"><button class="btn btn-success"><i class="fa fa fa-check">&nbsp;Despachar</i></button></a>
                                   
                        </td>'
              ?>

             
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>
