<?php
require("admin/config.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Brainchild | Registradores gráficos sin papel - Logicbus</title>

    <meta name="description"
        content="El registrador sin papel es un tipo de registrador de datos o dispositivo de adquisición de datos que satisface las necesidades de registro industrial. Logicbus">
    <meta name="keywords"
        content="Logicbus, Mexico, Guadalajara, Brainchild, Registradores sin papel, DAQ, Adquisicion de datos, Automatizacion industrial, Graficadores">

    <!--- Estilos Necesarios-->
    <?php echo $favicon; ?>
    <?php echo $css_bundle; ?>
    <?php echo $estilos; ?> <!-- CSS General con las clases Shift4Shop -->

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

    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="adquisicion-y-registro-de-datos-daq"
                        class="blue link-orange">Adquisición y registro de datos - DAQ</a></li>
                <li class="breadcrumb-item active" aria-current="page">BrainChild</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Video 100% -->
    <div class="banner-container mb-5">
        <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/brainchild.webp">
            <source src="https://www.logicbus.com.mx/assets/videos/brainchild.mp4" type="video/mp4">
        </video>
    </div>

    <!-- H1 con diseño Shift4Shop -->
    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Experto en equipos de</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">CONTROL
            INDUSTRIAL</span>
    </h1>

    <!-- Texto de introducción -->
    <p class="intro-text">
        <b>Brainchild</b>, un líder en automatización industrial, ofrece soluciones avanzadas en registradores gráficos
        sin papel. Sus productos se destacan por su alta precisión, innovación continua y confiabilidad, proporcionando
        herramientas esenciales para optimizar procesos industriales.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/brainchild" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#aplicaciones">Aplicaciones</a>
        <a class="btn-circle" href="#videos">Videos</a>
        <a class="btn-circle" href="#doc">Catálogos y Documentación</a>
    </nav>

    <!-- Sección Productos -->
    <h2 class="section-title" id="productos">PRODUCTOS</h2>
    <div class="container mb-5">
        <div class="row align-items-center bg-white p-4 rounded shadow-sm border">
            <div class="col-md-7 text-center text-md-left mb-4 mb-md-0 px-md-4">
                <h3 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 20px;">Registradores sin papel
                </h3>
                <p class="text-justify text-muted">El registrador sin papel es un tipo de registrador de datos o
                    dispositivo de adquisición de datos que satisface la mayoría de las necesidades de registro
                    industrial. La nueva serie PR de registradores sin papel se lanza con una gama completa de productos
                    con especificaciones y características sobresalientes.</p>
                <div class="mt-4">
                    <a class="btn-circle"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-graficadores-registrador-sin-papel"
                        target="_blank">Ver más modelos</a>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <img loading="lazy" src="./images/brainchild/registrador-sin-papel.webp" alt="Registradores sin papel"
                    class="img-fluid rounded">
            </div>
        </div>
    </div>

    <!-- Sección Aplicaciones (Grid de Tarjetas estandarizado) -->
    <div class="bg-light-accent" id="aplicaciones">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0 !important;">APLICACIONES</h2>
            <div class="products-grid">
                <div class="product-card">
                    <img loading="lazy" src="./images/brainchild/semiconductores.webp"
                        alt="Industria de Semiconductores">
                    <h4>Industria de Semiconductores</h4>
                </div>
                <div class="product-card">
                    <img loading="lazy" src="./images/brainchild/industria-ceramica.webp"
                        alt="Industria Cerámica / Hornos / Vidrio">
                    <h4>Industria Cerámica, Hornos y Vidrio</h4>
                </div>
                <div class="product-card">
                    <img loading="lazy" src="./images/brainchild/tratamiento-aguas.webp" alt="Tratamiento de Aguas">
                    <h4>Tratamiento de Aguas</h4>
                </div>
                <div class="product-card">
                    <img loading="lazy" src="./images/brainchild/industria-cervecera.webp" alt="Industria Cervecera">
                    <h4>Industria Cervecera</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección Videos -->
    <h2 class="section-title" id="videos">VIDEOS</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <!-- Se usa el script lazy load embebido para mejor rendimiento -->
                <div class="video-container" data-video-id="1r2VPsfbmUk">
                    <img loading="lazy" src="https://img.youtube.com/vi/1r2VPsfbmUk/hqdefault.jpg"
                        alt="GRAFICADORES DE DATOS - LOGICBUS">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Catálogos y Manuales -->
    <h2 class="section-title" id="doc">CATÁLOGOS Y MANUALES</h2>

    <!-- Catálogos (Estilo Badge) -->
    <div class="catalog-wrap">
        <a href="https://www.logicbus.com.mx/pdf/catalogos/brainchild.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/brainchild.webp"
                alt="BrainChild Brochure">
            <h4>BrainChild Brochure</h4>
        </a>
    </div>

    <!-- Documentación General (Estilo Ghost Box) -->
    <div class="text-center mb-5 pb-4 mt-5">
        <a href="https://www.logicbus.com.mx/documentos?clave=&amp;tagArray%5B%5D=brainchild"
            class="ghost-manual-box">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">
            <span>Ver Base de Documentación</span>
        </a>
    </div>

    <!-- Contacto (Odoo) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE BRAINCHILD</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Estamos aquí para ayudarle a
                encontrar las mejores soluciones de registro de datos para su proyecto.</span>
        </div>
        <!-- BEGIN Odoo web form -->
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;">
                </iframe>
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
        // JAVASCRIPT PARA CARGAR EL VIDEO DE YOUTUBE AL HACER CLIC
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

                    // Reemplaza el contenido del div por el iframe
                    this.innerHTML = '';
                    this.appendChild(iframe);
                });
            });
        });
    </script>
</body>

<?php echo $var_footer; ?>

</html>