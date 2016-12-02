 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 reservas  
 WHERE id = '$reservas_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
