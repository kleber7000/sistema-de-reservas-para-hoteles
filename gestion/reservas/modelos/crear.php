 <?php 
 $sql = "INSERT INTO reservas ( 
 id_casa  ,  id_contacto  ,  fecha_entrada  ,  fecha_salida  ,  pax  ,  notas  ,  estatus  ) VALUES ( 
 :id_casa  ,  :id_contacto  ,  :fecha_entrada  ,  :fecha_salida  ,  :pax  ,  :notas  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_casa"=>"$reservas_id_casa"  ,  ":id_contacto"=>"$reservas_id_contacto"  ,  ":fecha_entrada"=>"$reservas_fecha_entrada"  ,  ":fecha_salida"=>"$reservas_fecha_salida"  ,  ":pax"=>"$reservas_pax"  ,  ":notas"=>"$reservas_notas"  ,  ":estatus"=>"$reservas_estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
