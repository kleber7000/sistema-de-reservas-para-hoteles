 <?php 
 $sql = "INSERT INTO reservas ( 
 id_casa  ,  id_contacto  ,  fecha_inicio  ,  fecha_fin  ,  pax  ,  estatus  ) VALUES ( 
 :id_casa  ,  :id_contacto  ,  :fecha_inicio  ,  :fecha_fin  ,  :pax  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_casa"=>"$reservas_id_casa"  ,  ":id_contacto"=>"$reservas_id_contacto"  ,  ":fecha_inicio"=>"$reservas_fecha_inicio"  ,  ":fecha_fin"=>"$reservas_fecha_fin"  ,  ":pax"=>"$reservas_pax"  ,  ":estatus"=>"$reservas_estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
