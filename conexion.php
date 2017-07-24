        <?php
               
      $bd_host = "localhost";
    $bd_user = "root";
    $bd_password = "";
    $bd_base = "sistec";
    
   $conn = mysql_connect($bd_host, $bd_user, $bd_password); 
    mysql_select_db($bd_base, $conn) or die ("Error al conectar a la Base de datos"); 
      
    
    
    
    
        ?>
