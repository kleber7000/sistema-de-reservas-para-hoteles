 <?php  
 $sql=mysql_query(" UPDATE _grupos SET  
 grupo = '$_grupos_grupo'  
 WHERE id = '$_grupos_id' ",$conexion) or die ("Error: ".mysql_error());   
