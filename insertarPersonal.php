<?php

include "conexion.php";
session_start();

$nombre = $_POST['nombre'];
$apellido_p=$_POST['apellido_p'];
$apellido_m=$_POST['apellido_m'];
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
<?php
if (isset($_GET['op'])) {
    include "conexion.php";

    $opcion = $_GET['op'];
    $objControlador = new Controlpersonal();
    $objControlador->control($opcion);
}


class Controlpersonal {

	function __construct() {
        
    }

    function control($op) {
        switch ($op) {
            case 'cargarMunicipios': $this->getMunicipio();
                break;
        }
    }


        function getMunicipio(){
        $pdo = Conex::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT  FROM municipios;";
        $q = $pdo->prepare($sql);
        $q->execute();
        
        $result = $q->fetchAll();
        //$total = count($result);
        //echo $total;
        
        
        //poner select en blanco
        $html = '';
        $html .='<option  value = ""  disabled  selected  style = " display : none ; " > Selecciona Municipio</option>';

        foreach($result as $row){
            $id = $row['id'];
            $nom_mun = $row['nom_mun'];
            $html .= "<option value='" . $id . "'>" . utf8_encode($nom_mun) . "</option>";
        }
        echo $html;
    }


    }

?>