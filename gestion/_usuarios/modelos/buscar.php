 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM _usuarios  
 WHERE  
 grupo like '%$_usuarios_grupo%'    
 AND  nombres like '%$_usuarios_nombres%'    
 AND  usuario like '%$_usuarios_usuario%'    
 AND  clave like '%$_usuarios_clave%'    
 AND  estatus like '%$_usuarios_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
