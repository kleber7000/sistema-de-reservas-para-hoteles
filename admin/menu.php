<?php
function _menu_top(){
    global $conexion;
    $sql = mysql_query(
            "SELECT distinct(padre) FROM _menu WHERE ubicacion = 'top'  ", $conexion) or die("Error:" . mysql_error());
        
    while ($reg = mysql_fetch_array($sql)) {
        echo '<li class="dropdown">
          <a href="#" 
          class="dropdown-toggle" 
          data-toggle="dropdown" 
          role="button" 
          aria-haspopup="true" 
          aria-expanded="false">
          '.  ucfirst($reg['padre']).' 
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            '; 
            
             _menu_items_segun_padre_ubicacion($reg['padre'], 'top');
        
            echo '<li role="separator" class="divider"></li>            
            
            
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>'; 
    }        
}
function _menu_items_segun_padre_ubicacion($padre, $ubicacion){
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _menu WHERE padre = '$padre' AND ubicacion = '$ubicacion'  ORDER BY orden  ", $conexion) or die("Error:" . mysql_error());
        
    while ($reg = mysql_fetch_array($sql)) {
        $icono = (!$reg['icono'])? "folder-close":"$reg[icono]";
        
        echo '
            <li><a href="'.$reg['url'].'"> <span class="glyphicon glyphicon-'.$icono.'" aria-hidden="true"></span> '.  ucfirst($reg['label']).'</a></li>
          
        '; 
    }
    
    
}

//------------------------------------------------------
function _menu_sidebar($p){
    global $conexion;
    $sql = mysql_query(
            "SELECT distinct(padre), label, url, icono  FROM _menu WHERE ubicacion = 'sidebar' ORDER BY orden ", $conexion) or die("Error:" . mysql_error());
        
    while ($reg = mysql_fetch_array($sql)) {
        
        $icono = (!$reg['icono'])? "folder-close":"$reg[icono]";
        
        
        echo '<li';
        if ($p == $reg['label']) { echo " class=\"active\" "; } 
        echo '>
                    <a href="'.$reg['url'].'">
                        <span class="glyphicon glyphicon-'.$icono.'"></span> 
                '.  ucfirst($reg['label']).'
                    </a>
                </li>'; 
    }        
}


function _menu_icono_segun_pagina($label){
    global $conexion;
    $sql = mysql_query(
            "SELECT icono  FROM _menu WHERE label = '$label'  ", $conexion) or die("Error:" . mysql_error());
        
    $reg = mysql_fetch_array($sql);
                
        return $reg[0];
    
}
