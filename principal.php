<?php

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
    <body background="logoestado.jpg" style="background-repeat: no-repeat; background-position: center center;" data-spy="scroll" data-target=".navbar" data-offset="50" >                                                                         
        <?php
        if ($_SESSION['tipo'] == 'admin') {
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
                            
                            <li class="active"><a href="principal.php">SEDESOL</a></li>       
                            <li><a href="Tickets.php">Agregar Nuevo Ticket</a></li> 
                            <li><a href="Personal.php">Personal</a></li>       
                            <li><a href="Area.php">Área</a></li>        
                            <li><a href="Tickets_Abiertos.php">Lista De Tickets Abiertos</a></li>     
                            <li><a href="Ticket_Cerrado.php">Lista De Ticket Cerrado</a></li>               
                            <li><a href="AgregarUsuario.php">Agregar Usuario</a></li>             
                            <li><a href="logout.php">Cerrar Sesión</a></li>            

                        </ul>
                    </div>
                </div>
            </nav>

            <?php
        } else {
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