<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Software: | Logicbus</title>
<meta name="description" content="">
<meta name="keywords" content="">

<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="libreria/ie-emulation-modes-warning.js"></script>
<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
      };
</script>

<style>
  h1{
    text-align: center;
  }
   p{
    text-align: justify;
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
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<a href="productos">Productos</a>-&gt;<a href="software">Software y herramientas de desarrollo</a>-&gt; DT8837 DAQ

<h1>Adquisición de Datos para Sonido DT8837</h1>

<div align="center">
  <img src="imagenes/dt8837_device.jpg" alt="DT8837" class="resp" title="DT8837">
</div>

<p>Dispositivo de Adquisición de Datos para Sonido y Vibración  tipo Ethernet<br>El DT8837 es un módulo multicanal de alta precisión ideal  para las mediciones de sonido y vibración. Todos los canales de E/S están completamente  aislados uno de otro y de la computadora, permitiendo muestrear datos libres de  ruido en ambientes ruidosos. Cuatro entradas para sensor IEPE (ICP) de 24 bits,  una salida de estímulo de 24 bits Digital/Análoga, un tacómetro de 31 bit  sincronizado para proveer flujo de datos que sea comparado a tiempo en campo o  para su uso en laboratorio.</p>

<strong>Características</strong>
  <ul>
    <li>4 Canales simultáneos  de 24 bit Delta-Sigma A/D</li>
    <li>Soporte para entradas IEPE, incluyendo el uso de  fuentes de corriente de 4 mA con 24 V de voltaje, y conector AC y DC</li>
    <li>Hasta 52.7 kS/s/ch de frecuencia de muestreo</li>
    <li>Un convertidor de 24 bit D/A</li>
    <li>Múltiple sincronización de módulos a través del Bus  de disparo para expandir el canal</li>
    <li>Compatible con la aplicación QuickDAQ</li>
    <li>El controlador IVI-COM trabaja con cualquier  ambiente de desarrollo de 32 bits que soporte programación COM incluyendo  MATLAB o LabVIEW</li>
  </ul>
</div></td></tr>
<tr>
  <td colspan="3" align="center">&nbsp;</td>
</tr>
<tr>
  <td height="32" align="center"><h2><strong>Diagrama DT8837</strong></h2></td>
  <td width="429" height="32" align="center"><p><strong>Video Sonido y Vibración</strong></p></td>
  <td width="442" height="32" align="center"><strong>Diseño DT8837</strong></td>
</tr>
<tr><td width="33%" align="center">
  <a href="http://www.datatranslation.eu/frontend/products/img/l/DT8837_block.jpg"><img src="imagenes/diagrama_dt8837.jpg" alt="Diagrama DT8837" class="resp" title="Diagrama DT8837"/></a>
</td>
  <td width="33%" align="center"><a href="http://youtu.be/B1yiKsJgIL8"><img src="imagenes/video.jpg" alt="Ir a Video" class="resp" title="Ir a Video"/></a></td>
  <td width="34%" align="center"><a href="http://www.datatranslation.eu/frontend/products/img/l/DT8837_Layout_576_720.jpg"><img src="imagenes/dt8837_layout.jpg" alt="Diseño DT8837" class="resp" title="Diseño DT8837"/></a></td>
</tr>
<tr>
  <td colspan="3"><h2><strong>Software Compatible</strong></h2></td></tr>
<tr>
  <td width="295" align="left"><a href="quickdaq"><img src="imagenes/disk-24.png" alt="Descargar" title="Descargar"/><strong><a href"quickdaq.php">QuickDAQ</strong></a></td>
  <td colspan="2">&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><p>QuickDAQ permite adquirir, visualizar y registrar datos desde dispositivos Data Translation que soporten salidas analogicas.<br>
  </p></td>
</tr>
<tr>
  <td align="left"><a href="software_DT8837"><img src="imagenes/disk-24.png" alt="Descargar" title="Descargar"/><strong>Software  DT8837</strong></a></td>
  <td colspan="2">&nbsp;</td>
</tr>
<tr>
  <td colspan="3">Instala controladores y software para productos de adquisición de datos DT8837</td>
</tr>
<tr>
  <td colspan="3"><a href="https://www.logicbus.com.mx/senalesnet"><img src="imagenes/disk-24.png" alt="Descargar" title="Descargar"/>
  <strong>Componentes de Procesamiento de Señales para .NET</strong></a></td>
</tr>
<tr>
  <td colspan="3">Ambiente de desarrollo para aplicaciones de procesamiento de señales</td>
</tr>
</table>
 </center>


<br><br>

      </div>
    </div>
   </div>
</div>
<?
 abajo();
?>
</body>
</html>