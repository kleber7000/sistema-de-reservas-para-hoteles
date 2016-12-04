<?php function articulos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($articulos = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $articulos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $articulos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$articulos[$campo]\">$articulos[$campo]</option> \n";
    }
}

function articulos_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM articulos  ",$conexion) or die ("Error:".mysql_error());
while ($articulos = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$articulos[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$articulos[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$articulos[0]\">$articulos[0]</option>";
} 
}

