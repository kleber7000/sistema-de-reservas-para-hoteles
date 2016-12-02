<?php /**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
function _traducciones_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($_traducciones = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $_traducciones[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_traducciones[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_traducciones[$campo]\">$_traducciones[$campo]</option> \n";
    }
}

function _traducciones_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM _traducciones  ",$conexion) or die ("Error:".mysql_error());
while ($_traducciones = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$_traducciones[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$_traducciones[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$_traducciones[0]\">$_traducciones[0]</option>";
} 
}

/**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
