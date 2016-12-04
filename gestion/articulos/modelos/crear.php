 <?php 
 $sql = "INSERT INTO articulos ( 
 id_tipo  ,  titulo  ,  contenido  ,  fecha_registro  ,  estatus  ) VALUES ( 
 :id_tipo  ,  :titulo  ,  :contenido  ,  :fecha_registro  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_tipo"=>"$articulos_id_tipo"  ,  ":titulo"=>"$articulos_titulo"  ,  ":contenido"=>"$articulos_contenido"  ,  ":fecha_registro"=>"$articulos_fecha_registro"  ,  ":estatus"=>"$articulos_estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
