<?php require("admin/config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Robots Móviles Autónomos (AMR y AGV) - Logicbus</title>
  <meta name="description"
    content="Optimice su flujo de trabajo industrial con robots móviles autónomos (AMR) y vehículos guiados (AGV). Soluciones de transporte inteligente.">

  <!-- PHP Headers -->
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

  <!-- Fuentes y Estilos Externos -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/logisticbus-landing.css">

  <!-- Estilos en línea -->
  <style>
    .btn-wsp {
      box-sizing: border-box !important;
      width: 60px !important;
      height: 60px !important;
      padding: 0 !important;
      display: flex !important;
      justify-content: center !important;
      align-items: center !important;
    }

    .btn-wsp i,
    .btn-wsp::before {
      line-height: 1 !important;
      margin: 0 !important;
    }

    /* Efecto hover naranja para los botones del catálogo */
    .catalog-btn {
      transition: all 0.3s ease !important;
    }

    .catalog-btn:hover {
      background-color: #ff6600 !important; 
      color: #ffffff !important;
      border-color: #ff6600 !important;
    }
  </style>

  <!-- Datos Estructurados SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "¿Qué diferencia hay entre AMR y AGV?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "La principal diferencia entre un AMR (Autonomous Mobile Robot) y un AGV (Automated Guided Vehicle) está en cómo se mueven y toman decisiones dentro de una operación. Los AGV siguen rutas predefinidas como líneas magnéticas, códigos QR o rieles, lo que los hace ideales para procesos repetitivos y entornos controlados, pero poco flexibles ante cambios. Si encuentran un obstáculo, normalmente se detienen hasta que se libere el camino. En cambio, los AMR navegan de forma autónoma utilizando sensores, cámaras e inteligencia artificial. Pueden mapear su entorno, evitar obstáculos y recalcular rutas en tiempo real sin necesidad de infraestructura física adicional. En resumen, los AGV ofrecen rutas fijas y alta predictibilidad, mientras que los AMR brindan navegación inteligente y máxima flexibilidad. La elección depende del tipo de operación, la estabilidad del layout y el nivel de automatización requerido."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuánto cuesta un robot AMR en México?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "El costo de un robot AMR en México puede variar ampliamente dependiendo de factores como la capacidad de carga (ligera, media o pesada), el nivel de autonomía y software, la marca y configuración (como módulos superiores o sistemas de gestión de flotas), y la integración con sistemas existentes como WMS o ERP. Aunque la inversión inicial puede parecer alta, los AMR suelen reducir costos operativos a largo plazo gracias a su flexibilidad, menor necesidad de infraestructura y facilidad de escalabilidad."
        }
      },
      {
        "@type": "Question",
        "name": "¿Qué industrias utilizan robots móviles?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Los robots móviles (AMR y AGV) se utilizan en múltiples industrias donde existe un movimiento constante de materiales. Los principales sectores incluyen logística y e-commerce, manufactura automotriz, alimentos y bebidas, farmacéutica y healthcare, y retail y centros de distribución. En general, cualquier operación que requiera transportar mercancía de forma repetitiva puede beneficiarse, ya que estos sistemas conectan áreas de producción, picking, almacenamiento y embarque, mejorando la eficiencia y reduciendo errores."
        }
      },
      {
        "@type": "Question",
        "name": "¿Qué tan seguros son los AMR?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Los AMR están diseñados para trabajar de forma segura junto a personas, integrando tecnologías como sensores LiDAR, cámaras 3D, detección y evasión de obstáculos en tiempo real, sistemas de paro de emergencia y cumplimiento de normativas industriales. A diferencia de los AGV, que suelen detenerse ante cualquier obstáculo, los AMR pueden analizar su entorno y tomar decisiones seguras, como rodear personas o cambiar de ruta. Esto reduce accidentes y mejora la continuidad operativa."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuánto tiempo tarda la implementación?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "El tiempo de implementación depende del nivel de complejidad del proyecto, pero una de las principales ventajas de los AMR es su rapidez de despliegue. A diferencia de los AGV, no requieren infraestructura física como guías o cables, lo que reduce significativamente los tiempos de instalación y puesta en marcha. Además, permiten implementaciones graduales, iniciando con pocos robots y escalando conforme crece la operación."
        }
      }
    ]
  }
  </script>
