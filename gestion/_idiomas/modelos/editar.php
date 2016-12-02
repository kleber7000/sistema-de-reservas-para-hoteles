 <?php  
 $sql=mysql_query(" UPDATE _idiomas SET  
 idioma = '$_idiomas_idioma'  
 ,  nombre = '$_idiomas_nombre'  
 WHERE id = '$_idiomas_id' ",$conexion) or die ("Error: ".mysql_error());   
