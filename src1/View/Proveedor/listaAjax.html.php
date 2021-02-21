<div class="form-group">
    <label>PROVEEDORES</label>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nit</th>
            <th>Producto</th>
        </tr>        
        <?php
        $i=0;
        foreach ($producto as $productos)
        {                          
            echo"<tr id='$i' class='cargarDato'>";
                echo"<td><input type='hidden' id='proveedoridenti$i' value='".$productos['idp_proveedor']."'>"
                        . "<input type='hidden' id='nitidenti$i' value='".$productos['nit']."'>"
                        . "<input type='hidden' id='identi$i' value='".$i."'>".$productos['idp_proveedor']."</td>";
                echo"<td>".$productos['nit']."</td>";
                echo"<td>".$productos['idp_proveedor']."</td>";
                
            echo"</tr>";
            $i++;
        }
        ?>
    </table>
</div>

                                      