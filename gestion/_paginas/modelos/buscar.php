 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM _paginas  
 WHERE  
 pagina like '%$_paginas_pagina%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
