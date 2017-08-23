<?php 
    include_once('session.php');
?>
<!DOCTYPE HTML>
    <html>
        <head>
            <meta name="viewport" content="initial-scale=1.1">
            <script src="js/jquery.js" type="text/javascript"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link href="Style.css" rel="stylesheet" type="text/css">
            <link href="css/bootstrap.css" rel="stylesheet" type="text/css">  
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script type="text/javascript src="></script>
            <script type="text/javascript" src="js/jquery.js"></script> 
            <script type="text/javascript" src="js/evento_personal.js"></script>
            <title>Agregar Ticket</title>
        </head>
        <body>
        <div class=" col-sm-12">
    <div class="offtset col-sm-10"></div>
      <img  src="logoestado.jpg" width="120" height="100" alt="Ningno">
    </div> 
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
                            <li class="active"><a href="Tickets.php">Agregar Ticket</a></li>
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
 
       
            <?php
            }else{
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
        <ul class="nav navbar-nav">
             <li><a href="principal.php">SEDESOL</a></li>
                <li class="active"><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
                
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

            <?php
            }
            ?>
            
  
            <div class="center">
                <div class="container">
                    <div class="espacio">
                        <form action="insertarTickets.php" method="POST" >

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">  
                                        <label for="presonal" >Nombre de quien reporta:</label>
                                        <select class='form-control' id="personal" name="personal">
                                            <option  value = ""  disabled  selected  style = " display : none ; " > Cargando Personal...</option> 
                                        </select> 
                                    </div>
                                    
                                    <div class="col-md-2">              
                                        <label for="fecha_captura">Fecha de Captura:</label>
                                        <input type="date" class="form-group" id="fecha_captura" name="fecha_captura"  required>
                                    </div>
                                           
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-4">
                                    <label for="mantenimiento[]"><b>Asistencia Técnica</b></label>        
                                    <label><b>Indique los problemas que presente el equipo:</b></label> 
                            </div>
                            <div class="col-md-4">
                                        <label for="mantenimiento[]"><b>Revisión / mantenimiento</b></label>  
                                        <label><b>Indique los dispositivos con:</b></label>
                            </div>
                            <div class="col-md-4">
                                        <label for="mantenimiento[]"><b>Instalar / Reinstalar Programas</b></label>
                                        <label><b>Seleccione los programas  a instalar:</b></label>
                            </div>
                            
                        </div>
                                <div class=" col-md-4">
                                  <input type="checkbox" name="mantenimiento[]" value="1">  No Prende              <br>
                                  <input type="checkbox" name="mantenimiento[]" value="2">  Se Reinicia            <br>
                                  <input type="checkbox" name="mantenimiento[]" value="3">  Malware (virus)        <br>
                                  <input type="checkbox" name="mantenimiento[]" value="4">  Configurar Correo      <br>  
                                  <input type="checkbox" name="mantenimiento[]" value="5">  Archivos Perdidos      <br>
                                  <input type="checkbox" name="mantenimiento[]" value="6">  Bloqueo/lentitud       <br>
                                  <input type="checkbox" name="mantenimiento[]" value="7">  Mensaje de Error       <br>
                                  <input type="checkbox" name="mantenimiento[]" value="8">  Conexión a la Red      <br>
                                  <input type="checkbox" name="mantenimiento[]" value="9">  Configurar Impresora   <br>
                                </div>
                                    
                               <div class=" col-md-4">
                                 <input type="checkbox" name="mantenimiento[]" value="10">  Impresora             <br>
                                 <input type="checkbox" name="mantenimiento[]" value="11">  Teclado/Ratón         <br>
                                 <input type="checkbox" name="mantenimiento[]" value="12">  Pantalla              <br>
                                 <input type="checkbox" name="mantenimiento[]" value="13">  Regulador             <br>   <input type="checkbox" name="mantenimiento[]" value="14">  Unidad CD/DVD         <br>
                                 <input type="checkbox" name="mantenimiento[]" value="15">  Puertos USB           <br>
                                 <input type="checkbox" name="mantenimiento[]" value="16">  Sonido                <br>
                                </div>                            
                                   
                                <div class=" col-md-4">
                                   <input type="checkbox" name="mantenimiento[]" value="17">  Formateo (Todo)       <br>
                                   <input type="checkbox" name="mantenimiento[]" value="18">  Antivirus             <br>
                                   <input type="checkbox" name="mantenimiento[]" value="19">  Paquete Office        <br>
                                   <input type="checkbox" name="mantenimiento[]" value="20">  Lector Archivos PDF   <br>
                                   <input type="checkbox" name="mantenimiento[]" value="21">  PhotoShop - Core      <br>
                                   <input type="checkbox" name="mantenimiento[]" value="22">  Quemador CD/DVD       <br>
                                   <input type="checkbox" name="mantenimiento[]" value="23">  Impresora             <br>
                                   <input type="checkbox" name="mantenimiento[]" value="24">  Reproductor DVD       <br>
                               </div>

                               
                            </div>
                        </div>
                     
                     
                      <div class="container">
                      <div class="form-group">
                      <div class="row">
                      <div class="col-xs-6 col-md-4"> 
                      <label for="noinventario" >Núm. Inventario:</label>
                    <input type="text"class="form-control" id="noinventario" placeholder="Introduzca el núm. de inventario" name="noinventario" required> 
                   </div>
                       </div>

                                    <div class="col-md-4"> 
                                        <label for="marca" >Marca:</label>
                                        <input type="text"   class="form-control" id="marca" placeholder="Introduzca marca" name="marca" required> 
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label for="ram" >RAM:</label>
                                        <input type="text"   class="form-control" id="ram" placeholder="Inroduzca cantidad de ram" name="ram" required> 
                                    </div>


                                    <div class="col-md-4">
                                        <label for="modelo" >Modelo:</label>
                                        <input type="text"   class="form-control" id="modelo"placeholder="Introduzca modelo" name="modelo" required> 
                                    </div>
                                    
                            
                            </div>
                            <div class="form-group">
                            <div class="row">
                          <div class="col-md-4">
                                        <label for="discoduro" >Disco Duro:</label>
                                        <input type="text"   class="form-control"  placeholder="Introduzca capacidad de disco duro" id="discoduro" name="discoduro" required > 
                                    </div>


                                    <div class="col-md-4">
                                        <label for="mac" >MAC:</label>
                                        <input type="text"   class="form-control" placeholder="Introduzca mac"id="mac" name="mac" required> 
                                    </div>

                                    <div class="col-xs-6 col-sm-3">  
                                        <label for="ip" >IP:</label>
                                        <input type="text"   class="form-control" placeholder="Introduzca ip"id="ip" name="ip" required> 
                                    </div>
                                
                            </div>
                            </div>
                        </div>
                    
               
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="so" >Sistemas Operativos:</label><br>
                                    <select name="so" id="so">
                                        <option  value = ""  disabled  selected  style = " display : none ; " >-- Eliga uno --</option> 
                                        <option value="1">windows XP</option>
                                        <option value="2">windows 7</option>
                                        <option value="3">windows 8</option>
                                        <option value="4">windows 8.1</option>
                                        <option value="5">windows 10</option>
                                        <option value="6">Distribuciones de Linux</option>
                                    </select>
                                </div>        
                            </div>    

                            <div class="row">
                                <div class="col-md-2"><br>
                                    <label for="tipo_de_equipo" >Tipo De Equipo:</label><br>
                                    <select name="tipo_de_equipo" id="tipo_de_equipo">
                                        <option  value = ""  disabled  selected  style = " display : none ; " >-- Eliga uno --</option> 
                                        <option value="1">LapTop</option>
                                        <option value="2">Escritorio</option>
                                        <option value="3">Impresora</option>
                                        <option value="4">Monitor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"><br>
                                    <label for="problema">Problema:</label>
                                    <textarea id="problema" name="problema" rows="7" placeholder="Describa el problema" cols="156"></textarea><br /><br>
                                </div>
                                <div class="col-sm-offset-5">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </div>       
                            </div>
                        </form>
                    </div>
                  </div>
               
        </body>

    </html>