<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MadgeTech México data logger de presión humedad | Logicbus</title>
    <meta name="description" content="MadgeTech soluciones de data logger para medir y registrar datos de presión, humedad, choque o temperatura.">
    <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, MadgeTech, Alta Temperatura, Registrador de Temperatura, QuadTemp y sondas externas de termopar, Registrador de temperatura, ThermoVault, TC4000-ST y una sonda Tipo K, ThermoVault140, HiTemp140, HiTemp140-FR, HiTemp140-FP, HiTemp140-PT, RTD flexible de acero inoxidable, AVS140-1, HiTemp140-1, calibración NIST, interfaz IFC400, AVS140-6, PR140-NPT, calibración NIST, IFC406, MadgeTech México, madgetech, madgetech mexico, madgetech guadalajara">

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
        /* Ocultar barra lateral heredada */
        #leftBar {
            display: none;
        }
        /* Prevenir scroll horizontal */
        body, html {
            overflow-x: hidden;
            max-width: 100%;
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
            .video-container:hover img { opacity: 1; }
            .video-container:hover .play-button {
                background-color: var(--lb-accent, #FF7E00);
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
            <ol class="breadcrumb pl-0 bg-transparent">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">MadgeTech</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5 text-center">
        <img loading="lazy" src="images/banner/www/PorMarca/BANNER-MADGETECH-MZ23.webp" alt="MadgeTech México - soluciones de data logger" title="MadgeTech México - soluciones de data logger" style="width: 100%;">
    </div>

    <h1 class="main-title text-center mb-5">
        <span style="color: var(--lb-primary, #22527A); font-size: inherit; line-height: inherit;">Soluciones de Data Logger</span>
        <span style="color: var(--lb-accent, #FF7E00); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">MADGETECH</span>
    </h1>

    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    <strong>MadgeTech</strong> ofrece soluciones de data logger para medir y registrar datos de presión, humedad, choque o temperatura, sirviendo a muchas industrias de alto nivel incluyendo alimentos, productos farmacéuticos, energía y más.
                </p>
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    Al brindar tranquilidad a las industrias más reguladas del mundo, las compañías grandes y pequeñas confían en <strong>MadgeTech</strong> para proteger su producto, al tiempo que brindan la validación necesaria para el cumplimiento y control de calidad.
                </p>
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    <strong>Laboratorio de calibración acreditado por ISO:</strong> Con el tiempo, los registradores de datos se desviarán debido al entorno operativo, el uso o el estrés físico. Mantenga la precisión y minimice la incertidumbre confiando en nuestros técnicos de calibración especializados para garantizar que el rendimiento cumpla con los estándares de la industria.
                </p>
            </div>

            <div class="col-12 col-lg-5 text-center">
                <img loading="lazy" src="images/banner/www/PorMarca/banner-registradores-madgetech-gif.gif" alt="MadgeTech registradores animados" class="img-fluid rounded shadow-sm border p-1 bg-white">
            </div>
        </div>
    </div>

    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/MadgeTech_bymfg_15-0-1.html" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#aplicaciones">Aplicaciones</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#videos">Videos</a>
    </nav>

    <h2 class="section-title bg-transparent text-center mb-5" id="aplicaciones" style="color: var(--lb-primary, #22527A);">Aplicaciones</h2>
    <div class="container mb-5 text-center">
        <a href="https://tienda.logicbus.com.mx/MadgeTech_bymfg_15-0-1.html" target="_blank">
            <img loading="lazy" src="images/app/madgetech-Banner-aplicaciones.webp" class="img-fluid rounded shadow-sm border" alt="Aplicaciones de Madgetech" style="width: 100%; max-width: 900px;">
        </a>
    </div>

    <h2 class="section-title bg-transparent text-center mb-5" id="productos" style="color: var(--lb-primary, #22527A);">Línea de Productos</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">
            
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="high_temperature_products" target="_blank" class="text-center p-3">
                        <img class="card-img-top img-fluid" src="images/categorias/2022/registradores/registradores.webp" alt="Registradores Alámbricos" style="height: 200px; object-fit: contain;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Registradores Alámbricos</h5>
                        <p class="card-text text-muted flex-grow-1 small text-justify">Dispositivos robustos y de alta precisión para la medición de diferentes magnitudes y control de procesos críticos en entornos industriales.</p>
                        <div class="mt-3">
                            <a href="https://tienda.logicbus.com.mx/Registradores-Al%C3%A1mbricos-Gama-Alta_c_3417.html" target="_blank" class="btn-circle d-inline-block">Ver en tienda</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="wireless_temperatura" target="_blank" class="text-center p-3">
                        <img class="card-img-top img-fluid" src="images/categorias/2022/registradores/registradores-inalambricos.webp" alt="Registradores Inalámbricos" style="height: 200px; object-fit: contain;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Registradores Inalámbricos</h5>
                        <p class="card-text text-muted flex-grow-1 small text-justify">Sistemas avanzados inalámbricos para el control, monitoreo y transmisión de datos en tiempo real de temperatura, humedad y presión.</p>
                        <div class="mt-3">
                            <a href="https://tienda.logicbus.com.mx/Registradores-Inal%C3%A1mbricos_c_3419.html" target="_blank" class="btn-circle d-inline-block">Ver en tienda</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="madgetech-cloud-services" target="_blank" class="text-center p-3">
                        <img class="card-img-top img-fluid" src="images/categorias/2022/registradores/cloud.webp" alt="Servicios Cloud" style="height: 200px; object-fit: contain;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Software y Cloud</h5>
                        <p class="card-text text-muted flex-grow-1 small text-justify">Cumplimiento y análisis mediante funciones personalizadas. Servicios en la nube para optimizar la recopilación y gestión de datos 24/7.</p>
                        <div class="mt-3">
                            <a href="https://tienda.logicbus.com.mx/Servicios-Cloud_c_4295.html" target="_blank" class="btn-circle d-inline-block">Ver en tienda</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-light py-5" id="catalogos">
        <div class="container">
            <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Catálogos y Guías</h2>
            
            <div class="row justify-content-center text-center">
                <div class="col-6 col-md-3 mb-4">
                    <a href="pdf/catalogos/Aplicaciones-MadgeTech.pdf" target="_blank" style="text-decoration: none;">
                        <img loading="lazy" src="pdf/catalogos/Aplicaciones-MadgeTech.webp" alt="Aplicaciones MadgeTech" class="img-fluid rounded shadow-sm border mb-3" style="max-height: 200px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary, #22527A);">Aplicaciones</span>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <a href="pdf/catalogos/Madgetech-Catalogo.pdf" target="_blank" style="text-decoration: none;">
                        <img loading="lazy" src="pdf/catalogos/Madgetech-Catalogo.webp" alt="Catálogo MadgeTech" class="img-fluid rounded shadow-sm border mb-3" style="max-height: 200px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary, #22527A);">Catálogo General</span>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <a href="pdf/catalogos/Medical-&-Pharmaceutical-Brochure.pdf" target="_blank" style="text-decoration: none;">
                        <img loading="lazy" src="pdf/catalogos/Logicbus-Medical-&-Pharmaceutical-Brochure.webp" alt="Brochure Médico" class="img-fluid rounded shadow-sm border mb-3" style="max-height: 200px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary, #22527A);">Brochure Farmacéutico</span>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/Warehouse-Mapping-Brochure.pdf" target="_blank" style="text-decoration: none;">
                        <img loading="lazy" src="pdf/catalogos/Warehouse-Mapping-Brochure.webp" alt="Buenas Prácticas" class="img-fluid rounded shadow-sm border mb-3" style="max-height: 200px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary, #22527A);">Guía Buenas Prácticas</span>
                    </a>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=madgetech" target="_blank" class="ghost-manual-box" style="text-decoration: none; border: 2px dashed var(--lb-accent); padding: 15px 30px; border-radius: 15px; display: inline-block; background-color: #fff; transition: all 0.3s ease;">
                    <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación" style="width: 50px; margin-right: 15px; vertical-align: middle;">
                    <span class="font-weight-bold" style="color: var(--lb-primary); font-size: 1.1rem; vertical-align: middle;">Ver Documentación y Manuales Oficiales</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="section-title bg-transparent text-center mb-5" id="articulos" style="color: var(--lb-primary, #22527A);">Artículos Destacados</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/empresa-de-alimentos-y-bebidas-selecciona-madgetech-para-la-validacion-termica/" target="_blank">
                        <img class="card-img-top" src="images/articulos-portadas/MadgeTech-validacion-termica.webp" alt="Validación térmica" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Empresa de alimentos selecciona MadgeTech para validación</h5>
                        <p class="card-text text-muted flex-grow-1 small">Una empresa líder en la industria de alimentos y bebidas, ofrece apoyo científico, técnico, regulatorio e informativo práctico...</p>
                        <div class="mt-3">
                            <a href="https://www.logicbus.com.mx/blog/empresa-de-alimentos-y-bebidas-selecciona-madgetech-para-la-validacion-termica/" target="_blank" class="btn-circle d-inline-block">Leer artículo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/agiliza-monitoreo-presion-temperatura-en-ubicaciones-peligrosas/" target="_blank">
                        <img class="card-img-top" src="images/articulos-portadas/MadgeTech-monitoreo-presion-temperatura.webp" alt="Monitoreo ubicaciones peligrosas" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Monitoreo de presión y temperatura en áreas peligrosas</h5>
                        <p class="card-text text-muted flex-grow-1 small">Ahora es más fácil recopilar un perfil completo de entornos peligrosos con el nuevo registrador de datos PR1000IS de MadgeTech.</p>
                        <div class="mt-3">
                            <a href="https://www.logicbus.com.mx/blog/agiliza-monitoreo-presion-temperatura-en-ubicaciones-peligrosas/" target="_blank" class="btn-circle d-inline-block">Leer artículo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/madgetech-cloud/" target="_blank">
                        <img class="card-img-top" src="images/articulos-portadas/MadgeTech-Cloud.webp" alt="MadgeTech Cloud" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">MadgeTech Cloud ofrece configuración y cumplimiento</h5>
                        <p class="card-text text-muted flex-grow-1 small">¿Está buscando una solución de monitoreo asequible basada en la nube? Bueno, no busque más, MadgeTech Cloud es la respuesta.</p>
                        <div class="mt-3">
                            <a href="https://www.logicbus.com.mx/blog/madgetech-cloud/" target="_blank" class="btn-circle d-inline-block">Leer artículo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" id="videos">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Videos Destacados</h2>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="JJuexgM7-hs">
                    <img loading="lazy" src="https://img.youtube.com/vi/JJuexgM7-hs/hqdefault.jpg" alt="Webinar - Ahorrar dinero">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="kGfNdkVHq8M">
                    <img loading="lazy" src="https://img.youtube.com/vi/kGfNdkVHq8M/hqdefault.jpg" alt="Seguimiento de empleados">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="2HdnSCRalOU">
                    <img loading="lazy" src="https://img.youtube.com/vi/2HdnSCRalOU/hqdefault.jpg" alt="Grabación con el TC101A">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="5BzPdSQIb4w">
                    <img loading="lazy" src="https://img.youtube.com/vi/5BzPdSQIb4w/hqdefault.jpg" alt="Registrador sumergible">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary, #22527A);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white, #fff); margin-bottom: 15px; text-transform: uppercase;">¿Necesitas asesoría técnica especializada?</h2>
            <span class="paragraph" style="color: var(--lb-white, #fff); font-size: 1.1rem;">
                Nuestros ingenieros están listos para ayudarte a elegir el sistema de registro de datos MadgeTech perfecto para tu aplicación.
            </span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>
    
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>

    <script>
        // JAVASCRIPT PARA CARGAR VIDEOS DE YOUTUBE AL HACER CLIC
        document.addEventListener('DOMContentLoaded', function () {
            var videoContainers = document.querySelectorAll('.video-container');

            videoContainers.forEach(function (container) {
                container.addEventListener('click', function () {
                    var videoId = this.dataset.videoId;
                    if(videoId) {
                        var iframe = document.createElement('iframe');
                        iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
                        iframe.setAttribute('title', 'YouTube video player');
                        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                        iframe.setAttribute('allowfullscreen', '');

                        this.innerHTML = '';
                        this.appendChild(iframe);
                    }
                });
            });
        });
    </script>
</body>
<?php echo $var_footer; ?>
</html>