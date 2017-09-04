<?php

include "conexion.php";
include "validations.php";
session_start();

$nombre = validateText($_POST['nombre']);
$apellido_p= validateText($_POST['apellido_p']);
$apellido_m=validateText($_POST['apellido_m']);
$id_area=$_POST['area'];

$id_usuario = $_SESSION['id'];

$sql = "INSERT INTO personal (nombre,apellido_p,apellido_m,id_area)VALUES (
     '$nombre','$apellido_p','$apellido_m','$id_area')";
$result = mysql_query($sql, $conn) or die(mysql_error());
if (!$result) {
    die("<p>Fallo en la incercion de registro en la Base de datos;" . mysql_error() . "</p>");
} else {
    header("Location:Tickets.php");
    
}

//mysql_query($sql, $conn) or die('Error3. ' . mysql_error());
mysql_close();
?>
