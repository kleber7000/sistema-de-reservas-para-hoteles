 <?php 
$sql=mysql_query( 
 "SELECT * FROM empresas WHERE id = '$empresas_id' ORDER BY id DESC   ",$conexion) 	  
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $empresas = mysql_fetch_array($sql);	  
