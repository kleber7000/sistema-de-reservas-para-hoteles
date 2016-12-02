 <?php  
 $sql=mysql_query(" UPDATE _usuarios SET  
 grupo = '$_usuarios_grupo'  
 ,  nombres = '$_usuarios_nombres'  
 ,  usuario = '$_usuarios_usuario'  
 ,  clave = '$_usuarios_clave'  
 ,  estatus = '$_usuarios_estatus'  
 WHERE id = '$_usuarios_id' ",$conexion) or die ("Error: ".mysql_error());   
