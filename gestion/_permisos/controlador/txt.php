 <?php 
 $accion = "ver"; 
 $pagina = "_permisos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_permisos_id 		= mysql_real_escape_string($_REQUEST['_permisos_id']);   
     include "./_permisos/modelos/ver.php"; 
     include "./_permisos/reg/reg.php"; 
     include "./_permisos/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
