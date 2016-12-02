 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 _usuarios  
 WHERE id = '$_usuarios_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
