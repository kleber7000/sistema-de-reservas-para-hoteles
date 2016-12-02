 <?php 
 $accion = "editar"; 
 $pagina = "_usuarios"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 include "./_usuarios/reg/post.php";  
 include "./_usuarios/modelos/editar.php";  

 include "./_usuarios/modelos/ver.php";  
 include "./_usuarios/reg/reg.php"; 
 include "./_usuarios/vista/ver.php";  
 }else{ 
 $_usuarios_id = mysql_real_escape_string($_REQUEST['_usuarios_id']);      
 include "./_usuarios/modelos/ver.php"; 
 include "./_usuarios/reg/reg.php"; 
 include "./_usuarios/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
