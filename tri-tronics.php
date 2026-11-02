<?php
require("admin/config.php");
if (file_exists("libreria/libreria.php")) {
    include_once("libreria/libreria.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>TRI-TRONICS México Sensores fotoeléctricos - Logicbus</title>
    <meta name="description"
        content="TRI-TRONICS fabrica sensores fotoeléctricos de alto rendimiento, ademas de guías de luz de fibra óptica para una amplia gama para aplicaciones industriales.">
    <link rel="canonical" href="https://www.logicbus.com.mx/tri-tronics" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="libreria/estilos.css">'; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($flickity_css) ? $flickity_css : ''; ?>
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>

    <style>
        /* =========================================================
           VARIABLES DE LA MARCA
           ========================================================= */
        :root {
            --lb-primary: #22527A;
            --lb-accent: #FF7E00;
        }

        html {
            scroll-behavior: smooth;
        }

        #leftBar {
            display: none;
        }

        /* =========================================================
           1. BOTONES ESTANDARIZADOS
           ========================================================= */
        .btn-circle {
            text-transform: none !important;
            font-weight: 600;
            padding: 8px 25px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-brand-solid {
            background-color: var(--lb-accent);
            border: 2px solid var(--lb-accent);
            color: #ffffff !important;
        }

        .btn-brand-solid:hover {
            background-color: var(--lb-primary);
            border-color: var(--lb-primary);
            color: #ffffff !important;
        }

        .btn-brand-outline {
            background-color: transparent;
            border: 2px solid var(--lb-primary);
            color: var(--lb-primary) !important;
        }

        .btn-brand-outline:hover {
            background-color: var(--lb-primary);
            color: #ffffff !important;
        }

        /* =========================================================
           2. GRID DE PRODUCTOS
           ========================================================= */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto 50px;
            padding: 0 15px;
        }

        .product-card {
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            max-width: 150px;
            height: 180px;
            object-fit: contain;
            margin-bottom: 20px;
        }

        .product-card h4 {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--lb-primary);
            margin-bottom: 15px;
        }

        .product-card p {
            font-size: 0.95rem;
            color: #4a5568;
            line-height: 1.5;
            margin-bottom: 25px;
            flex-grow: 1;
        }

        .section-title {
            text-align: center;
            font-weight: 800;
            color: var(--lb-primary);
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        /* =========================================================
           3. GRID DE ARTÍCULOS (BLOG)
           ========================================================= */
        .apps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto 50px;
            padding: 0 15px;
        }

        .app-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 16 / 9;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #1a202c;
            transition: transform 0.3s ease;
            display: block;
        }

        .app-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .app-text-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px 20px 20px 20px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0) 100%);
            color: #fff;
            text-align: left;
        }

        .app-text-overlay h3 {
            font-size: 1.1rem;
            margin: 0;
            color: #fff;
            font-weight: bold;
            line-height: 1.4;
        }

        @media (hover: hover) {
            .app-card:hover {
                transform: translateY(-5px);
            }

            .app-card:hover img {
                opacity: 1;
            }
        }

        /* =========================================================
           4. CONTENEDOR DE VIDEOS (YOUTUBE)
           ========================================================= */
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
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .video-container-youtube iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .video-container-youtube .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .video-container-youtube .play-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 54%;
            transform: translate(-50%, -50%);
            border-style: solid;
            border-width: 12px 0 12px 20px;
            border-color: transparent transparent transparent white;
        }

        .video-container-youtube:hover img {
            opacity: 1;
        }

        .video-container-youtube:hover .play-button {
            background-color: var(--lb-accent);
            transform: translate(-50%, -50%) scale(1.1);
        }
    </style>
</head>

