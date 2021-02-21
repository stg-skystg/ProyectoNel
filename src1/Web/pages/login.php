<?php

session_start();
if (isset($_SESSION["identificacion"])) {
  //header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Moda Internacional</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
 <body background="nigger2.jpg"> <br><br>    <div class="container">
      <div class="row">
        
 <div class="row">
                <div class="col-lg-20">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
                        </div>
                        <div class="panel-body">
                         <br clear="right"> 
                        <img src="70.jpg" height="500" width="630" ALIGN="left">
        <div class="row">
                <div class="col-lg-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3><center><p>SISTEMA DE REGISTROS Y CONSULTAS VIDA PLENA<br><strong>Moda Internacional <BR>
             </strong> </h3></p>
                        </div>
                        <div class="panel-body">
                           
                              

          <form method="POST">
         

            <div class="form-group">
           <label for="identificacion"></label>
      
              <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Usuario" required>
            </div>
         
            <div class="form-group">
            <label for="clave"></label>
              <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña" required>
            </div></center> 
             <label> 
                <input name="remember" type="checkbox" value="Remember Me"> &nbsp Recordarme
                                    </label>
          <center>
          <div class="form-group">
          
          </div>

            <div class="form-group">
        <input type="button" name="iniciar" id="iniciar" value="                          
          



        Iniciar Sesión


         " class="btn  btn-warning btn-lg ">
            </div>
            <br></center>    
            <span id="result"></span>
          </form>


                        </div>
                        <div class="panel-footer">
                            SRCVP v1.0  2021
                        </div>
                    </div>
                </div>


        </div>


                         
                        </div>

                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>


<br><br><br>


      </div>
    </div>
  </body>
</html>

<script>
  $(document).ready(function() {
    $('#iniciar').click(function(){
      var identificacion = $('#identificacion').val();
      var clave = $('#clave').val();
      if($.trim(identificacion).length > 0 && $.trim(clave).length > 0){
        $.ajax({
          url:"logueame.php",
          method:"POST",
          data:{identificacion:identificacion, clave:clave},
          cache:"false",
          beforeSend:function() {
            $('#iniciar').val("Conectando...");
          },
          success:function(data) {
            $('#iniciar').val("iniciar");
            if (data=="1") {
              $(location).attr('href','index.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong>los datos son incorrectos.</div>");
            }
          }
        });
      };
    });
  });
</script>
