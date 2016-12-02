 <?php 
 $accion = "buscar"; 
 $pagina = "_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $_contenido_frase = mysql_real_escape_string($_REQUEST['_contenido_frase']);
  $_contenido_contexto = mysql_real_escape_string($_REQUEST['_contenido_contexto']);
     include "./_contenido/modelos/buscar.php"; 
     include "./_contenido/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
