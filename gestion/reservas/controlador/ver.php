 <?php 
 $accion = "ver"; 
 $pagina = "reservas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $reservas_id 		= mysql_real_escape_string($_REQUEST['reservas_id']);   
     include "./reservas/modelos/ver.php"; 
     include "./reservas/reg/reg.php"; 
     include "./reservas/vista/ver.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
