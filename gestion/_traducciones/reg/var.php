 <?php 
 $datos= [
            "_traducciones"=>[ "id"=>"$_traducciones_id",  
 "contenido_id"=>"$_traducciones_contenido_id",  
 "idioma"=>"$_traducciones_idioma",  
 "traduccion"=>"$_traducciones_traduccion",  
                ]
        ];  $html = str_replace('%_traducciones_id%',       $datos['_traducciones']['id'], $html); 
  $html = str_replace('%_traducciones_contenido_id%',       $datos['_traducciones']['contenido_id'], $html); 
  $html = str_replace('%_traducciones_idioma%',       $datos['_traducciones']['idioma'], $html); 
  $html = str_replace('%_traducciones_traduccion%',       $datos['_traducciones']['traduccion'], $html); 
