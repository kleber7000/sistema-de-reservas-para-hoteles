 <?php 
 $accion = "editar"; 
 $pagina = "casas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 include "./casas/reg/post.php";  
 include "./casas/modelos/editar.php";  

 include "./casas/modelos/ver.php";  
 include "./casas/reg/reg.php"; 
 include "./casas/vista/ver.php";  
 }else{ 
 $casas_id = mysql_real_escape_string($_REQUEST['casas_id']);      
 include "./casas/modelos/ver.php"; 
 include "./casas/reg/reg.php"; 
 include "./casas/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
