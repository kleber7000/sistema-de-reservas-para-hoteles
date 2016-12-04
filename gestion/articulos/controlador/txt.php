 <?php 
 $accion = "ver"; 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $articulos_id 		= mysql_real_escape_string($_REQUEST['articulos_id']);   
     include "./articulos/modelos/ver.php"; 
     include "./articulos/reg/reg.php"; 
     include "./articulos/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
