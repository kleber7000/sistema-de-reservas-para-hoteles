 <?php 
 $datos= [
            "_usuarios"=>[ "id"=>"$_usuarios_id",  
 "grupo"=>"$_usuarios_grupo",  
 "nombres"=>"$_usuarios_nombres",  
 "usuario"=>"$_usuarios_usuario",  
 "clave"=>"$_usuarios_clave",  
 "estatus"=>"$_usuarios_estatus",  
                ]
        ];  $html = str_replace('%_usuarios_id%',       $datos['_usuarios']['id'], $html); 
  $html = str_replace('%_usuarios_grupo%',       $datos['_usuarios']['grupo'], $html); 
  $html = str_replace('%_usuarios_nombres%',       $datos['_usuarios']['nombres'], $html); 
  $html = str_replace('%_usuarios_usuario%',       $datos['_usuarios']['usuario'], $html); 
  $html = str_replace('%_usuarios_clave%',       $datos['_usuarios']['clave'], $html); 
  $html = str_replace('%_usuarios_estatus%',       $datos['_usuarios']['estatus'], $html); 
