 <?php 
$sql=mysql_query( 
 "SELECT * FROM _usuarios WHERE id = '$_usuarios_id' ORDER BY id DESC   ",$conexion) 	  
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $_usuarios = mysql_fetch_array($sql);	  
