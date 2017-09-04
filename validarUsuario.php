<?php
session_start();
include"conexion.php";
include "validations.php";
        $nombre = validateText($_POST['nombre']);
        $apellido_p = validateText($_POST['apellido_p']);
        $apellido_m = validateText($_POST['apellido_m']);
        $tipo = $_POST['tipo'];
        $usuario = $_POST['usuario'];
        $contrasenaM=md5($_POST['contrasena']);
        $repetircontrasenaM = md5($_POST['repetircontrasena']);
        
        if($contrasenaM == $repetircontrasenaM){
            $sql = "INSERT INTO usuarios (nombre,apellido_p,apellido_m,usuario,contrasena,tipo) VALUES ('$nombre','$apellido_p','$apellido_m','$usuario','$contrasenaM','$tipo')";
            $result = mysql_query($sql, $conn);
            
            if($result){
   header("Location:AgregarUsuario.php");
                echo "<SCRIPT TYPE='text/javascript'> alert(\"Datos Guardados\"); 
            window.location='AgregarUsuario.php'</SCRIPT>";
                
            } 
            else{
            header("Location:AgregarUsuario.php");
            echo "<SCRIPT TYPE='text/javascript'> alert(\"No se guardaron los datos\"); 
            window.location='AgregarUsuario.php'</SCRIPT>";
                echo "sbgk";
            }

        }else
        {
         
            echo "<SCRIPT TYPE='text/javascript'> alert(\"No se guardaron los datos\"); 
            window.location='AgregarUsuario.php'</SCRIPT>";
                echo "sbgk";
   
        }
        
        

 
?>
       
