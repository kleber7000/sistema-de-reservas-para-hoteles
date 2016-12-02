 <?php 
 $accion = "crear"; 
 $pagina = "contactos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./contactos/reg/post.php";  
 include "./contactos/modelos/crear.php";  
 include "./contactos/modelos/index.php";  
 include "./contactos/vista/index.php";  
 }else{ 
 include "./contactos/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
