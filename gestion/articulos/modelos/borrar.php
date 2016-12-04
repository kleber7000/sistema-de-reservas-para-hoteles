 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 articulos  
 WHERE id = '$articulos_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
