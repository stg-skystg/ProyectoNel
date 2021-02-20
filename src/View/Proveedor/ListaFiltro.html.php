 <?php                                                                                              
    foreach ($producto as $productos) 
    {

        echo"<tr>";
            echo"<td>".$productos['idp_proveedor']."</td>";
            echo"<td>".$productos['nit']."</td>";                            
            echo"<td><a href='index.php?modulo=Proovedor&controlador=proovedor&funcion=getEditar&idp_proveedor=".$productos['idp_proveedor']."'><button class='btn btn-primary btn-circle btn-lg'><i class='fa fa fa-list'></i></button></a></td>";
            echo"<td><a href='index.php?modulo=Proovedor&controlador=proovedor&funcion=getEliminar&idp_proveedor=".$productos['idp_proveedor']."'><button class='btn btn-danger btn-circle btn-lg'><i class='fa fa fa-times'></i></button></a></td>";
        echo"</tr>";

    }
?>