 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM tipos_contenido  
 WHERE  
 tipo like '%$tipos_contenido_tipo%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
