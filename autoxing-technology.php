<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Autoxing Technology | Inteligencia Robótica Autónoma para la Industria del Futuro</title>

    <meta name="description" content="AutoXing es un proveedor líder global de soluciones de robótica inteligente y robots móviles autónomos (AMRs) para entornos industriales, comerciales y de servicios.">
    <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Autoxing, Robot Inteligente, AMR, Robots Moviles Autonomos, Automatizacion, Logistica, Chasis de robot, Montacargas inteligente">

    <!--- Estilos Necesarios-->
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>

    <!-- CSS ESPECÍFICO DE ESTA PÁGINA -->
    <style>
        /* Ocultar barra lateral */
        #leftBar {
            display: none;
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
                <li class="breadcrumb-item"><a href="robots-moviles-autonomos-amr-agv" class="blue link-orange">Robots móviles autónomos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Autoxing Technology</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Video 100% -->
    <div class="banner-container mb-5">
        <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/BANNER-AUTOXING-MX.png">
            <source src="https://www.logicbus.com.mx/assets/videos/BANNER-AUTOXING-MX.mp4" type="video/mp4">
        </video>
    </div>

    <!-- H1 con diseño Shift4Shop -->
    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Inteligencia Robótica Autónoma para la</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">INDUSTRIA DEL FUTURO</span>
    </h1>

    <!-- Textos de introducción -->
    <p class="intro-text">
        <b>AutoXing</b> es un <b>proveedor líder global de soluciones de robótica inteligente</b>, especializado en el desarrollo y comercialización de robots autónomos comerciales impulsados por tecnologías avanzadas de conducción autónoma, inteligencia artificial y big data. Su misión es potenciar una vida mejor a través de la tecnología inteligente, transformando procesos tradicionales en experiencias más eficientes, seguras y adaptables gracias a la automatización robótica.
    </p>
    <p class="intro-text">
        Con un equipo de expertos en navegación autónoma y posicionamiento y una fuerte presencia internacional, AutoXing ofrece una amplia gama de <b>robots móviles autónomos (AMRs)</b> diseñados para <b>entornos industriales, comerciales y de servicios</b>. Sus soluciones incluyen robots de entrega para fábricas y restaurantes, plataformas móviles inteligentes, robots de desinfección y chasis robóticos personalizables que se integran con sistemas empresariales existentes <b>sin requerir modificaciones de infraestructura</b>.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/autoxing-technology" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#categorias">Categorías</a>
        <a class="btn-circle" href="#industrias">Industrias</a>
        <a class="btn-circle" href="#faq-robots">FAQs</a>
    </nav>

    <!-- Sección Categorías (Productos) -->
    <h2 class="section-title" id="categorias">Categorías</h2>
    <div class="products-grid">
        <div class="product-card">
            <img loading="lazy" src="./images/autoxing-technology/robot-inteligente.webp" alt="Ícono de Robot inteligente">
            <h4>Robot inteligente</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Robot-Inteligente_c_8041.html" target="_blank">Ver categoría</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/autoxing-technology/amr-industriales.webp" alt="Ícono de AMR industriales">
            <h4>AMR industriales</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/AMR-Industriales_c_8042.html" target="_blank">Ver categoría</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/autoxing-technology/chasis-de-robot.webp" alt="Ícono de Chasis de robot">
            <h4>Chasis de robot</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Chasis-de-robot_c_8043.html" target="_blank">Ver categoría</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/autoxing-technology/montacargas-inteligente.webp" alt="Ícono de Montacargas inteligente">
            <h4>Montacargas inteligente</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Montacargas-Inteligente_c_8044.html" target="_blank">Ver categoría</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/autoxing-technology/robot-de-hotel.webp" alt="Ícono de Robot de hotel">
            <h4>Robot de hotel</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Robot-de-hotel_c_8045.html" target="_blank">Ver categoría</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/autoxing-technology/robot-de-reparto-de-tipo-cerrado.webp" alt="Ícono de Robot de reparto de tipo cerrado">
            <h4>Robot de reparto tipo cerrado</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Robot-de-reparto-de-tipo-cerrado_c_8046.html" target="_blank">Ver categoría</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/autoxing-technology/robot-de-desinfeccion.webp" alt="Ícono de Robot de desinfección">
            <h4>Robot de desinfección</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Robot-de-desinfecci%C3%B3n_c_8047.html" target="_blank">Ver categoría</a>
        </div>
    </div>

    <!-- Sección Industrias -->
    <div class="bg-light-accent" id="industrias">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0 !important;">SOLUCIONES PARA CADA INDUSTRIA</h2>
            <p class="intro-text text-center mb-5">En la era de la inteligencia, seguiremos manteniendo el "espíritu inventor", consolidando tecnología y perfeccionando productos para crear robots verdaderamente útiles que mejoren la eficiencia de la producción y la vida humana.</p>

            <!-- Solución 1 -->
            <div class="row align-items-center mb-5 bg-white p-4 rounded shadow-sm">
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img loading="lazy" src="https://dedjh0j7jhutx.cloudfront.net/1803029204518871040%2F7199562e-de57-453c-86ee-cb088c7e5907.webp" alt="Robot de Catering Inteligente" class="img-fluid rounded">
                </div>
                <div class="col-md-7">
                    <h3 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 10px;">Catering Inteligente</h3>
                    <p style="color: var(--lb-accent); font-weight: bold; margin-bottom: 15px;">Desafíos de la industria:</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Dificultad de contratación</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Alta rotación de personal</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Contaminación de alimentos</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Altos costos de capacitación</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Flujo de clientes inestable</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Lento retorno de inversión</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solución 2 -->
            <div class="row align-items-center mb-5 bg-white p-4 rounded shadow-sm flex-md-row-reverse">
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img loading="lazy" src="https://dedjh0j7jhutx.cloudfront.net/1803029204518871040%2Fbcfd7349-ef8f-4355-8a87-a52ae7100ea6.webp" alt="Robot de Fábrica Inteligente" class="img-fluid rounded">
                </div>
                <div class="col-md-7">
                    <h3 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 10px;">Fábrica Inteligente</h3>
                    <p style="color: var(--lb-accent); font-weight: bold; margin-bottom: 15px;">Desafíos de la industria:</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Entregas frecuentes</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Ineficiente para JIT</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Variedad de materiales</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Entregas omitidas</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Errores humanos</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Supervisión compleja</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solución 3 -->
            <div class="row align-items-center bg-white p-4 rounded shadow-sm">
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img loading="lazy" src="https://dedjh0j7jhutx.cloudfront.net/1803029204518871040%2Fbe95a45a-81ab-454c-9ce1-c0e3f1329a91.webp" alt="Robot de Hotel Inteligente" class="img-fluid rounded">
                </div>
                <div class="col-md-7">
                    <h3 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 10px;">Hotel Inteligente</h3>
                    <p style="color: var(--lb-accent); font-weight: bold; margin-bottom: 15px;">Desafíos de la industria:</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Baja eficiencia de entrega</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Altos costos de capacitación</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Comunicación excesiva</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Alta carga de trabajo</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Contaminación de alimentos</li>
                                <li class="mb-2"><i class="fa fa-caret-right mr-2" style="color: var(--lb-accent);"></i>Mala experiencia del cliente</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Sección FAQs -->
    <section class="container py-5" id="faq-robots">
        <h2 class="section-title">PREGUNTAS FRECUENTES</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="accordion" id="accordionRobots">

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot1">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot1" role="button" aria-expanded="true" aria-controls="collapseRobot1">
                                1. ¿Qué tipo de robots tenemos?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot1" class="collapse show" aria-labelledby="faqRobot1" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Nuestros productos incluyen robots de reparto para restaurantes, hoteles y fábricas, robots de desinfección, chasis robóticos, entre otros.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot2">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot2" role="button" aria-expanded="false" aria-controls="collapseRobot2">
                                2. ¿Cuáles son las funciones principales del robot?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot2" class="collapse" aria-labelledby="faqRobot2" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Las funciones del robot incluyen entrega de productos, bienvenida, acompañamiento/guía, publicidad y marketing, patrullaje, etc.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot3">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot3" role="button" aria-expanded="false" aria-controls="collapseRobot3">
                                3. ¿Cuáles son las especificaciones de los robots?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot3" class="collapse" aria-labelledby="faqRobot3" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Las especificaciones varían según el robot; por favor, consulte los productos o contáctenos para más información.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot4">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot4" role="button" aria-expanded="false" aria-controls="collapseRobot4">
                                4. ¿Cuál es la capacidad de carga de los robots?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot4" class="collapse" aria-labelledby="faqRobot4" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                La capacidad de carga varía según el robot. 40 kg para Mars y otros robots de tamaño estándar, y 200 kg para el AX6113. Por favor, consulte los productos o contáctenos para más información.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot5">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot5" role="button" aria-expanded="false" aria-controls="collapseRobot5">
                                5. ¿Pueden los robots operar bajo luz solar intensa?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot5" class="collapse" aria-labelledby="faqRobot5" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Sí. Nuestros robots pueden operar con normalidad bajo luz solar natural intensa.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot6">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot6" role="button" aria-expanded="false" aria-controls="collapseRobot6">
                                6. ¿En qué escenarios podemos usar los robots?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot6" class="collapse" aria-labelledby="faqRobot6" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Nuestros robots se utilizan ampliamente en restaurantes, fábricas, centros comerciales, hospitales, escuelas, edificios de oficinas, dependencias gubernamentales, estaciones de metro, etc.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot7">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot7" role="button" aria-expanded="false" aria-controls="collapseRobot7">
                                7. ¿Cómo se usan los robots?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot7" class="collapse" aria-labelledby="faqRobot7" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Consulte la Guía de Mapeo. También ofrecemos capacitación sobre el producto y servicio posventa; no dude en contactarnos si lo necesita.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot8">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot8" role="button" aria-expanded="false" aria-controls="collapseRobot8">
                                8. ¿Pueden los robots tomar el ascensor?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot8" class="collapse" aria-labelledby="faqRobot8" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Sí. Todos los robots AutoXing pueden usar el ascensor y pasar por puertas automáticas o accesos controlados.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot9">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot9" role="button" aria-expanded="false" aria-controls="collapseRobot9">
                                9. ¿Perderá el robot su posición si lo empujo?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot9" class="collapse" aria-labelledby="faqRobot9" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                No. El robot no perderá su posicionamiento al ser empujado por personas, al transitar por superficies resbaladizas o al ser movido bruscamente.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqRobot10">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseRobot10" role="button" aria-expanded="false" aria-controls="collapseRobot10">
                                10. ¿Qué tan grande es el área que puede mapear el robot?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseRobot10" class="collapse" aria-labelledby="faqRobot10" data-parent="#accordionRobots">
                            <div class="card-body text-muted">
                                Admitimos un mapeo de hasta 100,000 metros cuadrados. El mapeo de grandes áreas abiertas no es un problema.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Contacto (Diseño Odoo) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE AUTOXING TECHNOLOGY</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Estamos aquí para ayudarte a encontrar las mejores soluciones de inteligencia robótica para tu proyecto.</span>
        </div>
        <!-- BEGIN Odoo web form -->
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;">
                </iframe>
            </div>
        </div>
        <!-- END Odoo web form -->
    </div>

    <!-- PIE DE PAGINA -->
<?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?> 
    
    <?php echo $bootstrap_js; ?> 
    
    <?php echo $own_file_js; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
        gtag('config', 'AW-1007518778');
    </script>
</body>
<?php echo $var_footer; ?>

</html>

