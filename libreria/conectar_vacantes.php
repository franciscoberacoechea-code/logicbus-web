<?
$link = mysql_connect('localhost', 'logicbus_usrvaca', 'H%s85Dk7M1') or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('logicbus_vacantes') or die('No se pudo seleccionar la base de datos '. mysql_error());
?>