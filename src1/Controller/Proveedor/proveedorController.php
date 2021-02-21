<?php
include_once('../../Model/Proveedor/proveedorModel.php');


class proveedorController{
	
	function crear(){	
                $objUsu= new proveedorModel();	
                $objProvee= new proveedorModel();
                $objDist= new proveedorModel();
              
                $sqlProvee = "Select CiudadNombre from ciudades where PaisCodigo='57'";
                $sqlDist = "Select nombreDistrito from distritos where PaisCodigo='57'";
                
                $ciudad = $objProvee->consultar($sqlProvee);
                $distrito = $objProvee->consultar($sqlDist);
                //$usuario = $objProvee->consultar($sqlUsuario);
                $objProvee->closeConect();
                $objDist->closeConect();
               
                $objUsu->closeConect();
               
                include_once('../../View/Proveedor/crear.html.php');
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

            $objUsu= new proveedorModel();
           
            $producto=$objUsu->Insertar($sql);
           
            //$producto=$objUsu->Insertar($sql1);
            $objUsu->closeConect();
            redirect(getUrl("Proveedor","proveedor","crear"));  
           

            
            //include_once('../../view/Cliente/crearcon.html.php');          

	}
    // function postCrearCon()
    //     {           
            
    //        // $cliente=$_POST['idp_proveedor'];
           
    //         //$usuariop=$_POST['usuario'];
            
    //         $nombrepr=$_POST['nombrecl'];
    //         $apelpr=$_POST['apel'];
    //         $corrpr=$_POST['corr'];
    //         $celpr=$_POST['cel'];
    //         $telclpr=$_POST['telcl'];
            
          
           



    //           //alert($idpr);         
           
    //         @$sql="insert into cliente(nombrec, apec, correoc, celularc, telc, extensionc, idc_estado, nit ) values ('$nombrepr', '$apelpr', '$corrpr', '$celpr', '$telclpr', '$extenpr', '$estadop', '$nombre')";
             

    //         $objUsu= new clienteModel();
           
    //         $cliente=$objUsu->Insertar($sql);
            
           
    //         $objUsu->closeConect();
           

            
    //         redirect(getUrl("Cliente","cliente","listar"));     
    //                              // include_once"<link rel='stylesheet' href='../../Web/vendor/bootstrap/fonts/bootstrap.min.css'>
    //                              //        <script src='../../Web/Js/jquery-1.12.4.min.js'></script>
    //                              //        <script src='../../Web/vendor/bootstrap/css/bootstrap.min.js'></script>";
      

    // }
	
	function listar(){
		
        $sql="select * from proveedor where id_estado=1";
		$objUsu= new proveedorModel();
		$producto=$objUsu->consultar($sql);
		$objUsu->closeConect();
		include_once('../../View/Proveedor/listar.html.php');
	}

    function listarIn(){
        
        $sql="select * from proveedor where id_estado=2";
        $objUsu= new proveedorModel();
        $producto=$objUsu->consultar($sql);
        $objUsu->closeConect();
        include_once('../../View/Proveedor/listarIn.html.php');
    }
        
        function listarFiltro(){
        $dato=$_POST['dato'];
		$sql="select * from proveedor where idp_proveedor like '$dato%' or descripcionpr like '$dato%' order by descripcionprs";
		$objUsu= new proveedorModel();
		$producto=$objUsu->consultar($sql);
		$objUsu->closeConect();
		include_once('../../View/Proveedor/listaFiltro.html.php');
	}
        
        function getEliminar(){
            $proyec=$_GET['idp'];
            $sql="select * from proveedor where idp_proveedor='$proyec'";
            $objUsu= new proveedorModel();
            $producto=$objUsu->consultar($sql);
            $objUsu->closeConect();
             //redirect(getUrl("Proveedor","proveedor","listar"));
            include_once('../../View/Proveedor/eliminar.html.php');
        }

