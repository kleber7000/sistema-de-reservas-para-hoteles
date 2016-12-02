 <?php 
 $accion = "crear"; 
 $pagina = "_traducciones"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./_traducciones/reg/post.php";  
 include "./_traducciones/modelos/crear.php";  
 include "./_traducciones/modelos/index.php";  
 include "./_traducciones/vista/index.php";  
 }else{ 
 include "./_traducciones/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
