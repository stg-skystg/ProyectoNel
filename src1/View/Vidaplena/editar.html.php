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
                                      <div class="form-group">
                                        <table class="table" width="100px">
                                          <tr>
                                                  <th scope="col">ID VIDA PLENA</th>
                                                  <th scope="col">NOMBRE GERENTE</th>
                                                  <th scope="col">CEDULA GERENTE</th>    
                                          </tr>

                                           </thead>
                                              <tbody>
                                                <tr>
                                                  <td> <label><?php foreach($producto as $productos){} echo $productos[1]?></label>
                                                  </td>

                                                  <td> <label><?php foreach($producto as $productos){} echo $productos[4]?></label></td>

                                                  <td>   <label>&nbsp;<?php foreach($producto as $productos){} echo $productos[3]?></label>
                                                </td>
                                                </tr>

                                        </table>

                                          <input type="hidden" name="Cod_Pedido" id="Cod_Pedido" value="<?php echo $productos['idpedido'];?>"></input>

                                          <div class="form-group input-group" >
                                          <span class="input-group-addon" > <i class="fa  fa-barcode fa-fw"></i>  </span>
                                          <input type="text" class="form-control"  width="100" placeholder="|||||||||||||||||||||||||||||||||||||||||||||">
                                          </div>

                                        
                                          <form role="form" name="idpedido" method="post" action="<?php echo getUrl("Vidaplena","vidaplena","postEditar"); ?>">



                                         <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" width="500px">
                                              <thead>
                                                <tr>



                                                  <th scope="col">*</th>
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


                                                    <td> 


                                                    <input type="hidden" class="form-control" type="number" style="width : 60px; heigth : 1px" name="select[]" id="select[]" value="'.$productos['contador'].'">


                                                    </td>



                                                    <td>'.$productos['referenc'].'</td>
                                                    <td>'.$productos['nompro'].'</td>
                                                    <td>'.$productos['color'].'</td>
                                                    <td>'.$productos['talla'].'</td>
                                                    <td>'.$productos['ubica'].'</td>
                                                    <td>'.$productos['cantsol'].'</td>

                                                    <td> 

                                                    <input class="form-control" type="number" style="width : 60px; heigth : 1px" name="selectinput[]" id="selectinput[]" value=""  max="'.$productos['cantsol'].'" min="0">

                                                    </td>

                                                    <td>'.$productos['inv'].'</td>

                                                    </tr>';
                                                }
                                                        ?>
                 
                                                 </tbody>
                                               </table>
                                            </div>                        
                                        </div>
                
                                        <?php
                                          echo ' <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=postEditar&idpedido='.$productos['idpedido'].'"><button class="btn btn-success"><i class="fa fa fa-check">&nbsp;Despachar</i></button></a>        
                                                </td>';?>

                                        </form>&nbsp; &nbsp; <?php    

                                          echo ' <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=listar"><button class="btn btn-danger"><i class="fa  fa-times">&nbsp;&nbspCancelar&nbsp&nbsp</i></button></a>
                                                </td>';
                                          ?>
                                                                  
                                  </form>  
             
                            </div>
                      </div>
                            <!-- /.row (nested) -->
              </div>
                        <!-- /.panel-body -->
</div> 
     
