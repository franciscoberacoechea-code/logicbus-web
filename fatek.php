<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FATEK México PLCs | Marca Exclusiva Logicbus</title>
    
    <meta name="description" content="FATEK Automation Corp. Fue establecida en 1992 en Taiwán por un grupo de ingenieros dedicados al diseño y desarrollo de PLC, HMI, SCADA, etc. Logicbus">
    <meta name="keywords" content="Logicbus, Fatek, PLC, HMI, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizacion, Seguridad, Consultoria, Integracion, Proyecto, Radio Frecuencia, Cubos, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, Measurement, Fatek, Unidades Básicas, Unidades Avanzadas, PLC Serie FBs, SCADA">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <!--- Estilos Necesarios-->
    <?php echo $css_bundle; ?>
    <?php echo $estilos; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

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
                <li class="breadcrumb-item active" aria-current="page">Fatek</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Imagen 100% -->
    <div class="banner-container mb-5">
        <img loading="lazy" src="https://www.logicbus.com.mx/images/banner/www/PorMarca/banner-FATEK-0923.webp" alt="FATEK PLC HMI" title="FATEK PLC HMI">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Fabricante y desarrollador PLC</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">FATEK AUTOMATION</span>
    </h1>

    <!-- Textos de introducción -->
    <p class="intro-text">
        ¿Sabías que <strong>FATEK Automation Corp.</strong> fue establecida en 1992 en Taiwán por un grupo de ingenieros dedicados al diseño y desarrollo de PLC durante muchos años?
    </p>
    <p class="intro-text">
        Desde su creación, <strong>FATEK</strong> se ha esforzado para proporcionar productos de control automático de alta calidad, funciones robustas y facilidad de uso. La línea de productos se centra en PLC, HMI, soluciones de IoT, software SCADA, servidor OPC y fuentes de alimentación. Ahora son reconocidos en la industria por su alta calidad y confiabilidad, gracias a sus esfuerzos durante décadas, convirtiéndose en un proveedor de soluciones profesional, confiable y holístico.
    </p>
    <p class="intro-text">
        FATEK cuenta con un completo sistema de gestión de calidad, insistiendo en hacer lo mejor desde la selección de materiales, el ensamblaje, hasta las pruebas y verificación antes de la entrega, porque sabemos que la forma más fundamental de ganar la confianza del cliente es ofreciendo productos de excelente calidad y alta confiabilidad.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/fatek" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
        <a class="btn-circle" href="#GuiasyManuales">Guías y Manuales</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#videos">Videos</a>
    </nav>

    <!-- Sección Categorías (Productos) -->
    <h2 class="section-title" id="productos">Línea de Productos</h2>
    <div class="products-grid">
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/plc/plc-serie-fbs.webp" alt="PLC serie FBS">
            <h4>PLC serie FBs</h4>
            <p class="small text-muted text-justify flex-grow-1">La Serie estrella de Fatek, competitivos en Precio y Calidad. Cuentan con más de 300 instrucciones con estructura fácil de usar.</p>
            <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandible-serie-fbs" target="_blank">Ver modelos</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/plc/plc-serie-b1.webp" alt="PLC Serie B1-B1z">
            <h4>PLC Serie B1/B1z</h4>
            <p class="small text-muted text-justify flex-grow-1">Soluciones flexibles para la automatización, ofreciendo desde PLCs básicos hasta PLCs para control de posición y movimiento.</p>
            <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-serie-b1-b1z" target="_blank">Ver modelos</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/imagenes/fatek/HMIs.webp" alt="HMI Series P">
            <h4>HMI Series P</h4>
            <p class="small text-muted text-justify flex-grow-1">Con acabado en negro mate, las HMI P2 y P5 son compatibles con todos los PLC principales del mercado y muy fáciles de usar.</p>
            <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/HMI-Series-P_c_5612.html" target="_blank">Ver modelos</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/imagenes/fatek/SCADA.webp" alt="SCADA">
            <h4>SCADA</h4>
            <p class="small text-muted text-justify flex-grow-1">Potente herramienta SCADA con todas las ventajas de una HMI Fatek en tu PC. Convierte tu computadora en un poderoso centro de control.</p>
            <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-software-scada-fvrt" target="_blank">Ver más</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/imagenes/fatek/Servicios-IoT.webp" alt="Servicios IoT">
            <h4>Servicios IoT</h4>
            <p class="small text-muted text-justify flex-grow-1">Una cuenta, una contraseña y una plataforma de monitoreo intuitiva que conecta tu proceso contigo en cualquier lugar del mundo.</p>
            <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-plataforma-iot-fatek" target="_blank">Ver más</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/imagenes/fatek/fatek-box-aprendizaje.webp" alt="Laboratorio Académico">
            <h4>Laboratorio Académico</h4>
            <p class="small text-muted text-justify flex-grow-1">Aprender sobre PLCs, HMIs y SCADA de Fatek mediante kits y maletines de entrenamiento es una gran inversión de tu tiempo.</p>
            <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Laboratorio-Academico_c_5610.html" target="_blank">Ver más</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/imagenes/fatek/Software-WinProladder.webp" alt="Software">
            <h4>Software</h4>
            <p class="small text-muted text-justify flex-grow-1">Los PLC, HMI y SCADA de Fatek requieren prácticamente solo 2 softwares. Encuentra aquí todo lo necesario para tu equipo.</p>
            <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada" target="_blank">Ver más</a>
        </div>
    </div>

    <!-- Sección Catálogos -->
    <h2 class="section-title mt-5" id="catalogos">Catálogos</h2>
    <div class="catalog-wrap mb-5">
        <a href="pdf/29/B1B1z_PLC_Catalog_en_compressed.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/29/economical-and-high-quality-plc.webp" alt="Catálogo PLC B1/B1z">
            <h4>Catálogo PLC Serie B1</h4>
        </a>
        <a href="pdf/29/FBs_PLC_Catalog_en_compressed.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/29/fbs-series-programmable-logic-controller.webp" alt="Catálogo FBs PLC">
            <h4>Catálogo PLC Serie FBs</h4>
        </a>
        <a href="pdf/29/P5_HMI_Catalog_en_compressed.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/29/p5-series-human-machine-interface.webp" alt="Catálogo P5 HMI">
            <h4>Catálogo HMI Serie P5</h4>
        </a>
    </div>

    <!-- Sección Guías y Manuales -->
    <h2 class="section-title mt-5" id="GuiasyManuales">Guías y Manuales</h2>
    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=fatek" class="ghost-manual-box">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/documentacion.svg" alt="Ícono de Documentación">
            <span>Ver Documentación Oficial</span>
        </a>
    </div>

    <!-- Sección Artículos -->
    <h2 class="section-title mt-5" id="articulos">Artículos</h2>
    <div class="articles-list">
        
        <!-- Artículo 1 -->
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/optimiza-tiempo-y-recursos-mediante-la-tecnologia-del-hmi/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/articulos-portadas/recursos-hmi-fatek.webp" alt="Optimiza tiempo y recursos HMI">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/optimiza-tiempo-y-recursos-mediante-la-tecnologia-del-hmi/" target="_blank" style="text-decoration: none;">
                    <h3>Optimiza tiempo y recursos mediante la tecnología del HMI</h3>
                </a>
                <p>Human-Machine Interface, o mejor conocido como HMI, tal como su nombre lo indica nos ofrece un puente comunicacional con toda nuestra industria.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/optimiza-tiempo-y-recursos-mediante-la-tecnologia-del-hmi/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <!-- Artículo 2 -->
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/como-comunicar-una-hmi-fatek-con-un-plc-de-la-misma-marca/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/articulos-portadas/comunicar-hmi-plc.webp" alt="Comunicar HMI Fatek">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/como-comunicar-una-hmi-fatek-con-un-plc-de-la-misma-marca/" target="_blank" style="text-decoration: none;">
                    <h3>¿Cómo comunicar una HMI Fatek con un PLC?</h3>
                </a>
                <p>¿Sabes cómo comunicar un HMI de la serie P2 o P5 con un PLC? Lo primero que necesitarás será la última versión de FvDesigner, el software de desarrollo de Fatek.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/como-comunicar-una-hmi-fatek-con-un-plc-de-la-misma-marca/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <!-- Artículo 3 -->
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/configuracion-de-modulo-de-temperatura-del-plc-fatek/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/articulos-portadas/modelu-temperatura-plc.webp" alt="Módulo temperatura">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/configuracion-de-modulo-de-temperatura-del-plc-fatek/" target="_blank" style="text-decoration: none;">
                    <h3>Configuración de Módulo de temperatura de PLC</h3>
                </a>
                <p>¿Conoces las ventajas que ofrecen este tipo de módulos? Están diseñados para trabajar con los sensores de temperatura más comunes sin requerir acondicionamiento.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/configuracion-de-modulo-de-temperatura-del-plc-fatek/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <!-- Artículo 4 -->
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/hmis-totalmente-compatibles-con-fatek-iot/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/articulos-portadas/hmis-fatek-iot.webp" alt="Fatek IoT">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/hmis-totalmente-compatibles-con-fatek-iot/" target="_blank" style="text-decoration: none;">
                    <h3>HMIs totalmente compatibles con FATEK IoT</h3>
                </a>
                <p>Descubre los modelos de HMI de FATEK que tendrán compatibilidad con FATEK IoT Solutions. Interactúa con la tecnología IoT de manera robusta y segura.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/hmis-totalmente-compatibles-con-fatek-iot/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Sección Videos -->
    <h2 class="section-title mt-5" id="videos">Videos</h2>
    <div class="products-grid" style="max-width: 1000px; margin: 0 auto;">
        <div class="video-container" data-video-id="OwPIfA7F-Ig">
            <img loading="lazy" src="https://img.youtube.com/vi/OwPIfA7F-Ig/hqdefault.jpg" alt="Cómo vincular entre HMI y PLC">
            <div class="play-button"></div>
        </div>
        <div class="video-container" data-video-id="eoJ-HyUUy4E">
            <img loading="lazy" src="https://img.youtube.com/vi/eoJ-HyUUy4E/hqdefault.jpg" alt="FATEK Y SU SOLUCIÓN IoT">
            <div class="play-button"></div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a class="btn-circle d-inline-block" href="https://www.youtube.com/playlist?list=PL9EhLTarrD6NpKpPG0TjH1J5-Gf40oaTM" target="_blank" style="width: auto; padding: 10px 30px;">Ver todos los videos de Fatek</a>
    </div>

    <!-- Contacto (Diseño Odoo Base) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN SOBRE FATEK?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Déjanos ayudarte! Estamos aquí para encontrar las mejores soluciones de control y automatización para tu proyecto.</span>
        </div>
        <!-- BEGIN Odoo web form -->
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe loading="lazy" src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
        <!-- END Odoo web form -->
    </div>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    
    <!-- Scripts -->
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
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