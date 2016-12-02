 <?php 
 $accion = "editar"; 
 $pagina = "_permisos"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 include "./_permisos/reg/post.php";  
 include "./_permisos/modelos/editar.php";  

 include "./_permisos/modelos/ver.php";  
 include "./_permisos/reg/reg.php"; 
 include "./_permisos/vista/ver.php";  
 }else{ 
 $_permisos_id = mysql_real_escape_string($_REQUEST['_permisos_id']);      
 include "./_permisos/modelos/ver.php"; 
 include "./_permisos/reg/reg.php"; 
 include "./_permisos/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
