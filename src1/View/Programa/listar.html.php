
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listar Programa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
       <div class="table-responsive">
           <label>Buscar</label><input type='text' name='buscar_pro' id='buscar_pro' data-url='<?php echo getUrl("Programa", "Pro", "listarFiltro", false, "ajax")?>'>

         
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        
                        <th colspan="3" align='/center/' >Acciones</th>
                    </tr>
                </thead>
                <tbody id='lista_pro'>
                  <?php
        if($pro <>null)
        {


                ?>
                    <?php                                                                                              
                        foreach ($pro as $pros) 
                        {
                    
                            echo"<tr>";
                                echo"<td>".$pros[0]."</td>";
                                echo"<td>".$pros[1]."</td>";
                                echo"<td>".$pros[2]."</td>";
                            
                                
                                echo"<td><a href='index.php?modulo=Programa&controlador=Pro&funcion=getEditar&codigo_pro=".$pros[0]."'><button class='btn btn-primary btn-circle btn-lg'><i class='fa fa fa-list'></i></button></a></td>";
                                echo"<td><a href='index.php?modulo=Programa&controlador=Pro&funcion=getEliminar&codigo_pro=".$pros[0]."'><button class='btn btn-danger btn-circle btn-lg'><i class='fa fa fa-times'></i></button></a></td>";
                            echo"</tr>";
                                         
                        }
                    ?>
                </tbody>
            </table>
            <?php

            }
            else
            {
                echo"<strong>No hay Registros</strong";
            }
            ?>
        </div>
    </div>
</div>

