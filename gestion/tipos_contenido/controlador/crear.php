 <?php 
 $accion = "crear"; 
 $pagina = "tipos_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./tipos_contenido/reg/post.php";  
 include "./tipos_contenido/modelos/crear.php";  
 include "./tipos_contenido/modelos/index.php";  
 include "./tipos_contenido/vista/index.php";  
 }else{ 
 include "./tipos_contenido/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
