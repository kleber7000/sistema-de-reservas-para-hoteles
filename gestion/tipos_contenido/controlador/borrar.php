 <?php 
 $accion = "borrar"; 
 $pagina = "tipos_contenido"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $tipos_contenido_id 		= mysql_real_escape_string($_REQUEST['tipos_contenido_id']); 
 include "./tipos_contenido/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
