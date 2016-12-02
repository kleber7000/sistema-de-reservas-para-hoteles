 <?php 
 $accion = "borrar"; 
 $pagina = "reservas"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $reservas_id 		= mysql_real_escape_string($_REQUEST['reservas_id']); 
 include "./reservas/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
