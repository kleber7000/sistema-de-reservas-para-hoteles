 <?php 
 $accion = "ver"; 
 $pagina = "_menu"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
  $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;    
     include "./_menu/modelos/index.php"; 
     include "./_menu/vista/index.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
