 <?php $html = "
empresas_id : %empresas_id%
empresas_id_propietario : %empresas_id_propietario%
empresas_sitio_web : %empresas_sitio_web%
empresas_nombre : %empresas_nombre%
empresas_tipo : %empresas_tipo%
empresas_sector_actividad : %empresas_sector_actividad%
empresas_pais : %empresas_pais%
empresas_provincia : %empresas_provincia%
empresas_ciudad : %empresas_ciudad%
empresas_cpostal : %empresas_cpostal%
empresas_direccion : %empresas_direccion%
empresas_tel : %empresas_tel%
empresas_fax : %empresas_fax%
empresas_email : %empresas_email%
empresas_twitter : %empresas_twitter%
empresas_google_plus : %empresas_google_plus%
empresas_facebook : %empresas_facebook%
empresas_linkedin : %empresas_linkedin%
empresas_empresa_contacto : %empresas_empresa_contacto%
empresas_empresa_contacto_email : %empresas_empresa_contacto_email%
empresas_estatus : %empresas_estatus%
";

include "./empresas/reg/var.php";

echo "<h1>Variables disponibles</h1><pre>$html</pre>";
?>