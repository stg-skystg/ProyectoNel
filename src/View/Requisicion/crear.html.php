<?php    

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "coin";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    $sqlobra="select id from orden_produccion";
    $obra = mysqli_query( $conexion, $sqlobra ) or die ( "Algo ha ido mal en la consulta a la base de datos");


  // include("../../Lib/Config/conexionSqli.php");
  //   $objReq= new requisicionModel();

    $usua = "root";
    $pass = "";
    $servi = "localhost";
    $bd = "proveedorc";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $connect = mysqli_connect( $servi, $usua, "" ) or die ("No se ha podido conectar al servi de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $connect, $bd ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    
?>

<div id="page-wrapper"> 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar requisición</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form role="form" name="requisicion" method="post" action="<?php echo getUrl("Requisicion","requisicion","postCrear"); ?>">

            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                                               
                        </div>
                        <div class="panel-body">
                            <div class="row">
                           

                                       
              
                                <div class="col-lg-6">
                                   
                                          
                                         <div class="form-group">
                                             <label>Consecutivo</label>
                                            <?php
                                            foreach ($conse as $conses) {

                                                    $consecutivo=$conses['consecutivo']+1;

                                            }
                                            ?>
                                         <input class="form-control" type="text"  id="consecutivo" name="consecutivo"   value="<?php echo $consecutivo; ?>">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <?php
                                                $hoy=date('Y-m-d');
                                            ?>
                                            <input class="form-control" type="date" placeholder="fecha requisicion" id="fechar" name="fechar" value="<?php echo $hoy; ?>">
                                        </div>
                                           <div class="form-group">
                                            <label>Tipo</label>
                                            <select class="form-control" id="tipor" name="tipor">
                                                <option value="">Seleccione Tipo</option>
                                                <option value="Solicitud Cotización">Solicitud Cotización</option>
                                                <option value="Pedido">Pedido</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Estado de aprobación</label>
                                            <select class="form-control" id="estado" name="estado">
                                                <option value="">Seleccione estado</option>
                                                <option value="2">Por aprobar</option>
                                                <option value="1">Aprobada</option>
                                                <option value="3">Rechazada</option>
                                            </select>
                                        </div>  

                                         <div class="form-group">
                                            <label>Solicitante</label>
                                            <input class="form-control" name="solici" id='solici' type="text" placeholder="solicitante">
                                        </div>
                                          
                                              <div class="form-group">
                                                <label>Proveedor</label>
                                                <select class="form-control" id="provee" name="provee">
                                                <option value="0">Seleccione proveedor</option>
                                                <?php                                                                             foreach($provee as $provees)                 
                                                {
                                                    echo "<option value=" . $provees[0]. ">" . $provees[0]. "</option>";                                                   
                                                }
                                                ?>
                                            </select>
                                        </div>
                                            
                                            
                                      
                                        <div class="form-group">
                                            <label>Última Fecha Para Entrega</label>
                                            <input class="form-control" name="fech" id='fech' type="date" placeholder="Fecha Entrega">
                                        </div>
                                          <div class="form-group">
                                            <label>Observaciones</label>
                                            <textarea class="form-control" name="observa" id='observa' type="text" placeholder="Observaciones">
                                        </textarea></div>
                                         <!-- <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" name="estado" id='estado' type="number" placeholder="valor unitario" value="1">
                                        </div>
 -->
                                        <button type="submit" class="btn btn-info btn-lg">Registrar</button>
                                        <button type="reset" class="btn btn-danger btn-lg">Limpiar</button>
                                     
                                    

                                 </div>
                                </div>                                     <div class="col-lg-15">
                                    <h1></h1>
                                    <form role="form">
                                        
                                            <div class="form-group">
                                            <table>
                                            <tbody id='requi'>
                                               <tr>
                                                    <th></th>
                                                    <th><CENTER>ITEM</CENTER></th>
                                                    <th><CENTER>DESCRIPCIÓN</center></th>
                                                    <th><CENTER>CANTIDAD</center></th>
                                                    <th><CENTER>UNIDAD</center></th>
                                                   
                                                    <th><CENTER>CÓDIGO OBRA</center></th>
                                                    <th><CENTER>VALOR UNITARIO</center></th>
                                                    <th><CENTER>VALOR TOTAL</center></th>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td width="60PX"><center><input type="text" style="border-radius: 5px; width: 47px;" id="itemrequ" name="itemrequ1" width="10px"></center></td> 

                                                     <td>
                                                    <select style="border-radius: 5px; width: 270px; height: 30px;" id="descrip_req" name="descrip_req1" >
                                                <option value="0">Seleccione descripción</option>
                                                <?php                                                                             foreach($descrip as $descrips)                 
                                                {
                                                    echo "<option value=" . $descrips[0]. ">" . $descrips[0]. "</option>";                                                   
                                                }
                                                ?>
                                            </select>
                                      
                                    </td>

                                           <td><CENTER>
                                                     
                                                        <input type="text" style="border-radius: 5px; width: 55px;" id="cantidad_req" name="cantidad_req1">
                                               
                                            
                                                    </CENTER></td>


                                                <td>
                                                  
                                                    <input type="text" style="border-radius: 5px; width: 55px;" id="undadmsreq" name="undadmsreq1">
                                                   
                                                    </td>
                                                     <td>
                                                    <select style="border-radius: 5px; width: 270px; height: 30px;" id="obra1" name="obra1" >
                                                    <option value="0">Seleccione código de la obra</option>
                                                <?php                                                                             foreach($obra as $obras)                 
                                                {
                                                    echo "<option value=" . $obras['id']. ">" . $obras['id']. "</option>";                                                   
                                                }
                                                ?>
                                                    </select>
                                      
                                                            </td>
                                                      
                                                  
                                                    <td><input type="text" class="form-control" id="codo_req" name="codo_req1">
                                                    <td><input type="text" class="form-control" id="valor_unitreq" name="valor_unitreq1">
                                                    <td><input type="text" class="form-control" id="valor_totreq" name="valor_totreq1">
                                                   


                                                </tr>
                                            </tbody>
                                        <tr><td> <input type="hidden" name="ag_cam" id="ag_cam" value="1">
                                                <input type="button" class="btn btn-warning " name="validar" id="validar" value="Agregar">
                                                
                                            </td></tr> 
                                       
                                        </table> 


                                         <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel"></h4>
                                                    </div>

                                                   
                     
  
                              
                                    </form><br>
                                                       
                                                    <center>
                                                    <div class="modal-body">
                                                     
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Inventario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-15">
                                    <form role="form" name="inv" id="inv" method="post" onclick='inv' action="<?php echo getUrl("inventario","inventario","postCrearRequi"); ?>" >
                            <!--              <script type="text/javascript">
                                         $(window).load(function(){
                                         $('#inv').modal('miModal');
                                                });
                                            </script>

                </script> -->
                                         <div class="form-group">
                    <div class="row" >
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Inventario                      
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    

                                         <!-- <form role="form" name="id_inv" method="post" > -->
                                        <div class="form-group">
                                            <label>ID Inventario</label>
                                            <input type="text" class="form-control" name="id_inve" id='id_inve' disabled id='id_inve'  placeholder="ID Inventario">
                                        </div>
                                        <div class="form-group">
                                            <label>LINEA</label>
                                            <input type="text" class="form-control" name="linea_inv" id='linea_inv'  placeholder="Linea Equipo">
                                        </div>
                                        <div class="form-group">
                                            <label>GRUPO</label>
                                            <input type="text" class="form-control" name="grupo_inv" id='grupo_inv' placeholder="Grupo Equipo">
                                        </div>
                                        <div class="form-group">
                                            <label>ELEMENTO</label>
                                            <input type="text" class="form-control" name="elemento_inv" id='elemento_inv' placeholder="Elemento">
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label>DESCRIPCION</label>
                                            <input type="text" class="form-control" placeholder="descripcion_inv" id="descripcion_inv" name="descripcion_inv">
                                        </div>
                                         <div class="form-group">
                                            <label>ESTADO</label>
                                            <input type="text" class="form-control" id="estado" name="estado" value=1>
                                        </div>

                                        <input type="hidden" name="var">
                                         

                                             <button type="submit" class="btn btn-primary" id="registrar" onclick='registrar()'>Registrar</button>
                                               <script type="text/javascript">
                                                function registrar(){

                                                    window.history.back();

                                                }
                                                  </script>
                                              
                                        <button type="reset" class="btn btn-danger">Limpiar</button>
                                       </form>
                                 
                                    
                                </div>
                            </div></center>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div></center>
         <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#miModal"> Agregar Inventario</button>

                             </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>

                                
                                        <script type="text/javascript">
                                            cuentaL=2;
                                            function lis_obra(){
            
                                               var indice=2;
                                               document.getElementById("obra"+cuentaL).length=0; 
                                               document.getElementById("obra"+cuentaL).options[0] = new Option("Seleccione código de la obra","","defaultSelected",""); 
                                                //alert("entre a la funcion");
                                           <?php 
                                                $sqlobrat="select id from orden_produccion";
                                                $obra = mysqli_query( $conexion, $sqlobrat );
                                                
                                                 if(mysqli_num_rows($obra)>0) { 
                                                while ($file = mysqli_fetch_array( $obra )){ ?>
                                                document.getElementById("obra"+cuentaL).options[indice] = new Option("<?=$file["id"]?>","<?=$file["id"]?>"); 
                                                indice++; 
                                                <?php    
                                                }
                                                     }
                                                     mysqli_close( $conexion );
                                                ?>
   
                                             cuentaL++; 
                                              
                                        } 

                                        </script>
                                       
                                        
                                        <script type="text/javascript">
                                            cuent=2;
                                            function lis_desc(){
            
                                               var indi=2;
                                               document.getElementById("descrip_req"+cuent).length=0; 
                                               document.getElementById("descrip_req"+cuent).options[0] = new Option("Seleccione código de la obra","","defaultSelected",""); 
                                                //alert("entre a la funcion");
                                           <?php 
                                                $sqlrq="select descripcion_inv from inventario";
                                                $descrip = mysqli_query( $connect, $sqlrq );
                                                
                                                 if(mysqli_num_rows($descrip)>0) { 
                                                while ($fila = mysqli_fetch_array( $descrip )){ ?>
                                                document.getElementById("descrip_req"+cuent).options[indi] = new Option("<?=$fila["descripcion_inv"]?>","<?=$fila["descripcion_inv"]?>"); 
                                                indi++; 
                                                <?php    
                                                }
                                                     }
                                                     mysqli_close( $connect );
                                                ?>
   
                                             cuent++; 
                                              
                                        } 

                                        </script>