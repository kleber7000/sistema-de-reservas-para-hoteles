<?php /**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
function _paginas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($_paginas = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $_paginas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_paginas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_paginas[$campo]\">$_paginas[$campo]</option> \n";
    }
}

function _paginas_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM _paginas  ",$conexion) or die ("Error:".mysql_error());
while ($_paginas = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$_paginas[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$_paginas[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$_paginas[0]\">$_paginas[0]</option>";
} 
}

/**
 * si deseas agregar alguna funcion haslo en las extenciones
 */
