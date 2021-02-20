$(document).ready(function(){
    
    $(document).on("keyup","#item1",function(){
        
        var nit=$(this).val();
        var descripcionpr=$('#descripcionpr').val();
        var url=$(this).attr("data-url");
        
        $.ajax({
            url:url,
            data:"nit="+nitp+"&descripcionpr="+descripcionp,
            type:"POST",
            success: function(dato){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó
                $("#info_proveedor").html(dato); //la información encontrada se pinta en el div
            }
            
            
        });
        
    });  
    
    
    
    $(document).on("click", ".cargarDato", function(){
        
        var posicion=$(this).attr('id');
        var nit=$('#nitidenti'+posicion).val();
        var ciu_nombre=$('#ciu_nombre'+posicion).val();
        
        $("#id_ciudad").val(ciu_id);
        $("#nombre_ciudad").val(ciu_nombre);
         $("info_proveedor").html("");
        
    });
    
    
    $(document).on("keyup", "#buscar_ciud", function(){
        
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



    $(document).on("keyup", "#buscar_dep", function(){
        
        var dato=$(this).val();
        var url=$(this).attr("data-url");
        
        $.ajax({
            
            url:url,
            data:"dato="+dato,
            type:"POST",
            success:function(filtro){
                $("#lista_deptos").html(filtro);
            }
            
        });
        
    });
 $(document).on("keyup", "#buscar_cen", function(){
        
        var dato=$(this).val();
        var url=$(this).attr("data-url");
        
        $.ajax({
            
            url:url,
            data:"dato="+dato,
            type:"POST",
            success:function(filtro){
                $("#lista_cen").html(filtro);
            }
            
        });
        
    });

$(document).on("keyup", "#nom",function(){
    var datos=$(this).val();
    var dir_centro=$('#dir_centro').val();
    alert('Llego El Nombre Es--->'+dir_centro+" ,"+datos);
});


    });


$(document).ready(function(){
    
    $(document).on("keyup","#item2",function(){
        
        var id_centro=$(this).val();
        var cen_descripcion=$('#nom_centro').val();

        var url=$(this).attr("data-url");
        
        $.ajax({
            url:url,
            data:"id_centro="+id_centro+"&cen_descripcion="+cen_descripcion,
            type:"POST",
            success: function(dato){ 
                $("#info_centro").html(dato); 
            }
            
            
        });
        
    });  

 $(document).on("click", "#enviar", function(){
        
    
        var url=$(this).attr("data-url");
        
        
    });
    
    
});
    

 