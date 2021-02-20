 <?php                                                                                              
    foreach ($factura as $facturas) 
    {

        echo"<tr>";
             
        echo"<td>".$facturas['id_fact']."/td>";
        echo"<td>".$facturas['descripcion_fact']."</td>";
        echo"<td>".$facturas['nit']."</td>";
        echo"<td>".$facturas['radica_fech']."</td>";
        echo"<td>".$facturas['fecha_fact']."</td>";
        echo"<td>".$facturas['id_producto']."</td>"; 
        echo"<td>".$facturas['valor_tot']."</td>";         
        echo"<td>".$facturas['fac_desc']."</td>";   

            echo"<td><a href='index.php?modulo=facturacion&controlador=facturacion&funcion=getEditar&fac_num=".$facturas['id_fact']."'><button class='btn btn-primary btn-circle btn-lg'><i class='fa fa fa-list'></i></button></a></td>";
          
        echo"</tr>";

    }
?>
 