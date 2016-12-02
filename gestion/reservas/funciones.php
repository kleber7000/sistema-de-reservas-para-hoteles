<?php /**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
function reservas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($reservas = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $reservas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $reservas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$reservas[$campo]\">$reservas[$campo]</option> \n";
    }
}

function reservas_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM reservas  ",$conexion) or die ("Error:".mysql_error());
while ($reservas = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$reservas[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$reservas[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$reservas[0]\">$reservas[0]</option>";
} 
}

/**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
