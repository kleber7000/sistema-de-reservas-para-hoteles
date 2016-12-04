 <?php 
 $accion = "buscar"; 
 $pagina = "tipos_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $tipos_contenido_tipo = mysql_real_escape_string($_REQUEST['tipos_contenido_tipo']);
     include "./tipos_contenido/modelos/buscar.php"; 
     include "./tipos_contenido/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
