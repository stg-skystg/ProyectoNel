<?php
session_start();

include_once('../../Lib/helpers.php'); 
include_once '../../View/partials/head.php';

?>
<body>
    <!-- /#wrapper -->
    <div id="wrapper">        
        <?php             
            include_once '../../View/partials/menu_izquierdo.php';

            cargarPrincipal();

    ?>
        
        
        
        
    </div>

    

</body>

</html>


<?php


    include_once('../../View/partials/footer.php'); 
 

?>

