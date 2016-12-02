 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 contactos  
 WHERE id = '$contactos_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
