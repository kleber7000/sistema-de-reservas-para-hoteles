 <?php 
 $datos= [
            "_idiomas"=>[ "id"=>"$_idiomas_id",  
 "idioma"=>"$_idiomas_idioma",  
 "nombre"=>"$_idiomas_nombre",  
                ]
        ];  $html = str_replace('%_idiomas_id%',       $datos['_idiomas']['id'], $html); 
  $html = str_replace('%_idiomas_idioma%',       $datos['_idiomas']['idioma'], $html); 
  $html = str_replace('%_idiomas_nombre%',       $datos['_idiomas']['nombre'], $html); 
