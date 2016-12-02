<?php /**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
function _menu_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($_menu = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $_menu[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_menu[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_menu[$campo]\">$_menu[$campo]</option> \n";
    }
}

function _menu_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM _menu  ",$conexion) or die ("Error:".mysql_error());
while ($_menu = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$_menu[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$_menu[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$_menu[0]\">$_menu[0]</option>";
} 
}

/**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