<body onLoad="if(typeof menu_actual === 'function') menu_actual();">
    <?php echo isset($var_body) ? $var_body : ''; ?>
    <?php if (file_exists("libreria/header.view.php")) require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3" id="subir">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tri-Tronics</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Imagen 100% -->

    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/Banner-tri-tronics-2.webp"
            alt="Tri-tronics sensores fotoeléctricos" title="Tri-tronics sensores fotoeléctricos">
    </div>


    <section class="container text-center mb-5">
        <h1 class="main-title">
            <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">SENSORES
                FOTOELÉCTRICOS</span>
            <span
                style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">DE
                ALTO RENDIMIENTO</span>
        </h1>

        <p class="intro-text text-justify mx-auto mt-4" style="max-width: 1000px; font-size: 1.1rem; color: #4a5568;">
            <strong>TRI-TRONICS®</strong> diseña y fabrica sensores fotoeléctricos de alto rendimiento y alta calidad,
            además de guías de luz de fibra óptica para una amplia gama de exigentes aplicaciones de automatización
            industrial. El rendimiento de los sensores TRI-TRONICS® en aplicaciones del mundo real los diferencia de la
            competencia.
        </p>
        <p class="intro-text text-justify mx-auto" style="max-width: 1000px; font-size: 1.1rem; color: #4a5568;">
            TRI-TRONICS® es líder en los campos de sensores fotoeléctricos, codificadores rotatorios y protección de
            puertas de ascensores. Desde 1954, nos hemos mantenido a la vanguardia para que nuestros productos sigan
            siendo fáciles de usar, instalar y mantener. Entendemos que nuestros clientes tienen un trabajo que hacer y
            no tenemos tiempo para los problemas. Es por eso que cada uno de nuestros productos ha sido probado
            individualmente por su durabilidad y confiabilidad, por lo que resisten la prueba del tiempo.
        </p>
        <p class="intro-text text-justify mx-auto" style="max-width: 1000px; font-size: 1.1rem; color: #4a5568;">
            Todos nuestros productos se ensamblan en los Estados Unidos en nuestras instalaciones de 28,000 pies
            cuadrados en Tampa, FL. Nuestra fuerza de trabajo ágil atiende las necesidades de nuestros clientes, grandes
            o pequeños, para completar las solicitudes con plazos de entrega cortos. TRI-TRONICS ofrece personalización
            de productos y etiquetado privado a pedido.
        </p>
    </section>

    <div class="container text-center my-5">
        <nav class="d-flex flex-wrap justify-content-center" style="gap: 15px;">
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/tri-tronics" target="_blank"
                style="background-color: var(--lb-accent) !important; border-color: var(--lb-accent) !important; color: white !important;">
                <i class="fa fa-shopping-cart mr-2"></i> Ver en Tienda
            </a>
            <a class="btn-circle" href="#destacado">Destacado</a>
            <a class="btn-circle" href="#productos">Productos</a>
            <a class="btn-circle" href="#catalogos">Catálogos y Guías</a>
            <a class="btn-circle" href="#articulos">Artículos</a>
            <a class="btn-circle" href="#videos">Videos</a>
        </nav>
    </div>

    <section id="destacado" class="container text-center mb-5 mt-5">
        <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos" target="_blank">
            <img loading="lazy" src="imagenes/226/sensores-foto-electricos.webp"
                alt="Gama completa de sensores fotoeléctricos industriales Tri-Tronics"
                class="img-fluid rounded shadow-sm" style="max-width: 600px; transition: transform 0.3s;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
        </a>
    </section>

    <section id="productos">
        <div class="text-center mb-5">
            <h2 class="section-title">NUESTROS PRODUCTOS</h2>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <img loading="lazy"
                    src="imagenes/productos/transductores-sensores/fotoelectricos/sensor-fotoelectrico-EZ-EYE.webp"
                    alt="Sensor fotoeléctrico EZ-EYE">
                <h4>EZ-EYE</h4>
                <p>Los sensores fotoeléctricos en miniatura EZ-EYE™ de Tri-tronix ofrecen una solución asequible con un
                    solo botón que es EZ para alinear y EZ para ajustar. Optimizada para una variedad de aplicaciones de
                    control automático de máquinas.</p>
                <a class="btn-circle mt-auto" style="width: 100%;"
                    href="https://tienda.logicbus.com.mx/EZ-EYE_c_3522.html" target="_blank">
                    Ver Serie
                </a>
            </div>

            <div class="product-card">
                <img loading="lazy"
                    src="imagenes/productos/transductores-sensores/fotoelectricos/sensor-fotoelectrico-MINI-EYE.webp"
                    alt="Sensor fotoeléctrico MINI-EYE">
                <h4>MINI-EYE</h4>
                <p>Bajo costo y alto valor. Los robustos sensores MINI-EYE™ son impermeables y están encerrados en
                    carcasas de plástico de alto impacto para su uso en entornos hostiles.</p>
                <a class="btn-circle mt-auto" style="width: 100%;"
                    href="https://tienda.logicbus.com.mx/MINI-EYE_c_3524.html" target="_blank">
                    Ver Serie
                </a>
            </div>

            <div class="product-card">
                <img loading="lazy"
                    src="imagenes/productos/transductores-sensores/fotoelectricos/sensor-fotoelectrico-TINY-EYE.webp"
                    alt="Sensor fotoeléctrico TINY-EYE">
                <h4>TINY-EYE</h4>
                <p>Satisface la necesidad de un sensor en miniatura de bajo costo con flexibilidad para múltiples tareas
                    de detección industrial.</p>
                <a class="btn-circle mt-auto" style="width: 100%;"
                    href="https://tienda.logicbus.com.mx/TINY-EYE_c_5177.html" target="_blank">
                    Ver Serie
                </a>
            </div>

            <div class="product-card">
                <img loading="lazy"
                    src="imagenes/productos/transductores-sensores/fotoelectricos/sensor-fotoelectrico-MITY-EYE.webp"
                    alt="Sensor fotoeléctrico MITY-EYE">
                <h4>MITY-EYE</h4>
                <p>Ofrecen características de sensores grandes y costosos a un precio asequible con lentes
                    intercambiables de grado óptico.</p>
                <a class="btn-circle mt-auto" style="width: 100%;"
                    href="https://tienda.logicbus.com.mx/MITY-EYE_c_3525.html" target="_blank">
                    Ver Serie
                </a>
            </div>

            <div class="product-card">
                <img loading="lazy"
                    src="imagenes/productos/transductores-sensores/fotoelectricos/sensor-fotoelectrico-US-EYE.webp"
                    alt="Sensor fotoeléctrico U.S. EYE">
                <h4>U.S. EYE</h4>
                <p>Respuesta a la demanda de sensores de AC económicos con indicador de contraste único para tareas
                    difíciles.</p>
                <a class="btn-circle mt-auto" style="width: 100%;"
                    href="https://tienda.logicbus.com.mx/Sensores-Miniatura_c_3043.html" target="_blank">
                    Ver Serie
                </a>
            </div>

            <div class="product-card">
                <img loading="lazy"
                    src="imagenes/productos/transductores-sensores/fotoelectricos/sensor-fotoelectrico-OPTI-EYE.webp"
                    alt="Sensor fotoeléctrico OPTI-EYE">
                <h4>OPTI-EYE</h4>
                <p>Sensores robustos y económicos con alta velocidad de respuesta, ideales para montaje en riel DIN.</p>
                <a class="btn-circle mt-auto" style="width: 100%;"
                    href="https://tienda.logicbus.com.mx/Sensores-Miniatura_c_3043.html" target="_blank">
                    Ver Serie
                </a>
            </div>

            <div class="product-card">
                <img loading="lazy"
                    src="imagenes/productos/transductores-sensores/fotoelectricos/sensor-fotoelectrico-LABEL-EYE.webp"
                    alt="Sensor LABEL-EYE">
                <h4>LABEL-EYE</h4>
                <p>Optimizado para detectar etiquetas adhesivas en rollos de papel, detectando el espacio entre
                    etiquetas para el control de dispensado.</p>
                <a class="btn-circle mt-auto" style="width: 100%;"
                    href="https://tienda.logicbus.com.mx/Sensor-Herradura-para-etiquetas_c_3038.html" target="_blank">
                    Ver Serie
                </a>
            </div>

            <div class="product-card">
                <img loading="lazy"
                    src="imagenes/productos/transductores-sensores/fotoelectricos/sensor-fotoelectrico-RETROSMART.webp"
                    alt="Sensor RETROSMART">
                <h4>RETROSMART</h4>
                <p>Diseñado específicamente para la detección confiable de objetos transparentes como PET, vidrio y
                    películas plásticas.</p>
                <a class="btn-circle mt-auto" style="width: 100%;"
                    href="https://tienda.logicbus.com.mx/Sensor-para-transparencias_c_3039.html" target="_blank">
                    Ver Serie
                </a>
            </div>

            <div class="product-card">
                <img loading="lazy" src="assets/images/226/RH-P240AJ-8-30-MW30-UB1-20.webp" alt="Encoders rotatorios">
                <h4>Encoders</h4>
                <p>Codificadores rotatorios y ruedas de medición de precisión diseñados para aplicaciones de
                    transportadores y medición lineal.</p>
                <a class="btn-circle mt-auto" style="width: 100%;"
                    href="https://tienda.logicbus.com.mx/Encoders_c_3017.html" target="_blank">
                    Ver Serie
                </a>
            </div>
        </div>
    </section>

    <div class="container-fluid mb-5" id="catalogos" style="background-color: #f8fafc; padding: 60px 0;">
        <div class="text-center mb-5">
            <h2 class="section-title mx-auto text-uppercase" style="margin-bottom: 10px;">Catálogos y Documentación</h2>
        </div>

        <div class="d-flex justify-content-center flex-wrap"
            style="gap: 30px; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
            <div class="product-card" style="width: 100%; max-width: 350px; padding: 35px;">
                <img loading="lazy" src="pdf/catalogos/GUIA.webp" alt="Catálogo sensores Tri-tronics"
                    style="height: 200px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border: none; padding: 0;">
                <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Catálogo Sensores Fotoeléctricos</h4>
                <a class="btn-circle  mt-3" href="pdf/catalogos/Catalogo-sensores-Tri-tronics.pdf"
                    target="_blank">Descargar PDF</a>
            </div>

            <div class="product-card" style="width: 100%; max-width: 350px; padding: 35px;">
                <img loading="lazy" src="pdf/catalogos/Encoders.webp" alt="Catálogo encoders Tri-tronics"
                    style="height: 200px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border: none; padding: 0;">
                <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Catálogo Encoders</h4>
                <a class="btn-circle  mt-3" href="pdf/catalogos/Catalogo-encoders-Tri-tronics.pdf"
                    target="_blank">Descargar PDF</a>
            </div>

            <div class="product-card" style="width: 100%; max-width: 350px; padding: 35px;">
                <img loading="lazy" src="images/documentacion.svg" alt="Documentación técnica"
                    style="height: 200px; border: none; padding: 0;">
                <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Toda la Documentación</h4>
                <a class="btn-circle  mt-3"
                    href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=tri-tronics+co.+inc"
                    target="_blank">Ver Archivos</a>
            </div>
        </div>
    </div>

    <section id="articulos" class="py-5">
        <div class="text-center mb-5">
            <h2 class="section-title mx-auto text-uppercase" style="margin-bottom: 10px;">Artículos y Novedades</h2>
        </div>

        <div class="apps-grid">
            <a href="https://www.logicbus.com.mx/blog/aplicaciones-de-sensores-fotoelectricos/" target="_blank"
                class="app-card">
                <img loading="lazy" src="images/articulos-portadas/Tri-tronics-sensores-fotoelectricos.webp"
                    alt="Aplicaciones de sensores fotoeléctricos">
                <div class="app-text-overlay">
                    <h3>Automatización Industrial: Aumentando la productividad de las empresas</h3>
                </div>
            </a>

            <a href="https://www.logicbus.com.mx/blog/por-que-elegiria-el-sensor-de-etiquetas-transparentes-en-lugar-del-sensor-de-etiquetas-estandar/"
                target="_blank" class="app-card">
                <img loading="lazy" src="images/articulos-portadas/Tri-tronics-sensor-etiquetas-transparentes.webp"
                    alt="Sensor de etiquetas transparentes">
                <div class="app-text-overlay">
                    <h3>¿Por qué elegir el sensor de etiquetas transparentes en lugar del estándar?</h3>
                </div>
            </a>

            <a href="https://www.logicbus.com.mx/blog/la-evolucion-del-etiquetado-industrial/" target="_blank"
                class="app-card">
                <img loading="lazy" src="images/articulos-portadas/Tri-tronics-etiquetado-industrial.webp"
                    alt="La evolución del etiquetado industrial">
                <div class="app-text-overlay">
                    <h3>Optimización del etiquetado industrial</h3>
                </div>
            </a>
        </div>
    </section>

    <div class="container-fluid mb-5" id="videos">
        <div class="text-center mb-5">
            <h2 class="section-title mx-auto text-uppercase" style="margin-bottom: 10px;">Videos Destacados</h2>
        </div>

        <div class="container mb-5">
            <div class="row justify-content-center g-4">
                <div class="col-12 col-md-6 col-lg-4 mb-3 px-3">
                    <div class="video-container-youtube" data-video-id="5LPaWvsspig">
                        <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/5LPaWvsspig/hqdefault.jpg"
                            alt="Tri-Tronics Video 1">
                        <div class="play-button"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3 px-3">
                    <div class="video-container-youtube" data-video-id="UVZew7sYRIg">
                        <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/UVZew7sYRIg/hqdefault.jpg"
                            alt="Tri-Tronics Video 2">
                        <div class="play-button"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3 px-3">
                    <div class="video-container-youtube" data-video-id="K-XASr4QPVE">
                        <img loading="lazy" class="img-fluid" src="https://img.youtube.com/vi/K-XASr4QPVE/hqdefault.jpg"
                            alt="Tri-Tronics Video 3">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-blue text-center py-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: #ffffff; margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN?</h2>
            <span class="paragraph"
                style="color: #ffffff; font-size: 1.1rem; display: block; max-width: 800px; margin: 0 auto;">
                Estamos aquí para ayudarte a encontrar las mejores soluciones en sensores y control para tu proyecto.
            </span>
        </div>

        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe title="Formulario de contacto para atención a clientes" loading="lazy"
                    src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </section>

    <?php if (file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>

    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>
    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>
    <?php echo isset($popper_js) ? $popper_js : ''; ?>
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>
    <?php echo isset($flickity_js) ? $flickity_js : ''; ?>

    <script>
        // Script para los videos de YouTube
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

    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>

</html>