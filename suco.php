<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SUCO | Interruptores, Sensores y Soluciones de Presión</title>

    <meta name="description" content="SUCO: Empresa alemana especializada en interruptores y sensores de presión, transmisores, embragues y frenos para aplicaciones industriales e hidráulicas.">
    <meta name="keywords" content="SUCO, Logicbus, Interruptores de presión, Sensores de presión, Transmisores, Embragues, Frenos industriales, Sistemas hidráulicos">

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
    #leftBar{display:none}
    .btn-circle{text-transform:none!important}
    .apps-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px;max-width:1200px;margin:0 auto 50px;padding:0 15px}
    @media (min-width:992px){.apps-grid,.products-grid{grid-template-columns:repeat(4,1fr)!important}}
    .app-card{position:relative;border-radius:15px;overflow:hidden;aspect-ratio:3/4;background-color:#000}
    .app-card img{width:100%;height:100%;object-fit:cover;display:block;opacity:.85}
    .app-text-overlay{position:absolute;bottom:0;left:0;width:100%;padding:30px 20px 20px;background:linear-gradient(to top,rgba(0,0,0,.95) 0,transparent 100%);color:#fff;text-align:left}
    .app-text-overlay h3{font-size:1.3rem;margin:0 0 8px;color:#fff;font-weight:700}
    .app-text-overlay p{font-size:.9rem;color:#e0e0e0;margin:0;line-height:1.4}
    .cert-logos-container{display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:30px;margin-top:30px}
    .cert-logos-container img{max-height:80px;width:auto;object-fit:contain;-webkit-filter:grayscale(100%);filter:grayscale(100%);opacity:.7;transition:all .3s ease}
    .cert-logos-container img:hover{-webkit-filter:grayscale(0)!important;filter:grayscale(0)!important;opacity:1!important}
    .flickity-prev-next-button{background:transparent!important;color:#000!important}
    .flickity-button-icon{fill:#000!important}
    </style>
</head>

<body onLoad="if(typeof menu_actual === 'function') menu_actual();">
    <?php echo isset($var_body) ? $var_body : ''; ?>
    <?php if (file_exists("libreria/header.view.php")) require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="sensores-de-presion" class="blue link-orange">Sensores de Presión</a></li>
                <li class="breadcrumb-item active" aria-current="page">SUCO</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/suco-banner.png">
            <source src="https://www.logicbus.com.mx/assets/videos/suco-banner.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Interruptores, Sensores y Soluciones de Protección para</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">SISTEMAS HIDRÁULICOS E INDUSTRIALES</span>
    </h1>

    <p class="intro-text">
        <strong>SUCO</strong> es una empresa alemana con más de 80 años de experiencia especializada en el desarrollo y fabricación de interruptores de presión, sensores de presión, transmisores, embragues y frenos para aplicaciones industriales, móviles e hidráulicas. Sus soluciones están diseñadas para operar de manera confiable en entornos exigentes, ofreciendo alta precisión, durabilidad y seguridad en sistemas críticos de control y monitoreo.
    </p>

    <p class="intro-text">
        La gama de productos de SUCO incluye interruptores de presión mecánicos y electrónicos, transmisores de presión, sensores para aplicaciones hidráulicas, así como embragues y frenos industriales que ayudan a proteger equipos contra sobrecargas, impactos y desgaste prematuro. Sus dispositivos están fabricados bajo estrictos estándares de calidad y cuentan con certificaciones para aplicaciones en ambientes peligrosos y de alta exigencia.
    </p>

    <p class="intro-text">
        Gracias a su robustez, precisión y capacidad de personalización, las soluciones de SUCO son ampliamente utilizadas en maquinaria móvil, automatización industrial, construcción, petróleo y gas, transporte, defensa, aeroespacial y sistemas hidráulicos. Sus productos permiten optimizar el control de procesos, mejorar la seguridad operativa y aumentar la disponibilidad de los equipos en aplicaciones donde la confiabilidad es fundamental.
    </p>

    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/suco" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#aplicaciones">Industrias</a>
        <a class="btn-circle" href="#certificaciones">Certificaciones</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
    </nav>

    <h2 class="section-title" id="productos">Nuestros Productos</h2>
    <div class="products-grid">

        <div class="product-card">
            <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/2025/07/mechanical-pressure-switches.jpg" alt="Mechanical Pressure Switches">
            <h4>Interruptores de Presión Mecánicos</h4>
            <p>Monitorean la presión de líquidos o gases, abriendo o cerrando circuitos en umbrales establecidos. Fabricados con materiales de alta calidad, ofrecen un rendimiento fiable y sensible.</p>
            <a class="btn-circle" style="width: 100%;" href="https://tienda.logicbus.com.mx/suco" target="_blank">Ver en tienda</a>
        </div>

        <div class="product-card">
            <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/2025/07/electronic-pressure-switches.jpg" alt="Electronic Pressure Switches">
            <h4>Interruptores de Presión Electrónicos</h4>
            <p>Utilizan un sensor eléctrico para medir el cambio en la presión de entrada. Cuentan con pantallas digitales para configurar la función de conmutación de manera precisa.</p>
            <a class="btn-circle" style="width: 100%;" href="https://tienda.logicbus.com.mx/suco" target="_blank">Ver en tienda</a>
        </div>

        <div class="product-card">
            <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/2025/07/pressure-transducers.jpg" alt="Pressure Transducers">
            <h4>Transductores de Presión (Sensores)</h4>
            <p>Mejoran la seguridad operativa y el rendimiento, ofreciendo un excelente valor. Ideales para entornos exigentes donde los datos de presión precisos son cruciales.</p>
            <a class="btn-circle" style="width: 100%;" href="https://tienda.logicbus.com.mx/suco" target="_blank">Ver en tienda</a>
        </div>

        <div class="product-card">
            <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/2025/07/clutch-brakes.jpg" alt="Clutches & Brakes">
            <h4>Embragues y Frenos</h4>
            <p>Protegen su equipo contra impactos repentinos y desgaste, garantizando una mayor vida útil y un mejor rendimiento. Soluciones centrífugas y electromagnéticas disponibles.</p>
            <a class="btn-circle" style="width: 100%;" href="https://tienda.logicbus.com.mx/suco" target="_blank">Ver en tienda</a>
        </div>

    </div>

    <h2 class="section-title" id="aplicaciones">Industrias de Aplicación</h2>
    <div class="apps-grid">

        <div class="app-card">
            <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/2024/10/Pressure-Sensors-in-Construction-Cranes-900-x-750-px.png" alt="Construcción">
            <div class="app-text-overlay">
                <h3>Construcción</h3>
                <p>Interruptores diseñados para entornos difíciles que necesitan herramientas resistentes y confiables, adaptándose a la mayoría de los equipos.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/2021/01/icon-Aerospace.jpg" alt="Aeroespacial">
            <div class="app-text-overlay">
                <h3>Aeroespacial</h3>
                <p>Sensores de alta precisión diseñados para sistemas de aire, motores, combustible y frenado, donde la fiabilidad es crítica.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/2021/01/icon-Military-Defense.jpg" alt="Defensa y Militar">
            <div class="app-text-overlay">
                <h3>Defensa y Militar</h3>
                <p>Transductores y tacómetros de alto rendimiento que cumplen con estándares militares (NSN), rigurosamente probados.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/2022/07/oil-gas-pressure-sensors-applications.jpg" alt="Petróleo y Gas">
            <div class="app-text-overlay">
                <h3>Petróleo y Gas</h3>
                <p>Sensores avanzados de Silicio sobre Zafiro, proporcionando un rendimiento confiable y exacto, ideal para condiciones de perforación.</p>
            </div>
        </div>

    </div>

    <div class="bg-white py-5">
        <div class="container text-center">
            <h2 class="section-title" id="certificaciones">CERTIFICACIONES Y REGISTROS</h2>
            <p class="intro-text mb-4">
                SUCO ESI North America cuenta con una amplia gama de transmisores intrínsecamente seguros, todos aprobados por ATEX e IECEx.
            </p>

            <div class="cert-logos-container">
                <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/elementor/thumbs/csa-mark-rb8m4j0kritlb7yo94jc43vlbzzx1xlhua23fiwuf4.png" alt="CSA Mark">
                <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/elementor/thumbs/RoHS-rb8m49m6v6gq34cbs0h2f68ze5a8wyk6gzj8mras5c.png" alt="RoHS">
                <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/elementor/thumbs/ATEX-LOGO-1-rb8m5c5kndxhb4sciz4rreivqy0aojt6aaa5b3pn28.png" alt="ATEX Certified">
                <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/elementor/thumbs/AS-9100-RGB-rb8m5b7qgjw6zitpogq56wrf5k4xgupfy5mnttr18g.jpg" alt="AS 9100">
                <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/elementor/thumbs/ISO-9001-2008-Certified-rb8m4j0kritlb7yo94jc43vlbzzx1xlhua23fiwuf4.webp" alt="ISO 9001 2008">
                <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/elementor/thumbs/ce-mark-rb8m4rh4h1567pmdvq6z8jqqogu7z7j2vfxgr0kav4.png" alt="CE Mark">
                <img loading="lazy" src="https://sucoesi.com/wp-content/uploads/elementor/thumbs/DNV-logo-rjef6n9pqjvtq2b7uc07cl2kfeu3hbg9r6jtb3by0w.png" alt="DNV Logo">
            </div>
        </div>
    </div>

    <h2 class="section-title" id="catalogos">Catálogos y Manuales</h2>
    <div class="container-fluid mb-5" style="max-width: 1400px;">
        <div class="simple-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "autoPlay": 3000, "pageDots": true, "groupCells": true, "imagesLoaded": true }'>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/Aerospace-brochure.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/Aerospace-brochure.webp" alt="Aerospace Brochure" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">Aerospace Brochure</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/SUCO-ProductOverview-1.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/SUCO-ProductOverview-1.webp" alt="SUCO Product Overview 1" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">SUCO Product Overview 1</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/SUCO-ProductOverview-2.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/SUCO-ProductOverview-2.webp" alt="SUCO Product Overview 2" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">SUCO Product Overview 2</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/Pressure-Transmitters-and-Transducer.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/Pressure-Transmitters-and-Transducers.webp" alt="Pressure Transmitters and Transducer" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">Pressure Transmitters and Transducer</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/Umschlag-aussen.indd.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/Umschlag-aussen.indd.webp" alt="Umschlag Aussen" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">Umschlag Aussen</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/Umschlag-aussen-3.indd.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/Umschlag-aussen-3.indd.webp" alt="Umschlag Aussen 3" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">Umschlag Aussen 3</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/Umschlag-aussen-2.indd.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/Umschlag-aussen-2.indd.webp" alt="Umschlag Aussen 2" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">Umschlag Aussen 2</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/pressure-transmitter-oil-gas-subsea.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/pressure-transmitter-oil-gas-subsea.webp" alt="Oil Gas Subsea Pressure Transmitter" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">Oil Gas Subsea Pressure Transmitter</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/Hydrogen-Sensors-Switches-web.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/Hydrogen-Sensors-Switches-web.webp" alt="Hydrogen Sensors & Switches" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">Hydrogen Sensors & Switches</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/ESI-Defense-Brochure-Revise.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/ESI-Defense-Brochure-Revise.webp" alt="ESI Defense Brochure" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">ESI Defense Brochure</h4>
                    </div>
                </a>
            </div>

            <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 px-3">
                <a href="https://www.logicbus.com.mx/pdf/354/Atex-pressure-transducer-brochure.pdf" target="_blank" style="text-decoration: none; display: block; height: 100%;">
                    <div class="product-card text-center" style="height: 100%; padding: 15px;">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/354/Atex-pressure-transducer-brochure.webp" alt="Atex Pressure Transducer" style="max-height: 250px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto 15px;">
                        <h4 style="font-size: 1.1rem; color: var(--lb-primary); margin-bottom: 0;">Atex Pressure Transducer</h4>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE SUCO</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a seleccionar el sensor o interruptor ideal.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>
    <?php if (file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>

    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>

    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>

    <?php echo isset($flickity_js) ? $flickity_js : ''; ?>

    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>

    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>

</html>