<?php
/* ======================================================
   CONFIGURACIÓN INICIAL
   ====================================================== */

// Archivo principal de configuración (conexiones, constantes, etc.)
require("../admin/config.php");

// Librería general del sitio (funciones reutilizables)
include("../libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <!-- ======================================================
         META CONFIGURACIÓN BÁSICA
    ====================================================== -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Transforma tu Centro Logístico con Automatización Inteligente</title>

    <meta name="description"
        content="Celdas de carga marca Futek para todo tipo de industria, envíos a todo México. Te ayudamos a encontrar el equipo adecuado para tu aplicación o proyecto.">

    <meta name="keywords"
        content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizacion, Seguridad, Consultoria, Integracion, Proyecto, Radio Frecuencia, Cubos, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, Measurement, CINCOZE, control de movimiento">

    <!-- ======================================================
         GOOGLE ANALYTICS
    ====================================================== -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-31533636-1');
    </script>

    <!-- ======================================================
         GOOGLE ADS
    ====================================================== -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'AW-1007518778');
    </script>

    <!-- ======================================================
         ESTILOS GENERALES (CARGADOS DESDE CONFIG)
    ====================================================== -->

    <?php
        echo $favicon;          // Ícono del sitio
        echo $boostrap_css;     // Bootstrap
        echo $google_analytics; // Analytics adicional (si aplica)
        echo $estilos;          // Estilos generales
        echo $own_file_css;     // CSS personalizado
        echo $flickity_css;     // Carruseles Flickity
        echo $footer_css;       // Estilos del footer
    ?>

    <!-- ======================================================
         ESTILOS LOCALES ESPECÍFICOS DE ESTA PÁGINA
    ====================================================== -->

    <link rel="preload" href="style_navbar.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="style_card.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="style_baner.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="style_estadisticas.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="amr_style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="style_dataloggers.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="catalogo_style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="camion_style.css.css" as="style" onload="this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="style_navbar.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="style_card.css">
        <link rel="stylesheet" href="style_baner.css">
        <link rel="stylesheet" href="style_estadisticas.css">
        <link rel="stylesheet" href="amr_style.css">
        <link rel="stylesheet" href="style_dataloggers.css">
        <link rel="stylesheet" href="catalogo_style.css">
        <link rel="stylesheet" href="camion_style.css">
        <link rel="stylesheet" href="footer2.css">



    </noscript>

</head>



