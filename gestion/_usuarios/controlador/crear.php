 <?php 
 $accion = "crear"; 
 $pagina = "_usuarios"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 include "./_usuarios/reg/post.php";  
 include "./_usuarios/modelos/crear.php";  
 include "./_usuarios/modelos/index.php";  
 include "./_usuarios/vista/index.php";  
 }else{ 
 include "./_usuarios/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
