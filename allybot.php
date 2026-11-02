<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Allybot | Robots autónomos de limpieza para la industria</title>

    <meta name="description" content="Robots autónomos de limpieza impulsados por inteligencia artificial para automatizar tareas en entornos comerciales, industriales e institucionales.">
    <meta name="keywords" content="Allybot, Robots de limpieza, AMR, Inteligencia Artificial, Limpieza industrial, Limpieza autónoma, Allybot-C2, Allybot-C2 Pro, Allybot-C3 Mini, Logicbus">

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

        .btn-circle {
            text-transform: none !important;
        }

        .area-badge {
            background-color: #f1f5f9;
            color: var(--lb-primary, #22527A);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: bold;
            margin-bottom: 15px;
            display: inline-block;
        }

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
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
            background-color: #000;
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
                <li class="breadcrumb-item"><a href="robots-moviles-autonomos-amr-agv" class="blue link-orange">Robots móviles autónomos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Allybot</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Video 100% -->
    <div class="banner-container mb-5">
        <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/banner-allybot.png">
            <source src="https://www.logicbus.com.mx/assets/videos/banner-allybot.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Robots Autónomos de Limpieza para</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">ESPACIOS COMERCIALES E INDUSTRIALES</span>
    </h1>

    <p class="intro-text">
        <strong>Allybot</strong> es una empresa especializada en el desarrollo de robots autónomos de limpieza impulsados por inteligencia artificial, diseñados para automatizar las tareas de mantenimiento en entornos comerciales, industriales e institucionales. Sus soluciones combinan navegación inteligente, sensores avanzados y sistemas de limpieza multifunción para optimizar la eficiencia operativa y reducir los costos asociados a la limpieza manual.
    </p>

    <p class="intro-text">
        La gama de productos de Allybot incluye robots autónomos capaces de realizar funciones de fregado, aspirado, barrido y trapeado en una sola plataforma. Gracias a sus sistemas de navegación inteligente, detección de obstáculos y administración remota, estos equipos pueden operar de manera segura y eficiente en espacios como fábricas, centros comerciales, hospitales, aeropuertos, oficinas, hoteles y centros logísticos.
    </p>

    <p class="intro-text">
        Una de las principales ventajas de Allybot es su enfoque en la automatización inteligente y la facilidad de operación. Sus robots cuentan con funciones como recarga automática, gestión remota, actualizaciones OTA y compatibilidad con elevadores y sistemas de edificios inteligentes, permitiendo una limpieza continua y autónoma.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="#" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#aplicaciones">Industrias</a>
        <a class="btn-circle" href="#faq-robots">FAQs</a>
    </nav>

    <h2 class="section-title" id="productos">Nuestros Robots</h2>
    <div class="products-grid">

        <div class="product-card">
            <span class="area-badge">Para 1000-2000 ㎡</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/allybot/Allybot-C2.webp" alt="Allybot-C2">
            <h4>Allybot-C2</h4>
            <div class="tags-container">
                <span class="tag-badge">3 en 1</span>
                <span class="tag-badge">Modular</span>
                <span class="tag-badge">Seguridad</span>
            </div>
            <p>Fregado, aspirado y trapeado, adecuado para todo tipo de superficies comerciales.</p>
            <a class="btn-circle" style="width: 100%;" href="https://tienda.logicbus.com.mx/Allybot-C2_p_38448.html" target="_blank" rel="noopener noreferrer">Descubrir más</a>
        </div>

        <div class="product-card">
            <span class="area-badge">Para 2000-10000 ㎡</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/allybot/Allybot-C2-Pro.webp" alt="Allybot-C2 Pro">
            <h4>Allybot-C2 Pro</h4>
            <div class="tags-container">
                <span class="tag-badge">All-in-One</span>
                <span class="tag-badge">Auto-carga</span>
                <span class="tag-badge">Seguridad</span>
            </div>
            <p>Auto recarga, reabastecimiento de agua y drenaje automático, sin necesidad de operación manual.</p>
            <a class="btn-circle" style="width: 100%;" href="https://tienda.logicbus.com.mx/Allybot-C2-PRO_p_38449.html" target="_blank" rel="noopener noreferrer">Descubrir más</a>
        </div>

        <div class="product-card">
            <span class="area-badge">Para 100-1000 ㎡</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/images/allybot/Allybot-C3-Mini.webp" alt="Allybot-C3 Mini">
            <h4>Allybot-C3 Mini</h4>
            <div class="tags-container">
                <span class="tag-badge">4 en 1</span>
                <span class="tag-badge">Compacto</span>
                <span class="tag-badge">Seguridad</span>
            </div>
            <p>Fregado, aspirado, barrido y trapeado. Ideal para pasillos estrechos y áreas compactas.</p>
            <a class="btn-circle" style="width: 100%;" href="https://tienda.logicbus.com.mx/Allybot-C3-MINI_p_38450.html" target="_blank" rel="noopener noreferrer">Descubrir más</a>
        </div>

    </div>

    <!-- Industrias -->
    <h2 class="section-title" id="aplicaciones">Industrias</h2>
    <div class="apps-grid">

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/allybot/Supermercados.jpg" alt="Supermercados">
            <div class="app-text-overlay">
                <h3>Supermercados</h3>
                <p>Alta afluencia de personas, gran variedad de suciedad y necesidad de limpieza frecuente.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/allybot/Edificios-de-Oficinas.jpg" alt="Edificios de oficinas">
            <div class="app-text-overlay">
                <h3>Edificios de Oficinas</h3>
                <p>Altos requisitos de imagen, mantenimiento de suelos de mármol y limpieza en zonas comunes.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/allybot/Parques-Industriales.jpg" alt="Parques industriales">
            <div class="app-text-overlay">
                <h3>Parques Industriales</h3>
                <p>Grandes superficies que requieren amplia cobertura de limpieza y adaptación a distintos pavimentos.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/allybot/Hoteles.jpg" alt="Hoteles">
            <div class="app-text-overlay">
                <h3>Hoteles</h3>
                <p>Altos estándares de limpieza en habitaciones y vestíbulos con necesidad de funcionamiento silencioso.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/allybot/Escuelas.jpg" alt="Escuelas">
            <div class="app-text-overlay">
                <h3>Escuelas</h3>
                <p>Elevado tránsito de personas que exige una limpieza constante, segura y libre de polvo.</p>
            </div>
        </div>

        <div class="app-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/allybot/Fabricas.jpg" alt="Fábricas">
            <div class="app-text-overlay">
                <h3>Fábricas</h3>
                <p>Suelos que requieren medidas antideslizantes cumpliendo estrictamente normas de seguridad industrial.</p>
            </div>
        </div>

    </div>

    <!-- Sección FAQs -->
    <section class="container py-5" id="faq-robots">
        <h2 class="section-title" style="margin-top: 0 !important;">PREGUNTAS FRECUENTES</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="accordion" id="accordionRobots">

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot1">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot1" role="button" aria-expanded="true" aria-controls="collapseRobot1">
                                1. ¿Qué métodos de comunicación soportan los robots?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot1" class="collapse show" aria-labelledby="faqRobot1" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Los equipos cuentan con conectividad global para facilitar la supervisión, administración y operación remota desde diferentes ubicaciones.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot2">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot2" role="button" aria-expanded="false" aria-controls="collapseRobot2">
                                2. ¿Qué tipo de seguro ofrece el producto?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot2" class="collapse" aria-labelledby="faqRobot2" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Los robots cuentan con seguro global de responsabilidad civil para productos.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot3">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot3" role="button" aria-expanded="false" aria-controls="collapseRobot3">
                                3. ¿Puede el robot utilizar elevadores de forma autónoma?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot3" class="collapse" aria-labelledby="faqRobot3" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Sí. Para ello es necesario instalar un módulo de control de elevadores que permita la comunicación y coordinación entre el robot y el sistema del elevador.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot4">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot4" role="button" aria-expanded="false" aria-controls="collapseRobot4">
                                4. ¿Qué idiomas soporta el sistema?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot4" class="collapse" aria-labelledby="faqRobot4" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Actualmente los robots soportan 18 idiomas, incluyendo español, inglés, chino, japonés, coreano, francés y alemán. También es posible realizar personalizaciones de idioma.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot5">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot5" role="button" aria-expanded="false" aria-controls="collapseRobot5">
                                5. ¿Qué tipo de garantía ofrecen?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot5" class="collapse" aria-labelledby="faqRobot5" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Allybot ofrece una garantía estándar de 12 meses, además de opciones de garantía extendida para mayor protección de la inversión.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot6">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot6" role="button" aria-expanded="false" aria-controls="collapseRobot6">
                                6. ¿Qué certificaciones tienen los robots?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot6" class="collapse" aria-labelledby="faqRobot6" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Los equipos cuentan con certificaciones internacionales como TELEC, JATE, FCC, CE-RED, UKCA-RED, CB, RoHS, REACH y PAHS. Las baterías cumplen con la certificación UN38.8.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot7">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot7" role="button" aria-expanded="false" aria-controls="collapseRobot7">
                                7. ¿Cómo se actualizan las funciones del robot?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot7" class="collapse" aria-labelledby="faqRobot7" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Los robots soportan actualizaciones OTA (Over-The-Air), permitiendo incorporar nuevas funciones, mejoras de rendimiento y actualizaciones de software de forma remota.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE ALLYBOT</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a implementar la mejor solución robótica.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;">
                </iframe>
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