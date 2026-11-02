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
<title>Logicbus/ Productos/ PROFIBUS/ Unidades de ES Remotas
</title>
<meta name="description" content="Las Unidades de E / S está especialmente diseñada para el dispositivo esclavo del protocolo PROFIBUS DP.">

<meta name="keywords" content="PROFIBUS, E/S Remotas, Entradas, Salidas, Digitales, Digital, Adquisisción de Datos, Process Fieldbus, PROFI-8255, PROFI-8455, PROFI-8155, Ranuras, Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizacion, Seguridad, Consultoria, Integracion, Proyecto, Radio Frecuencia, Cubos, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">

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
    <td colspan="2"><a href="productos">Productos</a>-&gt;<a href="profibus">PROFIBUS</a>-&gt;Unidades de E/S Remotas </td>
  </tr>
  <tr>
    <td colspan="2"><h1 align="center"><strong>PROFIBUS: Unidades de E/S Remotas</strong></h1></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="29%"><div align="center"><a href="PROFI-8155"><img src="imagenes/02/PROFI-8155-G_01.jpg" height="100" border="0" alt="Unidad Remota PROFI-8155"></a></div></td>
  <td width="71%"><strong><a href="PROFI-8155">PROFI-8155</a></strong>
    <div align="justify">Unidad Remota  PROFIBUS de E/S con 1 Ranura </div></td>
  </tr>
  <tr>
    <td colspan="2"><hr align="center" color="#CCCCCC"></td>
  </tr>
  <tr>
    <td><div align="center"><a href="PROFI-8255"><img src="imagenes/02/PROFI-8255-G_01.jpg" height="100" border="0" alt="Unidad Remota PROFI-8255"></a></div></td>
    <td><strong><a href="PROFI-8255">PROFI-8255</a></strong>
      <div align="justify">Unidad Remota PROFIBUS de E/S con 2 Ranuras </div></td></tr>
  <tr>
    <td colspan="2"><hr align="center" color="#CCCCCC"></td>
  </tr>
  <tr>
    <td><div align="center"><a href="PROFI-8455"><img src="imagenes/02/PROFI-8455-G.jpg" height="100" border="0" alt="Unidad Remota PROFI-8455"></a></div></td>
    <td><strong><a href="PROFI-8455">PROFI-8455</a><br>
      </strong>Unidad Remota PROFIBUS de E/S con 4 Ranuras    </td>
  </tr></table>
 </center>
</div>
</div></div>
<?
 abajo();
?>
</body>
</html>