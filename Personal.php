<?php
include_once('session.php');
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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/evento_areas.js"></script>
        <title>FORMULRIO PERSONAL</title>
    </head>
    <body>
            
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

          
                <?php
                echo $_SESSION['nombre'];
                ?>

            <li><a href="principal.php">SEDESOL</a></li>       
               
                
                    <li><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
               
                
                    <li class="active"><a href="Personal.php">Personal</a></li>
                
               
                    <li><a href="Area.php">Área</a></li>
                
                
                    <li><a href="Tickets_Abiertos.php">Lista De Tickets Abiertos</a></li>
                
                    <li><a href="Ticket_Cerrado.php">Lista De Ticket Cerrado</a></li>
                
                    <li><a href="AgregarUsuario.php">Agregar Usuario</a></li>
              
                    <li><a href="logout.php">Cerrar Sesión</a></li>

        </ul>
        </div>
    </div>

</div>
</nav>
        <div class="espacio">
            <form action="insertarPersonal.php" method="POST" name="from">
                <div class="container">
                   
                            <div class="form-group col-md-7">  
                                <label for="nombre" >Nombre:</label>
                                <input type="text"   class="form-control" id="nombre" placeholder="Introduzca nombre" name="nombre" required> 
                            </div>
                            <div class="form-group col-md-7">  
                                <label for="apellido_p">Apellido Paterno:</label><br>
                                <input type="text"   class="form-control" id="apellido_p"  placeholder="Introduzca apellido paterno" name="apellido_p" required> 
                            </div>
                            <div class="form-group col-md-7">  
                                <label for="apellido_m">Apellido Materno:</label>
                                <input type="text"   class="form-control" id="apellido_m" placeholder="Inroduzca apellido materno" name="apellido_m" required> 
                            </div>
                            <div class="form-group col-md-7">
                                <label for="area" >Área:</label>
                                <select class='form-control' id="area" name="area">
                                    <option  value = ""  disabled  selected  style = " display : none ; " > Cargando Areas...</option> 
                                </select>
                            </div>
                            <div class="form-group col-sm-offset-0 col-sm-10"><br>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                            
                        
                    
                </div>
            </form>
        </div>
                     
      <?php
            } else {
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