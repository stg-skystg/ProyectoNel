<?php
include_once('../../Model/Vidaplena/vidaplenaModel.php');


class vidaplenaController{
	
	function crear(){	
                $objUsu= new vidaplenaModel();	
                $objvidaplena= new vidaplenaModel();
                $objDist= new vidaplenaModel();
                
                $objvidaplena->closeConect();
                $objDist->closeConect();
               
                $objUsu->closeConect();
               
                include_once('../../View/Vidaplena/crear.html.php');
	}

 

	
	function postCrear()
        {           
            
           
            @$idpr=$_POST['idp'];
            //$serviciopr=$_POST['servicio'];
            //$formap=$_POST['forma'];
            
            $codigov=$_POST['codigov'];
            $nombrev=$_POST['nombrev'];
            $cantidadv=$_POST['cantidadv'];
            $fechav=$_POST['fechav'];

            



              //alert($idpr);         
           
                
               $sql="insert into proveedor(codigov, nombrev, cantidadv, fechav)  values ('$codigov', '$nombrev', '$cantidadv', '$fechav')";

            $objUsu= new vidaplenaModel();
           
            $producto=$objUsu->Insertar($sql);
           
            //$producto=$objUsu->Insertar($sql1);
            $objUsu->closeConect();
            redirect(getUrl("Proveedor","proveedor","crear"));  
           

            
            //include_once('../../view/Cliente/crearcon.html.php');          

	}
 
	
	function listar(){
		
        $sql="select distinct idpedido,idlote,nombregere,cedulagere,id_estado,fecha from vidaplena where id_estado=1";
		$objUsu= new vidaplenaModel();
		$producto=$objUsu->consultar($sql);
		$objUsu->closeConect();
		include_once('../../View/Vidaplena/listar.html.php');
	}

    function listarIn(){
        
        $sql="select distinct idpedido,idlote,nombregere,cedulagere,id_estado,fecha from vidaplena where id_estado=2";
        $objUsu= new vidaplenaModel();
        $producto=$objUsu->consultar($sql);
        $objUsu->closeConect();
        include_once('../../View/vidaplena/listarIn.html.php');
    }

    function listarinv(){
        
        $sql="select * from vidaplena";
        $objUsu= new vidaplenaModel();
        $producto=$objUsu->consultar($sql);
        $objUsu->closeConect();
        include_once('../../View/vidaplena/listarinv.html.php');
    }
        
       
        
        function getEliminar(){
            $proyec=$_GET['idpedido'];
            $sql="select * from vidaplena where idpedido='$proyec'";
            $objUsu= new vidaplenaModel();
            $producto=$objUsu->consultar($sql);
            $objUsu->closeConect();
             //redirect(getUrl("Proveedor","proveedor","listar"));
            include_once('../../View/Vidaplena/eliminar.html.php');
        } 

        
       
        
        function postEliminar(){
            $proyec=$_GET['idpedido'];
            $d=2;
            $sql="update vidaplena set id_estado='$d' where idpedido='$proyec'";
            $objUsu= new vidaplenaModel();
            $producto=$objUsu->Actualizar($sql);
            $objUsu->closeConect();
            redirect(getUrl("Vidaplena","vidaplena","listar"));
        }


         function despachar(){
            $proyec=$_POST['Cod_Pedido'];
            echo "<script>alert('prueba ya $proyec');</script>";
            
            
            //$test[] = $_POST['selectinput'];
            $d=2;
            
            foreach ($_POST['selectinput'] as $test) {
                echo "<script>alert('Usuario ya $test');</script>";
            }
            
            
            
            //$sql="update vidaplena set id_estado='$d' where idpedido='$proyec'";
            //$objUsu= new vidaplenaModel();
            //$producto=$objUsu->Actualizar($sql);
            //$objUsu->closeConect();
            //redirect(getUrl("Vidaplena","vidaplena","listar"));
        }
        
	
	 function despachar2(){
            

            $cantvendi=$_GET['cantsol'];
            $sqlinv="update vidaplena set cantvend='$cantvendi'";
            
            $objUsu= new vidaplenaModel();
            $producto = $objUsu->Actualizar($sqlinv);
            $objUsu->closeConect();
            //redirect(getUrl("Vidaplena","vidaplena","listar"));
        }
	
	
        function getEditar(){
            $producto=$_GET['idpedido'];
            $sql="select * from vidaplena where idpedido=$producto";
           // $sqlServi = "Select tipo_servicio from cliente order by id_usuario";
            $objUsu= new vidaplenaModel();
            $producto=$objUsu->consultar($sql);
         
            //$servicio = $objUsu->consultar($sqlServi)
                  
                      
            $objUsu->closeConect();
            include_once('../../view/Vidaplena/editar.html.php');
        }

        function consultarDesp(){
            $producto=$_GET['idp'];
            $sql="select * from vidaplena where idpedido=$producto";
            $objUsu= new vidaplenaModel();
            $producto=$objUsu->consultar($sql);
         
           
                      
            $objUsu->closeConect();
            include_once('../../view/Vidaplena/consultadesp.html.php');
        }
       
        
         function postEditar(){

            $proyec=$_POST['idpedido'];
            $cantsoli=$_POST['cantsol'];
            $d=2;
            
          

          
                 
            $sql="update vidaplena set id_estado='$d', cantvend='$cantsoli' where idpedido='$proyec'";
            $objUsu= new vidaplenaModel();
            $producto=$objUsu->Actualizar($sql);
           
            $objUsu->closeConect();

            //redirect(getUrl("Vidaplena","vidaplena","listar"));
        }
          

        
        
}

?>
