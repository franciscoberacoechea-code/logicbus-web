<?php require("admin/config.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Futek México | Celdas de carga | Marca Exclusiva Logicbus</title>
  <meta name="description"
    content="Fabricante de celdas de carga, sensores de torque, sensores de presión, sensores multi ejes e instrumentos y software para los sensores.">
  <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

  <?php echo $favicon; ?>
  <?php echo $boostrap_css; ?>
  <?php echo $own_file_css; ?>
  <?php echo $subcategorias; ?>
  <?php echo $menu; ?>
  <?php echo $estilos; ?>
  <?php echo $footer_css; ?>
  <?php echo $flickity_css; ?>
  <?php echo $carrusel_productos; ?>
  <?php echo $google_analytics; ?>
  <?php echo $var_headers; ?>


  <style>
    #leftBar {
      display: none;
    }

    .video-container {
      position: relative;
      cursor: pointer;
      border-radius: 15px;
      overflow: hidden;
      padding-top: 56.25%;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      background-color: #000;
      width: 100%;
      flex: 1 1 300px;
      max-width: 400px;
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
      width: 70px;
      height: 70px;
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
      border-width: 12px 0 12px 20px;
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

    .btn-wsp {
      display: flex !important;
      justify-content: center !important;
      align-items: center !important;
      padding: 0 !important;
      text-decoration: none !important;
    }

    .btn-wsp .icono {
      margin: 0 !important;
      padding: 0 !important;
      line-height: 1 !important;
      display: block !important;
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
        <li class="breadcrumb-item"><a href="transductores-sensores" class="blue link-orange">Sensores y
            Transductores</a></li>
        <li class="breadcrumb-item active" aria-current="page">Futek</li>
      </ol>
    </nav>
  </div>

  <!-- Banner Video 100% -->
  <div class="banner-container mb-5">
    <video autoplay muted loop playsinline width="100%"
      poster="images/nuestras_marcas/futek/Banner-rover-nasa-futek.webp"
      style="object-fit: cover; max-height: 500px; display: block;">
      <source src="https://www.logicbus.com.mx/assets/videos/futek-banner.mp4" type="video/mp4">
    </video>
  </div>

  <h1 class="main-title">
    <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Sensores y
      Transductores</span>
    <span
      style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">FUTEK
      ADVANCED SENSOR TECHNOLOGY</span>
  </h1>

  <!-- Textos de introducción -->
  <p class="intro-text">
    <strong>FUTEK Advanced Sensor Technology Inc.</strong>, es un fabricante estadounidense de celdas de carga,
    sensores de torque, sensores de presión, sensores multieje, software e instrumentos relacionados. Con su oficina
    central ubicada en el sur de California, EE. UU., FUTEK se ha labrado una reputación como proveedor de calidad
    de productos de señales de control, prueba y medición.
  </p>
  <p class="intro-text">
    Al especializarse en la investigación y el desarrollo de estos dispositivos de detección avanzados, los
    productos de FUTEK tienen numerosas aplicaciones en sectores tan diversos como la medicina, la industria
    alimenticia, la industria aeroespacial, la integración de sistemas, la automatización y la robótica.
  </p>

  <!-- Navegación interna -->
  <nav class="btn-navigation mb-5">
    <a class="btn-circle" href="https://tienda.logicbus.com.mx/futek" target="_blank">Ver en Tienda</a>
    <a class="btn-circle" href="https://www.logicbus.com.mx/buscador-celdas" target="_blank">Buscador de celdas</a>
    <a class="btn-circle" href="#productos">Productos</a>
    <a class="btn-circle" href="#familias">Familias</a>
    <a class="btn-circle" href="#catalogos">Catálogos</a>
    <a class="btn-circle" href="#videos">Videos</a>
  </nav>

  <!-- Bloque Compromiso FUTEK -->
  <div class="container mb-5">
    <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4">
      <div class="col-md-5 text-center mb-4 mb-md-0">
        <a href="https://youtube.com/playlist?list=PL9EhLTarrD6N9kCnzJzP9Xtg-DeDujrvv" target="_blank">
          <img loading="lazy" src="https://www.logicbus.com.mx/images/app/seleccionar-celda-futek.webp"
            class="img-fluid rounded shadow-sm border" alt="Seleccionar una celda de carga">
        </a>
      </div>
      <div class="col-md-7">
        <p class="text-justify text-muted mb-4">
          Este fabricante de tecnología innovadora pone a su servicio su gran experiencia en la integración de
          sistemas con una gama completa de soluciones de instrumentación y software que le permiten
          configurar una plataforma de prueba integral. FUTEK está homologado como laboratorio de calibración
          conforme a la certificación Z540 (ANSI), y su línea cuenta con certificaciones CE y RoHS.
        </p>
        <div class="row">
          <div class="col-sm-6 mb-3">
            <h5 style="color: var(--lb-primary); font-size: 1.1rem; font-weight: bold;">Compromiso FUTEK
              (OEM):</h5>
            <ul class="text-muted small pl-3">
              <li>Certificaciones y acreditaciones fiables</li>
              <li>Fabricación en los EE. UU.</li>
              <li>Programas de control de inventarios (Kanban)</li>
              <li>Diseño indicado para la integración</li>
              <li>Puntualidad en los plazos</li>
              <li>Soluciones rentables</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 style="color: var(--lb-primary); font-size: 1.1rem; font-weight: bold;">Principales
              opciones:</h5>
            <ul class="text-muted small pl-3">
              <li>Miniaturización</li>
              <li>Protección contra sobrecargas</li>
              <li>Rango de capacidad ampliable</li>
              <li>Opción para uso en fatiga</li>
              <li>Composición del material</li>
              <li>Opciones de personalización</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- INDUSTRIAS -->
  <h2 class="section-title" id="industrias">Industrias</h2>
  <div class="container mb-5">
    <div class="row justify-content-center text-center gap-3">
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 150px; height: 150px;">
          <div class="face front position-absolute w-100 h-100 rounded overflow-hidden" style="transition: .5s;">
            <img loading="lazy"
              src="https://www.logicbus.com.mx/imagenes/iconos/futek/Imagenes_aeroespacial_sin_fondo.webp"
              alt="Aeroespacial" class="w-100 h-100">
          </div>
          <div
            class="face back position-absolute w-100 h-100 d-flex flex-column justify-content-between text-center text-black bg-img p-3 rounded overflow-hidden"
            style="transition: .5s;">
            <br>
            <h3 class="mt-2" style="font-size: 11px;"><strong>Aeroespacial</strong></h3>
            <div class="link h-50"><a
                href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-espacial-defensa-aeronautica"
                class="btn btn-orange btn-sm">ver más</a></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 150px; height: 150px;">
          <div class="face front position-absolute w-100 h-100 rounded overflow-hidden" style="transition: .5s;">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/iconos/futek/Carrusel.webp" alt="Agrícola"
              class="w-100 h-100">
          </div>
          <div
            class="face back position-absolute w-100 h-100 d-flex flex-column justify-content-between text-center text-black bg-img p-3 rounded overflow-hidden"
            style="transition: .5s;">
            <br>
            <h3 class="mt-2" style="font-size: 11px; letter-spacing: 2px;"><strong>Agrícola</strong></h3>
            <div class="link h-50"><a
                href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-agricultura"
                class="btn btn-orange btn-sm">ver más</a></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 150px; height: 150px;">
          <div class="face front position-absolute w-100 h-100 rounded overflow-hidden" style="transition: .5s;">
            <img loading="lazy"
              src="https://www.logicbus.com.mx/imagenes/iconos/futek/Imagen_Automatizacion_sin_fondo.webp"
              alt="Automatización" class="w-100 h-100">
          </div>
          <div
            class="face back position-absolute w-100 h-100 d-flex flex-column justify-content-between text-center text-black bg-img p-3 rounded overflow-hidden"
            style="transition: .5s;">
            <br>
            <h3 class="mt-2" style="font-size: 11px;"><strong>Automatización</strong></h3>
            <div class="link h-50"><a
                href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-agricultura"
                class="btn btn-orange btn-sm">ver más</a></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 150px; height: 150px;">
          <div class="face front position-absolute w-100 h-100 rounded overflow-hidden" style="transition: .5s;">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/iconos/futek/Imagen_Automotor_sin_fondo.webp"
              alt="Automotor" class="w-100 h-100">
          </div>
          <div
            class="face back position-absolute w-100 h-100 d-flex flex-column justify-content-between text-center text-black bg-img p-3 rounded overflow-hidden"
            style="transition: .5s;">
            <br>
            <h3 class="mt-2" style="font-size: 11px; letter-spacing: 2px;"><strong>Automotor</strong></h3>
            <div class="link h-50"><a
                href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-transporte"
                class="btn btn-orange btn-sm">ver más</a></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 150px; height: 150px;">
          <div class="face front position-absolute w-100 h-100 rounded overflow-hidden" style="transition: .5s;">
            <img loading="lazy"
              src="https://www.logicbus.com.mx/imagenes/iconos/futek/Imagen_Fabricacion_sin_fondo.webp"
              alt="Fabricación" class="w-100 h-100">
          </div>
          <div
            class="face back position-absolute w-100 h-100 d-flex flex-column justify-content-between text-center text-black bg-img p-3 rounded overflow-hidden"
            style="transition: .5s;">
            <br>
            <h3 class="mt-2" style="font-size: 11px; letter-spacing: 2px;"><strong>Fabricación</strong></h3>
            <div class="link h-50"><a
                href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-manufactura"
                class="btn btn-orange btn-sm">ver más</a></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 150px; height: 150px;">
          <div class="face front position-absolute w-100 h-100 rounded overflow-hidden" style="transition: .5s;">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/iconos/futek/Imagen_Medicina_sin_fondo.webp"
              alt="Médico" class="w-100 h-100">
          </div>
          <div
            class="face back position-absolute w-100 h-100 d-flex flex-column justify-content-between text-center text-black bg-img p-3 rounded overflow-hidden"
            style="transition: .5s;">
            <br>
            <h3 class="mt-2" style="font-size: 11px; letter-spacing: 2px;"><strong>Médico y
                farmacéutico</strong></h3>
            <div class="link h-50"><a
                href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-farmaceutica-y-laboratorio"
                class="btn btn-orange btn-sm">ver más</a></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 150px; height: 150px;">
          <div class="face front position-absolute w-100 h-100 rounded overflow-hidden" style="transition: .5s;">
            <img loading="lazy"
              src="https://www.logicbus.com.mx/imagenes/iconos/futek/Imagen_Resistencia_materiales_sin_fondo.webp"
              alt="Ensayos" class="w-100 h-100">
          </div>
          <div
            class="face back position-absolute w-100 h-100 d-flex flex-column justify-content-between text-center text-black bg-img p-3 rounded overflow-hidden"
            style="transition: .5s;">
            <br>
            <h3 class="mt-2" style="font-size: 11px;"><strong>Ensayos de resistencia</strong></h3>
            <div class="link h-50"><a
                href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-ensayos-de-materiales-y-resistencia"
                class="btn btn-orange btn-sm">ver más</a></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 150px; height: 150px;">
          <div class="face front position-absolute w-100 h-100 rounded overflow-hidden" style="transition: .5s;">
            <img loading="lazy"
              src="https://www.logicbus.com.mx/imagenes/iconos/futek/Imagen_Sistemas_roboticos_sin_fondo.webp"
              alt="Robótica" class="w-100 h-100">
          </div>
          <div
            class="face back position-absolute w-100 h-100 d-flex flex-column justify-content-between text-center text-black bg-img p-3 rounded overflow-hidden"
            style="transition: .5s;">
            <br>
            <h3 class="mt-2" style="font-size: 11px;"><strong>Integradores y robótica</strong></h3>
            <div class="link h-50"><a
                href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-robotica"
                class="btn btn-orange btn-sm">ver más</a></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 150px; height: 150px;">
          <div class="face front position-absolute w-100 h-100 rounded overflow-hidden" style="transition: .5s;">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/iconos/futek/Imagen_OEEE_sin_fondo.webp"
              alt="OEM" class="w-100 h-100">
          </div>
          <div
            class="face back position-absolute w-100 h-100 d-flex flex-column justify-content-between text-center text-black bg-img p-3 rounded overflow-hidden"
            style="transition: .5s;">
            <br>
            <h3 class="mt-2" style="font-size: 11px;"><strong>Desarrollo y OEM</strong></h3>
            <div class="link h-50"><a
                href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-desarrollo-de-productos-y-oem"
                class="btn btn-orange btn-sm">ver más</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- PRODUCTOS (Celdas de Carga) -->
  <h2 class="section-title mt-5" id="productos">Celdas de Carga</h2>
  <div class="container mb-5">
    <div class="products-grid">

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/Barra_c_1834.html" target="_blank">
          <img loading="lazy" src="./images/futek/celdas-de-carga-tipo-barra.webp" alt="Celdas tipo barra">
        </a>
        <h4 class="mt-3">Celdas de carga tipo barra</h4>
        <p class="small text-muted text-justify flex-grow-1">Diseñadas para aplicaciones que incluyen actuadores
          o jacks hidráulicos con roscas macho/hembra.</p>
        <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Barra_c_1834.html"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton"
          target="_blank">
          <img loading="lazy" src="./images/futek/celdas-de-carga.webp" alt="Celdas tipo botón">
        </a>
        <h4 class="mt-3">Celdas de carga tipo botón</h4>
        <p class="small text-muted text-justify flex-grow-1">Desarrollados para aplicaciones de compresión en
          línea, prensa o carga descentrada (miniatura y subminiatura).</p>
        <a class="btn-circle mt-auto mx-auto"
          href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-columna"
          target="_blank">
          <img loading="lazy" src="./images/futek/celdas-de-carga-de-tipo-columna.webp" alt="Celdas tipo columna">
        </a>
        <h4 class="mt-3">Celdas tipo columna</h4>
        <p class="small text-muted text-justify flex-grow-1">Para compresión de alta capacidad (2,000 a 30,000
          lbs). Ideales para aplicaciones donde el tamaño es crítico.</p>
        <a class="btn-circle mt-auto mx-auto"
          href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-columna"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-en-linea"
          target="_blank">
          <img loading="lazy" src="./images/futek/celda-de-carga-en-linea.webp" alt="Celdas en línea">
        </a>
        <h4 class="mt-3">Celdas en línea</h4>
        <p class="small text-muted text-justify flex-grow-1">Construidas para resistencia, carga descentrada o
          compresión. Ofrecen estructura robusta con amplio rango de capacidad.</p>
        <a class="btn-circle mt-auto mx-auto"
          href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-en-linea"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-dona"
          target="_blank">
          <img loading="lazy" src="./images/futek/celdas-de-carga-tipo-dona.webp" alt="Celdas tipo dona">
        </a>
        <h4 class="mt-3">Celdas tipo dona</h4>
        <p class="small text-muted text-justify flex-grow-1">Con diseño de orificio compacto para uso en
          aplicaciones que requieren que la estructura pase a través del sensor.</p>
        <a class="btn-circle mt-auto mx-auto"
          href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-dona"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-low-profile-tension-compresion"
          target="_blank">
          <img loading="lazy" src="./images/futek/celdas-de-carga-low-profile.webp" alt="Celdas low profile">
        </a>
        <h4 class="mt-3">Celdas low profile</h4>
        <p class="small text-muted text-justify flex-grow-1">Capacidad de 0.25 lbs a 1,000 lbs con protección de
          sobrecarga. Ideales para pruebas de durabilidad y fatiga.</p>
        <a class="btn-circle mt-auto mx-auto"
          href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-low-profile-tension-compresion"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-aplicaciones-medicas"
          target="_blank">
          <img loading="lazy" src="./images/futek/celdas-de-carga-para-aplicaciones-medicas.webp" alt="Celdas médicas">
        </a>
        <h4 class="mt-3">Aplicaciones médicas</h4>
        <p class="small text-muted text-justify flex-grow-1">Solución ideal para el sector médico y automotriz.
          Fabricada de aluminio liviano con rango de aplicación versátil.</p>
        <a class="btn-circle mt-auto mx-auto"
          href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-aplicaciones-medicas"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-viga-de-flexion"
          target="_blank">
          <img loading="lazy" src="./images/futek/celdas-de-carga-tipo-viga.webp" alt="Celdas tipo viga">
        </a>
        <h4 class="mt-3">Celdas tipo viga</h4>
        <p class="small text-muted text-justify flex-grow-1">Ofrecen diseños delgados con resistencia excelente,
          ideales para OEM. Su principal ventaja es el tamaño miniatura.</p>
        <a class="btn-circle mt-auto mx-auto"
          href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-viga-de-flexion"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-pancake"
          target="_blank">
          <img loading="lazy" src="./images/futek/celdas-de-carga-tipo-pancake.webp" alt="Celdas tipo pancake">
        </a>
        <h4 class="mt-3">Celdas tipo pancake</h4>
        <p class="small text-muted text-justify flex-grow-1">Para resistencia, carga descentrada o en línea.
          Diseño compacto logrando mediciones precisas (tensión/compresión).</p>
        <a class="btn-circle mt-auto mx-auto"
          href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-pancake"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-s"
          target="_blank">
          <img loading="lazy" src="./images/futek/celdas-de-carga-tipo-s.webp" alt="Celdas tipo S">
        </a>
        <h4 class="mt-3">Celdas tipo S</h4>
        <p class="small text-muted text-justify flex-grow-1">Miden tensión y compresión, recibiendo su nombre
          por su cuerpo en forma de S. Diseño compacto para plataformas/silos.</p>
        <a class="btn-circle mt-auto mx-auto"
          href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-s"
          target="_blank">Ver modelos</a>
      </div>

    </div>
  </div>

  <!-- PRODUCTOS (Tipo de Sensor) -->
  <h2 class="section-title mt-5">Tipo de Sensor</h2>
  <div class="container mb-5">
    <div class="products-grid">

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/TDF400_c_1912.html" target="_blank">
          <img loading="lazy" src="./images/futek/sensor-de-torque-de-brida-a-eje-cuadrado.webp"
            alt="Sensor brida a eje cuadrado">
        </a>
        <h4 class="mt-3">Brida a eje cuadrado</h4>
        <p class="small text-muted text-justify flex-grow-1">Ideal para medición precisa de par en
          configuraciones híbridas de montaje, con alta estabilidad.</p>
        <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/TDF400_c_1912.html"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio" target="_blank">
          <img loading="lazy" src="./images/futek/sensor-de-torque-rotativo-con-accionamiento-hexagonal.webp"
            alt="Sensor accionamiento hexagonal">
        </a>
        <h4 class="mt-3">Accionamiento hexagonal</h4>
        <p class="small text-muted text-justify flex-grow-1">Diseñado para facilitar integración con
          herramientas de ensamblaje, permitiendo mediciones de par dinámico.</p>
        <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio"
          target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-de-reaccion" target="_blank">
          <img loading="lazy"
            src="./images/futek/sensor-de-torque-de-reaccion-con-orificio-pasante-de-brida-a-brida.webp"
            alt="Sensor brida a brida">
        </a>
        <h4 class="mt-3">Orificio pasante (brida a brida)</h4>
        <p class="small text-muted text-justify flex-grow-1">Ideal para integrarse fácilmente en sistemas donde
          se requiere alta rigidez y medición precisa estática.</p>
        <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-de-reaccion" target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio" target="_blank">
          <img loading="lazy" src="./images/futek/sensor-de-torque-rotativo-con-accionamiento-cuadrado.webp"
            alt="Sensor accionamiento cuadrado">
        </a>
        <h4 class="mt-3">Accionamiento cuadrado</h4>
        <p class="small text-muted text-justify flex-grow-1">Para aplicaciones de control y calibración de
          herramientas, ofreciendo mediciones dinámicas precisas.</p>
        <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio" target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-de-reaccion" target="_blank">
          <img loading="lazy" src="./images/futek/sensor-de-torque-para-destornillador.webp"
            alt="Sensor destornillador">
        </a>
        <h4 class="mt-3">Sensor para destornillador</h4>
        <p class="small text-muted text-justify flex-grow-1">Sensor compacto para destornilladores eléctricos o
          manuales, verificando el par aplicado en ensamblaje.</p>
        <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-de-reaccion" target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-de-reaccion" target="_blank">
          <img loading="lazy" src="./images/futek/sensor-de-torque-de-reaccion-de-eje-a-eje.webp"
            alt="Sensor de eje a eje">
        </a>
        <h4 class="mt-3">Reacción de eje a eje</h4>
        <p class="small text-muted text-justify flex-grow-1">Diseñado para mediciones estáticas o semiestáticas
          de par con alta precisión en entornos exigentes.</p>
        <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-de-reaccion" target="_blank">Ver modelos</a>
      </div>

      <div class="product-card">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio" target="_blank">
          <img loading="lazy" src="./images/futek/sensor-de-torque-rotativo-de-eje-a-eje-con-encoder.webp"
            alt="Sensor con encoder">
        </a>
        <h4 class="mt-3">Eje a eje con encoder</h4>
        <p class="small text-muted text-justify flex-grow-1">Sensor con encoder integrado, ideal para procesos
          que requieren medición precisa de par y velocidad.</p>
        <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio" target="_blank">Ver modelos</a>
      </div>

    </div>
  </div>

  <section class="container" id="familias">
    <h2 class="section-title mt-5">FAMILIAS</h2>
    <div class="cards">
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/LCA.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="LCA" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/LCB.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="LCB" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/LCF.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="LCF" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/LCM.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="LCM" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/LLB.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="LLB" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/LRF.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="LRF" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/LSB.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="LSB" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/LSM.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="LSM" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/LTH.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="LTH" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/TDD.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="TDD" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/TDF.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="TDF" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/TFF.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="TFF" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/TRD.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="TRD" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/TRH.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="TRH" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/TRS.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="TRS" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
      <div class="card card-pdf">
        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/36/Manuales/TSS.webp">
        <div class="card-desc">
          <button type="button" class="btn btn-outline-warning openModal" data-celda="TSS" data-toggle="modal"
            data-target="#exampleModal">Ver</button>
        </div>
      </div>
    </div>
  </section>


  <!-- Catálogos y Clientes -->
  <h2 class="section-title mt-5" id="catalogos">Catálogos y Guías</h2>
  <div class="catalog-wrap mb-5">
    <a href="pdf/36/catalogo-Futek.pdf" target="_blank" class="catalog-item">
      <span class="pdf-badge">PDF Digital</span>
      <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogo-futek.webp" alt="Catálogo FUTEK">
      <h4>Catálogo FUTEK</h4>
    </a>
    <a href="pdf/36/FUTEK-catalogo-completo.pdf" target="_blank" class="catalog-item">
      <span class="pdf-badge">PDF Digital</span>
      <img loading="lazy" src="https://www.logicbus.com.mx/pdf/Portada-Futek-Catalogo-completo.webp"
        alt="Catálogo Completo">
      <h4>Catálogo Completo</h4>
    </a>
    <a href="pdf/36/FUTEK-APLICACIONES.pdf" target="_blank" class="catalog-item">
      <span class="pdf-badge">PDF Digital</span>
      <img loading="lazy" src="https://www.logicbus.com.mx/pdf/Portada-Futek-Aplicaciones.webp"
        alt="Guía de Aplicaciones">
      <h4>Guía de Aplicaciones</h4>
    </a>
  </div>

  <h2 class="section-title mt-5" id="clientes">Nuestros Clientes</h2>
  <div class="container mb-5 mt-4">
    <div class="d-flex flex-wrap justify-content-center align-items-center">
      <a href="https://www.logicbus.com.mx/clientes-logicbus" class="mx-4 my-3">
        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestros_clientes/clientes-futek/Unam.webp"
          alt="UNAM" style="max-height: 110px; transition: transform 0.3s ease;"
          onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
      </a>
      <a href="https://www.logicbus.com.mx/clientes-logicbus" class="mx-4 my-3">
        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestros_clientes/clientes-futek/nidec.webp"
          alt="Nidec" style="max-height: 110px; transition: transform 0.3s ease;"
          onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
      </a>
      <a href="https://www.logicbus.com.mx/clientes-logicbus" class="mx-4 my-3">
        <img loading="lazy"
          src="https://www.logicbus.com.mx/images/nuestros_clientes/clientes-futek/moce-ingenieria.webp"
          alt="Moce Ingeniería" style="max-height: 110px; transition: transform 0.3s ease;"
          onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
      </a>
      <a href="https://www.logicbus.com.mx/clientes-logicbus" class="mx-4 my-3">
        <img loading="lazy"
          src="https://www.logicbus.com.mx/images/nuestros_clientes/clientes-futek/IndustrialAtomation.webp"
          alt="Industrial Automation" style="max-height: 110px; transition: transform 0.3s ease;"
          onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
      </a>
      <a href="https://www.logicbus.com.mx/clientes-logicbus" class="mx-4 my-3">
        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestros_clientes/clientes-futek/calvek.webp"
          alt="Calvek" style="max-height: 110px; transition: transform 0.3s ease;"
          onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
      </a>
    </div>
  </div>

  <!-- Artículos -->
  <h2 class="section-title mt-5" id="blog">Artículos</h2>
  <div class="products-grid mb-5">
    <div class="product-card">
      <a href="https://www.logicbus.com.mx/blog/como-seleccionar-una-celda-de-carga/" target="_blank">
        <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/36/BANNER-66.webp"
          alt="¿Cómo seleccionar una celda de carga?">
      </a>
      <h4>¿Cómo seleccionar una celda de carga?</h4>
      <a class="btn-circle mt-auto mx-auto" href="https://www.logicbus.com.mx/blog/como-seleccionar-una-celda-de-carga/"
        target="_blank">Leer
        artículo</a>
    </div>
    <div class="product-card">
      <a href="https://www.logicbus.com.mx/blog/aplicaciones-con-celdas-de-carga/" target="_blank">
        <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/36/Portada-Blog-Aplicaciones-Futek.webp"
          alt="Aplicaciones con Celdas de Carga">
      </a>
      <h4>Aplicaciones con Celdas de Carga</h4>
      <a class="btn-circle mt-auto mx-auto" href="https://www.logicbus.com.mx/blog/aplicaciones-con-celdas-de-carga/"
        target="_blank">Leer
        artículo</a>
    </div>
    <div class="product-card">
      <a href="https://www.logicbus.com.mx/blog/miniaturizando-nuestro-sensor-miniatura-lsb200/" target="_blank">
        <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/36/image13-1.webp"
          alt="Miniaturizando nuestro sensor LSB200">
      </a>
      <h4>Miniaturizando nuestro sensor LSB200</h4>
      <a class="btn-circle mt-auto mx-auto"
        href="https://www.logicbus.com.mx/blog/miniaturizando-nuestro-sensor-miniatura-lsb200/" target="_blank">Leer
        artículo</a>
    </div>
    <div class="product-card">
      <a href="https://www.logicbus.com.mx/blog/ejemplos-de-uso-de-sensores-de-torque-futek/" target="_blank">
        <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/36/Ejemplos-torque.webp"
          alt="Ejemplos de uso de sensores de torque">
      </a>
      <h4>Ejemplos de uso de sensores de torque</h4>
      <a class="btn-circle mt-auto mx-auto"
        href="https://www.logicbus.com.mx/blog/ejemplos-de-uso-de-sensores-de-torque-futek/" target="_blank">Leer
        artículo</a>
    </div>
  </div>

  <!-- Videos -->
  <h2 class="section-title mt-5" id="videos">Videos</h2>
  <div class="container mb-5">
    <div class="row justify-content-center">
      <!-- Video 1 -->
      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="video-container" data-video-id="lhKzMPJW7UY">
          <img loading="lazy" src="https://img.youtube.com/vi/lhKzMPJW7UY/hqdefault.jpg" alt="Video Futek 1">
          <div class="play-button"></div>
        </div>
      </div>
      <!-- Video 2 -->
      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="video-container" data-video-id="q2pj03Rh4g8">
          <img loading="lazy" src="https://img.youtube.com/vi/q2pj03Rh4g8/hqdefault.jpg" alt="Video Futek 2">
          <div class="play-button"></div>
        </div>
      </div>
      <!-- Video 3 -->
      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="video-container" data-video-id="Yv4P1juusPg">
          <img loading="lazy" src="https://img.youtube.com/vi/Yv4P1juusPg/hqdefault.jpg" alt="Video Futek 3">
          <div class="play-button"></div>
        </div>
      </div>
      <!-- Video 4 -->
      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="video-container" data-video-id="6l-l09sSCV4">
          <img loading="lazy" src="https://img.youtube.com/vi/6l-l09sSCV4/hqdefault.jpg" alt="Video Futek 4">
          <div class="play-button"></div>
        </div>
      </div>
    </div>

    <!-- Botón Ver Todos -->
    <div class="text-center mt-4 mb-5">
      <a class="btn-circle d-inline-block" href="https://youtube.com/playlist?list=PL9EhLTarrD6N9kCnzJzP9Xtg-DeDujrvv"
        target="_blank" style="width: auto; padding: 10px 30px;">
        Ver todos los videos de Futek
      </a>
    </div>
  </div>

  <!-- Contacto (Diseño Odoo Base) -->
  <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
    <div class="container mb-5">
      <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN SOBRE
        FUTEK?</h2>
      <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Déjanos ayudarte! Estamos aquí
        para encontrar las mejores soluciones en medición de fuerza, torque y presión para tu proyecto.</span>
    </div>
    <!-- BEGIN Odoo web form -->
    <div class="container">
      <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
        <iframe loading="lazy" src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
          style="width:100%; min-height:1200px; border:0;"></iframe>
      </div>
    </div>
    <!-- END Odoo web form -->
  </div>

  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>

  <!-- Scripts -->
  <?php echo $jquery_js; ?>
  <?php echo $popper_js; ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $own_file_js; ?>
  <?php echo $flickity_js; ?>

  <script>
    // JAVASCRIPT PARA CARGAR VIDEOS DE YOUTUBE AL HACER CLIC
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