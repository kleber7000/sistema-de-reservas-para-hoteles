 <?php 
 $accion = "crear"; 
 $pagina = "_menu"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./_menu/reg/post.php";  
 include "./_menu/modelos/crear.php";  
 include "./_menu/modelos/index.php";  
 include "./_menu/vista/index.php";  
 }else{ 
 include "./_menu/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
