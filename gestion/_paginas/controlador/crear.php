 <?php 
 $accion = "crear"; 
 $pagina = "_paginas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./_paginas/reg/post.php";  
 include "./_paginas/modelos/crear.php";  
 include "./_paginas/modelos/index.php";  
 include "./_paginas/vista/index.php";  
 }else{ 
 include "./_paginas/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
