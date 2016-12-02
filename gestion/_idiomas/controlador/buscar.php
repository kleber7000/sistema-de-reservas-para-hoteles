 <?php 
 $accion = "buscar"; 
 $pagina = "_idiomas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $_idiomas_idioma = mysql_real_escape_string($_REQUEST['_idiomas_idioma']);
  $_idiomas_nombre = mysql_real_escape_string($_REQUEST['_idiomas_nombre']);
     include "./_idiomas/modelos/buscar.php"; 
     include "./_idiomas/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
