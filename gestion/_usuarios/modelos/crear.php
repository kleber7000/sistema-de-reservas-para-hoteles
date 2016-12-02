 <?php 
 $sql = "INSERT INTO _usuarios ( 
 grupo  ,  nombres  ,  usuario  ,  clave  ,  estatus  ) VALUES ( 
 :grupo  ,  :nombres  ,  :usuario  ,  :clave  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":grupo"=>"$_usuarios_grupo"  ,  ":nombres"=>"$_usuarios_nombres"  ,  ":usuario"=>"$_usuarios_usuario"  ,  ":clave"=>"$_usuarios_clave"  ,  ":estatus"=>"$_usuarios_estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
