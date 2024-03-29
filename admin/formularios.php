<?php
function formularios_campo_escondido($nombre,$valor){    
    echo '<input type="hidden" name="'.$nombre.'" value="'.$valor.'">'; 
}


function formularios_campo($tipo, $nombre, $id, $valor="", $clase="", $placeholder="", $desactivado=FALSE){    
    
    
    switch ($tipo) {
        case 'text':
        case 'texto':
            formularios_campo_texto($nombre, $id, $valor, $clase, $placeholder,$desactivado);
            break;
        case 'date':
        case 'fecha':
            formularios_campo_texto($nombre, $id, $valor, $clase, $placeholder,$desactivado);
            break;
        case 'textarea':
        case 'areadetexto':
        case 'areaDeTexto':        
            formularios_campo_areaDeTexto($nombre, $id, $valor, $clase, $placeholder,$desactivado);
            break;
        case 'opciones':     
            formularios_opciones($nombre, $id, $valor, $clase, $placeholder,$desactivado);
            break;
        case 'buleano':     
            formularios_opciones($nombre, $id, $valor, $clase, $placeholder,$desactivado);
            break;

        default:
            break;
    }
}

function formularios_campo_texto( $nombre, $id, $valor="", $clase="", $placeholder="", $desactivado=false)  {    
    
    $desactivado    = ($desactivado=='si')? " disabled " : "";
    $clase          = ($clase)? " form-control " : "";
    
    echo "<input 
            type=\"text\" 
            class=\"$clase\" 
            name=\"$nombre\" 
            id=\"$nombre\" 
            placeholder=\"$placeholder\" 
            value=\"$valor\" $desactivado > ";
}
function formularios_campo_areaDeTexto( $nombre, $id, $valor="", $clase="", $placeholder="", $desactivado=false)  {    
    
    $desactivado    = ($desactivado=='si')? " disabled " : "";
    $clase          = ($clase)? " form-control " : "";
    
    echo "<textarea             
            class=\"$clase\" 
            name=\"$nombre\" 
            id=\"$nombre\" 
            placeholder=\"$placeholder\" $desactivado>$valor</textarea> ";
}



function formularios_opciones( $nombre, $id, $valor="", $clase="form-control", $placeholder="", $desactivado=false) {

    $i = 0;
    echo "<select class=\"$clase\">";
    while ($i < count($valor)) {

        echo "<option ";
        if ($selecionado == $valor[$i]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $valor[$i]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$valor[$i]\">$valor[$i]</option>";
        $i++;
    }
    echo "</select>"; 
}

function _formulario_radio($tabla, $campo, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla  ", $conexion) or die("Error:" . mysql_error());
    while ($reg = mysql_fetch_array($sql)) {

        echo "<input ";
        if ($selecionado == $reg[0]) {
            echo " checked ";
        } else {
            echo "";
        }
        if ($excluir == $reg[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "type=\"radio\" name=\"$campo\" id=\"$reg[0]\" value=\"$reg[0]\" ><label for=\"$reg[0]\">$reg[0]</label> \n";
    }
}

function _formulario_checkbox($tabla, $campo, $selecionar = "", $desactivar = "",$excluir="") {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla  ", $conexion) or die("Error:" . mysql_error());
    while ($reg = mysql_fetch_array($sql)) {

        $seleccionado   =  ($selecionar == $reg[0]) ? " checked " : "" ;
        $excluido       =  ($excluir == $reg[0]) ? true : false ;
        $desactivado    =  ($desactivar == $reg[0]) ? " disabled " : "" ;
        
        if(!$excluido){
        echo "<input "
        . "$seleccionado "
                . "$excluido "
                . "$desactivado "
                . "type=\"checkbox\" "
                . "name=\"$reg[0]\" "
                . "id=\"$reg[0]\" "
                . "value=\"$reg[0]\" >"
                . "<label for=\"$reg[0]\">$reg[0]</label>\n ";
        }
    }
}