</head>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>

  <main id="logisticbus-landing">

    <!-- Hero Section -->
    <section class="hero-section section-pad">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 pr-lg-5">
            <span class="badge hero-badge px-3 py-2 mb-4 d-inline-block font-label">Industry 4.0 Ready</span>
            <h1 class="display-4 font-headline text-dark lh-sm" style="font-weight: 900; margin-bottom: 1.5rem;">
              Robots móviles autónomos <span class="text-primary-custom" style="font-size: inherit;">(AMR y AGV)</span>
              para automatización logística
            </h1>
            <p class="lead mb-4 lh-lg text-tertiary-custom">
              Optimice su flujo de trabajo industrial con precisión milimétrica. Soluciones de transporte inteligente
              diseñadas para la flexibilidad y escalabilidad de la manufactura moderna.
            </p>
            <div class="d-flex flex-column flex-sm-row gap-3 mt-5">
              <a href="#catalogo"
                class="btn industrial-gradient btn-lg px-4 py-3 shadow-sm font-label text-decoration-none"
                style="font-weight: 700;">Explorar Catálogo</a>
              <a href="https://api.whatsapp.com/send?phone=5215554316718&text=Hola%20quiero%20agendar%20una%20demo%20de%20AMRs"
                target="_blank"
                class="btn bg-btn-gray btn-lg px-4 py-3 font-label border-0 text-decoration-none text-dark"
                style="font-weight: 700;">Solicitar Demo</a>
            </div>
          </div>
          <div class="col-lg-6 position-relative text-center">
            <div class="position-absolute rounded-circle hero-glow top-0 end-0"></div>
            <video autoplay muted loop playsinline class="img-fluid rounded-3 shadow-lg w-100 position-relative"
              style="z-index: 1; object-fit: cover;" poster="https://www.logicbus.com.mx/assets/videos/amrs.png">
              <source src="assets/videos/robots-moviles-autonomos-banner.mp4" type="video/mp4">
              Tu navegador no soporta la reproducción de video.
            </video>
          </div>
        </div>
      </div>
    </section>

    <!-- Definición AMR vs AGV Section -->
    <section class="py-5 bg-white section-pad">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="font-headline text-dark mb-3">¿Qué son los robots móviles autónomos?</h2>
          <div style="width: 80px; height: 4px; background-color: var(--lb-primary); margin: 0 auto;"></div>
        </div>
        <div class="row">
          <!-- Tarjeta AMR -->
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="card h-100 border-0 shadow-sm card-amr p-4 p-lg-5 bg-white">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <i class="bi bi-robot text-primary-custom" style="font-size: 2rem;"></i>
                  <span class="type-label">AMR</span>
                </div>
                <h3 class="h4 font-headline text-dark mb-3">Autonomous Mobile Robots</h3>
                <p class="lh-lg mb-4 text-tertiary-custom">
                  Sistemas inteligentes que navegan dinámicamente utilizando mapas cargados o generados en tiempo real.
                  No requieren infraestructura física en el suelo y pueden rodear obstáculos de forma autónoma.
                </p>
                <ul class="list-unstyled small text-tertiary-custom mb-4">
                  <li class="mb-3 d-flex align-items-center">
                    <i class="bi bi-check-circle text-primary-custom"
                      style="font-size: 0.85rem; margin-right: 0.75rem;"></i> Navegación SLAM
                  </li>
                  <li class="mb-3 d-flex align-items-center">
                    <i class="bi bi-check-circle text-primary-custom"
                      style="font-size: 0.85rem; margin-right: 0.75rem;"></i> Flexibilidad Total
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-check-circle text-primary-custom"
                      style="font-size: 0.85rem; margin-right: 0.75rem;"></i> Despliegue Rápido
                  </li>
                </ul>
                <a href="https://www.logicbus.com.mx/blog/que-es-un-robot-movil-autonomo-amr/" target="_blank"
                  class="text-primary-custom text-decoration-none fw-bold" style="font-size: 0.9rem;">
                  ¿Qué es un AMR? Leer artículo en el blog &rarr;
                </a>
              </div>
            </div>
          </div>
          <!-- Tarjeta AGV -->
          <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm card-agv p-4 p-lg-5 bg-neutral-custom">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <i class="bi bi-gear text-secondary-custom" style="font-size: 2rem;"></i>
                  <span class="type-label">AGV</span>
                </div>
                <h3 class="h4 font-headline text-dark mb-3">Automated Guided Vehicles</h3>
                <p class="lh-lg mb-4 text-tertiary-custom">
                  Vehículos que siguen rutas fijas marcadas por cables, bandas magnéticas o sensores. Ideales para
                  flujos de producción constantes y repetitivos con alta demanda de carga.
                </p>
                <ul class="list-unstyled small text-tertiary-custom">
                  <li class="mb-3 d-flex align-items-center">
                    <i class="bi bi-check-circle text-secondary-custom"
                      style="font-size: 0.85rem; margin-right: 0.75rem;"></i> Rutas Definidas
                  </li>
                  <li class="mb-3 d-flex align-items-center">
                    <i class="bi bi-check-circle text-secondary-custom"
                      style="font-size: 0.85rem; margin-right: 0.75rem;"></i> Alta Capacidad de Carga
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-check-circle text-secondary-custom"
                      style="font-size: 0.85rem; margin-right: 0.75rem;"></i> Fiabilidad Mecánica
                  </li>
                </ul>
                <a href="https://www.logicbus.com.mx/blog/tipos-de-robots-moviles-en-la-industria-una-clasificacion-tecnica/"
                  target="_blank" class="text-primary-custom text-decoration-none fw-bold" style="font-size: 0.9rem;">
                  Tipos de robots móviles en la industria Leer artículo en el blog &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Evolución Logística Section -->
    <section class="section-pad section-logistics overflow-hidden">
      <div class="container py-5">
        <div class="row align-items-center g-5">
          <div class="col-md-6 mb-5 mb-md-0">
            <img alt="Línea de producción automatizada con brazos robóticos"
              class="img-fluid rounded shadow-lg opacity-75" src="images/amr/Evolucion-hacia-la-Logistica.png"
              loading="lazy" />
          </div>
          <div class="col-md-6">
            <h2 class="font-headline text-white lh-sm mb-4">La Evolución hacia la Logística 4.0</h2>
            <p class="text-light opacity-75 mb-4" style="font-style: italic;">
              "La automatización ya no es una opción de mejora, es el requisito fundamental para la competitividad
              global."
            </p>
            <p class="text-light opacity-75 mb-5 lh-lg small">
              Nuestros sistemas integran IA y conectividad IoT para transformar almacenes tradicionales en ecosistemas
              dinámicos donde el transporte de materiales ocurre sin intervención humana, reduciendo errores en un 99%.
            </p>
            <div class="row text-center mt-5">
              <div class="col-6 mb-3 mb-sm-0">
                <div class="stat-box p-4 rounded border h-100" style="border-color: rgba(255,255,255,0.1) !important;">
                  <div class="display-4 font-headline text-primary-custom mb-1">+45%</div>
                  <div class="font-label text-uppercase text-light opacity-50"
                    style="font-size: 0.75rem; letter-spacing: 0.1em;">Eficiencia Operativa</div>
                </div>
              </div>
              <div class="col-6 mb-3 mb-sm-0">
                <div class="stat-box p-4 rounded border h-100" style="border-color: rgba(255,255,255,0.1) !important;">
                  <div class="display-4 font-headline text-primary-custom mb-1">-30%</div>
                  <div class="font-label text-uppercase text-light opacity-50"
                    style="font-size: 0.75rem; letter-spacing: 0.1em;">Costo Logístico</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="text-center text-light opacity-75 mb-5 lh-lg small" style="max-width: 60rem; margin: 0 auto;">
          <a href="https://www.logicbus.com.mx/blog/los-mejores-robots-moviles-autonomos-amr-en-mexico-soluciones-lideres-para-la-industria/"
            target="_blank" class="text-white text-decoration-none fw-bold"
            style="font-size: 0.95rem; border-bottom: 2px solid var(--lb-primary);">
            Conoce los mejores robots móviles autónomos (AMR) en México &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- Comparativa Técnica Section -->
    <section class="bg-neutral-custom py-5 section-pad">
      <div class="container py-5">
        <h2 class="font-headline text-center text-dark mb-5" style="font-weight: 600 !important;">Comparativa Técnica:
          AMR vs AGV</h2>
        <div class="table-responsive bg-white rounded shadow-sm overflow-hidden mb-4"
          style="max-width: 60rem; margin: 0 auto;">
          <table class="table mb-0 align-middle table-comparison table-borderless">
            <thead class="table-secondary">
              <tr>
                <th>Característica</th>
                <th class="th-amr font-label">AMR (SLAM)</th>
                <th class="th-agv font-label">AGV (Fixed)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-4 text-dark">Navegación</td>
                <td class="p-4">Inteligente (Sensores + Mapas)</td>
                <td class="p-4">Guiada (Cintas/Cables)</td>
              </tr>
              <tr class="zebra-row">
                <td class="p-4 text-dark">Flexibilidad</td>
                <td class="p-4">Máxima (Rutas dinámicas)</td>
                <td class="p-4">Baja (Rutas rígidas)</td>
              </tr>
              <tr>
                <td class="p-4 text-dark">Obstáculos</td>
                <td class="p-4">Los rodea autónomamente</td>
                <td class="p-4">Se detiene hasta despeje</td>
              </tr>
              <tr class="zebra-row">
                <td class="p-4 text-dark">Costo Instalación</td>
                <td class="p-4">Mínimo (Software base)</td>
                <td class="p-4">Alto (Infraestructura física)</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="text-center" style="max-width: 60rem; margin: 0 auto;">
          <a href="https://www.logicbus.com.mx/blog/amr-vs-agv-diferencias-clave-en-la-automatizacion-industrial/"
            target="_blank" class="text-dark text-decoration-none fw-bold"
            style="font-size: 0.95rem; border-bottom: 2px solid var(--lb-primary);">
            Profundiza en las diferencias clave en nuestro blog &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- Tecnologías Section -->
    <section class="py-5 section-pad bg-white">
      <div class="container">
        <div class="row g-5 text-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-icon-square industrial-gradient shadow mb-4">
              <i class="bi bi-broadcast-pin text-white" style="font-size: 2.2rem;"></i>
            </div>
            <h3 class="h5 font-headline mb-3 text-dark">Sensores LiDAR 360°</h3>
            <p class="small lh-lg text-tertiary-custom">Detección precisa del entorno en tiempo real para una seguridad
              operativa de nivel industrial y prevención de colisiones.</p>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-icon-square industrial-gradient shadow mb-4">
              <i class="bi bi-cpu text-white" style="font-size: 2.2rem;"></i>
            </div>
            <h3 class="h5 font-headline mb-3 text-dark">Inteligencia Artificial</h3>
            <p class="small lh-lg text-tertiary-custom">Algoritmos de optimización de rutas que aprenden de los flujos
              de trabajo diarios para mejorar tiempos de entrega.</p>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-icon-square industrial-gradient shadow mb-4">
              <i class="bi bi-shield-check text-white" style="font-size: 2.2rem;"></i>
            </div>
            <h3 class="h5 font-headline mb-3 text-dark">Seguridad Certificada</h3>
            <p class="small lh-lg text-tertiary-custom">Cumplimiento con normativas internacionales de seguridad
              robótica para coexistencia armoniosa con humanos.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Sectores Clave Section -->
    <section class="py-5 bg-neutral-custom section-pad">
      <div class="container">
        <div class="mb-5 text-center text-md-start">
          <h2 class="font-headline mb-2 text-dark fw-semibold">Sectores Clave</h2>
          <p class="text-tertiary-custom">Soluciones adaptadas a las exigencias de cada industria.</p>
        </div>
        <div class="row g-4 justify-content-center">
          <!-- Logística -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="card h-100 p-4 rounded-3 sector-card bg-white shadow-sm border-0 d-flex flex-column align-items-start text-start"
              style="text-align: left !important;">
              <i class="bi bi-box-seam text-primary-custom mb-3" style="font-size: 1.8rem;"></i>
              <h4 class="h6 font-headline mb-2 text-dark fw-semibold">
                <a href="https://www.logicbus.com.mx/blog/beneficios-de-los-amr-en-la-logistica-moderna/"
                  class="stretched-link text-decoration-none text-dark">
                  Logística
                </a>
              </h4>
              <p class="mb-0 text-tertiary-custom" style="font-size: 0.85rem; line-height: 1.6;">Gestión dinámica de
                almacenes, control de inventarios automatizado y optimización de flujos de entrada/salida.</p>
            </div>
          </div>
          <!-- Manufactura -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="card h-100 p-4 rounded-3 sector-card bg-white shadow-sm border-0 d-flex flex-column align-items-start text-start"
              style="text-align: left !important;">
              <i class="bi bi-gear text-primary-custom mb-3" style="font-size: 1.8rem;"></i>
              <h4 class="h6 font-headline mb-2 text-dark fw-semibold">Manufactura</h4>
              <p class="mb-0 text-tertiary-custom" style="font-size: 0.85rem; line-height: 1.6;">Alimentación de
                estaciones de trabajo, transporte de WIP (Work in Progress) y retiro de producto terminado.</p>
            </div>
          </div>
          <!-- Automotriz -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="card h-100 p-4 rounded-3 sector-card bg-white shadow-sm border-0 d-flex flex-column align-items-start text-start"
              style="text-align: left !important;">
              <i class="bi bi-car-front text-primary-custom mb-3" style="font-size: 1.8rem;"></i>
              <h4 class="h6 font-headline mb-2 text-dark fw-semibold">Automotriz</h4>
              <p class="mb-0 text-tertiary-custom" style="font-size: 0.85rem; line-height: 1.6;">Soporte en líneas de
                ensamblaje complejas, manejo de autopartes pesadas y secuenciación Just-In-Time.</p>
            </div>
          </div>
          <!-- Retail -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="card h-100 p-4 rounded-3 sector-card bg-white shadow-sm border-0 d-flex flex-column align-items-start text-start"
              style="text-align: left !important;">
              <i class="bi bi-cart3 text-primary-custom mb-3" style="font-size: 1.8rem;"></i>
              <h4 class="h6 font-headline mb-2 text-dark fw-semibold">Retail</h4>
              <p class="mb-0 text-tertiary-custom" style="font-size: 0.85rem; line-height: 1.6;">Picking colaborativo,
                reposición inteligente de estanterías y preparación acelerada de pedidos e-commerce.</p>
            </div>
          </div>
          <!-- Farmacéutica -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="card h-100 p-4 rounded-3 sector-card bg-white shadow-sm border-0 d-flex flex-column align-items-start text-start"
              style="text-align: left !important;">
              <i class="bi bi-prescription2 text-primary-custom mb-3" style="font-size: 1.8rem;"></i>
              <h4 class="h6 font-headline mb-2 text-dark fw-semibold">Farmacéutica</h4>
              <p class="mb-0 text-tertiary-custom" style="font-size: 0.85rem; line-height: 1.6;">Manejo estéril de
                insumos, transporte en ambientes controlados y trazabilidad total de productos sensibles.</p>
            </div>
          </div>
          <!-- Salud -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="card h-100 p-4 rounded-3 sector-card bg-white shadow-sm border-0 d-flex flex-column align-items-start text-start"
              style="text-align: left !important;">
              <i class="bi bi-bag-plus text-primary-custom mb-3" style="font-size: 1.8rem;"></i>
              <h4 class="h6 font-headline mb-2 text-dark fw-semibold">Salud</h4>
              <p class="mb-0 text-tertiary-custom" style="font-size: 0.85rem; line-height: 1.6;">Transporte de muestras
                biológicas, distribución de suministros médicos y gestión logística hospitalaria.</p>
            </div>
          </div>
        </div>
        <div class="text-center">
          <a href="https://www.logicbus.com.mx/blog/casos-de-uso-de-robots-moviles-en-almacenes/" target="_blank"
            class="text-dark text-decoration-none fw-bold"
            style="font-size: 0.95rem; border-bottom: 2px solid var(--lb-primary);">
            Ver casos de uso de robots móviles en almacenes &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- ROI Section -->
    <section class="section-pad bg-white">
      <div class="container">
        <div class="roi-box shadow-lg">
          <div class="row align-items-center position-relative" style="z-index: 1;">
            <div class="col-md-6 mb-5 mb-md-0 pr-md-5">
              <h2 class="font-headline mb-4 text-white">
                <a href="https://www.logicbus.com.mx/blog/roi-de-automatizacion-con-amr-analisis-de-rentabilidad-estrategica/"
                  target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">
                  Retorno de Inversión (ROI)
                </a>
              </h2>
              <p class="mb-5 lh-lg" style="color: rgba(255,255,255,0.70);">
                La automatización móvil ofrece uno de los retornos más rápidos en la industria. Nuestros clientes
                experimentan una recuperación de capital proyectada entre 12 y 24 meses.
              </p>
              <div class="d-flex flex-column gap-4">
                <div class="d-flex align-items-start gap-3">
                  <i class="bi bi-graph-down text-primary-custom mt-1 fs-4"></i>
                  <div>
                    <div class="text-white mb-1">Reducción de Gastos Operativos</div>
                    <div class="small" style="color: rgba(255,255,255,0.50);">Disminución drástica en costos de mano de
                      obra indirecta y errores de picking.</div>
                  </div>
                </div>
                <div class="d-flex align-items-start gap-3">
                  <i class="bi bi-lightning-charge text-primary-custom mt-1 fs-4"></i>
                  <div>
                    <div class="text-white mb-1">Aumento de Productividad</div>
                    <div class="small" style="color: rgba(255,255,255,0.50);">Operación 24/7 sin tiempos muertos por
                      recarga o fatiga.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="roi-stat-box p-4 p-lg-5 text-center">
                <div class="font-label text-uppercase mb-3 text-primary-custom"
                  style="font-size: 0.68rem; letter-spacing: 0.22em;">Payback Típico</div>
                <div class="roi-number text-white mb-2">12-24</div>
                <div class="fs-5 text-white">Meses</div>
                <div class="mt-4 pt-4 roi-divider">
                  <div class="row">
                    <div class="col-6 text-center">
                      <div class="font-label text-uppercase mb-1"
                        style="font-size: 0.62rem; color: rgba(255,255,255,0.40);">Ahorro Anual Est.</div>
                      <div class="fs-5 text-primary-custom">35% +</div>
                    </div>
                    <div class="col-6 text-center">
                      <div class="font-label text-uppercase mb-1"
                        style="font-size: 0.62rem; color: rgba(255,255,255,0.40);">Vida Útil Est.</div>
                      <div class="fs-5 text-primary-custom">8-10 Años</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="text-center">
          <a href="https://www.logicbus.com.mx/blog/cuanto-cuesta-implementar-robots-amr-en-la-industria/"
            target="_blank" class="text-dark text-decoration-none fw-bold"
            style="font-size: 0.95rem; border-bottom: 2px solid var(--lb-primary);">
            ¿Quieres saber cuánto cuesta implementar robots AMR en la industria? Lee más en nuestro blog &rarr;
          </a>
        </div>
      </div>
    </section>
    
