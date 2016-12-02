 <?php 
 $accion = "ver"; 
 $pagina = "empresas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $empresas_id 		= mysql_real_escape_string($_REQUEST['empresas_id']);   
     include "./empresas/modelos/ver.php"; 
     include "./empresas/reg/reg.php"; 
     include "./empresas/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
