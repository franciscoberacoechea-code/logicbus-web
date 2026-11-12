<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posicionamiento Absoluto para Grúas Trans elevadoras (AS/RS) | Logicbus</title>
    <meta name="description"
        content="Movimiento preciso a 30 metros de altura. Esta aplicación asegura que la grúa conozca su posición exacta en milímetros, en todo momento, evitando colisiones en almacenes automáticos.">
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

</head>

<body>
    <?php echo $var_body; ?>
    <?php require("../libreria/header.view.php"); ?>

    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Posicionamiento Absoluto para Grúas Trans elevadoras (AS/RS)</li>
            </ol>
        </nav>
    </section>

    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Posicionamiento Absoluto para Grúas Trans elevadoras (AS/RS)</h1>
        </div>
    </section>

    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Posicionamiento-Absoluto-para-Gruas-Trans-elevadoras.png"
                    alt="Posicionamiento para Grúas Trans elevadoras" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../waycon"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/waycon.webp" alt="Waycon" width="150px"></a>
                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                            alt="FATEK" width="150px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black"><b>Movimiento Preciso a 30 Metros de Altura:</b> En los almacenes automáticos de gran altura, una grúa (transelevador) viaja a alta velocidad por un pasillo estrecho para guardar o extraer pallets. Si la grúa se detiene unos centímetros fuera de posición, las horquillas chocarán contra el rack, derribando la mercancía. Esta aplicación asegura que la grúa conozca su posición exacta en milímetros, en todo momento.
                </p>

                <p class="text-center light-black font-weight-bold">Cómo Funciona</p>

                <ol class="light-black">
                    <li class="mb-3"><b>Navegación en el Eje X (Largo del pasillo):</b> Se instala un Sensor de Distancia Láser modelo <a href="https://tienda.logicbus.com.mx/LAR-70-5V_p_25772.html" target="_blank" class="blue link-orange font-weight-bold">LAR-70-5V</a> de la marca Waycon apuntando al final del pasillo. Este sensor mide la distancia desde los 135 mm para enviar la señal de lectura y realizar los paros de la grúa para evitar colisiones.
                    </li>
                    <li class="mb-3"><b>Elevación en el Eje Y (Altura):</b> Para el carro de elevación, se acopla un potenciómetro lineal modelo <a href="https://tienda.logicbus.com.mx/LRW-B-300_p_35330.html" target="_blank" class="blue link-orange font-weight-bold">LRW-B-300</a> de la marca Waycon a la plataforma del elevador, lo que permite saber exactamente a qué altura están las horquillas, incluso si ocurre un corte de energía.
                    </li>
                    <li class="mb-3"><b>Lógica de Movimiento:</b> Las señales del sensor láser y el potenciómetro se envían directamente al modulo de entradas analogicas <a href="https://tienda.logicbus.com.mx/FBS-4A2D_p_3352.html" target="_blank" class="blue link-orange font-weight-bold">FBS-4A2D</a> de la marca FATEK, en conjunto con el PLC (Controlador Lógico Programable) modelo <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac" target="_blank" class="blue link-orange font-weight-bold">FBS-20MCR2-AC</a> y tarjeta <a href="https://tienda.logicbus.com.mx/FBs-CBES_p_30988.html" target="_blank" class="blue link-orange font-weight-bold">FBs-CBE</a>, que controla los drivers de los motores.
                    </li>
                    <li class="mb-3"><b>Comunicación de Red:</b> Para integrar el PLC local de la grúa móvil con el sistema WMS principal, se utiliza una integración de comando API utilizando el PLC que gestiona las señales de los sensores.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>
                <ul>
                    <li class="mb-3 light-black">Evita colisiones mecánicas severas al intentar guardar pallets en ubicaciones desalineadas.</li>
                    <li class="mb-3 light-black">El encoder absoluto no pierde su posición al apagar la máquina, eliminando la necesidad de hacer rutinas de "Home" lentas en cada turno.</li>
                    <li class="mb-3 light-black">Los sensores láser ofrecen respuestas ultra rápidas, permitiendo a la grúa moverse a su velocidad máxima y frenar de forma suave (rampas de desaceleración).</li>
                </ul>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMENDADOS</h2>
        <div class="row justify-content-center">

            <div
                class="col-6 col-md-4 col-lg-2 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/lar-70-5v-1.png" alt="LAR-70-5V" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LAR-70-5V</p>
                <p>Sensor de Distancia Láser Waycon para navegación precisa.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LAR-70-5V_p_25772.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-4 col-lg-2 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/282/lrw.jpg" alt="LRW-B-300" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LRW-B-300</p>
                <p>Potenciómetro lineal Waycon para monitoreo de elevación.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LRW-B-300_p_35330.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-4 col-lg-2 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-4a2d.png" alt="FBS-4A2D" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBS-4A2D</p>
                <p>Módulo de entradas analógicas FATEK para integración de señales.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-4A2D_p_3352.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-4 col-lg-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/FBs-20MCR2-AC.jpg" alt="FBS-20MCR2-AC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBS-20MCR2-AC</p>
                <p>Controlador Lógico Programable (PLC) FATEK para control y lógica de movimiento.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac"
                    target="_blank">Comprar</a>
            </div>
            
            <div
                class="col-6 col-md-4 col-lg-2 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/fbs-cbes.jpg" alt="FBs-CBE" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBs-CBE</p>
                <p>Tarjeta de comunicación Ethernet FATEK para integración con WMS.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBs-CBES_p_30988.html"
                    target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/devmg1a9Orc?si=5c_4JKBvkAWAng6d"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-5 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/sistemas-de-posicionamiento-absoluto-en-transelevadores-as-rs-precision-milimetrica-en-almacenes-de-gran-altura/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/03/Sistemas-de-Posicionamiento-Absoluto-en-Transelevadores-ASRS-Precision-Milimetrica-en-Almacenes-de-Gran-Altura-scaled.webp"
                        alt="Sistemas de Posicionamiento Absoluto en Transelevadores AS/RS"
                        width="100%">Sistemas de Posicionamiento Absoluto en Transelevadores AS/RS: Precisión Milimétrica en Almacenes de Gran Altura
                </a>
            </div>
            
            <div class="col-12 col-md-5 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/gestion-de-la-eficiencia-energetica-en-sistemas-de-clasificacion-auditoria-y-mantenimiento-predictivo/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/03/Gestion-de-la-Eficiencia-Energetica-en-Sistemas-de-Clasificacion-Auditoria-y-Mantenimiento-Predictivo.webp"
                        alt="Gestión de la Eficiencia Energética en Sistemas de Clasificación"
                        width="100%">Gestión de la Eficiencia Energética en Sistemas de Clasificación: Auditoría y Mantenimiento Predictivo
                </a>
            </div>
        </div>
    </section>

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