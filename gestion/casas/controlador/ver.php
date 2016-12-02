 <?php 
 $accion = "ver"; 
 $pagina = "casas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $casas_id 		= mysql_real_escape_string($_REQUEST['casas_id']);   
     include "./casas/modelos/ver.php"; 
     include "./casas/reg/reg.php"; 
     include "./casas/vista/ver.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
