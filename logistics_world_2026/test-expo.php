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

    <link rel="stylesheet" href="style_navbar.css">

    <link rel="stylesheet" href="style_card.css">
    <link rel="stylesheet" href="style_baner.css">

</head>



<body>

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
                <img src="https://www.logicbus.com.mx/imagenes/logicbus.png" alt="Logicbus">
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
            <img class="logicbus-icon" src="./images/Logicleaner_icon.png" alt="Productos">
        </a>

        <!-- Industrias -->
        <a href="#Industrias" class="logicbus-nav-item">
            <img class="logicbus-icon" src="./images/Industrias_icon.png" alt="Industrias">
        </a>

        <!-- Ventajas -->
        <a href="#Ventajas" class="logicbus-nav-item">
            <img class="logicbus-icon" src="./images/Ventajas_icono.png" alt="Ventajas">
        </a>

        <!-- Catálogos -->
        <a href="#Catalogos" class="logicbus-nav-item">
            <img class="logicbus-icon" src="./images/Catalogo_icono.png" alt="Catálogos">
        </a>

        <!-- WhatsApp Directo -->
        <a href="https://api.whatsapp.com/send?phone=525554316718" class="logicbus-nav-item">
            <img class="logicbus-icon" src="./images/Whats_icono.png" alt="WhatsApp">
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

                    <span class="badge-click">CLICK AQUÍ</span>
                    <span class="contenido">
                        <span class="icono">📅</span>
                        EXCLUSIVO EXPO LOGISTICS SUMMIT
                    </span>

                </a>

                <!-- Título principal -->
                <h1 class="banner-title text-start">
                    Transforma tu Centro Logístico con
                    <span class="banner-title">Automatización Inteligente</span>
                </h1>

                <!-- Descripción -->
                <p class="banner-description">
                    Descubre el futuro de la cadena de suministro. AMRs, limpieza robótica y telemetría avanzada
                    para maximizar tu eficiencia operativa.
                </p>

                <!-- Botón principal -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20gustar%C3%ADa%20agendar%20una%20asesor%C3%ADa.%20Los%20vi%20en%20The%20Logistics%20World%20Expo."
                    class="banner-cta">
                    Agenda una asesoría en la Expo
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
                <img src="./images/transporte autonomo de materiales.png" alt="AMR Transporte Autónomo"
                    class="main-img">
            </div>

            <!-- Carrusel de miniaturas -->
            <div class="carousel-section">
                <div class="carousel-track">

                    <!-- Miniaturas -->
                    <img class="thumb active" src="./images/Quasi_C2.png" onclick="updateMainImage(this, 'Quasi C2')">

                    <img class="thumb" src="./images/L1000_1.png" onclick="updateMainImage(this, 'Youibot L1000')">

                    <img class="thumb" src="./images/L300.jpg" onclick="updateMainImage(this, 'Youibot L300')">

                    <img class="thumb" src="./images/ft2000_1.jpg" onclick="updateMainImage(this, 'Autoxing FT2000')">
                </div>

                <!-- Nombre dinámico del modelo -->
                <div class="info-display">Quasi C2</div>
            </div>

            <!-- Cuerpo de la card -->
            <div class="card-body">
                <h2>Traslado interno autonomo de materiales ligeros</h2>

                <!-- 🔶 BLOQUE 40x40 -->
                <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20equipos%20de%20traslado%20interno%20aut%C3%B3nomo%20de%20materiales%20ligeros."
                    class="cotizar-badge" target="_blank">
                    Contactar cita
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
                <span class="badge">Limpieza autonoma</span>
                <img src="./images/Logicleaner_4.png" alt="Logicleaner Industrial" class="main-img">
            </div>

            <div class="carousel-section">
                <div class="carousel-track">

                    <img class="thumb active" src="./images/Logicleaner_1.png"
                        onclick="updateMainImage(this, 'Sensor LIDAR 360°')">

                    <img class="thumb" src="./images/Logicleaner_2.png"
                        onclick="updateMainImage(this, 'Chasis robusto de chapa metálica')">

                    <img class="thumb" src="./images/Logicleaner_3.png"
                        onclick="updateMainImage(this, 'Motor industrial de alto torque')">

                    <img class="thumb" src="./images/Logicleaner_4.png"
                        onclick="updateMainImage(this, 'Cepillos duales')">
                </div>

                <div class="info-display">Chasis reforzado</div>
            </div>

            <div class="card-body">
                <h2>Limpieza autonoma de zonas comunes</h2>

                <div class="btn-container">
                    <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20soluciones%20de%20limpieza%20aut%C3%B3noma%20de%20zonas%20comunes."
                        class="btn-agendar">Más información</a>
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
                <img src="./images/dataloggers.png" alt="Data Loggers Industriales" class="main-img">
            </div>

            <div class="carousel-section">
                <div class="carousel-track">

                    <img class="thumb active" src="./images/loggerflex_2.webp"
                        onclick="updateMainImage(this, 'EDCLGE')">

                    <img class="thumb" src="./images/loggerflex_3.webp" onclick="updateMainImage(this, 'ESMOBI')">

                    <img class="thumb" src="./images/RFRHTEMP2000A_01.png"
                        onclick="updateMainImage(this, 'RFRHTemp2000A')">

                    <img class="thumb" src="./images/OM-CP-RFRHTEMP2000A_1.jpg"
                        onclick="updateMainImage(this, 'RFTemp2000A')">
                </div>

                <div class="info-display">EDCLGE</div>
            </div>

            <div class="card-body">
                <h2>Registradores de datos</h2>

                <div class="btn-container">
                    <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20registradores%20de%20datos%20industriales."
                        class="btn-agendar">Más información</a>
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
                <img src="./images/RASTREADOR.png" alt="Qualcomm Aware Tracker" class="main-img">
            </div>

            <div class="carousel-section">
                <div class="carousel-track">

                    <img class="thumb active" src="./images/qualcomm_2.webp"
                        onclick="updateMainImage(this, 'Diseño Mini')">

                    <img class="thumb" src="./images/qualcomm_3.jpg" onclick="updateMainImage(this, 'Fácil de usar')">
                </div>

                <div class="info-display">Qualcomm Aware</div>
            </div>

            <div class="card-body">
                <h2>Rastreador IOT</h2>

                <div class="btn-container">
                    <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%2C%20me%20interesar%C3%ADa%20saber%20m%C3%A1s%20acerca%20de%20sus%20soluciones%20de%20rastreador%20IoT."
                        class="btn-agendar">Más información</a>
                    <button class="btn-ver-mas" onclick="showCatalog('slim')">
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
        <div class="product-detail-card">

            <!-- Imagen del producto -->
            <div class="detail-img-wrapper">
                <img src="./images/Quasi_C2.png" alt="Quasi C2 AMR">
            </div>

            <!-- Especificaciones técnicas -->
            <div class="detail-content">
                <h3>Quasi C2 - Manipulación Colaborativa</h3>

                <table class="full-specs">
                    <tr>
                        <td class="label-tech">Capacidad de Carga:</td>
                        <td>35 kg (Bandeja superior) / 250 kg (Arrastre)</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Navegación:</td>
                        <td>vSLAM Visual + LiDAR 2D (Sin infraestructura)</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Seguridad Activa:</td>
                        <td>Sensores 360°, detección de personas, frenado &lt; 0.2s</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Batería:</td>
                        <td>Litio LiFePO4 / 8-10h autonomía / Auto-docking</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Conectividad:</td>
                        <td>Wi-Fi Dual Band / API WMS-ERP</td>
                    </tr>
                </table>
            </div>
        </div>


        <!-- ======================================================
         PRODUCTO 2 - YOUIBOT L1000
         Tipo: Transporte de carga pesada
    ====================================================== -->
        <div class="product-detail-card">

            <div class="detail-img-wrapper">
                <img src="./images/L1000_1.png" alt="Youibot L1000">
            </div>

            <div class="detail-content">
                <h3>Youibot L1000 - Carga Pesada</h3>

                <table class="full-specs">
                    <tr>
                        <td class="label-tech">Capacidad de Carga:</td>
                        <td>1,000 kg (1 Tonelada Métrica)</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Mecanismo:</td>
                        <td>Módulo de elevación rotativo (Jack-up) para pallets</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Precisión:</td>
                        <td>±5 mm (Posicionamiento) / ±1° (Ángulo)</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Navegación:</td>
                        <td>Hybrid SLAM (Láser + Percepción de contornos)</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Entorno:</td>
                        <td>Grado Industrial IP54 / Operación 24/7</td>
                    </tr>
                </table>
            </div>
        </div>


        <!-- ======================================================
         PRODUCTO 3 - YOUIBOT L300
         Tipo: Diseño Slim para espacios reducidos
    ====================================================== -->
        <div class="product-detail-card">

            <div class="detail-img-wrapper">
                <img src="./images/L300.jpg" alt="Youibot L300">
            </div>

            <div class="detail-content">
                <h3>Youibot L300 - Versatilidad Slim</h3>

                <table class="full-specs">
                    <tr>
                        <td class="label-tech">Capacidad de Carga:</td>
                        <td>300 kg</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Dimensiones:</td>
                        <td>Ultra-Slim (Pasillos desde 800 mm)</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Velocidad Máx:</td>
                        <td>1.5 m/s (Carga completa)</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Navegación:</td>
                        <td>Láser SLAM + Cámara 3D (Obstacle Avoidance)</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Mantenimiento:</td>
                        <td>Arquitectura modular (Cambio rápido de componentes)</td>
                    </tr>
                </table>
            </div>
        </div>


        <!-- ======================================================
         PRODUCTO 4 - AUTOXING FT2000
         Tipo: Logística interior avanzada
    ====================================================== -->
        <div class="product-detail-card">

            <div class="detail-img-wrapper">
                <img src="./images/ft2000_1.jpg" alt="Autoxing FT2000">
            </div>

            <div class="detail-content">
                <h3>Autoxing FT2000 - Logística de Interiores</h3>

                <table class="full-specs">
                    <tr>
                        <td class="label-tech">Especialidad:</td>
                        <td>Reparto punto a punto en plantas industriales complejas</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Sensores:</td>
                        <td>LiDAR 360° + 4 cámaras RGB-D</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Interacción:</td>
                        <td>Pantalla táctil 10" + Comandos de voz</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Gestión:</td>
                        <td>Control de flotas en la nube (Multi-robot scheduling)</td>
                    </tr>
                    <tr>
                        <td class="label-tech">Pendiente Máx:</td>
                        <td>Hasta 8° de inclinación</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>








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
            "./images/con_logicbus.png" :
            "./images/sin_logicbus.png";
    });
    </script>
    
</body>