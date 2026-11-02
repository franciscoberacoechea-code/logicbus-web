<?php require("admin/config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arbor Technology | Soluciones de automatización y computación industrial - Logicbus</title>

    <meta name="description"
        content="Arbor Technology es una empresa líder en el desarrollo de soluciones de computación industrial avanzadas. Con una amplia gama de productos innovadores.">

    <?php echo $favicon; ?>
    <?php echo $css_bundle; ?>
    <?php echo $estilos; ?> <!-- Tu CSS General con el Sistema de Diseño -->

    <!-- CSS ESPECÍFICO DE ESTA PÁGINA -->
    <style>
        /* Ocultar barra lateral */
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
            max-width: 600px;
            margin: 0 auto;
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
                <li class="breadcrumb-item"><a href="pc-y-comunicaciones-industriales" class="blue link-orange">PC's
                        y Comunicaciones Industriales</a></li>
                <li class="breadcrumb-item active" aria-current="page">ARBOR</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Video 100% -->
    <div class="banner-container mb-5">
        <video autoplay muted loop playsinline width="100%"
            poster="https://www.logicbus.com.mx/assets/videos/ARBOR.webp">
            <source src="https://www.logicbus.com.mx/assets/videos/ARBOR.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Soluciones de automatización y
            computación industrial</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">ARBOR
            TECHNOLOGY</span>
    </h1>

    <!-- Textos de introducción -->
    <p class="intro-text">
        <strong>Arbor Technology</strong> es una empresa líder en el desarrollo de soluciones de computación industrial
        avanzadas. Con una amplia gama de productos innovadores, desde panel PCs y sistemas embebidos hasta soluciones
        de automatización e IoT, Arbor Technology se dedica a mejorar la eficiencia y productividad en una variedad de
        industrias.
    </p>
    <p class="intro-text">
        Su compromiso con la calidad y la innovación ha hecho de Arbor Technology una marca confiable para aplicaciones
        industriales en todo el mundo.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/arbor" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#industrias">Industrias</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
    </nav>

    <div class="container my-5 text-center"
        style="max-width: 800px; background-color: var(--lb-bg-light); padding: 40px; border-radius: 15px;">
        <h2 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 15px;">Desarrollo de Equipos
            Personalizados (OEM/ODM)</h2>
        <p style="color: var(--lb-text); font-size: 1.1rem; margin-bottom: 25px;">Arbor Technology ofrece servicios
            OEM/ODM para desarrollar equipos y soluciones a medida que se ajusten a tus necesidades específicas. Desde
            el diseño inicial hasta la fabricación final, trabaja contigo para crear sistemas integrados y
            personalizados.</p>
        <a href="https://tienda.logicbus.com.mx/arbor" class="btn-circle" target="_blank">Más Información en Tienda</a>
    </div>

    <!-- PRODUCTOS -->
    <h2 class="section-title" id="productos">Productos</h2>
    <div class="container pb-5">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-3 px-5 px-md-2 my-3 d-flex flex-column align-items-center">
                <div class="section-blue py-4 py-md-5 px-0 border-blue">
                    <img loading="lazy" src="./images/arbor/automatizacion-industrial.webp"
                        alt="Automatización Industrial" width="100%">
                    <h4 class="font-weight-bold white px-3 mt-3">Automatización Industrial</h4>
                </div>
                <a class="button button-circle-orange button-text"
                    href="https://tienda.logicbus.com.mx/Automatizaci%C3%B3n-Industrial_c_7875.html" target="_blank"
                    style="margin-top: -1.6rem;">Ver más</a>
            </div>

            <div class="col-12 col-md-3 px-5 px-md-2 my-3 d-flex flex-column align-items-center">
                <div class="section-blue py-4 py-md-5 px-0 border-blue img-blue">
                    <img loading="lazy" src="./images/arbor/computacion-integrada.webp" alt="Computación Integrada"
                        width="100%">
                    <h4 class="font-weight-bold white px-3 mt-3">Computación Integrada</h4>
                </div>
                <a class="button button-circle-orange button-text"
                    href="https://tienda.logicbus.com.mx/Computaci%C3%B3n-Integrada_c_7876.html" target="_blank"
                    style="margin-top: -1.6rem;">Ver más</a>
            </div>

            <div class="col-12 col-md-3 px-5 px-md-2 my-3 d-flex flex-column align-items-center">
                <div class="section-blue py-4 py-md-5 px-0 border-blue">
                    <img loading="lazy" src="./images/arbor/computacion-movil-robusta.webp"
                        alt="Computación Móvil Robusta" width="100%">
                    <h4 class="font-weight-bold white px-3 mt-3">Computación Móvil Robusta</h4>
                </div>
                <a class="button button-circle-orange button-text"
                    href="https://tienda.logicbus.com.mx/Computaci%C3%B3n-M%C3%B3vil-Robusta_c_7877.html"
                    target="_blank" style="margin-top: -1.6rem;">Ver más</a>
            </div>

            <div class="col-12 col-md-3 px-5 px-md-2 my-3 d-flex flex-column align-items-center">
                <div class="section-blue py-4 py-md-5 px-0 border-blue">
                    <img loading="lazy" src="./images/arbor/computacion-medica.webp" alt="Computación Médica"
                        width="100%">
                    <h4 class="font-weight-bold white px-3 mt-3">Computación Médica</h4>
                </div>
                <a class="button button-circle-orange button-text"
                    href="https://tienda.logicbus.com.mx/Computaci%C3%B3n-M%C3%A9dica_c_7878.html" target="_blank"
                    style="margin-top: -1.6rem;">Ver más</a>
            </div>
        </div>
    </div>

    <div class="bg-light-accent">
        <h2 class="section-title" id="industrias" style="margin-top: 0;">Industrias</h2>
        <div class="container mb-5">
            <div class="row px-md-5 px-1">
                <div class="col-12 col-md-4 d-flex align-items-center cont-bgorange my-3">
                    <div class="bg-orange section-blue rounded-circle mr-3" width="100px" heigth="100px">
                        <img loading="lazy" src="./assets/industrias/industrial-automation.svg" alt="Automatización"
                            width="100px">
                    </div>
                    <div>
                        <h5 class="light-orange">Automatización industrial</h5>
                        <p>Controladores de automatización / HMI / Edge Computing</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center cont-bgorange my-3">
                    <div class="bg-orange section-blue rounded-circle mr-3" width="100px" heigth="100px">
                        <img loading="lazy" src="./assets/industrias/transportation.svg" alt="Transporte" width="100px">
                    </div>
                    <div>
                        <h5 class="light-orange">Transporte</h5>
                        <p>Soluciones Ferroviarias / Internet de los Vehículos</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center cont-bgorange my-3">
                    <div class="bg-orange section-blue rounded-circle mr-3" width="100px" heigth="100px">
                        <img loading="lazy" src="./assets/industrias/logistics.svg" alt="Logística" width="100px">
                    </div>
                    <div>
                        <h5 class="light-orange">Logística</h5>
                        <p>Almacenamiento / Gestión de flotas</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center cont-bgorange my-3">
                    <div class="bg-orange section-blue rounded-circle mr-3" width="100px" heigth="100px">
                        <img loading="lazy" src="./assets/industrias/industrial-safety.svg" alt="Seguridad"
                            width="100px">
                    </div>
                    <div>
                        <h5 class="light-orange">Seguridad industrial</h5>
                        <p>Seguridad en cuadros eléctricos</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center cont-bgorange my-3">
                    <div class="bg-orange section-blue rounded-circle mr-3" width="100px" heigth="100px">
                        <img loading="lazy" src="./assets/industrias/retail.svg" alt="Minorista" width="100px">
                    </div>
                    <div>
                        <h5 class="light-orange">Minorista</h5>
                        <p>Señalización digital / Quiosco / POS</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center cont-bgorange my-3">
                    <div class="bg-orange section-blue rounded-circle mr-3" width="100px" heigth="100px">
                        <img loading="lazy" src="./assets/industrias/healthcare.svg" alt="Salud" width="100px">
                    </div>
                    <div>
                        <h5 class="light-orange">Cuidado de la salud</h5>
                        <p>Prevención de epidemias / Infoentretenimiento / Terminales profesionales</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección Catálogos -->
    <h2 class="section-title" id="catalogos">Catálogos</h2>
    <div class="catalog-wrap">
        <a href="https://www.logicbus.com.mx/pdf/catalogos/ARBOR-Embedded-Computing-Catalog.pdf" target="_blank"
            class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy"
                src="https://www.logicbus.com.mx/pdf/catalogos/ARBOR_Embedded_Computing_Catalog-2024.webp"
                alt="Catálogo Embedded Computing">
            <h4>Embedded Computing Catalog</h4>
        </a>
        <a href="https://www.logicbus.com.mx/pdf/catalogos/ARBOR-Industrial-Automation-Catalog.pdf" target="_blank"
            class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy"
                src="https://www.logicbus.com.mx/pdf/catalogos/ARBOR_Industrial_Automation_Catalog-2024.webp"
                alt="Catálogo Industrial Automation">
            <h4>Industrial Automation Catalog</h4>
        </a>
        <a href="https://www.logicbus.com.mx/pdf/catalogos/ARBOR-Rugged-Mobile-Computing-Catalog.pdf" target="_blank"
            class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy"
                src="https://www.logicbus.com.mx/pdf/catalogos/ARBOR_Rugged_Mobile_Computing_Catalog-2024.webp"
                alt="Catálogo Rugged Mobile">
            <h4>Rugged Mobile Computing</h4>
        </a>
    </div>

    <!-- Sección Guías y Manuales -->
    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=arbor" class="ghost-manual-box">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">
            <span>Ver Documentación</span>
        </a>
    </div>

<div class="container my-5">
    <h2 class="section-title bg-transparent" id="articulos">Artículos</h2>

    <div class="row justify-content-center">
        
        <div class="col-12 col-md-6 col-lg-5 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <a href="https://www.logicbus.com.mx/blog/el-poder-de-la-liga-de-ia-de-edge-en-arbor/" target="_blank">
                    <img loading="lazy" class="card-img-top" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/06/El-Poder-de-la-Liga-de-IA-de-Edge-en-ARBOR.webp" alt="El Poder de la Liga de IA de Edge en ARBOR" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
                </a>
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">El Poder de la Liga de IA de Edge en ARBOR</h5>
                    <p class="card-text text-muted flex-grow-1">La computadora de IA de borde FPC-521X está disponible para procesadores Intel® Core™ i9, i7, i5 e i3 de 12ª generación, brindando una potencia de procesamiento sin igual.</p>
                    <a href="https://www.logicbus.com.mx/blog/el-poder-de-la-liga-de-ia-de-edge-en-arbor/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-5 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <a href="https://www.logicbus.com.mx/blog/revolucionando-la-computacion-en-el-borde-para-aplicaciones-industriales-de-proximo-nivel/" target="_blank">
                    <img loading="lazy" class="card-img-top" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/06/Revolucionando-la-Computacion-en-el-Borde-para-Aplicaciones-Industriales-de-Proximo-Nivel.webp" alt="Revolucionando la Computación en el Borde" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
                </a>
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Revolucionando la Computación en el Borde</h5>
                    <p class="card-text text-muted flex-grow-1">El proveedor global de IoT embebido y socio excepcional en IA, ARBOR Technology, lanza los controladores industriales ARES-1980-AI y ELIT-1060-AI para aplicaciones avanzadas.</p>
                    <a href="https://www.logicbus.com.mx/blog/revolucionando-la-computacion-en-el-borde-para-aplicaciones-industriales-de-proximo-nivel/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                </div>
            </div>
        </div>

    </div>
</div>

    <h2 class="section-title" id="videos">Videos Destacados</h2>
    <div class="container mb-5 pb-4">
        <div class="video-container" data-video-id="4WnmqkRdBPg">
            <img loading="lazy" src="https://img.youtube.com/vi/4WnmqkRdBPg/hqdefault.jpg" alt="Video Arbor Technology">
            <div class="play-button"></div>
        </div>
    </div>

    <!-- Contacto (Diseño Odoo) -->
    <div class="section-blue text-center py-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE ARBOR</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Estamos aquí para ayudarte a
                encontrar las mejores soluciones de automatización y computación para tu proyecto.</span>
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
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
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