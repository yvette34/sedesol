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
        <meta name="viewport" content="initial-scale=1.1">  

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <link href="Style.css" rel="stylesheet" type="text/css">
       
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
     <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">

                            <ul class="nav navbar-nav">
                                <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>

          
                <?php
                //echo $_SESSION['nombre'];
                ?>

               
            <li><a href="principal.php">SEDESOL</a></li>       
               
                    <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"  data-close-others="false">Personal<span class="caret"></span></a>
                   <ul class="dropdown-menu" role="menu">
                          <li><a href="Personal.php">Agregar Personal</a></li>
                          <li><a href="tabla_personal.php">Tabla del Personal</a></li>
                        

                    </ul>
                 </li>  
                           
                             <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"  data-close-others="false">Área<span class="caret"></span></a>
                   <ul class="dropdown-menu" role="menu">
                          <li class="active"><a href="Area.php">Agregar Área</a></li>
                          <li><a href="ver_area.php">Tabla del Área</a></li>
                 </ul>
                 </li>  
              <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"  data-close-others="false">Tickets<span class="caret"></span></a>
                   <ul class="dropdown-menu" role="menu">
                          <li><a href="Tickets.php">Agregar Ticket</a></li>
                          <li><a href="Tickets_Abiertos.php">Tickets Abiertos</a></li>
                          <li><a href="Ticket_Cerrado.php">Ticket Cerrado</a></li>

                    </ul>
                 </li>  
               
                
                    <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"  data-close-others="false">Agregar Usuario<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                          <li class="active"> <a href="AgregarUsuario.php">Agregar Nuevo Usuario</a></li>
                          <li><a href="tabla_usuarios.php"> Tabla de usuarios</a></li>
                    </ul>
                 </li>
                 <li> <a href="acerca_de.php">Acerca de</a>   </li>

        </ul>
        </div>
         
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                 <?php echo $_SESSION['nombre'];?>m<span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                <li class="active"><a href="logout.php">Cerrar Sesión</a></li>
                             </li>   
                             </ul>
    </div>

</div>
</nav>
<div class=" col-sm-12">
    <div class="offtset col-sm-10"></div>
      <img  src="logoestado.jpg" width="120" height="100" alt="Ningno">
    </div> 
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
                                <input type="text"   class="form-control" id="apellido_p" name="apellido_p"  placeholder="Introduzca apellido paterno" required > <br>
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
       
    </body>
</html>