<!-- Catálogo Section -->
    <section id="catalogo" class="py-5 bg-neutral-custom section-pad">
      <div class="container">
        <div class="mb-5 text-center text-md-start">
          <h2 class="font-headline mb-2 text-dark fw-semibold">Catálogo Industrial</h2>
          <p class="text-tertiary-custom text-start">Equipos de alto rendimiento categorizados por aplicación operativa.
          </p>
        </div>
        <div class="d-flex justify-content-center overflow-auto pb-3 mb-5 gap-2"
          style="white-space: nowrap; scroll-snap-type: x mandatory;">
          <a href="https://tienda.logicbus.com.mx/AMR-Industriales_c_8042.html" target="_blank" rel="noopener noreferrer"
            class="btn bg-white border shadow-sm text-tertiary-custom rounded-pill px-4 py-2 font-label catalog-btn fw-bold"
            style="scroll-snap-align: start; box-shadow: none !important; outline: none !important; text-decoration: none;">Lifting</a>
          <a href="https://tienda.logicbus.com.mx/Montacargas-Inteligente_c_8044.html" target="_blank" rel="noopener noreferrer"
            class="btn bg-white border shadow-sm text-tertiary-custom rounded-pill px-4 py-2 font-label catalog-btn"
            style="scroll-snap-align: start; box-shadow: none !important; outline: none !important; text-decoration: none;">Montacargas</a>
          <a href="https://tienda.logicbus.com.mx/Limpieza-Industrial_c_8010.html" target="_blank" rel="noopener noreferrer"
            class="btn bg-white border shadow-sm text-tertiary-custom rounded-pill px-4 py-2 font-label catalog-btn"
            style="scroll-snap-align: start; box-shadow: none !important; outline: none !important; text-decoration: none;">Limpieza</a>
          <a href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html" target="_blank" rel="noopener noreferrer"
            class="btn bg-white border shadow-sm text-tertiary-custom rounded-pill px-4 py-2 font-label catalog-btn"
            style="scroll-snap-align: start; box-shadow: none !important; outline: none !important; text-decoration: none;">Transporte
            interno</a>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 section-pad bg-white">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="font-headline mb-3 text-dark fw-semibold">Preguntas Frecuentes</h2>
          <p class="text-tertiary-custom">Resolvemos sus dudas técnicas sobre implementación.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8 pr-lg-5">
            <!-- FAQ 1 -->
            <details class="custom-faq p-3 mb-3 border bg-white rounded-3 shadow-sm">
              <summary class="font-headline w-100 text-dark fw-semibold">
                ¿Qué diferencia hay entre AMR y AGV?
                <i class="bi bi-chevron-down ms-auto fs-5 text-primary-custom"></i>
              </summary>
              <div class="faq-content small mt-3 pt-3 border-top text-tertiary-custom">
                <p>La principal diferencia entre un AMR (Autonomous Mobile Robot) y un AGV (Automated Guided Vehicle)
                  está en cómo se mueven y toman decisiones dentro de una operación.</p>
                <p>Los AGV siguen rutas predefinidas (líneas magnéticas, códigos QR o rieles). Esto los hace ideales
                  para procesos repetitivos y entornos controlados, pero poco flexibles ante cambios. Si encuentran un
                  obstáculo, normalmente se detienen hasta que se libere el camino.</p>
                <p>En cambio, los AMR navegan de forma autónoma utilizando sensores, cámaras e inteligencia artificial.
                  Pueden mapear su entorno, evitar obstáculos y recalcular rutas en tiempo real sin necesidad de
                  infraestructura física adicional.</p>
                <p><strong>En resumen:</strong><br>
                  • AGV = rutas fijas + alta predictibilidad<br>
                  • AMR = navegación inteligente + máxima flexibilidad
                </p>
                <p>No es que uno sea mejor que otro: la elección depende del tipo de operación, estabilidad del layout y
                  nivel de automatización requerido.</p>
              </div>
            </details>

            <!-- FAQ 2 -->
            <details class="custom-faq p-3 mb-3 border bg-white rounded-3 shadow-sm">
              <summary class="font-headline w-100 text-dark fw-semibold">
                ¿Cuánto cuesta un robot AMR en México?
                <i class="bi bi-chevron-down ms-auto fs-5 text-primary-custom"></i>
              </summary>
              <div class="faq-content small mt-3 pt-3 border-top text-tertiary-custom">
                <p>El costo de un robot AMR en México puede variar ampliamente dependiendo de varios factores:</p>
                <ul>
                  <li>Capacidad de carga (ligera, media o pesada)</li>
                  <li>Nivel de autonomía y software</li>
                  <li>Marca y configuración (top module, fleet manager, etc.)</li>
                  <li>Integración con sistemas existentes (WMS, ERP)</li>
                </ul>
                <p>Aunque la inversión inicial puede parecer alta, los AMR suelen reducir costos operativos a largo
                  plazo gracias a su flexibilidad, menor necesidad de infraestructura y rápida escalabilidad.</p>
              </div>
            </details>

            <!-- FAQ 3 -->
            <details class="custom-faq p-3 mb-3 border bg-white rounded-3 shadow-sm">
              <summary class="font-headline w-100 text-dark fw-semibold">
                ¿Qué industrias utilizan robots móviles?
                <i class="bi bi-chevron-down ms-auto fs-5 text-primary-custom"></i>
              </summary>
              <div class="faq-content small mt-3 pt-3 border-top text-tertiary-custom">
                <p>Los robots móviles (AMR y AGV) se utilizan en múltiples industrias donde hay movimiento constante de
                  materiales. <strong>Principales sectores:</strong></p>
                <ul>
                  <li>Logística y e-commerce</li>
                  <li>Manufactura automotriz</li>
                  <li>Alimentos y bebidas</li>
                  <li>Farmacéutica y healthcare</li>
                  <li>Retail y centros de distribución</li>
                </ul>
                <p>En general, cualquier operación que requiera transportar mercancía de forma repetitiva puede
                  beneficiarse. De hecho, estos sistemas se usan para conectar áreas de producción, picking,
                  almacenamiento y embarque, aumentando la eficiencia y reduciendo errores.</p>
              </div>
            </details>

            <!-- FAQ 4 -->
            <details class="custom-faq p-3 mb-3 border bg-white rounded-3 shadow-sm">
              <summary class="font-headline w-100 text-dark fw-semibold">
                ¿Qué tan seguros son los AMR?
                <i class="bi bi-chevron-down ms-auto fs-5 text-primary-custom"></i>
              </summary>
              <div class="faq-content small mt-3 pt-3 border-top text-tertiary-custom">
                <p>Los AMR están diseñados para trabajar de forma segura junto a personas, integrando múltiples
                  tecnologías de seguridad:</p>
                <ul>
                  <li>Sensores LiDAR y cámaras 3D</li>
                  <li>Detección y evasión de obstáculos en tiempo real</li>
                  <li>Sistemas de paro de emergencia</li>
                  <li>Cumplimiento de normativas industriales</li>
                </ul>
                <p>A diferencia de los AGV, que suelen detenerse ante cualquier obstáculo, los AMR pueden analizar su
                  entorno y tomar decisiones seguras, como rodear personas o cambiar de ruta.</p>
                <p>Esto no solo reduce accidentes, sino que también mejora la continuidad operativa.</p>
              </div>
            </details>

            <!-- FAQ 5 -->
            <details class="custom-faq p-3 mb-3 border bg-white rounded-3 shadow-sm">
              <summary class="font-headline w-100 text-dark fw-semibold">
                ¿Cuánto tiempo tarda la implementación?
                <i class="bi bi-chevron-down ms-auto fs-5 text-primary-custom"></i>
              </summary>
              <div class="faq-content small mt-3 pt-3 border-top text-tertiary-custom">
                <p>El tiempo de implementación depende del nivel de complejidad del proyecto, pero una de las grandes
                  ventajas de los AMR es su rapidez de despliegue.</p>
                <p>A diferencia de los AGV, los AMR no requieren infraestructura física como guías o cables, lo que
                  reduce significativamente los tiempos de instalación y puesta en marcha.</p>
                <p>Además, permiten implementaciones graduales: puedes empezar con pocos robots y escalar conforme crece
                  la operación.</p>
              </div>
            </details>

            <br>
            <div class="text-center">
              <a href="https://www.logicbus.com.mx/blog/como-funcionan-los-robots-amr-arquitectura-y-tecnologia-subyacente/"
                target="_blank" class="text-dark text-decoration-none fw-bold"
                style="font-size: 0.95rem; border-bottom: 2px solid var(--lb-primary);">
                ¿Te interesa conocer la ingeniería detrás de los robots AMR? Lee más en nuestro blog &rarr;
              </a>
            </div>
            <br>

            <!-- Call to Action -->
            <div class="mt-5 text-center">
              <div class="cta-final-box p-5 border shadow-sm bg-neutral-custom rounded-3">
                <h2 class="font-headline mb-4 text-dark fw-semibold">Optimiza tu logística con automatización
                  inteligente</h2>
                <p class="mb-5 mx-auto lh-lg text-tertiary-custom" style="max-width: 40rem;">
                  Nuestros especialistas están listos para realizar un análisis técnico de su planta y proyectar su
                  ahorro potencial.
                </p>
                <a href="https://wa.link/njr0su" target="_blank"
                  class="btn btn-lg px-5 py-3 shadow font-label industrial-gradient text-decoration-none">
                  Agendar Consultoría Técnica
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Contacto / iframe -->
  <div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
      <h2 class="title white">¿NECESITAS MÁS INFORMACIÓN?</h2>
      <span class="paragraph white">
        Si necesitas ayuda personalizada, nuestro equipo de soporte está altamente capacitado para ayudarte a resolver
        tus problemas de forma rápida y eficaz.
      </span>
    </div>
    <div class="container">
      <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
        <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
          style="width:100%; min-height:1200px; border:0;"></iframe>
      </div>
    </div>
  </div>

  <!-- Scripts y Footer -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $jquery_js; ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $popper_js; ?>
  <?php echo $own_file_js; ?>
  <?php echo $flickity_js; ?>
  <?php echo $var_footer; ?>
</body>

</html>