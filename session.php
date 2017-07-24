<?php
  session_start();
 
       if(isset($_SESSION['id'])){
           $user= $_SESSION['id'];
        
      }else{
          
          //empiezan tus codigos
           echo "<SCRIPT TYPE='text/javascript'> alert(\"Acceso Restringido\"); 
            window.location='index.php'</SCRIPT>";
          echo "<SCRIPT TYPE='text/javascript'> alert(\"Acceso Restringido\"); </SCRIPT>";
          header("Location:index.php");
       }
            
       
?>