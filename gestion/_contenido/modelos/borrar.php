 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 _contenido  
 WHERE id = '$_contenido_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
