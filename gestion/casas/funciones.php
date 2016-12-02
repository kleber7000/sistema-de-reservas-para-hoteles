<?php /**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
function casas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($casas = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $casas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $casas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$casas[$campo]\">$casas[$campo]</option> \n";
    }
}

function casas_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM casas  ",$conexion) or die ("Error:".mysql_error());
while ($casas = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$casas[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$casas[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$casas[0]\">$casas[0]</option>";
} 
}

/**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
