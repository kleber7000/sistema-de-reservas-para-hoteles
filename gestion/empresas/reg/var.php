 <?php 
 $datos= [
            "empresas"=>[ "id"=>"$empresas_id",  
 "id_propietario"=>"$empresas_id_propietario",  
 "sitio_web"=>"$empresas_sitio_web",  
 "nombre"=>"$empresas_nombre",  
 "tipo"=>"$empresas_tipo",  
 "sector_actividad"=>"$empresas_sector_actividad",  
 "pais"=>"$empresas_pais",  
 "provincia"=>"$empresas_provincia",  
 "ciudad"=>"$empresas_ciudad",  
 "cpostal"=>"$empresas_cpostal",  
 "direccion"=>"$empresas_direccion",  
 "tel"=>"$empresas_tel",  
 "fax"=>"$empresas_fax",  
 "email"=>"$empresas_email",  
 "twitter"=>"$empresas_twitter",  
 "google_plus"=>"$empresas_google_plus",  
 "facebook"=>"$empresas_facebook",  
 "linkedin"=>"$empresas_linkedin",  
 "empresa_contacto"=>"$empresas_empresa_contacto",  
 "empresa_contacto_email"=>"$empresas_empresa_contacto_email",  
 "estatus"=>"$empresas_estatus",  
                ]
        ];  $html = str_replace('%empresas_id%',       $datos['empresas']['id'], $html); 
  $html = str_replace('%empresas_id_propietario%',       $datos['empresas']['id_propietario'], $html); 
  $html = str_replace('%empresas_sitio_web%',       $datos['empresas']['sitio_web'], $html); 
  $html = str_replace('%empresas_nombre%',       $datos['empresas']['nombre'], $html); 
  $html = str_replace('%empresas_tipo%',       $datos['empresas']['tipo'], $html); 
  $html = str_replace('%empresas_sector_actividad%',       $datos['empresas']['sector_actividad'], $html); 
  $html = str_replace('%empresas_pais%',       $datos['empresas']['pais'], $html); 
  $html = str_replace('%empresas_provincia%',       $datos['empresas']['provincia'], $html); 
  $html = str_replace('%empresas_ciudad%',       $datos['empresas']['ciudad'], $html); 
  $html = str_replace('%empresas_cpostal%',       $datos['empresas']['cpostal'], $html); 
  $html = str_replace('%empresas_direccion%',       $datos['empresas']['direccion'], $html); 
  $html = str_replace('%empresas_tel%',       $datos['empresas']['tel'], $html); 
  $html = str_replace('%empresas_fax%',       $datos['empresas']['fax'], $html); 
  $html = str_replace('%empresas_email%',       $datos['empresas']['email'], $html); 
  $html = str_replace('%empresas_twitter%',       $datos['empresas']['twitter'], $html); 
  $html = str_replace('%empresas_google_plus%',       $datos['empresas']['google_plus'], $html); 
  $html = str_replace('%empresas_facebook%',       $datos['empresas']['facebook'], $html); 
  $html = str_replace('%empresas_linkedin%',       $datos['empresas']['linkedin'], $html); 
  $html = str_replace('%empresas_empresa_contacto%',       $datos['empresas']['empresa_contacto'], $html); 
  $html = str_replace('%empresas_empresa_contacto_email%',       $datos['empresas']['empresa_contacto_email'], $html); 
  $html = str_replace('%empresas_estatus%',       $datos['empresas']['estatus'], $html); 
