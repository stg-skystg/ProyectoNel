<script language="javascript">
if ((navigator.appName == "Netscape")) { 
window.print() ;
}
else {
var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
document.body.insertAdjacentHTML('beforeEnd', WebBrowser); WebBrowser1.ExecWB(6, -1); WebBrowser1.outerHTML = "";
}

</script>  

            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
               <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-5">
                   <center> <h4 class="">COIN S.A.S CONSTRUCCIONES INDUSTRIALES <br>NIT: 890.304.492-5</h4><h5>
Fabrica y Oficinas: Carrera 34 No10-445 Acopi - Cali Colombia Conmutador: (57) (2) - 6959110 Email: coin@coinsas.co</h5>
                    <img src="../../img/logoc.jpg" height="80" width="125"></center>

                </div>
         
                <!-- /.col-lg-12 -->
            </div>
      <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                        <CENTER> REQUISICION DE PRODUCCION</CENTER>
                <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" name="frm_ciudad" method="post" action="<?php echo getUrl("ordencompra","ordencompra","postConsultar"); ?>">
    
                                        
                             <table>
                                        <table class="table table-bordered jambo_table bulk_action">
                                              <thead>
                                                <tr class="headings">
                                                   <th>DESCRIPCION</th>
                                                    <th>CANT</th>
                                                    <th>UNIDAD</th>
                                                    <th>ITEM</th>
                                                    <th>OBRA CODIGO</th>
                                                    <th>PROVEEDOR  </th>
                                                    <th>VALOR UNITARIO</th>
                                                    <th>VALOR TOTAL</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="requi">
                                                  <?php                
                                                      foreach ($producto as $productos) 
                                                      {
                                                        echo"<tr>";
                                                            // echo"<td><input readonly value=".$productos['des_re']."></td>";
                                                            echo"<td>".$productos['des_re']."</td>";
                                                            echo"<td>".$productos['cant_re']."</td>";
                                                            echo"<td>".$productos['unidad']."</td>";
                                                            echo"<td>".$productos['item']."</td>";
                                                            echo"<td>".$productos['obra']."</td>";
                                                            echo"<td>".$productos['nombre_pro']."</td>";
                                                            echo"<td>".$productos['valor_u']."</td>";
                                                            echo"<td>".$productos['valor_total']."</td>";

                                                        echo"</tr>";             
                                                      }
                                                  ?>
                                              </tbody>
                                            </table>                  
                                    
                                                             
                                         
                                             
                                        <div class="form-group"> 
                                            <label>CODIGO REQUISICION:</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <input name="id_req" size="40" maxlength="40" value="<?php echo $productos[2]?>">
                                      </div>
                                        <div class="form-group">
                                            <label>FECHA:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <input  name="fechai"  size="40" maxlength="40" value="<?php echo $productos[8]?>">
                                      </div>
                                          
                                         <div class="form-group">
                                            <label>SOLICITADO POR:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input  size="40" maxlength="40" name="solici"  value="<?php echo $productos[9]?>">
                                        </div>
                                         
                                        <div class="form-group">
                                            <label>ULTIMA FECHA PARA ENTREGA:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input  name="fech"  size="40" maxlength="40" value="<?php echo $productos[7]?>">
                                        </div>
                                         <div class="form-group">
                                            <label>PROVEEDOR:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input  name="provee"  size="40" maxlength="40" value="<?php echo $productos[11]?>">
                                        </div>
                                         <div class="form-group">
                                            <label>TIPO:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input  name="tipor"  size="40" maxlength="40" value="<?php echo $productos[10]?>">

                                        </div>
                                         
                                  
                                         <div class="form-group">
                                            <label>OBSERVACION:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input  name="observa"  size="40" maxlength="40" value="<?php echo $productos[15]?>">
                                        </div><br><br>
                                         <center>NOTA: NO ACEPTAMOS FACTURAS CON ENMENDADURAS
                                              PARA TRAMITAR SU PAGO CITE EL NUMERO
                                              DE ESTA ORDEN EN AMBOS DOCUMENTOS.</center>
                                        

                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
            </div>
</div>