 <?php 
 $accion = "editar"; 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 include "./articulos/reg/post.php";  
 include "./articulos/modelos/editar.php";  

 include "./articulos/modelos/ver.php";  
 include "./articulos/reg/reg.php"; 
 include "./articulos/vista/ver.php";  
 }else{ 
 $articulos_id = mysql_real_escape_string($_REQUEST['articulos_id']);      
 include "./articulos/modelos/ver.php"; 
 include "./articulos/reg/reg.php"; 
 include "./articulos/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
