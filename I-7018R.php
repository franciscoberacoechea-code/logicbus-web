<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
    <title>ICPDAS - Adquisicion de datos, I-7000 Analógicos: I-7018R
    </title>
    <meta name="description" content="I-7018R Entrada de voltaje de 8 canales, entrada de corriente, módulo de adquisición de datos de entrada de termopar transmisible a través de RS-485">

    <meta name="keywords" content="Convertidores, protocolo, Serial, Asíncrono, Sincrono, Comunicacion, Repetidores, Hub, USB, Ethernet, Fibra Optica, tarjetas, CAN, DeviceNET, WAN, RS-232, RS-422, RS-485, RS-530, FR-Net, Baud Rate, Chip, UART, alámbrico, inalámbrico, PCI, bajo perfil, PCMCIA, ISA, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">

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

          <a href="productos">Productos</a>-&gt;<a href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a>-&gt;<a href="sub_data1">I-7000</a>-&gt;<a href="TABLAS_ANALOGICOS_I-7000">Anal&oacute;gico</a>-&gt;I-7018R

          <h1>7018R</h1>

          <div align="center">
            <img src="imagenes/02/i-7018r.gif" class="image_productos" width="200" alt="I-7018R" title="I-7018R"><br>
            <div align="right">
              <a href="https://www.logicbus.com.mx/EZDataLogger"><img src="imagenes/02/SOFTWARE EZDataLogger.gif" width="90" alt="Con Software Gratuito"></a>
              <img src="imagenes/02/RoHS.gif" name="image1" width="90" id="image1" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"><a href="https://tienda.logicbus.com.mx/I-7018R_p_1659.html" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" border=0 alt="Comprar"></a>
            </div><BR>
            <strong>Módulo DAQ con 8 entradas análogas para termopar, voltaje y corriente.</strong><br>
          </div>
          <br>

          <p>El I-7018R es un módulo de entrada analógica con un mecanismo de protección muy excelente, donde más de la protección del voltaje es de hasta 240 Vrms.   Su tipo de entrada incluye la corriente, voltaje, así como termopar.   Naturalmente, I-7018R es una versión mejorada de la I-7018 , la única diferencia es que el I-7018R es mucho más adecuado para el entorno de la crítica dura!   Por otra parte, una característica que acaba de agregar para la detección de termopar abierto. Tiene 4 KV de protección ESD.   La utilidad DCON puede ayudar a los usuarios a configurar y probar los módulos I-7018R.   Un montón de funciones de biblioteca y programas de demostración se proporcionan para que los usuarios desarrollen programas fácilmente en Windows, Linux y sistemas operativos DOS.   Los usuarios pueden montar los módulos en un carril DIN, panel o pared.</p><BR>



          <div align="center">
            <table align="center" border="0" width="90%" style="border: 1px solid black;">
              <tbody>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#FFAD33" colspan="3" align="center"><strong>Especificaciones</strong></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#7598FF" colspan="2" align="center"><strong>Entrada analógica</strong></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Los canales de entrada</td>
                  <td style="border: 1px solid black;" colspan="1">8</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Tipo de entrada</td>
                  <td style="border: 1px solid black;" colspan="1">Termistor</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Tipo de termistor</td>
                  <td style="border: 1px solid black;" colspan="1">+/-15 MV, +/-50 mV, +/-100 mV, +/-500 mV, + /-1V, + /-2.5V, +/-20 mA&nbsp;<br>(Requiere el exterior 125 ohmios)&nbsp;<br>Tipo de Termopar J, K, T, E, R, S, B, N, C, L, M</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Resolución</td>
                  <td style="border: 1px solid black;" colspan="1">16-bit</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Frecuencia de muestreo</td>
                  <td style="border: 1px solid black;" colspan="1">10 muestras/seg.</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Precisión</td>
                  <td style="border: 1px solid black;" colspan="1">+/-0,1% Del FSR</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Ancho de Banda</td>
                  <td style="border: 1px solid black;" colspan="1">15,7 Hz</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Deriva de cero</td>
                  <td style="border: 1px solid black;" colspan="1">+/-10 MV/° C</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Span la deriva</td>
                  <td style="border: 1px solid black;" colspan="1">+/-25 Ppm/° C</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Ancho de banda</td>
                  <td style="border: 1px solid black;" bgcolor="#FFFFFF">15,7 Hz</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Rechazo de modo común</td>
                  <td style="border: 1px solid black;" colspan="1" valign="middle">86 dB min.</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Rechazo de modo normal</td>
                  <td style="border: 1px solid black;" colspan="1" valign="middle">100 dB</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Impedancia de entrada</td>
                  <td style="border: 1px solid black;" bgcolor="#FFFFFF">&gt; 400k O</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Protección contra sobretensiones</td>
                  <td style="border: 1px solid black;" colspan="1" valign="middle">240 Vrms</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Detección de termopar abierto</td>
                  <td style="border: 1px solid black;" bgcolor="#FFFFFF">Sí</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Protección ESD</td>
                  <td style="border: 1px solid black;" colspan="-2" valign="middle">+/-4 KV</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Dentro del módulo de aislamiento, de campo a la lógica</td>
                  <td style="border: 1px solid black;" colspan="1" valign="middle">3000 V DC</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#7598FF" colspan="2" align="center"><strong>Interfaz</strong></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Interfaz</td>
                  <td style="border: 1px solid black;" align="left">RS-485</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Formato</td>
                  <td style="border: 1px solid black;" bgcolor="#FFFFFF">N, 8, 1</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Velocidad de transmisión</td>
                  <td style="border: 1px solid black;" bgcolor="#FFFFFF">1200 ~ 115200 bps</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#7598FF" colspan="2" align="center"><strong>Pantalla LED</strong></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC" colspan="2">Un LED como indicador de encendido/Comunicación</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#7598FF" colspan="2" align="center"><strong>Poder Energía</strong></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Entrada</td>
                  <td style="border: 1px solid black;" colspan="1" valign="middle">10 V DC ~ 30 V DC</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Consumo de energía</td>
                  <td style="border: 1px solid black;" colspan="1" valign="middle">1,8 W</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#7598FF" colspan="2" align="center"><strong>Ambiente</strong></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Temperatura de operación</td>
                  <td style="border: 1px solid black;" bgcolor="#FFFFFF">-25 ° C ~ +75 ° C</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Temperatura de almacenaje</td>
                  <td style="border: 1px solid black;" bgcolor="#FFFFFF">-40 ° C ~ +85 ° C</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC">Humedad</td>
                  <td style="border: 1px solid black;" bgcolor="#FFFFFF">10 ~ 95% RH, sin condensación</td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#7598FF" colspan="2" align="center"><strong>Dimensiones</strong></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black;" bgcolor="#CCCCCC" colspan="2" valign="middle">72 mm x 121 mm x 35 mm</td>
                </tr>
              </tbody>
            </table>
          </div>
          <br><br>

          <div align="center">
            <table width="50%" border="1" align="center" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td colspan="3" align="center" bgcolor="#FFAD33"><div align="center"><strong>Termopar de tipo (C) </strong></div></td>
                </tr>
                <tr bgcolor="#7598FF">
                  <td><div align="center"><strong>Tipo</strong></div></td>
                  <td><div align="center"><strong>Rango (&deg;C) </strong></div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">J </div></td>
                  <td><div align="center">-210 ~ +760 </div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">K </div></td>
                  <td><div align="center">-270 ~ +1372 </div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">T </div></td>
                  <td><div align="center">-270 ~ +400 </div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">E </div></td>
                  <td><div align="center">-270 ~ +1000 </div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">R </div></td>
                  <td><div align="center">0 ~ +1768 </div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">S </div></td>
                  <td><div align="center">0 ~ +1768 </div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">B </div></td>
                  <td><div align="center">0 ~ +1820 </div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">N </div></td>
                  <td><div align="center">-270 ~ +1300 </div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center">C </div></td>
                  <td><div align="center">0 ~ +2320 </div></td>
                </tr>
              </tbody>
            </table>
          </div>

          <br><br>

          <div align="center">
            <table width="65%"  border="1" align="center" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td colspan="4" bgcolor="#FF9900"><div align="center"><strong>Productos relacionados:</strong></div></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Fuente de energ&iacute;a (24V @ 1.5A)&nbsp;</td>
                  <td colspan="3" bgcolor="#FFFFFF"><div align="center"><a href="https://www.logicbus.com.mx/LBCSP-142-025-24">
                        <img src="imagenes/02/LBCSP-142-025-24.gif" class="img-responsive" width="45" alt="Fuentes de voltaje"></a></div>
                    <div align="center"><a href="https://www.logicbus.com.mx/LBCSP-142-025-24">LBCSP-142-025-24</a></div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC"><div align="left"><a href="https://www.logicbus.com.mx/conv1">Convertidores</a> y repetidores USB<br>RS-232, fibra &oacute;ptica<br>a RS-485</div></td>
                  <td bgcolor="#FFFFFF"><div align="center"><a href="https://www.logicbus.com.mx/USB_serial_async">
                        <img src="imagenes/02/I-7561.gif" class="img-responsive" width="45" alt="USB Serial Asíncrono"></a></div>
                    <div align="center"><a href="https://www.logicbus.com.mx/USB_serial_async">USB Serial- Asíncronos</a></div>
                  </td>
                  <td bgcolor="#FFFFFF"><div align="center"><a href="https://www.logicbus.com.mx/Interface_Converters">
                        <img src="imagenes/02/I-7520.gif" class="img-responsive" width="45" alt="Convertidores Seriales"></a></div>
                    <div align="center"><a href="https://www.logicbus.com.mx/Interface_Converters">Convertidores Seriales<br>RS-232/422/485</a></div>
                  </td>
                  <td bgcolor="#FFFFFF"><div align="center"><a href="https://www.logicbus.com.mx/fiber_optics">
                        <img src="imagenes/02/NS-200FT.gif" class="img-responsive" width="45" alt="Convertidores de buses de Fibra Óptica"></a></div>
                    <div align="center"><a href="https://www.logicbus.com.mx/fiber_optics">Fibra &oacute;ptica</a></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <br><br>

          <div align="center">
            <table width="50%" align="center">
              <tbody>
                <tr>
                  <td><div align="center"><a href="pdf/02/I-7018.pdf" target="_blank"><img src="imagenes/02/iconpdf.gif" width="50" height="50" border="0"></a>
                      <br><a href="pdf/02/I-7018.pdf" target="_blank">Ver archivo PDF</a></div></td>
                  <td><div align="center"><a href="https://www.logicbus.com.mx/I-7018RHARDWARE" target="_blank"><img src="imagenes/02/iconhardware.gif" width="50" height="50" border="0"></a>
                      <br><a href="https://www.logicbus.com.mx/I-7018RHARDWARE" target="_blank">Hardware</a></div></td>
                </tr>
              </tbody>
            </table>
          </div>

          <br><br>
        </div>
      </div>
    </div>
    <?
    abajo();
    ?>
  </body>
</html>