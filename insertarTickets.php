<?php

include "conexion.php";
session_start();

$mantenimiento = $_POST['mantenimiento'];
$mantenimientoSerialize = serialize($mantenimiento);
//$folio = $_POST['folio'];
$fecha_captura = $_POST['fecha_captura'];
$problema = $_POST['problema'];
$id_personal = $_POST['personal'];
$tipo_de_equipo = $_POST['tipo_de_equipo'];
$marca=validateNumber($_POST['marca']);
$modelo=validateText($_POST['modelo']);
$ram=$_POST['ram'];
$discoduro=$_POST['discoduro'];
$mac=$_POST['mac'];
$ip=$_POST['ip'];
$no_inventario=validateNumber($_POST['noinventario']);
$so=$_POST['so'];
$id_usuario = $_SESSION['id'];

$sql = "INSERT INTO ticket (fecha_captura,problema,mantenimiento,id_personal,id_usuario,tipo_de_equipo,marca,modelo,ram,discoduro,ip,no_inventario,so) VALUES (
     '$fecha_captura','$problema','$mantenimientoSerialize','$id_personal','$id_usuario','$tipo_de_equipo','$mac','$modelo','$ram','$discoduro','$ip','$no_inventario','$so')";
 $result = mysql_query($sql, $conn) or die(mysql_error());
if (!$result) {
    die("<p>Fallo en la incercion de registro en la Base de datos;" . mysql_error() . "</p>");
} else {
    echo "<SCRIPT TYPE='text/javascript'> alert(\"Datos Guardados\"); 
            window.location='Tickets.php'</SCRIPT>";

            
}
mysql_close();
?>