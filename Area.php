<?php
include_once('session.php');
?>
<!DOCTYPE HTML>


<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <link href="Style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title> FORMULARIO ÁREA</title>
    </head>
    <body>
        
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
                            <?php
                            //echo $_SESSION['nombre'];
                            ?>

                            <li><a href="principal.php">SEDESOL</a></li>       
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Tickets</a>
                                <ul class="dropdown-menu">
                                 <li class="active"><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
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
                                    <li class="active"><a href="Area.php">Agregar Área</a></li>
                                    <li><a href="ver_area.php">Tabla del Área</a></li>   
                                </ul>
                                 </li>
                                
                                <li><a href="AgregarUsuario.php">Agregar Usuario</a></li>
                                <li><a href="logout.php">Cerrar Sesión</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <div class="espacio">
                <div class="container">
                    <form action="insertarArea.php" method="POST" name="from">


                        <div class="form-group col-md-7">  
                        <label for="nombre">Nombre de Área:</label>
                        <input type="text"   class="form-control" id="nombre_area" placeholder="Introduzca el nombre de área" name="nombre_area" required> 
                    </div>


                        <div class="form-group col-md-7">  
                        <label for="nombre">Número de Extensión:</label>
                        <input type="text"   class="form-control" id="ext" placeholder="Introduzca el número de extensión" name="ext" required> 
                    </div>
               


                <div class="form-group col-md-7">
                    <label for="piso" class="from-control">Piso:</label>
                    <select class="piso"
                            <option>-- Eliga una --</option>
                        <option value="1">1</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                    </select>
                </div>
                
                <div class="col-sm-offset-0 col-sm-10"><br>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>            
       </div>
      </div>

                                <?php
                            }else {
                header("Location:principal.php");
            }
              
            ?>
        
        <footer>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
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