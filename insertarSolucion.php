<?php

include "conexion.php";
session_start();

$Diagnostico = $_POST['Diagnostico'];
$solucion = $_POST['solucion'];


$id_usuario = $_SESSION['id'];

$sql = "INSERT INTO ticket (Diagnostico,solucion) VALUES (
     '$Diagnostico','$solucion')";
$result = mysql_query($sql, $conn) or die(mysql_error());
if (!$result) {
    die("<p>Fallo en la incercion de registro en la Base de datos;" . mysql_error() . "</p>");
} else {
    echo "<script>
         alert('Datos guardados correctamente') 
         header(Location:Solucion.php);
         </script>
          ";
}

mysql_query($sql, $conn) or die('Error3. ' . mysql_error());
mysql_close();
?>