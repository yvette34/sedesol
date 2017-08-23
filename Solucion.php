<?php
include_once ('session.php');
$folio=$_GET['folio'];
?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="viewport" content="initial-scale=1.1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <link href="Style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Agregar ticket</title>
    </head>
    <body>
          <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">

                            <ul class="nav navbar-nav">
                                <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>
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
            

        <form action="resolverticket.php" method="POST" >
            <input type="hidden" name="folio" id="folio" value="<?php   echo $folio; ?>" />


            <div class="form-group"></div>
            <div class="col-md-6">

            <div class="row col-md-9">
                <div class="container">
                    <label for="Diagnostico">Diagnóstico:</label><br /><br>
                    <textarea id="Diagnostico" class="from-control" name="Diagnostico" rows="7" cols="80"></textarea><br /><br>

                    <label for="solucion" class="">Solución:</label><br /><br>
                    <textarea id="solucion" class="from-control" name="solucion" rows="7" cols="80"></textarea><br /><br>
                </div>
            </div>
            </div>
            <div class="col-sm-offset-0 col-sm-10">
                <button type="submit" href="Ticket_Cerrado.php" class="btn btn-success">Guardar</button>
            </div>
        </form> 
        </div>
    </body>
</html>