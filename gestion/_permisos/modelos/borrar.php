 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 _permisos  
 WHERE id = '$_permisos_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
