<?php function tipos_contenido_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($tipos_contenido = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $tipos_contenido[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $tipos_contenido[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$tipos_contenido[$campo]\">$tipos_contenido[$campo]</option> \n";
    }
}

function tipos_contenido_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM tipos_contenido  ",$conexion) or die ("Error:".mysql_error());
while ($tipos_contenido = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$tipos_contenido[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$tipos_contenido[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$tipos_contenido[0]\">$tipos_contenido[tipo]</option>";
} 
}

