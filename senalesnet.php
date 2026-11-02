<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
 include("libreria/libreria.php");
?>



<html>
<head>
<title>Componentes de Procesamiento de Señales para .NET -Logicbus S.A de C.V</title>
<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="Data Translation, data logger, QuickDAQ, software, adquisicion de datos, adquisicion, , software ez, software">
  <meta name="description" content="Componentes de Procesamiento de Señales para .NET que permiten desarrollar aplicaciones independientes de hardware">
  <meta name="revisit after" content="14 days">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="libreria/estilos.css" rel="stylesheet" >
    
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="libreria/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
			};
</script>
<style>
h1 { 
    font-size: 1.5em;
    font-weight: normal;
}
h2 { 
    font-size: 1em;
    font-weight: bold;
}
h3 { 
    font-size: 1em;
    font-weight: bold;
	    padding: 0px;
    margin: 0px;
}
img.resp {
	max-width: 100%;
	height:auto;
}
table.prin {
  table-layout: fixed;
    word-wrap: break-word;}
</style>
</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>

 <div id="main">
<center>
<!--
TODO EL CONTENIDO DEL PRODUCTO O CATEGORIA.

LOS TEXTOS SON JUSTIFICADOS
LAS IMAGENES SON MENORES DE 500 PIXELES
LAS TABLAS SON CON WIDTH DE 100%
LA IMAGEN DE PDF DEBE SER DE WIDTH 30 (la imagen se encuentra dentro de imagenes/iconpdf.jpg)
-->
<table  height="80%" border="0" cellspacing="0">
<tr>
     <td height="13" colspan="2"><a href="productos">Productos</a>-&gt;<a href="software">Software</a> -&gt; Componentes de  Procesamiento de Señales para .NET </td>
   </tr>
<tr><td colspan="2" align="center"><h1>Componentes de  Procesamiento de Señales para .NET </h1></td></tr>
<tr>
  <td colspan="2" align="center"><img src="imagenes/netsmall.jpg" alt="Componentes de Procesamiento de Señales para .NET " class="resp" title="Componentes de Procesamiento de Señales para .NET "/></td>
</tr><tr><td colspan="2">&nbsp;</td></tr>
<tr>
  <td colspan="2" align="left"><p>La Biblioteca de  Componentes de Procesamiento de Señales para .NET contiene un conjunto  comprensivo de componentes .NET ideales para desarrollar aplicaciones de  procesado de señales. Cada componente contiene propiedades y métodos que pueden  ser usados para desempeñar operaciones FFT de canal sencillo o doble, y  calcular métricas de señales en datos de dominio de tiempo. Está diseñada en  arquitectura abierta o que permite trabajar con hardware independiente. Esta  biblioteca de componentes requiere una sola licencia de desarrollador y su dll  puede ser distribuida libre de regalías.</p></td>
</tr>
<tr>
  <td height="32" colspan="2" align="left"><h2><strong>Caracter&iacute;sticas:</strong></h2></td>
</tr>
<tr><td colspan="2" align="left"><div align="justify">
      <ul>
        <li>Independiente  de hardware, utiliza datos de mediciones de cualquier dispositivo</li>
        <li>Libre de regalías</li>
        <li>Operaciones  FFT de canal sencillo</li>
        <ul>
          <li>Espectro</li>
          <li>Auto Espectro</li>
          <li>Densidad espectral de potencia</li>
        </ul>
        <li>Operaciones  FFT de canal doble</li>
        <ul>
          <li>Funciones de frecuencia de respuesta (FRF):  Inertancia, Movilidad, Conformidad, Masa Aparente, Impedancia, Rigidez Dinámica,  Estimadores H1, H2 y H3</li>
          <li>Funciones de Espectro Cruzado: Espectro  Cruzado, Densidad de Espectro de Potencia Cruzado (Cross PSD)</li>
        </ul>
        <li>Tipos de  Ventaneo</li>
        <ul>
          <li>Rectangular</li>
          <li>Hamming</li>
          <li>Hanning</li>
          <li>Blackman</li>
          <li>Blackman Harris</li>
          <li>Bartlett</li>
          <li>Exponencial</li>
          <li>Flat Top</li>
          <li>Cosine Taper</li>
          <li>Force</li>
        </ul>
        <li>Tipos de  Escalado (db, Linear) y Valores de Escalado (Pico, Pico-Pico, RMS)</li>
        <li>Tipos de Integración</li>
        <ul>
          <li>Ninguno para aceleración</li>
          <li>Sencillo para Velocidad</li>
          <li>Doble para Desplazamiento</li>
        </ul>
        <li>Señales Métricas</li>
        <ul>
          <li>Distorsión Armónica (THD)</li>
          <li>Rango de Señal a Ruido (SNR)</li>
          <li>Señal a Ruido y Distorsión (SINAD)</li>
          <li>Rango Dinámico Libre de Espurio (SFDR)</li>
          <li>Entrada bajo Escala Total (IBF)</li>
          <li>Numero de Bits Efectivos (ENOB) </li>
        </ul>
      </ul>
      <ul>
        
        <div align="center"></div>
    </ul>
</div></td></tr>
<tr><td colspan="2" align="center"><img src="images/shopping_cart.png" alt="Ir a Tienda" width="40" align="right" title="Ir a Tienda" border=0></td></tr>
<tr>
  <td colspan="2" align="left"><h2>Requerimientos de Sistema</h2>
    <ul>
      <li>Este componente trabaja bajo Windows XP (32-bit), Windows Vista (32-bit y 64-bit), Windows 7 (32-bit  y 64-bit), y Windows 8 (32-bit y 64-bit), usando Visual Studio 2005 a 2012 y .NET Framework 2.0 a 4.5. </li>
    </ul>
    <h2>Hardware Soportado</h2>
    <p>Es independiente de Hardware </p>
<p align="center"><br>
  </p></td>
  </tr>
<tr>
  <td height="18" colspan="2" align="left"><h2>&nbsp;</h2></td>
  </tr>
<tr>
  <td width="50%" align="left"><h2 align="center">Descargar Folleto Informativo</h2> </td>
  <td width="50%" align="center"><h2>Descargar Software de <strong>PRUEBA</strong></h2></td>
</tr>
<tr>
  <td width="50%" align="center"><a href="https://datatranslation.box.com/shared/static/7zh11be0frbwx0zxko6e.pdf"><img src="imagenes/iconpdf.jpg" alt="Manual de Usuario" width="30" height="28" title="Manual de Usuario"/></a></td>
  <td width="50%" align="center" valign="middle"><a href="http://www.datatranslation.com/Software-Downloads/Download-Signal-Processing-Library"><img src="imagenes/download.png" width="30" height="30" alt="Descargar"/>Biblioteca de Componentes Procesamiento de Señales para .NET</a></td>
  </tr>
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>

