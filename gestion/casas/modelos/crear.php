 <?php 
 $sql = "INSERT INTO casas ( 
 id_empresa  ,  casa  ,  capacidad  ,  estatus  ) VALUES ( 
 :id_empresa  ,  :casa  ,  :capacidad  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_empresa"=>"$casas_id_empresa"  ,  ":casa"=>"$casas_casa"  ,  ":capacidad"=>"$casas_capacidad"  ,  ":estatus"=>"$casas_estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
