<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <title>Sistemas de Pruebas y Medición | Adquisición de Datos | Vitrek</title>
    <meta name="description"
        content="Vitrek ofrece equipos de pruebas de seguridad y eléctricos, sistemas solares y de metrología, sistemas de vibración/ajuste de motores, y más.">
    <meta name="keywords"
        content="Vitrek, Logicbus, Automatizacion, Pruebas Eléctricas, Metrología, Adquisición de Datos, Hipot, Seguridad Eléctrica">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?= $favicon ?>
    <?= $boostrap_css ?>
    <?= $own_file_css ?>
    <?= $subcategorias ?>
    <?= $menu ?>
    <?= $estilos ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?= $footer_css ?>
    <?= $flickity_css ?>
    <?= $google_analytics ?>
    <?= $var_headers ?>

    <style>
        /* Ocultar barra lateral antigua para usar full-width */
        #leftBar {
            display: none;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <?= $var_body ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Vitrek</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Imagen 100% -->
    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/VITREK-BANNER.webp"
            alt="VITREK Equipos DAQ de alta velocidad" title="VITREK Equipos DAQ de alta velocidad">
    </div>

    <!-- H1  -->
    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Sistemas de Pruebas y
            Medición</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">VITREK</span>
    </h1>

    <!-- Texto de introducción -->
    <p class="intro-text">
        <b>Vitrek</b> es líder mundial en el suministro de equipos de prueba eléctricas y de seguridad, adquisición de
        datos de alta velocidad y soluciones de grabación y reproducción de RF en tiempo real para una variedad de
        industrias, incluidos fabricantes de electrónica, electrodomésticos y automóviles, laboratorios de calibración y
        prueba, departamentos de I+D, médico, aeroespacial, militar y de iluminación.
    </p>
    <p class="intro-text">
        Ofreciendo tanto el mejor equipo como el soporte de primer nivel, elija Vitrek para sus próximas necesidades de
        equipos de adquisición de datos de alta velocidad y pruebas eléctricas.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/vitrek" target="_blank"><i
                class="fa fa-shopping-cart mr-2"></i> Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#catalogos">Catálogos y Manuales</a>
    </nav>

    <!-- Sección Productos -->
    <h2 class="section-title" id="productos">NUESTROS PRODUCTOS</h2>
    <div class="container mb-5">
        <div class="products-grid">

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Serie-V7X_c_5230.html" target="_blank">
                    <img loading="lazy"
                        src="images/categorias/probadores-de-seguridad-electrica-de-hipot-serie-v7x.webp"
                        alt="Probadores HiPot Serie V7X">
                </a>
                <h4>Probadores HiPot Serie V7X</h4>
                <p class="small text-muted">Compactos y económicos con pantalla táctil. Modelos que ofrecen AC/DC Hipot
                    a 5KV, aislamiento a 450 Gig ohms.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Serie-V7X_c_5230.html" target="_blank">Ver en tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Serie-95X_c_8138.html" target="_blank">
                    <img loading="lazy"
                        src="images/categorias/probadores-de-seguridad-electrica-de-hipot-serie-95x.webp"
                        alt="Probadores HiPot Serie 95X">
                </a>
                <h4>Probadores HiPot Serie 95X</h4>
                <p class="small text-muted">Para aplicaciones exigentes con hasta 200 mA de consumo. Máximos de 6, 10,
                    30 KVAC o 6, 5, 11, 15 KVDC.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Serie-95X_c_8138.html" target="_blank">Ver en tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Analizadores-de-Potencia_c_8037.html" target="_blank">
                    <img loading="lazy" src="images/categorias/analizador-de-potencia-de-armonicos.webp"
                        alt="Analizadores de Potencia">
                </a>
                <h4>Analizadores de Potencia</h4>
                <p class="small text-muted">Analizadores de armónicos de precisión PA9xx. Rendimiento de banda ancha
                    multicanal de alta precisión.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Analizadores-de-Potencia_c_8037.html" target="_blank">Ver en tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Medici%C3%B3n-de-alto-voltaje_c_8139.html" target="_blank">
                    <img loading="lazy" src="images/categorias/medidores-de-alto-voltaje.webp"
                        alt="Medidores de Alto Voltaje">
                </a>
                <h4>Medidores de Alto Voltaje</h4>
                <p class="small text-muted">El medidor Vitrek 4700 mide hasta 10KV DC/AC rms directamente. Con sondas
                    inteligentes HV se amplía hasta 150KV.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Medici%C3%B3n-de-alto-voltaje_c_8139.html" target="_blank">Ver en tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/964i_p_36890.html" target="_blank">
                    <img loading="lazy" src="images/categorias/multiplexores-de-alto-voltaje.webp"
                        alt="Multiplexores HV 964i">
                </a>
                <h4>Multiplexores HV 964i</h4>
                <p class="small text-muted">Automatiza de forma segura y eficiente sus necesidades de conmutación de
                    alto voltaje y pruebas Hipot de múltiples puntos.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/964i_p_36890.html" target="_blank">Ver en tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Conmutaci%C3%B3n-de-Alta-Tensi%C3%B3n-Prueba-de-Cables_c_8140.html" target="_blank">
                    <img loading="lazy" src="images/categorias/probadores-de-resistencia-de-aislamiento.webp"
                        alt="Resistencia de Aislamiento 98x">
                </a>
                <h4>Resistencia de Aislamiento 98x</h4>
                <p class="small text-muted">Ideal para paneles solares y vehículos eléctricos. Función multipuntos y
                    medición de fugas en picoamperios.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Conmutaci%C3%B3n-de-Alta-Tensi%C3%B3n-Prueba-de-Cables_c_8140.html" target="_blank">Ver en tienda</a>
            </div>

        </div>
    </div>

    <!-- Catálogos y Documentación -->
    <div class="bg-light-accent py-5" id="catalogos">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0 !important;">CATÁLOGOS Y MANUALES</h2>
            <div class="row justify-content-center align-items-center mt-4">
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <a href="pdf/catalogos/vitrek-catalogo.pdf" target="_blank"
                        class="catalog-item mx-auto d-inline-block">
                        <span class="pdf-badge">PDF</span>
                        <img loading="lazy" src="pdf/catalogos/portada-catalogo-vitrek.webp" alt="Catálogo Vitrek">
                        <h4>Catálogo de Productos Vitrek</h4>
                    </a>
                </div>
                <div class="col-md-5 text-center">
                    <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=vitrek"
                        class="ghost-manual-box mx-auto d-inline-block p-4">
                        <img loading="lazy" src="images/documentacion.svg" alt="Base de conocimientos"
                            style="width: 100px; margin-bottom: 15px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary);">Ver Base de
                            Documentación y Manuales</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacto (Odoo Formulario) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿REQUIERES ASESORÍA PARA TU PROYECTO?
            </h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestro equipo de expertos en
                instrumentación y medición está listo para apoyarte.</span>
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

    <?= $jquery_js ?>
    <?= $bootstrap_js ?>
    <?= $own_file_js ?>

</body>

<?= $var_footer ?>

</html>