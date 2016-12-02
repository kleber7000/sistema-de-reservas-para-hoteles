 <?php 
 $sql = "INSERT INTO _traducciones ( 
 contenido_id  ,  idioma  ,  traduccion  ) VALUES ( 
 :contenido_id  ,  :idioma  ,  :traduccion    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":contenido_id"=>"$_traducciones_contenido_id"  ,  ":idioma"=>"$_traducciones_idioma"  ,  ":traduccion"=>"$_traducciones_traduccion"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
