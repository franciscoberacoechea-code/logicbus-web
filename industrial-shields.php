<?php require("admin/config.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Industrial Shields | Controladores industriales y Panel PCs</title>
    <meta name="description"
        content="Industrial Shields es un fabricante líder de controladores y paneles basados en hardware abierto como Arduino y Raspberry Pi.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        /* Barra */
        #leftBar {
            display: none;
        }

        /* Scroll */
        body,
        html {
            overflow-x: hidden;
            max-width: 100%;
        }

        /* Videos */
        .video-container {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #000;
            width: 100%;
        }

        /* Imagen */
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

        /* Iframe */
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Boton */
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

        /* Triangulo */
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

        /* HoverVideos */
        @media (hover: hover) {
            .video-container:hover img {
                opacity: 1;
            }

            .video-container:hover .play-button {
                background-color: var(--lb-accent);
                transform: translate(-50%, -50%) scale(1.1);
            }
        }

        /* Soluciones */
        .solution-item {
            text-align: center;
            margin-bottom: 2rem;
        }

        .solution-img-wrap {
            width: 100%;
            aspect-ratio: 4/3;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .solution-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .solution-item:hover .solution-img-wrap img {
            transform: scale(1.08);
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

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="automatizacion-control-procesos"
                        class="blue link-orange">Automatización y control de procesos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Industrial Shields</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <video autoplay muted loop playsinline width="100%"
            poster="https://www.logicbus.com.mx/assets/videos/indutrial-shields.webp"
            style="object-fit: cover; max-height: 500px; display: block;">
            <source src="https://www.logicbus.com.mx/assets/videos/indutrial-shields.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Control y Automatización
            Industrial</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">INDUSTRIAL
            SHIELDS</span>
    </h1>

    <div class="container mb-5">
        <p class="intro-text text-justify">
            <strong>Industrial Shields</strong> es un fabricante líder de controladores y paneles basados en hardware
            abierto como <strong>Arduino, Raspberry Pi y ESP32</strong>, diseñados para aplicaciones de automatización
            industrial. Sus soluciones permiten desarrollar proyectos escalables, eficientes y altamente
            personalizables, integrando tecnología de vanguardia para el control y monitoreo de procesos.
        </p>
        <p class="intro-text text-justify">
            Con un enfoque en la accesibilidad y la sostenibilidad, Industrial Shields transforma la industria al
            ofrecer herramientas innovadoras que reducen costos, simplifican la implementación y optimizan la
            productividad en entornos industriales conectados.
        </p>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/industrial-shields" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#ventajas">Ventajas</a>
        <a class="btn-circle" href="#soluciones">Soluciones</a>
        <a class="btn-circle" href="#videos">Videos</a>
        <a class="btn-circle" href="#blog">Artículos</a>
    </nav>

    <h2 class="section-title mt-5" id="productos">Línea de Productos</h2>
    <div class="container mb-5">
        <div class="products-grid">
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Base-Arduino_c_7943.html" target="_blank">
                    <img loading="lazy" src="./images/industrial-shields/Base-Arduino.webp" alt="Base Arduino">
                </a>
                <h4 class="mt-3">Base Arduino</h4>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Base-Arduino_c_7943.html"
                    target="_blank">Ver modelos</a>
            </div>
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Base-ESP32_c_7951.html" target="_blank">
                    <img loading="lazy" src="./images/industrial-shields/Base-ESP32.webp" alt="Base ESP32">
                </a>
                <h4 class="mt-3">Base ESP32</h4>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Base-ESP32_c_7951.html"
                    target="_blank">Ver modelos</a>
            </div>
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Base-Raspberry-Pi_c_7946.html" target="_blank">
                    <img loading="lazy" src="./images/industrial-shields/Base-Raspberry-Pi.webp"
                        alt="Base Raspberry Pi">
                </a>
                <h4 class="mt-3">Base Raspberry Pi</h4>
                <a class="btn-circle mt-auto mx-auto"
                    href="https://tienda.logicbus.com.mx/Base-Raspberry-Pi_c_7946.html" target="_blank">Ver modelos</a>
            </div>
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Module-X_c_7954.html" target="_blank">
                    <img loading="lazy" src="./images/industrial-shields/module-x.webp" alt="Module X">
                </a>
                <h4 class="mt-3">Module X</h4>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Module-X_c_7954.html"
                    target="_blank">Ver modelos</a>
            </div>
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Accesorios_c_7958.html" target="_blank">
                    <img loading="lazy" src="./images/industrial-shields/Accesorios.webp" alt="Accesorios">
                </a>
                <h4 class="mt-3">Accesorios</h4>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Accesorios_c_7958.html"
                    target="_blank">Ver modelos</a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center bg-light rounded shadow-sm border p-5">
            <div class="col-md-7 text-center text-md-left mb-4 mb-md-0">
                <h3 style="color: var(--lb-primary); font-weight: bold;">¿Automatización, Control o Monitorización?</h3>
                <p class="text-muted text-justify mt-3">Automatización, Control y Monitorización con PLCs basados en
                    Hardware Open Source como Raspberry Pi, Arduino y ESP32. Soluciones flexibles, económicas y
                    personalizables para optimizar tus procesos industriales.</p>
                <a class="btn-circle d-inline-block mt-3" href="https://tienda.logicbus.com.mx/industrial-shields"
                    target="_blank" style="width: auto; padding: 10px 30px;">Ver en Tienda</a>
            </div>
            <div class="col-md-5 text-center">
                <img loading="lazy" src="./images/industrial-shields/plc2.webp" alt="Industrial Shields PLC"
                    class="img-fluid rounded">
            </div>
        </div>
    </div>

    <h2 class="section-title mt-5" id="ventajas">¿Por qué Industrial Shields?</h2>
    <div class="container mb-5">
        <div class="row text-center mt-4 justify-content-center">
            <div class="col-12 col-md-4 mb-4">
                <div class="bg-white p-4 rounded shadow-sm border h-100">
                    <img loading="lazy" src="./assets/ventajas/module.webp" alt="Solución modular"
                        style="max-width: 80px; margin-bottom: 20px;">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Solución modular</h4>
                    <p class="text-muted">Diseñados para una futura escalabilidad sin complicaciones.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="bg-white p-4 rounded shadow-sm border h-100">
                    <img loading="lazy" src="./assets/ventajas/open-source.webp" alt="Solución abierta"
                        style="max-width: 80px; margin-bottom: 20px;">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Solución abierta</h4>
                    <p class="text-muted">Sin tasas de licencia, hardware 100% de código abierto.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="bg-white p-4 rounded shadow-sm border h-100">
                    <img loading="lazy" src="./assets/ventajas/low-price.webp" alt="Precio competitivo"
                        style="max-width: 80px; margin-bottom: 20px;">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Precio competitivo</h4>
                    <p class="text-muted">Sin renunciar a la robustez y calidad industrial que exigen los proyectos.</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title mt-5" id="soluciones">Soluciones en la Industria</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/industrial.jpg" alt="Industrial">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Industrial</h4>
                <p class="text-muted small px-2">Realizamos todo tipo de proyectos para aplicaciones y soluciones
                    industriales.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/energia.jpg" alt="Energía">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Energía</h4>
                <p class="text-muted small px-2">Monitoreo y control en instalaciones solares, eólicas o del sector
                    petrolífero.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/hvac.jpg" alt="HVAC">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">HVAC</h4>
                <p class="text-muted small px-2">Entre muchas otras soluciones en edificios de servicios, garantizamos
                    el confort climático.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/logistica.jpg" alt="Logística">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Logística</h4>
                <p class="text-muted small px-2">Desde el almacén hasta la gestión de flotas, podemos ayudarte a mejorar
                    la velocidad y calidad.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/invernaderos.jpg" alt="Invernaderos">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Invernaderos</h4>
                <p class="text-muted small px-2">Monitoreo y control a un precio competitivo y con hardware profesional.
                </p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/seguridad.jpg" alt="Seguridad">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Seguridad</h4>
                <p class="text-muted small px-2">Implementa fácilmente un sistema de seguridad utilizando controladores
                    basados en hardware abierto.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/centro-de-datos.jpg" alt="Centro de datos">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Centro de datos</h4>
                <p class="text-muted small px-2">Es clave monitorear y controlar instalaciones de nube que crecen
                    exponencialmente.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/salud.jpg" alt="Salud">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Salud</h4>
                <p class="text-muted small px-2">Proyectos para garantizar el control de vacunas y la seguridad en
                    establecimientos públicos.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/trazabilidad.jpg" alt="Trazabilidad">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Trazabilidad</h4>
                <p class="text-muted small px-2">Codificación para asegurar la trazabilidad en casi todos los productos
                    y mercados.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/smart-city.jpg" alt="Smart City">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Smart City</h4>
                <p class="text-muted small px-2">Soluciones profesionales basadas en código abierto para el desarrollo
                    de ciudades inteligentes.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/ganaderia.jpg" alt="Ganadería">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Ganadería</h4>
                <p class="text-muted small px-2">Hacia un entorno digital para reducir consumos energéticos y garantizar
                    la salud animal.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/sector-de-agua.jpg" alt="Sector de Agua">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Sector Agua</h4>
                <p class="text-muted small px-2">Desde el tratamiento del agua hasta el control y monitorización de ríos
                    y presas.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/movilidad.jpg" alt="Movilidad">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Movilidad</h4>
                <p class="text-muted small px-2">Monitoreo y desarrollo de nuevas soluciones en gestión de camiones u
                    otros vehículos.</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 solution-item">
                <div class="solution-img-wrap">
                    <img loading="lazy" src="./images/industrial-shields/otros.jpg" alt="Otros">
                </div>
                <h4 style="color: var(--lb-primary); font-weight: bold;">Otros Proyectos</h4>
                <p class="text-muted small px-2">Hablamos constantemente con clientes para ayudar a desarrollar
                    integraciones a medida.</p>
            </div>

        </div>
    </div>

    <h2 class="section-title mt-5" id="videos">Videos</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mb-4">
                <div class="video-container" data-video-id="yqRzW2bgjjs">
                    <img loading="lazy" src="https://img.youtube.com/vi/yqRzW2bgjjs/hqdefault.jpg"
                        alt="Industrial Shields Corporate">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="video-container" data-video-id="_g0mEiQ3DYM">
                    <img loading="lazy" src="https://img.youtube.com/vi/_g0mEiQ3DYM/hqdefault.jpg"
                        alt="TouchBerry Pi Panel">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="video-container" data-video-id="uS1SJ9ujjx0">
                    <img loading="lazy" src="https://img.youtube.com/vi/uS1SJ9ujjx0/hqdefault.jpg" alt="ARDBOX RELAY">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title mt-5 bg-transparent" id="blog">Artículos</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">
            
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/modbus-rtu-para-plcs-basados-en-arduino-esp32/" target="_blank">
                        <img loading="lazy" class="card-img-top" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/05/Modbus.webp" alt="Modbus RTU Arduino" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Modbus RTU para PLCs basados en Arduino / ESP32</h5>
                        <p class="card-text text-muted flex-grow-1 small">Descubre cómo implementar y aprovechar el protocolo Modbus RTU en entornos industriales utilizando tecnología de hardware abierto.</p>
                        <div class="mt-3">
                            <a href="https://www.logicbus.com.mx/blog/modbus-rtu-para-plcs-basados-en-arduino-esp32/" target="_blank" class="btn-circle d-inline-block">Leer artículo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/como-trabajar-con-lorawan-y-un-plc-esp32/" target="_blank">
                        <img loading="lazy" class="card-img-top" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/05/LoRaWAN.png" alt="LoRaWAN PLC ESP32" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Cómo trabajar con LoRaWAN y un PLC ESP32</h5>
                        <p class="card-text text-muted flex-grow-1 small">Guía práctica sobre la integración de redes de largo alcance y bajo consumo (LoRaWAN) con controladores ESP32.</p>
                        <div class="mt-3">
                            <a href="https://www.logicbus.com.mx/blog/como-trabajar-con-lorawan-y-un-plc-esp32/" target="_blank" class="btn-circle d-inline-block">Leer artículo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/como-usar-lora-con-raspberry-plc/" target="_blank">
                        <img loading="lazy" class="card-img-top" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/01/Como-usar-LoRa-con-Raspberry-PLC.png" alt="LoRa con Raspberry PLC" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">¿Cómo usar LoRa con Raspberry PLC?</h5>
                        <p class="card-text text-muted flex-grow-1 small">Aprende a conectar y transmitir datos industriales sin cables usando módulos LoRa combinados con el potencial de Raspberry Pi.</p>
                        <div class="mt-3">
                            <a href="https://www.logicbus.com.mx/blog/como-usar-lora-con-raspberry-plc/" target="_blank" class="btn-circle d-inline-block">Leer artículo</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿LISTO PARA PROBAR INDUSTRIAL
                SHIELDS?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Contáctanos hoy mismo y descubre
                cómo podemos colaborar integrando hardware abierto en tu próximo proyecto!</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe loading="lazy" src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0"
                    allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

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