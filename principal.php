<?php
//echo  "la sesion es ".$_SESSION['tipo']."  ".$_SESSION['id'];
//$tipo=$_SESSION['tipo'];
//echo ("el tipo es: ".$tipo);
include_once('session.php');
?>

<!DOCTYPE HTML5>
<html>
    <head>

        <meta name="viewport" content="initial-scale=1.1">

        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

        <script src="js/jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>


    </head>
    <body background="logoestado.jpg" style="background-repeat: no-repeat; background-position: center center;">
               <?php
            if ($_SESSION['tipo'] == 'admin'){
                ?>
               
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">

                            <ul class="nav navbar-nav">
                                <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>
                            <ul class="nav navbar-nav">
                                
                                <li class="active"><a href="principal.php">SEDESOL</a></li>       
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Tickets</a>
                                <ul class="dropdown-menu">
                                    <li><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
                                    <li><a href="Tickets_Abiertos.php">Lista De Tickets Abiertos</a></li>     
                                    <li><a href="Ticket_Cerrado.php">Lista De Ticket Cerrado</a></li> 
                                </ul>
                                 </li>
                               <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Personal</a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="Personal.php  ?>">Agregar Personal</a></li>
                                    <li ><a href="tabla_personal.php">Tabla del Personal</a></li>     
                                  
                                </ul>
                                 </li>
                     
                                
                                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Área</a>
                                <ul class="dropdown-menu">
                                    <li><a href="Area.php">Agregar Área</a></li>
                                    <li class="active"><a href="ver_area.php">Tabla del Área</a></li>   
                                </ul>
                                 </li>     
                                              
                                <li><a href="AgregarUsuario.php">Agregar Usuario</a></li>             
                                <li><a href="logout.php">Cerrar Sesión</a></li>            
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            
            <?php
            }else{
            ?>
      
        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">

                            <ul class="nav navbar-nav">
                                <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>
        <div clas="col-sm-12">
        <ul class="nav navbar-nav">

                 <?php
               // echo $_SESSION['nombre'];
                ?>

             <li class="active"><a href="principal.php">SEDESOL</a></li>
                <li><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
        </div>
    </div>

</div>
</nav>
            
            <?php
            }
            ?>
    </body>
</html>