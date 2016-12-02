 <?php  
 $sql=mysql_query(" UPDATE _permisos SET  
 grupo = '$_permisos_grupo'  
 ,  pagina = '$_permisos_pagina'  
 ,  permiso = '$_permisos_permiso'  
 WHERE id = '$_permisos_id' ",$conexion) or die ("Error: ".mysql_error());   
