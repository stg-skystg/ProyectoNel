function objetoAjax(){
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
        
        var contador=document.getElementById('cta_campos').value;  
        contador++;
        
        $('#cta_campos').val(contador);
        if (contador<20)
        {
             $('<tr id="contra'+contador+'">\n\
                    <td><input type="hidden" class="form-control" id="contador" name="contador" value="'+contador+'">\n\
                    <td><input type="text" class="form-control" type="text" id="descrip_ord'+contador+'" name="descrip_ord'+contador+'">\n\
                    <td><input type="number" class="form-control" type="number" id="cantidad_ord'+contador+'" size="4" name="cantidad_ord'+contador+'" >\n\
                    <td><input type="number" class="form-control" type="number" id="valor_unit'+contador+'" size="4" name="valor_unit'+contador+'" >\n\
                    <td><input type="number" class="form-control" type="number" id="valor_tot'+contador+'" size="4" name="valor_tot'+contador+'" >\n\
                    <td><input type="number" class="form-control" type="number" id="obra_cod'+contador+'" size="4" name="obra_cod'+contador+'" >\n\
                    <td><input type="number" class="form-control" type="number" id="undadms'+contador+'" size="4" name="undadms'+contador+'" >\n\
                    <td><input type="button" id="eliminar" class="eliminar" value="'+contador+'"></td></tr>alert(contador)').appendTo("#pre_equipo" ); 

                $("input.eliminar").click(function(){       
                    var mate=$(this).attr("value");
                    $("#contra"+mate).remove();
                    $('#cta_campos').val(contador);
                });
                contador--;
        }
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


function agregar_campos() 
{
   
    contador++;	
   
    $('#cta_campos').val(contador);
   
    $('<tr id="contra'+contador+'">\n\
                                    <input type="text" class="form-control" id="descrip_ord'+contador+'" size="4"  name="descrip_ord[]">\n\
                                    <input type="number" class="form-control" id="cantidad_ord'+contador+'" size="4"  name="cantidad_ord[]">\n\
                                    <td><input type="number" class="form-control" id="undadms'+contador+'" size="4" readonly name="undadms[]"></Td>\n\
                                    <td><input type="number" class="form-control" id="obra_cod'+contador+'" name="obra_cod[]" onkeyup=Consulta_Producto("'+contador0+'")></td>\n\
                                    <td><input type="number" class="form-control" id="valor_unit'+contador+'" name="valor_unit[]" ><input type="number" class="form-control" id="val_total'+contador0+'" name="val_total[]" onkeyup=Consulta_Embalaje("'+contador0+'")></td>\n\
                                    <td align="right"><input type="hidden" class="form-control" id="cantidad_ord'+contador+'" size="4" name="cantidad_ord[]" Onblur=Calcula_Subtotal("'+contador0+'") ></td><td><input type="button" id="elimi'+contador0+'" class="eliminar" value="'+contador0+'"></td></tr>alert(contador)').appendTo( "#agrega" );
    
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
