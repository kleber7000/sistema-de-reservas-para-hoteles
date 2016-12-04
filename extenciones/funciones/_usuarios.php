<?php function _usuarios_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($_usuarios = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $_usuarios[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_usuarios[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_usuarios[$campo]\">$_usuarios[$campo]</option> \n";
    }
}

function _usuarios_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM _usuarios  ",$conexion) or die ("Error:".mysql_error());
while ($_usuarios = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$_usuarios[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$_usuarios[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$_usuarios[0]\">$_usuarios[0]</option>";
} 
}

