 <?php 
$sql=mysql_query( 
 "SELECT * FROM reservas WHERE id = '$reservas_id' ORDER BY id DESC   ",$conexion) 	  
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $reservas = mysql_fetch_array($sql);	  
