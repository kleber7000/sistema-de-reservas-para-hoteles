 <?php 
 $accion = "buscar"; 
 $pagina = "_grupos"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $_grupos_grupo = mysql_real_escape_string($_REQUEST['_grupos_grupo']);
     include "./_grupos/modelos/buscar.php"; 
     include "./_grupos/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
