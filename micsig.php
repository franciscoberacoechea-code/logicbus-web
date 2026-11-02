<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Micsig | Osciloscopios y soluciones de medición - Logicbus</title>

    <meta name="description"
        content="Osciloscopios, puntas de prueba y soluciones de medición para I+D, manufactura y servicio automotriz. Micsig acerca las capacidades de laboratorio a la palma de tu mano.">
    <meta name="keywords"
        content="Micsig, Osciloscopios, Osciloscopio 12 bits, Osciloscopio Automotriz, Puntas de prueba, Puntas aisladas, Fibra óptica, Electrónica de potencia, Logicbus">

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

        /* ----- ESTADÍSTICAS ----- */
        .stats-box {
            display: flex;
            flex-wrap: wrap;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            background-color: #fff;
            margin-bottom: 50px;
        }

        .stat-item {
            flex: 1 1 25%;
            text-align: center;
            padding: 30px 15px;
            border-right: 1px solid #e2e8f0;
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--lb-primary, #22527A);
            line-height: 1.2;
            margin-bottom: 5px;
        }

        .stat-desc {
            font-size: 0.85rem;
            color: #718096;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media (max-width: 768px) {
            .stat-item {
                flex: 1 1 50%;
                border-bottom: 1px solid #e2e8f0;
            }

            .stat-item:nth-child(even) {
                border-right: none;
            }

            .stat-item:nth-last-child(-n+2) {
                border-bottom: none;
            }
        }

        /* ----- CATEGORÍAS ----- */
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

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: contain;
            margin-bottom: 20px;
            border: 1px dashed #cbd5e0;
            border-radius: 8px;
            padding: 10px;
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

        /* ----- APLICACIONES (Reusado de Allybot) ----- */
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
            /* Fondo oscuro por si no carga la imagen */
            transition: transform 0.3s ease;
        }

        .app-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            opacity: 0.85;
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
            .app-card:hover {
                transform: translateY(-5px);
            }

            .app-card:hover img {
                opacity: 1;
            }
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
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Micsig</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Video -->
    <div class="banner-container mb-5">
        <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/Micsing-banner.webp">
            <source src="https://www.logicbus.com.mx/assets/videos/Micsing-banner.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Títulos y Textos Intro -->

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Osciloscopios, puntas de
            prueba y soluciones de medición</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">PARA
            I+D, MANUFACTURA Y SERVICIO AUTOMOTRIZ</span>
    </h1>

    <div class="container">
        <p class="intro-text text-justify mx-auto" style="max-width: 1100px;">
            <strong>Micsig</strong> es un fabricante especializado en osciloscopios y puntas de prueba, fundado en 2012
            en Shenzhen, China. Su catálogo abarca osciloscopios tipo tablet, osciloscopios de alta resolución de 12
            bits, osciloscopios automotrices y una familia completa de puntas: aisladas por fibra óptica, diferenciales
            de alto voltaje, de corriente CA/CD y flexibles tipo Rogowski.
        </p>
        <p class="intro-text text-justify mx-auto" style="max-width: 1100px;">
            La propuesta de la marca es acercar capacidades de laboratorio al lugar donde realmente ocurre la medición:
            equipos con pantalla táctil, operación con una sola mano, conectividad Wi-Fi y aplicación móvil, sin
            sacrificar resolución vertical, memoria ni velocidad de captura. Con más de 200 patentes y presencia en más
            de 50,000 usuarios en el mundo, Micsig se ha posicionado entre las marcas de referencia en osciloscopios
            portátiles.
        </p>
        <p class="intro-text text-justify mx-auto" style="max-width: 1100px;">
            En Logicbus integramos estos equipos en proyectos de electrónica de potencia, semiconductores de tercera
            generación (SiC y GaN), comunicaciones, electrificación vehicular y laboratorios educativos, con asesoría
            técnica para elegir el ancho de banda, la punta y el nivel de aislamiento que cada aplicación requiere.
        </p>
    </div>

    <!-- Navegación interna -->
    <div class="container text-center my-5">
        <nav class="btn-navigation d-flex flex-wrap justify-content-center" style="gap: 15px;">
            <a class="btn-circle" href="#categorias">Categorías</a>
            <a class="btn-circle" href="#elegir">Cómo elegir</a>
            <a class="btn-circle" href="#aplicaciones">Aplicaciones</a>
            <a class="btn-circle" href="#catalogos">Catálogos</a>
            <a class="btn-circle" href="#faqs">FAQs</a>
            <!-- Botón Naranja -->
            <a class="btn-circle" href="#contacto"
                style="background-color: var(--lb-accent) !important; border-color: var(--lb-accent) !important; color: white !important;">Solicitar
                cotización</a>
        </nav>
    </div>

    <!-- Sección Estadísticas -->
    <div class="container">
        <div class="stats-box">
            <div class="stat-item">
                <div class="stat-value">2012</div>
                <div class="stat-desc">Año de Fundación</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">200+</div>
                <div class="stat-desc">Patentes</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">50,000+</div>
                <div class="stat-desc">Usuarios en el mundo</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">12 bits</div>
                <div class="stat-desc">Resolución Vertical</div>
            </div>
        </div>
    </div>

    <!-- CATEGORÍAS DE PRODUCTO -->
    <div class="text-center mb-5" id="categorias">
        <h2 class="section-title" style="margin-bottom: 10px;">CATEGORÍAS DE PRODUCTO</h2>
        <p class="text-muted" style="font-size: 1.1rem;">Ocho familias que cubren desde el diagnóstico en piso hasta la
            caracterización de dispositivos de potencia en laboratorio.</p>
    </div>

    <div class="products-grid">
        <!-- 1 -->
        <div class="product-card">
            <span class="area-badge">Alta resolución</span>
            <img loading="lazy" src="images/micsig/osciloscopios-de-12-bits.webp" alt="Osciloscopios de 12 bits">
            <h4>Osciloscopios de 12 bits</h4>
            <div class="tags-container" style="justify-content: flex-start;">
                <span class="tag-badge">MH06</span><span class="tag-badge">MH03</span><span
                    class="tag-badge">M03</span><span class="tag-badge">MH01</span><span class="tag-badge">STO</span>
            </div>
            <p>Cuatro veces más resolución vertical que un osciloscopio de 8 bits para ver rizado, ruido y detalles
                pequeños montados sobre señales grandes. Hasta 8 canales analógicos.</p>
            <a class="btn-circle text-center" style="width: 100%;"
                href="https://tienda.logicbus.com.mx/Osciloscopios-de-12-bits_c_8099.html" target="_blank">Ver serie</a>
        </div>

        <!-- 2 -->
        <div class="product-card">
            <span class="area-badge">Portátil</span>
            <img loading="lazy" src="images/micsig/osciloscopios-tablet-de-8-bits.webp" alt="Osciloscopios tablet">
            <h4>Osciloscopios tablet de 8 bits</h4>
            <div class="tags-container" style="justify-content: flex-start;">
                <span class="tag-badge">MDO</span><span class="tag-badge">ETO</span><span
                    class="tag-badge">TO</span><span class="tag-badge">VTO</span>
            </div>
            <p>Formato tablet con pantalla táctil capacitiva y batería: el osciloscopio de laboratorio que se puede
                llevar al tablero, a la planta o al campo.</p>
            <a class="btn-circle text-center" style="width: 100%;"
                href="https://tienda.logicbus.com.mx/Osciloscopios-tablet-de-8-bits_c_8100.html" target="_blank">Ver
                serie</a>
        </div>

        <!-- 3 -->
        <div class="product-card">
            <span class="area-badge">Automotriz</span>
            <img loading="lazy" src="images/micsig/osciloscopios-automotrices.webp" alt="Osciloscopios automotrices">
            <h4>Osciloscopios automotrices</h4>
            <div class="tags-container" style="justify-content: flex-start;">
                <span class="tag-badge">AH01</span><span class="tag-badge">ATO</span><span
                    class="tag-badge">SATO</span><span class="tag-badge">VATO</span>
            </div>
            <p>Formas de onda de referencia, disparos y mediciones preconfiguradas para sensores, actuadores, buses de
                datos y sistemas de tracción eléctrica.</p>
            <a class="btn-circle text-center" style="width: 100%;"
                href="https://tienda.logicbus.com.mx/Osciloscopios-automotrices_c_8101.html" target="_blank">Ver
                serie</a>
        </div>

        <!-- 4 -->
        <div class="product-card">
            <span class="area-badge">Aislamiento óptico</span>
            <img loading="lazy" src="images/micsig/puntas-aisladas-por-fibra-optica-SigOFIT.webp"
                alt="Puntas aisladas por fibra óptica SigOFIT">
            <h4>Puntas aisladas por fibra óptica SigOFIT</h4>
            <div class="tags-container" style="justify-content: flex-start;">
                <span class="tag-badge">MOIP Gen 3</span><span class="tag-badge">MOIP Gen 2</span>
            </div>
            <p>Medición flotante segura con tolerancia a modo común de kilovolts. La tercera generación suma deriva
                cero, operación sin calibración y alimentación por láser.</p>
            <a class="btn-circle text-center" style="width: 100%;"
                href="https://tienda.logicbus.com.mx/Puntas-SigOFIT_c_8102.html" target="_blank">Ver serie</a>
        </div>

        <!-- 5 -->
        <div class="product-card">
            <span class="area-badge">Alto voltaje</span>
            <img loading="lazy" src="images/micsig/puntas-diferenciales-de-alto-voltaje.webp"
                alt="Puntas diferenciales de alto voltaje">
            <h4>Puntas diferenciales de alto voltaje</h4>
            <div class="tags-container" style="justify-content: flex-start;">
                <span class="tag-badge">Serie DP</span>
            </div>
            <p>Para medir compuerta, drenaje y bus de CD en convertidores e inversores sin referencia a tierra y sin
                poner en riesgo el equipo ni al operador.</p>
            <a class="btn-circle text-center" style="width: 100%;"
                href="https://tienda.logicbus.com.mx/Puntas-de-alto-voltaje_c_8103.html" target="_blank">Ver serie</a>
        </div>

        <!-- 6 -->
        <div class="product-card">
            <span class="area-badge">Corriente</span>
            <img loading="lazy" src="images/micsig/puntas-de-corriente-CA-CD .webp" alt="Puntas de corriente CA/CD">
            <h4>Puntas de corriente CA/CD</h4>
            <div class="tags-container" style="justify-content: flex-start;">
                <span class="tag-badge">CP alta frecuencia</span><span class="tag-badge">CP2100</span><span
                    class="tag-badge">ACP1000</span>
            </div>
            <p>Pinzas de efecto Hall para capturar corriente sin abrir el circuito, en versiones de alta y baja
                frecuencia según el ancho de banda que necesite la aplicación.</p>
            <a class="btn-circle text-center" style="width: 100%;"
                href="https://tienda.logicbus.com.mx/Puntas-de-corriente-CACD_c_8104.html" target="_blank">Ver serie</a>
        </div>

        <!-- 7 -->
        <div class="product-card">
            <span class="area-badge">Flexible</span>
            <img loading="lazy" src="images/micsig/puntas-rogowski-de-corriente-CA.webp"
                alt="Puntas Rogowski de corriente CA">
            <h4>Puntas Rogowski de corriente CA</h4>
            <div class="tags-container" style="justify-content: flex-start;">
                <span class="tag-badge">Serie RCP</span>
            </div>
            <p>Bobina flexible para corrientes elevadas y espacios cerrados: se enrolla alrededor de barras y cables
                donde no entra una pinza rígida.</p>
            <a class="btn-circle text-center" style="width: 100%;"
                href="https://tienda.logicbus.com.mx/Puntas-Rogowski-CA_c_8105.html" target="_blank">Ver serie</a>
        </div>
    </div>

    <!-- ¿QUÉ SERIE NECESITO? -->
    <div class="container mb-5" id="elegir">
        <div class="text-center mb-4">
            <h2 class="section-title mx-auto" style="margin-bottom: 10px;">¿QUÉ SERIE NECESITO?</h2>
            <p class="text-muted" style="font-size: 1.1rem;">Una guía rápida para orientar la elección antes de hablar
                con un ingeniero.</p>
        </div>

        <div class="table-responsive shadow-sm"
            style="border-radius: 8px; overflow: hidden; max-width: 1200px; margin: 0 auto;">
            <table class="table table-bordered table-striped mb-0 text-center text-md-left">
                <thead style="background-color: var(--lb-primary); color: white;">
                    <tr>
                        <th class="py-3 px-4 font-weight-bold" style="width: 35%;">Si tu trabajo es...</th>
                        <th class="py-3 px-4 font-weight-bold" style="width: 25%;">Familia recomendada</th>
                        <th class="py-3 px-4 font-weight-bold" style="width: 40%;">Por qué</th>
                    </tr>
                </thead>
                <tbody style="background-color: #fff; color: #4a5568;">
                    <tr>
                        <td class="py-3 px-4 font-weight-bold" style="color: var(--lb-primary);">Caracterizar SiC/GaN y
                            conmutación rápida</td>
                        <td class="py-3 px-4">MH06 / MH03 + SigOFIT</td>
                        <td class="py-3 px-4">Resolución de 12 bits y medición flotante con aislamiento óptico</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-weight-bold" style="color: var(--lb-primary);">Diseñar y depurar
                            fuentes conmutadas</td>
                        <td class="py-3 px-4">MH03 / M03 + DP + CP</td>
                        <td class="py-3 px-4">Voltaje y corriente sincronizados para calcular pérdidas</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-weight-bold" style="color: var(--lb-primary);">Dar servicio en planta
                            o campo</td>
                        <td class="py-3 px-4">MH01 / STO / MDO</td>
                        <td class="py-3 px-4">Formato tablet con batería, táctil y operación con una mano</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-weight-bold" style="color: var(--lb-primary);">Diagnóstico automotriz
                            y vehículo eléctrico</td>
                        <td class="py-3 px-4">AH01 / ATO / SATO</td>
                        <td class="py-3 px-4">Mediciones y formas de onda de referencia listas para usar</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-weight-bold" style="color: var(--lb-primary);">Equipar un laboratorio
                            educativo</td>
                        <td class="py-3 px-4">STO / TO / VTO</td>
                        <td class="py-3 px-4">Costo por estación bajo y curva de aprendizaje corta</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-weight-bold" style="color: var(--lb-primary);">Medir corrientes altas
                            en tableros</td>
                        <td class="py-3 px-4">RCP + CP2100</td>
                        <td class="py-3 px-4">Bobina flexible y pinza CA/CD sin abrir el circuito</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- APLICACIONES -->
    <div class="text-center mb-5" id="aplicaciones">
        <h2 class="section-title mx-auto" style="margin-bottom: 10px;">APLICACIONES</h2>
        <p class="text-muted" style="font-size: 1.1rem;">Los seis campos donde la instrumentación Micsig resuelve un
            problema de medición concreto.</p>
    </div>

    <div class="apps-grid">
        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/micsig/semiconductores.webp"
                alt="Semiconductores">
            <div class="app-text-overlay">
                <h3>Semiconductores</h3>
                <p>Caracterización de dispositivos de tercera generación (SiC, GaN), pruebas de doble pulso.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/micsig/electronica-de-potencia.webp"
                alt="Electrónica de potencia">
            <div class="app-text-overlay">
                <h3>Electrónica de potencia</h3>
                <p>Fuentes conmutadas, inversores, cargadores y almacenamiento, transitorios y pérdidas de conmutación.
                </p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/micsig/comunicaciones.webp"
                alt="Comunicaciones">
            <div class="app-text-overlay">
                <h3>Comunicaciones</h3>
                <p>Transmisión de alta velocidad, baja latencia y señales de alta frecuencia en 5G, fibra y RF.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/micsig/automotriz.webp" alt="Automotriz">
            <div class="app-text-overlay">
                <h3>Automotriz</h3>
                <p>Tracción eléctrica, sistemas de carga y arquitectura electrónica del vehículo.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/micsig/electronica-de-consumo.webp"
                alt="Electrónica de consumo">
            <div class="app-text-overlay">
                <h3>Electrónica de consumo</h3>
                <p>Miniaturización, bajo consumo y alta integración en dispositivos móviles, wearables y línea blanca.
                </p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/micsig/educacion.webp" alt="Educación">
            <div class="app-text-overlay">
                <h3>Educación</h3>
                <p>Plataformas de práctica para enseñar principios de electrónica y medición con equipo real.</p>
            </div>
        </div>
    </div>

    <!-- CATÁLOGOS -->
    <div class="text-center mb-5" id="catalogos">
        <h2 class="section-title mx-auto text-uppercase" style="margin-bottom: 10px;">Catálogos y Documentación</h2>
        <p class="text-muted" style="font-size: 1.1rem;">Especificaciones, rangos, dimensiones y códigos de pedido de
            toda
            la línea.</p>
    </div>

    <div class="d-flex justify-content-center flex-wrap"
        style="gap: 30px; max-width: 1200px; margin: 0 auto 50px; padding: 0 15px;">
        <div class="product-card" style="width: 100%; max-width: 480px; padding: 35px;">
            <span class="area-badge">PDF</span>
            <h4>Catálogo de Productos Micsig</h4>
            <p>Catálogo completo de osciloscopios, puntas de prueba y accesorios de la marca Micsig.</p>
            <a class="btn-circle text-center mt-3"
                style="width: fit-content; margin: 0 auto; display: block; align-self: center;"
                href="https://www.logicbus.com.mx/pdf/357/micsig-product-catalog.pdf" target="_blank"
                rel="noopener noreferrer">Ver catálogo</a>
        </div>
    </div>

    <!-- PREGUNTAS FRECUENTES (Reusando Acordeón de Allybot) -->
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
                                1. ¿Qué ventaja real da un osciloscopio de 12 bits frente a uno de 8 bits?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="faq1" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                La resolución vertical define en cuántos pasos se digitaliza la señal: 8 bits son 256
                                niveles y 12 bits son 4,096. En la práctica se traduce en poder ver rizado, ruido y
                                pequeñas variaciones montadas sobre una señal grande sin tener que amplificar y perder
                                contexto.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq2">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                                2. ¿Para qué sirve la limitación de ancho de banda?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                Es una técnica deliberada para restringir un osciloscopio de alto ancho de banda a un
                                ancho menor y filtrar señales de alta frecuencia. Reduce el ruido que a veces aparece en
                                la forma de onda y entrega una señal más limpia, aunque al mismo tiempo atenúa o elimina
                                los componentes de alta frecuencia. Los valores típicos son ancho de banda completo y 20
                                MHz; algunos equipos incluyen además filtros paso altas y paso bajas.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq3">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                                3. ¿Cómo se mide correctamente una señal diferencial?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                Lo mejor es usar una punta diferencial, que da la medición más precisa y objetiva. Si no
                                se cuenta con una, se pueden conectar dos puntas de un solo extremo a dos canales (por
                                ejemplo Ch1 y Ch2) y hacer la resta matemática Ch1 − Ch2 para analizar la forma de onda
                                resultante. En ese caso las dos puntas deben ser idénticas y la escala vertical de ambos
                                canales debe ser la misma; de lo contrario el error de medición será considerable.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq4">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                                4. Al encender el equipo, la línea de referencia de cero no coincide con el cursor. ¿Es
                                una falla?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                No. Al arrancar, el osciloscopio presenta deriva térmica y, después del calentamiento,
                                la traza regresa a la línea base horizontal. Si la desviación persiste, se puede usar la
                                función de calibración automática en la configuración de usuario.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq5">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
                                5. Con la punta conectada y sin señal aplicada aparece mucha interferencia. ¿El piso de
                                ruido es alto?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="faq5" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                Al conectar la punta se captan cargas del aire y eso genera una forma de onda en
                                pantalla. Es un fenómeno normal que refleja precisamente la sensibilidad del
                                instrumento.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq6">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse6" role="button" aria-expanded="false" aria-controls="collapse6">
                                6. ¿Qué formatos de memoria USB y de archivo maneja?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="faq6" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                La actualización del sistema solo admite memorias formateadas en FAT32; para
                                almacenamiento son compatibles NTFS y FAT32. Las formas de onda se guardan en formato
                                WAV y se pueden abrir después desde el canal de referencia del propio osciloscopio.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faq7">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed"
                                style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse"
                                href="#collapse7" role="button" aria-expanded="false" aria-controls="collapse7">
                                7. ¿Cómo se conecta a la app móvil o a la red?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="faq7" data-parent="#accordionFAQs">
                            <div class="card-body text-muted">
                                La dirección IP se consulta en Configuración > Red > WLAN, en el icono de ajustes de la
                                red, dentro de la sección Avanzado. Esa IP se ingresa en el campo correspondiente de la
                                aplicación móvil para conectar con el osciloscopio. El equipo también permite
                                transferencia de archivos por FTP cuando está en la misma subred que la PC o el celular.
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
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE MICSIG</h2>
            <span class="paragraph"
                style="color: var(--lb-white); font-size: 1.1rem; display: block; max-width: 800px; margin: 0 auto;">
                Cuéntanos qué necesitas medir y nuestros ingenieros te ayudan a elegir el osciloscopio y la punta
                adecuados.
            </span>

            <!-- Botones de Acción -->
            <div class="d-flex justify-content-center flex-wrap mt-4" style="gap: 15px;">
                <a href="#contacto" class="btn font-weight-bold"
                    style="background-color: var(--lb-accent); color: #fff; border: 2px solid var(--lb-accent); border-radius: 30px; padding: 10px 30px; text-decoration: none; transition: all 0.3s ease;">
                    Solicitar cotización
                </a>
                <a href="https://tienda.logicbus.com.mx/micsig" target="_blank" class="btn font-weight-bold"
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