 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 _paginas  
 WHERE id = '$_paginas_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
