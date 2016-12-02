 <?php 
 $accion = "buscar"; 
 $pagina = "_permisos"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $_permisos_grupo = mysql_real_escape_string($_REQUEST['_permisos_grupo']);
  $_permisos_pagina = mysql_real_escape_string($_REQUEST['_permisos_pagina']);
  $_permisos_permiso = mysql_real_escape_string($_REQUEST['_permisos_permiso']);
     include "./_permisos/modelos/buscar.php"; 
     include "./_permisos/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
