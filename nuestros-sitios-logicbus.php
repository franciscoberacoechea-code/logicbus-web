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

  <title>Nuestros Sitios Logicbus</title>

  <meta name="description" content=" ">

  <meta name="keywords" content="">


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

  <section class="container">
    <h1 class="title blue">Nuestros Sitios Logicbus</h1>
    <div class="my-5">
      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://www.logicbus.com.mx/" target="_blank" class="link-orange"><img src="assets/sitios/logicbus-sitio-web.png" class="card-img" alt="Sitio Informativo"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">Sitio Informativo</h5>
              <p class="card-text text-justify">Nuestro sitio principal en español donde encontrarás quiénes somos, cuáles son nuestras marcas y nuestros principales clientes, descubrirás información relevante y técnica de los productos de automatización industrial.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://www.logicbus.com.mx/" target="_blank" class="link-orange">www.logicbus.com.mx</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://tienda.logicbus.com.mx/" target="_blank" class="link-orange"><img src="assets/sitios/logicbus-tienda-virtual.png" class="card-img" alt="Tienda Virtual México"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">Tienda Virtual México</h5>
              <p class="card-text text-justify">Nuestra tienda virtual méxico en español, cuenta con un amplio catálogo de productos de automatización, control y procesos. Podrás realizar compras directamente para México.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://tienda.logicbus.com.mx/" target="_blank" class="link-orange">tienda.logicbus.com.mx</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://www.logicbus.com/" target="_blank" class="link-orange"><img src="assets/sitios/logicbus-usa-online-store.png" class="card-img" alt="Tienda Virtual Internacional"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">Tienda Virtual Internacional</h5>
              <p class="card-text text-justify">La Tienda Virtual en Inglés podrás encontrar un amplio catálogo de productos de automatización, control y procesos. Podrás realizar compras directamente para Estados Unidos y el resto del mundo, excepto México.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://www.logicbus.com/" target="_blank" class="link-orange">www.logicbus.com</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://www.logicbus.com.mx/blog/" target="_blank" class="link-orange"><img src="assets/sitios/logicbus-blog.png" class="card-img" alt="Blog"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">Blog</h5>
              <p class="card-text text-justify">En nuestro Blog encontrarás lo último en ingeniería industrial e innovación de los procesos de automatización de las empresas. Artículos nuevos cada semana.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://www.logicbus.com.mx/blog/" target="_blank" class="link-orange">www.logicbus.com.mx/blog</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://www.pc-industrial.logicbus.com.mx/" target="_blank" class="link-orange"><img src="assets/sitios/logicbus-computadoras-industriales.png" class="card-img" alt="Computadoras Industriales"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">Computadoras Industriales</h5>
              <p class="card-text text-justify">Encontrarás información detallada y aplicaciones dedicadas a computadoras industriales o periféricos industriales ideales para proyectos con un entorno robusto.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://www.pc-industrial.logicbus.com.mx/" target="_blank" class="link-orange">www.pc-industrial.logicbus.com.mx</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://tablet-industrial.logicbus.com.mx/" target="_blank" class="link-orange"><img src="assets/sitios/logicbus-tablets-industriales.png" class="card-img" alt="Tablets industriales"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">Tablets industriales</h5>
              <p class="card-text text-justify">Tabletas resistentes de alto rendimiento, se prueban para garantizar que puedan sobrevivir cuando se sumergen en agua, se usan en áreas extremadamente frías o calientes y pueden resistir los golpes y otras vibraciones que las tabletas comunes no pueden soportar.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://tablet-industrial.logicbus.com.mx/" target="_blank" class="link-orange">www.tablet-industrial.logicbus.com.mx</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://monitor-industrial.logicbus.com.mx/" target="_blank" class="link-orange"><img src="assets/sitios/logicbus-pantallas-industriales.png" class="card-img" alt="Pantallas Industriales"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">Pantallas Industriales</h5>
              <p class="card-text text-justify">Encontrarás información detallada y aplicaciones dedicadas para pantallas industriales y HMIs, ideales para proyectos con un entorno robusto.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://monitor-industrial.logicbus.com.mx/" target="_blank" class="link-orange">www.monitor-industrial.logicbus.com.mx</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://www.logicbus.com.mx/oee-que-es" target="_blank" class="link-orange"><img src="assets/sitios/oee-logicbus.png" class="card-img" alt="OEE"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">OEE</h5>
              <p class="card-text text-justify">Descubre cómo OEE puede ayudarte a identificar áreas de mejora en tu proceso de producción, aumentar la productividad y reducir los costos operativos. Nuestro objetivo es proporcionarles la información y las herramientas necesarias para impulsar el éxito de su negocio.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://www.logicbus.com.mx/oee-que-es" target="_blank" class="link-orange">www.logicbus.com.mx/oee-que-es</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://www.logicbus.com.mx/celda-de-carga/" target="_blank" class="link-orange"><img src="assets/sitios/logicbus-celdas-de-carga.png" class="card-img" alt="Celdas de carga"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">Celdas de carga</h5>
              <p class="card-text text-justify">Explora nuestra amplia selección de celdas de carga de alta calidad, diseñadas para una variedad de aplicaciones y requisitos de carga. Descubre cómo estas tecnologías pueden mejorar la precisión de sus sistemas de pesaje, monitorear el rendimiento de equipos industriales y mucho más.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://www.logicbus.com.mx/celda-de-carga/" target="_blank" class="link-orange">www.logicbus.com.mx/celda-de-carga</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 card-sitios">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="https://www.logicbus.com.mx/preguntas-frecuentes-controllino" target="_blank" class="link-orange"><img src="assets/sitios/controllino-logicbus.png" class="card-img" alt="Controllino"></a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="subtitle blue">Controllino FAQ</h5>
              <p class="card-text text-justify">Descubre cómo Controllino puede ayudarte a simplificar sus procesos de automatización, aumentar la eficiencia y controlar tus sistemas de manera más efectiva. Ya sea que seas principiante en el mundo de la automatización o experto en la materia, aquí encontrarás recursos útiles y respuestas a sus interrogantes.</p>
              <p class="card-text text-center"><small class="text-muted"><a href="https://www.logicbus.com.mx/preguntas-frecuentes-controllino" target="_blank" class="link-orange">www.logicbus.com.mx/preguntas-frecuentes-controllino</a></small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>