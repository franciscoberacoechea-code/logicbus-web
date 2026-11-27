<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Detección de Fallas o Picos Eléctricos en Sistemas Automatizados | Logicbus</title>

    <meta name="description"

        content="Solución de detección de fallas y picos eléctricos en sistemas automatizados con sensores industriales, analizadores y PLCs FATEK. Permite monitoreo en tiempo real, alarmas automáticas y análisis histórico para prevenir daños y asegurar continuidad operativa. Distribuido por Logicbus.">

    <meta name="keywords"

        content="detección de fallas eléctricas, picos eléctricos, monitoreo eléctrico, picos de voltaje, transitorios eléctricos, FATEK PLC, S711E, donas Rogowski, análisis de energía, SCADA, mantenimiento predictivo, automatización industrial, IEC 61000, ISO 50001, Logicbus, monitoreo en tiempo real, protección de equipos, sistemas eléctricos industriales">

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

                    Detección de Fallas o Picos Eléctricos en Sistemas Automatizados </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt=" Detección de Fallas o Picos Eléctricos en Sistemas Automatizados" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt=" Detección de Fallas o Picos Eléctricos en Sistemas Automatizados" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Detección de Fallas o Picos Eléctricos en Sistemas

                Automatizados

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/deteccion-fallas-o-picos-electricos-en-sistemas-automatizados.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../seneca"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/seneca.webp" alt="seneca" width="200px"></a>

                    <a href="../fatek"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/fatek.webp" alt="fatek" width="200px"></a>

                </div>

            </div>

            <div class="col-12 col-md-7">

                <p class="light-black text-justify"> Esta aplicación se centra en la detección temprana y prevención de

                    anomalías eléctricas —como picos de voltaje, transitorios, caídas de energía y fallas de equipos—

                    dentro de sistemas industriales automatizados. Al integrar dispositivos de monitorización en tiempo

                    real, sensores de grado industrial y análisis predictivo, la solución protege la infraestructura

                    crítica de automatización, prolonga la vida útil del equipo, asegura continuidad operativa y soporta

                    el cumplimiento de normas de seguridad industrial (IEC 61000, ISO 50001, NFPA 70E).

                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Monitoreo Eléctrico Continuo</b> <br>

                        Se instalan sensores como las <b>Donas Rogowski</b> y analizadores como el <a

                            href="https://tienda.logicbus.com.mx/S711EROGETH45_p_13176.html">S711E</a> en

                        puntos críticos del

                        sistema de distribución eléctrica: gabinetes de control, PLC <a

                            href="https://tienda.logicbus.com.mx/FBS-20MAR2-D24_p_14627.html">FBs-20MAR2-24</a> <b>con

                            un</b>

                        <a href="https://tienda.logicbus.com.mx/FBs-CBES_p_30988.html">FBs-CBES</a> y

                        equipos de alta demanda. Estos dispositivos miden continuamente voltaje, corriente, armónicos y

                        estabilidad de frecuencia.

                    </li>

                    <li><b>Detección de Anomalías y Análisis en Tiempo Real</b> <br>

                        El sistema utiliza umbrales y reconocimiento de patrones para identificar anomalías como caídas

                        de voltaje, transitorios de corta duración o sobrecargas. Cada anomalía detectada se registra

                        con sello de tiempo y clasificación del tipo (p. ej., subtensión, sobrevoltaje, distorsión

                        armónica).

                    </li>

                    <li class="mb-3"><b>Alarmas y Notificación de Eventos</b> <br>

                        Al detectar una falla o pico, el PLC <a

                            href="https://tienda.logicbus.com.mx/FBS-20MAR2-D24_p_14627.html">FBs-20MAR2-24</a> activa

                        alarmas locales

                        (visuales/acústicas) y

                        envía notificaciones vía webserver/cloud o correo/SMS al personal de mantenimiento, permitiendo

                        acción inmediata para evitar daños o paradas de equipo.

                    </li>

                    <li class="mb-3"><b>Registro de Datos y Análisis Histórico</b> <br>

                        Todos los eventos se registran en un sistema centralizado para análisis. Se pueden identificar

                        patrones de problemas eléctricos recurrentes, apoyando análisis de causa raíz y planificación de

                        mejoras de infraestructura.

                    </li>

                    <li class="mb-3"><b>Integración con Estrategias de Protección de Activos</b> <br>

                        El sistema puede activar apagados automáticos o reducción de carga para proteger dispositivos

                        sensibles, integrándose con protocolos de emergencia y gestión de redundancia eléctrica.

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Detección proactiva de fallas eléctricas.</b>

                    </li>

                    <li class="mb-3"><b>Reducción de tiempos de inactividad y costos de mantenimiento.</b>

                    </li>

                    <li class="mb-3"><b>Cumplimiento normativo y de seguridad eléctrica.</b>

                    </li>

                    <li class="mb-3"><b>Alertas en tiempo real y visibilidad de eventos.</b>

                    </li>

                    <li class="mb-3"><b>Decisiones basadas en datos históricos. </b>

                    </li>

                    <li class="mb-3"><b>Integración y escalabilidad con PLCs, SCADA y sistemas de gestión energética.

                        </b>

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/29/fbs-20mar2-ac-c.jpg"

                    alt="FBS-20MAR2-D24" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-20MAR2-D24</p>

                <p>

                    PLC Industrial Básico con 12 entradas digitales/ 8 salidas de relevador/ puerto de comunicación

                    RS-232. Alimentacion de 24VDC y reloj de tiempo real integrado.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-20MAR2-D24_p_14627.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/fbs-cbes.jpg" alt="FBs-CBES"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBs-CBES</p>

                <p> Tarjeta de comunicación Ethernet e IoT, para montaje sobre CPU de la Serie FBs de Fatek en puertos 1

                    y 2, ethernet 10/100BaseT - TCP/IP, Protocolo de aplicación: FATEK, Modbus/TCP, DHCP, DNS, NetBIOS.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBs-CBES_p_30988.html"

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/29/fbs-20mar2-ac-c.jpg"

                    alt="FBS-20MAR2-D24" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-20MAR2-D24</p>

                <p>PLC Industrial Básico con 12 entradas digitales/ 8 salidas de relevador/ puerto de comunicación

                    RS-232. Alimentacion de 24VDC y reloj de tiempo real integrado.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-20MAR2-D24_p_14627.html"

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
                    <iframe loading="lazy"
                        src="https://www.youtube.com/embed/KbzLqpWYMDs?si=_xKtB9d54vS6FMWY"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 2 -->
            <div style="width:300px;">
                <div class="embed-container">
                    <iframe loading="lazy"
                        src="https://www.youtube.com/embed/MvQt1wrHta4?si=sHkZrhWs-Oobdzpj"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 3 -->
            <div style="width:300px;">
                <div class="embed-container">
                    <iframe loading="lazy"
                        src="https://www.youtube.com/embed/207J4XAp1iw?si=0YZzB3bidG4n4dIq"
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

                    href="https://www.logicbus.com.mx/blog/los-3-principales-retos-de-la-industria-5-0/" target="_blank"

                    rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Los-3-principales-retos-de-la-Industria-5.0.jpg"

                        alt="Los 3 principales retos de la Industria 5.0" width="100%">

                    Los 3 principales retos de la Industria 5.0

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/pyrousb-o-pyrominiusb-que-sensor-de-temperatura-infrarrojo-se-adapta-mejor-a-tu-aplicacion/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/PyroUSB-o-PyroMiniUSB.jpg"

                        alt="PyroUSB o PyroMiniUSB: ¿Qué sensor de temperatura infrarrojo se adapta mejor a tu aplicación?"

                        width="100%">

                    PyroUSB o PyroMiniUSB: ¿Qué sensor de temperatura infrarrojo se adapta mejor a tu aplicación?

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/monitoreo-de-temperatura-y-humedad-en-camaras-de-refrigeracion-y-congelacion/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Monitoreo-de-Temperatura-y-Humedad-en-Camaras-de-Refrigeracion-y-Congelacion-2048x1024.jpg"

                        alt="Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación" width="100%">

                    Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación

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

                        alt=" Detección de Fallas o Picos Eléctricos en Sistemas Automatizados" width="100%">

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