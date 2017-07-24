<?php
include "conexion.php";
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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/evento_areas.js"></script>
        <title>Lista De Tickets Abiertos</title>
    </head>
    <body>
        
             <?php
            if ($_SESSION['tipo'] == 'admin'){
                ?>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <div clas="col-sm-12">
        <ul class="nav navbar-nav">


          
                <?php
                //echo $_SESSION['nombre'];
                ?>

               
            <li><a href="principal.php">SEDESOL</a></li>       
               
                
                    <li><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
               
                
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
            <div class="container">

        <table class="table table-striped">
            <tbody>
                <tr>
                <th><strong>Folio</strong></th>
                <th><strong>Mantenimiento</strong></th>
                <th><strong>Problema</strong></th>
                <th><strong>Fecha Captura</strong></th>
                 <th><strong>Revisar</strong></th>
                </tr>

                <?php
                $sql = "SELECT folio,fecha_captura,problema,mantenimiento FROM ticket WHERE estado='abierto'";
                $result = mysql_query($sql, $conn) or die(mysql_error());
                if (!$result) {
                    die("<p>Fallo en la incercion de registro en la Base de datos;" . mysql_error() . "</p>");
                } else {
                    while ($row=  mysql_fetch_assoc($result)){
                        echo "<tr><td>";
                        echo $row['folio'];
                        echo '</td><td>';
                        echo implode(', ', unserialize($row['mantenimiento']));
                        echo '</td><td>';
                        echo $row['problema'];
                        echo '</td><td>';
                        echo $row['fecha_captura'];
                        echo '</td><td>';
                        echo "<a href='Solucion.php?folio=" .$row['folio']."'>resolver</a>";  
                        echo '</td></tr>';
                        
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