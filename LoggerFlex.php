<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LoggerFlex – Soluciones de adquisición y monitoreo de datos | Logicbus</title>
    <meta name="description" content="LoggerFlex ofrece soluciones DAQ y monitoreo remoto fácil, simple y seguro, con sus modelos utilizados en monitoreo de parámetros ambientales.">
    <meta name="keywords" content="Logicbus, México, Mexico, Guadalajara, Sistema de registro, temperatura, alarma, sensores externos, conexeción Wi-Fi, LoggerFlex">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?> <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php echo $carrusel_productos; ?>

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

        /* Hover */
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

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">LoggerFlex</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/Banner-Logger.webp" alt="LoggerFlex" title="LoggerFlex" style="width: 100%;">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Adquisición y Monitoreo de Datos</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">LOGGERFLEX</span>
    </h1>

    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-12 col-md-7">
                <p class="intro-text text-justify">
                    <strong>LoggerFlex</strong> te proporciona soluciones de adquisición de datos y monitoreo remoto, fácil, simple y seguro, mediante la aplicación de sus modelos se pueden resolver problemas de monitoreo de parámetros ambientales, con una tecnología simple y fácil de usar.
                </p>
                <p class="intro-text text-justify">
                    Están dedicados a proporcionar soluciones de la manera más flexible para permitir que se beneficien de ello en cualquier aspecto sin esfuerzo. Estas soluciones están basadas en la resistencia a las condiciones de la vida real, simplicidad de instalación y uso sin mantenimiento, combinado con un diseño de interfaz claro.
                </p>
                <p class="intro-text text-justify">
                    Te permite monitorear tus variables las 24 horas del día, los 7 días de la semana y los 365 días del año, recibiendo notificaciones por mensaje de texto (SMS) y por correo electrónico si tus variables caen por debajo de su límite deseado o se exceden. ¡No necesita verificar nada manualmente!
                </p>
            </div>
            <div class="col-12 col-md-5 text-center mt-4 mt-md-0">
                <img loading="lazy" src="images/app/logger-flex-monitoreo.webp" alt="Logger Flex monitoreo" class="img-fluid rounded shadow-sm border">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <p class="text-muted text-justify p-4 bg-light rounded border">
                    <i class="fa fa-cloud" style="color: var(--lb-accent); font-size: 1.5rem; margin-right: 10px;"></i>
                    Todas las mediciones de tu proyecto se almacenan automáticamente en la memoria interna y se sincronizan con la aplicación en la nube EEMS a través de su enrutador Wi-Fi, para acceder a sus datos no necesita conectar el dispositivo a una computadora o teléfono, lo único que debes hacer es iniciar sesión en su cuenta desde cualquier lugar y extraer cualquier informe que necesite en unos segundos.
                </p>
            </div>
        </div>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/loggerflex" target="_blank">Ver en tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
        <a class="btn-circle" href="#videos">Videos</a>
        <a class="btn-circle" href="#aplicaciones">Aplicaciones</a>
    </nav>

    <h2 class="section-title mt-5" id="productos">Productos</h2>
    <div class="container mb-5">
        <div class="products-grid" style="max-width: 400px; margin: 0 auto;">
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Registradores-conexi%C3%B3n-Wi-Fi_c_3420.html" target="_blank">
                    <img loading="lazy" src="imagenes/269/bun-thermowell.webp" alt="Registradores conexión Wi-Fi">
                </a>
                <h4 class="mt-3">Registradores conexión Wi-Fi</h4>
                <p class="small text-muted text-justify flex-grow-1">Sistema de registro de temperatura y alarma con sensores externos diseñados para su instalación. Está alimentado por 2 baterías AA reemplazables por hasta 6 años y se conecta directamente a Wi-Fi.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Registradores-conexi%C3%B3n-Wi-Fi_c_3420.html" target="_blank">Ver modelos</a>
            </div>
        </div>
    </div>

    <h2 class="section-title mt-5" id="articulos">Artículos</h2>
    <div class="articles-list mb-5">
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/registrador-de-temperatura/" target="_blank">
                    <img loading="lazy" src="imagenes/269/logger-flex-articulo.webp" alt="Registrador de temperatura">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/registrador-de-temperatura/" target="_blank" style="text-decoration: none;">
                    <h3>¡Duerma bien por la noche, un ojo incansable vigila la temperatura de su negocio!</h3>
                </a>
                <p>Tener un registrador de temperatura en un congelador industrial ya no es un privilegio; Es una necesidad absoluta para proteger sus activos.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/registrador-de-temperatura/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title mt-5" id="catalogos">Catálogos</h2>
    <div class="catalog-wrap mb-5">
        <a href="https://www.logicbus.com.mx/pdf/catalogos/LoggerFlex-e-Catalog.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/LoggerFlex-e-Catalog.webp" alt="Catálogo LoggerFlex">
            <h4>LoggerFlex e-Catalog</h4>
        </a>
    </div>

    <h2 class="section-title mt-5" id="videos">Videos</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mb-4">
                <div class="video-container" data-video-id="N6TlhrYJcx8">
                    <img loading="lazy" src="https://img.youtube.com/vi/N6TlhrYJcx8/hqdefault.jpg" alt="Conecta tu registrador">
                    <div class="play-button"></div>
                </div>
                <h4 class="text-center mt-3" style="color: var(--lb-primary); font-size: 1.1rem;">Conecta tu registrador vía WiFi</h4>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="video-container" data-video-id="GV7lCuNsbVE">
                    <img loading="lazy" src="https://img.youtube.com/vi/GV7lCuNsbVE/hqdefault.jpg" alt="Registro de temperatura">
                    <div class="play-button"></div>
                </div>
                <h4 class="text-center mt-3" style="color: var(--lb-primary); font-size: 1.1rem;">Registro de variables en campo</h4>
            </div>
        </div>
    </div>

    <h2 class="section-title mt-5" id="aplicaciones">Aplicaciones y Fichas Técnicas</h2>
    <div class="container mb-5">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                <a href="https://tienda.logicbus.com.mx/Registradores-conexi%C3%B3n-Wi-Fi_c_3420.html" target="_blank">
                    <img loading="lazy" src="images/app/logger-flex-crecimiento.webp" alt="Ventajas Logger Flex" class="img-fluid rounded shadow-sm border">
                </a>
            </div>
            <div class="col-12 col-md-6 text-center">
                <a href="https://tienda.logicbus.com.mx/Registradores-conexi%C3%B3n-Wi-Fi_c_3420.html" target="_blank">
                    <img loading="lazy" src="images/app/bun-loggerflex-multi.webp" alt="Bun LoggerFlex Aplicaciones" class="img-fluid rounded shadow-sm border">
                </a>
            </div>
        </div>

        <div class="row justify-content-center text-center mb-5">
            <div class="col-6 col-md-4 mb-3">
                <a href="pdf/269/MOLD-STOP.pdf" target="_blank" style="text-decoration: none; color: var(--lb-primary);">
                    <img loading="lazy" src="pdf/269/MOLD-STOP.webp" alt="Mold stop" class="img-fluid rounded shadow-sm border mb-2" style="max-height: 250px; object-fit: contain;">
                    <br><b>Ficha: Mold Stop</b>
                </a>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <a href="pdf/269/Bun-Counter.pdf" target="_blank" style="text-decoration: none; color: var(--lb-primary);">
                    <img loading="lazy" src="pdf/269/Bun-Counter.webp" alt="Bun counter" class="img-fluid rounded shadow-sm border mb-2" style="max-height: 250px; object-fit: contain;">
                    <br><b>Ficha: Bun Counter</b>
                </a>
            </div>
        </div>

        <div class="text-center pb-4">
            <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=loggerflex" class="ghost-manual-box" style="text-decoration: none;">
                <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación" style="width: 150px; margin-bottom: 15px;">
                <span class="d-block" style="font-weight: bold; color: var(--lb-primary); font-size: 1.1rem;">Ver Documentación Oficial LoggerFlex</span>
            </a>
        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Si necesitas ayuda personalizada, nuestro equipo de soporte está altamente capacitado para ayudarte a resolver tus problemas de monitoreo de forma rápida y eficaz.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe loading="lazy" src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
        </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>

    <script>
        // Carga dinámica de videos de YouTube
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