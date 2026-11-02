<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-31533636-1');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-1007518778');
</script>
<title>Logicbus / Productos / USB DAQ
</title>
<meta name="description" content="Salida Análoga: Manejo de Alto Voltaje, Voltaje Corriente y Voltaje. Salidas analógicas USB de 16 bits, 4, 8 y 16 canales.">
<meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, USB, DAQ, adquisicion de datos, datos, analog, analoga, digital, entrada, salida, voltaje, voltage, corriente, current, parallel, paralelo, contador, rack, Rack">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name="language" content="Spanish">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">
<link href="libreria/diagramas.css" rel="stylesheet" >
<!--- Estilos Necesarios-->
<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
<link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
<link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
<link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
<link rel="stylesheet" type="text/css" href="libreria/marcas.css">
<!-- -->
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="libreria/ie-emulation-modes-warning.js"></script>
<script language="javascript">

function menu_actual(){
  document.getElementById("productos").className = "dropdown active";
};
</script>

<style>
* a{
  cursor: pointer;
}
p{
    text-align: justify;
    text-justify: inter-word;
}
</style>
</head>
<body onLoad="menu_actual();">
  <?
    arriba();
  ?>

<div id="main">
  <div class="gridContArriba">
    <div class="griditemContA">
      <?
        menucategorias();
      ?>
    </div>
    <div class="griditemContA" id="subir">


<div align="left">
 <table width="100%" border="0">
   <tr>
     <td colspan="5"><a href="productos">Productos</a>-&gt;<a href="usb_categorias">USB</a>-&gt;<a href="tarjetaDAQ">Tarjetas DAQ</a>-&gt;Salida An&aacute;loga</td>
   </tr>
   <tr><td colspan="5"><h1 align="center">Salida An&aacute;loga</h1></td>
   </tr>  
   <tr><td colspan="5"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td></tr>
   <tr>
     <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td width="21%"><div align="center"><a href="usb_High-driveVoltage"><img src="imagenes/01/usb-3110-sm.jpg" width="100" border="0" title="Para m&aacute;s informaci&oacute;n, haga click" alt="Alto Voltaje"></a> </div></td>
    <td width="64%"><a href="usb_High-driveVoltage"><strong>Manejo de Alto Voltaje</strong></a></td>
    <td width="15%" align="right"> </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <hr align="center" color="#CCCCCC">
    </div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="usb_Voltage-Current"> </a><a href="usb_Voltage-Current"><img src="imagenes/01/usb-504.gif" alt="USB-504" height="100" border="0"></a></div></td>
    <td><a href="usb_Voltage-Current"><strong>Voltaje Corriente</strong></a></td>
    <td align="right"> </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <hr align="center" color="#CCCCCC">
    </div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="usb_Voltage"> </a><a href="usb_Voltage"><img src="imagenes/01/usb-3101fspop.jpg" width="120" border="0" alt="Click to enlarge imagen: USB-3101FS"></a></div></td>
    <td><a href="usb_Voltage"><strong>Voltaje </strong></a></td>
    <td align="right"></td>
  </tr>

 </table>
 </center>
</div>
</div>
</div>

<?
 abajo();
?>
</body>
</html>

