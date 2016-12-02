<?php /**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
function _contenido_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($_contenido = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $_contenido[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_contenido[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_contenido[$campo]\">$_contenido[$campo]</option> \n";
    }
}

function _contenido_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM _contenido  ",$conexion) or die ("Error:".mysql_error());
while ($_contenido = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$_contenido[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$_contenido[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$_contenido[0]\">$_contenido[0]</option>";
} 
}

/**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
