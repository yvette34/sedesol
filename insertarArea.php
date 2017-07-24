<?php
include "conexion.php";
session_start();

$nombre_area = $_POST['nombre_area'];
$piso =$_POST['piso'];
$ext=$_POST['ext'];

$id_usuario = $_SESSION['id'];

$sql = "INSERT INTO areas (nombre_area,piso,ext) VALUES (
     '$nombre_area','$piso','$ext')";
$result = mysql_query($sql, $conn) or die(mysql_error());
if (!$result) {
    die("<p>Fallo en la incercion de registro en la Base de datos;" . mysql_error() . "</p>");
} else {
    header("Location:Personal.php");
    
}

//mysql_query($sql, $conn) or die('Error3. ' . mysql_error());
mysql_close();
?>
