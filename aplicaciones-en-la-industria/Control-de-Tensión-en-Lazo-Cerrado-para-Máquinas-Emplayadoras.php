<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Tensión "Lazo Cerrado" en Máquinas Emplayadoras | Logicbus</title>
    <meta name="description"
        content="Garantiza que el plástico estirable (stretch film) sujete la carga firmemente sin aplastar las cajas inferiores ni desperdiciar material.">
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
                <li class="breadcrumb-item active" aria-current="page">Control de Tensión "Lazo Cerrado" en Máquinas
                    Emplayadoras</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Control de Tensión "Lazo Cerrado" en Máquinas
                Emplayadoras</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Control-de-tension-lazo-cerrado-en-maquinas-emplayadoras.png" alt="Diagrama"
                    width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
                            alt="futek" width="200px"></a>
                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                            alt="fatek" width="200px"></a>
                    <a href="../3onedata"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">Garantiza que el plástico estirable (stretch film) sujete la carga firmemente sin
                    aplastar las cajas inferiores ni desperdiciar material.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black">
                    <li class="mb-3"><b>Medición de Tensión Real:</b> El rodillo dispensador de plástico se monta
                        sobre una celda de carga <a href="https://tienda.logicbus.com.mx/FSH00967_p_6285.html" target="_blank" rel="noopener noreferrer"> FSH00967</a>. Esta mide la fuerza de "tiro" que el plástico ejerce sobre el
                        pallet en tiempo real. La señal de salida de la celda se acondiciona con un amplificador
                        <a href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html" target="_blank" rel="noopener noreferrer"> FSH03863</a>, la cual entrega la señal analógica de 0-10 V.
                    </li>
                    <li class="mb-3"><b>Control Lógico:</b> La señal de fuerza viaja a una entrada analógica del PLC
                        principal, un <a href="https://tienda.logicbus.com.mx/ME1C1-1616T_p_37943.html" target="_blank" rel="noopener noreferrer">ME1C1-1616T</a>, compara la tensión actual contra el "Set Point" deseado (receta).
                    </li>
                    <li class="mb-3"><b>Ajuste Dinámico:</b> El PLC controla el freno electromagnético o el variador de
                        velocidad del rodillo mediante una salida analógica de un módulo <a href="https://tienda.logicbus.com.mx/M04DA_p_37912.html" target="_blank" rel="noopener noreferrer">M04DA</a>. Si la celda de carga
                        <a href="https://tienda.logicbus.com.mx/FSH00967_p_6285.html" target="_blank" rel="noopener noreferrer">FSH00967</a> detecta una sobretensión del proceso, el PLC reduce la tensión instantáneamente para
                        evitar rupturas del film.
                    </li>
                    <li class="mb-3"><b>Interfaz de Operador:</b> El usuario selecciona el tipo de carga (ej. "Carga
                        Ligera" o "Carga Pesada") en una HMI Táctil <a href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html" target="_blank" rel="noopener noreferrer">P5070NB</a>, lo que ajusta automáticamente los
                        parámetros de fuerza en el PLC. Para el PLC y la HMI se hace el enlace utilizando un switch
                        Ethernet industrial modelo <a href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html" target="_blank" rel="noopener noreferrer">IES2300SL-5GT-2LV</a>.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <li class="mb-3"><b><a href="https://tienda.logicbus.com.mx/futek" target="_blank" rel="noopener noreferrer">FUTEK</a> ofrece una resistencia a la fatiga excepcional para máquinas que giran miles
                        de veces al día.</b></li>
                <li class="mb-3"><b>Ahorro directo de dinero al reducir el consumo de plástico (pre-estiro
                        optimizado).</b></li>
                <li class="mb-3"><b><a href="https://tienda.logicbus.com.mx/fatek" target="_blank" rel="noopener noreferrer">FATEK</a> permiten programar perfiles de envoltura complejos
                        fácilmente.</b></li>
                <li class="mb-3"><b>Estabilidad de carga garantizada para cumplir normas de seguridad en carretera.</b>
                </li>
                <li class="mb-3"><b>Con el switch de <a href="https://tienda.logicbus.com.mx/3onedata" target="_blank" rel="noopener noreferrer">3onedata Technology</a> se mantiene una comunicación constante gracias
                        a la alimentación redundante de sus equipos.</b></li>

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
                <img src="https://tienda.logicbus.com.mx/assets/images/LSB350-S-BEAM-LOAD-CELL-1.jpg" alt="FSH00967"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH00967</p>
                <p>Celda de carga de tensión y compresión</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH00967_p_6285.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh03863.jpg" alt="FSH03863" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH03863</p>
                <p>Amplificador de voltaje de acondicionamiento de señal de galga extensométrica de puente completo</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/29/ME1C1-1616T.jpg" alt="ME1C1-1616T"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">ME1C1-1616T</p>
                <p>Unidad principal Fatek serie M, Motion avanzado, 16 entradas digitales y 16 salidas a transistor SINK
                    (NPN) 200KHz</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/ME1C1-1616T_p_37943.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/29/M04DA.jpg" alt="M04DA" width="150px">
                <p class="font-weight-bold mt-2 mb-0">M04DA</p>
                <p>Módulo de Expansión de Salidas Analógicas Lado Derecho para PLCs de Fatek serie M, 4 canales, Salida
                    de voltaje y corriente, Resolución: 1/54000.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/M04DA_p_37912.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/P5070SB.jpg" alt="P5070NB" width="150px">
                <p class="font-weight-bold mt-2 mb-0">P5070NB</p>
                <p>Pantalla HMI Avanzada de Fatek Serie P5B 7" TFT LCD Flash 256Mb RAM 128Mb CPU 32bit con RTC, Serial
                    1(RS-232) 2(RS-422/485,RS-485) Ethernet(10M/100M) USB2.0 Mini USB PLC port, Audio, Alimentacion
                    24Vdc(12.48W), carcasa plastica, soporta Fatek IoT</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/16/IES2300SL-5GT-2LV.jpg" alt="IES2300SL-5GT-2LV"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">IES2300SL-5GT-2LV</p>
                <p>Fuente de alimentación dual 9 ~ 60VDC, Montaje de riel</p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html" target="_blank">Comprar</a>
            </div>


        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/TfhBo7zW6ts?si=FmkYy0ScsNZ6BBzQ"
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
                    href="https://www.logicbus.com.mx/blog/control-de-tension-en-lazo-cerrado-para-maquinas-emplayadoras/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/01/Control-de-Tension-en-Lazo-Cerrado-para-Maquinas-Emplayadoras.webp"
                        alt="Control de tensión en lazo cerrado para máquinas emplayadoras" width="100%">Control de
                    tensión en lazo cerrado para máquinas emplayadoras
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/banco-de-pruebas-de-fuerza-y-fatiga-para-control-de-calidad-precision-y-confiabilidad-en-la-manufactura-industrial/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/11/Banco-de-Pruebas-de-Fuerza-y-Fatiga-para-Control-de-Calidad-Precision-y-Confiabilidad-en-la-Manufactura-Industrial-scaled.jpg"
                        alt="Banco de pruebas de fuerza y fatiga para control de calidad, precision y confiabilidad en la manufactura industrial"
                        width="100%">Banco de pruebas de fuerza y fatiga para control de calidad, precision y
                    confiabilidad en la manufactura industrial
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