         function getResta(){
            $proyec=$_GET['idp_proveedor'];
            $d=1;
            $sql="update proveedor set id_estado='$d' where idp_proveedor='$proyec'";
            $objUsu= new proveedorModel();
            $producto=$objUsu->Actualizar($sql);
            $objUsu->closeConect();
             //redirect(getUrl("Proveedor","proveedor","listar"));
            //include_once('../../View/Proveedor/eliminar.html.php');
        }
        
        function postEliminar(){
            $proyec=$_GET['idp_proveedor'];
            $d=2;
            $sql="update proveedor set id_estado='$d' where idp_proveedor='$proyec'";
            $objUsu= new proveedorModel();
            $producto=$objUsu->Actualizar($sql);
            $objUsu->closeConect();
            redirect(getUrl("Proveedor","proveedor","listar"));
        }
        
        function getEditar(){
            $producto=$_GET['idp'];
            $sql="select * from proveedor where idp_proveedor=$producto";
            $sqlProvee = "Select CiudadNombre from ciudades where PaisCodigo='57' order by CiudadNombre";
            $sqlDist = "Select nombreDistrito from distritos where PaisCodigo='57' order by nombreDistrito";
            $sqlUsuario = "Select id_usuario from cliente order by id_usuario";
           // $sqlServi = "Select tipo_servicio from cliente order by id_usuario";
            $objUsu= new proveedorModel();
            $producto=$objUsu->consultar($sql);
            $ciudad = $objUsu->consultar($sqlProvee);
            $usuario = $objUsu->consultar($sqlUsuario);
            $distrito = $objUsu->consultar($sqlDist);
            //$servicio = $objUsu->consultar($sqlServi)
                  
                      
            $objUsu->closeConect();
            include_once('../../view/Proveedor/editar.html.php');
        }
       
        
        function postEditar(){
            $idpr=$_POST['idp'];
            //@$nitpr=$_POST['nitp'];
            $nombrepr=$_POST['nombrep'];
            $passpr=$_POST['pass'];
            $telpr=$_POST['telp'];
            $dirpr=$_POST['dirp']; 
            $correopr=$_POST['correop'];
            $correopro=$_POST['correoprov'];
            $correoprov=$_POST['correopri'];
            //$serviciopr=$_POST['servicio'];
            //$formap=$_POST['forma'];
            $ciudad=$_POST['ciudad'];
            $distrito=$_POST['dist_id'];
            //$paispr=$_POST['pais_id'];
            //$estadop=$_POST['estado'];
            //$usuario=$_POST['usuario'];
            //$descripcionp=$_POST['descripcionp'];
            $telpru=$_POST['telp_uno'];
            $telprd=$_POST['telp_dos'];
            $telprt=$_POST['telp_tres'];
            $banco=$_POST['banco_nom'];
            $tipo=$_POST['tipo_cue'];
            $n_cuen=$_POST['num_cuenta'];

            
                 
                 
            $sql="update proveedor set nombre='$nombrepr', pass='$passpr', telefono='$telpr', telefono_dos='$telpru', telefono_tres='$telprd', telefono_cua='$telprt', direccion='$dirpr', correo='$correopr', correo_provee='$correopro', corr_p='$correoprov', CiudadNombre='$ciudad', nombreDistrito='$distrito', banco='$banco', tipo_cuenta='$tipo', n_cuenta='$n_cuen'"
                    . "where idp_proveedor='$idpr' ";
            $objUsu= new proveedorModel();
            $producto=$objUsu->Actualizar($sql);
            $objUsu->closeConect();
            redirect(getUrl("Proveedor","proveedor","listar"));
        }
          

        
        function fitroAjax()
        {
           $idp_proveedor = isset($_POST['nit_p']);     
          
            $cons="select idp_proveedor, nit, descripcionpr from proveedor natural join producto where nit like '%2%'";
             $objUsu= new proveedorModel();
            $producto=$objUsu->consultar($cons);            
            // //realizo la cosulta y cargo 
            
            include_once('../../view/Proveedor/listaAjax.html.php');
        }
	
}

?>