<?php
include_once('session.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">  

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <link href="Style.css" rel="stylesheet" type="text/css">
        <script src="js/evento_AgregarUsuario.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <title>Agregar Usuario o Administrador </title>
    </head>

    <body>
                    
             <?php
            if ($_SESSION['tipo'] == 'admin'){
                ?>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <div clas="col-sm-12">
        <ul class="nav navbar-nav">


          
                <?php
                //echo $_SESSION['nombre'];
                ?>

               
            <li><a href="principal.php">SEDESOL</a></li>       
               
                
                    <li><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
               
                
                    <li><a href="Personal.php">Personal</a></li>
                
               
                    <li><a href="Area.php">Área</a></li>
                
                
                    <li><a href="Tickets_Abiertos.php">Lista De Tickets Abiertos</a></li>
                
                    <li><a href="Ticket_Cerrado.php">Lista De Ticket Cerrado</a></li>
                
                    <li class="active"><a href="AgregarUsuario.php">Agregar Usuario</a></li>
              
                    <li><a href="logout.php">Cerrar Sesión</a></li>
             

        </ul>
        </div>
    </div>

</div>
</nav>
        <div class="espacio">
            <div class="container">
                <div class="row">   
                    <form action="validarUsuario.php" method="post">
                   
                        <div class="form-group">
                            
                           
                            
                            
                         
                            
                            <div class="form-group col-md-7">  
                                <label for="nombre" >Nombre:</label>
                                <input type="text"   class="form-control" id="nombre" placeholder=" Introduzca nombre" name="nombre" required> 
                            </div>
                             
                            
                            <div class="form-group col-md-7">  
                                <label for="apellido_p">Apellido Paterno:</label><br>
                                <input type="text"   class="form-control" id="apellido_p" name="apellido_p"  placeholder="Introduzca apellido paterno"required> <br>
                            </div>
                            <div class="form-group col-md-7">  
                                <label for="apellido_m">Apellido Materno:</label>
                                <input type="text"   class="form-control" id="apellido_m"placeholder="Introduzca apellido materno" name="apellido_m" required> 
                            </div>
                            
                                <div class="form-group col-md-7">  
                                <label for="usuario" >Usuario:</label>
                                <input type="text"   class="form-control" id="usuario" placeholder="Introduzca usuario" name="usuario" required> 
                            </div>
                            <div class="form-group col-md-7">  
                                <label for="contrasena">Contraseña:</label>
                                <input type="password"   class="form-control"  id="contrsena" placeholder="Introduzca una contraseña" name="contrasena" required> 

                            </div>
                            <div class="form-group col-md-7">  
                                <label for="repetircontrasena">Repetir Contraseña:</label>
                                <input type="password"   class="form-control" id="repetircontrasena" placeholder="Introduzca nuevamente la contraseña" name="repetircontrasena" required> 

                            </div>
                            <br>
                            <div class="form-group col-md-7">
                                <label for="tipo" >Tipo De Usuario:</label><br>
                                <select class='form-control' id="tipo" name="tipo"><
                                    <option  value = ""  disabled  selected  style = " display : none ; " > Seleccionar tipo de usuario...</option> 
                                    <option value="admin">Admin</option>
                                    <option value="capturista">Capturista</option>
                                </select>
                            </div>
                            <div class="col-sm-offset-0 col-sm-10"><br>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                       </div>
                    </form>
                 

                </div>
            </div>
        </div>
      <?php
            }else {
                header("Location:principal.php");
            }
      ?>
        <footer>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    <div class="footer-bottom">
        <div class="container">
            
            <div class="pull-right">
                <p>Copyright ©Yvette Hernández Acevedo y Roberto Armando Correa Rivera</p>
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
    </body>
</html>
