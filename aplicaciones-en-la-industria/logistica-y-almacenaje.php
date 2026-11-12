<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en Logística y Almacenaje | Logicbus</title>
    <meta name="description"
        content="La industria de la logística y el almacenaje es un entorno donde la automatización juega un papel clave para optimizar operaciones, mejorar la trazabilidad y responder a la creciente demanda de rapidez y precisión.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <!--- Estilos Necesarios-->
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

</head>

<body>
    <?php echo $var_body; ?>
    <?php require("../libreria/header.view.php"); ?>

    <!--RUTAS-->
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones en Logística y Almacenaje</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en Logística y Almacenaje"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en Logística y Almacenaje"
            class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en Logística y Almacenaje</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La industria de la logística y el almacenaje es un entorno
                donde la automatización juega un papel clave para optimizar operaciones, mejorar la trazabilidad y
                responder a la creciente demanda de rapidez y precisión. Desde la recepción y clasificación de
                mercancías hasta el almacenamiento, picking y despacho, la automatización permite a las empresas reducir
                errores, maximizar el uso del espacio y aumentar la eficiencia operativa en cada etapa del proceso.</p>
            <p class="paragraph light-black text-justify">Tecnologías como sistemas de control industrial, sensores
                inteligentes, identificación automática y
                software de gestión integrada se incorporan en centros de distribución y almacenes para habilitar
                operaciones más ágiles, seguras y conectadas. Estas soluciones permiten monitorear inventarios en tiempo
                real, coordinar flujos de materiales y mejorar la toma de decisiones basada en datos confiables.</p>
            <p class="paragraph light-black text-justify">Gracias a la automatización, los procesos logísticos se
                vuelven más rápidos, escalables y eficientes, facilitando la gestión de grandes volúmenes de productos y
                adaptándose a entornos de alta rotación. Desde centros de distribución y e-commerce, hasta almacenes
                industriales y cadenas de suministro complejas, la automatización impulsa soluciones que fortalecen la
                competitividad y elevan los estándares de servicio.</p>
            <p class="paragraph light-black text-justify">Explora cómo la automatización está transformando la logística
                y el almacenaje, impulsando operaciones más inteligentes, eficientes y preparadas para los desafíos del
                futuro.</p>
        </div>
    </section>

    <!--APPS-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/trazabilidad-de-cadena-de-frio-4.0-con-alertas-en-tiempo-real.webp" class="card-img-top"
                    alt="Trazabilidad de Cadena de Frío 4.0 con Alertas en Tiempo Real"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Trazabilidad de Cadena de Frío 4.0 con Alertas en Tiempo Real</h5>
                    <a class="button button-circle-orange"
                        href="trazabilidad-de-cadena-de-frio-4.0-con-alertas-en-tiempo-real">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Monitoreo-de-cadena-de-suministro-en-frio.png" class="card-img-top"
                    alt="Monitoreo de cadena de suministro en frío" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de cadena de suministro en frío</h5>
                    <a class="button button-circle-orange" href="monitoreo-de-cadena-de-suministro-en-frío">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/automatizacion-logistica-para-lineas-de-ensamblaje-automotriz.png" class="card-img-top"
                    alt="Automatización Logística para líneas de ensamblaje automotriz"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización Logística para Líneas de Ensamblaje Automotriz</h5>
                    <a class="button button-circle-orange"
                        href="automatizacion-logistica-para-lineas-de-ensamblaje-automotriz">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/monitoreo-continuo-de-temperatura-en-almacenes-gxp.png" class="card-img-top"
                    alt="Monitoreo Continuo de Temperatura en Almacenes GxP" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo Continuo de Temperatura en Almacenes GxP</h5>
                    <a class="button button-circle-orange"
                        href="monitoreo-continuo-de-temperatura-en-almacenes-gxp">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Automatización_de_Tareas_de_Inspección_y_Clasificación_en_Transportadores.webp"
                    class="card-img-top" alt="Automatización de Tareas de Inspección y Clasificación en Transportadores"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización de Tareas de Inspección y Clasificación en
                        Transportadores</h5>
                    <a class="button button-circle-orange"
                        href="automatizacion-de-tareas-de-inspeccion-y-clasificacion-en-transportadores">Ver</a>
                </div>
            </div>
        </div>
    </section>

    <!-- videos-->
    <section class="section-gray py-5">
        <div class="container text-center">
            <h2 class="title blue">Videos</h2>
        </div>

        <section class="py-5 margin-carrousel">
            <div class="pb-3">
                <div class="carousel" data-flickity='{ "lazyLoad": 6, "autoPlay": true, "wrapAround": true }'>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=2Z_4emaYmbY" target="_blank">
                            <img class="carousel-cell-image item-carrousel-16_9"
                                data-flickity-lazyload="http://i3.ytimg.com/vi/2Z_4emaYmbY/mqdefault.jpg"
                                alt="Webinar: Primeros pasos hacia la industria 4.0 Digitaliza tu planta y maximiza su rendimiento"
                                title="Webinar: Primeros pasos hacia la industria 4.0 Digitaliza tu planta y maximiza su rendimiento" /></a>
                    </div>

                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=cvhAs3xziSE" target="_blank">
                            <img class="carousel-cell-image item-carrousel-16_9"
                                data-flickity-lazyload="http://i3.ytimg.com/vi/cvhAs3xziSE/mqdefault.jpg"
                                alt="Prevención de colisiones en almacenes: Tecnología RTLS"
                                title="Prevención de colisiones en almacenes: Tecnología RTLS" /></a>
                    </div>

                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=o99PB80JVrA" target="_blank">
                            <img class="carousel-cell-image item-carrousel-16_9"
                                data-flickity-lazyload="http://i3.ytimg.com/vi/o99PB80JVrA/mqdefault.jpg"
                                alt="WEBINAR: Buenas prácticas en datalogging para industrias reguladas"
                                title="WEBINAR: Buenas prácticas en datalogging para industrias reguladas" /></a>
                    </div>

                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=8tKPTOdPsvA" target="_blank">
                            <img class="carousel-cell-image item-carrousel-16_9"
                                data-flickity-lazyload="http://i3.ytimg.com/vi/8tKPTOdPsvA/mqdefault.jpg"
                                alt="Monitoreo inalámbrico de temperatura con RFTCTEMP2000A"
                                title="Monitoreo inalámbrico de temperatura con RFTCTEMP2000A" /></a>
                    </div>

                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=-QMdvahGKkw" target="_blank">
                            <img class="carousel-cell-image item-carrousel-16_9"
                                data-flickity-lazyload="http://i3.ytimg.com/vi/-QMdvahGKkw/mqdefault.jpg"
                                alt="Unboxing de Model C2 de Quasi" title="Unboxing de Model C2 de Quasi" /></a>
                    </div>

                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=KzlKfFZeDBc" target="_blank">
                            <img class="carousel-cell-image item-carrousel-16_9"
                                data-flickity-lazyload="http://i3.ytimg.com/vi/KzlKfFZeDBc/mqdefault.jpg"
                                alt="Modelo C2 de Quasi - Configuración inicial, instrucciones de inicio rápido"
                                title="Modelo C2 de Quasi - Configuración inicial, instrucciones de inicio rápido" /></a>
                    </div>

                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=rZBjx0N5OsQ" target="_blank">
                            <img class="carousel-cell-image item-carrousel-16_9"
                                data-flickity-lazyload="http://i3.ytimg.com/vi/rZBjx0N5OsQ/mqdefault.jpg"
                                alt="ROBOT COLABORATIVO DE ALCANCE EXTENDIDO PARA APLICACIONES DE PICK AND PLACE"
                                title="ROBOT COLABORATIVO DE ALCANCE EXTENDIDO PARA APLICACIONES DE PICK AND PLACE" /></a>
                    </div>
                </div>
            </div>
        </section>
    </section>

   <!-- Estilos para el carrusel de Artículos -->
    <style>
        .noticia-custom-cell, .novedades-carousel-cell {
            position: relative;
            width: 85%;
            max-width: 300px;
            height: 170px;
            margin-right: 15px;
            overflow: hidden;
            border-radius: 4px;
        }

        .noticia-custom-cell .carousel-link, .novedades-carousel-cell .carousel-link {
            display: block;
            width: 100%;
            height: 100%;
        }

        .noticia-custom-cell .carousel-cell-image, .novedades-carousel-cell .carousel-cell-image {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            display: block;
        }

        .noticia-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            background: linear-gradient(to top, rgba(36, 83, 123, 1) 0%, rgba(36, 83, 123, 0.6) 50%, rgba(36, 83, 123, 0) 100%);
            color: #ffffff;
            padding: 10px 15px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            font-size: 13px;
            font-weight: 500;
            text-align: center;
            line-height: 1.3;
        }
    </style>

    <!--Blog-->
    <section class="section-gray p-5">
        <div class="container text-center">
            <h2 class="title blue">Artículos</h2>
        </div>

        <section class="py-5 margin-carrousel">
            <div class="pb-3 ">
                <div class="carousel" data-flickity='{ "lazyLoad": 6, "autoPlay": true, "wrapAround": true }'>
                    
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link"
                            href="https://www.logicbus.com.mx/blog/tendencias-2026-en-automatizacion-logistica-arquitectura-autonomia-y-control-en-sistemas-inteligentes/"
                            target="_blank">
                            <img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/01/Tendencias-2026-en-automatizacion-logistica-arquitectura_-autonomia-y-control-en-sistemas-inteligent-2048x1024.webp"
                                alt="Tendencias 2026 en automatización logística, arquitectura autonomía y control en sistemas inteligentes"
                                title="Tendencias 2026 en automatización logística, arquitectura autonomía y control en sistemas inteligentes" />
                            <div class="noticia-overlay">Tendencias 2026 en automatización logística, arquitectura autonomía y control en sistemas inteligentes</div>
                        </a>
                    </div>
                    
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link"
                            href="https://www.logicbus.com.mx/blog/asegurando-la-cadena-de-frio-en-logistica-alimentaria-con-dataloggers-madgetech-hitemp140/"
                            target="_blank">
                            <img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Asegurando-la-cadena-de-frio-en-logistica-alimentaria-con-dataloggers-MadgeTech-HiTemp140-scaled.jpg"
                                alt="Asegurando la cadena de frío en logística alimentaria con dataloggers Madgetech HITEMP140"
                                title="Asegurando la cadena de frío en logística alimentaria con dataloggers Madgetech HITEMP140" />
                            <div class="noticia-overlay">Asegurando la cadena de frío en logística alimentaria con dataloggers Madgetech HITEMP140</div>
                        </a>
                    </div>
                    
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link"
                            href="https://www.logicbus.com.mx/blog/logistica-autonoma-con-youibot-revolucionando-los-almacenes-con-robots-moviles/"
                            target="_blank">
                            <img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Logistica-autonoma-con-Youibot-Revolucionando-los-almacenes-con-robots-moviles-scaled.jpg"
                                alt="Logística autónoma con Youibot: revolucionando los almacenes con robots móviles"
                                title="Logística autónoma con Youibot: revolucionando los almacenes con robots móviles" />
                            <div class="noticia-overlay">Logística autónoma con Youibot: revolucionando los almacenes con robots móviles</div>
                        </a>
                    </div>
                    
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link"
                            href="https://www.logicbus.com.mx/blog/youibot-l1000-automatizacion-robusta-para-la-logistica-industrial-del-futuro/"
                            target="_blank">
                            <img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Youibot-L1000-Automatizacion-Robusta-para-la-Logistica-Industrial-del-Futuro-scaled.jpg"
                                alt="Youibot L1000: automatización robusta para la logística industrial del futuro"
                                title="Youibot L1000: automatización robusta para la logística industrial del futuro" />
                            <div class="noticia-overlay">Youibot L1000: automatización robusta para la logística industrial del futuro</div>
                        </a>
                    </div>
                    
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link"
                            href="https://www.logicbus.com.mx/blog/medicion-de-peso-y-carga-en-transporte-de-mercancias/"
                            target="_blank">
                            <img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/03/Medicion-de-Peso-y-Carga-en-Transporte-de-Mercancias-2048x1024.png"
                                alt="Medición de peso y carga en transporte de mercancías"
                                title="Medición de peso y carga en transporte de mercancías" />
                            <div class="noticia-overlay">Medición de peso y carga en transporte de mercancías</div>
                        </a>
                    </div>
                    
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link"
                            href="https://www.logicbus.com.mx/blog/computadoras-industriales-cincoze-impulsando-la-logistica-inteligente/"
                            target="_blank">
                            <img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/02/Computadoras-industriales-Cincoze-Impulsando-la-logi%CC%81stica-inteligente.png"
                                alt="Computadoras industriales Cincoze: Impulsando la logística inteligente"
                                title="Computadoras industriales Cincoze: Impulsando la logística inteligente" />
                            <div class="noticia-overlay">Computadoras industriales Cincoze: Impulsando la logística inteligente</div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>
    </section>

    <!-- Sección Contacto / Formulario Odoo -->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu
                proyecto.</span>
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

    <?php require("../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>