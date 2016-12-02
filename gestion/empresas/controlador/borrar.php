 <?php 
 $accion = "borrar"; 
 $pagina = "empresas"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $empresas_id 		= mysql_real_escape_string($_REQUEST['empresas_id']); 
 include "./empresas/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
