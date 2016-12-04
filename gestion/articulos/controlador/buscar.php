 <?php 
 $accion = "buscar"; 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $articulos_id_tipo = mysql_real_escape_string($_REQUEST['articulos_id_tipo']);
  $articulos_titulo = mysql_real_escape_string($_REQUEST['articulos_titulo']);
  $articulos_contenido = mysql_real_escape_string($_REQUEST['articulos_contenido']);
  $articulos_fecha_registro = mysql_real_escape_string($_REQUEST['articulos_fecha_registro']);
  $articulos_estatus = mysql_real_escape_string($_REQUEST['articulos_estatus']);
     include "./articulos/modelos/buscar.php"; 
     include "./articulos/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
