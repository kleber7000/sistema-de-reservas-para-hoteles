 <?php 
 $accion = "crear"; 
 $pagina = "_idiomas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./_idiomas/reg/post.php";  
 include "./_idiomas/modelos/crear.php";  
 include "./_idiomas/modelos/index.php";  
 include "./_idiomas/vista/index.php";  
 }else{ 
 include "./_idiomas/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
