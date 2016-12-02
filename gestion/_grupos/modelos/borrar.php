 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 _grupos  
 WHERE id = '$_grupos_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
