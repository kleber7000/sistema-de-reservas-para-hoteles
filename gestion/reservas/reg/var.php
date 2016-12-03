 <?php 
 $datos= [
            "reservas"=>[ "id"=>"$reservas_id",  
 "id_casa"=>"$reservas_id_casa",  
 "id_contacto"=>"$reservas_id_contacto",  
 "fecha_entrada"=>"$reservas_fecha_entrada",  
 "fecha_salida"=>"$reservas_fecha_salida",  
 "pax"=>"$reservas_pax",  
 "precio_noche_persona"=>"$reservas_precio_noche_persona",  
 "notas"=>"$reservas_notas",  
 "estatus"=>"$reservas_estatus",  
                ]
        ];  $html = str_replace('%reservas_id%',       $datos['reservas']['id'], $html); 
  $html = str_replace('%reservas_id_casa%',       $datos['reservas']['id_casa'], $html); 
  $html = str_replace('%reservas_id_contacto%',       $datos['reservas']['id_contacto'], $html); 
  $html = str_replace('%reservas_fecha_entrada%',       $datos['reservas']['fecha_entrada'], $html); 
  $html = str_replace('%reservas_fecha_salida%',       $datos['reservas']['fecha_salida'], $html); 
  $html = str_replace('%reservas_pax%',       $datos['reservas']['pax'], $html); 
  $html = str_replace('%reservas_precio_noche_persona%',       $datos['reservas']['precio_noche_persona'], $html); 
  $html = str_replace('%reservas_notas%',       $datos['reservas']['notas'], $html); 
  $html = str_replace('%reservas_estatus%',       $datos['reservas']['estatus'], $html); 
