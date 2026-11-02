<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
?>


<html>
<head>
<title> Industria 4.0 - Producción industrial inteligente. - Logicbus S.A de C.V.</title>
<meta name="description" content="Con el rápido desarrollo de la red e inteligente, la estructura industrial está cambiando, el impacto de la Industria-4.0 se ha reflejado en la industria manufacturera, las empresas de ...">

<meta name="author" content="Logicbus">
 <meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="keywords" content="Industria 4.0, industrial, inteligente, produccion, IoT, Internet de las cosas, electromagneticas, logicbus">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">

<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="libreria/estilos.css" rel="stylesheet" >

<script src="libreria/ie-emulation-modes-warning.js"></script>

<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
			};
</script>
<style>

h1 { 
    font-size: 3em;
    font-weight: normal;
    text-align: center;
    color: #184797;
    font-family: fantasy;
}
h2 { 
	margin-top: 50px;
    font-size: 1.5em;
    font-weight: bold;
    color: black;
    font-family: "Times New Roman", serif;
  } 
   
.arch{
	width: 500px;
	height: 300px;
}
span{
	color:#ED9210;
}
p{
	font-size: 13pt;
	text-align: justify;
	font-family: small fonts;
	}
</style>
</head>

<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>
<div id="main">
 <div class="container-fluid">
 <span><a href="https://www.logicbus.com.mx/seccion-de-articulos" title="Osciloscopios">Artículos/</a></span>
   <div class="row">
    <h1 align="center" style="color:  #FAFAFA; text-shadow: 5px 1px 2px #DF7401, 0 0 25px #0080FF, 0 0 20px #0B0B61;">Industria 4.0 - Producción industrial inteligente</h1><br><br>

<center><img src="https://www.logicbus.com.mx/imagenes/articulo/Produccion-industrial.png" class="image_productos" width ="60%" alt="Supervisión y gestión de centros de datos con InduSoft Web Studio" title="Supervisión y gestión de centros de datos con InduSoft Web Studio"></center>
        <p style="text-align: right; font-size: 15px" align="right"><b>By: Estrada Roque Jose Antonio - 07 de enero del 2019</b></p><br>

<h3 align="center">ANTECEDENTES</h3>

<p align="justify">Con el rápido desarrollo de la red e inteligente, la estructura industrial está cambiando, el impacto de la Industria-4.0 se ha reflejado en la industria manufacturera, las empresas de producción enfrentarán cada vez más desafíos. Las empresas deben mejorar la eficiencia de la producción, cumplir con los requisitos ambientales y reducir los costos operativos para alcanzar el éxito en el mercado global altamente competitivo de hoy.
<BR><BR>
El concepto de industry-4.0 no se limita a la línea de producción, sino que también está estrechamente vinculado a la tecnología Internet Of Things (IOT), para crear otra oportunidad para que la empresa de fabricación suba las alturas estratégicas. El sistema de gestión de producción inteligente y la tecnología de automatización pueden ayudar a las empresas a enfrentar estos desafíos y mejorar el rendimiento industrial. La producción industrial inteligente es el futuro de la industria manufacturera, el uso de la tecnología de Internet de las cosas y la tecnología de monitoreo para fortalecer la administración de la información y los servicios, mejorar la eficiencia de las líneas de producción y la calidad del producto, y optimizar el proceso de producción.</p><BR><BR>

<H3 align="center">REQUERIMIENTOS DEL PROYECTO</H3>

<p align="justify">La red se basa en una plataforma para cumplir con los requisitos de gestión y control de energía, adquisición de datos y videovigilancia industrial y otras necesidades.<br>
Soporte para el equipo de producción, comunicación a distancia del nodo.<br>
El dispositivo tiene una fuerte anti-interferencia, especialmente la interferencia electromagnética entre equipos industriales.
El dispositivo puede funcionar en un entorno hostil.</p><br><br>

<h3 align="center">SISTEMA DEL DIAGRAMA</h3><BR>


<center><img src="https://www.logicbus.com.mx/imagenes/articulo/esquema.png" class="image_productos" width ="80%" alt="Esquema de capa de acceso y procesamiento de capa de convergencia." title="Esquema de capa de acceso y procesamiento de capa de convergencia."></center><p><center><p><center><b>Esquema de capa de acceso y procesamiento de capa de convergencia.</b></center></p><br>

<H3>INTRODUCCIÓN AL ESQUEMA</H3>

<p align="justify">Este esquema se divide en capa de acceso y procesamiento de capa de convergencia.<br>
Capa de acceso: Un total de 7 líneas de producción, control de automatización central, para lograr una inteligencia completa. Varios dispositivos de red están conectados a cada línea de producción. Con el fin de garantizar los datos sin problemas y el desarrollo del futuro, el esquema de monitoreo de video de este esquema adopta la topología de red en anillo redundante Gigabit SW-Ring. Los conmutadores Ethernet industriales IES7120-4GS se utilizan para formar una red de anillo redundante Gigabit y, en espera de la interfaz Gigabit de 2 Gigabit, otros dispositivos pueden acceder a la red a través de la interfaz Fast Ethernet del conmutador.<br>
Capa de convergencia: el conmutador central IES5128-4GS y la computadora host se cargarán a la transmisión de datos al servidor del subsistema. Siete nodos de subred conmutan IES7120-4GS y los conmutadores centrales IES5128-4GS para formar una red de anillo redundante Gigabit, mejorando la confiabilidad de la red.</p>

<h3>VENTAJA DEL ESQUEMA</h3>

<p align="justify">SW-Ring (tiempo de recuperación < 20 ms a plena carga).<br>
El interruptor utiliza un diseño de grado industrial, sin ventilador, bajo consumo de energía, soporte para temperatura de trabajo de -40 ~ 75°C, carcasa metálica, clase de protección IP40.<br>
La red de anillo Gigabit redundante garantiza la estabilidad de la comunicación de red, ya que el ancho de banda Gigabit hace que la transmisión de datos sea más rápida y suave.</p><br><br>

<h3>IES5128-4GS</h3>
<div align="left">
<ul>
<li>Admite 24 puertos 10Base-T / 100Base-TX Ethernet y 4 puertos Gigabit SFP </li>
<li>Tecnología de patente de red de anillo SW-Ring (Tiempo de recuperación de fallas < 20 ms) </li>
<li>VLAN basada en puertos y VLAN IEEE 802.1Q </li>
<li>Admite GMRP, IGMP Detección y multidifusión estática </li>
<li>Ancho de banda de soporte 12.8G </li>
<li>Sin ventilador, temperatura de trabajo -40 ~ 75°C </li>
<li>Entrada de alimentación de 100 ~ 240 VCA </li>
<li>Soporte para montaje en rack de 1U</li>
</ul><br></div>

<h3>IES7120-4GS</h3>
<div align="left">
<ul>
<li>Admite 16 puertos 10Base-T / 100Base-TX Ethernet y 4 puertos Gigabit SFP </li>
<li>Tecnología de patente de red de anillo de anillo SW (Tiempo de recuperación de fallas < 20 ms) </li>
<li>Admite autoadaptación Ethernet 10 / 100M </li>
<li>12 ~ 48VCC de voltaje amplio entrada de alimentación de redundancia </li>
<li>Sin ventilador, -40 ~ 75 temperature temperatura de trabajo </li>
<li>Protección IP40, carcasa metálica de alta resistencia, montaje en riel DIN</li>
</ul></div>
        

 </div>
 </div>
<center><span><br><br><br>No olvides compartirlo en tus redes sociales</span></center>
</div>

<?
 abajo();
?>
</body>
</html>