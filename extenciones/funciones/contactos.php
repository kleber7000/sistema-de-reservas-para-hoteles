<?php

function contactos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($contactos = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $contactos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $contactos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$contactos[$campo]\">$contactos[$campo]</option> \n";
    }
}

function contactos_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM contactos order by apellidos, nombres  ", $conexion) or die("Error:" . mysql_error());
    while ($contactos = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $contactos[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $contactos[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$contactos[0]\">". strtoupper($contactos[apellidos]).", $contactos[nombres]</option>";
    }
}
