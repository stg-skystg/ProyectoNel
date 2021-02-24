 <?php    
 if($pro <> null)
 {                                                                                          
      foreach ($pro as $pros) 
                        {
                    
                            echo"<tr>";
                                echo"<td>".$pros['pro_codigo']."</td>";
                                echo"<td>".$pros['pro_descripcion']."</td>";
                                echo"<td>".$pros['pro_estado']."</td>";
                                
                                echo"<td><a href='index.php?modulo=Programa&controlador=Pro&funcion=getEditar&codigo_pro=".$pros['pro_codigo']."'><button class='btn btn-primary btn-circle btn-lg'><i class='fa fa fa-list'></i></button></a></td>";
                                echo"<td><a href='index.php?modulo=Programa&controlador=Pro&funcion=getEliminar&codigo_pro=".$pros['pro_codigo']."'><button class='btn btn-danger btn-circle btn-lg'><i class='fa fa fa-times'></i></button></a></td>";
                            echo"</tr>";
                                         
                        }
}
else
{
    echo"<strong>No hay Registros</strong>";
}
?>