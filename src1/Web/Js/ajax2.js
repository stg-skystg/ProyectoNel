 function campoAjax(){
    var xmlhttp=false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

   $(document).ready(function(){     
        $('#validar').on('click', function(){   
        
        var a=document.getElementById('ag_cam').value;  
        a++;
        
        $('#ag_cam').val(a);
        if (a<20)
        {
             $('<tr id="contra'+a+'">\n\
                    <td><input type="hidden" class="form-control" id="a" name="a" value="'+a+'"></td>\n\
                    <td><center><input type="text" style="border-radius: 5px; width: 47px;" type="text" id="itemrequ'+a+'"  name="itemrequ'+a+'"></center></td>\n\
                    <td><select type="text" style="border-radius: 5px; width: 270px; height: 30px;" type="text" id="descrip_req'+a+'" name="descrip_req'+a+'" ></select></td>\n\
                    <td><center><input type="text" style="border-radius: 5px; width: 55px;" type="text" id="cantidad_req'+a+'"  name="cantidad_req'+a+'" ></center></td>\n\
                    <td><input type="text" style="border-radius: 5px; width: 55px;" type="text" id="undadmsreq'+a+'"     name="undadmsreq'+a+'" ></td>\n\
                    <td><select type="text" style="border-radius: 5px; width: 270px; height: 30px;" type="text" id="obra'+a+'" name="obra'+a+'" ></select></td>\n\
                    <td><input type="text" class="form-control" type="text" id="valor_unitreq'+a+'" size="4" name="valor_unitreq'+a+'" ></td>\n\
                    <td><input type="text" class="form-control" type="text" id="valor_totreq'+a+'" size="4" name="valor_totreq'+a+'" ></td>\n\
                    <td><input type="button" id="eliminar" class="eliminar" value="'+a+'"></td></tr>alert(a)').appendTo("#requi" ); 
                 

                $("input.eliminar").click(function(){       
                    var mate=$(this).attr("value");
                    $("#contra"+mate).remove();
                    $('#ag_cam').val(a);
                });
                a--;
        }
         lis_obra();
             lis_desc();
    });


            
        
    $(document).on("keyup", "#buscar", function(){
        var dato=$(this).val();
        var url=$(this).attr("data-url");        
        $.ajax({
           url:url,
           data:"dato="+dato,
           type:"POST",
           success:function(filtro){
               $("#lista_ciudades").html(filtro);
           }
        });
    });
    
    
  
    
    $(document).on("click","#buscarprest",function(){
        var fini=$("#fini").val();
        var ffin=$("#ffni").val();
        var predic=$("#predic").val();
        var almacenista=$("#almacenista").val();
        var funcionario=$("#funcionario").val();
        var url=$(this).attr("data-url");
        $.ajax({
        url:url,
        data:"fini="+fini+"&ffin="+ffin+"&predic="+predic+"&almacenista="+almacenista+"&funcionario="+funcionario ,
        type: "POST",
        success:function(reporte){
            $("#lista_prestamo").html(reporte);
        }  
        
        });

    });
     $(document).on("click","#imprimir",function(){
        var fini=$("#fini").val();
        var ffin=$("#ffni").val();
        var predic=$("#predic").val();
        var almacenista=$("#almacenista").val();
        var funcionario=$("#funcionario").val();
        var url=$(this).attr("data-url");
       var data="?fini="+fini+"&ffin="+ffin+"&predic="+predic+"&almacenista="+almacenista+"&funcionario="+funcionario;
         /*$.ajax({
        url:url,
        data:"fini="+fini+"&ffin="+ffin+"&almacenista="+almacenista+"&funcionario="+funcionario ,
        type: "POST",
        success:function(reporte){
            $("#imprimir").html(reporte);
        }  
        
        });*/
         window.open(url+data);
         

    });
        

   });


function agr_campos() 
{
   
    a++; 
   
    $('#ag_cam').val(a);
   
    $('<tr id="contra'+a+'">\n\
                                    <input type="text" class="form-control" id="itemrequ'+a+'" size="4"  name="itemrequ[]">\n\
                                    <input type="text" class="form-control" id="descrip_requ'+a+'" size="4"  name="descrip_requ[]">\n\
                                    <input type="text" class="form-control" id="cantidad_req'+a+'" size="4"  name="cantidad_req[]">\n\
                                    <td><input type="text" class="form-control" id="undadmsreq'+a+'" size="4" readonly name="undadmsreq[]"></Td>\n\
                                    <td><input type="text" class="form-control" id="provee'+a+'" name="provee[]" onkeyup=Consulta_Producto("'+a0+'")></td>\n\
                                    <input type="text" class="form-control" id="codo_req'+a+'" size="4"  name="codo_req[]">\n\
                                    <td><input type="text" class="form-control" id="valor_unitreq'+a+'" name="valor_unitreq[]" ><input type="text" class="form-control" id="val_totalreq'+a0+'" name="val_totalreq[]" onkeyup=Consulta_Embalaje("'+a0+'")></td>\n\
                                    <td align="right"><input type="hidden" class="form-control" id="cantidad_req'+a+'" size="4" name="cantidad_req[]" Onblur=Calcula_Subtotal("'+a0+'") ></td><td><input type="button" id="elimi'+a0+'" class="eliminar" value="'+a0+'"></td></tr>alert(a)').appendTo( "#validar" );
    
    $("input.eliminar").click(function() {       
      var mate=$(this).attr("value");
      $("#contra"+mate).remove();
      
    });
   
}
function Consulta_Producto(conta)
{       
    divResultado = document.getElementById('resultado_producto');   
    filtro=document.getElementById('nombre_pro'+conta).value;
        
    ajax=objetoAjax();  
    ajax.open("GET", "Consulta_SoloMateriaP.php?filtro="+filtro+"&conta="+conta,true);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {       
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send()
}

function pasarDatos_Producto(identi){
    
    var conta=document.getElementById('conta').value;
    divResultado = document.getElementById('resultado_producto');
    
    document.getElementById('id_pro'+conta).value=document.getElementById('idBd'+identi).value;        
    document.getElementById('nombre_pro'+conta).value=document.getElementById('nomBd'+identi).value;        
    
    ajax=objetoAjax();
        ajax.open("GET", "../ajax/Blanco.php",true);   
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            //mostrar resultados en esta capa
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
    ajax.send();
   
}

