<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de "Gap" y Singulación en Bandas Clasificadoras (Sorters) | Logicbus</title>
    <meta name="description"
        content="El Arte de la Precisión a Alta Velocidad En los centros de Fulfillment (E-commerce), el enemigo número uno es el atasco.">
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
                <li class="breadcrumb-item active" aria-current="page">Control de "Gap" y Singulación en Bandas
                    Clasificadoras (Sorters)</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Control de "Gap" y Singulación en Bandas Clasificadoras
                (Sorters)</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/control-de-gap-y-singulacion-en-bandas.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../tri-tronics"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>
                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                            alt="fatek" width="200px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black"><b>El Arte de la Precisión a Alta Velocidad</b> En los centros de Fulfillment
                    (E-commerce), el enemigo número uno es el "atasco". Para que los sistemas de clasificación
                    automática (Shoe Sorters, Cross-belt) funcionen, cada paquete debe entrar con una separación exacta
                    (Gap). Si van muy pegados, el sistema falla; si van muy separados, se pierde productividad. Esta
                    aplicación automatiza esa separación perfecta.
                </p>

                <p class="text-center light-black font-weight-bold">Detalle Técnico de la Solución</p>

                <ol class="light-black">
                    <li class="mb-3"><b>Ojos de Alta Velocidad:</b>Todo comienza con la detección. Se utiliza un Sensor
                        Fotoeléctrico Infrarrojo modelo <a href="https://tienda.logicbus.com.mx/SPBIR4_p_38389.html">SPBIR4</a> de la marca <a
                            href="https://www.logicbus.com.mx/tri-tronics">Tri-Tronics</a>. Su característica clave es la velocidad de respuesta
                        (microsegundos); debe ver el espacio milimétrico entre dos cajas que viajan a 2 metros por
                        segundo.
                    </li>
                    <li class="mb-3"><b>Cerebro Matemático:</b>La señal digital entra a las entradas de alta velocidad
                        de un PLC (Controlador Lógico Programable) modelo <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac">FBS-20MCR2-AC</a> de la
                        marca <a href="https://www.logicbus.com.mx/fatek">FATEK</a>. El PLC ejecuta una fórmula matemática simple: Velocidad de
                        Banda x Tiempo = Distancia.
                    </li>
                    <li class="mb-3"><b>Actuación Precisa:</b> Si el PLC detecta que el paquete "B" está muy cerca del
                        "A", envía una señal analógica (0-10V) mediante el módulo de expansión <a href="https://tienda.logicbus.com.mx/FBS-4A2D_p_3352.html">FBS-4A2D</a>
                        al variador de frecuencia de una banda servo corta.
                    </li>
                    <li class="mb-3"><b>Corrección Física (Singulación):</b> SLa banda corta acelera bruscamente. Esto
                        hace que el paquete "A" se aleje, creando el "Gap" necesario. Un segundo sensor <a href="https://tienda.logicbus.com.mx/PZICR4_p_11197.html">PZICR4</a>
                        confirma que la separación es correcta antes de entrar al Sorter principal.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas Competitivas</p>

                <li class="mb-3"><b>Cero Recirculación:</b> Evita que los paquetes sean rechazados por el escáner y
                    tengan que dar toda la vuelta al circuito nuevamente.</li>
                <li class="mb-3"><b>Maximización del Throughput:</b> Permite que las bandas corran a su máxima velocidad
                    teórica sin miedo a atascos mecánicos.</li>
                <li class="mb-3"><b>Lectura Confiable:</b> Los sensores Tri-Tronics aseguran que el sistema no se
                    confunda con etiquetas brillantes o cajas negras (problema común en sensores baratos).</li>
                <li class="mb-3"><b>Solución Costo-Efectiva:</b> El PLC FATEK ofrece la potencia de cálculo necesaria
                    sin el costo de un sistema de control de movimiento complejo.</li>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/226/spbir4.jpg" alt="SPBIR4" width="150px">
                <p class="font-weight-bold mt-2 mb-0">SPBIR4</p>
                <p>Sensor SmartEye Pro con Luz LED Infrarroja y Óptica Retroreflectiva R4</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/SPBIR4_p_38389.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/FBs-20MCR2-AC.jpg" alt="FBs-20MCR2-AC"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBs-20MCR2-AC</p>
                <p>PLC Industrial con 12 entradas digitales de 24Vdc con velocidad alta (200KHz) y medio alta (20KHz y
                    5KHz), 8 salidas de relevador/ puerto de comunicación RS-232. Alimentacion de 100~240VAC y reloj de
                    tiempo real integrado.</p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-4a2d.png" alt="FBs-4A2D" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBs-4A2D</p>
                <p>Modulo de expansion de entradas/salidas analogicas para PLC serie FBs con 4 entradas analogicas de 14
                    bits y 2 salidas analogicas de 14 bits (-10V~0V~+10V or -20mA~0mA~+20mA), configuracion por medio de
                    jumpers para proporcionar variedades de salida</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-4A2D_p_3352.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/PZICR4%20-%201%20-%20copia.jpg" alt="PZICR4"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">PZICR4</p>
                <p>Sensor fotoeléctrico de uso general EZ Eye, infrarrojo, conector retrorreflectante</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PZICR4_p_11197.html"
                    target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/mvzhqBg99X4?si=Bx1VH-k9mdDcVPi-"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/optimizacion-de-flujo-en-centros-de-fulfillment-control-de-gap-y-singulacion-en-bandas-clasificadoras/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/02/Optimizacion-de-Flujo-en-Centros-de-Fulfillment-Control-de-Gap-y-Singulacion-en-Bandas-Clasificadoras-2048x1024.webp"
                        alt="Optimización de Flujo en Centros de Fulfillment: Control de “Gap” y Singulación en Bandas Clasificadoras"
                        width="100%">Optimización de Flujo en Centros de Fulfillment: Control de “Gap” y Singulación en
                    Bandas Clasificadoras
                </a>
            </div>
        </div>
    </section>

    <!--INDUSTRIAS-->
    <section class="container">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">INDUSTRIAS</h2>
        <div class="container my-5">
            <div class="cards-industries d-flex flex-wrap justify-content-center text-center">
                <div class="card card-industry">
                    <a class="text-white" href="academia-e-investigacion">
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img src="img/industrias/alimentosybebidas.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Construcción">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Construcción</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="oem">
                        <img src="img/industrias/oem.webp" class="card-img" style="filter: brightness(0.5);" alt="OEM">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">OEM</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="ensayos-de-materiales">
                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

           <!-- Sección Contacto / Formulario Odoo -->
<div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
        <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
        <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu proyecto.</span>
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