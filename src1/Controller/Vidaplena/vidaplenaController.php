<?php
include_once('../../Model/Vidaplena/vidaplenaModel.php');


class vidaplenaController{
	
	
    	function listar(){
    		


          $sql="select idpedido,SUM(cantsol),nombregere,cedulagere,id_estado,fecha from vidaplena where id_estado=1 group by idpedido";



           // $sql2="SELECT SUM(cantsol) from vidaplena where idpedido='$idpedido'";


            //$sql2="SELECT SUM(cantsol) from vidaplena where idpedido='$idpedido'";
            //echo "<script>alert('Usuario ya $sql2');</script>";
            
    		$objUsu= new vidaplenaModel();
            $objcant= new vidaplenaModel();

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
                
            $sql="select referenc,SUM(cantvend),nompro,inv from vidaplena where id_estado='2' group by referenc";
            $objUsu= new vidaplenaModel();
            $producto=$objUsu->consultar($sql);
            $objUsu->closeConect();
            include_once('../../View/vidaplena/listarinv.html.php');
        }
        
        function listardash(){
            

          $sql="select idpedido,count(cantsol) from vidaplena where id_estado=1";
            
            $objUsu= new vidaplenaModel();
            $producto=$objUsu->consultar($sql);

            $objUsu->closeConect();
        

            include_once('../../View/partials/dashboard.php');
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

            $d=2;
            $a=0;
            

            foreach ($_POST['selectinput'] as $test) {

                    $a=$a+1;
                    $b=0;

                foreach ($_POST['select'] as $test2) {

                    $b=$b+1;
                    if ($a==$b ) {


                    
                $sql="update vidaplena set cantvend = '$test', id_estado='2'
                where contador = '$test2'"; 



            $objUsu= new vidaplenaModel();
            $producto=$objUsu->Actualizar($sql);
            $objUsu->closeConect();

                            
                    }
                }

            }

            
          
                 
          
            redirect(getUrl("Vidaplena","vidaplena","listar"));
        }
          

        
        
}

?>
