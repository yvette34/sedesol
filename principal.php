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
               
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">

                            <ul class="nav navbar-nav">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>
                            <ul class="nav navbar-nav">
                                
                                <li class="active"><a href="principal.php">SEDESOL</a></li>  
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
                          <li><a href="Area.php">Agregar Área</a></li>
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
                          <li> <a href="AgregarUsuario.php">Agregar Nuevo Usuario</a></li>
                          <li><a href="tabla_usuarios.php"> Tabla de usuarios</a></li>
                    </ul>
                 </li>
                                
                 <li> <a href="acerca_de.php">Acerca de</a>   </li>
                               
                            </ul>
                        </div>
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                 <?php echo $_SESSION['nombre'];?><span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                <li class="active"><a href="logout.php">Cerrar Sessión</a></li>
                             </li>   
                             </ul>
            
                </div>
            </nav>
            
            <?php
            }else{
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

        <ul class="nav navbar-nav">

                 

             <li class="active"><a href="principal.php">SEDESOL</a></li>
                <li><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
               
        </ul>
        
        
    </div>
    <?php
               // echo $_SESSION['nombre'];
                ?>
                <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                 <?php echo $_SESSION['nombre'];?><span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                <li class="active"><a href="logout.php">Cerrar Sessión</a></li>
                             </li>   
                             </ul>
</div>
</nav>
            
            <?php
            }
            ?>
    </body>
</html>