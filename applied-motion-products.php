<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Applied Motion | Soluciones en servomotores - Logicbus</title>

  <meta name="description"
    content="Applied Motion ofrece una potente gama de productos estándar para satisfacer sus requisitos de control de movimiento. Si su aplicación exige algo inusual o único.">
  <meta name="keywords"
    content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Seguridad, Consultoría, Integración, Proyecto, Applied Motion Products, control de movimiento, servomotores">

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'AW-1007518778'); 
  </script>

  <?php echo $favicon; ?>
  <?php echo $css_bundle; ?>
  <?php echo $estilos; ?>

  <!-- CSS ESPECÍFICO DE ESTA PÁGINA -->
  <style>
    /* Ocultar barra lateral */
    #leftBar {
      display: none;
    }

    /* Contenedor de Videos de YouTube */
    .video-container {
      position: relative;
      cursor: pointer;
      border-radius: 15px;
      overflow: hidden;
      padding-top: 56.25%;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      background-color: #000;
      width: 100%;
      flex: 1 1 350px;
      max-width: 480px;
    }

    .video-container img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      border: none;
      opacity: 0.8;
      transition: opacity 0.3s ease;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    .video-container .play-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80px;
      height: 80px;
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 50%;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .video-container .play-button::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 54%;
      transform: translate(-50%, -50%);
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 15px 0 15px 26px;
      border-color: transparent transparent transparent white;
    }

    @media (hover: hover) {
      .video-container:hover img {
        opacity: 1;
      }

      .video-container:hover .play-button {
        background-color: var(--lb-accent);
        transform: translate(-50%, -50%) scale(1.1);
      }
    }
  </style>
