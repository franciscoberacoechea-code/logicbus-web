<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html lang = "es">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

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
    <title>TM Tiny: Módulos de Adquisición de datos remotos DCON/RS-485
    </title>
    <meta name="description" content="La serie tM es una familia de pequeños modulos de adquisicion y control de datos de red que proporcionan funciones de E/S digitales como entrada digital">

    <meta name="keywords" content="RS-485, LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, Modulos de E/S RS-485, Modbus RTU, I-7000, M-7000, RU-87Pn, Familia Z, Dispositivos de conversion RS-232/422/485, LBVR1706, LBVR1718, LBCR1706">

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

          <div class="ruta_productos">
            <a href="productos">Productos</a>-&gt;<a href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a> -&gt;tM Tiny <br>
          </div>

          <h1>TM Tiny: M&oacute;dulos de Adquisici&oacute;n de datos remotos por medio del protocolo DCON/RS-485.</h1>
          <br><br>
          <p>La serie tM es una familia de pequeños módulos de adquisición y control de datos de red que proporcionan funciones de E/S digitales como entrada digital aislada de foto, contacto de relé, relé photoMOS y salida de colector abierto. Los módulos se pueden controlar de forma remota a través de un bus serie <a href="https://www.logicbus.com.mx/convertidores_info#RS-485">RS-485</a> con protocolos DCON y Modbus RTU. La velocidad de transmisión del puerto RS-485 es seleccionable hasta 115.200 bps. La serie tM se integra perfectamente con HMI, <a href="https://www.logicbus.com.mx/scada">SCADA</a>, <a href="https://www.logicbus.com.mx/plc">PLC</a> y otros sistemas de software.
            <br><br>
            La serie tM ofrece Watchdog Dual: watchdog de módulo y watchdog host de modo que el módulo automáticamente reiniciará el microprocesador cuando el módulo se bloquea y la salida del módulo puede ir al estado predefinido de valor seguro cuando el host falla. La serie tM se ofrece en un increíble factor de forma pequeña y se puede instalar fácilmente en cualquier lugar, incluso directamente incrustado en una máquina. Está equipado con dos conectores de bloque de terminales extraíbles para facilitar el cableado.</p>
          <br><br>


       
          <div class="rwd table-responsive" style="display: flex;  align-items: center; justify-content: center;">
            <table class="rwd_auto">
              <thead>
                <tr bgcolor="#FFAD33">
                  <td colspan="5"><strong>TM Tiny anal&oacute;gicos</strong></td>
                </tr>     
                <tr bgcolor="#7598FF">
                  <td width="83"><strong>Modelo</strong></td>
                  <td width="66"><strong>Canal</strong></td>
                  <td width="352"><strong>Entrada de corriente y voltage</strong></td>
                  <td width="108"><strong>Sink/Source</strong></td>
                  <td width="91"><strong>RoHS</strong></td>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-AD5" target="_blank"><img src="imagenes/02/tM-AD5.png" alt="Módulo de E/S analógicas:tM-AD5" title="Módulo de E/S analógicas:tM-AD5" width="60" height="70" border="0"></a><br><a href="tM-AD5" target="_blank">tM-AD5</a></strong></td>
                  <td>5</td>
                  <td>+/- 1V, +/- 2.5V, +/- 5V, +/- 10V</td>
                  <td><center><strong>--</strong></center></td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>

                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-AD5C" target="_blank"><img src="imagenes/02/tM-AD5C.png" alt="Módulo de E/S analógicas:tM-AD5C" title="Módulo de E/S analógicas:tM-AD5C" width="70" height="70" border="0"></a><br><a href="tM-AD5C" target="_blank">tM-AD5C</a></strong></td>
                  <td>5</td>
                  <td>+/- 20 mA, 0 ~ 20 mA, 4 ~ 20 mA</td>
                  <td><center><strong>--</strong></center></td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>

                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-AD8" target="_blank"><img src="imagenes/02/TM-AD8.png" alt="Módulo de E/S analógicas:tM-AD8" title="Módulo de E/S analógicas:tM-AD8" width="70" height="70" border="0"></a><br><a href="tM-AD8" target="_blank">tM-AD8</a></strong></td>
                  <td>8</td>
                  <td>0~625 mV, 0~1,25 V, 0 a 2,5 V, 0 a 5 V, 0 a 10 V</td>
                  <td><center><strong>--</strong></center></td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>

                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-AD8C" target="_blank"><img src="imagenes/02/tM-AD8C.png" alt="Módulo de E/S analógicas:tM-AD8C" title="Módulo de E/S analógicas:tM-AD8C" width="70" height="70" border="0"></a><br><a href="tM-AD8C" target="_blank">tM-AD8C</a></strong></td>
                  <td>8</td>
                  <td>0~20 mA, 4~20 mA</td>
                  <td><center><strong>--</strong></center></td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>

                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-TH8" target="_blank"><img src="imagenes/02/tM-TH8.png" alt="Módulo de E/S analógicas:tM-TH8" title="Módulo de E/S analógicas:tM-TH8" width="50" height="70" border="0"></a><br><a href="tM-TH8" target="_blank">tM-TH8</a></strong></td>
                  <td>8</td>
                  <td><center><strong>--</strong></center></td>
                  <td>Termistor</td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>

                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-DA1P1R1" target="_blank"><img src="imagenes/02/tM-DA1P1R1.png" alt="Módulo de E/S analógicas: tM-DA1P1R1" title="Módulo de E/S analógicas: tM-DA1P1R1" width="60" height="70" border="0"></a><br><a href="tM-DA1P1R1" target="_blank">tM-DA1P1R1</a></strong></td>
                  <td>1</td>
                  <td>0 ~ 10 V, 0 ~ 20 mA, 4 ~ 20 mA</td>
                  <td>Contacto húmedo<br>Relay de potencia</td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>

                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-AD4P2C2" target="_blank"><img src="imagenes/02/tM-AD4P2C2.png" alt="Módulo de E/S analógicas:tM-AD4P2C2" title="Módulo de E/S analógicas:tM-AD4P2C2" width="70" height="70" border="0"></a><br><a href="tM-AD4P2C2" target="_blank">tM-AD4P2C2</a></strong></td>
                  <td>2+2</td>
                  <td>Â±1 V, Â±2.5V, Â±5V, Â±10V Â±20mA, 0~ 20mA, 4 ~ 20mA</td>
                  <td>Contacto húmedo<br>Colector abierto</td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>
              </tbody>     
            </table> 
          </div>

          <br>

          <div class="rwd table-responsive" style="display: flex;  align-items: center; justify-content: center;">
            <table class="rwd_auto">
              <thead>
                <tr bgcolor="#FFAD33">
                  <td colspan="8"><strong>TM Tiny Digitales </strong></td>
                </tr> 

                <tr bgcolor="#7598FF">
                  <td width="100" rowspan="2"><div align="center"><strong>Modelo</strong></div></td>
                  <td colspan="3"><div align="center"><strong>Entrada Digital</strong></div></td>
                  <td colspan="3"><div align="center"><strong>Salida Digital</strong></div></td>
                  <td width="93" rowspan="2"><div align="center"><strong>RoHS</strong></div></td>
                </tr>

                <tr bgcolor="#7598FF">
                  <td width="78"><strong>Canal</strong></td>
                  <td width="73"><strong>Tipo</strong></td>
                  <td width="101"><strong>Sink/Source</strong></td>
                  <td width="49"><strong>Canal</strong></td>
                  <td width="96"><strong>Tipo</strong></td>
                  <td width="96"><strong>Sink/Source</strong></td>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-P4A4" target="_blank"><img src="imagenes/02/tM-AD8C.png" alt="Módulo de E/S Digital: tM-P4A4" title="Módulo de E/S Digital: tM-P4A4" width="70" height="70" border="0"></a><br><a href="tM-P4A4" target="_blank">tM-P4A4</a></strong></td>
                  <td>4</td>
                  <td>H&uacute;medo</td>
                  <td>Sink</td>
                  <td>4</td>
                  <td>Colector abierto</td>
                  <td>Source</td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-P4C4" target="_blank"><img src="imagenes/02/TM-AD8.png" alt="Módulo de E/S Digital: tM-P4C4" title="Módulo de E/S Digital: tM-P4C4" width="70" height="70" border="0"></a><br><a href="tM-P4C4" target="_blank">tM-P4C4</a></strong></td>
                  <td>4</td>
                  <td>H&uacute;medo</td>
                  <td>Source</td>
                  <td>4</td>
                  <td>Colector abierto</td>
                  <td>Sink</td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><a href="tM-P8" target="_blank"><img src="imagenes/02/tM-P8.png" alt="Módulo de E/S Digital: tM-P8" title="Módulo de E/S Digital: tM-P8" width="50" height="70" border="0"></a><br><a href="tM-P8" target="_blank"><strong>tM-P8</strong></a></td>
                  <td>8</td>
                  <td>H&uacute;medo</td>
                  <td>Sink/Source</td>
                  <td><strong>--</strong></td>
                  <td><strong>--</strong></td>
                  <td><strong>--</strong></td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><strong><a href="tM-P3R3" target="_blank"><img src="imagenes/02/tM-P3R3.png" alt="Módulo de Salida de relay y entrada digital: tM-P3R3" title="Módulo de Salida de relay y entrada digital: tM-P3R3" width="70" height="70" border="0"></a><br><a href="tM-P3R3" target="_blank">tM-P3R3</a></strong></td>
                  <td>3</td>
                  <td>Relay de potencia</td>
                  <td>Forma A (SPST N.O.)<br>5.0 A/canal</td>
                  <td>3</td>
                  <td>H&uacute;medo</td>
                  <td>Sink/Source</td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><a href="tM-R5" target="_blank"><img src="imagenes/02/tM-R5.png" alt="Módulo de E/S Digital: tM-R5" title="Módulo de E/S Digital: tM-R5" width="70" height="70" border="0"></a><br><a href="tM-R5" target="_blank"><strong>tM-R5</strong></a></td>
                  <td>5</td>
                  <td>Relay de potencia</td>
                  <td>Forma A (SPST N.O.)<br>5.0 A/canal</td>
                  <td><strong></strong></td>
                  <td><strong></strong></td>
                  <td><strong></strong></td>
                  <td><img src="https://www.logicbus.com.mx/imagenes/02/RoHS.gif" width="90" height="50" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"></td>
                </tr>
              </tbody>     
            </table>
          </div>

          <br>


        </div>
      </div>
    </div> 

    <?
    abajo();
    ?>
  </body>
</html>