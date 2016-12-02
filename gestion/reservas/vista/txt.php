 <?php $html = "
reservas_id : %reservas_id%
reservas_id_casa : %reservas_id_casa%
reservas_id_contacto : %reservas_id_contacto%
reservas_fecha_inicio : %reservas_fecha_inicio%
reservas_fecha_fin : %reservas_fecha_fin%
reservas_pax : %reservas_pax%
reservas_estatus : %reservas_estatus%
";

include "./reservas/reg/var.php";

echo "<h1>Variables disponibles</h1><pre>$html</pre>";
?>