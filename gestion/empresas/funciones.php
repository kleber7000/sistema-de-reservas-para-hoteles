<?php /**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
function empresas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($empresas = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $empresas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $empresas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$empresas[$campo]\">$empresas[$campo]</option> \n";
    }
}

function empresas_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM empresas  ",$conexion) or die ("Error:".mysql_error());
while ($empresas = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$empresas[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$empresas[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$empresas[0]\">$empresas[0]</option>";
} 
}

/**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
