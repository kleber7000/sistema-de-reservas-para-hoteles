 <?php 
 $sql = "INSERT INTO contactos ( 
 id_manager  ,  sexo  ,  nombres  ,  apellidos  ,  cedula  ,  pais  ,  provincia  ,  ciudad  ,  direccion  ,  cpostal  ,  email  ,  facebook  ,  linkedin  ,  fecha_nacimiento  ,  fecha_registro  ,  foto  ,  estatus  ) VALUES ( 
 :id_manager  ,  :sexo  ,  :nombres  ,  :apellidos  ,  :cedula  ,  :pais  ,  :provincia  ,  :ciudad  ,  :direccion  ,  :cpostal  ,  :email  ,  :facebook  ,  :linkedin  ,  :fecha_nacimiento  ,  :fecha_registro  ,  :foto  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_manager"=>"$contactos_id_manager"  ,  ":sexo"=>"$contactos_sexo"  ,  ":nombres"=>"$contactos_nombres"  ,  ":apellidos"=>"$contactos_apellidos"  ,  ":cedula"=>"$contactos_cedula"  ,  ":pais"=>"$contactos_pais"  ,  ":provincia"=>"$contactos_provincia"  ,  ":ciudad"=>"$contactos_ciudad"  ,  ":direccion"=>"$contactos_direccion"  ,  ":cpostal"=>"$contactos_cpostal"  ,  ":email"=>"$contactos_email"  ,  ":facebook"=>"$contactos_facebook"  ,  ":linkedin"=>"$contactos_linkedin"  ,  ":fecha_nacimiento"=>"$contactos_fecha_nacimiento"  ,  ":fecha_registro"=>"$contactos_fecha_registro"  ,  ":foto"=>"$contactos_foto"  ,  ":estatus"=>"$contactos_estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
