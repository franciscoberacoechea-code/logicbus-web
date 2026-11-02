<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
  </script>
  <title>LogicBus/Productos/Adquisicion de datos/temperatura via internet/WEB-TEMP</title>
  <meta name="description"
    content="WEB-TEMP: dispositivo de medici&oacute;n de temperatura v&iacute;a Web que provee 8 entradas de temperatura y soporta los tipos de sensores m&aacute;s comunes">
  <meta name="keywords"
    content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Datos, WEB, TEMP, Device, bus, pickering, tektronix, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M�xico, Estado de Mexico, Michoac�n, Michoacan, Morelos, Nayarit, Nuevo Le�n, Nuevo Leon, Oaxaca, Puebla, Quer�taro, Queretaro, Quintana Roo, San Luis Potos�, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat�n, Yucatan, Zacatecas">
  <meta name="revisit after" content="14 days">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
  <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="language" content="Spanish">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="images/favicon.ico">
  <link href="libreria/diagramas.css" rel="stylesheet">
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

    function menu_actual() {
      document.getElementById("productos").className = "dropdown active";
    };
  </script>

  <style>
    * a {
      cursor: pointer;
    }

    p {
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
        <table width="100%" border="0">
          <tr>
            <td align="center">
              <div align="left"><a href="productos">Productos</a>-&gt;<a
                  href="ethernet_daq">Ethernet</a>-&gt;WEB-TEMP</div>
            </td>
          </tr>
          <tr>
            <td align="center">
              <h2>WEB-TEMP</h2>
            </td>
          </tr>
          <tr>
            <td align="center"><img src="imagenes/01/web-tc.jpg" border="0" alt="WEB-TEMP"></td>
          </tr>
          <tr>
            <td>
              <div align="right"><a href="#" title="Ir a Tienda"><img src="images/shopping_cart.png" border=0
                    onClick="atienda()"></a></div>
            </td>
          </tr>
          <tr>
            <td>&nbsp;

            </td>
          </tr>
          <tr>
            <td align="left">
              <div align="justify">
                Tarjeta con 8 canales de entrada de termopar para adquisici&oacute;n de temperatura v&iacute;a WEB.
                Muestra los datos de temperatura en su propia p&aacute;gina web.<br>
                <br>
                La WEB-TEMP es un dispositivo de medici&oacute;n de temperatura v&iacute;a Web que provee 8 entradas de
                temperatura y soporta los tipos de sensores m&aacute;s comunes (Termopares, RTDs, Termistores y Sensores
                de temperatura tipo semiconductor).<br>
                <br>
                La WEB-TEMP tiene integrado su propio servidor web, que permite al usuario en cualquier parte del mundo,
                monitorear la temperatura v&iacute;a Internet.<br>
                <br>
                La WEB-TEMP brinda una flexibilidad en mediciones de temperatura debido a que cada canal puede
                monitorear cualquiera de los tipos de entrada soportados. Esto permite mezclar y seleccionar el sensor
                de medici&oacute;n adecuado sin la necesidad de un acondicionamiento de se&ntilde;al adicional
                <br><br>
                La WEB-TC ofrece la mayor precisi&oacute;n en mediciones de temperatura posible, esto debido a que la
                precisi&oacute;n de las mediciones electr&oacute;nicas internas sobrepasan las especificaciones de
                precisi&oacute;n de los sensores de temperatura. En otras palabras, la WEB-TC obtiene de los sensores
                las mejores mediciones que estos pueden dar.
                <br>
                <br>
                La combinaci&oacute;n de la WEB-TEMP con el Software DAQ totalmente gratuito te brinda una
                soluci&oacute;n completa de adquisici&oacute;n de datos que te ayudan a realizar mediciones de
                temperatura en minutos.<br>
                <br>
                <br>
                * Garant�a de por vida.- Solo aplica para defectos de fabricaci�n.
                <br><br>
                * Garant�a para ambientes rudos.- Tambi�n aplica durante toda la vida, pero tendr� un cargo del 50% del
                precio de venta del producto. Aqu� el da�o podr� ser una descarga est�tica, el�ctrica, un golpe,
                vibraci�n, etc.
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div align="justify"><br><br>
                <strong>Hardware:</strong>
                <ul>
                  <li>24-bits de resoluci&oacute;n</li>
                  <li>8 canales de entrada</li>
                  <li>4 tipos de sensores: </li>
                  <ul>
                    <li>Termopares J, K, R, S, T, N, E, y B </li>
                    <li>RTDs (2, 3 o 4 hilos) </li>
                    <li>Termistores </li>
                    <li>Sensores de temperatura tipo semiconductor </li>
                  </ul>
                  <li>Servidor/Web incorporado</li>
                  <li>Sensor de temperatura de ambiente incorporado </li>
                  <li>Entradas de temperatura independientes </li>
                  <li>8 bits de entrada/salida digitales</li>
                </ul>
                <strong>Software:</strong>
                <ul>
                  Incluye el CD MCC DAQ con:
                  <li>Software Graficador y Registrador GRATUITO - <a
                      href="https://www.logicbus.com.mx/prod_tracerdaq2">TracerDAQ&trade; 2.0</a></li>
                  <li>Librerias y ejemplos para C, C++, VB, Delphi, etc </li>
                  <li> VIs y ejemplos para LabVIEW &trade; </li>
                  <li> Software Configurador - InstaCal</li>
                  <li>Requiremientos del Sistema - <a href="pdf/Requerimientos%20para%20MCC.pdf">Descargar PDF</a> </li>
                  <br>
                  <br>
                  Completamente soportada por:
                  <li>DASYLab&reg;</li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
              <div align="center"><a href="pdf/01/WEB-TEMP.pdf" target="_blank"><img src="imagenes/iconpdf.jpg"
                    width="30" height="30" border="0" alt="Ver archivo pdf"> <br>
                  Ver archivo pdf </a></div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <?
  abajo();
  ?>
</body>

</html>