</head>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>

  <!-- Breadcrumbs -->
  <div class="container mt-4 mb-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb pl-0" style="background-color: transparent;">
        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Applied Motion Products</li>
      </ol>
    </nav>
  </div>

  <!-- Banner Imagen 100% -->
  <div class="banner-container mb-5">
    <img loading="lazy" src="images/banner/www/PorMarca/BANNER-APPLIED-MOTION-ABR23.webp" alt="Applied Motion Products"
      title="Applied Motion">
  </div>

  <h1 class="main-title">
    <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Soluciones en
      servomotores</span>
    <span
      style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">APPLIED
      MOTION</span>
  </h1>

  <!-- Textos de introducción -->
  <p class="intro-text">
    <strong>Applied Motion Products</strong> se especializa en productos de control de movimiento rentables y de
    alta precisión. Ofrecemos un complemento completo de motores paso a paso y servo, accionamientos, controladores,
    cabezales de engranajes y fuentes de alimentación para servir a una diversa base de clientes industriales y OEM.
  </p>
  <p class="intro-text">
    Adicionalmente ofrece una potente gama de productos estándar. Si su aplicación exige algo inusual o único,
    podemos realizar un diseño para optimizar el rendimiento del producto y así satisfacer sus necesidades. Esta
    capacidad de ofrecer productos personalizados a menudo resulta en una productividad mejorada y una mayor
    confiabilidad para nuestros clientes, reduciendo costos.
  </p>

  <!-- Navegación interna -->
  <nav class="btn-navigation">
    <a class="btn-circle" href="https://tienda.logicbus.com.mx/Applied-Motion-Products_bymfg_172-0-1.html"
      target="_blank">Ver en Tienda</a>
    <a class="btn-circle" href="#categorias">Categorías</a>
    <a class="btn-circle" href="#catalogos">Catálogos</a>
    <a class="btn-circle" href="#articulos">Artículos</a>
    <a class="btn-circle" href="#videos">Videos</a>
    <a class="btn-circle" href="#GuiasyManuales">Guías y Manuales</a>
  </nav>

  <!-- Sección Categorías -->
  <h2 class="section-title" id="categorias">Categorías</h2>
  <div class="products-grid">

    <div class="product-card">
      <img loading="lazy" src="images/nuestras_marcas/Stepservo.webp" alt="STEPSERVO">
      <h4>STEPSERVO</h4>
      <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px; text-align: justify;">Es la próxima evolución
        en tecnología de motor paso a paso. Comenzando con un diseño de motor integrado probado, un codificador
        incremental de alta resolución y firmware de servo de bucle cerrado.</p>
      <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/StepSERVO_c_4396.html" target="_blank">Comprar
        en tienda</a>
    </div>

    <div class="product-card">
      <img loading="lazy" src="images/nuestras_marcas/Motores-paso-a-paso.webp" alt="Motores Paso a Paso">
      <h4>Motores Paso a Paso</h4>
      <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px; text-align: justify;">Son motores diseñados
        para funcionar de manera óptima con los accionamientos paso a paso Applied Motion, garantizando un
        movimiento suave y un alto rendimiento en todas las aplicaciones.</p>
      <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Motores-paso-a-paso_c_4397.html"
        target="_blank">Comprar en tienda</a>
    </div>

    <div class="product-card">
      <img loading="lazy" src="images/nuestras_marcas/Servomotores.webp" alt="Servomotores">
      <h4>Servomotores</h4>
      <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px; text-align: justify;">Actuadores rotativos
        que permiten un control preciso en posición angular, aceleración y velocidad. Vienen en tamaños de
        bastidor de 40, 60 y 80 mm con clasificaciones IP65.</p>
      <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Servomotores_c_4398.html"
        target="_blank">Comprar en tienda</a>
    </div>

    <div class="product-card">
      <img loading="lazy" src="images/nuestras_marcas/Motores-de-corriente-continua-sin-escobillas.webp"
        alt="Motores DC sin escobillas">
      <h4>Motores DC Sin Escobillas</h4>
      <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px; text-align: justify;">Basados en tecnología
        de control avanzada que presenta excelente rendimiento y facilidad de uso. Ideales para aplicaciones que
        requieren estabilidad de alta velocidad en diseño compacto.</p>
      <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/BLDC_c_4399.html" target="_blank">Comprar
        en tienda</a>
    </div>

    <div class="product-card">
      <img loading="lazy" src="images/nuestras_marcas/Engranaje.webp" alt="Engranaje">
      <h4>Engranaje</h4>
      <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px; text-align: justify;">Gama completa de
        engranajes planetarios para aplicaciones de precisión. Presentan altas capacidades de torque, alta
        eficiencia y baja holgura. Ratios de 3:1 a 100:1.</p>
      <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Engranaje_c_4400.html" target="_blank">Comprar
        en tienda</a>
    </div>

  </div>

  <!-- Sección Catálogos -->
  <h2 class="section-title" id="catalogos">Catálogos</h2>
  <div class="catalog-wrap">
    <a href="https://www.logicbus.com.mx/pdf/catalogos/Applied-Motion.pdf" target="_blank" class="catalog-item">
      <span class="pdf-badge">PDF Digital</span>
      <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/applied-motion.webp"
        alt="Catálogo Applied Motion">
      <h4>Catálogo de Productos Applied Motion</h4>
    </a>
  </div>

  <!-- Sección Guías y Manuales -->
  <h2 class="section-title" id="GuiasyManuales">Guías y Manuales</h2>
  <div class="text-center mb-5 pb-4">
    <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=applied+motion" class="ghost-manual-box">
      <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">
      <span>Ver Documentación</span>
    </a>
  </div>

  <div class="container my-5">
    <h2 class="section-title bg-transparent" id="articulos">Artículos</h2>

    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <a href="https://www.logicbus.com.mx/blog/applied-motion-product-moons-industries-en-conjunto-con-un-diseno-excepcional-y-calidad-mundial/"
            target="_blank">
            <img class="card-img-top" src="images/articulos-portadas/telescopio fast-applied-motion.webp"
              alt="La tecnología que mueve al telescopio FAST"
              style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
          </a>
          <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">La tecnología que mueve
              al telescopio FAST</h5>
            <p class="card-text text-muted flex-grow-1">¿Sabías que la tecnología que mueve al telescopio Aperture
              Spherical Telescope de China el cual tiene una apertura de 500 metros, está disponible en los productos de
              Applied Motion?</p>
            <a href="https://www.logicbus.com.mx/blog/applied-motion-product-moons-industries-en-conjunto-con-un-diseno-excepcional-y-calidad-mundial/"
              target="_blank" class="btn text-white rounded-pill mt-3"
              style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer
              artículo</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <a href="https://www.logicbus.com.mx/blog/por-que-escoger-applied-motion-en-tus-proyectos/" target="_blank">
            <img class="card-img-top" src="images/articulos-portadas/applied-motion-proyectos.webp"
              alt="¿Por qué escoger Applied Motion en tus proyectos?"
              style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
          </a>
          <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">¿Por qué escoger Applied
              Motion en tus proyectos?</h5>
            <p class="card-text text-muted flex-grow-1">¿Buscas conocer los beneficios del producto de manera clara y
              resumida? Por eso te presentamos brevemente algunas de las características clave de la marca Applied
              Motion Products.</p>
            <a href="https://www.logicbus.com.mx/blog/por-que-escoger-applied-motion-en-tus-proyectos/" target="_blank"
              class="btn text-white rounded-pill mt-3"
              style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer
              artículo</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <a href="https://www.logicbus.com.mx/blog/los-servomotores-de-applied-motion/" target="_blank">
            <img class="card-img-top" src="images/articulos-portadas/servomotores-applied-motion.webp"
              alt="Los servomotores de Applied Motion"
              style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
          </a>
          <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Los servomotores de
              Applied Motion</h5>
            <p class="card-text text-muted flex-grow-1">El día de hoy vamos a hablar de los servomotores de Applied
              Motion ¿Qué son y cómo nos pueden ayudar en la industria? Vamos a descubrirlo.</p>
            <a href="https://www.logicbus.com.mx/blog/los-servomotores-de-applied-motion/" target="_blank"
              class="btn text-white rounded-pill mt-3"
              style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer
              artículo</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <a href="https://www.logicbus.com.mx/blog/los-motores-integrados-stepservo-resuelven-problemas-de-calor-para-una-empresa-de-ciencias-biologicas/"
            target="_blank">
            <img class="card-img-top" src="images/articulos-portadas/stepservo-applied-motion.webp"
              alt="Motores integrados StepSERVO"
              style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
          </a>
          <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Motores integrados
              StepSERVO™ resuelven problemas</h5>
            <p class="card-text text-muted flex-grow-1">Applied Motion Products resolvió los problemas de calor
              asociados con un sistema de bomba peristáltica que suministra materiales a un biorreactor de ciencias
              biológicas.</p>
            <a href="https://www.logicbus.com.mx/blog/los-motores-integrados-stepservo-resuelven-problemas-de-calor-para-una-empresa-de-ciencias-biologicas/"
              target="_blank" class="btn text-white rounded-pill mt-3"
              style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer
              artículo</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Sección Videos -->
  <h2 class="section-title" id="videos">Videos</h2>
  <div class="products-grid" style="max-width: 1000px;">
    <div class="video-container" data-video-id="xHYMw1fWuYI">
      <img loading="lazy" src="https://img.youtube.com/vi/xHYMw1fWuYI/hqdefault.jpg" alt="Video Applied Motion 1">
      <div class="play-button"></div>
    </div>
    <div class="video-container" data-video-id="PwwT_f3XTAY">
      <img loading="lazy" src="https://img.youtube.com/vi/PwwT_f3XTAY/hqdefault.jpg" alt="Video Applied Motion 2">
      <div class="play-button"></div>
    </div>
    <div class="video-container" data-video-id="-62zU8LEuHA">
      <img loading="lazy" src="https://img.youtube.com/vi/-62zU8LEuHA/hqdefault.jpg" alt="Video Applied Motion 3">
      <div class="play-button"></div>
    </div>
    <div class="video-container" data-video-id="YaKaKkRu29M">
      <img loading="lazy" src="https://img.youtube.com/vi/YaKaKkRu29M/hqdefault.jpg" alt="Video Applied Motion 4">
      <div class="play-button"></div>
    </div>
  </div>
  <div class="text-center mb-5 mt-4">
    <a class="btn-circle" href="https://www.youtube.com/playlist?list=PL9EhLTarrD6OvBRcKfqYccDg1KtZDgi0j"
      target="_blank">Ver todos los videos en YouTube</a>
  </div>

  <!-- Contacto (Diseño Odoo) -->
  <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
    <div class="container mb-5">
      <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">COTIZA TUS EQUIPOS APPLIED MOTION
      </h2>
      <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestro equipo de ingenieros está
        listo para ayudarte a seleccionar los motores ideales para tu proyecto.</span>
    </div>
    <!-- BEGIN Odoo web form -->
    <div class="container">
      <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
        <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
          style="width:100%; min-height:1200px; border:0;"></iframe>
      </div>
    </div>
    <!-- END Odoo web form -->
  </div>

  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>

  <script>
    // Carga ligera de Videos de YouTube
    document.addEventListener('DOMContentLoaded', function () {
      var videoContainers = document.querySelectorAll('.video-container');

      videoContainers.forEach(function (container) {
        container.addEventListener('click', function () {
          var videoId = this.dataset.videoId;
          var iframe = document.createElement('iframe');
          iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
          iframe.setAttribute('title', 'YouTube video player');
          iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
          iframe.setAttribute('allowfullscreen', '');

          this.innerHTML = '';
          this.appendChild(iframe);
        });
      });
    });
  </script>
</body>
<?php echo $var_footer; ?>

</html>