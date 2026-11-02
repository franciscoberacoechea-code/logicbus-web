<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EMS Kontrol | Sensores Industriales y Monitoreo de Zonas - Logicbus</title>

    <meta name="description"
        content="EMS Kontrol es un fabricante de sensores, transmisores y dispositivos de control industrial para temperatura, humedad, CO2 y gases. Conoce el sistema OR-TAK.">
    <meta name="keywords"
        content="EMS Kontrol, sensores industriales, transmisores de temperatura, humedad relativa, CO2, gases, sistema OR-TAK, monitoreo de zonas">

    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="libreria/estilos.css">'; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($flickity_css) ? $flickity_css : ''; ?>

    <style>
        #leftBar {
            display: none;
        }

        html {
            scroll-behavior: smooth;
        }

        .btn-circle {
            text-transform: none !important;
        }

        /* ----- CATEGORÍAS (Idéntico a Micsig) ----- */
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
            padding: 25px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-card img, .img-placeholder {
            width: 100%;
            height: 180px;
            object-fit: contain;
            margin-bottom: 20px;
            border: 1px dashed #cbd5e0;
            border-radius: 8px;
            padding: 10px;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a0aec0;
            font-size: 0.9rem;
        }

        .area-badge {
            background-color: #f1f5f9;
            color: var(--lb-primary, #22527A);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: bold;
            margin-bottom: 15px;
            align-self: flex-start;
        }

        .product-card h4 {
            font-size: 1.25rem;
            font-weight: bold;
            color: var(--lb-primary, #22527A);
            margin-bottom: 15px;
        }

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 15px;
            justify-content: flex-start;
        }

        .tag-badge {
            border: 1px solid #ddd;
            color: #666;
            font-size: 0.75rem;
            padding: 3px 8px;
            border-radius: 4px;
        }

        .product-card p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        /* ----- INDUSTRIAS / APLICACIONES (Idéntico a Micsig) ----- */
        .apps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto 50px;
            padding: 0 15px;
        }

        .app-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 4 / 3;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #1a202c;
            transition: transform 0.3s ease;
        }

        .app-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            opacity: 0.85; /* Corregido para igualar a Micsig */
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
            font-size: 1.3rem;
            margin-top: 0;
            margin-bottom: 8px;
            color: #fff;
            font-weight: bold;
        }

        .app-text-overlay p {
            font-size: 0.95rem;
            color: #e0e0e0;
            margin: 0;
            line-height: 1.4;
        }

        @media (hover: hover) {
            .app-card:hover { transform: translateY(-5px); }
            .app-card:hover img { opacity: 1; } /* Corregido para igualar a Micsig */
        }

        /* ----- EXTRAS EMS KONTROL (OR-TAK) ----- */
        .ortak-container {
            background-color: #1a496b;
            color: white;
            padding: 60px 15px;
            border-radius: 15px;
            max-width: 1200px;
            margin: 0 auto 50px;
        }

        .ortak-badge {
            background-color: var(--lb-accent, #FF7E00);
            color: #fff;
            font-size: 0.85rem;
            font-weight: bold;
            padding: 5px 15px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .ortak-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }

        .ortak-feature-box {
            border: 1px solid rgba(255,255,255,0.2);
            padding: 25px;
            border-radius: 8px;
        }
    </style>
</head>

<body onLoad="if(typeof menu_actual === 'function') menu_actual();">
    <?php echo isset($var_body) ? $var_body : ''; ?>
    <?php if (file_exists("libreria/header.view.php")) require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="marcas" class="blue link-orange">Marcas</a></li>
                <li class="breadcrumb-item active" aria-current="page">EMS Kontrol</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Imagen 100% -->

    <div class="banner-container mb-5">

        <img loading="lazy" src="https://www.logicbus.com.mx/images/banner/www/PorMarca/ems-kontrol-banner.webp"

            alt="3onedata" title="3onedata">

    </div>

    <!-- Títulos y Textos Intro -->
    <div class="container mb-5 mt-4">
        <h1 class="main-title text-center">
            <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Sensores Industriales y Monitoreo de Zonas para</span>
            <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px; text-transform: uppercase;">TEMPERATURA, HUMEDAD, CO₂ Y GASES</span>
        </h1>

        <p class="intro-text text-justify mx-auto mt-4" style="max-width: 1100px;">
            <strong>EMS Kontrol</strong> es un fabricante de sensores, transmisores y dispositivos de control industrial con sede en Izmir, Turquía. Su línea mide y transmite las variables críticas de un proceso — temperatura, humedad relativa, dióxido de carbono, presión diferencial, velocidad de aire y gases como amoniaco, etileno, monóxido de carbono, dióxido de azufre y oxígeno — convirtiéndolas en señales estándar listas para integrarse a un PLC, un controlador o un sistema SCADA.
        </p>
        <p class="intro-text text-justify mx-auto" style="max-width: 1100px;">
            El catálogo se organiza en dos grandes grupos. El <strong>Grupo de Sensores Industriales</strong> reúne transmisores fijos de pared, ducto y exterior, versiones con display, sensores portátiles con batería y dispositivos de control con relevador para montaje en pared o en panel. El <strong>Sistema de Monitoreo por Zonas OR-TAK</strong> añade la capa digital: módulos maestros y módulos sensores inalámbricos que registran, grafican y reportan las condiciones de cada zona desde una aplicación móvil.
        </p>
        <p class="intro-text text-justify mx-auto" style="max-width: 1100px;">
            La propuesta de EMS Kontrol es cubrir toda la cadena de medición con una sola familia de equipos: el mismo sensor que da la lectura puede entregar señal analógica, mostrarla en pantalla, accionar un relevador o enviarla a la nube. Eso simplifica la especificación, el inventario de refacciones y la capacitación del personal de mantenimiento.
        </p>
    </div>

    <!-- Navegación interna -->
    <div class="container text-center my-5">
        <nav class="btn-navigation d-flex flex-wrap justify-content-center" style="gap: 15px;">
            <a class="btn-circle" href="#categorias">Categorías</a>
            <a class="btn-circle" href="#formas">Formas de Medir</a>
            <a class="btn-circle" href="#ortak">OR-TAK</a>
            <a class="btn-circle" href="#industrias">Industrias</a>
            <a class="btn-circle" href="#catalogos">Catálogos</a>
            <a class="btn-circle" href="#faqs">FAQs</a>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/ems-kontrol" target="_blank"
                style="background-color: var(--lb-accent) !important; border-color: var(--lb-accent) !important; color: white !important;">
                Ver en Tienda
            </a>
        </nav>
    </div>

    <!-- CATEGORÍAS DE PRODUCTO -->
    <div class="text-center mb-5" id="categorias">
        <h2 class="section-title mx-auto" style="margin-bottom: 10px;">CATEGORÍAS DE PRODUCTO</h2>
        <p class="text-muted" style="font-size: 1.1rem;">Once familias de sensores, transmisores y controladores para medir y actuar sobre las variables de tu proceso.</p>
    </div>

    <div class="products-grid">
        <!-- 1 -->
        <div class="product-card">
            <span class="area-badge">TS - TT · Serie 1XX-4XX</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/sensores-de-temperatura.webp" alt="Sensores de Temperatura">
            <h4>Sensores de Temperatura</h4>
            <div class="tags-container">
                <span class="tag-badge">PT100 / NTC</span><span class="tag-badge">Con display</span><span class="tag-badge">Ducto</span>
            </div>
            <p>Sensores y transmisores de temperatura para pared, ducto e inmersión, con salida analógica y versiones con pantalla.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 2 -->
        <div class="product-card">
            <span class="area-badge">NT - ST - DT</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/sensores-de-humedad.webp" alt="Sensores de Humedad">
            <h4>Sensores de Humedad</h4>
            <div class="tags-container">
                <span class="tag-badge">Humedad relativa</span><span class="tag-badge">Combinados T+HR</span><span class="tag-badge">Exterior</span>
            </div>
            <p>Transmisores de humedad y combinados temperatura + humedad para interior, ducto e intemperie.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 3 -->
        <div class="product-card">
            <span class="area-badge">KT · Serie 3XX-6XX</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/sensores-de-CO2.webp" alt="Sensores de CO2">
            <h4>Sensores de CO₂</h4>
            <div class="tags-container">
                <span class="tag-badge">Calidad del aire</span><span class="tag-badge">3 en 1</span><span class="tag-badge">Con display</span>
            </div>
            <p>Transmisores de dióxido de carbono, individuales o combinados con temperatura y humedad en un solo equipo.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 4 -->
        <div class="product-card">
            <span class="area-badge">BT - BD · Serie 3XX-4XX</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/presion-diferencial.webp" alt="Presión Diferencial">
            <h4>Presión Diferencial</h4>
            <div class="tags-container">
                <span class="tag-badge">Transmisores</span><span class="tag-badge">Presostatos</span><span class="tag-badge">Filtros</span>
            </div>
            <p>Transmisores y switches de presión diferencial para control de filtros, cuartos limpios y sistemas HVAC.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 5 -->
        <div class="product-card">
            <span class="area-badge">AT - ET - UT - CT - OT</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/sensores-de-gases.webp" alt="Sensores de Gases">
            <h4>Sensores de Gases</h4>
            <div class="tags-container">
                <span class="tag-badge">NH₃ - C₂H₄</span><span class="tag-badge">SO₂ - CO</span><span class="tag-badge">O₂</span>
            </div>
            <p>Transmisores de amoniaco, etileno, dióxido de azufre, monóxido de carbono y oxígeno, con o sin pantalla.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 6 -->
        <div class="product-card">
            <span class="area-badge">HT · Serie 2XX</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/velocidad-de-aire.webp" alt="Velocidad de Aire">
            <h4>Velocidad de Aire</h4>
            <div class="tags-container">
                <span class="tag-badge">Ducto</span><span class="tag-badge">Analógico</span><span class="tag-badge">HVAC</span>
            </div>
            <p>Transmisores de velocidad de aire para verificar caudal y ventilación en ductos y campanas de extracción.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 7 -->
        <div class="product-card">
            <span class="area-badge">Serie 4XX - 6XX</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/sensores-portatiles.webp" alt="Sensores Portátiles">
            <h4>Sensores Portátiles</h4>
            <div class="tags-container">
                <span class="tag-badge">Batería interna</span><span class="tag-badge">Display</span><span class="tag-badge">Verificación</span>
            </div>
            <p>Equipos de mano con batería para verificar temperatura, humedad, CO₂, presión diferencial y gases en campo.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 8 -->
        <div class="product-card">
            <span class="area-badge">TR - NR - SR - KR - BR</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/controladores-de-pared.webp" alt="Controladores de Pared">
            <h4>Controladores de Pared</h4>
            <div class="tags-container">
                <span class="tag-badge">Con relevador</span><span class="tag-badge">Setpoint</span><span class="tag-badge">Superficie</span>
            </div>
            <p>Miden la variable y accionan un relevador dentro del rango que definas, sin necesidad de un controlador externo.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 9 -->
        <div class="product-card">
            <span class="area-badge">Serie 7XX</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/controladores-de-panel.webp" alt="Controladores de Panel">
            <h4>Controladores de Panel</h4>
            <div class="tags-container">
                <span class="tag-badge">Empotrable</span><span class="tag-badge">Tablero</span><span class="tag-badge">3 en 1</span>
            </div>
            <p>Versión empotrable de los controladores, para integrarse al frente del tablero junto al resto de la instrumentación.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 10 -->
        <div class="product-card">
            <span class="area-badge">YS-111 - YS-112</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/sensores-capacitivos.webp" alt="Sensores Capacitivos">
            <h4>Sensores Capacitivos</h4>
            <div class="tags-container">
                <span class="tag-badge">Detección</span><span class="tag-badge">Sin contacto</span><span class="tag-badge">Nivel</span>
            </div>
            <p>Detección de presencia y nivel sin contacto para líneas de producción y tanques.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>

        <!-- 11 -->
        <div class="product-card">
            <span class="area-badge">Serie AE</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/refacciones-y-accesorios.webp" alt="Refacciones y Accesorios">
            <h4>Refacciones y Accesorios</h4>
            <div class="tags-container">
                <span class="tag-badge">Termopozos</span><span class="tag-badge">Adaptadores</span><span class="tag-badge">Filtros</span>
            </div>
            <p>Termopozos roscados, adaptadores, filtros y juegos de sondas para completar la instalación del sensor.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#">Descubrir más</a>
        </div>
    </div>

    <!-- TRES FORMAS DE MEDIR -->
    <div class="container mb-5" id="formas">
        <div class="text-center mb-4">
            <h2 class="section-title mx-auto" style="margin-bottom: 10px;">TRES FORMAS DE MEDIR</h2>
            <p class="text-muted" style="font-size: 1.1rem;">La misma variable, resuelta según lo que necesite tu instalación.</p>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mb-4 mb-md-0 px-4">
                <h4 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 15px;">Sensores y transmisores</h4>
                <p class="text-muted">Miden la variable del ambiente o del proceso y la convierten en una señal de salida estándar, lista para el PLC o el SCADA.</p>
            </div>
            <div class="col-md-4 mb-4 mb-md-0 px-4">
                <h4 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 15px;">Sensores portátiles</h4>
                <p class="text-muted">La batería interna permite medir en cualquier punto de la planta y leer el valor directamente en pantalla, sin instalación.</p>
            </div>
            <div class="col-md-4 px-4">
                <h4 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 15px;">Sensores con relevador</h4>
                <p class="text-muted">Además de medir, controlan: activan o desactivan el equipo conectado cuando la variable sale del rango que definiste.</p>
            </div>
        </div>
    </div>

    <!-- OR-TAK -->
    <div class="container" id="ortak">
        <div class="ortak-container">
            <div class="text-center">
                <span class="ortak-badge">SISTEMA OR-TAK</span>
                <h2 style="font-weight: 800; font-size: 2rem; margin-bottom: 15px;">MONITOREO DE ZONAS EN TIEMPO REAL</h2>
                <p style="max-width: 800px; margin: 0 auto; font-size: 1.1rem; opacity: 0.9;">
                    OR-TAK conecta módulos sensores inalámbricos a un módulo maestro para registrar las condiciones de cada zona y consultarlas desde la aplicación móvil. Los sensores registran los valores medidos en periodos de 4 minutos.
                </p>
            </div>

            <div class="ortak-features">
                <div class="ortak-feature-box text-left">
                    <h4 style="font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">SEGUIMIENTO INSTANTÁNEO</h4>
                    <p style="font-size: 0.95rem; opacity: 0.9;">El usuario supervisa el sistema en cualquier momento desde la aplicación móvil, con los valores de todos los módulos en una sola pantalla.</p>
                </div>
                <div class="ortak-feature-box text-left">
                    <h4 style="font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">VISUALIZACIÓN GRÁFICA</h4>
                    <p style="font-size: 0.95rem; opacity: 0.9;">Las últimas 24 horas de cada sensor se muestran en gráfica, lo que facilita detectar desviaciones y analizar tendencias.</p>
                </div>
                <div class="ortak-feature-box text-left">
                    <h4 style="font-weight: 700; font-size: 1.1rem; margin-bottom: 10px;">REPORTES DETALLADOS</h4>
                    <p style="font-size: 0.95rem; opacity: 0.9;">Desde el menú de reportes se consultan gráficas e históricos de todos los sensores, filtrando por rango de fechas y por equipo.</p>
                </div>
            </div>

            <div class="table-responsive shadow-sm" style="border-radius: 8px; overflow: hidden; background: white; margin-bottom: 30px;">
                <table class="table table-bordered mb-0 text-left">
                    <thead style="background-color: #f4f6f8; color: #333;">
                        <tr>
                            <th class="py-3 px-4 font-weight-bold" style="width: 20%;">MÓDULO</th>
                            <th class="py-3 px-4 font-weight-bold" style="width: 30%;">TIPO</th>
                            <th class="py-3 px-4 font-weight-bold" style="width: 50%;">VARIABLES QUE MIDE</th>
                        </tr>
                    </thead>
                    <tbody style="color: #4a5568;">
                        <tr><td class="px-4 font-weight-bold">MM-01X</td><td class="px-4">Módulo maestro grande</td><td class="px-4">Concentra y transmite los datos de los módulos sensores</td></tr>
                        <tr><td class="px-4 font-weight-bold">MM-02X</td><td class="px-4">Módulo maestro pequeño</td><td class="px-4">Misma función en instalaciones de menor tamaño</td></tr>
                        <tr><td class="px-4 font-weight-bold">SM-310</td><td class="px-4">Módulo sensor</td><td class="px-4">Temperatura y humedad</td></tr>
                        <tr><td class="px-4 font-weight-bold">SM-320</td><td class="px-4">Módulo sensor</td><td class="px-4">Temperatura, humedad y CO₂</td></tr>
                        <tr><td class="px-4 font-weight-bold">WM-310</td><td class="px-4">Módulo sensor WiFi</td><td class="px-4">Temperatura</td></tr>
                        <tr><td class="px-4 font-weight-bold">WM-320</td><td class="px-4">Módulo sensor WiFi</td><td class="px-4">Temperatura y humedad</td></tr>
                        <tr><td class="px-4 font-weight-bold">WM-410</td><td class="px-4">Módulo sensor WiFi</td><td class="px-4">Temperatura, humedad y CO₂</td></tr>
                        <tr><td class="px-4 font-weight-bold">WM-510</td><td class="px-4">Módulo sensor WiFi</td><td class="px-4">Temperatura</td></tr>
                    </tbody>
                </table>
            </div>

            <div class="text-center">
                <a class="btn-circle" href="#"
                    style="background-color: var(--lb-accent) !important; border-color: var(--lb-accent) !important; color: white !important;">
                    Ver el sistema OR-TAK completo
                </a>
            </div>
        </div>
    </div>

    <!-- INDUSTRIAS -->
    <div class="text-center mb-5" id="industrias">
        <h2 class="section-title mx-auto text-uppercase" style="margin-bottom: 10px;">Industrias</h2>
        <p class="text-muted" style="font-size: 1.1rem;">Dónde la medición de temperatura, humedad, CO₂ y gases decide la calidad del producto.</p>
    </div>

    <div class="apps-grid">
        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/cadena-de-frio.webp" alt="Cadena de Frío">
            <div class="app-text-overlay">
                <h3>Cadena de Frío</h3>
                <p>Registro continuo de temperatura y humedad en cámaras, túneles de congelación y transporte refrigerado.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/alimentos-y-bebidas.webp" alt="Alimentos y Bebidas">
            <div class="app-text-overlay">
                <h3>Alimentos y Bebidas</h3>
                <p>Control de ambiente en áreas de proceso y maduración, con detección de amoniaco en salas de refrigeración.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/farmaceutica.webp" alt="Farmacéutica">
            <div class="app-text-overlay">
                <h3>Farmacéutica</h3>
                <p>Condiciones estables y evidencia documentada en almacenes, cuartos limpios y áreas de estabilidad.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/hospitales-y-laboratorios.webp" alt="Hospitales y Laboratorios">
            <div class="app-text-overlay">
                <h3>Hospitales y Laboratorios</h3>
                <p>Presión diferencial en áreas de aislamiento y vigilancia de temperatura en refrigeradores de muestras.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/HVAC-y-edificios.webp" alt="HVAC y Edificios">
            <div class="app-text-overlay">
                <h3>HVAC y Edificios</h3>
                <p>CO₂, humedad y velocidad de aire para regular la ventilación según ocupación y avisar por filtros saturados.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/ems-kontrol/agroindustria.webp" alt="Agroindustria">
            <div class="app-text-overlay">
                <h3>Agroindustria</h3>
                <p>Etileno, CO₂ y humedad en invernaderos y cuartos de maduración de fruta para prolongar la vida útil.</p>
            </div>
        </div>
    </div>

    <!-- CATÁLOGOS -->
<div class="text-center mb-5" id="catalogos">
    <h2 class="section-title mx-auto text-uppercase" style="margin-bottom: 10px;">Catálogos y Documentación</h2>
    <p class="text-muted" style="font-size: 1.1rem;">Especificaciones, rangos, dimensiones y códigos de pedido de toda la línea.</p>
</div>

<!-- Flexbox Centrado para Catálogos -->
<div class="d-flex justify-content-center flex-wrap" style="gap: 30px; max-width: 1200px; margin: 0 auto 50px; padding: 0 15px;">
    <div class="product-card" style="width: 100%; max-width: 480px; padding: 35px;">
        <span class="area-badge">PDF</span>
        <h4>Grupo de Sensores Industriales</h4>
        <p>Catálogo completo de transmisores, sensores portátiles, controladores de pared y panel, accesorios y refacciones.</p>
        <a class="btn-circle text-center mt-3" style="width: fit-content; margin: 0 auto; display: block; align-self: center;" href="https://www.logicbus.com.mx/pdf/358/industrial-sensors-group.pdf" target="_blank" rel="noopener noreferrer">Ver catálogo</a>
    </div>

    <div class="product-card" style="width: 100%; max-width: 480px; padding: 35px;">
        <span class="area-badge">PDF</span>
        <h4>Sistema de Monitoreo por Zonas OR-TAK</h4>
        <p>Módulos maestros, módulos sensores WiFi, arquitectura del sistema y funciones de la aplicación móvil.</p>
        <a class="btn-circle text-center mt-3" style="width: fit-content; margin: 0 auto; display: block; align-self: center;" href="https://www.logicbus.com.mx/pdf/358/OR-TAK-zone-monitoring-system.pdf" target="_blank" rel="noopener noreferrer">Ver catálogo</a>
    </div>
</div>

    <!-- PREGUNTAS FRECUENTES -->
    <section class="container py-5" id="faqs">
        <h2 class="section-title text-center mx-auto" style="margin-top: 0 !important; margin-bottom: 40px;">PREGUNTAS
            FRECUENTES</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="accordion" id="accordionFAQs">

                    <!-- FAQ 1 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq1">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse1" role="button" aria-expanded="true" aria-controls="collapse1">
                                1. ¿Qué variables puedo medir con la línea de EMS Kontrol?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="faq1" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                Temperatura, humedad relativa, dióxido de carbono, presión diferencial y velocidad de aire, además de gases como amoniaco (NH₃), etileno (C₂H₄), dióxido de azufre (SO₂), monóxido de carbono (CO) y oxígeno (O₂). Varias series combinan dos o tres variables en un solo equipo.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq2">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                                2. ¿Cuál es la diferencia entre un transmisor y un dispositivo de control?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                El transmisor mide y envía la señal a tu PLC, controlador o SCADA. El dispositivo de control incorpora relevador: además de medir, acciona el equipo conectado cuando la variable sale del rango que configuraste, sin depender de un controlador externo.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq3">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                                3. ¿Cómo identifico el modelo que necesito?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                La nomenclatura indica la variable con las primeras letras y el formato con la serie numérica: las series 2XX son de ducto, las 3XX de pared sin display, las 4XX incluyen pantalla, las 5XX y 6XX combinan varias variables y las 7XX son de montaje en panel.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq4">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                                4. ¿Qué es OR-TAK y en qué se diferencia de los sensores fijos?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                OR-TAK es un sistema de monitoreo por zonas: módulos sensores inalámbricos reportan a un módulo maestro y los datos se consultan desde una aplicación móvil, con gráficas de las últimas 24 horas y reportes por rango de fechas. Los sensores registran valores en periodos de 4 minutos.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq5">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
                                5. ¿Los sensores portátiles sirven para verificar una instalación fija?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="faq5" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                Sí. Al tener batería interna y pantalla, permiten medir en cualquier punto de la planta y comparar la lectura contra lo que reporta el sensor fijo o el sistema de control.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq6">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse6" role="button" aria-expanded="false" aria-controls="collapse6">
                                6. ¿Puedo integrar los sensores a mi PLC o SCADA actual?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="faq6" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                Los transmisores entregan señales de salida en estándares industriales, por lo que se integran a las entradas de un PLC o de un sistema de adquisición de datos. Confirma con nuestro equipo la salida disponible para el modelo que te interesa.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Contacto (Odoo) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE EMS KONTROL</h2>
            <span class="paragraph"
                style="color: var(--lb-white); font-size: 1.1rem; display: block; max-width: 800px; margin: 0 auto;">
                Dinos qué variable necesitas medir y en qué instalación. Nuestros ingenieros te ayudarán a seleccionar el equipo adecuado.
            </span>

            <!-- Botones de Acción Micsig Replicados -->
            <div class="d-flex justify-content-center flex-wrap mt-4" style="gap: 15px;">
                <a href="#contacto" class="btn font-weight-bold"
                    style="background-color: var(--lb-accent); color: #fff; border: 2px solid var(--lb-accent); border-radius: 30px; padding: 10px 30px; text-decoration: none; transition: all 0.3s ease;">
                    Solicitar cotización
                </a>
                <a href="https://tienda.logicbus.com.mx/ems-kontrol" target="_blank" class="btn font-weight-bold"
                    style="background-color: transparent; color: #fff; border: 2px solid #fff; border-radius: 30px; padding: 10px 30px; text-decoration: none; transition: all 0.3s ease;">
                    Ver en tienda
                </a>
            </div>
        </div>

        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- Archivos JS y Footer -->
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>
    <?php if (file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>

    <!-- 1. jQuery -->
    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>

    <!-- 2. Bootstrap -->
    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>

    <!-- 3. Propios -->
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>

    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>

</html>