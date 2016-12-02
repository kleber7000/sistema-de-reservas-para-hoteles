 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 empresas  
 WHERE id = '$empresas_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
