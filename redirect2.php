<?php 
session_start();
require 'https://www.logicbus.com.mx/geoip.inc'; /*requerimos la biblioteca o liberia */
$abir_bd = geoip_open("GeoIP.dat",GEOIP_STANDARD); /* apertura y lectura del archivo utilizando la constante GEOIP_STANDARD como forma de lectura que adquiere valor en geoip.inc */
/* imprimimos el nick del país */
//echo $abir_bd;
$pais = geoip_country_name_by_addr($abir_bd, $_SERVER['REMOTE_ADDR']);
/*if ($pais == "Mexico") 
{
header ('Location:https://www.logicbus.com.mx/pagina_mexico.php');
} 
else{
header ('Location:https://www.logicbus.com.mx/pagina_usa.php');
}*/
/*$inactivo = 30;
if(isset($_SESSION['tiempo']) ) {
$vida_session = time() - $_SESSION['tiempo'];
    if($vida_session > $inactivo)
    {
        session_destroy();
        header("Location:http://13611371227.3dcart.net/"); 
    }
}
$_SESSION['tiempo'] = time();
if ($_SESSION['pagina'] == "VISITADA"){
	header('Location:http://13611371227.3dcart.net/');
	exit;
}*/
/*if (!isset($_SESSION['pagina'])){
	if ($pais == "Mexico"){
	$_SESSION['pagina'] = "MEXICO";
	header ('Location:https://www.logicbus.com.mx/pagina_mexico.php');
	} 
	else{
	$_SESSION['pagina'] = "USA";
	header ('Location:https://www.logicbus.com.mx/pagina_usa.php'); 
	}
}
else{
	if ($_SESSION['pagina'] !== ""){
		$_SESSION['pagina'] = "VISITADA";
		header('Location:http://13611371227.3dcart.net/');	
	}
}*/
//echo "<p>El valor de mi primera variable es $pais.</p>" ;
if ($pais == "Mexico"){
	//$_SESSION['pagina'] = "MEXICO";
	//header ('Location:https://www.logicbus.com.mx/pagina_mexico.php');
	setcookie('usuario_mexico', 'Logicbus_mx', time() + 7776000);
	header ('Location: https://www.logicbus.com.mx/');
	} 
else{
	//$_SESSION['pagina'] = "USA";
	//header ('Location:https://www.logicbus.com.mx/pagina_usa.php'); 
	header ('Location: https://www.logicbus.com/');
}
//echo geoip_country_name_by_addr($abir_bd, $_SERVER['REMOTE_ADDR']);
/* liberamos memoria cerrando el resorce devuelto por $abir_bd de la apertura*/
geoip_close($abir_bd);
?>