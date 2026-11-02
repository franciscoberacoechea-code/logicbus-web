<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
  </script>


  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
  </script>
  <title>Sensores de Temperatura tipo Termopar
  </title>
  <meta name="description" content="Los sensores de temperatura tipo termopar constan de dos metales unidos que producen un voltaje, son usados en la industria.">

  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, termopar, termopares, thermocouple, thermocuple, temperatura, sensor, criogenica, baja, alta">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--- Estilos Necesarios-->
  <?php echo $favicon; ?>
  <?php echo $boostrap_css; ?>
  <?php echo $own_file_css; ?>
  <?php echo $subcategorias; ?>
  <?php echo $menu; ?>
  <?php echo $estilos; ?>
  <?php echo $footer_css; ?>
  <?php echo $flickity_css; ?>

  <?php echo $google_analytics; ?>
  <?php echo $var_headers; ?>
</head>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>

  <div id="main">
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
            <li class="breadcrumb-item"><a href="sensores_temperatura" class="blue link-orange">Sensores de temperatura</a></li>
            <li class="breadcrumb-item active" aria-current="page">Termopar</li>
          </ol>
        </nav>
        <h1> Sensor de Temperatura Termopar</h1>
        <img src="images/banner/www/banner-termopar.png" alt="Termopares" title="Termopares" width="100%">
        <br><br>
        <nav class="navMenuSuper">
          <ul>
            <li>
              <a href="id1" target="_blank">Ver en Tienda</a>
            </li>
          </ul>
        </nav>

        <div align="justify">
          Un <strong>termopar </strong> es un dispositivo formado por la uni&oacute;n de dos
          metales distintos que produce un voltaje (efecto Seebeck), que es funci&oacute;n de la
          <strong>diferencia de temperatura </strong> entre uno de los extremos denominado "punto caliente" o
          uni&oacute;n caliente o de medida y el otro denominado "punto fr&iacute;o" o uni&oacute;n fr&iacute;a o
          de referencia.
        </div>
      </div>
    </div>
    <div class="divCentrado"><br>
      <div align="justify">
        En Instrumentaci&oacute;n industrial, los termopares son ampliamente usados como
        sensores de temperatura. Son econ&oacute;micos, intercambiables, tienen conectores est&aacute;ndar y son
        capaces de medir un amplio rango de temperaturas. Su principal limitaci&oacute;n es la exactitud ya que
        los errores del sistema inferiores a un grado Celsius son dif&iacute;ciles de obtener.
      </div><br>

      <strong>Aplicaciones:</strong>
      <ul>
        <li> Inyecci&oacute;n de pl&aacute;stico</li>
        <li> Procesos alimenticios</li>
        <li> Procesos industriales</li>
        <li> Equipo de empaque</li>
        <li> Equipos de refrigeraci&oacute;n </li>
        <li> Hornos</li>
      </ul>

      <strong>Preguntas y Respuestas Frecuentes (FAQ): <a href="pdf/30/FAQ_RTDs_Termopares.pdf" target="_blank">RTDs y Termopares</a>
      </strong>

      <div align="center">
        <table class="prin" border="1" cellpadding="0" cellspacing="0">
          <tr bgcolor="#666666">
            <td width="576" colspan="2" valign="top">
              <div align="center">
                <font color="#FFFFFF"><strong>Especificaciones t&eacute;cnicas </strong></font>
              </div>
            </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td width="288" valign="top">Tipo </td>
            <td width="288" valign="top">K </td>
          </tr>
          <tr bgcolor="#999999">
            <td width="288" valign="top">Rango de temperatura </td>
            <td width="288" valign="top">0&deg;C ~ 1250 &deg;C </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td width="288" valign="top">Exactitud </td>
            <td width="288" valign="top">&plusmn; 2.2&deg;C o &plusmn;0.75% </td>
          </tr>
          <tr bgcolor="#999999">
            <td width="288" valign="top">Di&aacute;metro del tubing </td>
            <td width="288" valign="top">3/16&quote; </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td width="288" valign="top">Longitud del tubing </td>
            <td width="288" valign="top">1&quote; </td>
          </tr>
          <tr bgcolor="#999999">
            <td width="288" valign="top">Material del tubing </td>
            <td width="288" valign="top">Acero inoxidable </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td width="288" valign="top">Tipo de uni&oacute;n </td>
            <td width="288" valign="top">Aislado </td>
          </tr>
          <tr bgcolor="#999999">
            <td width="288" valign="top">Composici&oacute;n qu&iacute;mica </td>
            <td width="288" valign="top">Cromel (+), Alumel (-) </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td width="288" valign="top">Ambiente de trabajo </td>
            <td width="288" valign="top">Satisface atm&oacute;sferas oxidantes </td>
          </tr>
          <tr bgcolor="#666666">
            <td width="576" colspan="2" valign="top"><strong>
                <font color="#FFFFFF">Aislante </font>
              </strong></td>
          </tr>
          <tr bgcolor="#999999">
            <td width="288" valign="top">Material de la extensi&oacute;n </td>
            <td width="288" valign="top">PVC </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td width="288" valign="top">Rango de temperatura </td>
            <td width="288" valign="top">-30&deg;C ~ 105&deg;C </td>
          </tr>
          <tr bgcolor="#999999">
            <td width="288" valign="top">Longitud de la extensi&oacute;n </td>
            <td width="288" valign="top">2 m / 5 m </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td width="288" valign="top">N&uacute;mero de hilos </td>
            <td width="288" valign="top">2 hilos </td>
          </tr>
          <tr bgcolor="#999999">
            <td width="288" valign="top">Resistencia a la abrasi&oacute;n </td>
            <td width="288" valign="top">Muy buena </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td width="288" valign="top">Resistencia a la humedad </td>
            <td width="288" valign="top">Muy buena </td>
          </tr>
          <tr bgcolor="#999999">
            <td width="288" valign="top">Resistencia a la producci&oacute;n del petr&oacute;leo </td>
            <td width="288" valign="top">Muy buena </td>
          </tr>
          <tr bgcolor="#666666">
            <td width="576" colspan="2" valign="top"><strong>
                <font color="#FFFFFF">C&oacute;digo de orden </font>
              </strong></td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td width="288" valign="top">Termopar con 2 metros de aislante </td>
            <td width="288" valign="top">LB-30102-213-21-1PLG-1-A2m-0 </td>
          </tr>
          <tr bgcolor="#999999">
            <td width="288" valign="top">Termopar con 5 metros de aislante </td>
            <td width="288" valign="top">LB-30102-213-21-1PLG-1-A5m-0 </td>
          </tr>
        </table>
      </div>
      <br>
      <div align="center"><a href="javascript:openWin('imagenes/30/termopar07.jpg',0,0)" target="_blank"><img src="imagenes/30/termopar07_ch.jpg" alt="Sensor de Temperatura Termopar" class="resp" title="Sensor de Temperatura Termopar" border="0"></a>
      </div>

      <div align="center"><img src="imagenes/LB-30102_small.png" alt="Esquema de Sensor de Temperatura Termopar" class="resp" title="Esquema de Sensor de Temperatura Termopar">
      </div>
      <center>
        <div class="seccion" id="diagrmas">
          <div class="col-center">
            <h2><span>Ejemplos de Esquemas de Conexi&oacute;n</span></h2>
          </div>
        </div>
      </center>
      <table class="prin" width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="45%">
            <div align="center"><a href="imagenes/esquema_monitoreo_registro_de_variables.html" target="_blank"><img src="imagenes/esquema_monitoreo_registro_de_variables_small.png" alt="Esquema de monitoreo y registro de variables" class="resp" title="Esquema de monitoreo y registro de variables" border="0"></a>
            </div>
          </td>
          <td width="55%">
            <div align="center"><a href="imagenes/Esquema_I-7019_LBUSB16485B_Fuente.html" target="_blank"><img src="imagenes/Esquema_I-7019_LBUSB16485B_Fuente_ch_small.png" alt=" Monitoreo y registro de temperatura por USB" class="resp" title=" Monitoreo y registro de temperatura por USB" border="0"></a>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div align="center"></div>
          </td>
          <td>
            <div align="center"></div>
          </td>
        </tr>
        <tr>
          <td align="center"><a href="Monitoreo_de_Temperatura.html" target="_blank"><img src="imagenes/Monitoreo_de_Temperatura_small.png" alt="Esquema de monitoreo y control de temperatura" class="resp" title="Esquema de monitoreo y control de temperatura" border="0" align="top"></a>
          </td>
          <td>
            <div align="center"><a href="imagenes/FBs_Inalambrico.jpg" target="_blank"><img src="imagenes/FBs_Inalambrico_small.png" alt="PLC Serie Fbs y SCADA" class="resp" title="PLC Serie Fbs y SCADA" border="0" align="top"></a>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div align="center"></div>
          </td>
          <td>
            <div align="center"></div>
          </td>
        </tr>
        <tr>
          <td>
            <div align="center"><a href="imagenes/02/esquema_ethernet_inalambrico.jpg" target="_blank"><img src="imagenes/esquema_ethernet_inalambrico_small.png" alt="Registro y monitoreo mediante WiFi" class="resp" title="Registro y monitoreo mediante WiFi" border="0" align="top"></a>
            </div>
          </td>
          <td>
            <div align="center"><a href="imagenes/Temp_Hum_Pot.jpg" target="_blank"><img src="imagenes/Temp_Hum_Pot_small.png" alt="Registro de Temperatura con software EZ Data Logger" class="resp" title="Registro de Temperatura con software EZ Data Logger" border="0"></a>
            </div>
          </td>
        </tr>
      </table>

      <div align="center"><a href="imagenes/Esquema_Monitoreo_Control_Temperatura.html" target="_blank"><img src="imagenes/Esquema_Monitoreo_control_temperatura_ch.jpg" alt="Monitoreo y control de temperatura mediante ethernet y RS-485" class="resp" title="Monitoreo y control de temperatura mediante ethernet y RS-485" border="0"></a></div>
    </div>
  </div>
  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>