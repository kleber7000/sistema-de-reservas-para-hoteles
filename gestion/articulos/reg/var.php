 <?php 
 $datos= [
            "articulos"=>[ "id"=>"$articulos_id",  
 "id_tipo"=>"$articulos_id_tipo",  
 "titulo"=>"$articulos_titulo",  
 "contenido"=>"$articulos_contenido",  
 "fecha_registro"=>"$articulos_fecha_registro",  
 "estatus"=>"$articulos_estatus",  
                ]
        ];  $html = str_replace('%articulos_id%',       $datos['articulos']['id'], $html); 
  $html = str_replace('%articulos_id_tipo%',       $datos['articulos']['id_tipo'], $html); 
  $html = str_replace('%articulos_titulo%',       $datos['articulos']['titulo'], $html); 
  $html = str_replace('%articulos_contenido%',       $datos['articulos']['contenido'], $html); 
  $html = str_replace('%articulos_fecha_registro%',       $datos['articulos']['fecha_registro'], $html); 
  $html = str_replace('%articulos_estatus%',       $datos['articulos']['estatus'], $html); 
