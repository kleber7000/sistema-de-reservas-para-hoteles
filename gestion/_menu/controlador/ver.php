 <?php 
 $accion = "ver"; 
 $pagina = "_menu"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_menu_id 		= mysql_real_escape_string($_REQUEST['_menu_id']);   
     include "./_menu/modelos/ver.php"; 
     include "./_menu/reg/reg.php"; 
     include "./_menu/vista/ver.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
