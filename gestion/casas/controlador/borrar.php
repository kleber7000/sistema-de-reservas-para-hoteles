 <?php 
 $accion = "borrar"; 
 $pagina = "casas"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $casas_id 		= mysql_real_escape_string($_REQUEST['casas_id']); 
 include "./casas/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
