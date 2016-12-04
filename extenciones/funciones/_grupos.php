<?php function _grupos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($_grupos = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $_grupos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_grupos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_grupos[$campo]\">$_grupos[$campo]</option> \n";
    }
}

function _grupos_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM _grupos  ",$conexion) or die ("Error:".mysql_error());
while ($_grupos = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$_grupos[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$_grupos[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$_grupos[0]\">$_grupos[0]</option>";
} 
}

