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
<title>Logicbus/ Productos/ PROFIBUS/ Serie Gateway
</title>
<meta name="description" content="PROFIBUS - Serie Gateway - PROFIBUS es un estándar de red de campo abierto e independiente de proveedores, donde la interfaz de ellos permite amplia...">

<meta name="keywords" content="PROFIBUS, Gateway, Entradas, Salidas, Digitales, Digital, Adquisisción de Datos, Process Fieldbus, GW-7552, GW-7553, LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, 
                  Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, 
                Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero,
                 Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, 
                 Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas">

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
<!--------------->
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
h1{
  text-align: center;
}
ul{
  text-align: justify;
  text-justify: inter-word;
}
td{
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
    <div class="griditemContA">

 <center>
<table width="100%" border="0">
  <tr>
    <td colspan="2"><a href="productos">Productos</a>-&gt;<a href="profibus">PROFIBUS</a>-&gt;Serie Gateway </td>
  </tr>
  <tr>
    <td colspan="2"><h1 align="center"><strong>PROFIBUS: Serie Gateway</strong></h1></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="29%"><div align="center"><a href="GW-7552"><img src="imagenes/02/gw-7552.jpg" height="100" border="0" alt="GW-7552"></a></div></td>
  <td width="71%"><strong><a href="GW-7552">GW-7552</a></strong>
    <div align="justify">PROFIBUS/Modbus Gateway </div></td>
  </tr>
  <tr>
    <td colspan="2"><hr align="center" color="#CCCCCC"></td>
  </tr>
  <tr>
    <td><div align="center"><a href="GW-7553"><img src="imagenes/02/GW-7553-G.jpg" height="100" border="0" alt="GW-7553"></a></div></td>
    <td><strong><a href="GW-7553">GW-7553</a></strong>
   <div align="justify">PROFIBUS/Modbus TCP Gateway </div></td></tr></table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>