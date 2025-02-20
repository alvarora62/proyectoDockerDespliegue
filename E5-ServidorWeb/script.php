<?php
 setlocale(LC_TIME, "es_ES.UTF-8");
 $mes_actual = strftime("%B");
 $fecha_actual = date("d/m/Y");
 $hora_actual = date("H:i:s");
 echo "<h1>Información</h1>";
 echo "<p>Hoy es $fecha_actual</p>";
 echo "<p>El mes es: <strong>$mes_actual</strong></p>";
 echo "<p>Hora: $hora_actual</p>";
 ?>