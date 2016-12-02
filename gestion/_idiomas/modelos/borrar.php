 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 _idiomas  
 WHERE id = '$_idiomas_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
