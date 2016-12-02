 <?php 
 $accion = "editar"; 
 $pagina = "empresas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 include "./empresas/reg/post.php";  
 include "./empresas/modelos/editar.php";  

 include "./empresas/modelos/ver.php";  
 include "./empresas/reg/reg.php"; 
 include "./empresas/vista/ver.php";  
 }else{ 
 $empresas_id = mysql_real_escape_string($_REQUEST['empresas_id']);      
 include "./empresas/modelos/ver.php"; 
 include "./empresas/reg/reg.php"; 
 include "./empresas/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
