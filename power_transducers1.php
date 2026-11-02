<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

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
  <title>Sensores, Transductores y Acondicionadores - Medición de Variables
  </title>
  <meta name="description" content="Son dispositivos que nos permiten convertir un parámetro físico, biológico o químico en una señal eléctrica, p. ej.: temperatura, presión, flujo o vibraciones.">

  <meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">

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
            <li class="breadcrumb-item"><a href="transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
            <li class="breadcrumb-item"><a href="power-transducers" class="blue link-orange">Potencia Eléctrica</a></li>
            <li class="breadcrumb-item active" aria-current="page">Medición de Variables Eléctricas</li>
          </ol>
        </nav>
        <h1>Medición de Variables Eléctricas</h1><br>

        <div align="center">
          <table>
            <tr align="center">
              <td align="center"><img src="imagenes/s203t-500.jpg" width="80%" alt="Medición de Variables Eléctricas" title="Medición de Variables Eléctricas"></td>
              <td align="center"><img src="imagenes/s203rcd-500.jpg" width="80%" alt="Medición de Variables Eléctricas" title="Medición de Variables Eléctricas"></td>
            </tr>
          </table>
        </div>
        <br>

        <div align="right">
          <a href="https://tienda.logicbus.com.mx/Digitales_c_3009.html" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" alt="Comprar"></a>
        </div><br>

        <div class="tabla_subcategorias_grid mt-3">

          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="S203T">
                <img src="imagenes/s203t-500.jpg" alt="Analizador de tres fases" width="80%" border="0" title="Analizador de tres fases">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">
              <h2><a href="S203T">S203T</a></h2>
              <p>S203T es un analizador de redes trifásico completo, apto para rangos de tensión de hasta 600 Vac (50 Hz o 60 Hz), con corrientes de hasta 100 mA relación CT conectadas. El instrumento puede proporcionar todas las siguientes magnitudes eléctricas: Vrms, Irms, Watt, Var, Va, Frequency, Cosf y Active Energy.</p>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/S203T_p_4037.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>


          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="S203RC-D">
                <img src="imagenes/s203rcd-500.jpg" alt="Analizador trifásico de rojo con pantalla para sensores Rogowski" width="80%" title="Analizador trifásico de rojo con pantalla para sensores Rogowski">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">

              <h2><a href="S203RC-D">S203RC-D</a></h2>
              <p>El instrumento S203RC-D es un analizador de red trifásico completo con pantalla de alta visibilidad, para uso exclusivo con sensores Rogowski. El S203RC-D es adecuado para rangos de voltaje de hasta 600 Vac (50 Hz o 60 Hz) y corrientes máximas de hasta 1000 A conectadas a las entradas.</p>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/S203RC-D_p_7276.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>
        </div>
        <div class="tabla_subcategorias_grid mt-3">

          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="Z203">
                <img src="imagenes/z204-1-500.jpg" alt="Z203: Analizador de fase simple" width="80%" border="0" title="Z203: Analizador de fase simple">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">
              <h2><a href="https://tienda.logicbus.com.mx/Z204-1_p_9703.html">Z204</a></h2>
              <p>Z204 acepta un TRMS de voltaje alterno o directo (hasta 1.200 V CC y 850 V CA) y proporciona una salida analógica aislada (mA o V). Dispone también de interruptores DIP para una configuración rápida.</p>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Z204-1_p_9703.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>
          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="https://tienda.logicbus.com.mx/medidores-de-consumo-electrico-para-montaje-en-panel.html">
                <img src="imagenes/s711_rog_lr-500.jpg" alt="medidor de energía con donas rogowski" width="80%" border="0" title="medidor de energía con donas rogowski">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">
              <h2><a href="https://tienda.logicbus.com.mx/medidores-de-consumo-electrico-para-montaje-en-panel.html">S711E-ROG</a></h2>
              <p>S711E-ROG medidor de energía con donas rogowski para medir y almacenar parámetros eléctricos. Las aplicaciones principales con las que cuenta es el análisis y control de consumos, que tiene una excelente relación precio / rendimiento. La gran pantalla garantiza una lectura de información fácil e inmediata.</p>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/medidores-de-consumo-electrico-para-montaje-en-panel.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>
        </div>
      </div><br>
      <br><br>
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