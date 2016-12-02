 <?php 
 $accion = "buscar"; 
 $pagina = "_menu"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $_menu_ubicacion = mysql_real_escape_string($_REQUEST['_menu_ubicacion']);
  $_menu_padre = mysql_real_escape_string($_REQUEST['_menu_padre']);
  $_menu_label = mysql_real_escape_string($_REQUEST['_menu_label']);
  $_menu_url = mysql_real_escape_string($_REQUEST['_menu_url']);
  $_menu_icono = mysql_real_escape_string($_REQUEST['_menu_icono']);
  $_menu_orden = mysql_real_escape_string($_REQUEST['_menu_orden']);
     include "./_menu/modelos/buscar.php"; 
     include "./_menu/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
