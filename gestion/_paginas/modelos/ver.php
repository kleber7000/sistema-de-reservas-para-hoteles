 <?php 
$sql=mysql_query( 
 "SELECT * FROM _paginas WHERE id = '$_paginas_id' ORDER BY id DESC   ",$conexion) 	  
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $_paginas = mysql_fetch_array($sql);	  
