 <?php 
 $accion = "crear"; 
 $pagina = "_grupos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./_grupos/reg/post.php";  
 include "./_grupos/modelos/crear.php";  
 include "./_grupos/modelos/index.php";  
 include "./_grupos/vista/index.php";  
 }else{ 
 include "./_grupos/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
