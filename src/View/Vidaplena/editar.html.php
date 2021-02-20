<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Comprobar Vida Plena</h1>
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

                                            <table class="table" width="500px">
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
                                               

                                             <td><div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                              </label>
                                                    </div></td>
                                               
                                                
                                             <td>';

                                               

                                                 '</td>
                                                
                                                
                                               
                                                
                                                
                                             </tr>';
                                    }
                                ?>
                                    

                                            

                                                
                              </tbody>
                        </table>
                                            
                  </div>
               &nbsp; &nbsp; &nbsp; 
              </form>
              <button class="btn btn-info">Registrar
                 <?php 
                echo"<a href='../index.php?modulo=Vidaplena&controlador=vidaplena&funcion=despachar&idpedido=".$productos['idpedido']."'></a>";
                 ?>
              </button>

              <?php                            
                      echo ' <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=despachar&idpedido=defaultCheck1"><button class="btn btn-info"><i class="fa fa fa-check">despa</i></button></a>
                                   
                        </td>'
              ?>

              <button class="btn btn-danger">
                Cancelar<a href="<?php echo getUrl("Vidaplena","vidaplena","listar"); ?>"></a></button>
                                    
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>