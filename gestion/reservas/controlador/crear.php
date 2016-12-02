 <?php 
 $accion = "crear"; 
 $pagina = "reservas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./reservas/reg/post.php";  
 include "./reservas/modelos/crear.php";  
 include "./reservas/modelos/index.php";  
 include "./reservas/vista/index.php";  
 }else{ 
 include "./reservas/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
