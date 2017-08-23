<?php
if (isset($_GET['op'])) {
    include "conexion.php";

    $opcion = $_GET['op'];
    $objControlador = new controlAreas();
    $objControlador->control($opcion);
}


class controlAreas {

	function __construct() {
        
    }

    function control($op) {
        switch ($op) {
            case 'cargarAreas': $this->getArea();
                break;
        }
    }


        function getArea(){
        $sql = mysql_query("SELECT id_area, nombre_area FROM areas;");
        
        
        //poner select en blanco
        $html = '';
        $html .='<option  value = ""  disabled  selected  style = " display : none ; " > Seleccionar Área</option>';

        while ($row = mysql_fetch_array($sql)){
            $id = $row['id_area'];
            $nombre_area = $row['nombre_area'];
            $html .= "<option value='" . $id . "'>" . utf8_encode($nombre_area) . "</option>";
        }
        echo $html;
    }


    }

?>