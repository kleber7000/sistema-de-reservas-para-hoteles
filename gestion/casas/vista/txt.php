 <?php $html = "
casas_id : %casas_id%
casas_id_empresa : %casas_id_empresa%
casas_casa : %casas_casa%
casas_capacidad : %casas_capacidad%
casas_estatus : %casas_estatus%
";

include "./casas/reg/var.php";

echo "<h1>Variables disponibles</h1><pre>$html</pre>";
?>