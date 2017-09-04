?php
include "conexion.php";
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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/evento_areas.js"></script>
        <title>Lista De Tickets Abiertos</title>
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
                //echo $_SESSION['nombre'];
                ?>

               
                <li><a href="principal.php">SEDESOL</a></li>       
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Tickets</a>
                    <ul class="dropdown-menu">
                        <li><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
                        <li class="active"><a href="Tickets_Abiertos.php">Lista De Tickets Abiertos</a></li>     
                        <li><a href="Ticket_Cerrado.php">Lista De Ticket Cerrado</a></li> 
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Personal</a>
                    <ul class="dropdown-menu">
                        <li><a href="Personal.php  ?>">Agregar Personal</a></li>
                        <li class="active"><a href="tabla_personal.php">Tabla del Personal</a></li>     
                        
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



<div class="espacio">
    <div class="container">

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th><strong>Nombre</strong></th>
                    <th><strong>Apellido Paterno</strong></th>
                    <th><strong>Apellido Materno</strong></th>
                    <th><strong>Usuario</strong></th>
                    <th><strong>Tipo de Usuario</strong></th>
                    
                </tr>

                <?php
                $sql = "SELECT id_usuario,nombre,apellido_p,apellido_m,usuario,tipo FROM usuarios ";
                $result = mysql_query($sql, $conn) or die(mysql_error());
                if (!$result) {
                    die("<p>Fallo en la incercion de registro en la Base de datos;" . mysql_error() . "</p>");
                } else {
                    while ($row=  mysql_fetch_assoc($result)){

                        echo "<tr><td>";
                        echo $row['id_usuario'];
                        echo '</td><td>';
                        echo $row['nombre'];
                        echo '</td><td>';
                        echo $row['apellido_p'];
                        echo '</td><td>';
                        echo $row['apellido_m'];
                        echo '</td><td>';
                        echo $row['usuario'];
                        echo '</td><td>';
                        echo $row['Tipo'];
                        echo '</td><td>';
                    } 
                }

                mysql_close();
                ?>


                
        </tbody>
        </table>



        </div><!--cierre div de contenido-->
         <?php
            }else {
                header("Location:principal.php");
            }
      ?>
        </div>
        
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