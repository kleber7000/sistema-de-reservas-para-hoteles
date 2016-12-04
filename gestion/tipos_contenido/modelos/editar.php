 <?php  
 $sql=mysql_query(" UPDATE tipos_contenido SET  
 tipo = '$tipos_contenido_tipo'  
 WHERE id = '$tipos_contenido_id' ",$conexion) or die ("Error: ".mysql_error());   
