<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CONTROLLINO PLC industrial compatible con Arduino - Logicbus</title>

    <script src="https://cdn.pagesense.io/js/logicbus/60e9e81428e24e84a52b5a363a9448b7.js"></script>
    <meta name="description"
        content="CONTROLLINO es un PLC de nivel industrial con compatibilidad 100% Arduino. Se puede utilizar para casi cualquier propósito de control y automatización.">
    <meta name="keywords"
        content="Logicbus, controllino México, controllino mexico, controllino Guadalajara, PLC, nivel industrial, compatibilidad Arduino, control, automatización, controlador lógico programable, software libre, entradas analogas, 100% compatible con Arduino">
    <link rel="canonical" href="https://www.logicbus.com.mx/controllino">

    <!--- Estilos Necesarios-->
    <?php echo $css_bundle; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php echo $estilos; ?> <!-- CSS General de la marca -->

    <!-- CSS ESPECÍFICO DE LA PLANTILLA MAESTRA -->
    <style>
        /* Ocultar barra lateral antigua para usar full-width */
        #leftBar {
            display: none;
        }

        /* BANNER FULL WIDTH */
        .banner-full {
            width: 100%;
            margin-bottom: 3rem;
            overflow: hidden;
            background: #000;
        }

        .banner-full video {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            display: block;
        }

        /* ESTILIZACIÓN DE LINKS (Colores Logicbus) */
        a {
            color: var(--lb-accent);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--lb-primary);
            text-decoration: none;
        }

        .article-card h3 a {
            color: var(--lb-primary) !important;
        }

        .article-card h3 a:hover {
            color: var(--lb-accent) !important;
        }

        /* TAMAÑOS DE IMÁGENES CONTROLADOS */
        .hero-img {
            max-width: 600px;
            width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
        }

        .feature-icon {
            max-width: 100px;
            height: auto;
            margin-bottom: 15px;
        }

        .spec-img {
            max-width: 250px;
            height: auto;
            margin-top: 15px;
        }

        .cart-icon {
            width: 35px;
            height: auto;
            transition: transform 0.2s;
        }

        .cart-icon:hover {
            transform: scale(1.1);
        }

        /* Grid de Artículos */
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 2rem;
        }

        .article-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border: 1px solid #eee;
            transition: transform 0.3s ease;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
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
            text-align: center;
        }

        .article-card h3 {
            font-size: 1.1rem;
            color: var(--lb-primary);
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Tablas personalizadas */
        .table-custom thead {
            background-color: var(--lb-primary);
            color: white;
        }

        .table-custom td {
            vertical-align: middle !important;
        }

        /* Video Containers YouTube */
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

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Controllino</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Video 100% Ancho -->
    <div class="banner-full">
        <video autoplay muted loop playsinline poster="images/banner/www/PorMarca/BANNER-CONTROLLINO.webp">
            <source src="https://www.logicbus.com.mx/assets/videos/controllino-banner.mp4" type="video/mp4">
        </video>
    </div>

    <!-- H1 y Subtítulo -->
    <div class="text-center">
        <h1 class="main-title mb-1" style="color: var(--lb-primary);">CONTROLLINO</h1>
        <h2 class="h4" style="color: var(--lb-accent); font-weight: bold;">PLC Industrial Compatible con Arduino</h2>
    </div>

    <!-- Introducción con imagen controlada -->
    <div class="container mb-5 mt-4">
        <img loading="lazy" src="imagenes/265/CONTROLLINO_Startpage-4.webp" alt="CONTROLLINO PLC programable"
            class="hero-img mb-4">
        <p class="intro-text text-justify mx-auto" style="max-width: 900px;">
            <b>CONTROLLINO</b> es un controlador lógico programable (PLC) basado en los microcontroladores ATmega328 y
            Atmega2560 que combina la flexibilidad y la naturaleza de código abierto del ecosistema Arduino con la
            seguridad y confiabilidad de los PLC de grado industrial.<br><br>
            Es el equipo perfecto para su próximo proyecto de domótica, automatización industrial, aplicaciones
            escolares y control de Internet de las Cosas (IoT).
        </p>
    </div>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-controllino"
            target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#ventajas">Ventajas</a>
        <a class="btn-circle" href="#caracteristicas">Características</a>
        <a class="btn-circle" href="#equipos">Comparativa</a>
        <a class="btn-circle" href="#documentacion">Documentación</a>
        <a class="btn-circle" href="https://www.logicbus.com.mx/preguntas-frecuentes-controllino"
            target="_blank">FAQs</a>
    </nav>

    <!-- VENTAJAS (Grid) -->
    <div class="bg-light py-5 mt-5" id="ventajas">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0 !important;">¿POR QUÉ ELEGIR CONTROLLINO?</h2>
            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-3 text-center mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100 border">
                        <img loading="lazy" src="imagenes/265/Prozessor.webp" alt="Compatible con Arduino"
                            class="feature-icon">
                        <h4 style="color: var(--lb-primary); font-weight: bold;">100% Arduino</h4>
                        <p class="small text-muted text-justify">Con la flexibilidad del ecosistema Arduino, puede
                            disminuir el tiempo y costo de desarrollo y concentrarse en lo más importante, sin
                            sacrificar rendimiento.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100 border">
                        <img loading="lazy" src="imagenes/265/Schaltkreis.webp" alt="I/O ilimitada"
                            class="feature-icon">
                        <h4 style="color: var(--lb-primary); font-weight: bold;">I/O Ilimitada</h4>
                        <p class="small text-muted text-justify">Ofrece hasta 61 canales de entrada/salida y relés (5V a
                            230V hasta 16A), permitiendo aplicaciones casi ilimitadas de control y automatización.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100 border">
                        <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/265/Industrie.png" alt="Preparado para Industria"
                            class="feature-icon" style="max-width: 90px;">
                        <h4 style="color: var(--lb-primary); font-weight: bold;">Grado Industrial</h4>
                        <p class="small text-muted text-justify">Desarrollado con los más altos estándares de seguridad
                            y totalmente certificado CE. Perfecto para escenarios de prototipos y productos finales.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100 border">
                        <i class="fa fa-code fa-4x mb-3" style="color: var(--lb-accent);"></i>
                        <h4 style="color: var(--lb-primary); font-weight: bold;">Software Libre</h4>
                        <p class="small text-muted text-justify">Libertad total para elegir la herramienta que mejor le
                            funcione: Arduino IDE, Visuino, Atmel Studio, Logicad, Labview, Matlab, GNU Octave, SciLab.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CARACTERÍSTICAS ESPECIALES -->
    <h2 class="section-title mt-5" id="caracteristicas">CARACTERÍSTICAS ESPECIALES</h2>
    <div class="container mb-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2 text-center">
                <img loading="lazy" src="imagenes/265/VOLTAJE.webp" alt="Selección de voltaje"
                    class="spec-img shadow-sm rounded border p-2">
            </div>
            <div class="col-md-6 order-md-1">
                <h3 style="color: var(--lb-primary); font-weight: bold;">Selección Automática de Voltaje</h3>
                <p class="text-justify text-muted">Con la función interna de selección automática de voltaje de entrada,
                    cambia la relación de los divisores de voltaje en la entrada del procesador. Es posible utilizar una
                    entrada de 12VDC o 24VDC de forma analógica y digital sin intervención del usuario.</p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-md-6 text-center">
                <img loading="lazy" src="imagenes/265/RTC.webp" alt="Reloj RTC interno"
                    class="spec-img shadow-sm rounded border p-2">
            </div>
            <div class="col-md-6">
                <h3 style="color: var(--lb-primary); font-weight: bold;">Reloj en Tiempo Real (RTC) On/Off</h3>
                <p class="text-justify text-muted">Todos los PLC CONTROLLINO tienen un RTC interno que usa SPI, el cual
                    se puede apagar para liberar el SPI. En las versiones MAXI y MEGA puede elegir entre el RTC interno
                    y Ethernet usando SPI, otorgando gran versatilidad.</p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2 text-center">
                <img loading="lazy" src="imagenes/265/PROCESADOR.webp" alt="Contacto directo procesador"
                    class="spec-img shadow-sm rounded border p-2">
            </div>
            <div class="col-md-6 order-md-1">
                <h3 style="color: var(--lb-primary); font-weight: bold;">Contacto Directo con el Procesador</h3>
                <p class="text-justify text-muted">Sobre el encabezado de los pines (Pin Header) usted tiene contacto
                    directo con el procesador, exactamente igual que en una placa ARDUINO estándar. Además, todos los
                    pines están protegidos industrialmente contra descargas (ESD 4000V).</p>
            </div>
        </div>
    </div>

    <!-- COMPARATIVA DE EQUIPOS -->

    <h2 class="section-title mt-5" id="equipos">COMPARATIVA DE EQUIPOS</h2>
    <div class="container">
        <div class="table-responsive bg-white rounded shadow-sm border p-3">
            <table class="table table-striped table-hover table-bordered table-custom text-center mb-0">
                <thead>
                    <tr>
                        <th class="text-left">Especificaciones</th>
                        <th>MINI</th>
                        <th>MAXI</th>
                        <th>MAXI Automation</th>
                        <th>MAXI Power</th>
                        <th>MAXI Power Automation</th>
                        <th>MEGA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left font-weight-bold">Analog/Digital Inputs</td>
                        <td>6 (2x only Analog)</td>
                        <td>10</td>
                        <td>12</td>
                        <td>10</td>
                        <td>12</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">Only Digital Inputs</td>
                        <td>2</td>
                        <td>2</td>
                        <td>6</td>
                        <td>2</td>
                        <td>6</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">Analog 0-10V Inputs</td>
                        <td>-</td>
                        <td>-</td>
                        <td>2</td>
                        <td>-</td>
                        <td>2</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">Interrupt Inputs</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">Digital 2A Outputs</td>
                        <td>8 (3 PWM)</td>
                        <td>12 (all PWM)</td>
                        <td>8 (all PWM)</td>
                        <td>12 (all PWM)</td>
                        <td>8 (all PWM)</td>
                        <td>24 (15 PWM)</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">Analog 0-10V Outputs</td>
                        <td>-</td>
                        <td>-</td>
                        <td>2</td>
                        <td>-</td>
                        <td>2</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">Relay Outputs</td>
                        <td>6 (parallel)</td>
                        <td>10</td>
                        <td>10</td>
                        <td>5 (16A)</td>
                        <td>5 (16A)</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">Serial TTL Interface</td>
                        <td>1</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">I²C Interface</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">SPI Interface</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">RS485 Interface</td>
                        <td>-</td>
                        <td>1</td>
                        <td>-</td>
                        <td>1</td>
                        <td>-</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">RTC</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-left font-weight-bold">Ethernet Interface</td>
                        <td>-</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr class="bg-light">
                        <td class="text-left font-weight-bold" style="color: var(--lb-accent);">Comprar en Tienda
                        </td>
                        <td><a href="https://tienda.logicbus.com.mx/100-000-00_p_19880.html" target="_blank"><img
                                    src="images/shopping_cart.png" class="cart-icon" alt="Comprar"></a></td>
                        <td><a href="https://tienda.logicbus.com.mx/100-102-00_p_23101.html" target="_blank"><img
                                    src="images/shopping_cart.png" class="cart-icon" alt="Comprar"></a></td>
                        <td><a href="https://tienda.logicbus.com.mx/100-101-00_p_19875.html" target="_blank"><img
                                    src="images/shopping_cart.png" class="cart-icon" alt="Comprar"></a></td>
                        <td><a href="https://tienda.logicbus.com.mx/100-102-00_p_23101.html" target="_blank"><img
                                    src="images/shopping_cart.png" class="cart-icon" alt="Comprar"></a></td>
                        <td><a href="https://tienda.logicbus.com.mx/100-104-00_p_23102.html" target="_blank"><img
                                    src="images/shopping_cart.png" class="cart-icon" alt="Comprar"></a></td>
                        <td><a href="https://tienda.logicbus.com.mx/100-200-00_p_19878.html" target="_blank"><img
                                    src="images/shopping_cart.png" class="cart-icon" alt="Comprar"></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!-- DOCUMENTACIÓN Y MANUALES -->
    <div class="container my-5">
        <h2 class="section-title mt-5" id="documentacion" style="background-color: transparent;">DOCUMENTACIÓN OFICIAL</h2>
        <div class="row justify-content-center align-items-center mt-4">
            <div class="col-md-5 text-center mb-4">
                <a href="pdf/265/CONTROLLINO-ES.pdf" target="_blank" class="text-decoration-none">
                    <img loading="lazy" src="pdf/265/controllino-es-portada.webp"
                        class="img-fluid border rounded shadow-sm mb-3" alt="Catálogo Controllino"
                        style="max-width: 220px;">
                    <h5 class="font-weight-bold" style="color: var(--lb-primary);">Descargar Catálogo General (ES)</h5>
                </a>
            </div>
            <div class="col-md-5 text-center mb-5 pb-4">
                <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=controllino"
                    class="ghost-manual-box">
                    <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">
                    <span class="d-block mt-2">Ver Documentación</span>
                </a>
            </div>
        </div>
    </div>

    <!-- ARTÍCULOS DEL BLOG -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="section-title m-0">ARTÍCULOS Y TUTORIALES</h2>
            <div class="articles-grid">
                <div class="article-card">
                    <a href="https://www.logicbus.com.mx/blog/plcs-controllino-su-origen-y-sus-multiples-aplicaciones/"
                        target="_blank">
                        <img loading="lazy" src="images/articulos-portadas/Controllino-plc.webp"
                            alt="Origen Controllino">
                    </a>
                    <div class="article-card-body text-center">
                        <h3><a href="https://www.logicbus.com.mx/blog/plcs-controllino-su-origen-y-sus-multiples-aplicaciones/"
                                target="_blank">PLC's Controllino: Su origen y múltiples aplicaciones</a></h3>
                        <p class="small text-muted">Aprende por qué Arduino es el microcontrolador más versátil y cómo
                            Controllino lo lleva a la industria.</p>
                        <a href="https://www.logicbus.com.mx/blog/plcs-controllino-su-origen-y-sus-multiples-aplicaciones/"
                            target="_blank" class="btn-circle mt-auto mx-auto" style="width: fit-content;">Leer más</a>
                    </div>
                </div>

                <div class="article-card">
                    <a href="https://www.logicbus.com.mx/blog/como-leer-una-entrada-analogica-en-plcs-controllino/"
                        target="_blank">
                        <img loading="lazy" src="images/articulos-portadas/Controllino-Entrada-Analogica.webp"
                            alt="Entrada Analógica">
                    </a>
                    <div class="article-card-body text-center">
                        <h3><a href="https://www.logicbus.com.mx/blog/como-leer-una-entrada-analogica-en-plcs-controllino/"
                                target="_blank">Cómo leer una Entrada Analógica en Controllino</a></h3>
                        <p class="small text-muted">Tutorial práctico para leer variables analógicas usando comunicación
                            serie.</p>
                        <a href="https://www.logicbus.com.mx/blog/como-leer-una-entrada-analogica-en-plcs-controllino/"
                            target="_blank" class="btn-circle mt-auto mx-auto" style="width: fit-content;">Leer más</a>
                    </div>
                </div>

                <div class="article-card">
                    <a href="https://www.logicbus.com.mx/blog/como-generar-una-senal-analogica-de-corriente-en-un-controllino/"
                        target="_blank">
                        <img loading="lazy" src="images/articulos-portadas/Controllino-senal-analogica.webp"
                            alt="Señal analógica corriente">
                    </a>
                    <div class="article-card-body text-center">
                        <h3><a href="https://www.logicbus.com.mx/blog/como-generar-una-senal-analogica-de-corriente-en-un-controllino/"
                                target="_blank">Generar una señal analógica de corriente</a></h3>
                        <p class="small text-muted">Descubre cómo usar el Controllino MAXI Automation para salidas de
                            automatización avanzada.</p>
                        <a href="https://www.logicbus.com.mx/blog/como-generar-una-senal-analogica-de-corriente-en-un-controllino/"
                            target="_blank" class="btn-circle mt-auto mx-auto" style="width: fit-content;">Leer más</a>
                    </div>
                </div>

                <div class="article-card">
                    <a href="https://www.logicbus.com.mx/blog/softwares-compatibles-para-programar-el-plc-controllino/"
                        target="_blank">
                        <img loading="lazy"
                            src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/12/Softwares-compatibles-para-programar-el-PLC-Controllino.webp"
                            alt="Softwares compatibles">
                    </a>
                    <div class="article-card-body text-center">
                        <h3><a href="https://www.logicbus.com.mx/blog/softwares-compatibles-para-programar-el-plc-controllino/"
                                target="_blank">Softwares compatibles para programar Controllino</a></h3>
                        <p class="small text-muted">Conoce todas las plataformas Open Source y licenciadas que puedes
                            integrar con este PLC.</p>
                        <a href="https://www.logicbus.com.mx/blog/softwares-compatibles-para-programar-el-plc-controllino/"
                            target="_blank" class="btn-circle mt-auto mx-auto" style="width: fit-content;">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- VIDEOS YOUTUBE -->
    <div class="container my-5">
        <h2 class="section-title mb-4">VIDEOS DE ENTRENAMIENTO (ESPAÑOL)</h2>
        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="video-container-youtube" data-video-id="4INoVFaXS9Q">
                    <img loading="lazy" src="https://img.youtube.com/vi/4INoVFaXS9Q/hqdefault.jpg"
                        alt="¿Qué es Controllino?">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="video-container-youtube" data-video-id="Mh-wzPukxsc">
                    <img loading="lazy" src="https://img.youtube.com/vi/Mh-wzPukxsc/hqdefault.jpg"
                        alt="Unboxing Controllino">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="video-container-youtube" data-video-id="X83aDg0MGJc">
                    <img loading="lazy" src="https://img.youtube.com/vi/X83aDg0MGJc/hqdefault.jpg"
                        alt="Entrada Análoga">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="video-container-youtube" data-video-id="Qvkx2PEXH3I">
                    <img loading="lazy" src="https://img.youtube.com/vi/Qvkx2PEXH3I/hqdefault.jpg"
                        alt="Instalar librerías">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>

        <h2 class="section-title mb-4">VIDEOS (INGLÉS)</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="video-container-youtube" data-video-id="930je3Gx984">
                    <img loading="lazy" src="https://img.youtube.com/vi/930je3Gx984/hqdefault.jpg"
                        alt="What is Controllino?">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-container-youtube" data-video-id="KcQ6PrUMf48">
                    <img loading="lazy" src="https://img.youtube.com/vi/KcQ6PrUMf48/hqdefault.jpg" alt="Analogue input">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-container-youtube" data-video-id="fA_fB31q_RM">
                    <img loading="lazy" src="https://img.youtube.com/vi/fA_fB31q_RM/hqdefault.jpg"
                        alt="Industrial Environments">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="video-container-youtube" data-video-id="DE4sWIpZ8ZA">
                    <img loading="lazy" src="https://img.youtube.com/vi/DE4sWIpZ8ZA/hqdefault.jpg"
                        alt="Explained in 30s">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="video-container-youtube" data-video-id="Xde9izy67Qg">
                    <img loading="lazy" src="https://img.youtube.com/vi/Xde9izy67Qg/hqdefault.jpg"
                        alt="Webinar Logicbus">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacto (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS AYUDA PARA TU PROYECTO?
            </h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros expertos te
                ayudarán a seleccionar el modelo Controllino ideal para tu aplicación industrial o académica.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>

    <!-- Scripts -->
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>

    <script>
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
</body>
<?php echo $var_footer; ?>

</html>