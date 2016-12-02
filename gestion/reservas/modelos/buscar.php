 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM reservas  
 WHERE  
 id_casa like '%$reservas_id_casa%'    
 AND  id_contacto like '%$reservas_id_contacto%'    
 AND  fecha_inicio like '%$reservas_fecha_inicio%'    
 AND  fecha_fin like '%$reservas_fecha_fin%'    
 AND  pax like '%$reservas_pax%'    
 AND  estatus like '%$reservas_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
