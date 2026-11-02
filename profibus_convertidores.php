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
<title>Logicbus/ Productos/ PROFIBUS/ Convertidores
</title>
<meta name="description" content="Productos->PROFIBUS->Convertidores PROFIBUS | Logicbus S.A. de C.V.">

<meta name="keywords" content="PROFIBUS, E/S Remotas, Modulos, Unidades, Convertidor, RS-232, RS-422, RS-485, Expansion,Entradas, Salidas, Gateway,
                                Digitales, Digital, Adquisisción de Datos, Process Fieldbus, PROFI-5045, PROFI-5050, PROFI-5051, PROFI-5052, PROFI-5053,
                  PROFI-5055, PROFI-5060, LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, 
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
    <td colspan="2"><a href="productos">Productos</a>-&gt;<a href="profibus">PROFIBUS</a>-&gt;Convertidores</td>
  </tr>
  <tr>
    <td colspan="2"><h1 align="center"><strong>Convertidores PROFIBUS</strong></h1></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="25%"><div align="center"><a href="I-7550"><img src="imagenes/02/I-7550.jpg" alt="Convertidor PROFIBUS" height="100" border="0"></a></div></td>
  <td><div align="justify"><strong><a href="I-7550">I-7550</a> </strong><br>Convertidor PROFIBUS a RS-232/422/485</div></td>
  </tr>
  <tr>
    <td colspan="2"><hr align="center" color="#CCCCCC"></td>
  </tr>
  <tr>
    <td><div align="center"><a href="I-7580"><img src="imagenes/02/I-7580.jpg" height="100" border="0" alt="Dispositivo I-7580"></a></div></td>
    <td><div align="justify"><strong><a href="I-7580">I-7580</a></strong><br>Convertidor PROFINET a RS-232/422/485</div></td>
    </tr>
  <tr>
    <td colspan="2"><hr align="center" color="#CCCCCC"></td>
  </tr>
</table>
 </center>
</div>
</div></div>
<?
 abajo();
?>
</body>
</html>