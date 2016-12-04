 <?php 
 $accion = "editar"; 
 $pagina = "tipos_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 include "./tipos_contenido/reg/post.php";  
 include "./tipos_contenido/modelos/editar.php";  

 include "./tipos_contenido/modelos/ver.php";  
 include "./tipos_contenido/reg/reg.php"; 
 include "./tipos_contenido/vista/ver.php";  
 }else{ 
 $tipos_contenido_id = mysql_real_escape_string($_REQUEST['tipos_contenido_id']);      
 include "./tipos_contenido/modelos/ver.php"; 
 include "./tipos_contenido/reg/reg.php"; 
 include "./tipos_contenido/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
