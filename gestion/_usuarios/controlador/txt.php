 <?php 
 $accion = "ver"; 
 $pagina = "_usuarios"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_usuarios_id 		= mysql_real_escape_string($_REQUEST['_usuarios_id']);   
     include "./_usuarios/modelos/ver.php"; 
     include "./_usuarios/reg/reg.php"; 
     include "./_usuarios/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
