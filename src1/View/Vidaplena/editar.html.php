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
                                    <form role="form" name="idpedido" method="post" action="<?php echo getUrl("Vidaplena","vidaplena","despachar"); ?>">
                                        <div class="form-group">



                                            <label>ID VIDA PLENA:<?php foreach($producto as $productos){}?></label>
                                            <input name="Cod_Pedido" id="Cod_Pedido" value="<?php echo $productos['idpedido'];?>"></input>

                                                

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
                                                $i =0;
                                                foreach ($producto as $productos){
                                                    //$i = $i + 1;
                                                    echo '<tr class="gradeA odd" role="row" style="text-align: center;">

                                                    <td>'.$productos['referenc'].'</td>
                                                    <td>'.$productos['nompro'].'</td>
                                                    <td>'.$productos['color'].'</td>
                                                    <td>'.$productos['talla'].'</td>
                                                    <td>'.$productos['ubica'].'</td>
                                                    <td>'.$productos['cantsol'].'</td>

                                                    <td> 

                                                    <input class="form-control" type="number" style="width : 60px; heigth : 1px" name="selectinput[]" id="selectinput[]" value="'.$productos['cantsol'].'"  max="'.$productos['cantsol'].'" min="0">

                                                    </td>

                                                    <td>'.$productos['inv'].'</td>

                                                    </tr>';

                                                }
                                ?>
                                    

                                            

                                                
                              </tbody>
                        </table>
                                            
                  </div>
                 
                       
                <?php
              
                    echo ' <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=despachar&idpedido='.$productos['idpedido'].'"><button class="btn btn-success"><i class="fa fa fa-check">&nbsp;Despachar</i></button></a>        
                    </td>';
 
                ?>
                                        
                
              </form>
              


              <?php    
                    
            
                    echo ' <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=despachar2&cantsol='.$productos['cantsol'].'"><button class="btn btn-success"><i class="fa fa fa-check">&nbsp;Despachar2</i></button></a>
                    </td>';
                              
                    echo ' <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=listar"><button class="btn btn-danger"><i class="fa  fa-times">&nbsp;Cancelar</i></button></a>
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
