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
  <title>Logicbus/Productos/Voltage</title>
  <meta name="description" content="Registradores de voltaje de uso general">
  <meta name="keywords"
    content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, productos, data, logger, data logger, registradores, registrador, voltage, voltaje, uso, general, entrada, PC, autonomos, tiempo, real">
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
        <table width="748" border="0">
          <tr>
            <td colspan="5"><a href="productos">Productos</a>-&gt;<a href="datalogger">Registradores</a>-&gt;<a
                href="voltage_logger">Voltaje</a>-&gt;Para PC con an&aacute;lisis en tiempo real</td>
          </tr>
          <tr>
            <td colspan="5">
              <h2 align="center">Voltaje de Entrada de Uso General</h2>
            </td>
          </tr>
          <tr>
            <th colspan="5">
              <table width="100%" border="1" cellpadding="0" cellspacing="0">
                <tr bgcolor="#666666">
                  <td width="16%">
                    <div align="center" class="Estilo1">Producto</div>
                  </td>
                  <td width="14%">
                    <div align="center" class="Estilo1">Canales</div>
                  </td>
                  <td width="17%">
                    <div align="center" class="Estilo1">Rango de entrada </div>
                  </td>
                  <td width="16%">
                    <div align="center" class="Estilo1">Resoluci&oacute;n </div>
                  </td>
                  <td width="37%">
                    <div align="center" class="Estilo1">Descripci&oacute;n</div>
                  </td>
                </tr>
                <tr bgcolor="#999999">
                  <td>
                    <div align="left"><strong><a href="ADC-10-12">ADC-10/12</a> </strong></div>
                  </td>
                  <td>
                    <div align="center">1 </div>
                  </td>
                  <td>
                    <div align="center">0 a 5 V</div>
                  </td>
                  <td>
                    <div align="center">8 or 12 bits </div>
                  </td>
                  <td>
                    <div align="left">Bajo costo </div>
                  </td>
                </tr>
                <tr bgcolor="#999999">
                  <td>
                    <div align="left"><strong><a href="ADC-16">ADC-16</a> </strong></div>
                  </td>
                  <td>
                    <div align="center">8 </div>
                  </td>
                  <td>
                    <div align="center">&#177;2.5 V </div>
                  </td>
                  <td>
                    <div align="center">16 bits + sign </div>
                  </td>
                  <td>
                    <div align="left">Alta resoluci&oacute;n y precisi&oacute;n </div>
                  </td>
                </tr>
                <tr bgcolor="#CCCCCC">
                  <td>
                    <div align="left"><strong><a href="ADC-20-24">ADC-20</a> </strong></div>
                  </td>
                  <td>
                    <div align="center">8 </div>
                  </td>
                  <td>
                    <div align="center">&#177;2.5 V </div>
                  </td>
                  <td>
                    <div align="center">20 bits </div>
                  </td>
                  <td>
                    <div align="left">Alta resoluci&oacute;n, entradas diferenciales </div>
                  </td>
                </tr>
                <tr bgcolor="#999999">
                  <td>
                    <div align="left"><strong><a href="ADC-20-24">ADC-24</a> </strong></div>
                  </td>
                  <td>
                    <div align="center">16 </div>
                  </td>
                  <td>
                    <div align="center">&#177;2.5 V </div>
                  </td>
                  <td>
                    <div align="center">24 bits </div>
                  </td>
                  <td>
                    <div align="left">Alta resoluci&oacute;n, entradas diferenciales</div>
                  </td>
                </tr>
                <tr bgcolor="#CCCCCC">
                  <td>
                    <div align="left"><strong><a href="PT-104">PT-104</a> </strong></div>
                  </td>
                  <td>
                    <div align="center">4 </div>
                  </td>
                  <td>
                    <div align="center">0 a 2.5 V </div>
                  </td>
                  <td>
                    <div align="center">24 bits </div>
                  </td>
                  <td>
                    <div align="left">Alta resoluci&oacute;n </div>
                  </td>
                </tr>
                <tr bgcolor="#999999">
                  <td>
                    <div align="left"><strong><a href="tarjeta-daq-temperatura-tc-08">TC-08</a> </strong></div>
                  </td>
                  <td>
                    <div align="center">8 </div>
                  </td>
                  <td>
                    <div align="center">&#177;70 mV </div>
                  </td>
                  <td>
                    <div align="center">20 bits </div>
                  </td>
                  <td>
                    <div align="left">Alta resoluci&oacute;n </div>
                  </td>
                </tr>
              </table>
            </th>
          </tr>
          <tr>
            <td colspan="5">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="5">
              <h2 align="center">Entradas de Voltaje de Alta Velocidad</h2>
            </td>
          </tr>
          <tr>
            <th colspan="5">
              <table width="100%" border="1" cellspacing="0" cellpadding="0">
                <tr bgcolor="#666666">
                  <td width="20%">
                    <div align="center" class="Estilo1">Producto</div>
                  </td>
                  <td width="19%">
                    <div align="center" class="Estilo1">Frecuencia de muestreo </div>
                  </td>
                  <td width="14%">
                    <div align="center" class="Estilo1">Resoluci&oacute;n</div>
                  </td>
                  <td width="47%">
                    <div align="center" class="Estilo1">Descripci&oacute;n</div>
                  </td>
                </tr>
                <tr bgcolor="#999999">
                  <td>
                    <div align="left"><strong><a href="PicoScope-3204-3205-3206">PicoScope 3000</a></strong></div>
                  </td>
                  <td>
                    <div align="center">10 GS/s</div>
                  </td>
                  <td>
                    <div align="center">8 bits </div>
                  </td>
                  <td>
                    <div align="left">Osciloscopio de alta velocidad </div>
                  </td>
                </tr>
              </table>
            </th>
          </tr>
          <tr>
            <th width="128">&nbsp;</th>
            <th width="113">&nbsp;</th>
            <th width="97">&nbsp;</th>
            <th width="388" colspan="2">&nbsp;</th>
          </tr>
          <tr>
            <th>&nbsp;</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <th>&nbsp;</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <th>&nbsp;</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <th>&nbsp;</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <th>&nbsp;</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  </div>
  <?
  abajo();
  ?>
</body>

</html>