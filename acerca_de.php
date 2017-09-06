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
        <ul class="nav navbar-nav">
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
    <li class="activie"> <a href="acerca_de.php">Acerca de</a>   </li>
  </ul>
</div>
<ul class="nav navbar-nav navbar-right">
  <li><a href="logout.php">Cerrar Sesión</a></li>   
</ul>
</div>
</div>
</nav>

<br><br><br><br>
<div class=" col-sm-12">
  <div class="offtset col-sm-10"></div>
  <img  src="logoestado.jpg" width="120" height="100" alt="Ningno">
</div> 



<br><br>
<div  class="container-fluid">
  <div align="justify">
    <font  size="4" face="Arial">

      <br><br><br>
      
      <center>
        <h1>Sistema de Soporte Técnico</h1>
      </center>
      <br><br><br>
      <center>
        <p>Versión 1.0</p>
        <p>Septiembre 2017</p>
      </center>




      <br><br><br><br><br><br><br><br><br>
      <div class="jumbotron"> 
      <font size="3">
      <font face="Arial">
        <center>
          <div id="copyright">Copyright&copy; 2017 - Sistema creado por Yvette Hernández Acevedo  y Roberto Aramando Correa Rivera para la Secretaría de Desarrollo Social Estatal del estado de Zacatecas - Todos los derechos reservados</div>
        </center>

        <center>
          <p>Circuito Cerrado del Gato, Edifico B, Cd. Gobierno, Tercer Piso, Cuarto y Quinto Piso
           C.P. 98160 Zacatecas, Zac. Tel:(492) 491-50-00 Ext: 35180, 35180 y 35183.</p>
         </center>
         </font>
         </font>
       </div>
     </font>
   </div>
 </div>

</body>
</html>