 <?php 
 $accion = "ver"; 
 $pagina = "_usuarios"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
  $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;    
     include "./_usuarios/modelos/index.php"; 
     include "./_usuarios/vista/index.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
