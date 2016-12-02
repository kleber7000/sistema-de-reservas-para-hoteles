 <?php 
 $sql = "INSERT INTO empresas ( 
 id_propietario  ,  sitio_web  ,  nombre  ,  tipo  ,  sector_actividad  ,  pais  ,  provincia  ,  ciudad  ,  cpostal  ,  direccion  ,  tel  ,  fax  ,  email  ,  twitter  ,  google_plus  ,  facebook  ,  linkedin  ,  empresa_contacto  ,  empresa_contacto_email  ,  estatus  ) VALUES ( 
 :id_propietario  ,  :sitio_web  ,  :nombre  ,  :tipo  ,  :sector_actividad  ,  :pais  ,  :provincia  ,  :ciudad  ,  :cpostal  ,  :direccion  ,  :tel  ,  :fax  ,  :email  ,  :twitter  ,  :google_plus  ,  :facebook  ,  :linkedin  ,  :empresa_contacto  ,  :empresa_contacto_email  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_propietario"=>"$empresas_id_propietario"  ,  ":sitio_web"=>"$empresas_sitio_web"  ,  ":nombre"=>"$empresas_nombre"  ,  ":tipo"=>"$empresas_tipo"  ,  ":sector_actividad"=>"$empresas_sector_actividad"  ,  ":pais"=>"$empresas_pais"  ,  ":provincia"=>"$empresas_provincia"  ,  ":ciudad"=>"$empresas_ciudad"  ,  ":cpostal"=>"$empresas_cpostal"  ,  ":direccion"=>"$empresas_direccion"  ,  ":tel"=>"$empresas_tel"  ,  ":fax"=>"$empresas_fax"  ,  ":email"=>"$empresas_email"  ,  ":twitter"=>"$empresas_twitter"  ,  ":google_plus"=>"$empresas_google_plus"  ,  ":facebook"=>"$empresas_facebook"  ,  ":linkedin"=>"$empresas_linkedin"  ,  ":empresa_contacto"=>"$empresas_empresa_contacto"  ,  ":empresa_contacto_email"=>"$empresas_empresa_contacto_email"  ,  ":estatus"=>"$empresas_estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
