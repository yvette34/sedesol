<?php
include_once('session.php');
?>
<!DOCTYPE HTML>


<html>
    <head>
        <meta name="viewport" content="initial-scale=1.1">
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

            </div>
        </nav>
            <div class=" col-sm-12">
    <div class="offtset col-sm-10"></div>
      <img  src="logoestado.jpg" width="120" height="100" alt="Ningno">
    </div> 
        <div class="espacio">
                <div class="container">
                    <form action="insertarArea.php" method="POST" name="from">


                        <div class="form-group col-md-7">  
                        <label for="nombre">Nombre de Área:</label>
                        <input type="text"   class="form-control" id="nombre_area" placeholder="Introduzca el nombre de área" name="nombre_area" required> 
                    </div>

                        <div class="form-group col-md-7">  
                        <label for="nombre">Número de Extensión:</label>
                        <input type="text"   class="form-control" id="ext" placeholder="Introduzca el número de extensión"   name="ext" required> 
                    </div>
               


                <div class="form-group col-md-7">
                    <label for="piso" class="from-control">Piso:</label>
                    <select class="piso" name="piso">
                            <option value="#">-- Eliga uno --</option>
                        <option value="0">0</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
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
        
      

    </body>
</html>