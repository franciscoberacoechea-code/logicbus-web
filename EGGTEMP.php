<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html lang="es" >
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <link rel = "alternate" href = "https://www.logicbus.com.mx/" hreflang = "es" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'AW-1007518778');
    </script>
    <title>Data Logger - Temperature - EggTemp&#9474; Logicbus S.A de C.V.
    </title>
    <meta name="description" content="El EggTemp esta especialmente diseñado para medir y registrar la temperatura de los huevos durante su transportación, almacenaje e incubación.">

    <meta name="keywords" content="LogicBus, M&El EggTemp esta especialmente diseñado para medir y registrar la temperatura de los huevos durante su transportación, almacenaje e incubación. El registrador responde termalmente en un ambiente de la misma manera que lo hace un huevo, simulando la experiencia de la temperatura del producto actual.eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">

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

      function menu_actual() {
        document.getElementById("productos").className = "dropdown active";
      }
      ;
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

          <a href="productos">Productos</a>-&gt;<a href="datalogger">Registradores</a>-&gt;<a href="temperature_logger">Registradores de Temperatura</a>-&gt;<a href="temperature_autonomos">Temperatura - Aut&oacute;nomos</a>-&gt;EggTemp

          <h1><br>EggTemp</h1>

          <div align="center">
            <img src="imagenes/09/eggtemp.jpg" alt="EggTemp" title="EggTemp" class="image_productos" width="20%">
          </div><br>

          <center><strong>Registrador de temperatura en forma de huevo, rango de 0~50°C, memoria para 32, 767 mediciones y protección IP68. Incluye certificado NIST.</strong></center>

          <div align="right">
            <a href="https://tienda.logicbus.com.mx/EGGTEMP_p_4280.html" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" alt="Comprar"></a>
          </div> <br>

          <p>EggTemp está específicamente diseñado para medir y registrar la temperatura de los huevos durante el envío, el almacenamiento y la incubación. El registrador responde térmicamente a un ambiente de la misma manera que un huevo real, simulando la experiencia de temperatura del producto real. 
            <br><br>
            El EggTemp es sumergible y puede medir temperaturas de hasta +60 ºC. Tiene una batería reemplazable por el usuario, que normalmente dura hasta 1 año. La memoria no volátil puede contener hasta 32.767 lecturas y retendrá datos incluso si la batería se descarga. 
            <br><br>
            El software de registro de datos de MadgeTech ofrece una manera fácil de analizar datos. Los datos se pueden ver en grados Celsius o Fahrenheit, y en formato gráfico, resumen o datos. Para un análisis más detallado, los datos también se pueden exportar a Excel.
          </p><br>

          <strong>Características:</strong>
          <ul>
            <li>Reutilizable.</li>
            <li>Sumergible.</li>
            <li>Hora de inicio programable.</li>
            <li>Fácil de usar.</li>
            <li>Rango de temperatura de 0 a +60°C.</li>
            <li>Precisión de ± 0.5°C.</li>
            <li>Resolución de 0.1°C.</li>
          </ul>

          <br><br>

          <div align="center">
            <table width="80%" align="center" style="border: 1px solid black;" cellpadding="0" cellspacing="0">      
              <tr  bgcolor="#FFAD33">      
                <td colspan="2" align="center" style="border: 1px solid black;"><strong>Technical Specifications</strong></td>      
              </tr>
              <tr>
                <td colspan="2" style="border: 1px solid black;" valign="middle" bgcolor="#7598FF"><strong>SPECIFICATIONS</strong></td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Temperature Sensor</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">Internal Semiconductor</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Temperature Range</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">0 ºC to +60 ºC (+32 ºF to +140 ºF)</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Temperature Resolution</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">0.1 ºC</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Calibrated Accuracy</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">±0.5 ºC</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Alarm</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">Programmable high and low limits; Alarm is activated when temperature reaches or exceeds set limits.</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Activity Indicator</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">Green LED blinks to indicate device has been started, red LED blinks if an alarm condition exists.</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Calibration</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">Digital calibration through software.</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Calibration Date</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">Automatically recorded within device.</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Real Time Recording</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">May be used with PC to monitor and record data in real time.</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Memory</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">32,767 readings</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Reading Rate</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">1 reading every 2 seconds up to 1 reading every 12 hours.</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Start Modes</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">Software programmable immediate start or delay start up to six months in advance.</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Data Format</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">Date and time stamped ºC, ºF, K, ºR</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Battery Type</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">2 - 1.55V SR1154W batteries included;<br>user replaceable.</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Battery Life</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">1 year typical at 25 ºC, 1 minute reading intervals.</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Time Accuracy</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">±1 minute/month at 20 ºC</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Computer Interface</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">PC serial or USB (interface cable required);<br>38,400 baud</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Software</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">XP SP3/Vista/Windows 7/Windows 8</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Operating Environment</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">0 ºC to +60 ºC (+32 ºF to +140 ºF),<br>0 %RH to 100 %RH</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Submersible</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">Up to 150 ft., IP68</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Dimensions</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">2.25 in x 1.68 in dia.<br>(57.15 mm x 42.67 mm dia.)</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Weight</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">2.02 oz (60 g)</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Material</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">Enclosure: HDPE<br>Logger: 303 Stainless Steel</td>
              </tr>
              <tr>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">Approvals</td>
                <td colspan="1" style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">CE Compliant</td>
              </tr>
            </table>
          </div> 
          <br>

          <div align="center"><strong>Accesorios:</strong><br></div>

          <center><a href="accesorios#ifc202"><img src="imagenes/09/Accesorios/ifc202.jpg" alt="IFC202 - USB Interface Cable with mini-plug & Software Package" width="200" class="image_productos"><br>IFC202</a></center><br><br>

          <div align="center"><strong>Software</strong><br></div>

          <center><img src="imagenes/09/Temperatura/sw_eggtemp.jpg" alt="Software Eggtemp" class="image_productos"></center>



          <br><br>

        </div>
      </div>
    </div>
  <?
  abajo();
  ?>
</body>
</html>

