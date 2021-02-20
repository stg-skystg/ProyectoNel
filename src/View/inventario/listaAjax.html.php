<div class="form-group">
    <label>Facturación</label>
    <table border="1">
        <tr>
                        <th>NUMERO DE FACTURA</th>
                        <th>ID FACTURA</th>
                        <th>DESCRIPCIÓN</th>
                        <th>NIT</th>
                        <th>FECHA RADICADO</th>
                        <th>FECHA DE PAGO</th>
                        <th>ID DE PRODUCTO</th>
                        <th>VALOR</th>
        </tr>        
        <?php
        $i=0;
        foreach ($factura as $facturas) 
        {                          
            echo"<tr id='$i' class='cargarDato'>";
                echo"<td><input type='hidden' id='facturacion_num$i' value='".$fact['descripcion_fact']."'>"
                        . "<input type='hidden' id='nitidenti$i' value='".$fact['nitp']."'>"
                        . "<input type='hidden' id='facturacion_num$i' value='".$i."'>".$fact['descripcion_fact']."</td>";
                echo"<td>".$fact['nit']."</td>";
                echo"<td>".$fact['descripcion_fact']."</td>";
                
            echo"</tr>";
            $i++;
        }
        ?>
    </table>
</div>

                                      