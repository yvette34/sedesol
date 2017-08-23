<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Iniciar Sesión</title>
        <meta name="viewport" content="initial-scale=1.1">
        <meta charset="utf-8">
        
        <link href="estilo2.css" rel="stylesheet" type="text/css">
        <link href="Style.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    </head>



    <body>
     
<div class="container">
    <img  src="sedesol1.jpg" width="1000" height="160">
    </div>
    
         <div class="container">
                <center>
           <h2><b>Sistema De Soporte Técnico</b></h2>
                </center>
                <form action="validarlogin.php" method="POST">
                    <div class="boxlogin">
                        <label for="usuario">Usuario:</label><br>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Escribir usuario" required><br>
                        <label for="contrasena">Contraseña:</label><br>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Escribir contraseña" required><br> 
                        <button type="submit" class="btn btn-success">ENTRAR</button><br>
                    </div> 
               
                </form>
            
        </div>
    </body>
</html>