 <?php 
 $accion = "editar"; 
 $pagina = "reservas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 include "./reservas/reg/post.php";  
 include "./reservas/modelos/editar.php";  

 include "./reservas/modelos/ver.php";  
 include "./reservas/reg/reg.php"; 
 include "./reservas/vista/ver.php";  
 }else{ 
 $reservas_id = mysql_real_escape_string($_REQUEST['reservas_id']);      
 include "./reservas/modelos/ver.php"; 
 include "./reservas/reg/reg.php"; 
 include "./reservas/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
