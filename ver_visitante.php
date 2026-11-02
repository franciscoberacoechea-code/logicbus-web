<?php

require("geoip.inc"); /*requerimos la biblioteca o liberia */

$abir_bd = geoip_open("GeoIP.dat",GEOIP_STANDARD); /* apertura y lectura del archivo utilizando la constante GEOIP_STANDARD como forma de lectura que adquiere valor en geoip.inc */

/* imprimimos el nombre del país */
echo "<h1>" . geoip_country_name_by_addr($abir_bd, $_SERVER['REMOTE_ADDR']) . "</h1>";

/* Obtenemos el código del país */
$Xtension=  geoip_country_code_by_addr($abir_bd, $_SERVER['REMOTE_ADDR']);
$Xtension = strtolower($Xtension); 

/* Ponemos la bandera de acuerdo al codigo del país */
echo "<img src='flags/" . $Xtension  . ".gif'>";

/* liberamos memoria cerrando el resorce devuelto por $abir_bd de la apertura*/
geoip_close($abir_bd);

echo "<br>!Gracias!";
?> 