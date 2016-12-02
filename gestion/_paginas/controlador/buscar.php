 <?php 
 $accion = "buscar"; 
 $pagina = "_paginas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $_paginas_pagina = mysql_real_escape_string($_REQUEST['_paginas_pagina']);
     include "./_paginas/modelos/buscar.php"; 
     include "./_paginas/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
