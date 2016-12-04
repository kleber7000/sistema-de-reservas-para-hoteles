 <?php 
 $sql = "INSERT INTO tipos_contenido ( 
 tipo  ) VALUES ( 
 :tipo    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":tipo"=>"$tipos_contenido_tipo"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
