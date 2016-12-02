 <?php 
 $accion = "buscar"; 
 $pagina = "_traducciones"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $_traducciones_contenido_id = mysql_real_escape_string($_REQUEST['_traducciones_contenido_id']);
  $_traducciones_idioma = mysql_real_escape_string($_REQUEST['_traducciones_idioma']);
  $_traducciones_traduccion = mysql_real_escape_string($_REQUEST['_traducciones_traduccion']);
     include "./_traducciones/modelos/buscar.php"; 
     include "./_traducciones/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
