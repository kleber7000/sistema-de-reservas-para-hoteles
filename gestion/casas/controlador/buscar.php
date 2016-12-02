 <?php 
 $accion = "buscar"; 
 $pagina = "casas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $casas_id_empresa = mysql_real_escape_string($_REQUEST['casas_id_empresa']);
  $casas_casa = mysql_real_escape_string($_REQUEST['casas_casa']);
  $casas_capacidad = mysql_real_escape_string($_REQUEST['casas_capacidad']);
  $casas_estatus = mysql_real_escape_string($_REQUEST['casas_estatus']);
     include "./casas/modelos/buscar.php"; 
     include "./casas/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
