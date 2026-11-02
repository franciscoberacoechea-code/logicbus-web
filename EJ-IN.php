<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
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
  <title>Logicbus/ Productos/Registrador de Datos /Temperatura /Junior/EJ-IN</title>
  <meta name="description" content="La familia junior de registradores de datos ofrece una solución rentable, confiable, exacta y fácil de utilizar para los requerimientos de monitoreo de toda...">

  <meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Datos, 1024HLS, HLS">

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

  <div>
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
            <li class="breadcrumb-item"><a href="datalogger" class="blue link-orange">Registradores</a></li>
            <li class="breadcrumb-item"><a href="temperature_logger" class="blue link-orange">Registradores de Temperatura</a></li>
            <li class="breadcrumb-item active" aria-current="page">EJ-IN</li>
          </ol>
        </nav>
        <center>
          <table width="100%" border="0">
            <td align="center">
              <h1>EJ-IN</h1>
            </td>
            </tr>
            <tr>
              <td align="center"><img src="imagenes/08/EJ-IN.jpg" width="200" height="123" border="0" alt=" ">
                <div align="justify">
                  <p> <br>
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td align="left">
                <div align="right"><a href="#"><img title="Ir a tienda" src="images/shopping_cart.png" border="0" onclick="atienda()" alt="Comprar"></a></div>
              </td>
            </tr>
            <tr>
              <td align="left">La familia junior de registradores de datos ofrece una soluci&oacute;n rentable, confiable, exacta y f&aacute;cil de utilizar para los requerimientos de monitoreo de toda la temperatura y la humedad.<br>
                Todos los datos del registrador se almacenan con seguridad en su memoria no vol&aacute;til, la cual sigue estando disponible aun cuando la bater&iacute;a es removida.<br>
                La bater&iacute;a de litio tiene una vida de servicio t&iacute;pica de dos a&ntilde;os y puede ser remplazada f&aacute;cilmente por el usuario.</td>
            </tr>
            <tr>
              <td align="center">
                <div align="right"></div>
              </td>
            </tr>
            <tr align="right">
              <td>
                <div align="center">
                  <table width="454" border="1" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="18" colspan="2" bgcolor="#666666">
                        <div align="center" class="Estilo1">Especificaciones T&eacute;cnicas </div>
                      </td>
                    </tr>
                    <tr>
                      <td height="18" bgcolor="#999999">
                        <div align="left">
                          Sensor</div>
                      </td>
                      <td bgcolor="#999999">1 interno de temperatura </td>
                    </tr>
                    <tr>
                      <td width="226" bgcolor="#CCCCCC">
                        <div align="left">
                          Rango de medici&oacute;n del sector interno</p>
                        </div>
                      </td>
                      <td width="226" bgcolor="#CCCCCC">-40&deg;C/+70&deg;C </td>
                    </tr>
                    <tr>
                      <td bgcolor="#999999">
                        <div align="left">
                          Exactitud del sensor interno</div>
                      </td>
                      <td bgcolor="#999999">+/-0.3&deg;C</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">
                        <div align="left">
                          Resoluci&oacute;n del sensor interno: </div>
                      </td>
                      <td bgcolor="#CCCCCC">0.5&deg;C</td>
                    </tr>
                    <tr>
                      <td bgcolor="#999999">
                        <div align="left">
                          Resoluci&oacute;n promedio: </div>
                      </td>
                      <td bgcolor="#999999">-10&deg;C y +30&deg;C es 0.3&deg;C </td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">
                        <div align="left">
                          Opciones de memoria:</div>
                      </td>
                      <td bgcolor="#CCCCCC"> 16,000 y 40,000 muestras </td>
                    </tr>
                    <tr>
                      <td bgcolor="#999999">
                        <div align="left">
                          LEDs de actividad y alarma
                        </div>
                      </td>
                      <td bgcolor="#999999">Si</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">
                        <div align="left">
                          Pantalla LCD
                        </div>
                      </td>
                      <td bgcolor="#CCCCCC">Si</td>
                    </tr>
                    <tr>
                      <td bgcolor="#999999">
                        <div align="left">
                          Clasificaci&oacute;n IP:</div>
                      </td>
                      <td bgcolor="#999999"> 67 </td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">
                        <div align="left">
                          Tama&ntilde;o </div>
                      </td>
                      <td bgcolor="#CCCCCC">76 x 86 x 18mm </td>
                    </tr>
                  </table>
                </div><br>
                <center>
                </center>
              </td>
            </tr>
            <tr align="right">
              <td>
                <div align="center"><strong>ACCESORIO:</strong></div>
              </td>
            </tr>
            <tr align="right">
              <td>
                <div align="center"><img src="imagenes/08/EJ-CR-MEM.jpg" alt="Clic para ver PDF de la impresora: EJ-CR-MEM" width="250" border="0"></div>
              </td>
            </tr>
            <tr align="right">
              <td>
                <div align="center"><strong> EJ-CR-MEM</strong></div>
              </td>
            </tr>
            <tr align="right">
              <td>
                <div align="center"> Chart Reader: Impresora port&aacute;til con pilas para registradores de la serie Junior </div>
              </td>
            </tr>
            <tr align="right">
              <td colspan="2">
                <h2> Para más información <a href="https://tawk.to/chat/5ca674ff1de11b6e3b06f73d/default?" rel="noopener noreferrer"><strong>consulta nuestro chat aquí</strong></a></h2>
              </td>
            </tr>
          </table>
        </center>
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