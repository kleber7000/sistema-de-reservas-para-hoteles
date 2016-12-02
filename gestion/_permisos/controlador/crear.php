 <?php 
 $accion = "crear"; 
 $pagina = "_permisos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./_permisos/reg/post.php";  
 include "./_permisos/modelos/crear.php";  
 include "./_permisos/modelos/index.php";  
 include "./_permisos/vista/index.php";  
 }else{ 
 include "./_permisos/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
