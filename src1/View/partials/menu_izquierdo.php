   <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Software SDVP v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                   <p class="text-info">    
 <?php

if(!isset($_SESSION["identificacion"])){
  header("location:login.php");
}

echo '<h3 align=center> 

 Usuario: &nbsp'.$_SESSION["identificacion"].'</h3>';


?>
       </p>         
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user fa-lg">
                       
                    
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Salir </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                              
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i>INICIO </a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-align-justify  fa-fw"></i> MODULO 1<span class="fa arrow"></span></a>
                            <ul class="nav nav-first-level">
                               <!--  <li>
                                    <a href="blank.html">Blank Page</a>
                                </li> 
                                   <li>
                                    
                                   
                                     <!--   <li>
                                            <a href="index.php?modulo=Proveedor&controlador=proveedor&funcion=crear">Registrar</a>
                                        </li>-->
                                        

                                        <li>
                                            <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=listar">Consulta vida plena sin despachar </a>
                                        </li>
                                         <li>
                                            <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=listarIn">Consulta vida plena despachadas </a>
                                        </li>
                                       
                                    </ul>                          
                                </li> 

                         <li>
                            <a href="#"><i class="fa fa-align-justify  fa-fw"></i> MODULO 2<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               

                                        <li>
                                            <a href="index.php?modulo=Vidaplena&controlador=vidaplena&funcion=listarinv">Consulta de Inventario </a>
                                        </li>
                                         
                                       
                                    </ul>                          
                                </li> 
                                
                                
                                
                                   
                            
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
                                       
            <!-- /.navbar-static-side -->
        </nav>