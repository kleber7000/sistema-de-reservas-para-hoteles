 <?php  
 $sql=mysql_query(" UPDATE _traducciones SET  
 contenido_id = '$_traducciones_contenido_id'  
 ,  idioma = '$_traducciones_idioma'  
 ,  traduccion = '$_traducciones_traduccion'  
 WHERE id = '$_traducciones_id' ",$conexion) or die ("Error: ".mysql_error());   
