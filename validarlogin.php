<?php

if (!isset($_SESSION)){
    session_start();
}  
   include "conexion.php";
         
        $usuario=$_POST['usuario'];
        $contrasena=md5($_POST['contrasena']);
        $sql= mysql_query("SELECT * FROM usuarios WHERE usuario= '$usuario' AND contrasena= '$contrasena'");
       
        if(mysql_num_rows($sql)>0)
        {
             
            while ($row = mysql_fetch_assoc($sql)) {

                $habilitado = $row['habilitado'];

                if ($habilitado == 1) {
                    $_SESSION['id'] = $row['id_usuario'];
                    $tipo = $row['tipo'];
                    $nombre = $row['nombre'];
                    $apellido_p = $row['apellido_p'];
                    $apellido_m = $row['apellido_m'];

                    $_SESSION['tipo'] = $tipo;
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['apellido_p'] = $apellido_p;
                    $_SESSION['apellido_m'] = $apellido_m;
                    
                    if($_SESSION['tipo']=="admin"){
                        header("Location:principal.php");
                    }elseif ($_SESSION['tipo']=="capturista") {
                        header("Location:principal.php");
                    }else{
                        header("Location:index.php");

                    }
                }else{//Habilitado
                     header("Location:index.php");
                      echo "<SCRIPT TYPE='text/javascript'> alert(\"Bienvenido\"); 
            window.location='Tickets_Abiertos.php'</SCRIPT>";
                }
            }//while

    

            
        }else{//if consulta tiene contenido
            echo "<SCRIPT TYPE='text/javascript'> alert(\"Datos Incorrectos\"); 
            window.location='index.php'</SCRIPT>";
            header("Location:index.php");
        }
          
    
?>



    












