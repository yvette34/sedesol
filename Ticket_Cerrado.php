<?php
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
      <title> Tickets Cerrados</title>
    </head>
    <body>
                    
             <?php
            if ($_SESSION['tipo'] == 'admin'){
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
                <li class="active"><a href="Ticket_Cerrado.php">Ticket Cerrado</a></li>

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
  <br>
  <br>
  <br>

  <div class="col-sm-12">
    <div class="offtset col-sm-10"></div>
    <img  src="logoestado.jpg" width="120" height="100" alt="Ningno">
  </div> 
  <br>
  <br>
  <br>
  <div class="espacio">

    <div class="container">
      
      <table class="table table-striped">
        <tbody>
          <tr>
            
            
            <th><strong>Folio</strong></th>
            <th><strong>Problema</strong></th>
            <th><strong>Diagnóstico</strong></th>
            <th><strong>Solución</strong></th>
            <th><strong>Fecha Solución</strong></th>
            <th><strong>Estado</strong></th>
          </tr>

                <?php
                $sql = "SELECT fecha_solucion,problema,Diagnostico,solucion,folio,estado FROM ticket WHERE estado='cerrado'";
                $result = mysql_query($sql, $conn) or die(mysql_error());
                if (!$result) {
                    die("<p>Fallo en la incercion de registro en la Base de datos;" . mysql_error() . "</p>");
                } else {
                    while ($row=  mysql_fetch_assoc($result)){
                        
                        
                         
                        echo'</td><td>';
                        echo $row['folio'];
                        echo'</td><td style ="word-break: break-word;">';
                        echo $row['problema'];
                        echo '</td><td style ="word-break: break-word;">';
                        echo $row['Diagnostico'];
                        echo '</td><td style ="word-break: break-word;">';
                        echo $row['solucion'];
                        echo '</td><td>';
                        echo $row['fecha_solucion'];
                        echo '</td><td>';
                        echo $row['estado'];
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
        
       
    </body>
</html>