 <?php 
 $sql = "INSERT INTO _permisos ( 
 grupo  ,  pagina  ,  permiso  ) VALUES ( 
 :grupo  ,  :pagina  ,  :permiso    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":grupo"=>"$_permisos_grupo"  ,  ":pagina"=>"$_permisos_pagina"  ,  ":permiso"=>"$_permisos_permiso"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
