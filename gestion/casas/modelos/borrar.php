 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 casas  
 WHERE id = '$casas_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
