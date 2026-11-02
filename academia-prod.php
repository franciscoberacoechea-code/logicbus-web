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
  <title>Equipos para Laboratorio Académico | Logicbus</title>
  <meta name="description" content="Son sistema diseñados para realizar experimentos analógicos e incorpora fuente de poder DC, generadores de funcion, multímetros y varios accesorios.">

  <meta name="keywords" content="Instrumentos de medicion, Equipos Académicos, Encoders, Robots Colaborativos, LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">


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
            <li class="breadcrumb-item"><a href="instrumentos-medicion" class="blue link-orange">Prueba y Medición</a></li>
            <li class="breadcrumb-item active" aria-current="page">Equipos Académicos</li>
          </ol>
        </nav>
        <div align="center"><br>
          <h1><strong>Equipos Académicos</strong></h1>
          <br>
          <p align="justify">Son sistemas diseñados para realizar experimentos analógicos e incorpora fuente de poder DC, generadores de función, multímetros, amperímetros, potenciómetros, protoboards y varios accesorios.
            <br><br>
            Son productos ideales para realizar experimentos formales, trabajos de proyecto y diseño profesional de circuitos analógicos.
            <br><br>
            En esta sección podrás encontrar equipos para uso académico o para laboratorios, como son PLCs, Osciloscopios, etc.
          </p>
        </div>
        <nav class="navMenuSuper">
          <ul>
            <li>
              <a href="https://tienda.logicbus.com.mx/Laboratorio-acadeacutemico_c_1364-1-7.html" target="_blank">Ver en Tienda</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <center>
      <div class="seccion" id="equipos">
        <div class="col-center">
          <h2><span>Equipos Académicos</span></h2>
        </div>
      </div>
    </center>
    <div class="divCentrado">
      <div class="tabla_subcategorias_grid my-5">
        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="plc" title="Ir a Tienda Logicbus" target="_blank">
              <img src="assets/images/categorias/PLCs.jpg" alt="PLC" title="PLC" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="plc" title="Ir a Tienda Logicbus" target="_blank">
              <h2>PLC</h2>
            </a>
            <p>Controlador Lógico Programable: PLC o Controlador Lógico Programable son dispositivos electrónicos muy usados en Automatización Industrial. Un PLC controla la lógica de funcionamiento de máquinas, plantas y procesos industriales, procesan y reciben señales digitales y analógicas y pueden aplicar estrategias de control. Programmable Logic Controller o Controlador lógico programable.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/PLC_c_2794.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="multimetros" title="Ir a Tienda Logicbus" target="_blank">
              <img src="assets/images/categorias/multimetro.png" alt="Multímetros" title="Multímetros" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="multimetros" title="Ir a Tienda Logicbus" target="_blank">
              <h2>Multímetros</h2>
            </a>
            <p>Los multímetros son instrumentos que agrupan varios equipos de medición tales como voltímetros, amperímetros, óhmetros, capacitómetros, inductómetros, frecuencímetros, etc.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="multimetros" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="stand_osciloscopios" title="Ir a Tienda Logicbus" target="_blank">
              <img src="assets/images/categorias/osciloscopio.png" alt="Osciloscopios" title="Osciloscopios" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="stand_osciloscopios" title="Ir a Tienda Logicbus" target="_blank">
              <h2>Osciloscopios</h2>
            </a>
            <p>Un osciloscopio es un instrumento de medición eléctrico en el cual se representa gráficamente la magnitud de una señal eléctrica con respecto al tiempo.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Osciloscopios_c_2938.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="fuentes_programables" title="Ir a Tienda Logicbus" target="_blank">
              <img src="assets/images/categorias/FuenteBanco.png" alt="Fuentes de poder de banco" title="Fuentes de poder de banco" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="fuentes_programables" title="Ir a Tienda Logicbus" target="_blank">
              <h2>Fuentes de poder de banco</h2>
            </a>
            <p>Las Fuentes de poder de banco permiten la selección del voltaje/corriente de salida por medio de un selector digital o comunicación serial/USB.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Fuentes-de-poder-de-banco_c_2940.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>
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