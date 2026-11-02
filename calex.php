<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calex Sensores de Temperatura Infrarrojos | Logicbus</title>

    <meta name="description" content="Calex ha proporcionado soluciones de conversión de potencia y medición de temperatura de alta calidad y rentables para industrias de todo el mundo.">
    <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Sensor de Temperatura de tipo Infrarrojos, Calex, PYROBUS, PYROCOUPLE, PYROEPSILON, PYROUSB, PyroMini 2.2, PYROPEN, EXTEMP, Infrarrojos">

    <!--- Estilos Necesarios-->
    <?php echo $css_bundle; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php echo $estilos; ?> <!-- CSS General con las clases Shift4Shop -->

    <!-- CSS ESPECÍFICO DE ESTA PÁGINA -->
    <style>
        /* Ocultar barra lateral antigua para usar full-width */
        #leftBar {
            display: none;
        }

        /* Variedad visual: Grid específico para artículos de Blog */
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 2rem;
        }
        .article-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border: 1px solid #eee;
            transition: transform 0.3s ease;
        }
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        .article-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-bottom: 3px solid var(--lb-accent);
        }
        .article-card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .article-card h3 {
            font-size: 1.1rem;
            color: var(--lb-primary);
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Contenedor de Videos de YouTube */
        .video-container-youtube {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #000;
        }
        .video-container-youtube img {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0.8; transition: opacity 0.3s ease;
        }
        .video-container-youtube iframe {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;
        }
        .video-container-youtube .play-button {
            position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; background-color: rgba(0, 0, 0, 0.6); border-radius: 50%; transition: all 0.3s ease;
        }
        .video-container-youtube .play-button::after {
            content: ''; position: absolute; top: 50%; left: 54%; transform: translate(-50%, -50%); border-style: solid; border-width: 12px 0 12px 20px; border-color: transparent transparent transparent white;
        }
        .video-container-youtube:hover img { opacity: 1; }
        .video-container-youtube:hover .play-button { background-color: var(--lb-accent); transform: translate(-50%, -50%) scale(1.1); }
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
                <li class="breadcrumb-item active" aria-current="page">Calex</li>
            </ol>
        </nav>
    </div>
    
        <!-- Banner Imagen 100% -->
    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/BANNER-CALEX-MZ23.webp"
            alt="CALEX" title="CALEX">
    </div>

    <!-- H1 con diseño Shift4Shop -->
    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Sensores infrarrojos y soluciones de</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">MEDICIÓN DE TEMPERATURA</span>
    </h1>

    <!-- Texto de introducción -->
    <p class="intro-text">
        Desde 1973, <b>Calex</b> ha proporcionado soluciones de conversión de potencia y medición de temperatura de alta calidad y rentables para industrias de todo el mundo. Nuestro diseño y fabricación internos se centran en sensores de temperatura infrarrojos sin contacto y fuentes de alimentación de AC / DC. Nuestro Sistema de Gestión de Calidad está certificado por ISO 9001.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/CALEX_bymfg_13-0-1.html" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#catalogos">Catálogos y Manuales</a>
        <a class="btn-circle" href="#videos">Videos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#aplicaciones">Aplicaciones</a>
    </nav>

    <!-- Sección Productos (Vitrina de soluciones full-width) -->
    <h2 class="section-title" id="productos">Sensores de Temperatura Infrarrojos</h2>
    <div class="container mb-5">
        <div class="products-grid">
            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-extemp"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/extemp/extemp.webp" alt="EXTEMP"></a>
                <h4>EXTEMP</h4>
                <p class="small text-muted">Sensor infrarrojo intrínsecamente seguro, certificado ATEX e IECEx.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/ExTemp_c_3054.html" target="_blank">Comprar</a>
            </div>
            
            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-fibremini"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/fibremini/fibremini.webp" alt="FIBREMINI"></a>
                <h4>FIBREMINI</h4>
                <p class="small text-muted">Pirómetro de fibra óptica para aplicaciones severas en la industria.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/FibreMini_c_3059.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrobus"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrobus/pyrobus.webp" alt="PYROBUS"></a>
                <h4>PYROBUS</h4>
                <p class="small text-muted">Sensor de temperatura infrarrojo fijo con salida Modbus RS485.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroBus_c_3066.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrocouple"><img loading="lazy" src="imagenes/PYROCOUPLE_small.jpg" alt="PYROCOUPLE"></a>
                <h4>PYROCOUPLE</h4>
                <p class="small text-muted">Sensor infrarrojo con salida análoga de corriente, voltaje o termopar.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroCouple_c_3050.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrocube_m"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/sensor-temperatura-infrarrojo-pyrocube-m-metal.png" alt="PYROCUBE M"></a>
                <h4>PYROCUBE M</h4>
                <p class="small text-muted">Pirómetro de respuesta rápida para metales a baja temperatura.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroCube-M_c_3062.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrocube_s_f"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/sensor-temperatura-infrarrojo-PCU-S55-5M-5V.webp" alt="PYROCUBE S y F"></a>
                <h4>PYROCUBE S y F</h4>
                <p class="small text-muted">Sensor infrarrojo con respuesta rápida y pequeño punto de medición.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroCube-S-and-F_c_3060.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrocube_xs"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_xs/pyrocube_xs.webp" alt="PYROCUBE XS"></a>
                <h4>PYROCUBE XS</h4>
                <p class="small text-muted">Óptica enfocada para medir objetivos extremadamente pequeños.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Infrarojos_c_3046.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrocube_p"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_p/pyrocube_p.png" alt="PYROCUBE P"></a>
                <h4>PYROCUBE P</h4>
                <p class="small text-muted">Pirómetro diseñado específicamente para película delgada de plástico.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroCube-P_c_3064.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyroepsilon"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyroepsilon/pyroepsilon.webp" alt="PYROEPSILON"></a>
                <h4>PYROEPSILON</h4>
                <p class="small text-muted">Sensor de temperatura infrarrojo, emisividad configurable, 4~20 mA.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroEpsilon_c_3065.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyromini"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini/pyromini.webp" alt="PYROMINI"></a>
                <h4>PYROMINI</h4>
                <p class="small text-muted">Sensor de temperatura infrarrojo fijo con sensor remoto.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroMini_c_3055.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyromini22"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini22/pyromini22.webp" alt="PYROMINI 2.2"></a>
                <h4>PYROMINI 2.2</h4>
                <p class="small text-muted">Pirómetro de dos partes para objetivos y metales de alta temperatura.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroMini-22_c_3056.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrominibus"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominibus/pyrominibus.webp" alt="PYROMINIBUS"></a>
                <h4>PYROMINIBUS</h4>
                <p class="small text-muted">Sistema de monitoreo de temperatura multicanal, RS485 Modbus.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroBus_c_3066.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrousb"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/pyrousb.webp" alt="PYROUSB"></a>
                <h4>PYROUSB</h4>
                <p class="small text-muted">Sensores configurables para PC mediante USB con salida de 4-20 mA.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroUSB-Versi%C3%B3n-Nueva_c_3057.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrominiusb"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominiusb/pyrominiusb.webp" alt="PYROMINIUSB"></a>
                <h4>PYROMINIUSB</h4>
                <p class="small text-muted">Sensor infrarrojo USB para mesa de trabajo, laboratorio y educación.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroMiniUSB_c_3051.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyronfc"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyronfc/pyronfc.webp" alt="PYRONFC"></a>
                <h4>PYRONFC</h4>
                <p class="small text-muted">Sensor infrarrojo pequeño con configuración vía smartphone NFC.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/PyroNFC_c_3053.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="sensores-temperatura-infrarrojos-pyrocan"><img loading="lazy" src="imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocan/pyrocan.webp" alt="PYROCAN"></a>
                <h4>PYROCAN</h4>
                <p class="small text-muted">Pirómetro con interfaz de comunicación digital CAN.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Infrarojos_c_3046.html" target="_blank">Comprar</a>
            </div>

            <div class="product-card">
                <a href="acc-infrarrojos"><img loading="lazy" src="imagenes/79/accinfra.webp" alt="Accesorios Calex"></a>
                <h4>Accesorios</h4>
                <p class="small text-muted">Soportes, cables, purgas de aire y elementos de montaje para Calex.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Accesorios_c_1274.html" target="_blank">Comprar</a>
            </div>
        </div>
    </div>

    <!-- Catálogos y Documentación (Estilo Integrado) -->
    <div class="bg-light-accent py-5" id="catalogos">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0 !important;">CATÁLOGOS Y MANUALES</h2>
            <div class="row justify-content-center align-items-center mt-4">
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/Catalogo-Calex-ESP.pdf" target="_blank" class="catalog-item mx-auto d-inline-block">
                        <span class="pdf-badge">PDF</span>
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/catalogo-calex-esp.JPG" alt="Catálogo Calex Español">
                        <h4>Catálogo Calex Español</h4>
                    </a>
                </div>
                <div class="col-md-5 text-center">
                    <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=calex" class="ghost-manual-box mx-auto d-inline-block p-4">
                        <img loading="lazy" src="images/documentacion.svg" alt="Base de conocimientos" style="width: 100px; margin-bottom: 15px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary);">Ver Base de Documentación y Manuales</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Videos -->
    <h2 class="section-title mt-5" id="videos">VIDEOS</h2>
    <div class="container mb-5">
        <div class="row g-4">
            <div class="col-12 col-md-4 mb-3">
                <div class="video-container-youtube" data-video-id="HCY1isIyow8">
                    <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/HCY1isIyow8/hqdefault.jpg" alt="Funciones display sensores Calex">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="video-container-youtube" data-video-id="xFd4j95Gvrw">
                    <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/xFd4j95Gvrw/hqdefault.jpg" alt="Sistemas de medida">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="video-container-youtube" data-video-id="rhneU8iHFyg">
                    <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/rhneU8iHFyg/hqdefault.jpg" alt="Qué es un sensor infrarrojo">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Artículos del Blog (Grid Visual Distinta) -->
    <h2 class="section-title" id="articulos">ARTÍCULOS TÉCNICOS</h2>
    <div class="container mb-5">
        <div class="articles-grid">
            <div class="article-card">
                <a href="https://www.logicbus.com.mx/blog/como-medir-la-temperatura-de-objetos-materiales-inaccesibles-o-en-movimiento/" target="_blank">
                    <img loading="lazy" src="images/articulos-portadas/Calex-medir-temperatura.webp" alt="Medir temperatura de objetos">
                </a>
                <div class="article-card-body text-center">
                    <h3>¿Cómo medir la temperatura de objetos, materiales inaccesibles o en movimiento?</h3>
                    <p class="small text-muted flex-grow-1">Cuando hablamos de medición de temperatura siempre surgen inconvenientes que dificultan el registro y control.</p>
                    <a href="https://www.logicbus.com.mx/blog/como-medir-la-temperatura-de-objetos-materiales-inaccesibles-o-en-movimiento/" target="_blank" class="btn-circle mt-3 mx-auto" style="width: fit-content;">Leer más</a>
                </div>
            </div>

            <div class="article-card">
                <a href="https://www.logicbus.com.mx/blog/medicion-de-la-temperatura-de-los-alimentos-calientes-a-traves-de-frascos-de-vidrio/" target="_blank">
                    <img loading="lazy" src="images/articulos-portadas/Calex-temperatura-de-alimentos.webp" alt="Temperatura alimentos">
                </a>
                <div class="article-card-body text-center">
                    <h3>Medición de temperatura de alimentos calientes a través de frascos de vidrio</h3>
                    <p class="small text-muted flex-grow-1">La mejor solución para la medición de la temperatura de los alimentos calientes en la industria.</p>
                    <a href="https://www.logicbus.com.mx/blog/medicion-de-la-temperatura-de-los-alimentos-calientes-a-traves-de-frascos-de-vidrio/" target="_blank" class="btn-circle mt-3 mx-auto" style="width: fit-content;">Leer más</a>
                </div>
            </div>

            <div class="article-card">
                <a href="https://www.logicbus.com.mx/blog/consejos-sobre-el-uso-de-termometros-infrarrojos-portatiles/" target="_blank">
                    <img loading="lazy" src="images/articulos-portadas/Calex-termometros-infrarrojos.webp" alt="Uso termómetros portátiles">
                </a>
                <div class="article-card-body text-center">
                    <h3>Consejos sobre el uso de termómetros infrarrojos portátiles</h3>
                    <p class="small text-muted flex-grow-1">Un termómetro infrarrojo de mano es una herramienta de diagnóstico útil. A continuación se ofrecen algunos consejos.</p>
                    <a href="https://www.logicbus.com.mx/blog/consejos-sobre-el-uso-de-termometros-infrarrojos-portatiles/" target="_blank" class="btn-circle mt-3 mx-auto" style="width: fit-content;">Leer más</a>
                </div>
            </div>

            <div class="article-card">
                <a href="https://www.logicbus.com.mx/blog/sensores-para-medir-metales-a-baja-temperatura/" target="_blank">
                    <img loading="lazy" src="images/articulos-portadas/Calex-Sensores-de-longitud.webp" alt="Medir metales">
                </a>
                <div class="article-card-body text-center">
                    <h3>Sensores de longitud de onda corta para medir metales a baja temperatura</h3>
                    <p class="small text-muted flex-grow-1">Normalmente recomendamos utilizar sensores infrarrojos de onda corta para medir metales, porque es más preciso.</p>
                    <a href="https://www.logicbus.com.mx/blog/sensores-para-medir-metales-a-baja-temperatura/" target="_blank" class="btn-circle mt-3 mx-auto" style="width: fit-content;">Leer más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Aplicaciones -->
    <h2 class="section-title" id="aplicaciones">APLICACIONES</h2>
    <div class="container mb-5">
        <p class="text-center font-weight-bold mb-4" style="color: var(--lb-primary); font-size: 1.2rem;">Sistema de medición de temperatura con sensores infrarrojos mediante Modbus</p>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0 text-center">
                <img loading="lazy" src="images/app/PMB-esquema-1.webp" class="img-fluid rounded shadow-sm border" alt="Diagrama de medición de temperatura 1">
            </div>
            <div class="col-md-6 text-center">
                <img loading="lazy" src="images/app/PMB-esquema-2.webp" class="img-fluid rounded shadow-sm border" alt="Diagrama de medición de temperatura 2">
            </div>
        </div>
    </div>

    <!-- Contacto (Odoo Formulario) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿REQUIERES ASESORÍA PARA TU PROYECTO?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestro equipo de expertos en instrumentación y medición térmica está listo para apoyarte.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    
    <script>
        // Carga diferida e incrustación de Videos de YouTube
        document.addEventListener('DOMContentLoaded', function () {
            var videoContainers = document.querySelectorAll('.video-container-youtube');

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
    
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
</body>

<?php echo $var_footer; ?>
</html>