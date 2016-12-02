 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM _grupos  
 WHERE  
 grupo like '%$_grupos_grupo%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
