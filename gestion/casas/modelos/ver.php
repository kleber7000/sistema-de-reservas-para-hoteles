 <?php 
$sql=mysql_query( 
 "SELECT * FROM casas WHERE id = '$casas_id' ORDER BY id DESC   ",$conexion) 	  
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $casas = mysql_fetch_array($sql);	  
