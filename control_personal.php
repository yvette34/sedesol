<?php
if (isset($_GET['op'])) {
    include "conexion.php";

    $opcion = $_GET['op'];
    $objControlador = new controlPersonal();
    $objControlador->control($opcion);
}


class controlPersonal {

	function __construct() {
        
    }

    function control($op) {
        switch ($op) {
            case 'cargarPersonal': $this->getPersonal();
                break;
        }
    }


        function getPersonal(){
        $sql = mysql_query("SELECT id_personal, nombre, apellido_p, apellido_m FROM personal;");
        
        
        //poner select en blanco
        $html = '';
        $html .='<option  value = ""  disabled  selected  style = " display : none ; " > Seleccionar Personal </option>';

        while ($row = mysql_fetch_array($sql)){
            $id = $row['id_personal'];
            $nombre = $row['nombre'];
            $ap_p = $row['apellido_p'];
            $ap_m = $row['apellido_m'];
            $html .= "<option value='" . $id . "'>" . utf8_encode($nombre." ". $ap_p." ".$ap_m) . "</option>";
        }
        echo $html;
    }


    }

?>