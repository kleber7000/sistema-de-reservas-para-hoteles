 <?php 
 $accion = "ver"; 
 $pagina = "_idiomas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_idiomas_id 		= mysql_real_escape_string($_REQUEST['_idiomas_id']);   
     include "./_idiomas/modelos/ver.php"; 
     include "./_idiomas/reg/reg.php"; 
     include "./_idiomas/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
