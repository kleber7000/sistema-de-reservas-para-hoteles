 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM _traducciones  
 WHERE  
 contenido_id like '%$_traducciones_contenido_id%'    
 AND  idioma like '%$_traducciones_idioma%'    
 AND  traduccion like '%$_traducciones_traduccion%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
