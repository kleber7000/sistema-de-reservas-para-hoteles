 <?php 
 $datos= [
            "casas"=>[ "id"=>"$casas_id",  
 "id_empresa"=>"$casas_id_empresa",  
 "casa"=>"$casas_casa",  
 "capacidad"=>"$casas_capacidad",  
 "estatus"=>"$casas_estatus",  
                ]
        ];  $html = str_replace('%casas_id%',       $datos['casas']['id'], $html); 
  $html = str_replace('%casas_id_empresa%',       $datos['casas']['id_empresa'], $html); 
  $html = str_replace('%casas_casa%',       $datos['casas']['casa'], $html); 
  $html = str_replace('%casas_capacidad%',       $datos['casas']['capacidad'], $html); 
  $html = str_replace('%casas_estatus%',       $datos['casas']['estatus'], $html); 
