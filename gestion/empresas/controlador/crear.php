 <?php 
 $accion = "crear"; 
 $pagina = "empresas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./empresas/reg/post.php";  
 include "./empresas/modelos/crear.php";  
 include "./empresas/modelos/index.php";  
 include "./empresas/vista/index.php";  
 }else{ 
 include "./empresas/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
