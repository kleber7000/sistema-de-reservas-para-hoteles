 <?php 
 $datos= [
            "tipos_contenido"=>[ "id"=>"$tipos_contenido_id",  
 "tipo"=>"$tipos_contenido_tipo",  
                ]
        ];  $html = str_replace('%tipos_contenido_id%',       $datos['tipos_contenido']['id'], $html); 
  $html = str_replace('%tipos_contenido_tipo%',       $datos['tipos_contenido']['tipo'], $html); 
