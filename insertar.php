    <?php
   
    $bd_host = "localhost";
$bd_user = "sistec";
$bd_password = "";
$bd_base = "sistec";

$conn = mysql_connect($bd_host, $bd_user, $bd_password);
mysql_select_db($bd_base, $conn);


$nombre = isset($nombre) ? $nombre = $POST['nombre'] : '';
//$nombre=$_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$habilitado = $_POST['habilitado'];


$sql = "INSERT INTO usuarios (nombre,apellido_p,apellido_m,usuario,contrasena,habilitado) VALUES (
     '$nombre','$apellido_p','$apellido_m','$usuario','$contrasena','$habilitado')";
$result = mysql_query($sql, $conn) or die(mysql_error());
if (!$result) {
    die("<p>Fallo en la incercion de registro en la Base de datos;" . mysql_error() . "</p>");
} else {
    echo "<script>
         alert('Datos guardados correctamente') 
         header(Location:validarUsuario.php);
         </script>
          ";
}

mysql_query($sql, $conn) or die('Error3. ' . mysql_error());
mysql_close();
?>   