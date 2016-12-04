 <?php  
 $sql=mysql_query(" UPDATE articulos SET  
 id_tipo = '$articulos_id_tipo'  
 ,  titulo = '$articulos_titulo'  
 ,  contenido = '$articulos_contenido'  
 ,  fecha_registro = '$articulos_fecha_registro'  
 ,  estatus = '$articulos_estatus'  
 WHERE id = '$articulos_id' ",$conexion) or die ("Error: ".mysql_error());   