<body>
    <style>
    .truck-container {
        position: relative;
        width: 100%;
        max-width: 1200px;
        margin: auto;
    }

    .truck-image {
        width: 100%;
        display: block;
        z-index: 1;
        position: relative;
    }

    /* PUNTOS */

    .sensor-point {
        position: absolute;
        transform: translate(-50%, -50%);
        text-align: center;
        cursor: pointer;

        z-index: 2;
    }

    /* ICONO */

    .sensor-point img {
        width: 50px;
        transition: 0.3s;
    }

    /* HOVER */

    .sensor-point:hover img {
        transform: scale(1.3);
    }

    /* TEXTO */

    .sensor-label {
        position: absolute;
        bottom: 50px;
        left: 50%;
        transform: translateX(-50%);


        background: #ff5a1f;
        color: white;
        padding: 6px 10px;
        font-size: 13px;
        border-radius: 4px;
        white-space: nowrap;

        opacity: 0;
        transition: 0.3s;
    }

    .sensor-point:hover .sensor-label {
        opacity: 1;
    }

    /* -------------------- */
    /* TABLET */
    /* -------------------- */

    @media (max-width:900px) {

        .sensor-point img {
            width: 40px;
        }

        .sensor-label {
            font-size: 12px;
            bottom: 60px;
        }

    }

    /* -------------------- */
    /* CELULAR */
    /* -------------------- */

    @media (max-width:600px) {

        .sensor-point img {
            width: 32px;
        }

        .sensor-label {
            font-size: 11px;
            padding: 5px 8px;
            bottom: 50px;
        }

    }


    /* overlay blanco */

    .cards-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;

        background: rgba(255, 255, 255, 0.65);
        /* semi transparente */

        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        /* soporte safari */

        display: flex;
        justify-content: center;
        align-items: flex-start;

        opacity: 0;
        pointer-events: none;

        transition: 0.4s;

        z-index: 999;

        overflow-y: auto;
        padding-top: 60px;
        padding-bottom: 40px;
    }

    /* activar overlay */

    .mostrar-cards .cards-overlay {
        opacity: 1;
        pointer-events: auto;
    }

    /* contenedor de cards */
    .cards-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;

        max-width: 800px;
        width: 90%;
    }

    .info-card {
        background: white;
        border-radius: 14px;

        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.18);

        padding: 25px;

        text-align: center;

        transition: 0.3s;
    }

    /* hover card */

    .info-card:hover {
        transform: translateY(-10px) scale(1.05);
    }

    /* header */

    .info-card h3 {
        color: white;
        padding: 15px;
        margin: -25px -25px 15px -25px;
        border-radius: 10px 10px 0 0;
    }

    /* colores */

    .card-blue h3 {
        background: linear-gradient(45deg, #2b5dff, #6b8cff);
    }

    .card-orange h3 {
        background: linear-gradient(45deg, #ff6a3d, #ff9b6a);
    }

    .card-green h3 {
        background: linear-gradient(45deg, #2abf88, #69e3b2);
    }

    @media (max-width:900px) {

        .cards-container {
            grid-template-columns: repeat(2, 1fr);
        }

    }

    @media (max-width:600px) {

        .cards-container {
            grid-template-columns: 1fr;
        }

    }

    .boton-mas img {
        background: white;
        border-radius: 50%;
        padding: 6px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    </style>


    <!-- ======================================================
         NAVBAR PRINCIPAL (HEADER SUPERIOR)
         - Logo     
         - Menú de navegación
         - Botones CTA (WhatsApp / Llamada)
    ====================================================== -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-logicbus fixed-top">
        <div class="container-fluid navbar-inner">

            <!-- ===== LOGO DE LA EMPRESA ===== -->
            <a class="navbar-brand navbar-logo" href="#banner">
                <img src="https://www.logicbus.com.mx/imagenes/logicbus.webp" alt="Logicbus">
            </a>

            <!-- ===== BOTÓN TOGGLE PARA MODO MÓVIL ===== -->
            <button class="navbar-toggler navbar-toggler-logicbus" type="button" data-toggle="collapse"
                data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- ===== MENÚ CENTRAL DE NAVEGACIÓN ===== -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav navbar-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#Productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Industrias">Industrias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Ventajas">Ventajas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Catalogos">Catálogos</a>
                    </li>
                </ul>
            </div>

            <!-- ===== BOTONES DE ACCIÓN (SOLO DESKTOP) ===== -->
            <div class="navbar-cta d-none d-lg-flex">

                <!-- Botón WhatsApp -->
                <a href="https://api.whatsapp.com/send?phone=525554316718" class="logicbus-btn logicbus-btn-whatsapp">
                    WhatsApp
                </a>

                <!-- Botón Llamada Telefónica -->
                <a href="tel:+523338234349" class="logicbus-btn logicbus-btn-call">
                    Llamada
                </a>
            </div>

        </div>
    </nav>


    <!-- ======================================================
         NAVBAR INFERIOR MÓVIL (BOTTOM NAV)
         - Solo visible en dispositivos móviles
         - Accesos rápidos por íconos
    ====================================================== -->
    <div class="logicbus-bottom-nav">

        <!-- Productos -->
        <a href="#Productos" class="logicbus-nav-item active">
            <img class="logicbus-icon" src="./images/Logicleaner_icon.webp" alt="Productos">
        </a>

        <!-- Industrias -->
        <a href="#Industrias" class="logicbus-nav-item">
            <img class="logicbus-icon" src="./images/Industrias_icon.webp" alt="Industrias">
        </a>

        <!-- Ventajas -->
        <a href="#Ventajas" class="logicbus-nav-item">
            <img class="logicbus-icon" src="./images/Ventajas_icono.webp" alt="Ventajas">
        </a>

        <!-- Catálogos -->
        <a href="#Catalogos" class="logicbus-nav-item">
            <img class="logicbus-icon" src="./images/Catalogo_icono.webp" alt="Catálogos">
        </a>

        <!-- WhatsApp Directo -->
        <a href="https://api.whatsapp.com/send?phone=525554316718" class="logicbus-nav-item">
            <img class="logicbus-icon" src="./images/Whats_icono.webp" alt="WhatsApp">
        </a>

    </div>


    <!-- ======================================================
         SECCIÓN HERO / BANNER PRINCIPAL
         - Título principal
         - Descripción
         - Botón CTA
         - Imagen destacada
         - Estado del sistema
    ====================================================== -->
    <section class="banner-hero">
        <div class="banner-container">

            <!-- ===== COLUMNA IZQUIERDA (TEXTO PRINCIPAL) ===== -->
            <div class="banner-left">

                <!-- Badge del evento -->
                <a href="https://expo.thelogisticsworld.com/proveedor/logicbus/" target="_blank"
                    class="boton_clickeable_banner">

                    <span class="badge-click">Click Aqui</span>
                    <span class="contenido">
                        <span class="icono">📅</span>
                        Agendar demo
                    </span>

                </a>

                <!-- Título principal -->
                <h1 class="banner-title text-start">
                    Transforma tu Centro Logístico con
                    <span class="banner-title">Automatización Inteligente</span>
                </h1>

                <!-- Descripción -->
                <p class="banner-description">
                    Descubre el futuro de la cadena de suministro. AMRs, limpieza robótica y monitores de datos IOT
                    avanzados
                    para maximizar tu eficiencia operativa.
                </p>

                <!-- Botón principal -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20gustar%C3%ADa%20agendar%20una%20asesor%C3%ADa.%20Los%20vi%20en%20The%20Logistics%20World%20Expo."
                    class="banner-cta">
                    Agendar una demo
                </a>

            </div>


            <!-- ===== COLUMNA DERECHA (IMAGEN + STATUS) ===== -->
            <div class="banner-right">

                <!-- Imagen principal -->
                <div class="banner-image-card">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80"
                        alt="Robot logístico">
                </div>

                <!-- Tarjeta de estado del sistema -->
                <div class="ini-status-card">
                    <div class="ini-status-icon">⚡</div>
                    <div class="ini-status-text">
                        <small>Logicbus: El motor detrás de tu éxito corporativo.</small>
                        <strong>Todo funciona mejor cuando eliges lo mejor.</strong>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <div class="container-fluid p-md-5 py-4">
        <div class="row align-items-center py-5 px-1" id="cotiza">

            <!-- ===== COLUMNA IZQUIERDA (TEXTO) ===== -->
            <div class="col-md-6">

                <h2 class="blue pb-4">
                    Transforma tu Centro Logístico con Automatización Inteligente
                </h2>

                <p>
                    La automatización intra-logistica ya no es el futuro, es el estándar de eficiencia operativa.
                    Transforma tu centro logístico en un ecosistema inteligente, preciso y totalmente integrado.
                </p>

                <p>
                    En <strong>Logicbus</strong>, presentamos
                    <strong>AMRs de última generación, limpieza robótica industrial, registradores y monitores de datos
                        IOT</strong>
                    que trabajan en conjunto para maximizar tu productividad.
                </p>

                <p>
                    Más de <strong>500 consultorías exitosas</strong> respaldan nuestra experiencia,
                    logrando <strong>30% menos costos operativos y 99.9% de precisión</strong>.
                </p>

                <p>
                    <strong>La eficiencia inteligente comienza aquí.</strong>
                </p>

                <!-- Botón Agendar una demo en vivo -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20gustar%C3%ADa%20agendar%20una%20asesoria."
                    class="banner-cta">
                    Agendar una demo
                </a>




            </div>

            <!-- ===== COLUMNA DERECHA (SWITCH + IMAGEN) ===== -->
            <div class="col-md-6 text-center">

                <div class="amr-section">

                    <!-- Toggle -->
                    <label class="amr-switch">
                        <input type="checkbox" id="amrToggle">
                        <span class="slider">
                            <span class="label left">Sin automatización</span>
                            <span class="label right">Con automatización</span>
                            <span class="circle"></span>
                        </span>
                    </label>

                    <!-- Imagen -->
                    <div class="amr-image mt-4">
                        <img loading="lazy" id="amrImg" src="./images/sin_logicbus2.webp" class="img-fluid">
                    </div>

                </div>

            </div>

        </div>
    </div>
    

    <!-- ======================================================
     SECCIÓN: ECOSISTEMA DE SOLUCIONES (TÍTULO)
     - Encabezado principal de productos
====================================================== -->
    <div class="container-fluid py-3 text-center d-flex justify-content-center">
        <div class="seccion" id="Productos">
            <div class="col-center">
                <h2>
                    <span>Ecosistema de Soluciones</span>
                </h2>
            </div>
        </div>
    </div>


    <!-- ======================================================
     SECCIÓN INTRODUCTORIA DE PRODUCTOS
     - Texto explicativo
     - Contenedor dinámico para cards
====================================================== -->
    <div class="container px-md-5 px-0 text-center">

        <!-- Contenedor dinámico para cargar contenido (oculto inicialmente) -->
        <div id="content-cell" class="container m-2 pb-1" style="display: none;"></div>

        <!-- Título secundario -->
        <h2 class="text-center blue px-md-5 px-0 m-3 pt-2">
            Visualiza tu Operación Sin Fronteras
        </h2>

        <!-- Descripción -->
        <p class="m-2 pb-1 pt-2">
            Integramos cada rincón de tu almacén en un ecosistema conectado.
            Desde la recepción hasta la última milla, nuestras soluciones eliminan cuellos de botella.
        </p>

    </div>



    <!-- ======================================================
     GRID PRINCIPAL DE PRODUCTOS
     - Contenedor general de todas las cards
====================================================== -->
    <div class="grid-container">

        <!-- ======================================================
         CARD 1 - AMRs (Robots Autónomos Móviles)
    ====================================================== -->
        <div class="card">

            <!-- Imagen principal (clic para mostrar carrusel) -->
            <div class="main-img-container" onclick="toggleCarousel(this)">
                <span class="badge">Traslado autonomo</span>
                <img loading="lazy" src="./images/transporte autonomo de materiales.webp" alt="AMR Transporte Autónomo"
                    class="main-img">
            </div>

            <!-- Cuerpo de la card -->
            <div class="card-body">
                <h2>Traslado interno autonomo de materiales ligeros</h2>

                <!-- 🔶 BLOQUE 40x40 -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20equipos%20de%20traslado%20interno%20aut%C3%B3nomo%20de%20materiales%20ligeros."
                    class="cotizar-badge" target="_blank">
                    Agendar demo
                </a>

                <!-- Botones de acción -->
                <div class="btn-container">

                    <button class="btn-ver-mas" onclick="showCatalog('arms')">
                        Ver más
                    </button>
                </div>
            </div>
        </div>


        <!-- ======================================================
         CARD 2 - LOGICLEANER (Limpieza Robótica Industrial)
    ====================================================== -->
        <div class="card">

            <div class="main-img-container" onclick="toggleCarousel(this)">
                <span class="badge">Limpieza autonoma de zonas comunes</span>
                <img loading="lazy" src="./images/kokobots.webp" alt="Logicleaner Industrial" class="main-img">
            </div>

            <!-- <div class="carousel-section">
                <div class="carousel-track">

                    <img loading="lazy" class="thumb active" src="./images/Logicleaner_1.webp"
                        onclick="updateMainImage(this, 'Sensor LIDAR 360°')">

                    <img loading="lazy" class="thumb" src="./images/Logicleaner_2.webp"
                        onclick="updateMainImage(this, 'Chasis robusto de chapa metálica')">

                    <img loading="lazy" class="thumb" src="./images/Logicleaner_3.webp"
                        onclick="updateMainImage(this, 'Motor industrial de alto torque')">

                    <img loading="lazy" class="thumb" src="./images/Logicleaner_4.webp"
                        onclick="updateMainImage(this, 'Cepillos duales')">
                </div>

                <div class="info-display">Chasis reforzado</div>
            </div> -->

            <div class="card-body">
                <h2>Limpieza autonoma de zonas comunes</h2>

                <!-- 🔶 BLOQUE 40x40 -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20soluciones%20de%20limpieza%20aut%C3%B3noma%20de%20zonas%20comunes."
                    class="cotizar-badge" target="_blank">
                    Agendar demo
                </a>


                <div class="btn-container">

                    <button class="btn-ver-mas" onclick="showCatalog('logicleaner')">
                        Ver más
                    </button>
                </div>
            </div>
        </div>


        <!-- ======================================================
         CARD 3 - TELEMETRÍA (Data Loggers Industriales)
    ====================================================== -->
        <div class="card">

            <div class="main-img-container" onclick="toggleCarousel(this)">
                <span class="badge">Calidad de envio</span>
                <img loading="lazy" src="./images/dataloggers.webp" alt="Data Loggers Industriales" class="main-img">
            </div>



            <div class="card-body">
                <h2>Registradores de datos</h2>

                <!-- 🔶 BLOQUE 40x40 -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20registradores%20de%20datos%20industriales."
                    class="cotizar-badge" target="_blank">
                    Agendar demo
                </a>

                <div class="btn-container">
                    <button class="btn-ver-mas" onclick="showCatalog('logger')">
                        Ver más
                    </button>
                </div>
            </div>
        </div>


        <!-- ======================================================
         CARD 4 - QUALCOMM AWARE (Dispositivo Compacto)
    ====================================================== -->
        <div class="card">

            <div class="main-img-container" onclick="toggleCarousel(this)">
                <span class="badge">Compacto</span>
                <img loading="lazy" src="./images/RASTREADOR.webp" alt="Qualcomm Aware Tracker" class="main-img">
            </div>
            <div class="card-body">
                <h2>Rastreador IOT</h2>

                <!-- 🔶 BLOQUE 40x40 -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20soluciones%20de%20rastreador%20IoT."
                    class="cotizar-badge" target="_blank">
                    Agendar demo
                </a>

                <div class="btn-container">
                    <button class="btn-ver-mas" onclick="showCatalog('slim')">
                        Ver más
                    </button>
                </div>
            </div>
        </div>
        <!-- ======================================================
         CARD 5 - Transporte autonomo de materiales con elevacion 
    ====================================================== -->
        <div class="card">

            <div class="main-img-container" onclick="toggleCarousel(this)">
                <span class="badge">Compacto</span>
                <img loading="lazy" src="./images/Series lifting.webp" alt="transporte autonomo" class="main-img">
            </div>



            <div class="card-body">
                <h2> Transporte autonomo de materiales con elevacion </h2>
                <!-- 🔶 BLOQUE 40x40 -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20soluciones%20de%20rastreador%20IoT."
                    class="cotizar-badge" target="_blank">
                    Agendar demo
                </a>

                <div class="btn-container">
                    <button class="btn-ver-mas" onclick="showCatalog('elevacion')">
                        Ver más
                    </button>
                </div>
            </div>
        </div>


        <!-- ======================================================
         CARD 6 - Montacargas Autonomo
    ====================================================== -->
        <div class="card">

            <div class="main-img-container" onclick="toggleCarousel(this)">
                <span class="badge">Compacto</span>
                <img loading="lazy" src="./images/forkflit.webp" alt="Qualcomm Aware Tracker" class="main-img">
            </div>



            <div class="card-body">
                <h2>Montacargas Autonomo</h2>
                <!-- 🔶 BLOQUE 40x40 -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20soluciones%20de%20rastreador%20IoT."
                    class="cotizar-badge" target="_blank">
                    Agendar demo
                </a>

                <div class="btn-container">
                    <button class="btn-ver-mas" onclick="showCatalog('montacargas')">
                        Ver más
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- ======================================================
     SECCIÓN DETALLE DE PRODUCTOS - AMRs
     - Se muestra dinámicamente con JS (display:none por defecto)
     - Contiene fichas técnicas completas
====================================================== -->
    <div id="catalogSection">
        <div class="spec-content d-none" id="product-arms">

            <!-- ===== ENCABEZADO DE CATEGORÍA ===== -->
            <h2 class="category-header">
                Línea de Robots Móviles Autónomos (AMR)
            </h2>


            <!-- ======================================================
    PRODUCTO 1 - QUASI C2
    Tipo: Manipulación colaborativa ligera
    ====================================================== -->
            <!-- ======================================================
     LÍNEA COMPLETA - QUASI C2
    ====================================================== -->
            <!-- ===================== C2 STANDARD ===================== -->
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/C2.webp" alt="Modelo C2 Standard">

                    <!-- 🔵 BOTÓN SOLO PARA STANDARD -->
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20quiero%20una%20demo%20del%20modelo%20C2%20Standard."
                            class="btn-demo" target="_blank">
                            Quiero una demo
                        </a>
                    </div>
                </div>

                <div class="detail-content">
                    <h3>Modelo C2 Standard - El Robot de Entrega Todo Terreno</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Rendimiento Balanceado:</td>
                            <td>Combinación ideal entre capacidad de carga y agilidad para múltiples aplicaciones.</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Sistema de Sensores Mejorado:</td>
                            <td>Seis sensores inferiores adicionales para detección precisa del nivel del suelo.</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Eficiencia Comprobada:</td>
                            <td>Modelo más popular para transporte de contenedores, cajas y WIP en entornos
                                industriales.</td>
                        </tr>
                    </table>
                </div>
            </div>


            <!-- ===================== C2 LARGE ===================== -->
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/C2Large.webp" alt="Modelo C2 Large">
                </div>

                <div class="detail-content">
                    <h3>Modelo C2 Large - Mayor Espacio, Mayor Versatilidad</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Estantería Expandida:</td>
                            <td>Estructura reforzada para mayor capacidad de carga.</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Mayor Flexibilidad:</td>
                            <td>Permite transportar artículos más grandes y realizar rutas con múltiples paradas sin
                                modificar la infraestructura.</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Confiabilidad Garantizada:</td>
                            <td>Impulsado por tecnología propietaria Q.AI para movimientos seguros y predecibles incluso
                                a máxima capacidad.</td>
                        </tr>
                    </table>
                </div>
            </div>


            <!-- ===================== C2 MINI ===================== -->
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/c2mini.webp" alt="Modelo C2 Mini">
                </div>

                <div class="detail-content">
                    <h3>Modelo C2 Mini - Especialista en Espacios Reducidos</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Transporte de Alta Frecuencia:</td>
                            <td>Diseñado para entregas rápidas y continuas de piezas pequeñas, cajas y contenedores.
                            </td>
                        </tr>
                        <tr>
                            <td class="label-tech">Radio de Giro Mínimo:</td>
                            <td>Gira sobre su propio eje para una navegación eficiente en pasillos estrechos.</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Mayor Acceso a Automatización:</td>
                            <td>Permite automatizar áreas y pasillos que antes no eran accesibles.</td>
                        </tr>
                    </table>
                </div>
            </div>


            <!-- ===================== C2 PARTPORTER ===================== -->
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/C2partporter.webp" alt="Modelo C2 PartPorter">
                </div>

                <div class="detail-content">
                    <h3>Modelo C2 PartPorter - Diseñado para Paneles y Láminas</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Acceso de Carga Fácil:</td>
                            <td>Diseño abierto que facilita la carga de paneles grandes y componentes planos.</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Protección de Superficies:</td>
                            <td>Divisores seguros para transportar materiales pintados o delicados sin dañarlos.</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Kitting de Alta Densidad:</td>
                            <td>Entrega kits completos con piezas apiladas verticalmente directamente a la línea de
                                ensamblaje.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- ======================================================
     SECCIÓN: SOLUCIONES DE LIMPIEZA AUTÓNOMA INDUSTRIAL
     ID utilizado por showCatalog('logicleaner')
====================================================== -->
        <div class="spec-content d-none" id="product-logicleaner">

            <!-- ======================================================
         ENCABEZADO PRINCIPAL DE LA CATEGORÍA
    ====================================================== -->
            <h2 class="category-header">
                Soluciones de Limpieza Autónoma Industrial
            </h2>

            <!-- ======================================================
         KOKOBOTS S7 - ROBOTIC SWEEPER
    ====================================================== -->
            <div class="product-detail-card">

                <!-- Imagen del producto -->
                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/kokobots_s7.webp" alt="Kokobots S7 Robotic Sweeper">
                </div>

                <!-- Información técnica -->
                <div class="detail-content">
                    <h3>Kokobots S7 - Robotic Sweeper</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Barredora autónoma industrial</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Sistema de Navegación:</td>
                            <td>LiDAR 360° + SLAM dinámico</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Cobertura:</td>
                            <td>Hasta 2,500 m²/h</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Ancho de Barrido:</td>
                            <td>600–800 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Capacidad Depósito:</td>
                            <td>40–60 L</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Autonomía:</td>
                            <td>4–6 horas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Almacenes, estacionamientos, fábricas ligeras</td>
                        </tr>
                    </table>
                </div>

            </div>


            <!-- ======================================================
         KOKOBOTS S95 - SCRUBBER & SWEEPER 2 EN 1
    ====================================================== -->
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/kokobots_s95.webp" alt="Kokobots S95 Scrubber & Sweeper">
                </div>

                <div class="detail-content">
                    <h3>Kokobots S95 - Scrubber & Sweeper</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Fregadora y barredora autónoma 2 en 1</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Navegación:</td>
                            <td>LiDAR + SLAM + Sensores Ultrasónicos</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Ancho de Fregado:</td>
                            <td>700–900 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Tanque Agua Limpia:</td>
                            <td>60–80 L</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Tanque Recuperación:</td>
                            <td>65–85 L</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Productividad:</td>
                            <td>Hasta 3,000 m²/h</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Autonomía:</td>
                            <td>6–8 horas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Naves industriales, aeropuertos, centros logísticos</td>
                        </tr>
                    </table>
                </div>

            </div>


            <!-- ======================================================
         KOKOBOTS S79 - ROBOTIC SCRUBBER
    ====================================================== -->
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/kokobots_s79.webp" alt="Kokobots S79 Robotic Scrubber">
                </div>

                <div class="detail-content">
                    <h3>Kokobots S79 - Robotic Scrubber</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Fregadora autónoma industrial</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Navegación:</td>
                            <td>LiDAR + SLAM + Cámara 3D</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Ancho de Trabajo:</td>
                            <td>700 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Presión Cepillo:</td>
                            <td>Ajustable industrial</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Capacidad Tanque:</td>
                            <td>55–70 L</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Autonomía:</td>
                            <td>5–7 horas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Superficies lisas industriales</td>
                        </tr>
                    </table>
                </div>

            </div>

            <!-- ======================================================
         KOKOBOTS S9 - COMPACT SWEEPER
    ====================================================== -->
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/kokobots_s9.webp" alt="Kokobots S9 Compact Sweeper">
                </div>

                <div class="detail-content">
                    <h3>Kokobots S9 - Compact Sweeper</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Barredora autónoma compacta</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Navegación:</td>
                            <td>LiDAR frontal + SLAM</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Ancho de Barrido:</td>
                            <td>500–600 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Capacidad Depósito:</td>
                            <td>30–40 L</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Autonomía:</td>
                            <td>3–5 horas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Pasillos estrechos y espacios reducidos</td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>
        <!-- ===== FIN DE product-logicleaner ===== -->



        <div class="spec-content d-none" id="product-logger">

            <h2 class="category-header">
                Registradores de Datos Industriales
            </h2>

            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/edclge_loggerflex.webp" alt="EDCLGE LoggerFlex Logística">
                    <div>
                        <!-- 🔵 BOTÓN DEMO SOLO PARA QUASI -->
                        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20quiero%20una%20demo%20del%20modelo%20edclge."
                            class="btn-demo" target="_blank">
                            Quiero una demo
                        </a>

                    </div>

                </div>

                <div class="detail-content">
                    <h3>EDCLGE - LoggerFlex para Logística</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Data Logger inalámbrico para cadena de suministro</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Conectividad:</td>
                            <td>LoRa / RF Industrial de largo alcance</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Rango de Temperatura:</td>
                            <td>-30°C a +70°C</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Precisión:</td>
                            <td>±0.5°C</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Memoria Interna:</td>
                            <td>Hasta 32,000 registros</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Alimentación:</td>
                            <td>Batería de litio reemplazable (hasta 2 años)</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Protección:</td>
                            <td>IP65 – Resistente a polvo y salpicaduras</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Almacenes, transporte refrigerado, centros de distribución</td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/esmobi_loggerflex.webp" alt="ESMOBI LoggerFlex Movilidad">
                    <div>
                        <!-- 🔵 BOTÓN DEMO -->
                        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20quiero%20una%20demo%20del%20modelo%20ESMOBI."
                            class="btn-demo" target="_blank">
                            Quiero una demo
                        </a>
                    </div>
                </div>

                <div class="detail-content">
                    <h3>ESMOBI - LoggerFlex para Monitoreo en Movilidad</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Data Logger portátil para monitoreo móvil</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Sensores:</td>
                            <td>Temperatura + Humedad opcional</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Conectividad:</td>
                            <td>RF inalámbrico + Gateway central</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Rango Temperatura:</td>
                            <td>-20°C a +60°C</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Precisión:</td>
                            <td>±0.5°C / ±3% HR</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Autonomía:</td>
                            <td>Hasta 18 meses</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Unidades móviles, transporte farmacéutico y alimentos</td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/rfrhtemp2000a.webp" alt="RFRHTemp2000A Logger Industrial">
                    <div>
                        <!-- 🔵 BOTÓN DEMO -->
                        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20quiero%20una%20demo%20del%20modelo%20RFRHTemp2000A."
                            class="btn-demo" target="_blank">
                            Quiero una demo
                        </a>
                    </div>
                </div>

                <div class="detail-content">
                    <h3>RFRHTemp2000A - Data Logger RF Industrial</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Data Logger RF para temperatura y humedad</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Rango Temperatura:</td>
                            <td>-40°C a +80°C</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Rango Humedad:</td>
                            <td>0% a 95% HR</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Precisión:</td>
                            <td>±0.3°C / ±2% HR</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Frecuencia RF:</td>
                            <td>915 MHz Industrial</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Memoria:</td>
                            <td>Hasta 16,000 lecturas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Protección:</td>
                            <td>IP67 – Uso industrial</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Almacenes farmacéuticos, cámaras frías, centros logísticos</td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/rftemp2000a.webp" alt="RFTemp2000A Logger Industrial">

                    <div>
                        <!-- 🔵 BOTÓN DEMO -->
                        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20quiero%20una%20demo%20del%20modelo%20RFTemp2000A."
                            class="btn-demo" target="_blank">
                            Quiero una demo
                        </a>
                    </div>
                </div>

                <div class="detail-content">
                    <h3>RFTemp2000A - Data Logger RF Temperatura</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Data Logger RF para temperatura</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Rango Temperatura:</td>
                            <td>-40°C a +125°C</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Precisión:</td>
                            <td>±0.5°C</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Frecuencia:</td>
                            <td>915 MHz Industrial</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Memoria:</td>
                            <td>16,000 registros</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Batería:</td>
                            <td>Litio reemplazable (hasta 2 años)</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Monitoreo continuo en almacenes y cámaras de refrigeración</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

        <div class="spec-content d-none" id="product-slim">

            <h2 class="category-header">
                Rastreo y gestion de activos
            </h2>

            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/qualcomm_aware.webp" alt="Qualcomm Aware Tracker">
                    <div>
                        <!-- 🔵 BOTÓN DEMO -->
                        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20quiero%20una%20demo%20del%20modelo%20Qualcomm%20Aware."
                            class="btn-demo" target="_blank">
                            Quiero una demo
                        </a>
                    </div>
                </div>

                <div class="detail-content">
                    <h3>Qualcomm Aware</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tecnología:</td>
                            <td>IoT con conectividad global</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Diseño:</td>
                            <td>Compacto y ligero</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Batería:</td>
                            <td>Larga duración optimizada</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Seguimiento de activos y mercancía</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Gestión:</td>
                            <td>Plataforma digital de monitoreo</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>



        <div class="spec-content d-none" id="product-elevacion">

            <h2 class="category-header">
                Transporte Autónomo de Materiales con Elevación
            </h2>


            <!-- ================= Autoxing L150 ================= -->

            <div class="product-detail-card">
                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/autoxing_l150.webp" alt="Youibot L1000">

                </div>

                <div class="detail-content">
                    <h3>Autoxing L150 – AMR Industrial Compacto</h3>

                    <table class="full-specs">

                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Robot Móvil Autónomo (AMR) con elevación integrada</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Capacidad Máxima:</td>
                            <td>150 kg</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Tipo de Carga:</td>
                            <td>Cajas, contenedores, pequeños racks y materiales ligeros</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Altura de Elevación:</td>
                            <td>Hasta 200–300 mm</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Sistema de Navegación:</td>
                            <td>LiDAR 360° + SLAM</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Precisión de Posicionamiento:</td>
                            <td>±10 mm</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Velocidad Máxima:</td>
                            <td>1.2 – 1.5 m/s</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Radio de Giro:</td>
                            <td>Giro sobre su propio eje</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Capacidad de Pendiente:</td>
                            <td>Hasta 5%</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Autonomía Operativa:</td>
                            <td>6 – 8 horas continuas</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Tiempo de Carga:</td>
                            <td>2 – 3 horas (compatible con carga automática)</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Tipo de Batería:</td>
                            <td>Batería de litio industrial</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Sistema de Seguridad:</td>
                            <td>Escáner láser 360°, sensores anticolisión, paro de emergencia</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Integración:</td>
                            <td>Compatible con WMS / MES / ERP</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Gestión de Flota:</td>
                            <td>Software centralizado multi-AMR</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Comunicación:</td>
                            <td>WiFi Industrial</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Ambiente de Operación:</td>
                            <td>Interior industrial / manufactura ligera</td>
                        </tr>

                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Automatización de transporte interno en líneas de producción y almacenes</td>
                        </tr>

                    </table>
                </div>
            </div>

            <!-- ================= Youibot L1000 ================= -->
            <div class="product-detail-card">
                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/youibot_l1000.webp" alt="Youibot L1000">

                </div>

                <div class="detail-content">
                    <h3>Youibot L1000 – AMR Industrial de Alta Capacidad</h3>

                    <table class="full-specs">

                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Robot Móvil Autónomo (AMR)</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Capacidad Máxima:</td>
                            <td>1000 kg</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Tipo de Carga:</td>
                            <td>Racks, pallets, carros industriales</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Sistema de Navegación:</td>
                            <td>LiDAR 360° + SLAM dinámico</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Precisión de Posicionamiento:</td>
                            <td>±10 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Velocidad Máxima:</td>
                            <td>1.5 m/s</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Radio de Giro:</td>
                            <td>Giro sobre su propio eje</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Capacidad de Pendiente:</td>
                            <td>Hasta 5%</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Autonomía Operativa:</td>
                            <td>6–8 horas continuas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Tiempo de Carga:</td>
                            <td>2–3 horas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Tipo de Batería:</td>
                            <td>Litio industrial de larga duración</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Sistema de Seguridad:</td>
                            <td>Detección 360°, sensores anticolisión, paro de emergencia</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Integración:</td>
                            <td>Compatible con WMS / MES / ERP</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Gestión de Flota:</td>
                            <td>Software centralizado multi-robot</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Comunicación:</td>
                            <td>WiFi Industrial / Ethernet</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Ambiente de Operación:</td>
                            <td>Interior industrial</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Transferencia automática entre líneas y almacenes</td>
                        </tr>

                    </table>
                </div>
            </div>

            <!-- ================= Serie Lifting ================= -->
            <!-- ================= Serie Lifting ================= -->
            <div class="product-detail-card">
                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/youibot_lifting.webp" alt="Youibot Serie Lifting">
                    <div>
                        <!-- 🔵 BOTÓN DEMO -->
                        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20quiero%20una%20demo%20del%20modelo%20Youibot%20Serie%20Lifting."
                            class="btn-demo" target="_blank">
                            Quiero una demo
                        </a>
                    </div>
                </div>

                <div class="detail-content">
                    <h3>Youibot Serie Lifting (L150 / L300 / L300E / L600)</h3>

                    <table class="full-specs">

                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>AMR con sistema de elevación integrado</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Capacidades Disponibles:</td>
                            <td>150 kg / 300 kg / 600 kg</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Altura de Elevación:</td>
                            <td>Hasta 300 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Sistema de Elevación:</td>
                            <td>Plataforma motorizada de precisión</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Navegación:</td>
                            <td>LiDAR + SLAM + Mapeo dinámico</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Precisión:</td>
                            <td>±10 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Velocidad:</td>
                            <td>1.2 – 1.5 m/s</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Autonomía:</td>
                            <td>6–8 horas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Carga Automática:</td>
                            <td>Compatible con estación de carga autónoma</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Sistema de Seguridad:</td>
                            <td>Escáner láser 360°, sensores ultrasónicos</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Gestión de Flota:</td>
                            <td>Software inteligente multi-AMR</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Interfaz:</td>
                            <td>Pantalla táctil + control remoto</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Integración:</td>
                            <td>API abierta para integración con WMS / ERP</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Ambiente:</td>
                            <td>Manufactura, automotriz, electrónica, logística</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Modo de Operación:</td>
                            <td>Manual / Semi-autónomo / Autónomo total</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="spec-content d-none" id="product-montacargas">

            <h2 class="category-header">
                Montacargas Autónomos Industriales
            </h2>

            <!-- ================= AutoXing FT1500 ================= -->
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/autoxing_ft1500.webp" alt="AutoXing FT1500">

                </div>

                <div class="detail-content">
                    <h3>AutoXing FT1500 – Montacargas Autónomo Inteligente</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Montacargas autónomo contrabalanceado</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Capacidad:</td>
                            <td>1500 kg</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Altura Máxima:</td>
                            <td>Hasta 3,000 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Velocidad:</td>
                            <td>Hasta 1.5 m/s</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Navegación:</td>
                            <td>LiDAR 360° + Cámara 3D + SLAM</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Precisión:</td>
                            <td>±10 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Autonomía:</td>
                            <td>8 horas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Batería:</td>
                            <td>Litio industrial con carga automática</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Seguridad:</td>
                            <td>Detección 360°, reducción automática de velocidad, E-stop</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Integración:</td>
                            <td>Compatible con WMS / ERP / MES</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Centros de distribución y racks industriales</td>
                        </tr>
                    </table>

                </div>
            </div>

            <!-- ================= AutoXing 1600 ================= -->
            <div class="product-detail-card">

                <div class="detail-img-wrapper">
                    <img loading="lazy" src="./images/autoxing_ft2000.webp" alt="AutoXing 1600">

                </div>

                <div class="detail-content">
                    <h3>AutoXing FT2000 – Montacargas Autónomo Industrial Pesado</h3>

                    <table class="full-specs">
                        <tr>
                            <td class="label-tech">Tipo:</td>
                            <td>Montacargas autónomo contrabalanceado</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Capacidad Máxima:</td>
                            <td>2000 kg</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Altura Máxima de Elevación:</td>
                            <td>Hasta 4,500 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Centro de Carga:</td>
                            <td>600 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Velocidad Máxima:</td>
                            <td>1.5 – 1.8 m/s</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Sistema de Navegación:</td>
                            <td>LiDAR 3D + Cámaras de profundidad + SLAM</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Precisión de Posicionamiento:</td>
                            <td>±10 mm</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Autonomía Operativa:</td>
                            <td>8 – 10 horas continuas</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Tipo de Batería:</td>
                            <td>Litio industrial con carga automática</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Sistema de Seguridad:</td>
                            <td>Escáner láser 360°, detección de obstáculos, reducción automática de velocidad,
                                botón de
                                paro de emergencia</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Gestión de Flota:</td>
                            <td>Software centralizado multi-unidad</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Comunicación:</td>
                            <td>WiFi Industrial / 5G opcional</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Integración:</td>
                            <td>Compatible con WMS / ERP / MES</td>
                        </tr>
                        <tr>
                            <td class="label-tech">Aplicación:</td>
                            <td>Operaciones logísticas 24/7, almacenes de alta rotación, centros de distribución
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid py-3 text-center d-flex justify-content-center">
        <div class="seccion" id="Productos">
            <div class="col-center">
                <h2>
                    <span>Sistema de monitoreo y control IOT para tráilers</span>
                </h2>
            </div>
        </div>
    </div>

    <div>





        <div style="position:relative; max-width:950px; margin:auto;">

            <img src="./images/camion_sin.png" style="width:100%; display:block;">

            <div class="cards-overlay">

                <div class="cards-container">

                    <div class="info-card card-blue">
                        <h3>Medición de:</h3>
                        <p>Temperatura, humedad y presencia</p>
                    </div>

                    <div class="info-card card-orange">
                        <h3>Sensores de:</h3>
                        <p>Detección de apertura y cierre de puerta.</p>
                    </div>

                    <div class="info-card card-blue">
                        <h3>Control de volumen</h3>
                        <p>Medicion de volumen de carga</p>
                    </div>

                    <div class="info-card card-orange">
                        <h3>Seguridad</h3>
                        <p>Monitoreo y registro de peso de la caja y su contenido </p>
                    </div>

                    <div class="info-card card-green">
                        <h3>Ubicacion en tiempo real</h3>
                        <p>Identificacion de la caja y su ubicacion por rfid</p>
                    </div>

                </div>

            </div>

            <!-- Punto 1 -->
            <div class="sensor-point" style="top:49.5%; left:18.5%; ">
                <div class="sensor-label">Antena Externa GNSS</div>
                <img style="scale: calc(1.8);" src="./images/Antena externa GPS y GNSS.png">
            </div>

            <!-- Punto 2 -->
            <div class="sensor-point" style="top:73.5%; left:20.5%;">
                <div class="sensor-label">Cámara de visión artificial</div>
                <img style="scale: calc(1.8);" src="./images/CÁMARA DE VISIÓN ARTIFICIAL.png">
            </div>

            <!-- Punto 3 -->
            <div class="sensor-point" style="top:81.5%; left:20.5%;">
                <div class="sensor-label">Sensor de puerta magnético</div>
                <img style="scale: calc(1.8);" src="./images/Sensor de puerta magnético.png">
            </div>

            <!-- Punto 4 -->
            <div class="sensor-point" style="top:61.5%; left:48%;">
                <div class="sensor-label">Reflector de montaje</div>
                <img src="./images/Reflector de montaje.png">
            </div>

            <!-- Punto 5 -->
            <div class="sensor-point" style="top:75%; left:52%;">
                <div class="sensor-label">Sensor de temperatura y humedad</div>
                <img style="scale: calc(1.8);" src="./images/Sensor de temperatura y humedad.png">
            </div>

            <!-- Punto 6 -->
            <div class="sensor-point" style="top:51%; left:33%;">
                <div class="sensor-label">Registrador de datos 4G</div>
                <img style="scale: calc(1.5);" src="./images/REGISTRADOR DE DATOS 4G.png">
            </div>

            <!-- Punto 7 -->
            <div class="sensor-point" style="top:64%; left:34.5%;">
                <div class="sensor-label">Modulo DAQ</div>
                <img style="scale: calc(1.5);" src="./images/Módulo DAQ.png">
            </div>

            <!-- Punto 8 -->
            <div class="sensor-point" style="top:86.5%; left:33.5%;">
                <div class="sensor-label">Celda de carga</div>
                <img style="scale: calc(1.8);" src="./images/Celda de carga.png">
            </div>

            <!-- Punto 9 -->
            <div class="sensor-point" style="top:42%; left:54%;">
                <div class="sensor-label">Tag RFID</div>
                <img style="scale: calc(1.7);" src="./images/TAG RFID.png">
            </div>

            <!-- Punto 10 -->
            <div class="sensor-point" style="top:55%; left:60.5%;">
                <div class="sensor-label">Sensor retrorreflectante</div>
                <img style="scale: calc(1.7);" src="./images/Sensor retrorreflectante.png">
            </div>

            <!-- Punto 11 -->
            <div class="sensor-point" style="top:42.5%; left:80.5%;">
                <div class="sensor-label">computadora vehicular</div>
                <img style="scale: calc(1.7);" src="./images/computadora vehicular.png">
            </div>

            <!-- Punto 12 -->
            <div class="sensor-point" style="top:56.5%; left:80.5%;">
                <div class="sensor-label">Sensor nivel de combustible</div>
                <img style="scale: calc(1.7);" src="./images/Sensor nivel de combustible.png">
            </div>

            <!-- Punto 13 -->
            <div class="sensor-point" style="top:9.5%; left:34%;">
                <div class="sensor-label">ANTENA RFID </div>
                <img src="./images/Antena RFID.png">
            </div>

            <div class="sensor-point boton-mas" style="top:8%; left:96%; z-index:2000;">
                <img style="scale:1.1;" src="./images/mas.png">
            </div>

        </div>




    </div>


    <!-- ===================================================== -->
    <!-- SECCIÓN: INDUSTRIAS -->
    <!-- ===================================================== -->
    <section class="container-fluid py-3 text-center d-flex justify-content-center">

        <div class="seccion" id="Industrias">
            <div class="col-center">
                <h2><span>Industrias</span></h2>
            </div>
        </div>

    </section>


    <!-- ===================================================== -->
    <!-- SECCIÓN: DATALOGGERS INDUSTRIALES -->
    <!-- ===================================================== -->
    <section class="impacto-section">

        <div class="impacto-container">

            <h2 class="impacto-title">
                ¿DÓNDE IMPACTAN ESTAS SOLUCIONES?
            </h2>

            <p class="impacto-subtitle">
                Optimización de Almacenamiento y Operaciones
            </p>

            <div class="impacto-categorias">

                <div class="categoria">
                    <div class="categoria-header">ALMACENES</div>
                    <div class="categoria-body">
                        <div class="item">AUTOMATIZACIÓN INTERNA</div>
                        <div class="item">REDUCCIÓN DE ERRORES</div>
                        <div class="item">OPERACIÓN 24/7</div>
                    </div>
                </div>

                <div class="categoria">
                    <div class="categoria-header">CENTROS DE DISTRIBUCIÓN</div>
                    <div class="categoria-body">
                        <div class="item">CONTROL AMBIENTAL</div>
                        <div class="item">RASTREO DE INVENTARIOS</div>
                        <div class="item">SLA Y AUDITORÍA</div>
                    </div>
                </div>

                <div class="categoria">
                    <div class="categoria-header">LOGÍSTICA Y TRANSPORTE</div>
                    <div class="categoria-body">
                        <div class="item">VISIBILIDAD DE ACTIVOS</div>
                        <div class="item">ALERTAS CRÍTICAS</div>
                        <div class="item">TRAZABILIDAD COMPLETA</div>
                    </div>
                </div>

            </div>

            <h2>
                ¿No sabes qué solución se adapta mejor a tu proyecto?<br>
                Agenda una asesoría con nuestros expertos.
            </h2>

            <a href="https://api.whatsapp.com/send?phone=525554316718&text=Buen%20día,%20me%20gustaría%20agendar%20una%20Asesoria%20con%20ustedes.%20¿Podrían%20compartirme%20disponibilidad,%20por%20favor?"
                class="banner-cta" target="_blank">
                Agendar una Asesoria
            </a>

        </div>

    </section>
    <!-- ===================================================== -->
    <!-- SECCIÓN: VENTAJAS -->
    <!-- ===================================================== -->
    <section class="container-fluid py-3 text-center d-flex justify-content-center">
        <div class="seccion" id="Ventajas">
            <div class="col-center">
                <h2><span>Ventajas</span></h2>
            </div>
        </div>
    </section>

    <section class="container px-md-5 px-4 py-3 text-center d-flex justify-content-center">

        <!-- Descripción general de beneficios -->
        <p>
            Nuestras soluciones integradas ofrecen una
            <strong>reducción drástica de costos operativos</strong>
            gracias a la automatización de alto rendimiento y eficiencia energética.
            Garantizamos <strong>máxima seguridad industrial</strong> con navegación inteligente
            y sensores 360° para entornos colaborativos.
            Además, obtendrá <strong>trazabilidad total en tiempo real</strong>
            y cumplimiento normativo estricto, integrado ágilmente a su
            <strong>ERP o WMS actual</strong> sin infraestructura compleja.
        </p>

    </section>


    <!-- ===================================================== -->
    <!-- SECCIÓN: ESTADÍSTICAS (COUNTER ANIMADO) -->
    <!-- ===================================================== -->
    <section class="stats-section">

        <!-- 30% Reducción -->
        <div class="stat-card">
            <svg viewBox="0 0 100 100" class="stat-icon">
                <path d="M15 70 L40 45 L60 60 L85 25" class="svg-path" />
            </svg>
            <h2 class="stat-number" data-target="30">0</h2>
            <p>Reducción en Costos Operativos (%)</p>
        </div>

        <!-- 24/7 Operación -->
        <div class="stat-card">
            <svg viewBox="0 0 100 100" class="stat-icon">
                <path d="M50 20 A30 30 0 1 1 49.9 20" class="svg-path" />
                <line x1="50" y1="50" x2="50" y2="30" class="svg-path" />
            </svg>
            <h2 class="stat-number" data-target="24">0</h2>
            <p>Operación Continua (Horas)</p>
        </div>

        <!-- 99.9% Precisión -->
        <div class="stat-card">
            <svg viewBox="0 0 100 100" class="stat-icon">
                <path d="M20 50 L40 70 L80 30" class="svg-path" />
            </svg>
            <h2 class="stat-number" data-target="99.9">0</h2>
            <p>Precisión en Inventarios (%)</p>
        </div>

    </section>


    <!-- ===================================================== -->
    <!-- SECCIÓN: CATÁLOGOS -->
    <!-- ===================================================== -->
    <section class="container-fluid py-3 text-center d-flex justify-content-center">
        <div class="seccion" id="Catalogos">
            <div class="col-center">
                <h2><span>Catálogos</span></h2>
            </div>
        </div>
    </section>

    <!-- =======================
   GALERÍA 3D CATÁLOGOS
======================= -->

    <section class="catalog-3d-section">

        <div class="catalog-wrapper">

            <button class="nav-btn prev">&#10094;</button>

            <div class="catalog-3d">

                <div class="catalog-item">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/Tecnologia-que-impulsa-la-Logistica-4.0.pdf"
                        target="_blank">
                        <img src="./images/Tecnologia-que-impulsa-la-Logistica-4.0.webp" alt="Catálogo Logística 4.0">
                    </a>
                </div>

                <div class="catalog-item">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/logistica-moderna.pdf" target="_blank">
                        <img src="./images/logistica-moderna.webp" alt="Catálogo Logística Moderna">
                    </a>
                </div>

                <div class="catalog-item">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/quasi-brochure.pdf" target="_blank">
                        <img src="https://www.logicbus.com.mx/pdf/catalogos/quasi-brochure.webp" alt="Catálogo Quasi">
                    </a>
                </div>

                <div class="catalog-item">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/Madgetech-Catalogo.pdf" target="_blank">
                        <img src="https://www.logicbus.com.mx/pdf/catalogos/Madgetech-Catalogo.webp"
                            alt="Catálogo Madgetech">
                    </a>
                </div>

                <div class="catalog-item">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/LoggerFlex-e-Catalog.pdf" target="_blank">
                        <img src="https://www.logicbus.com.mx/pdf/catalogos/LoggerFlex-e-Catalog.webp"
                            alt="Catálogo LoggerFlex">
                    </a>
                </div>

            </div>

            <button class="nav-btn next">&#10095;</button>

        </div>
    </section>



    <!-- ===================================================== -->
    <!-- SECCIÓN: CONTACTO / FORMULARIO -->
    <!-- ===================================================== -->
    <section class="contenedor">

        <!-- Texto CTA -->
        <div class="texto">
            <h2>¿Te gustaría agendar una demo en tu almacen?</h2>
            <p>
                Agenda tu cita hoy mismo y descubre cómo nuestras soluciones pueden optimizar la eficiencia,
                reducir costos y transformar la operación de tu industria.
            </p>
        </div>

        <!-- Formulario embebido -->
        <div class="encuesta">
            <iframe src="https://tienda.logicbus.mx/encuesta-expo-logistics-2026" class="biframe" loading="lazy"
                title="Formulario de Contacto">
            </iframe>
        </div>

    </section>

    <!-- ===================================================== -->
    <!-- LIBRERÍAS JS -->
    <!-- ===================================================== -->
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $flickity_js; ?>


    <!-- ===================================================== -->
    <!-- FUNCIONES INTERACTIVAS -->
    <!-- ===================================================== -->
    <script>
    /* =====================================================
   Toggle del carrusel dentro de una card
===================================================== */
    function toggleCarousel(imgContainer) {
        const card = imgContainer.closest('.card');
        const carousel = card.querySelector('.carousel-section');

        // Alternar clase en lugar de manipular style directamente
        carousel.classList.toggle('d-none');
    }


    /* =====================================================
       Actualizar imagen principal y texto
    ===================================================== */
    function updateMainImage(event, thumb, text) {

        event.stopPropagation();

        const card = thumb.closest('.card');
        const mainImg = card.querySelector('.main-img');
        const infoDisplay = card.querySelector('.info-display');

        // Cambiar imagen principal
        mainImg.src = thumb.src.replace('w=100', 'w=400');

        // Actualizar texto descriptivo
        infoDisplay.innerText = text;

        // Manejar clase activa en thumbnails
        card.querySelectorAll('.thumb')
            .forEach(i => i.classList.remove('active'));

        thumb.classList.add('active');
    }


    /* =====================================================
       Mostrar catálogo por categoría
    ===================================================== */
    function showCatalog(categoryId) {

        // 1️⃣ Mostrar sección principal
        const section = document.getElementById('catalogSection');
        section.style.display = "block";

        // 2️⃣ Ocultar todos los productos
        document.querySelectorAll('.spec-content')
            .forEach(el => el.classList.add('d-none'));

        // 3️⃣ Mostrar el seleccionado
        const target = document.getElementById('product-' + categoryId);

        if (target) {
            target.classList.remove('d-none');

            setTimeout(() => {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 100);
        } else {
            console.log("No se encontró:", 'product-' + categoryId);
        }
    }
    </script>

  



    <script>
    /* =====================================================
   ANIMACIÓN DE ESTADÍSTICAS CON INTERSECTION OBSERVER
===================================================== */

    document.addEventListener("DOMContentLoaded", () => {

        const statsSection = document.querySelector('.stats-section');

        // Evitar errores si la sección no existe
        if (!statsSection) return;

        let alreadyAnimated = false;

        const observer = new IntersectionObserver((entries, observer) => {

            entries.forEach(entry => {

                if (entry.isIntersecting && !alreadyAnimated) {
                    alreadyAnimated = true;
                    animateStats();
                    observer.unobserve(statsSection); // dejar de observar
                }

            });

        }, {
            threshold: 0.4
        });

        observer.observe(statsSection);


        /* =====================================================
           Función principal de animación
        ===================================================== */
        function animateStats() {

            document.querySelectorAll('.stat-card').forEach(card => {

                const number = card.querySelector('.stat-number');
                const paths = card.querySelectorAll('.svg-path');

                const target = parseFloat(number.dataset.target);
                const duration = 2000;
                const start = performance.now();

                // Precalcular longitud del SVG UNA SOLA VEZ
                const pathLengths = [];

                paths.forEach((path, index) => {
                    const length = path.getTotalLength();
                    pathLengths[index] = length;

                    path.style.strokeDasharray = length;
                    path.style.strokeDashoffset = length;
                });

                function animate(time) {

                    const progress = Math.min((time - start) / duration, 1);
                    const currentValue = target * progress;

                    // Si es decimal como 99.9
                    if (target % 1 !== 0) {
                        number.textContent = currentValue.toFixed(1);
                    } else {
                        number.textContent = Math.floor(currentValue);
                    }

                    // Animar SVG usando valores precalculados
                    paths.forEach((path, index) => {
                        path.style.strokeDashoffset =
                            pathLengths[index] * (1 - progress);
                    });

                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    }
                }

                requestAnimationFrame(animate);
            });
        }

    });
    </script>
    <script>
    const toggle = document.getElementById("amrToggle");
    const image = document.getElementById("amrImg");

    toggle.addEventListener("change", function() {
        image.src = this.checked ?
            "./images/con_logic_2.webp" :
            "./images/sin_logicbus2.webp";
    });
    </script>

    <script>
    const items = document.querySelectorAll(".catalog-item");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    let current = 2; // Empieza centrado

    function updateCarousel() {

        items.forEach((item, index) => {

            const offset = index - current;

            if (offset === 0) {
                item.style.transform = "translateX(0) scale(1.2)";
                item.style.zIndex = "5";
                item.style.opacity = "1";
            } else if (offset === -1) {
                item.style.transform = "translateX(-280px) rotateY(30deg) scale(0.9)";
                item.style.zIndex = "4";
                item.style.opacity = "0.8";
            } else if (offset === 1) {
                item.style.transform = "translateX(280px) rotateY(-30deg) scale(0.9)";
                item.style.zIndex = "4";
                item.style.opacity = "0.8";
            } else {
                item.style.transform = "translateX(" + (offset * 300) + "px) scale(0.6)";
                item.style.zIndex = "1";
                item.style.opacity = "0";
            }

        });
    }

    nextBtn.addEventListener("click", () => {
        current = (current + 1) % items.length;
        updateCarousel();
    });

    prevBtn.addEventListener("click", () => {
        current = (current - 1 + items.length) % items.length;
        updateCarousel();
    });

    updateCarousel();
    </script>

    <script>
    const boton = document.querySelector(".boton-mas");
    const contenedor = document.querySelector("div[style*='relative']");

    boton.addEventListener("click", () => {
        contenedor.classList.toggle("mostrar-cards");
    });
    </script>




<!-- btn Whatsapp -->
<a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,%20me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n" class="btn-wsp" target="_blank">
    <i class="fa fa-whatsapp icono"></i>
</a>
<!-- end btn whatsapp -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = "https://embed.tawk.to/5ca674ff1de11b6e3b06f73d/default";
        s1.charset = "UTF-8";
        s1.setAttribute("crossorigin", "*");
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

<footer class="main-footer">
    <div class="footer-container">

        <!-- ===== FILA 1 ===== -->
        <div class="footer-top">

            <!-- Columna 1 -->
            <div class="footer-column">
                <h3>Navegación</h3>
                <ul>
                    <li><a href="https://www.logicbus.com.mx/">Inicio</a></li>
                    <li><a href="https://www.logicbus.com.mx/productos">Productos</a></li>
                    <li><a href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/">Aplicaciones</a></li>
                    <li><a href="https://www.logicbus.com.mx/empresa">Empresa</a></li>
                    <li><a href="https://www.logicbus.com.mx/infografias">Infografías</a></li>
                    <li><a href="https://www.logicbus.com.mx/servicios">Servicios</a></li>
                    <li><a href="https://www.logicbus.com.mx/eventos">Eventos</a></li>
                    <li><a href="https://www.logicbus.com.mx/contacto">Contacto</a></li>
                    <li><a href="https://www.logicbus.com.mx/blog/">Blog</a></li>
                </ul>

                <h3>Enlaces</h3>
                <ul>
                    <li><a href="https://tienda.logicbus.com.mx/">Tienda en México</a></li>
                    <li><a href="https://www.logicbus.com/">Tienda en USA</a></li>
                    <li><a href="https://www.logicbus.com.mx/soporte#faqs">¿Cómo Comprar?</a></li>
                    <li><a href="https://www.logicbus.com.mx/bolsa-de-trabajo/">Bolsa de Trabajo</a></li>
                    <li><a href="https://www.logicbus.com.mx/distribuidores-integradores">Integradores</a></li>
                    <li><a href="https://www.logicbus.com.mx/marcas-logicbus">Marcas</a></li>
                    <li><a href="https://www.logicbus.com.mx/clientes-logicbus">Clientes</a></li>
                </ul>
            </div>

            <!-- Columna 2 -->
            <div class="footer-column">
                <h3>Información</h3>
                <ul>
                    <li><a href="https://www.logicbus.com.mx/pdf/catalogos/CATALOGO-MEXICO-2026.pdf">Catálogo</a></li>
                    <li><a href="https://www.logicbus.com.mx/documentos">Documentación</a></li>
                    <li><a href="https://www.logicbus.com.mx/videos">Videos</a></li>
                    <li><a href="https://www.logicbus.com.mx/seccion-informativa">Sección Informativa</a></li>
                    <li><a href="https://www.logicbus.com.mx/soporte">Soporte</a></li>
                    <li><a href="https://www.logicbus.com.mx/soporte#faqs">Preguntas Frecuentes</a></li>
                    <li><a href="https://www.logicbus.com.mx/Glosario">Glosario</a></li>
                </ul>
            </div>

            <!-- Columna 3 -->
            <div class="footer-column">
                <h3>Oficina en México</h3>
                <p>
                    Logicbus S.A. De C.V.<br>
                    Av. Miguel Hidalgo 1443<br>
                    Piso 6<br>
                    Col Americana<br>
                    Guadalajara, México
                </p>

                <strong style="color: #2a5c84;">México</strong>
                <p>Tel: +52 33 3854 5975</p>
                <p>Tel: +52 33 3823 4349</p>
                <p>WhatsApp: +52 55 5431 6718</p>
                <p>WhatsApp: +52 33 3443 8556</p>
            </div>

            <!-- Columna 4 -->
            <div class="footer-column">
                <h3>Oficina en USA</h3>
                <p>
                    Logicbus INC<br>
                    863 Bowsprit Road<br>
                    Chula Vista, CA
                </p>

                <strong style="color: #2a5c84;">USA</strong>
                <p>+1 619 616 7350</p>
                <p>+1 619 600 1015</p>
            </div>

        </div>

        <!-- ===== FILA 2 ===== -->
        <div class="footer-bottom">

            <!-- Métodos -->
            <div class="footer-box">
                <h3>Métodos de pago</h3>
                <img src="https://www.logicbus.com.mx/assets/pay-methods-color.webp">
                <p>Transferencias electrónicas</p>
            </div>

            <div class="footer-box">
                <h3>Métodos de envío</h3>
                <img src="https://www.logicbus.com.mx/assets/shipping-methods.webp">
                <p>Envíos a todo el mundo</p>
            </div>

            <div class="footer-box">
                <h3>Marketplaces</h3>
                <div class="logos">
                    <img style="max-width: 50px; max-height: 50px;" src="https://www.logicbus.com.mx/assets/mercado-libre.webp">
                    <img style="max-width: 50px; max-height: 50px;"   src="https://www.logicbus.com.mx/assets/amazon.webp">
                    <img style="max-width: 50px; max-height: 50px;"   src="https://www.logicbus.com.mx/assets/ebay.webp">
                </div>
            </div>

            <!-- Redes -->
<div class="footer-box redes">

    <h3>Redes en español</h3>

    <div class="icons">
        <a href="https://www.facebook.com/logicbus/" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/facebook.svg">
        </a>
        <a href="https://www.instagram.com/logicbus_sa/" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/instagram.svg">
        </a>
        <a href="https://www.youtube.com/channel/UCGYjB-qzlDGvtd9BCrGTOJQ?sub_confirmation=1" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/youtube.svg">
        </a>
        <a href="https://www.tiktok.com/@logicbus" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/tiktok.svg">
        </a>
        <a href="https://www.pinterest.com.mx/logicbusMX/" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/pinterest.svg">
        </a>
    </div>

    <div class="icons">
        <a href="https://api.whatsapp.com/send?phone=525554316718" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/whatsapp.svg">
        </a>
        <a href="https://www.linkedin.com/company/logicbus" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/linkedin.svg">
        </a>
        <a href="https://twitter.com/Logicbus" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/twitter.svg">
        </a>
        <a href="https://www.logicbus.com.mx/blog/" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/blog.svg">
        </a>
    </div>

    <h3>Redes en inglés</h3>

    <div class="icons">
        <a href="https://www.facebook.com/LogicbusINC" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/facebook.svg">
        </a>
        <a href="https://www.instagram.com/logicbus_inc/" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/instagram.svg">
        </a>
        <a href="https://www.youtube.com/@logicbusinc2138" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/youtube.svg">
        </a>
        <a href="https://www.linkedin.com/company/logicbus-inc/" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/linkedin.svg">
        </a>
        <a href="https://blog.logicbus.com/" target="_blank">
            <img src="https://www.logicbus.com.mx/assets/blog.svg">
        </a>
    </div>

    <button class="btn-news">Inscríbete nuestro boletín</button>
        </div>

    </div>
</footer>

<style>
body {
    margin: 0;
    font-family: Arial;
}

/* CONTENEDOR */
.footer-container {
    max-width: 1300px;
    margin: auto;
    padding: 40px 20px;
}

/* FILA 1 */
.footer-top {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

/* FILA 2 */
.footer-bottom {
    margin-top: 30px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

/* COLUMNAS */
.footer-column h3,
.footer-box h3 {
    font-size: 13px;
    margin-bottom: 10px;
    color: #2a5c84;
}

.footer-column p,
.footer-column li,
.footer-box p {
    font-size: 11px;
}

/* LISTAS */
.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 4px;
}

/* IMÁGENES */
.footer-box img {
    width: 120px;
    margin-bottom: 10px;
}

/* MARKETPLACE */
.logos {
    display: flex;
    gap: 10px;
}

/* 🔥 REDES (ARREGLADO) */
.footer-box.redes {
    min-width: 220px;
    display: flex;
    flex-direction: column;
}

.icons {
    display: grid;
    grid-template-columns: repeat(5, auto); /* 👈 5 por fila */
    gap: 12px;
    justify-content: start;
    margin-bottom: 10px;
}

.icons a {
    display: flex;
    justify-content: center;
    align-items: center;
}

a {
    color: #000000 ;
}

.icons img {
    width: 28px;
    height: 28px;
    object-fit: contain;
    transition: transform 0.2s;
}

.icons img:hover {
    transform: scale(1.1);
}

/* BOTÓN */
.btn-news {
    margin-top: 10px;
    padding: 8px 12px;
    background: #2a5c84;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 11px;
}

/* RESPONSIVE */
@media(max-width: 900px) {
    .footer-top,
    .footer-bottom {
        grid-template-columns: 1fr;
    }
}
</style>