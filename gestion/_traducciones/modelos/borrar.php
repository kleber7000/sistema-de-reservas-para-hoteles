 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 _traducciones  
 WHERE id = '$_traducciones_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
