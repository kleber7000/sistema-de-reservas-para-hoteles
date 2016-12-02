<?php /**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
function _idiomas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($_idiomas = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $_idiomas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_idiomas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_idiomas[$campo]\">$_idiomas[$campo]</option> \n";
    }
}

function _idiomas_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM _idiomas  ",$conexion) or die ("Error:".mysql_error());
while ($_idiomas = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$_idiomas[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$_idiomas[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$_idiomas[0]\">$_idiomas[0]</option>";
} 
}

/**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
