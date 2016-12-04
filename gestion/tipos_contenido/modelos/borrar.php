 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 tipos_contenido  
 WHERE id = '$tipos_contenido_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
