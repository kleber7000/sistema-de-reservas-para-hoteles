 <?php 
 $accion = "buscar"; 
 $pagina = "_usuarios"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $_usuarios_grupo = mysql_real_escape_string($_REQUEST['_usuarios_grupo']);
  $_usuarios_nombres = mysql_real_escape_string($_REQUEST['_usuarios_nombres']);
  $_usuarios_usuario = mysql_real_escape_string($_REQUEST['_usuarios_usuario']);
  $_usuarios_clave = mysql_real_escape_string($_REQUEST['_usuarios_clave']);
  $_usuarios_estatus = mysql_real_escape_string($_REQUEST['_usuarios_estatus']);
     include "./_usuarios/modelos/buscar.php"; 
     include "./_usuarios/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
