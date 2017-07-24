<?php 
    include_once('session.php');
?>
<!DOCTYPE HTML>
    <html>
        <head>
            <meta name="viewport" content="initial-scale=1.0">
            <script src="js/jquery.js" type="text/javascript"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link href="Style.css" rel="stylesheet" type="text/css">
            <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/jquery-confirm.css">
            <script type="text/javascript" src="js/jquery-confirm.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/jquery.js"></script>
            
            <script type="text/javascript" src="js/evento_personal.js"></script>
            <title>Agregar Ticket</title>
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
                                
                                <li><a href="principal.php">SEDESOL</a></li>       
                                <li class="active"><a href="Tickets.php">Agregar Nuevo Ticket</a></li> 
                                <li><a href="Personal.php">Personal</a></li>       
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
            
            <?php
            }else{
            ?>
                       <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <div clas="col-sm-12">
        <ul class="nav navbar-nav">

                 <?php
                echo $_SESSION['nombre'];
                ?>

             <li><a href="principal.php">SEDESOL</a></li>
                <li class="active"><a href="Tickets.php">Agregar Nuevo Ticket</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
        </div>
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
                                        <label for="folio">Folio:</label>
                                        <br>
                                       <!-- <label for="folio" class="folio">1234</label>-->
                                       <input type="number" class="form-control" id="folio" name="folio" placeholder="Núm. folio" required> 
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
                                    <label for="mantenimiento"><b>Asistencia Técnica</b></label>        
                                    <label><b>Indique los problemas que presente el equipo:</b></label> 
                            </div>
                            <div class="col-md-4">
                                        <label for="mantenimiento"><b>Revisión / Mantenimiento</b></label>  
                                        <label><b>Indique los dispositivos con:</b></label>
                            </div>
                            <div class="col-md-4">
                                        <label for="mantenimiento"><b>Instalar / Reinstalar Programas</b></label>
                                        <label><b>Seleccione los programas  a instalar:</b></label>
                            </div>
                            
                                    <div class="col-md-4">
                                          <input type="checkbox" name="mantenimiento" value="1"> No Prende <br>
                                          <input type="checkbox" name="mantenimiento" value="2" checked> Se Reinicia<br>
                                          <input type="checkbox" name="mantenimiento" value="3" checked> Configurar Correo<br>
                                          <input type="checkbox" name="mantenimiento" value="4" checked> Archivos Perdidos<br>
                                          <input type="checkbox" name="mantenimiento" value="5" checked> 
                                          Bloqueo / Lentitud<br>
                                          <input type="checkbox" name="mantenimiento" value="6" checked> Mensaje de Error    <br>
                                          <input type="checkbox" name="mantenimiento" value="7" checked> Configurar Impresora<br>
                                          
                                    <div class="col-md-4">
                                        <input type="checkbox" name="mantenimiento" value="8">           Impresora       <br>
                                        <input type="checkbox" name="mantenimiento" value="9" checked>   Teclado / Ratón <br>
                                        <input type="checkbox" name="mantenimiento" value="10" checked>  Pantalla        <br>
                                        <input type="checkbox" name="mantenimiento" value="11" checked>  Regulador       <br>
                                        <input type="checkbox" name="mantenimiento" value="12" checked>  Unidad CD/DVD   <br>
                                         <input type="checkbox" name="mantenimiento" value="13" checked> Puerto USB      <br>
                                         <input type="checkbox" name="mantenimiento" value="14" checked>Sonido           <br>
                                       
                                    </div>
                                    <div class="col-md-4">
                                         <input type="checkbox" name="mantenimiento" value="8"> Impresora 
                                         <input type="checkbox" name="mantenimiento" value="9" checked> Teclado / Ratón  <br>
                                         <input type="checkbox" name="mantenimiento" value="10" checked> Pantalla        <br>
                                         <input type="checkbox" name="mantenimiento" value="11" checked> Regulador       <br>
                                          <input type="checkbox" name="mantenimiento" value="12" checked> Unidad CD/DVD  <br>
                                          <input type="checkbox" name="mantenimiento" value="13" checked> Puerto USB 
                                          <input type="checkbox" name="mantenimiento" value="14" checked> Sonido 
                                    </div>
                                </div>
                            </div>
                            </div>
                           
                            <div class="form-group">
                            <div class="row">
                                
                                    <div class="col-md-3">  
                                        <label for="noinventario" >Núm. de Inventario:</label>
                                        <input type="text"   class="form-control" id="noinventario" placeholder="Intruduzca el núm. de inventario" name="noinventario" required> 
                                    </div>

                                    <div class="col-md-3">  
                                        <label for="marca" >Marca:</label>
                                        <input type="text"   class="form-control" id="marca" placeholder="Introduzca marca" name="marca" required> 
                                    </div>
                                    
                                    <div class="col-md-3">  
                                        <label for="ram" >RAM:</label>
                                        <input type="text"   class="form-control" id="ram" placeholder="Inroduzca cantidad de ram" name="ram" required> 
                                    </div>


                                    <div class="col-md-3">  
                                        <label for="modelo" >Modelo:</label>
                                        <input type="text"   class="form-control" id="modelo"placeholder="Introduzca modelo" name="modelo" required> 
                                    </div>
                                    
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="row">

                                    <div class="col-md-3">  
                                        <label for="discoduro" >Disco Duro:</label>
                                        <input type="text"   class="form-control"  placeholder="Introduzca cantidad de disco duro" id="discoduro" name="discoduro" required> 
                                    </div>


                                    <div class="col-md-3">  
                                        <label for="mac" >MAC:</label>
                                        <input type="text"   class="form-control" placeholder="Introduzca mac"id="mac" name="mac" required> 
                                    </div>

                                    <div class="col-xs-6 col-sm-3">  
                                        <label for="ip" >IP:</label>
                                        <input type="text"   class="form-control" placeholder="Introduzca ip"id="ip" name="ip" required> 
                                    </div>
                                
                            </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="so" >Sistemas Operativos:</label><br>
                                    <select name="so" id="so">
                                        <option  value = ""  disabled  selected  style = " display : none ; " >-- Eliga una --</option> 
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
                                        <option  value = ""  disabled  selected  style = " display : none ; " >-- Eliga una --</option> 
                                        <option value="1">LapTop</option>
                                        <option value="2">Escritorio</option>
                                        <option value="3">Impresora</option>
                                        <option value="4">Monitor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"><br>
                                    <label for="problema">Problema:</label><br /><br>
                                    <textarea id="problema" name="problema" rows="7" placeholder="Describa el problema" cols="30"></textarea><br /><br>
                                </div>
                                <div class="col-sm-offset-5">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </div>       

                        </form>
                    </div>
                </div>
            </div>
        </body>

    </html>