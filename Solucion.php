<?php
include_once ('session.php');
$folio=$_GET['folio'];
?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <link href="Style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Agregar ticket</title>
    </head>
    <body>
         <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div clas="col-sm-12">
                            <ul class="nav navbar-nav">
                                
                                <li><a href="principal.php">SEDESOL</a></li>       
                                <li ><a href="Tickets.php">Agregar Nuevo Ticket</a></li> 
                                <li><a href="Personal.php">Personal</a></li>       
                                <li><a href="Area.php">Área</a></li>        
                                <li class="active"><a href="Tickets_Abiertos.php">Lista De Tickets Abiertos</a></li>     
                                <li><a href="Ticket_Cerrado.php">Lista De Ticket Cerrado</a></li>               
                                <li><a href="AgregarUsuario.php">Agregar Usuario</a></li>             
                                <li><a href="logout.php">Cerrar Sesión</a></li>            
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        <div class="espacio">
            

        <form action="resolverticket.php" method="POST" >
            <input type="hidden" name="ticket" id="ticket" value="<?php   echo $ticket; ?>" />


            <div class="form-group"></div>
            <div class="col-md-0"></div>

            <div class="row col-md-16">
                <div class="container">
                    <label for="Diagnostico">Diagnositicó:</label><br /><br>
                    <textarea id="Diagnostico" class="from-control" name="Diagnostico" rows="10" cols="80"></textarea><br /><br>

                    <label for="solucion" class="">Solución:</label><br /><br>
                    <textarea id="solucion" class="from-control" name="solucion" rows="10" cols="80"></textarea><br /><br>
                </div>
            </div>
            <div class="col-sm-offset-0 col-sm-10">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form> 
        </div>
    </body>
</html>