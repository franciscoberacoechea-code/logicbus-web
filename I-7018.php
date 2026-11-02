<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
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
    <title>ICPDAS - Adquisicion de datos, I-7000 Analógicos: I-7018
    </title>
    <meta name="description" content="I-7018 es un módulo DAQ con 8 entradas analogas para termopar, voltaje y corriente.">

    <meta name="keywords" content="Convertidores, protocolo, Serial, As�ncrono, Sincrono, Comunicacion, Repetidores, Hub, USB, Ethernet, Fibra Optica, tarjetas, CAN, DeviceNET, WAN, RS-232, RS-422, RS-485, RS-530, FR-Net, Baud Rate, Chip, UART, al�mbrico, inal�mbrico, PCI, bajo perfil, PCMCIA, ISA, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">

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

          <a href="productos">Productos</a>-&gt;<a href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a>-&gt;<a href="sub_data1">I-7000</a>-&gt;<a href="TABLAS_ANALOGICOS_I-7000">Anal&oacute;gico</a>-&gt;I-7018

          <h1>7018</h1>

          <div align="center">
            <img src="imagenes/02/i-7018.gif" class="image_productos" width="200" alt="I-7018" title="I-7018"><br>
            <div align="right">
              <a href="https://www.logicbus.com.mx/EZDataLogger"><img src="imagenes/02/SOFTWARE EZDataLogger.gif" width="90" alt="Con Software Gratuito"></a>
              <img src="imagenes/02/RoHS.gif" name="image1" width="90" id="image1" alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"><a href="https://tienda.logicbus.com.mx/I-7018_p_1656.html" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" border=0 alt="Comprar"></a>
            </div><BR>
            <strong>Módulo DAQ con 8 entradas análogas para termopar, voltaje y corriente.</strong><br>
          </div>
          <br>

          <p>El módulo I-7018 proporciona protecci&oacute;n rentable y condicionamiento para una amplia gama de se&ntilde;ales y sistemas industriales de control valiosas. La utilidad DCON puede ayudar a usuarios a configurar y probar m&oacute;dulos I-7018. El usuario puede montar los módulos en un riel DIN, panel o pared. El módulo tiene un bloque de terminal de tornillos para conectar con las se&ntilde;ales. El I-7018 viene con el software EZ Data Logger.</p>

          <h2>Ejemplo de esquema de conexi&oacute;n</h2>

          <div align="center">
            <a href="https://www.logicbus.com.mx/imagenes/Esquema_I-7019_LBUSB16485B_Fuente.html" target="_blank"><img src="imagenes/02/Esquema_I-7019_LBUSB16485B_Fuente_ch.gif" width="45%" alt="Esquema I-7019"></a>
          </div>

          <div align="center">
            <table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">
              <tbody>
                <tr bgcolor="#FFAD33">
                  <td colspan="2"><div align="center"><strong>Especificaciones </strong></div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#7598FF"><strong>Entrada anal&oacute;gica </strong></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Canales de entrada </td>
                  <td>8 Diferenciales </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Rango de entrada </td>
                  <td>&plusmn;15mV, &plusmn; 50mV , &plusmn; 100mV, &plusmn; 500mV, &plusmn; 1V, &plusmn; 2.5V y &plusmn; 20mA . Termopar tipo J, K, T, E, R, S, B, N, C </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Resoluci&oacute;n </td>
                  <td>16 bits </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Tasa de muestreo </td>
                  <td>10 muestras/seg </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Exactitud </td>
                  <td>&plusmn;0.2% </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Ancho de banda </td>
                  <td>15.7Hz </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Zero Drift </td>
                  <td>+/- 10 &micro;V/ &deg;C </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Modo de rechazo com&uacute;n </td>
                  <td>86dB </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Detecci&oacute;n de Termopar Abierto </td>
                  <td>S&iacute; </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Aislamiento </td>
                  <td>3000 Vrms </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Protecci&oacute;n Sobre Voltaje </td>
                  <td>+/-35 Vrms </td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#7598FF"><strong>Interfaz </strong></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Interfaz </td>
                  <td>RS-485 </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Formato </td>
                  <td>N, 8, 1 </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Velocidad de Transmisi&oacute;n </td>
                  <td>1200 ~ 115200bps </td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#7598FF"><strong>Pantalla LED</strong></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#CCCCCC">1 LED como indicador de Energ&iacute;a/Comunicaci&oacute;n </td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#7598FF"><strong>Energ&iacute;a </strong></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Entrada</td>
                  <td>+10 a +30 VDC </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Consumo de energ&iacute;a </td>
                  <td>1.0W </td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#7598FF"><strong>Ambiente</strong></td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Temperatura en operaci&oacute;n </td>
                  <td>-25 a 75 &deg;C </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Temperatura de almacenaje </td>
                  <td>-40 a 85 &deg;C </td>
                </tr>
                <tr>
                  <td bgcolor="#CCCCCC">Humedad </td>
                  <td>5 a 95%, no condensada </td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#7598FF"><strong>Montaje </strong></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#CCCCCC">Montaje en Riel DIN </td>
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