 <?php 
 $accion = "borrar"; 
 $pagina = "contactos"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $contactos_id 		= mysql_real_escape_string($_REQUEST['contactos_id']); 
 include "./contactos/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
