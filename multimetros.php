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
  <title>Multímetros Digitales y de Banco para Aplicaciones Industriales y Académicas | Logicbus</title>
  <meta name="description" content="Explora nuestra amplia gama de multímetros: desde modelos portátiles con conectividad Bluetooth hasta equipos de banco de alta precisión con interfaces RS232 y GPIB.">

  <meta name="keywords" content="Multimetros de Banco, Multímetros, Multímetro Digital - portatil, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, multimeter, multimetro digital, fluke multimeter, digital multimeter, siglent, multimetro, multimetros de banco, multimetro portatil, medicion, frecuencia, escritorio, multimetros de escritorio, multimetros de mesa">
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
            <li class="breadcrumb-item"><a href="instrumentos-medicion" class="blue link-orange">Instrumentos de Medición</a></li>
            <li class="breadcrumb-item active" aria-current="page">Multímetros</li>
          </ol>
        </nav>
        <h1 class="titulo_producto">Multímetros</h1>

        <div class="">
          <img src="images/banner/www/multimetros.png" alt="Multímetros" title="Multimetros" width="100%">
        </div><br>

        <p align="justify">
          Los <b>multímetros</b> son dispositivos de medición utilizados en electrónica y electricidad para medir
          diferentes
          parámetros eléctricos, lo que los convierte en herramientas esenciales para los profesionales y aficionados en
          estos campos. Estos instrumentos combinan varias funciones de medición en un solo dispositivo, lo que los hace
          versátiles y convenientes para realizar mediciones precisas en diversos entornos.
        </p>
        <p align="justify">
          Los multímetros están diseñados para medir varias magnitudes eléctricas, incluyendo voltaje (voltímetros),
          corriente (amperímetros), resistencia (óhmetros), capacidad (capacitómetros), inductancia (inductómetros),
          frecuencia (frecuencímetros) y más. Esto significa que un solo multímetro puede ser utilizado para medir una
          amplia variedad de parámetros, lo que ahorra tiempo y espacio en comparación con tener varios instrumentos
          individuales.
        </p>
        <br>
        <nav class="navMenuSuper">
          <ul>
            <li>
              <a href="https://tienda.logicbus.com.mx/prueba-y-medicion-multimetros-de-banco" target="_blank">Ver en
                Tienda</a>
            </li>
            <li>
              <a href="#produ">Productos</a>
            </li>
            <li>
              <a href="#catalogos">Catálogos</a>
            </li>
            <li>
              <a href="https://www.logicbus.com.mx/contacto">Contacto</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <center>
      <div class="seccion" id="produ">
        <div class="col-center">
          <h2><span>Productos</span></h2>
        </div>
      </div>
    </center>
    <div class="container">
      <div class="tabla_subcategorias_grid mt-3">
        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="multimetros-de-banco-SDM">
              <img src="assets/images/categorias/MultimetroBanco.png" alt="Instrumentos de medición - Multímetros de banco" title="Instrumentos de medición - Multímetros de banco" width="70%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8" align="left">
            <a href="multimetros-de-banco-SDM">
              <h2>Multímetros de banco</h2>
            </a>
            <p>Multímetro digital que incorpora una pantalla dual y es especialmente adecuado para las necesidades de
              medición de alta precisión, multifunción y automática.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Multimetros-de-Banco_c_2959.html" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>
        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="Multimetro-digital">
              <img src="assets/images/categorias/multimetro.png" alt="Instrumentos de medición - Multímetro digital portátil" title="Instrumentos de medición - Multímetro digital portátil" width="70%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8" align="left">
            <a href="Multimetro-digital">
              <h2>Multímetro digital portátil</h2>
            </a>
            <p> Multimetro profesional digital portátil.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Multimetros-portatiles_c_2960.html" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>
      </div>
    </div>
    <center>
      <div class="seccion" id="catalogos">
        <div class="col-center">
          <h2><span>Catálogos</span></h2>
        </div>
      </div>
    </center>
    <div class="divCenrtado" align="center">
      <div class="gridContMitad">
        <div>
          <a href="pdf/catalogos/Catalogo-Siglent-Osciloscopios-ESP.pdf" target="_blank"><img src="pdf/catalogos/Catalog-Siglent.JPG" class="img250" border="0" alt="Ver Catálogo de Siglent
          Catálogo de Osciloscopios"><br>Ver Catálogo de Siglent
            Catálogo de Osciloscopios</a>
        </div>
        <div>
          <a href="pdf/catalogos/Siglent-Guia-de-Instrumentos-ESP.pdf" target="_blank"><img src="pdf/catalogos/Catalog-Siglent.JPG" class="img250" border="0" alt="Ver Catálogo de Siglent
          Catálogo de Osciloscopios"><br>Ver guía de selección de Siglent
          </a>
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