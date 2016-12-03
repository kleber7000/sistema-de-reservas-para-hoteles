 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM reservas  
 WHERE  
 id_casa like '%$reservas_id_casa%'    
 AND  id_contacto like '%$reservas_id_contacto%'    
 AND  fecha_entrada like '%$reservas_fecha_entrada%'    
 AND  fecha_salida like '%$reservas_fecha_salida%'    
 AND  pax like '%$reservas_pax%'    
 AND  notas like '%$reservas_notas%'    
 AND  estatus like '%$reservas_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
