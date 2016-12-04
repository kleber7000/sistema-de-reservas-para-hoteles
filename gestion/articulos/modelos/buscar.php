 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM articulos  
 WHERE  
 id_tipo like '%$articulos_id_tipo%'    
 AND  titulo like '%$articulos_titulo%'    
 AND  contenido like '%$articulos_contenido%'    
 AND  fecha_registro like '%$articulos_fecha_registro%'    
 AND  estatus like '%$articulos_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
