<?php require("admin/config.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CINCOZE Sistemas informáticos industriales - Logicbus</title>

    <meta name="description"
        content="Cincoze es un fabricante profesional que ofrece soluciones de sistemas informáticos industriales. Ofrece líneas de computación sin ventilador y de pantalla.">

    <!-- URL Canónica corregida: remueve parámetros de campaña para evitar duplicidad de contenido (SEO) -->
    <link rel="canonical"
        href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>" />

    <!--- Estilos Necesarios-->
    <?php echo $estilos; ?> <!-- CSS General de la marca -->
    <?php echo $css_bundle; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        #leftBar {
            display: none;
        }

        /* BANNER FULL WIDTH */
        .banner-full {
            width: 100%;
            margin-bottom: 3rem;
        }

        .banner-full img {
            width: 100%;
            height: auto;
            display: block;
        }

        a {
            color: var(--lb-accent);
            /* Naranja Logicbus */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--lb-primary);
            /* Azul Logicbus */
            text-decoration: none;
        }

        /* Enlaces en títulos */
        .product-card h4 a,
        .article-card h3 a {
            color: var(--lb-primary) !important;
        }

        .product-card h4 a:hover,
        .article-card h3 a:hover {
            color: var(--lb-accent) !important;
        }

        /* ==========================================================================
           Sección: Líneas de Producto (Series) - CSS Integrado
           ========================================================================== */
        .bg-light-accent {
            background-color: #f8f9fa;
        }

        .lineas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            align-items: stretch;
        }

        .linea-card {
            background-color: #ffffff;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .linea-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
        }

        .linea-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-bottom: 1px solid #f3f4f6;
        }

        .linea-card ul a {
            transition: color 0.2s ease;
        }

        .linea-card ul a:hover {
            color: #17a2b8 !important;
            text-decoration: underline !important;
        }

        .btn-circle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #1a4a75;
            color: #ffffff !important;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
            text-align: center;
        }

        .btn-circle:hover {
            background-color: #113250;
            transform: scale(1.05);
            color: #ffffff;
        }

        /* ========================================================================== */

        /* Grid de Novedades / Últimos Lanzamientos */
        .novedades-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 2rem;
        }

        .novedad-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border: 1px solid #eee;
            transition: transform 0.3s ease;
        }

        .novedad-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .novedad-card img {
            width: 100%;
            height: 200px;
            object-fit: contain;
            background-color: #fff;
            padding: 10px;
            border-bottom: 1px solid #f3f4f6;
        }

        .novedad-card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .novedad-card h3 {
            font-size: 1.1rem;
            color: var(--lb-primary);
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }

        .novedad-card ul {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 20px;
            padding-left: 20px;
            flex-grow: 1;
        }

        .novedad-card ul li {
            margin-bottom: 8px;
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
        }

        .article-card h3 {
            font-size: 1.1rem;
            color: var(--lb-primary);
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Grid de Productos */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 2rem;
        }

        .product-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            border: 1px solid #eaeaea;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            max-height: 160px;
            object-fit: contain;
            margin: 0 auto 15px auto;
            width: 100%;
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

        .btn-wsp {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            padding: 0 !important;
            text-decoration: none !important;
        }

        .btn-wsp .icono {
            margin: 0 !important;
            padding: 0 !important;
            line-height: 1 !important;
            display: block !important;
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
                <li class="breadcrumb-item active" aria-current="page">Cincoze</li>
            </ol>
        </nav>
    </div>

    <!-- Banner 100% Ancho -->
    <div class="banner-full">
        <img fetchpriority="high" src="images/banner/www/banner-cincoze.webp" alt="Cincoze" title="Cincoze">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">CINCOZE</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">Sistemas
            informáticos industriales</span>
    </h1>

    <!-- Texto de introducción -->
    <div class="container mb-5">
        <p class="intro-text text-justify mx-auto" style="max-width: 900px;">
            <b>CINCOZE</b> es un fabricante especializado en sistemas de computación industrial y embebida, orientados a
            aplicaciones de <b>Edge Computing</b> y <b>AIoT</b> (Artificial Intelligence of Things). Sus equipos están
            diseñados para integrar sin problemas la Inteligencia Artificial con el Internet de las Cosas en entornos
            críticos.<br><br>
            El nombre "CINCOZE" deriva del término "synchronize" (sincronizar), lo cual simboliza su firme compromiso
            con la integración fluida y eficiente. CINCOZE diseña, desarrolla y fabrica computadoras robustas para
            entornos hostiles, ofreciendo Monitores Industriales, Computadoras sin ventilador y Panel PCs (Todo-en-Uno).
        </p>
    </div>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/cincoze" target="_blank"
            rel="noopener noreferrer">Ver en Tienda</a>
        <a class="btn-circle" href="#series">Líneas de Producto</a>
        <a class="btn-circle" href="#novedades">Novedades</a>
        <a class="btn-circle" href="#productos">Equipos Destacados</a>
        <a class="btn-circle" href="#catalogos">Documentación</a>
        <a class="btn-circle" href="#videos">Videos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
    </nav>

    <!-- Líneas de producto: Diamond, Crystal, Gold y Magnet -->
    <div class="bg-light-accent py-5" id="series">
        <div class="container">
            <p class="text-center text-muted mb-5" style="max-width: 800px; margin-left:auto; margin-right:auto;">
                CINCOZE organiza su catálogo en cuatro líneas de producto. Cada una responde a una necesidad distinta:
                cómputo robusto, visualización industrial, aceleración por GPU o integración directa en maquinaria.
            </p>

            <!-- Bloque 1: Diamond -->
            <div class="row align-items-center g-4 mb-5">
                <div class="col-md-5 text-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/cincoze/Diamond-Series-2023.webp"
                        alt="Línea Diamond Cincoze" class="img-fluid rounded shadow-sm border">
                </div>
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3 class="font-weight-bold" style="color: var(--lb-primary);"><i
                                class="fa fa-diamond text-info"></i> LÍNEA DIAMOND</h3>
                        <p class="text-muted text-justify">La línea de computadoras embebidas robustas de Cincoze está
                            diseñada específicamente para las necesidades de Edge Computing en entornos industriales
                            hostiles. Cuenta con siete series principales que no solo brindan protección de grado
                            industrial, sino que también cumplen con los estándares y certificaciones ambientales, de
                            compatibilidad electromagnética (EMC) y de seguridad pertinentes. Con una amplia gama de
                            rendimiento, capacidad de expansión, tamaño, consumo de energía y certificaciones de la
                            industria, garantiza que se satisfagan las necesidades críticas de aplicaciones específicas
                            de los clientes en entornos exigentes.</p>
                        <ul class="small mb-3">
                            <li><a href="https://tienda.logicbus.com.mx/Alto-rendimiento-y-ampliable-serie-DS_c_4379.html"
                                    target="_blank" rel="noopener noreferrer">Alto rendimiento PCIe (Serie DS)</a></li>
                            <li><a href="https://tienda.logicbus.com.mx/Rendimiento-extremo-y-tama%C3%B1o-compacto-serie-DX_c_4377.html"
                                    target="_blank" rel="noopener noreferrer">Alto rendimiento compacto (Serie DX)</a>
                            </li>
                            <li><a href="https://tienda.logicbus.com.mx/Alto-rendimiento-y-esencial-serie-DV_c_5325.html"
                                    target="_blank" rel="noopener noreferrer">Alto rendimiento E/S básica (Serie DV)</a>
                            </li>
                            <li><a href="https://tienda.logicbus.com.mx/Alto-rendimiento-y-tama%C3%B1o-compacto-serie-DI_c_4378.html"
                                    target="_blank" rel="noopener noreferrer">Rendimiento medio (Serie DI)</a></li>
                            <li><a href="https://tienda.logicbus.com.mx/Potencia-eficiente-y-expandible-serie-DE_c_4380.html"
                                    target="_blank" rel="noopener noreferrer">Nivel inicial PCIe (Serie DE)</a></li>
                            <li><a href="https://tienda.logicbus.com.mx/Energ%C3%ADa-eficiente-y-tama%C3%B1o-de-la-palma-serie-DA_c_4382.html"
                                    target="_blank" rel="noopener noreferrer">Nivel inicial compacto (Serie DC / DA)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bloque 2: Crystal -->
            <div class="row align-items-center g-4 mb-5">
                <div class="col-md-5 text-center order-md-2">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/cincoze/Crystal-Series-2023.webp"
                        alt="Línea Crystal Cincoze" class="img-fluid rounded shadow-sm border">
                </div>
                <div class="col-md-7 order-md-1">
                    <div>
                        <h3 class="font-weight-bold" style="color: var(--lb-primary);"><i
                                class="fa fa-desktop text-info"></i> LÍNEA CRYSTAL</h3>
                        <p class="text-muted text-justify">La línea de productos de monitores y Panel PC industriales de
                            Cincoze incluye seis series diferentes, diseñadas específicamente para aplicaciones HMI en
                            entornos industriales adversos. Dependiendo de los diferentes requisitos de instalación,
                            ofrece Panel PC y monitores industriales adecuados para entornos interiores, Panel PC
                            legibles bajo la luz solar para aplicaciones en exteriores con alto brillo y Panel PC de
                            marco abierto (Open Frame) para la integración con equipos. Con cerca de un centenar de
                            combinaciones de productos disponibles en términos de rendimiento informático, tamaño,
                            proporción y tipos táctiles, puede satisfacer de forma flexible diversas necesidades de
                            aplicación.</p>
                        <ul class="small mb-3">
                            <li><a href="https://tienda.logicbus.com.mx/Panel-PC--Todo-en-uno_c_4185.html"
                                    target="_blank" rel="noopener noreferrer">Panel PC Industrial, Open Frame y Luz
                                    Solar</a></li>
                            <li><a href="https://tienda.logicbus.com.mx/Monitor-t%C3%A1ctil-industrial_c_4392.html"
                                    target="_blank" rel="noopener noreferrer">Monitores Industriales, Open Frame y Luz
                                    Solar</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bloque 3: Gold -->
            <div class="row align-items-center g-4 mb-5">
                <div class="col-md-5 text-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/cincoze/Gold-Series-2023.webp"
                        alt="Línea Gold Cincoze" class="img-fluid rounded shadow-sm border">
                </div>
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3 class="font-weight-bold" style="color: var(--lb-primary);"><i
                                class="fa fa-microchip text-info"></i> LÍNEA GOLD</h3>
                        <p class="text-muted text-justify">En respuesta al rápido desarrollo de la tecnología de IA, la
                            línea de productos de computadoras embebidas con GPU de Cincoze está diseñada
                            específicamente para satisfacer las necesidades de aplicaciones para el reconocimiento de
                            imágenes a gran escala, la toma de decisiones basada en datos y tareas de Machine Learning.
                            Esta línea de productos no solo cuenta con un potente rendimiento de CPU, sino que también
                            es compatible con tarjetas GPU tanto MXM como PEG, proporcionando soluciones adecuadas para
                            tareas de computación de alta carga y análisis complejos requeridos por AIoT en entornos
                            industriales hostiles.</p>
                        <ul class="small mb-3">
                            <li><a href="https://tienda.logicbus.com.mx/Serie-GP-3000_c_4672.html" target="_blank"
                                    rel="noopener noreferrer">Doble ranura completa (Serie GP)</a></li>
                            <li><a href="https://tienda.logicbus.com.mx/Serie-GM-1100_c_8081.html" target="_blank"
                                    rel="noopener noreferrer">Embebida MXM (Serie GM)</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bloque 4: Magnet -->
            <div class="row align-items-center g-4">
                <div class="col-md-5 text-center order-md-2">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/cincoze/Magnet-Series-2025.webp"
                        alt="Línea Magnet Cincoze" class="img-fluid rounded shadow-sm border">
                </div>
                <div class="col-md-7 order-md-1">
                    <div>
                        <h3 class="font-weight-bold" style="color: var(--lb-primary);"><i
                                class="fa fa-th-large text-info"></i> LÍNEA MAGNET</h3>
                        <p class="text-muted text-justify">La línea de productos informáticos para máquinas MAGNET de
                            Cincoze consta de computadoras embebidas para riel DIN destinadas a aplicaciones de visión
                            artificial a nivel de máquina. Ofrece la mejor solución para máquinas inteligentes con tres
                            ventajas principales, que incluyen un excelente rendimiento informático, tamaño compacto y
                            gran escalabilidad. La línea encarna el diseño robusto consistente de Cincoze y cumple con
                            numerosos estándares industriales (resistente a vibraciones, resistente a golpes, EMC,
                            seguridad). La línea MAGNET es ideal para aplicaciones de visión artificial como inspección,
                            medición y visualización, y es una opción de primer nivel para sitios de fabricación
                            inteligente.</p>
                        <ul class="small mb-0">
                            <li><a href="https://tienda.logicbus.com.mx/MD-3000_p_38257.html" target="_blank"
                                    rel="noopener noreferrer">Riel DIN escalable (Serie MD-3000)</a></li>
                            <li><a href="https://tienda.logicbus.com.mx/M%C3%B3dulo-de-expansi%C3%B3n-escalable-serie-SED_c_8134.html" target="_blank"
                                    rel="noopener noreferrer">Módulo expansión deck (Serie SED)</a></li>
                            <li><a href="https://tienda.logicbus.com.mx/M%C3%B3dulo-de-expansi%C3%B3n-escalable-serie-SEM_c_8135.html" target="_blank"
                                    rel="noopener noreferrer">Módulo expansión (Serie SEM)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Novedades / Últimos lanzamientos -->
    <h2 class="section-title mt-5" id="novedades">ÚLTIMOS LANZAMIENTOS CINCOZE</h2>
    <div class="container mb-5">
        <div class="novedades-grid">
            <div class="novedad-card">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/md-3000.jpg"
                    alt="Cincoze MD-3000">
                <div class="novedad-card-body">
                    <h3>MD-3000: Computadora de Riel DIN para Visión Artificial</h3>
                    <ul>
                        <li>Procesadores Intel Core de 12ª a 14ª generación (hasta i9, 65 W)</li>
                        <li>Diseño modular con hasta 6 slots de expansión (SED/SEM)</li>
                        <li>Solo 150 mm de altura, para gabinetes compactos</li>
                        <li>Rango de operación de -40°C a 65°C</li>
                        <li>Ganadora del iF Design Award 2026</li>
                    </ul>
                    <!-- Se agregó style="gap: 15px;" para forzar la separación -->
                    <div class="novedad-links mt-auto d-flex flex-wrap justify-content-center" style="gap: 15px;">
                        <a class="btn-circle" href="https://tienda.logicbus.com.mx/MD-3000_p_38257.html" target="_blank"
                            rel="noopener noreferrer">Ver en Tienda</a>
                        <a class="btn-circle" href="https://tienda.logicbus.com.mx/assets/PDF/272/MD-3000-datasheet.pdf"
                            target="_blank" rel="noopener noreferrer">Ficha oficial</a>
                    </div>
                </div>
            </div>

            <div class="novedad-card">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/dx-1300.jpg"
                    alt="Cincoze DX-1300">
                <div class="novedad-card-body">
                    <h3>DX-1300: Edge Computing Compacto con Intel Core Ultra</h3>
                    <ul>
                        <li>Procesador Intel Core Ultra 200S (Arrow Lake-S)</li>
                        <li>Hasta 36 TOPS de rendimiento de IA (CPU + GPU + NPU)</li>
                        <li>Hasta 96 GB de RAM DDR5 a 6400 MHz</li>
                        <li>Chasis compacto de 242 x 173 x 75 mm</li>
                        <li>Ideal para manufactura, transporte y ferrocarril</li>
                    </ul>
                    <div class="novedad-links mt-auto d-flex flex-wrap justify-content-center" style="gap: 15px;">
                        <a class="btn-circle" href="https://tienda.logicbus.com.mx/DX-1300_p_38580.html" target="_blank"
                            rel="noopener noreferrer">Ver en Tienda</a>
                        <a class="btn-circle" href="https://www.logicbus.com/assets/PDF/272/DX-1300-datasheet.pdf"
                            target="_blank" rel="noopener noreferrer">Ficha oficial</a>
                    </div>
                </div>
            </div>

            <div class="novedad-card">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/cv-221.jpg"
                    alt="Cincoze CV-200">
                <div class="novedad-card-body">
                    <h3>CV-200: Pantallas Industriales de Bisel Ultradelgado</h3>
                    <ul>
                        <li>Bisel de menos de 3 mm en marco de aluminio</li>
                        <li>Tamaños de 10" a 21.5", más de 40 configuraciones</li>
                        <li>Panel frontal IP66 y tecnología Wet Touch</li>
                        <li>Vida útil de retroiluminación de hasta 50,000 horas</li>
                        <li>Compatible con módulos CDS (Panel PC o Monitor)</li>
                    </ul>
                    <div class="novedad-links mt-auto d-flex flex-wrap justify-content-center" style="gap: 15px;">
                        <a class="btn-circle" href="https://tienda.logicbus.com.mx/CV-221_p_38404.html" target="_blank"
                            rel="noopener noreferrer">Ver en Tienda</a>
                        <a class="btn-circle"
                            href="https://tienda.logicbus.com.mx/assets/PDF/272/Datasheet_CV-221_Series.pdf"
                            target="_blank" rel="noopener noreferrer">Ficha oficial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Highlight Lanzamiento P1201 -->
    <div class="container my-5">
        <div class="card border-0 shadow-lg overflow-hidden rounded-lg">
            <div class="row g-0">
                <div class="col-12">
                    <a href="https://www.logicbus.com.mx/blog/cincoze-nueva-computadora-delgada-integrada-de-doble-proposito-la-serie-p1201-combinando-rendimiento-y-flexibilidad/"
                        target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="images/banner/www/BANNER-WWW-CINCOZE-P1201.webp"
                            class="img-fluid w-100" alt="Cincoze P1201">
                    </a>
                </div>
                <div class="col-12 p-4 p-md-5 bg-white">
                    <h3 class="font-weight-bold mb-3" style="color: var(--lb-primary);">Serie P1201</h3>
                    <p class="text-muted text-justify">
                        Otra incorporación a la serie CRYSTAL. Incluye el rendimiento de procesadores Intel Elkhart Lake
                        en un cuerpo ultradelgado (204.5 x 149 x 41.5 mm). Su diseño de doble propósito la hace ideal
                        como computadora estándar para espacios reducidos, o como Panel PC HMI al integrarse con módulos
                        de visualización usando la tecnología patentada CDS (Convertible Display System) de CINCOZE.
                    </p>
                    <a href="#productos" class="btn-circle d-inline-block mt-3">Ver Modelos P1201</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Productos (Grid Moderno) -->
    <h2 class="section-title" id="productos">EQUIPOS DESTACADOS</h2>
    <div class="container mb-5">
        <div class="products-grid">
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/DX-1100-R10_p_23239.html" target="_blank"
                    rel="noopener noreferrer">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/DX-1100-R10.jpg"
                        alt="DX-1100-R10">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/DX-1100-R10_p_23239.html" target="_blank"
                        rel="noopener noreferrer">DX-1100-R10</a>
                </h4>
                <p class="small text-muted text-justify flex-grow-1">Computadora industrial de la serie DX con
                    procesadores Intel Core/Xeon de 9na/8va generación y máxima flexibilidad de expansión de E/S
                    modular.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/DX-1100-R10_p_23239.html"
                    target="_blank" rel="noopener noreferrer">Comprar</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/DI-1000-i3-R11_p_24906.html" target="_blank"
                    rel="noopener noreferrer">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/DI-1000-i3-R11.jpg"
                        alt="DI-1000-i3-R11">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/DI-1000-i3-R11_p_24906.html" target="_blank"
                        rel="noopener noreferrer">DI-1000-i3-R11</a></h4>
                <p class="small text-muted text-justify flex-grow-1">Computadora compacta y robusta sin ventilador ni
                    cables, con procesador Intel Core i3, doble LAN Gigabit y E/S digital integrada.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/DI-1000-i3-R11_p_24906.html"
                    target="_blank" rel="noopener noreferrer">Comprar</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/P1001-R10_p_24972.html" target="_blank"
                    rel="noopener noreferrer">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/P1001-R10.jpg"
                        alt="P1001-R10">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/P1001-R10_p_24972.html" target="_blank"
                        rel="noopener noreferrer">P1001-R10</a></h4>
                <p class="small text-muted text-justify flex-grow-1">Módulo de PC con procesador Intel Atom E3845 Quad
                    Core, compatible con el sistema CDS para armar un Panel PC a la medida.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/P1001-R10_p_24972.html"
                    target="_blank" rel="noopener noreferrer">Comprar</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/CV-119R-R10_p_24876.html" target="_blank"
                    rel="noopener noreferrer">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/cv-119-p1201-3.jpg"
                        alt="CV-119R-R10">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/CV-119R-R10_p_24876.html" target="_blank"
                        rel="noopener noreferrer">CV-119R-R10</a>
                </h4>
                <p class="small text-muted text-justify flex-grow-1">Módulo de pantalla LCD de 19 pulgadas, táctil
                    resistiva, con protección IP65 frontal contra polvo y agua. Compatible con el sistema CDS.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/CV-119R-R10_p_24876.html"
                    target="_blank" rel="noopener noreferrer">Comprar</a>
            </div>

            <div class="product-card" id="seriep1201">
                <a href="https://tienda.logicbus.com.mx/P1201-X6425E-R10_p_35220.html" target="_blank"
                    rel="noopener noreferrer">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/p1201.jpg"
                        alt="P1201-X6425E-R10">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/P1201-X6425E-R10_p_35220.html" target="_blank"
                        rel="noopener noreferrer">P1201-X6425E-R10</a></h4>
                <p class="small text-muted text-justify flex-grow-1">Computadora integrada sin ventilador, ultradelgada.
                    Equipada con procesador Intel® Elkhart Lake Atom® ideal para Edge IoT.</p>
                <a class="btn-circle mt-auto mx-auto"
                    href="https://tienda.logicbus.com.mx/P1201-X6425E-R10_p_35220.html" target="_blank"
                    rel="noopener noreferrer">Comprar</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/P1201-X6211E-R10_p_35221.html" target="_blank"
                    rel="noopener noreferrer">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/p1201.jpg"
                        alt="P1201-X6211E-R10">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/P1201-X6211E-R10_p_35221.html" target="_blank"
                        rel="noopener noreferrer">P1201-X6211E-R10</a></h4>
                <p class="small text-muted text-justify flex-grow-1">Modelo con la filosofía "Un equipo, dos
                    propósitos". Compatible con el sistema de pantalla convertible (CDS) de Cincoze.</p>
                <a class="btn-circle mt-auto mx-auto"
                    href="https://tienda.logicbus.com.mx/P1201-X6211E-R10_p_35221.html" target="_blank"
                    rel="noopener noreferrer">Comprar</a>
            </div>
        </div>
        <p class="text-center text-muted mt-4" style="font-size: 0.85rem;">
            ¿Buscas algo específico? Revisa las <a href="#series">líneas completas de producto</a> arriba o
            <a href="https://tienda.logicbus.com.mx/cincoze" target="_blank" rel="noopener noreferrer">consulta el
                catálogo completo en
                tienda</a>.
        </p>
    </div>

    <!-- Catálogos y Documentación -->
    <div class="bg-light-accent py-5" id="catalogos">
        <div class="container text-center">
            <h2 class="section-title" style="margin-top: 0 !important;">CATÁLOGOS Y MANUALES</h2>
            <div class="row justify-content-center mt-4">
                <div class="col-md-4 mb-4">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/cincoze-catalog.pdf" target="_blank"
                        rel="noopener noreferrer" class="catalog-item mx-auto d-inline-block">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/cincoze-brochure.webp"
                            alt="Catálogo Cincoze">
                        <h4>Catálogo Cincoze</h4>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/cincoze-brochure.pdf" target="_blank"
                        rel="noopener noreferrer" class="catalog-item mx-auto d-inline-block">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/cincoze-brochure.webp"
                            alt="Brochure Cincoze">
                        <h4>Brochure Cincoze</h4>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=cincoze"
                        class="ghost-manual-box mx-auto d-inline-block p-4" style="height: 60%;">
                        <img loading="lazy" src="images/documentacion.svg" alt="Base de conocimientos"
                            style="width: 80px; margin-bottom: 15px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary);">Documentación</span>
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
                <div class="video-container-youtube" data-video-id="kOTQHUzQTNw">
                    <img loading="lazy" src="https://img.youtube.com/vi/kOTQHUzQTNw/hqdefault.jpg"
                        alt="Cincoze Video 1">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="video-container-youtube" data-video-id="UphubLMRlKA">
                    <img loading="lazy" src="https://img.youtube.com/vi/UphubLMRlKA/hqdefault.jpg"
                        alt="Cincoze Video 2">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="video-container-youtube" data-video-id="r_UfKRI_HNw">
                    <img loading="lazy" src="https://img.youtube.com/vi/r_UfKRI_HNw/hqdefault.jpg"
                        alt="Cincoze Video 3">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Artículos -->
    <h2 class="section-title" id="articulos">ARTÍCULOS DEL BLOG</h2>
    <div class="container mb-5">
        <div class="articles-grid">
            <div class="article-card">
                <a href="https://www.logicbus.com.mx/blog/panel-pc-industrial-de-cincoze-acelerando-la-eficiencia-productiva-de-la-fabricacion-produccion-de-alimentos-para-animales/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/11/Panel-PC-Industrial-de-Cincoze-Acelerando-la-Eficiencia-Productiva-de-la-Fabricacio%CC%81n-Produccio%CC%81n-de-Alimentos-para-Animales-1.webp"
                        alt="Panel PC Alimentos">
                </a>
                <div class="article-card-body text-center">
                    <h3><a href="https://www.logicbus.com.mx/blog/panel-pc-industrial-de-cincoze-acelerando-la-eficiencia-productiva-de-la-fabricacion-produccion-de-alimentos-para-animales/"
                            target="_blank" rel="noopener noreferrer">Acelerando la eficiencia productiva en la
                            fabricación de alimentos</a></h3>
                    <a href="https://www.logicbus.com.mx/blog/panel-pc-industrial-de-cincoze-acelerando-la-eficiencia-productiva-de-la-fabricacion-produccion-de-alimentos-para-animales/"
                        target="_blank" rel="noopener noreferrer" class="btn-circle mt-auto mx-auto"
                        style="width: fit-content;">Leer más</a>
                </div>
            </div>

            <div class="article-card">
                <a href="https://www.logicbus.com.mx/blog/cincoze-embedded-computer-permite-un-control-preciso-en-estaciones-terrestres-de-uav/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/02/Cincoze-Embedded-Computer-permite-un-control-preciso-en-estaciones-terrestres-de-UAV.webp"
                        alt="Cincoze UAV">
                </a>
                <div class="article-card-body text-center">
                    <h3><a href="https://www.logicbus.com.mx/blog/cincoze-embedded-computer-permite-un-control-preciso-en-estaciones-terrestres-de-uav/"
                            target="_blank" rel="noopener noreferrer">Control preciso en estaciones terrestres de
                            vehículos no tripulados UAV</a>
                    </h3>
                    <a href="https://www.logicbus.com.mx/blog/cincoze-embedded-computer-permite-un-control-preciso-en-estaciones-terrestres-de-uav/"
                        target="_blank" rel="noopener noreferrer" class="btn-circle mt-auto mx-auto"
                        style="width: fit-content;">Leer más</a>
                </div>
            </div>

            <div class="article-card">
                <a href="https://www.logicbus.com.mx/blog/computadoras-ferroviarias/" target="_blank"
                    rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Computadoras-ferroviarias-2048x1024.webp"
                        alt="Computadoras ferroviarias">
                </a>
                <div class="article-card-body text-center">
                    <h3><a href="https://www.logicbus.com.mx/blog/computadoras-ferroviarias/" target="_blank"
                            rel="noopener noreferrer">Computadoras ferroviarias: el ingrediente para el ferrocarril
                            inteligente</a></h3>
                    <a href="https://www.logicbus.com.mx/blog/computadoras-ferroviarias/" target="_blank"
                        rel="noopener noreferrer" class="btn-circle mt-auto mx-auto" style="width: fit-content;">Leer
                        más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacto (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿LISTO PARA PROBAR CINCOZE?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Contáctanos hoy mismo y descubre
                cómo podemos colaborar en tu próximo proyecto de Edge Computing!</span>
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
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>

    <script>
        // Carga diferida de videos YouTube
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

</html>