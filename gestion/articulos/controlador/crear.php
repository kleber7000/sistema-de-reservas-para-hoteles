 <?php 
 $accion = "crear"; 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./articulos/reg/post.php";  
 include "./articulos/modelos/crear.php";  
 include "./articulos/modelos/index.php";  
 include "./articulos/vista/index.php";  
 }else{ 
 include "./articulos/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
