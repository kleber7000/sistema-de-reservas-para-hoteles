 <?php $html = "
_usuarios_id : %_usuarios_id%
_usuarios_grupo : %_usuarios_grupo%
_usuarios_nombres : %_usuarios_nombres%
_usuarios_usuario : %_usuarios_usuario%
_usuarios_clave : %_usuarios_clave%
_usuarios_estatus : %_usuarios_estatus%
";

                include "./_usuarios/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>