<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Optimización de Eficiencia Energética en Fabricación de Automóviles | Logicbus</title>

    <meta name="description"

        content="Optimización energética en la industria automotriz: monitoreo en tiempo real de consumos, reducción de costos, sostenibilidad e integración con sistemas MES/ERP para una producción más eficiente.">

    <meta name="keywords"

        content="eficiencia energética automotriz, gestión de energía, ahorro de energía en plantas, SENECA S711EROGETH45, LoggerFlex BLXULT, LoggerFlex CLOUD, CONTROLLINO PLC, Modbus TCP/IP, MQTT, ISO 50001, optimización energética, industria automotriz">

    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />



    <!--- Estilos Necesarios-->

    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="../libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="../libreria/estilos.css">'; ?>
    <?php echo isset($css_bundle) ? $css_bundle : ''; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>



</head>



<body>

    <?php echo $var_body; ?>

    <?php require("../libreria/header.view.php"); ?>



    <!--RUTAS-->

    <section class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb pl-0">

                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>

                <li class="breadcrumb-item active" aria-current="page">

                    Optimización de Eficiencia Energética en Fabricación de Automóviles </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt=" Optimización de Eficiencia Energética en Fabricación de Automóviles" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt=" Optimización de Eficiencia Energética en Fabricación de Automóviles" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Optimización de Eficiencia Energética en Fabricación

                de Automóviles

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/optimizacion-eficiencia-energetica-fabricacion-automoviles.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../seneca"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/seneca.webp" alt="seneca" width="200px"></a>

                    <a href="../loggerflex"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/loggerflex.webp" alt="loggerflex" width="200px"></a>

                    <a href="../3onedata"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>

                    <a href="../controllino"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/controllino.webp" alt="controllino" width="200px"></a>

                    <a href="../tritronics"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>

                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify"> En la industria automotriz, los procesos de estampado, soldadura,

                    pintura y ensamble requieren un uso intensivo de energía eléctrica, neumática y térmica. Un sistema

                    de <b>gestión y optimización energética</b> permite monitorear en tiempo real el consumo,

                    identificar

                    desperdicios y aplicar estrategias automáticas de ahorro. De esta forma, las plantas pueden reducir

                    costos operativos, cumplir objetivos de sostenibilidad y mejorar la eficiencia global de producción.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Monitoreo de Consumos en Tiempo Real</b> <br>

                        <ul>

                            <li>Medidores inteligentes de energía eléctrica como los <a

                                    href="https://tienda.logicbus.com.mx/S711EROGETH45_p_13176.html">S711EROGETH45</a>

                                de

                                <a href="https://tienda.logicbus.com.mx/seneca">SENECA S.R.L.</a> se

                                instalan en tableros eléctricos de áreas clave (soldadura robotizada, hornos de pintura,

                                compresores de aire).

                            </li>

                            <li>Registradores de temperatura como el <a

                                    href="https://tienda.logicbus.com.mx/BLXULT_p_36690.html">BLXULT</a> de <a

                                    href="https://tienda.logicbus.com.mx/loggerflex">LoggerFlex</a>

                                monitorean hornos de secado y

                                cabinas de pintura, los datos son enviados vía Wifi hacia la plataforma de la nube

                                <a href="https://tienda.logicbus.com.mx/loggerflex">LoggerFlex CLOUD</a> y

                                posteriormente se puede enviar la información hacia el PLC mediante

                                <b>HTTP API</b>.

                            </li>

                        </ul>

                    </li>

                    <li><b>Adquisición y Centralización de Datos</b> <br>

                        <ul>

                            <li>Todos los valores de consumo (kWh, m³ de aire, °C) se integran a través de switches

                                Ethernet como <a

                                    href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a>

                                de <a href="https://tienda.logicbus.com.mx/3onedata">3onedata Technology</a>.

                            </li>

                            <li>Un <b>PLC</b> <a

                                    href="https://tienda.logicbus.com.mx/prueba-y-medicion-laboratorio-academico-100-102-00">100-102-00</a>

                                de <a href="https://tienda.logicbus.com.mx/controllino">CONTROLLINO</a> coordina la

                                adquisición de datos y los transmite

                                al

                                cuarto de control donde se concentra toda la red industrial mediante <b>Modbus

                                    TCP/IP</b> ó

                                <b>MQTT</b>.

                            </li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Automatización de Ahorro Energético</b> <br>

                        <ul>

                            <li> El PLC puede ejecutar acciones automáticas como:

                            </li>

                            <ul>

                                <li>Apagar compresores o ventiladores cuando no se detecta actividad mediante sensores

                                    fotoeléctricos <a

                                        href="https://tienda.logicbus.com.mx/HSDLO1_p_10764.html">HSDLO1</a> de

                                    <a href="https://tienda.logicbus.com.mx/tri-tronics">TRI-TRONICS CO. INC.</a>

                                </li>

                                <li>Regular el encendido de hornos de pintura para evitar sobrecalentamiento

                                    innecesario.</li>

                                <li>Ajustar la velocidad de bandas transportadoras en función del flujo real de

                                    producción.</li>

                            </ul>

                        </ul>

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Reducción de costos operativos </b>mediante la eliminación de consumos

                        innecesarios.

                    </li>

                    <li class="mb-3"><b>Cumplimiento de políticas de sostenibilidad y certificaciones ISO 50001.</b>

                    </li>

                    <li class="mb-3"><b>Visibilidad total del consumo energético </b>en toda la planta.

                    </li>

                    <li class="mb-3"><b>Prevención de fallos y fugas en sistemas neumáticos y térmicos.</b>

                    </li>

                    <li class="mb-3"><b>Mejora continua, </b>con información histórica para implementar proyectos de

                        eficiencia.

                    </li>

                    <li class="mb-3"><b>Integración con sistemas de gestión (MES/ERP)</b>para vincular consumo

                        energético con costos de producción por vehículo.

                    </li>

                </ul>

                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>

            </div>

        </div>

    </section>



    <!--EQUIPOS RECOMENDADOS-->

    <section class="container py-5">

        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>

        <div class="row justify-content-center">

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/226/HSDLO1.jpg" alt="HSDLO1"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">HSDLO1</p>

                <p>

                    Alta ganancia, Alta intensidad, LED infrarrojo, NPN, Bloque de proximidad de rango medio / largo O1.

                    NPN gratuito. 12 a 24 VDC con polaridad protegida. El rango máximo de detección es de 6 pies (1,8

                    m).

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/HSDLO1_p_10764.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/44/s711_rog_lr.jpg"

                    alt="S711EROGETH45" width="150px">

                <p class="font-weight-bold mt-2 mb-0">S711EROGETH45</p>

                <p>LCD 96x96 Energy PLUS Kit medidor de potencia, Ethernet, 8MB log., 1 DI 2 DO, armónicos, 3 Rogowski

                    RC150 L = 45 cm Øint. 14cm

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/S711EROGETH45_p_13176.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/269/blxult.jpg" alt="BLXULT"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">BLXULT</p>

                <p>Registrador Wi-Fi de alta temperatura con entrada para sonda

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/BLXULT_p_36690.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/16/IES2300SL-5GT-2LV.jpg"

                    alt="IES2300SL-5GT-2LV" width="150px">

                <p class="font-weight-bold mt-2 mb-0">IES2300SL-5GT-2LV</p>

                <p>Sin administrar, 5*10/100/1000Base-T (x) RJ45, Fuente de alimentación dual 9 ~ 60VDC, Montaje de riel

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html" target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/265/100-102-00.jpg"

                    alt="100-102-00" width="150px">

                <p class="font-weight-bold mt-2 mb-0">100-102-00</p>

                <p>CONTROLLINO MAXI Power

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/prueba-y-medicion-laboratorio-academico-100-102-00"

                    target="_blank">Comprar</a>

            </div>

        </div>

    </section>

    
    <!-- VIDEOS -->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

        <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">

            <!-- VIDEO 1 -->
            <div style="width:300px;">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/zmDEpVMI1Kc?si=-DZ8_XHN2Rak3COA"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 2 -->
            <div style="width:300px;">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/3c4SNOE9ja0?si=deCZ7m8UbjyvIUsV"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 3 -->
            <div style="width:300px;">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/HT_T7dQ3TLM?si=BrseeRfOY74kxzsq"
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

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/switches-industriales-en-tuneles-y-metro-por-que-no-basta-con-un-switch-comercial/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Switches-industriales-en-tuneles-y-metro-%C2%BFpor-que-no-basta-con-un-switch-comercial-2048x1024.jpg"

                        alt="Switches industriales en túneles y metro: ¿por qué no basta con un switch comercial?"

                        width="100%">

                    Switches industriales en túneles y metro: ¿por qué no basta con un switch comercial?

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/optimizacion-del-manejo-de-gruas-en-plantas-de-acero-con-computadoras-industriales-darveen-vt-979/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Optimizacion-del-manejo-de-gruas-en-plantas-de-acero-con-computadoras-industriales-Darveen-VT-979.jpg"

                        alt="Optimización del manejo de grúas en plantas de acero con computadoras industriales Darveen VT-979"

                        width="100%">

                    Optimización del manejo de grúas en plantas de acero con computadoras industriales Darveen VT-979

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/como-asegurar-precision-en-tus-procesos-con-sensores-industriales/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Como-asegurar-precision-en-tus-procesos-con-sensores-industriales-2048x1024.jpg"

                        alt="Cómo asegurar precisión en tus procesos con sensores industriales" width="100%">

                    Cómo asegurar precisión en tus procesos con sensores industriales

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/optimizacion-de-eficiencia-energetica-en-la-fabricacion-de-automoviles/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Optimizacion-de-Eficiencia-Energetica-en-la-Fabricacion-de-Automoviles.jpg"

                        alt="Optimización de Eficiencia Energética en la Fabricación de Automóviles" width="100%">

                    Optimización de Eficiencia Energética en la Fabricación de Automóviles

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

                        <img loading="lazy" src="img/industrias/academia.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Academia e Investigación">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Academia e Investigación</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="agricultura">

                        <img loading="lazy" src="img/industrias/agricultura.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Agricultura">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Agricultura</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="alimentos-y-bebidas">

                        <img loading="lazy" src="img/industrias/alimentosybebidas.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Alimentos y Bebidas">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="automotriz">

                        <img loading="lazy" src="img/industrias/automotriz.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Automotriz">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Automotriz</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="construccion">

                        <img loading="lazy" src="img/industrias/construccion.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Construcción">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Construcción</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="oem">

                        <img loading="lazy" src="img/industrias/oem.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="OEM">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">OEM</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="ensayos-de-materiales">

                        <img loading="lazy" src="img/industrias/materiales.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Ensayos de Materiales">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="farmaceutica-y-laboratorio">

                        <img loading="lazy" src="img/industrias/farmaceutica.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="robotica">

                        <img loading="lazy" src="img/industrias/robots.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Robótica">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Robótica</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="">

                        <img loading="lazy" src="img/industrias/transporte.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Transporte">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Transporte</h5>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>



    <!-- MODAL DIAGRAMA -->

    <div class="modal fade" id="Diagrama1ModalCenter" tabindex="-1" role="dialog"

        aria-labelledby="Diagrama1ModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg"

                        alt=" Optimización de Eficiencia Energética en Fabricación de Automóviles" width="100%">

                </div>

                <div class="modal-footer">

                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->

                </div>

            </div>

        </div>

    </div>



    <!--Contacto-->

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