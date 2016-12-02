 <?php 
 $accion = "crear"; 
 $pagina = "_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./_contenido/reg/post.php";  
 include "./_contenido/modelos/crear.php";  
 include "./_contenido/modelos/index.php";  
 include "./_contenido/vista/index.php";  
 }else{ 
 include "./_contenido/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
