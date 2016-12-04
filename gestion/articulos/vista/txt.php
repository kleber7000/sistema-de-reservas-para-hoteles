 <?php $html = "
articulos_id : %articulos_id%
articulos_id_tipo : %articulos_id_tipo%
articulos_titulo : %articulos_titulo%
articulos_contenido : %articulos_contenido%
articulos_fecha_registro : %articulos_fecha_registro%
articulos_estatus : %articulos_estatus%
";

                include "./articulos/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>