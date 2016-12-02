 <?php 
$sql=mysql_query( 
 "SELECT * FROM contactos WHERE id = '$contactos_id' ORDER BY id DESC   ",$conexion) 	  
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $contactos = mysql_fetch_array($sql);	  
