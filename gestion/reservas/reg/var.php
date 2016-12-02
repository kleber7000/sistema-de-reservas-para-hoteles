 <?php 
 $datos= [
            "reservas"=>[ "id"=>"$reservas_id",  
 "id_casa"=>"$reservas_id_casa",  
 "id_contacto"=>"$reservas_id_contacto",  
 "fecha_inicio"=>"$reservas_fecha_inicio",  
 "fecha_fin"=>"$reservas_fecha_fin",  
 "pax"=>"$reservas_pax",  
 "estatus"=>"$reservas_estatus",  
                ]
        ];  $html = str_replace('%reservas_id%',       $datos['reservas']['id'], $html); 
  $html = str_replace('%reservas_id_casa%',       $datos['reservas']['id_casa'], $html); 
  $html = str_replace('%reservas_id_contacto%',       $datos['reservas']['id_contacto'], $html); 
  $html = str_replace('%reservas_fecha_inicio%',       $datos['reservas']['fecha_inicio'], $html); 
  $html = str_replace('%reservas_fecha_fin%',       $datos['reservas']['fecha_fin'], $html); 
  $html = str_replace('%reservas_pax%',       $datos['reservas']['pax'], $html); 
  $html = str_replace('%reservas_estatus%',       $datos['reservas']['estatus'], $html); 
