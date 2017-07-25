<?php
include "conexion.php";
session_start();

$folio = isset($_POST['folio'])? $_POST['folio']:'';
$Diagnostico = $_POST['Diagnostico'];
$solucion = $_POST['solucion'];


$fecha_solucion=  date("Y-m-d");
        
$sql = "UPDATE ticket
SET Diagnostico = '$Diagnostico', Solucion = '$solucion',fecha_solucion = '$fecha_solucion',estado='cerrado'
WHERE folio='$folio'";
$result = mysql_query($sql, $conn) or die(mysql_error());
if (!$result) {
    die("<p>Fallo en la incercion de registro en la Base de datos;" . mysql_error() . "</p>");
} else {
    echo "<SCRIPT TYPE='text/javascript'> alert(\"Datos Guardados\"); 
            window.location='Tickets_Abiertos.php'</SCRIPT>";
}

mysql_close();
?>

