 <?php

require("admin/config.php");

include("libreria/libreria.php");

?>



<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>3onedata - Soluciones de comunicación industrial - Logicbus</title>



    <meta name="description"

        content="3onedata se ha dedicado al IoT durante 23 años, con una rica experiencia profesional en el suministro de soluciones y servicios de comunicación industrial">

    <meta name="keywords"

        content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Teracom, sistema SCADA, protocolo M2M">



    <link rel="preload" as="image" href="https://www.logicbus.com.mx/images/banner/www/PorMarca/3onedata-banner.png"

        type="image/png">



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



        /* Contenedor de Videos de YouTube */

        .video-container {

            position: relative;

            cursor: pointer;

            border-radius: 15px;

            overflow: hidden;

            padding-top: 56.25%;

            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

            background-color: #000;



            /* Control de tamaño flexible */

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

                <li class="breadcrumb-item active" aria-current="page">3onedata</li>

            </ol>

        </nav>

    </div>



    <!-- Banner Imagen 100% -->

    <div class="banner-container mb-5">

        <img loading="lazy" src="https://www.logicbus.com.mx/images/banner/www/PorMarca/3onedata-banner.png"

            alt="3onedata" title="3onedata">

    </div>



    <h1 class="main-title">

        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Soluciones de comunicación

            industrial</span>

        <span

            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">3ONEDATA</span>

    </h1>

    

    <p class="intro-text">

        Con sede en Shenzhen y fundada en 2001, <strong>3onedata</strong> se ha dedicado a IIoT durante 23 años, con una

        rica experiencia profesional en proporcionar soluciones y servicios de comunicación industrial para socios y

        clientes en todo el mundo. En 2020, <strong>3onedata</strong> se convirtió en la primera empresa de IIoT en

        cotizar en el Mercado STAR de la Bolsa de Valores de Shanghái (SSE), un hito para su crecimiento y desarrollo

        sostenibles.

    </p>

    <p class="intro-text">

        Innovación, Valor y Honor son los valores fundamentales de <strong>3onedata</strong>, los cuales guían su

        estrateg y operación comercial. <strong>3onedata</strong> otorga gran importancia al desarrollo integral de la

        empresa, realizando inversiones continuas anuales para garantizar la innovación en la producción, investigación

        y desarrollo, así como en el marketing, con el fin de ofrecer productos más competitivos en el mercado y

        respaldar el éxito de sus clientes.

    </p>

    <p class="intro-text">

        El Sistema de Servicio Total (TSS) es su modelo operativo único, proporcionando al cliente una sensación y

        experiencia de servicio integral, lo que conducirá a un desarrollo efectivo a largo plazo de

        <strong>3onedata</strong>. A través de sus persistentes valores fundamentales y su competencia para brindar un

        rendimiento excepcional, estamos seguros al enfrentar el futuro incierto. <strong>3onedata</strong> espera con

        interés colaborar con usted para obtener beneficios mutuos y avanzar juntos en el camino.

    </p>



    <!-- Navegación interna -->

    <nav class="btn-navigation">

        <a class="btn-circle" href="https://tienda.logicbus.com.mx/3onedata" target="_blank">Ver en Tienda</a>

        <a class="btn-circle" href="#categorias">Categorías</a>

        <a class="btn-circle" href="#catalogos">Catálogos</a>

        <a class="btn-circle" href="#GuiasyManuales">Guías y Manuales</a>

        <a class="btn-circle" href="#articulos">Artículos</a>

        <a class="btn-circle" href="#videos">Videos</a>

    </nav>



    <!-- Sección Categorías (Productos) -->

    <h2 class="section-title" id="categorias">Categorías</h2>

    <div class="products-grid">

        <div class="product-card">

            <img loading="lazy"

                src="https://tienda.logicbus.com.mx/assets/images/16/Transparent/CP202-2CI-P(12-48VDC).webp"

                alt="Device Networking">

            <h4>Device Networking</h4>

            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Device-Networking_c_7806.html"

                target="_blank">Ver categoría</a>

        </div>

        <div class="product-card">

            <img loading="lazy"

                src="https://tienda.logicbus.com.mx/assets/images/16/Transparent/IES6210-8T2GC-2P48.webp"

                alt="Switches Industriales">

            <h4>Switches Industriales</h4>

            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Switches-Industriales_c_7833.html"

                target="_blank">Ver categoría</a>

        </div>

        <div class="product-card">

            <img loading="lazy"

                src="https://tienda.logicbus.com.mx/assets/images/16/Transparent/IRT5300-AW-5T2D-2P12_48-2.webp"

                alt="Industrial Wireless">

            <h4>Industrial Wireless</h4>

            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Industrial-Wireless_c_7807.html"

                target="_blank">Ver categoría</a>

        </div>

        <div class="product-card">

            <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/16/Transparent/IMC100-1GT1GF.webp"

                alt="Media Convertor">

            <h4>Media Convertor</h4>

            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Media-Convertor_c_7808.html" target="_blank">Ver

                categoría</a>

        </div>

        <div class="product-card">

            <img loading="lazy"

                src="https://tienda.logicbus.com.mx/assets/images/16/Transparent/IES6000-4GP2HS-2P48-120W.webp"

                alt="PoE Switch">

            <h4>PoE Switch</h4>

            <a class="btn-circle" href="https://tienda.logicbus.com.mx/PoE-Switch_c_7809.html" target="_blank">Ver

                categoría</a>

        </div>

        <div class="product-card">

            <img loading="lazy"

                src="https://tienda.logicbus.com.mx/assets/images/16/Transparent/IES6210-8T2GC-2P48.webp"

                alt="Rail-Special Switch">

            <h4>Rail-Special Switch</h4>

            <a class="btn-circle" href="#" target="_blank">Ver categoría</a>

        </div>

        <div class="product-card">

            <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/16/Transparent/IEM615-1C-1D.webp"

                alt="Switch Module">

            <h4>Switch Module</h4>

            <a class="btn-circle" href="#" target="_blank">Ver categoría</a>

        </div>

    </div>



    <!-- Sección Catálogos -->

    <h2 class="section-title" id="catalogos">Catálogos</h2>

    <div class="catalog-wrap">

        <a href="pdf/catalogos/Guia-seleccion-productos-2024.pdf" target="_blank" class="catalog-item">

            <span class="pdf-badge">PDF Digital</span>

            <img loading="lazy" src="pdf/catalogos/productos-3onedata.jpg" alt="Productos 3onedata">

            <h4>Productos 3onedata</h4>

        </a>

        <a href="pdf/catalogos/Videovigilancia-del-campus.pdf" target="_blank" class="catalog-item">

            <span class="pdf-badge">PDF Digital</span>

            <img loading="lazy" src="pdf/catalogos/3onedata-vigilancia.jpg" alt="Videovigilancia del campus">

            <h4>Videovigilancia del campus</h4>

        </a>

    </div>



    <!-- Sección Guías y Manuales -->

    <h2 class="section-title" id="GuiasyManuales">Guías y Manuales</h2>

    <div class="text-center mb-5 pb-4">

        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=3onedata&tagArray%5B%5D=3onedata+technology"

            class="ghost-manual-box">

            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">

            <span>Ver Documentación</span>

        </a>

    </div>



<div class="container my-5">
    <h2 class="section-title" id="articulos">Artículos</h2>

    
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <a href="https://www.logicbus.com.mx/blog/descubre-la-solucion-sencilla-de-3onedata-para-convertir-modbus-rtu-ascii-a-modbus-tcp/" target="_blank">
                    <img class="card-img-top" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/01/Descubre-la-Solucion-Sencilla-de-3onedata-para-Convertir-Modbus-RTUASCII-a-Modbus-TCP.png" alt="Modbus RTU a TCP" style="border-bottom: 3px solid var(--lb-accent, #FF7E00);">
                </a>
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Descubre la solución sencilla de 3onedata para convertir Modbus RTU/ASCII a Modbus TCP</h5>
                    <p class="card-text text-muted flex-grow-1">A medida que más aplicaciones industriales migran a Ethernet para satisfacer necesidades de redes más complejas, muchos sistemas ahora utilizan Modbus TCP...</p>
                    <a href="https://www.logicbus.com.mx/blog/descubre-la-solucion-sencilla-de-3onedata-para-convertir-modbus-rtu-ascii-a-modbus-tcp/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-5 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <a href="https://www.logicbus.com.mx/blog/interruptor-ethernet-compacto-de-5-puertos-de-3onedata-una-solucion-sencilla-y-fiable-para-entornos-industriales/" target="_blank">
                    <img class="card-img-top" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/01/Interruptor-Ethernet-Compacto-de-5-Puertos-de-3onedata-una-solucion-sencilla-y-fiable-para-entornos-industriales.png" alt="Interruptor Ethernet Compacto" style="border-bottom: 3px solid var(--lb-accent, #FF7E00);">
                </a>
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Interruptor ethernet compacto de 5 puertos de 3onedata: una solución sencilla y fiable</h5>
                    <p class="card-text text-muted flex-grow-1">El IES2105 de 3onedata es una serie de switches Ethernet industriales sin gestión de 5 puertos con un diseño extremadamente compacto, ideal para espacios reducidos en planta.</p>
                    <a href="https://www.logicbus.com.mx/blog/interruptor-ethernet-compacto-de-5-puertos-de-3onedata-una-solucion-sencilla-y-fiable-para-entornos-industriales/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Sección Videos -->

    <h2 class="section-title" id="videos">Videos</h2>

    <div class="products-grid" style="max-width: 1000px;">

        <div class="video-container" data-video-id="T2VT4rJhHEE">

            <img loading="lazy" src="https://img.youtube.com/vi/T2VT4rJhHEE/hqdefault.jpg" alt="Video 3onedata">

            <div class="play-button"></div>

        </div>

        <div class="video-container" data-video-id="DqMmMo_6rzQ">

            <img loading="lazy" src="https://img.youtube.com/vi/DqMmMo_6rzQ/hqdefault.jpg" alt="Video demostrativo">

            <div class="play-button"></div>

        </div>

    </div>



    <!-- Contacto (Diseño Odoo) -->

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">

        <div class="container mb-5">

            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE 3ONEDATA</h2>

            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Estamos aquí para ayudarte a

                encontrar las mejores soluciones de comunicación industrial para tu proyecto.</span>

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