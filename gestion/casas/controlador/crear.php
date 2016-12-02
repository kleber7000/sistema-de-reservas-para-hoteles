 <?php 
 $accion = "crear"; 
 $pagina = "casas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./casas/reg/post.php";  
 include "./casas/modelos/crear.php";  
 include "./casas/modelos/index.php";  
 include "./casas/vista/index.php";  
 }else{ 
 include "./casas/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
