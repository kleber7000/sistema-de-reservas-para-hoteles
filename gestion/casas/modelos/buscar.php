 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM casas  
 WHERE  
 id_empresa like '%$casas_id_empresa%'    
 AND  casa like '%$casas_casa%'    
 AND  capacidad like '%$casas_capacidad%'    
 AND  estatus like '%$casas_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
