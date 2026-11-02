<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fuentes de Poder Industriales | Compra en línea | Logicbus</title>
    <meta name="description"
        content="Descubre nuestra amplia gama de fuentes de poder industriales: lineales, conmutadas y programables. Soluciones confiables para automatización y control de procesos.">
    <meta name="keywords"
        content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Automatizacion, Seguridad, Consultoría, Consultoria, Integración, Integracion, Proyecto, Radio Frecuencia, Cubos, Análisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisición, CONTROLLINO, controllino México, controllino mexico, controllino Guadalajara, PLC, nivel industrial, compatibilidad Arduino, control, automatización, controlador lógico programable, controlador, programable, entradas digitales, salidas digitales, entradas analogas, salidas analogas">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        /* Ocultar barra lateral heredada */
        #leftBar {
            display: none;
        }

        /* Logo Grid para productos relacionados */
        .brand-logos-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            align-items: center;
            margin-top: 15px;
        }

        .brand-logos-grid a {
            flex: 0 0 calc(50% - 15px);
            max-width: 120px;
            text-align: center;
        }

        .brand-logos-grid img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .brand-logos-grid img:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 bg-transparent">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="automatizacion-control-procesos"
                        class="blue link-orange">Automatización y control de procesos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fuentes de Poder</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <a href="https://tienda.logicbus.com.mx/Fuentes-de-Poder_c_2802.html" target="_blank">
            <img loading="lazy" src="images/banner/www/fuentes-de-poder-banner-general.jpg"
                alt="Fuentes de Poder Logicbus" title="Fuentes de Poder Logicbus" style="width: 100%;">
        </a>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Conversión de Energía</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">FUENTES
            DE PODER</span>
    </h1>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/Fuentes-de-Poder_c_2802.html" target="_blank">Ver en
            Tienda</a>
        <a class="btn-circle" href="#categorias">Categorías</a>
        <a class="btn-circle" href="#usos">Productos Relacionados</a>
    </nav>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                <p class="intro-text text-justify">
                    Existen las <strong>fuentes de conmutación</strong>, las cuales transforman la energía mediante
                    pulsos con transistores de conmutación. Estas son las más comunes en el mercado y las más utilizadas
                    en la industria debido a su eficiencia y tamaño reducido, con facilidad de montar en paneles y
                    gabinetes. Normalmente estas fuentes generan en su salida voltajes estándares de 12v, 24v y 48v con
                    posibilidad de variar su valor en un 10%.
                </p>
                <p class="intro-text text-justify">
                    También existen <strong>fuentes de poder lineales</strong> que transforman la energía mediante
                    transformadores y diodos a frecuencias de la línea principal o poco mayores. Estas fuentes fueron
                    las primeras en existir y son más grandes debido a que utilizan transformadores para la conversión
                    directa de la energía, por lo que suelen emitir mucho calor. Son los tipos de fuentes más simples
                    pero más robustas y de más baja eficiencia que las de conmutación.
                </p>
                <p class="intro-text text-justify">
                    Dentro de estas dos categorías se encuentran las <strong>fuentes de poder programables</strong> que
                    permiten la selección del voltaje y la corriente de salida por medio de un selector digital o
                    comunicación serial/USB.
                </p>
            </div>

            <div class="col-12 col-lg-5">
                <div class="bg-light p-4 rounded shadow-sm border mb-4">
                    <h4 style="color: var(--lb-primary); font-weight: bold; font-size: 1.2rem;">Logicbus ofrece fuentes
                        de poder con:</h4>
                    <ul class="text-muted mt-3 small pl-3" style="line-height: 1.8;">
                        <li>Una gran variedad de rangos de voltaje/corriente para diferentes tipos de aplicaciones.</li>
                        <li>Diseño compacto con montaje en riel DIN.</li>
                        <li>Opciones ecológicas en RoHS.</li>
                        <li>Modelos de bajo costo y alta disponibilidad.</li>
                        <li>Equipos con certificación de eficiencia 80 Plus.</li>
                    </ul>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="https://tienda.logicbus.com.mx/assets/PDF/catalogos/Catalog-Reign-Power-Logicbus.pdf"
                        target="_blank" class="catalog-item">
                        <span class="pdf-badge">PDF</span>
                        <img loading="lazy" src="assets/PDF/catalogos/Portada-Reign-Power-Logicbus.webp"
                            alt="Catálogo Reign Power">
                        <h4 class="text-center mt-2">Catálogo de Fuentes de poder</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title mt-5 bg-transparent" id="categorias">Categorías</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="product-card h-100 d-flex flex-column">
                    <a href="fuentes-de-poder-montaje-en-riel-din" target="_blank">
                        <img loading="lazy"
                            src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D100/assets/images/LP1050D-24SDA.jpg"
                            alt="Fuente de Poder con Montaje en riel Din">
                    </a>
                    <h4 class="mt-3 text-center">Montaje en Riel DIN</h4>
                    <p class="small text-muted text-justify flex-grow-1 px-2">Fuentes de poder de tamaño compacto de
                        tipo AC a DC, buses DC y Trifásica AC a DC diseñadas específicamente para tableros con riel DIN.
                    </p>
                    <a class="btn-circle mt-auto mx-auto" href="fuentes-de-poder-montaje-en-riel-din"
                        target="_blank">Ver modelos</a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="product-card h-100 d-flex flex-column">
                    <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-fuentes-de-poder-reign-power-fuentes-estandares"
                        target="_blank">
                        <img loading="lazy"
                            src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D100/assets/images/RP1320-12C.JPG"
                            alt="Fuente de poder estándar">
                    </a>
                    <h4 class="mt-3 text-center">Fuentes Estándar</h4>
                    <p class="small text-muted text-justify flex-grow-1 px-2">Fuentes de poder de uso estándar y de
                        propósito general para la industria. Altamente eficientes y fáciles de integrar.</p>
                    <a class="btn-circle mt-auto mx-auto"
                        href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-fuentes-de-poder-reign-power-fuentes-estandares"
                        target="_blank">Ver modelos</a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="product-card h-100 d-flex flex-column">
                    <a href="https://tienda.logicbus.com.mx/ICP-DAS_c_2835.html" target="_blank">
                        <img loading="lazy"
                            src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D100/assets/images/categorias/automatizacion_control_procesos/icp-das.jpg"
                            alt="Fuente de Poder ICP DAS">
                    </a>
                    <h4 class="mt-3 text-center">Eliminadores y Módulos</h4>
                    <p class="small text-muted text-justify flex-grow-1 px-2">Adaptadores de poder de pared o escritorio
                        para uso directo en dispositivos electrónicos industriales, DAQs y controladores.</p>
                    <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/ICP-DAS_c_2835.html"
                        target="_blank">Ver modelos</a>
                </div>
            </div>

        </div>
    </div>

    <h2 class="section-title mt-5 bg-transparent" id="usos">Productos que puedes alimentar</h2>
    <div class="container mb-5">
        <p class="text-center text-muted mb-5">Nuestras fuentes de poder son el corazón ideal para suministrar energía
            de manera confiable a las siguientes tecnologías y marcas:</p>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center">
                    <h5
                        style="color: var(--lb-primary); font-weight: bold; font-size: 1.1rem; border-bottom: 2px solid var(--lb-accent); padding-bottom: 10px;">
                        Switches y Convertidores</h5>
                    <div class="brand-logos-grid mt-3">
                        <a href="https://www.logicbus.com.mx/rta" target="_blank" title="RTA">
                            <img loading="lazy" src="images/nuestras_marcas/rta02.jpg" alt="RTA Logo">
                        </a>
                        <a href="sealevel" target="_blank" title="Sealevel">
                            <img loading="lazy" src="images/nuestras_marcas/SEA-LEVEL.jpg" alt="Sealevel Logo">
                        </a>
                        <a href="https://www.logicbus.com.mx/atop-technologies" target="_blank" title="Atop">
                            <img loading="lazy"
                                src="images/nuestras_marcas/atop-technologies-logo-redes-industriales.jpg"
                                alt="Atop Logo">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center">
                    <h5
                        style="color: var(--lb-primary); font-weight: bold; font-size: 1.1rem; border-bottom: 2px solid var(--lb-accent); padding-bottom: 10px;">
                        Módulos DAQ</h5>
                    <div class="brand-logos-grid mt-3">
                        <a href="icp-das" target="_blank" title="ICP DAS">
                            <img loading="lazy" src="images/nuestras_marcas/ICPDAS-02.jpg" alt="ICP DAS Logo">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center">
                    <h5
                        style="color: var(--lb-primary); font-weight: bold; font-size: 1.1rem; border-bottom: 2px solid var(--lb-accent); padding-bottom: 10px;">
                        PLCs Industriales</h5>
                    <div class="brand-logos-grid mt-3">
                        <a href="controllino" target="_blank" title="Controllino">
                            <img loading="lazy" src="images/nuestras_marcas/Controllino.jpg" alt="Controllino Logo">
                        </a>
                        <a href="fatek" target="_blank" title="Fatek">
                            <img loading="lazy" src="images/nuestras_marcas/Fatek02.jpg" alt="Fatek Logo">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center">
                    <h5
                        style="color: var(--lb-primary); font-weight: bold; font-size: 1.1rem; border-bottom: 2px solid var(--lb-accent); padding-bottom: 10px;">
                        Celdas de Carga y Acondicionadores</h5>
                    <div class="brand-logos-grid mt-3">
                        <a href="https://www.logicbus.com.mx/futek" target="_blank" title="Futek">
                            <img loading="lazy" src="images/nuestras_marcas/FUTEK-02.jpg" alt="Futek Logo">
                        </a>
                        <a href="seneca" target="_blank" title="Seneca">
                            <img loading="lazy" src="images/nuestras_marcas/seneca02.jpg" alt="Seneca Logo">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center">
                    <h5
                        style="color: var(--lb-primary); font-weight: bold; font-size: 1.1rem; border-bottom: 2px solid var(--lb-accent); padding-bottom: 10px;">
                        Sensores de Temperatura, Presión y Proximidad</h5>
                    <div class="brand-logos-grid mt-3" style="justify-content: space-around;">
                        <a href="https://www.logicbus.com.mx/calex" target="_blank" title="Calex">
                            <img loading="lazy" src="images/nuestras_marcas/CALEX.jpg" alt="Calex Logo">
                        </a>
                        <a href="https://www.logicbus.com.mx/sensores-capacitivos-sensores-de-proximidad-inductivos-magnetorresistivos-y-controladores"
                            target="_blank" title="Rechner">
                            <img loading="lazy" src="images/nuestras_marcas/logo-rechner.jpg" alt="Rechner Logo">
                        </a>
                        <a href="https://www.logicbus.com.mx/WayCon" target="_blank" title="WayCon">
                            <img loading="lazy" src="images/nuestras_marcas/Logo-WayCon.jpg" alt="WayCon Logo">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px; text-transform: uppercase;">¿Necesitas
                asesoría para elegir tu fuente?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos
                para ayudarte a dimensionar y seleccionar la fuente de poder correcta para tu aplicación.</span>
        </div>

        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe loading="lazy" src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0"
                    allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>