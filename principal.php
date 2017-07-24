<?php
//echo  "la sesion es ".$_SESSION['tipo']."  ".$_SESSION['id'];
//$tipo=$_SESSION['tipo'];
//echo ("el tipo es: ".$tipo);
include_once('session.php');
?>

<!DOCTYPE HTML5>
<html>
    <head>

        <meta name="viewport" content="initial-scale=1.0">

        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

        <script src="js/jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
<!--              <link href="Style1.css" rel="stylesheet" type="text/css">-->


    </head>
    <body>
                   <?php
                     if ($_SESSION['tipo'] == 'admin');
                ?>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <div clas="col-sm-8">
        <ul class="nav navbar-nav">
            <li class="active"><a href="principal.php">SEDESOL</a></li>       
               
                
                    <li ><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
               
                
                    <li><a href="Personal.php">Personal</a></li>
                
               
                    <li><a href="Area.php">Área</a></li>
                
                
                    <li><a href="Tickets_Abiertos.php">Lista De Tickets Abiertos</a></li>
                
                    <li><a href="Ticket_Cerrado.php">Lista De Ticket Cerrado</a></li>
                
                    <li ><a href="AgregarUsuario.php">Agregar Usuario</a></li>
              
                    <li><a href="logout.php">Cerrar Sesión</a></li>
                 

                         <?php
                     if ($_SESSION['tipo'] == 'capturista');
                ?>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <div clas="col-sm-8">
        <ul class="nav navbar-nav">
            <li class="active"><a href="principal.php">SEDESOL</a></li>       
               
                
                    <li ><a href="Tickets.php">Agregar Nuevo Ticket</a></li>

 <li><a href="logout.php">Cerrar Sesión</a></li>



        </ul>
        </div>
    </div>

</div>
</nav>
    </body>
</html>