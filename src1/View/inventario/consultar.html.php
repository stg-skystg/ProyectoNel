
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Consultar facturación</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
       <div class="table-responsive">
           <label>Buscar &nbsp </label><input type='text' name='buscar_fac' id='buscar_fac' data-url='<?php echo getUrl("facturacion", "facturacion", "listarFiltro", false, "ajax")?>'>

         
            <table class="table Basic Table table-hover table-striped">
            <br><br>
                <thead>
                        <th>Numero Factura</th>
                        <th>NIT</th>
                        <th>Fecha Radicación</th>
                        <th>Fecha de Pago</th>
                        <th>Numero de Factura</th>
                        <th>Valor</th>
                        
                        <th colspan="3" align='/center/' >Acciones</th>
                    </tr>
                </thead>
                <tbody id='lista_fic'>
                  <?php
        if($fac <>null)
        {


                ?>
                    <?php                                                                                              
                        foreach ($fac as $fact) 
                        {
                    
                            echo"<tr>";
                                echo"<td>".$fact[0]."</td>";
                                echo"<td>".$fact[1]."</td>";
                                echo"<td>".$fact[2]."</td>";
                                echo"<td>".$fact[3]."</td>";
                                echo"<td>".$fact[4]."</td>";
                            
                                
                                echo"<td><a href='index.php?modulo=facturacion&controlador=facturacion&funcion=getEditar&id_fact=".$fact[0]."'><button class='btn btn-primary btn-circle btn-lg'><i class='fa fa fa-list'></i></button></a></td>";

                                echo"<td><a href='index.php?modulo=facturacion&controlador=facturacion&funcion=getEliminar&id_fact=".$fact[0]."'><button class='btn btn-danger btn-circle btn-lg'><i class='fa fa fa-times'></i></button></a></td>";
                            echo"</tr>";
                                         
                        }
                    ?>
                </tbody>
            </table>
            <?php

            }
            else
            {
                echo"<strong> No hay Registros</strong>";
            }
            ?>
        </div>
    </div>
</div>

