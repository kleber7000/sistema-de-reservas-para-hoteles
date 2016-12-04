 <?php 
  $articulos_id = mysql_real_escape_string($_REQUEST['articulos_id']); 
  $articulos_id_tipo = mysql_real_escape_string($_REQUEST['articulos_id_tipo']); 
  $articulos_titulo = mysql_real_escape_string($_REQUEST['articulos_titulo']); 
  $articulos_contenido = mysql_real_escape_string($_REQUEST['articulos_contenido']); 
  $articulos_fecha_registro = mysql_real_escape_string($_REQUEST['articulos_fecha_registro']); 
  $articulos_estatus = mysql_real_escape_string($_REQUEST['articulos_estatus']); 
