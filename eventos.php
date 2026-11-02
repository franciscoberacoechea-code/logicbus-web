<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logicbus Eventos: Webinarios Seminarios y Cursos</title>
    <meta name="description" content="Calendario de Expos, Eventos, Cursos y Seminarios presenciales o en linea impartidos por nuestros Ingenieros de Logicbus">
    <meta name="keywords" content="Calendario, Eventos, Cursos, Seminarios, presencial, online, Ingenieros, Logicbus">

    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : ''; ?>
    <?php echo isset($own_file_css) ? $own_file_css : ''; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>
    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($flickity_css) ? $flickity_css : ''; ?>
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>

    <style>
        /* Ocultar barra lateral */
        #leftBar { display: none; }
    </style>
</head>

<body onLoad="if(typeof menu_actual === 'function') menu_actual();">
    <?php echo isset($var_body) ? $var_body : ''; ?>
    <?php if(file_exists("libreria/header.view.php")) require("libreria/header.view.php"); ?>

    <!-- Banner Principal -->
    <div class="banner-container mb-5">
        <a href="https://www.youtube.com/channel/UCGYjB-qzlDGvtd9BCrGTOJQ?sub_confirmation=1" target="_blank">
            <img loading="lazy" src="images/banner/calendario-logicbus.png" class="img-fluid" style="width: 100%; max-height: 450px; object-fit: cover;" alt="Eventos, expos, seminarios, cursos" title="Eventos, expos, seminarios, cursos">
        </a>
    </div>

    <!-- Título y Texto Introductorio -->
    <div class="container mb-5">
        <h1 class="main-title text-center" style="color: var(--lb-primary, #22527A); font-weight: 800; font-size: 2.5rem; margin-bottom: 30px;">
            EVENTOS, WEBINARIOS Y CURSOS
        </h1>

        <p class="intro-text text-center">
            Estamos comprometidos en brindarte oportunidades para mantenerte actualizado con las últimas tendencias, tecnologías y soluciones en el mundo de la automatización y la electrónica industrial.
        </p>
        <p class="intro-text text-center">
            Desde conferencias especializadas hasta demostraciones en línea, nuestro calendario de eventos te ofrece una variedad de opciones para explorar. Ya seas un profesional experimentado en busca de actualizaciones en tu campo o un estudiante interesado en aprender más sobre tecnología y aplicaciones industriales, aquí encontrarás algo que se adapte a tus intereses y necesidades.
        </p>
        <p class="intro-text text-center">
            No te pierdas la oportunidad de conectar con expertos de la industria, descubrir nuevas soluciones y ampliar tu red profesional. Explora nuestro calendario de eventos y ¡prepárate para inspirarte, aprender y crecer con <strong>Logicbus</strong>!
        </p>
    </div>

    <section class="section-blue py-5">
    <div class="container">
        <h2 class="title"><a class="link-orange white" href="eventos">PRÓXIMOS EVENTOS</a></h2>
        <p class="paragraph white text-center">Explora nuestra agenda de eventos futuros y únete a la comunidad de
            Logicbus en emocionantes oportunidades de aprendizaje, interacción y descubrimiento.</p>
    </div>
    <div class="pb-3">
        <div class="container carousel"
            data-flickity='{ "lazyLoad": 5, "autoPlay": true, "wrapAround": true, "prevNextButtons": false }'>

            <!-- EVENTOS NUEVOS -->
            <!-- Expo Med -->
            <div class="carousel-cell novedades-carousel-cell">
                <a class="carousel-link" href="https://www.expomed.com.mx/" target="_blank">
                    <img class="carousel-cell-image" data-flickity-lazyload="./images/eventos/expo-med-hospitalar.webp"
                        alt="Expo Med Hospitalar" title="Expo Med Hospitalar" width="300px" height="170px" />
                </a>
            </div>

            <!-- Webinar AMRs, AGVs y Cobots -->
            <div class="carousel-cell novedades-carousel-cell">
                <a class="carousel-link" href="https://www.youtube.com/live/3n6ZFG14u18?si=2WhDWlESPrtYa1yw"
                    target="_blank">
                    <img class="carousel-cell-image" data-flickity-lazyload="./images/eventos/amrs-agvs-cobots.webp"
                        alt="AMRs, AGVs y Cobots" title="AMRs, AGVs y Cobots" width="300px" height="170px" />
                </a>
            </div>

            <!-- Webinar AI, Robots y Automatización -->
            <div class="carousel-cell novedades-carousel-cell">
                <a class="carousel-link" href="https://www.youtube.com/live/AxS-zaAyPd0?si=hkx11K800owM0RMX"
                    target="_blank">
                    <img class="carousel-cell-image"
                        data-flickity-lazyload="./images/eventos/ai-robots-automatizacion.webp"
                        alt="AI, Robots y Automatización" title="AI, Robots y Automatización" width="300px"
                        height="170px" />
                </a>
            </div>

            <!-- Webinar Logística 4.0 -->
            <div class="carousel-cell novedades-carousel-cell">
                <a class="carousel-link" href="https://www.youtube.com/live/sUM4Fv_Vbds?si=m1VejP0DtkPlcWwZ"
                    target="_blank">
                    <img class="carousel-cell-image" data-flickity-lazyload="./images/eventos/logistica-4.0.webp"
                        alt="Logística 4.0" title="Logística 4.0" width="300px" height="170px" />
                </a>
            </div>

        </div>
    </div>
</section>

    <!-- PIE DE PAGINA -->
    <?php if(file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>
    
    <!-- Scripts en el orden correcto -->
    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>
    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>
    <?php echo isset($flickity_js) ? $flickity_js : ''; ?>
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>
    
    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>
</html>