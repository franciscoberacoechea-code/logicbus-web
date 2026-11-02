<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NCD | Hardware Plug and Play para IoT e Industrial - Logicbus</title>

    <meta name="description" content="National Control Devices es un fabricante de productos electrónicos a la vanguardia de la industria de IoT enfocado en señales analogas con electrónica digital.">
    <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Automatizacion, Seguridad, Consultoría, Consultoria, Integración, Integracion, Proyecto, Radio Frecuencia, Cubos, Análisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, Argentina, Chile, Brasil, National Control Devices, National Control Devices México, National Control Devices Guadalajara, NCD México, NCD Guadalajara">

    <link rel="preload" as="image" href="https://www.logicbus.com.mx/images/banner/www/PorMarca/BANNER-NCD-MZ23.webp" type="image/webp">

    <!--- Estilos Necesarios-->
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>

    <!-- CSS ESPECÍFICO DE ESTA PÁGINA -->
    <style>
        /* Ocultar barra lateral */
        #leftBar {
            display: none;
        }

        /* Estilos para la tabla comparativa oculta/visible (Requeridos por la plantilla base) */
        .col1-youibot, .col2-youibot, .col3-youibot, .col4-youibot { display: none; } 

        /* Contenedor de Videos de YouTube (Carga diferida) */
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
    <div class="container mt-4 mb-3" id="subir">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">National Control Devices</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Imagen 100% -->
    <div style="width: 100%; margin-bottom: 3rem;">
        <img loading="lazy" src="images/banner/www/PorMarca/BANNER-NCD-MZ23.webp" alt="National Control Devices NCD" title="National Control Devices NCD" style="width: 100%; height: auto; display: block;">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Controla cualquier cosa en</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">CUALQUIER LUGAR</span>
    </h1>
    
    <p class="intro-text">
        <strong>National Control Devices (NCD)</strong> es un fabricante de productos electrónicos a la vanguardia de la industria de IoT, con una sólida precisión, alcance, duración de la batería y funciones de seguridad, son una opción accesible que supera los requisitos de las aplicaciones industriales y del mercado de consumo, además de tener la gama de controladores de relés más adaptable del mundo, con capacidad de comunicación de largo alcance y una amplia variedad de opciones como USB, Ethernet, WiFi, RS-232 y muchas más.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/National-Control-Devices-NCD_bymfg_184-0-1.html" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#categorias">Categorías Sensores</a>
        <a class="btn-circle" href="#intiot">Integración IoT</a>
        <a class="btn-circle" href="#sencon">Controladores</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#videos">Videos</a>
    </nav>

    <!-- Sección Categorías (Productos) -->
    <h2 class="section-title" id="categorias">Categorías Sensores</h2>
    <div class="products-grid">
        <div class="product-card">
            <img loading="lazy" src="images/categorias/2023/ncd/ncd-quimico.webp" alt="Químico y Gas">
            <h4>Químico y Gas</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Quimico-y-Gas_c_6407.html" target="_blank">Ver categoría</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="images/categorias/2023/ncd/ncd-ambiental.webp" alt="Ambiental">
            <h4>Ambiental</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Ambiental_c_6409.html" target="_blank">Ver categoría</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="images/categorias/2023/ncd/ncd-corriente.webp" alt="Corriente">
            <h4>Corriente</h4>
            <a class="btn-circle" href="#seriep1201">Ver categoría</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="images/categorias/2023/ncd/ncd-movimiento.webp" alt="Movimiento">
            <h4>Movimiento</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Movimiento_c_6408.html" target="_blank">Ver categoría</a>
        </div>
    </div>

    <!-- Integración de IoT -->
    <h2 class="section-title" id="intiot">Integración de IoT</h2>
    <div class="container text-center mb-5">
        <p class="intro-text mb-4">
            Conéctate a tecnologías de la nube populares como AWS, Azure, Losant, MQTT, etc. Los datos llegan a su plataforma favorita en la nube mediante encriptación de máxima seguridad en valores reales sin necesidad de analizarlos.
        </p>

        <!-- Logos de Plataformas -->
        <div class="d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 50px;">
            <div><img src="images/nuestras_marcas/ncd/Losant.webp" alt="Losant" style="max-height: 70px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">Losant</strong></div>
            <div><img src="images/nuestras_marcas/ncd/node-red.webp" alt="Node-Red" style="max-height: 70px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">Node-Red</strong></div>
            <div><img src="images/nuestras_marcas/ncd/Amazon.webp" alt="Amazon" style="max-height: 70px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">Amazon</strong></div>
            <div><img src="images/nuestras_marcas/ncd/Ubidots.webp" alt="Ubidots" style="max-height: 70px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">Ubidots</strong></div>
            <div><img src="images/nuestras_marcas/ncd/Microsoft-azure.webp" alt="Microsoft Azure" style="max-height: 70px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">Microsoft Azure</strong></div>
        </div>

        <p class="intro-text mb-4">
            Convierta los datos entrantes en bytes de datos RAW utilizando protocolos de comunicación estándar como USB, RS-232, RS-485, Bluetooth, Wi-Fi y Ethernet. Utilice Alpha Station para comenzar a utilizar módems (Incluye código fuente en Visual Studio).
        </p>

        <!-- Logos de Comunicación -->
        <div class="d-flex flex-wrap justify-content-center align-items-end mb-4" style="gap: 50px;">
            <div><img src="images/nuestras_marcas/ncd/comunicacion/WIFI.webp" alt="WiFi Devices" style="max-height: 80px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">WiFi Devices</strong></div>
            <div><img src="images/nuestras_marcas/ncd/comunicacion/BLUETOOTH.webp" alt="Bluetooth Devices" style="max-height: 80px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">Bluetooth Devices</strong></div>
            <div><img src="images/nuestras_marcas/ncd/comunicacion/ETHERNET.webp" alt="Ethernet Devices" style="max-height: 80px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">Ethernet Devices</strong></div>
            <div><img src="images/nuestras_marcas/ncd/comunicacion/USB.webp" alt="USB Devices" style="max-height: 80px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">USB Devices</strong></div>
        </div>
        <div class="d-flex flex-wrap justify-content-center align-items-end mb-5" style="gap: 50px;">
            <div><img src="https://www.logicbus.com.mx/images/nuestras_marcas/ncd/comunicacion/KEYFOB.webp" alt="Key Fob Devices" style="max-height: 80px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">Key Fob Devices</strong></div>
            <div><img src="https://www.logicbus.com.mx/images/nuestras_marcas/ncd/comunicacion/SERIAL.webp" alt="RS-232 Devices" style="max-height: 80px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">RS-485/232 Devices</strong></div>
            <div><img src="https://www.logicbus.com.mx/images/nuestras_marcas/ncd/comunicacion/CELLULAR.webp" alt="Cellular Devices" style="max-height: 80px;"><br><strong class="d-block mt-2" style="color: var(--lb-primary);">Cellular Devices</strong></div>
        </div>

        <!-- Video Integración Centrado -->
        <div class="d-flex justify-content-center mx-auto" style="max-width: 800px; width: 100%;">
            <video class="img-fluid rounded shadow-sm" src="images/app/ncd-iot-conection.webm" controls autoplay muted loop loading="lazy" style="border: 1px solid #ccc; width: 100%;"></video>
        </div>
    </div>

    <!-- Controladores -->
    <h2 class="section-title" id="sencon">Controladores</h2>
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <h5 style="color: var(--lb-primary); font-weight: bold;">Elija sensores o controladores preferidos</h5>
                <p class="text-muted mb-3">¡NUEVO! Soluciones empresariales:</p>
                <img src="images/nuestras_marcas/ncd/ncd_producto.webp" alt="National Control Devices NCD" class="img-fluid" style="max-width: 80%;">
            </div>
            <div class="col-md-6">
                <h5 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 15px;">Sensores inalámbricos de largo alcance de IoT</h5>
                <p class="text-muted text-justify mb-3">
                    Con su largo alcance, precio, precisión, duración de la batería y características de seguridad, son la opción asequible que excede los requisitos de la mayoría de las aplicaciones industriales y del mercado de consumo.
                </p>
                <ul class="text-muted mb-4" style="line-height: 1.8;">
                    <li><strong style="color: var(--lb-primary);">¡Hasta 28 millas de alcance!</strong></li>
                    <li>10 años de duración de la batería</li>
                    <li>Control por cualquier sistema</li>
                    <li>Hasta 500.000 transmisiones</li>
                    <li>Lista de dispositivos en constante crecimiento</li>
                </ul>
                
                <p class="text-muted mb-2">Nuestros productos están diseñados para trabajar con:</p>
                <img src="images/nuestras_marcas/ncd/node-red.webp" alt="Node-RED" style="max-width: 120px; margin-bottom: 15px;">
                <p style="font-weight: bold; color: var(--lb-primary); font-size: 1.1rem; line-height: 1.5;">
                    CONSTRUYE FLUJOS - CONSTRUYE UN SALPICADERO - ENVIAR A LA NUBE<br>
                    MÁS INFORMACIÓN EN: ncd.io/RED<br>
                    UN ESTÁNDAR DE LA INDUSTRIA PARA 25 AÑOS.
                </p>
            </div>
        </div>
    </div>

    <!-- Sección Artículos -->
    <div class="container my-5">
        <h2 class="section-title" id="articulos">Artículos</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/deteccion-de-agua-en-instalaciones-industriales-via-iot/" target="_blank">
                        <img class="card-img-top" src="images/articulos-portadas/NCD-instalaciones-industriales-IoT.webp" alt="Detección de agua" style="border-bottom: 3px solid var(--lb-accent, #FF7E00);">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Detección de agua en instalaciones industriales vía IoT</h5>
                        <p class="card-text text-muted flex-grow-1">Las fugas de agua, grandes o pequeñas, pueden tener y tendrán un impacto duradero en su negocio o instalación si no se detectan rápidamente.</p>
                        <a href="https://www.logicbus.com.mx/blog/deteccion-de-agua-en-instalaciones-industriales-via-iot/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/sensor-iot-de-humedad-de-temperatura-inalambrico-con-arduino/" target="_blank">
                        <img class="card-img-top" src="images/articulos-portadas/NCD-Sensor-IoT.webp" alt="Sensor IoT" style="border-bottom: 3px solid var(--lb-accent, #FF7E00);">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Sensor IoT de humedad de temperatura con Arduino</h5>
                        <p class="card-text text-muted flex-grow-1">Los sensores de temperatura y humedad son uno de los sensores más comunes y ampliamente utilizados con Arduino y otras plataformas de IoT.</p>
                        <a href="https://www.logicbus.com.mx/blog/sensor-iot-de-humedad-de-temperatura-inalambrico-con-arduino/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/iot-y-conectividad-industrial/" target="_blank">
                        <img class="card-img-top" src="images/articulos-portadas/NCD-IoT-Conectividad.webp" alt="IoT y Conectividad" style="border-bottom: 3px solid var(--lb-accent, #FF7E00);">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">IoT y Conectividad industrial</h5>
                        <p class="card-text text-muted flex-grow-1">Es bastante notorio que la versatilidad así como la conectividad industrial del mundo IoT está permitiendo que todo tipo de sensores transmitan su información.</p>
                        <a href="https://www.logicbus.com.mx/blog/iot-y-conectividad-industrial/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección Videos (Estructura solicitada) -->
    <h2 class="section-title" id="videos">VIDEOS</h2>
    <div class="container mb-5">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="video-container-youtube" data-video-id="eH8mvQZirvA">
                    <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/eH8mvQZirvA/hqdefault.jpg" alt="Video NCD 1">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="video-container-youtube" data-video-id="uzlbWKHvwGQ">
                    <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/uzlbWKHvwGQ/hqdefault.jpg" alt="Video NCD 2">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="video-container-youtube" data-video-id="BmP8XZoHWQY">
                    <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/BmP8XZoHWQY/hqdefault.jpg" alt="Video NCD 3">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="video-container-youtube" data-video-id="OY5XGkwdPGU">
                    <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/OY5XGkwdPGU/hqdefault.jpg" alt="Video NCD 4">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacto (Odoo) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Si necesitas ayuda personalizada, nuestro equipo de soporte está altamente capacitado para ayudarte a integrar soluciones de NCD de forma eficaz.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <div class="text-center mt-5 mb-5">
        <a class="btn-circle" href="#subir">Ir al principio</a>
    </div>

    <!-- PIE DE PAGINA -->
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
        gtag('config', 'AW-1007518778');
    </script>

    <script>
        // JAVASCRIPT PARA CARGAR EL VIDEO DE YOUTUBE AL HACER CLIC
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