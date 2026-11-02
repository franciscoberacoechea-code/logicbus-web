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
    <title>Remote Data Acquisition Modules via ModBus Protocol/M-7068
    </title>
    <meta name="description" content="Módulo con 4 salidas a relevador de señal forma A y 4 salidas a relevador de señal forma C, comunicación a través de RS-485">

    <meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Datos, M-7068, M-7068D, daq, adquisici&oacute;n de datos, adquisici&oacute;n, digital, relevador, salida digital, salida relevador, serial, modbus, rs-485">

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

          <table width="100%"  border="0">
            <tr>
              <td colspan="2" align="center"><div align="left"><a href="productos">Productos</a>-&gt;<a href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a>-&gt;<a href="sub_data3">M-7000</a>-&gt;<a href="sub_data3-2">Digitales</a>-&gt;M-7068</div></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><h1> <strong>M-7068 </strong>  <br>
                </h1></td>
            </tr>
            <tr>
              <td width="50%" align="center"><div align="center"><img src="imagenes/02/M-7068.jpg" alt="M-7068" width="200" border="0"></div>      </td>
              <td width="50%" align="center"><div align="center"><img src="imagenes/02/M-7068D.jpg" width="200" border="0" alt="M-7068D"></div>        </td>
            </tr>
            <tr>
              <td align="center"><strong>M-7068</strong></td>
              <td align="center"><strong>M-7068D</strong></td>
            </tr>
            <tr>
              <td colspan="2" align="right">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" align="center"><strong>M&oacute;dulo con 4 salidas a relevador de se&ntilde;al forma A y 4 salidas a relevador de se&ntilde;al forma C, comunicaci&oacute;n a trav&eacute;s de RS-485, soporta temperatura de operaci&oacute;n de -25~+75&deg;C<br>
                  M-7068D con display LED</strong></td>
            </tr>
            <tr>
              <td colspan="2" align="center">  <div align="right"><a href="https://tienda.logicbus.com.mx/search.asp?keyword=M-7068&search.x=0&search.y=0"><img title="Ir a tienda"  src="images/shopping_cart.png" border=0 onClick="atienda()" alt="Comprar"></a></div></td>
            </tr>
            <tr >
              <td colspan="2" align="justify">El M-7068/D ofrece 4 canales de salida a relevador de se&ntilde;al forma A y 4 canales de salida a relevador de se&ntilde;al forma C. Tambi&eacute;n cuenta con protecci&oacute;n contra voltaje 4 kV ESD, 4 kV EFT y 3 kV para mejorar la capacidad de protecci&oacute;n de ruido en ambientes industriales. Es la soluci&oacute;n ideal para peque&ntilde;as conmutaciones de se&ntilde;al.</td>
            </tr>
            <tr >
              <td colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr >
              <td colspan="2" align="justify"><div align="left"><strong>Caracter&iacute;sticas:</strong></div></td>
            </tr>
            <tr >
              <td colspan="2" align="justify"><ul>
                  <li>Salida a relevador, 4 forma A y 4 forma C</li>
                  <li>Doble watchdog</li>
                  <li>Protecci&oacute;n 4 kV ESD</li>
                  <li>Valor de encendido configurable</li>
                  <li>Valor seguro configurable</li>
                  <li>Rango de temperatura de operaci&oacute;n amplio: -25~+75&deg;C</li>
                </ul></td>
            </tr>
            <tr >
              <td colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr >
              <td colspan="2" align="justify"><div align="left"><strong>Aplicaciones:</strong></div></td>
            </tr>
            <tr >
              <td colspan="2" align="justify"><ul>
                  <li>Automatizaci&oacute;n de edificios</li>
                  <li>Automatizaci&oacute;n de f&aacute;bricas</li>
                  <li>Automatizaci&oacute;n de m&aacute;quinas</li>
                  <li>Mantenimiento remoto</li>
                  <li>Diagn&oacute;stico remoto</li>
                  <li>Equipos de pruebas</li>
                </ul></td>
            </tr>
            <tr >
              <td colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr >
              <td colspan="2" align="center"><table width="80%" border="1" align="center">
                  <tbody>
                    <tr>
                      <td colspan="4" bgcolor="#FFAD33" style="font-weight: bold; text-align: center;">Especificaciones t&eacute;cnicas</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#7598FF" style="font-weight: bold">Salida digital</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Canales</td>
                      <td>8 (Forma A &times; 4, Forma C &times; 4)</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Tipo de relevador</td>
                      <td>Relevador de se&ntilde;al</td>
                    </tr>
                    <tr>
                      <td rowspan="7" bgcolor="#CCCCCC">Forma A</td>
                      <td bgcolor="#CCCCCC">Capacidad de contacto</td>
                      <td>2A @ 30VDC<br>
                        0.24A @ 220VDC<br>
                        0.25A @ 250 VAC</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Carga m&iacute;nima de contacto</td>
                      <td>10mA @ 20mV</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Material de contacto</td>
                      <td>Plata - n&iacute;quel, cubierta de oro</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Tiempo de operaci&oacute;n</td>
                      <td>3ms (com&uacute;nmente)</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Tiempo de liberaci&oacute;n</td>
                      <td>4ms (com&uacute;nmente)</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Resistencia mec&aacute;nica</td>
                      <td>108 ops</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Resistencia el&eacute;ctrica</td>
                      <td>2 x 105 ops</td>
                    </tr>
                    <tr>
                      <td rowspan="7" bgcolor="#CCCCCC">Forma C</td>
                      <td bgcolor="#CCCCCC">Capacidad de contacto</td>
                      <td>2A @ 30VDC<br>
                        0.24A @ 220VDC<br>
                        0.25A @ 250 VAC</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Carga m&iacute;nima de contacto</td>
                      <td>10mA @ 20mV</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Material de contacto</td>
                      <td>Plata - n&iacute;quel, cubierta de oro</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Tiempo de operaci&oacute;n</td>
                      <td>3ms (com&uacute;nmente)</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Tiempo de liberaci&oacute;n</td>
                      <td>4ms (com&uacute;nmente)</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Resistencia mec&aacute;nica</td>
                      <td>108 ops</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">Resistencia el&eacute;ctrica</td>
                      <td>2 x 105 ops</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Fuerza de sobretensi&oacute;n</td>
                      <td>2000 VDC</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Valor de encendido</td>
                      <td>Si</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Valor seguro</td>
                      <td>Si</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#7598FF" style="font-weight: bold">Comunicaci&oacute;n</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Interfaz</td>
                      <td>RS-485</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Formato</td>
                      <td>(N, 8, 1), (N, 8, 2), (E, 8, 1), (O, 8, 1)</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Velocidad de transmisi&oacute;n</td>
                      <td>1200~115200 bps</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Protocolo</td>
                      <td>Modbus RTU, DCON</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Doble Watchdog</td>
                      <td>Si, m&oacute;dulo (1.6 seg), comunicaci&oacute;n (programable)</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#7598FF" style="font-weight: bold">Display/indicador LED</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Sistema indicador LED</td>
                      <td>Si, para encendido y comunicaci&oacute;n</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Indicador LED de E/S</td>
                      <td>8 LED solo para M-7068D</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Display LED de 7 segmentos</td>
                      <td>No</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#7598FF" style="font-weight: bold">Aislamiento</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Aislamiento intra m&oacute;dulo</td>
                      <td>2000 VDC</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#7598FF" style="font-weight: bold">Protecci&oacute;n EMS</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">ESD (IEC 61000-4-2)</td>
                      <td>&plusmn;4 kV contacto para cada terminal<br>
                        &plusmn;8 kV aire para punto al azar</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">EFT (IEC 61000-4-4)</td>
                      <td>&plusmn;4 kV for 8 l&iacute;nea de relevador y potencia<br>
                        &plusmn;2 kV para la l&iacute;nea del puerto RS-485</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Sobretensi&oacute;n (IEC 61000-4-5)</td>
                      <td>&plusmn;3 kV para alimentaci&oacute;n</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#7598FF" style="font-weight: bold">Alimentaci&oacute;n</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Protecci&oacute;n de polaridad reversa</td>
                      <td>Si</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Formato</td>
                      <td>10~30VDC</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Velocidad de transmisi&oacute;n</td>
                      <td>M-7068: 1.6W (max), M-7068D: 2.0W (max)</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#7598FF" style="font-weight: bold">Mec&aacute;nico</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Dimensiones</td>
                      <td>72mm x 123mm x 35mm</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Instalaci&oacute;n</td>
                      <td>Riel DIN o montaje en pared</td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#7598FF" style="font-weight: bold">Medio ambiente</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Temperatura de operaci&oacute;n</td>
                      <td>-25&deg;C~+75&deg;C</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Temperatura de almacenamiento</td>
                      <td>-40&deg;C~+85&deg;C</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#CCCCCC">Humedad</td>
                      <td>10% ~ 95%, sin condensaci&oacute;n</td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr >
              <td colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr >
              <td colspan="2" align="center"><a href="pdf/02/M-7068(D)_M-7069(D).pdf" target="_blank"><img src="imagenes/iconpdf.jpg" width="30" height="30" border="0"><br>
                  Ver archivo pdf</a> </td>
            </tr>
            <tr >
              <td colspan="2" align="center">&nbsp;</td>
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