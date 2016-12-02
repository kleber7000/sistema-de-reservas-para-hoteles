<?php /**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
function _permisos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($_permisos = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $_permisos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_permisos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_permisos[$campo]\">$_permisos[$campo]</option> \n";
    }
}

function _permisos_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM _permisos  ",$conexion) or die ("Error:".mysql_error());
while ($_permisos = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$_permisos[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$_permisos[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$_permisos[0]\">$_permisos[0]</option>";
} 
}

/**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
