<?php
require("../../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatización de Pruebas de Calidad en Automóviles | Logicbus</title>
    <meta name="description" content="Este sistema permite la evaluación automatizada de resistencia, durabilidad y seguridad de componentes clave como frenos, suspensión y carrocerías mediante una red integrada de sensores y dispositivos de control conectados.">
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
    <?php require("../../libreria/header.view.php"); ?>

    <!--RUTAS-->
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="../" class="blue link-orange">Aplicaciones en la Industria</a></li>
                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Transporte</a></li>
                <li class="breadcrumb-item"><a href="../automotriz.php" class="blue link-orange">Automotriz</a></li>
                <li class="breadcrumb-item active" aria-current="page">Automatización de Pruebas de Calidad en Automóviles</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/aplicaciones-en-la-industria.png" alt="Banner" alt="Automatización de Pruebas de Calidad en Automóviles" class="hide-mobile">
        <img src="../img/banner-mobile.webp" alt="Banner-mobile" alt="Automatización de Pruebas de Calidad en Automóviles" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="title white font-weight-bold mb-0">Automatización de Pruebas de Calidad en Automóviles</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="../img/Automatizacion-de-Pruebas-de-Calidad-en-Automoviles-.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../../futek"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                    <a href="../../madgetech.php"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/madgetech.webp" alt="Madgetech" width="200px"></a>
                    <a href="../../seneca"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/seneca.webp" alt="Seneca" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">Este sistema permite la evaluación automatizada de resistencia, durabilidad y seguridad de componentes clave como frenos, suspensión y carrocerías mediante una red integrada de sensores y dispositivos de control conectados. Proporciona datos de operación y mantenimiento en tiempo real, optimizando la eficiencia y la seguridad.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Captura de datos de fuerza y carga</b>: Las celdas de carga <b>Futek <a class="blue link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-en-linea" target="_blank" rel="noopener noreferrer">Series LCM</a></b> se instalan en componentes de suspensión y chasis para medir fuerzas de compresión, mientras que las celdas <b>Futek <a class="blue link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-barra" target="_blank" rel="noopener noreferrer">Series LCF</a></b> miden tensión en cables y estructuras. Estas celdas están conectadas al amplificador <a class="font-weight-bold blue link-orange" href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank" rel="noopener noreferrer">USB225</a>, que acondiciona las señales y las envía a la computadora para ser interpretadas por el software Sensit o LabView.</li>
                    <li><b>Monitoreo de presión</b>: Sensores de presión <b>Futek <a class="font-weight-bold blue link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-sensores-de-presion-pmp300" target="_blank" rel="noopener noreferrer">Series PMP300</a></b> se colocan en los sistemas hidráulicos de frenos y suspensión para registrar presiones que sobrepasen el nivel establecido. Celdas de carga <b>Futek <a class="blue link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-pedal" target="_blank" rel="noopener noreferrer"></a>Series LAU200 y LAU220</b> tienen la función de medir la presión ejercida en los pedales de freno para así tener registros y ajustar la sensibilidad de frenado. Los datos son transmitidos al los <a class="font-weight-bold blue link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-instrumentos-modulos-usb" target="_blank" rel="noopener noreferrer">Módulos USB</a> y amplificadores <a class="font-weight-bold blue link-orange" href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html" target="_blank" rel="noopener noreferrer">IAA100</a>, que centralizan las lecturas para un análisis en tiempo real.</li>
                    <li><b>Evaluación térmica</b>: Registradores de temperatura <b>MadgeTech <a class="blue link-orange" href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-registradores-registradores-inalambricos-temperatura-rftctemp2000a-mp" target="_blank" rel="noopener noreferrer">RFTCTemp2000A</a> o el <a class="blue link-orange" href="https://tienda.logicbus.com.mx/RFRTDTEMP2000A_p_7641.html" target="_blank" rel="noopener noreferrer">RFRTDTemp2000A</a></b> supervisan temperaturas a través de termopares en componentes como frenos y motores sometidos a condiciones extremas. Una vez monitoreado y guardados los datos de temperatura de estos componentes se analizan en el <a class="blue link-orange" href="../../madgetech-4-standard.php">Software Madgetech4</a> y se exportan en formato Excel o .CSV. para ser correlacionados con otros datos de rendimiento.</li>
                    <li><b>Procesamiento de datos</b>: El sistema datalogger <a class="font-weight-bold blue link-orange" href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank" rel="noopener noreferrer">Z-LTE-WW</a> recolecta y sincroniza todas las señales provenientes de las celdas de carga, sensores de presión y temperatura. Los datos son procesados utilizando software SEAL totalmente gratuito, permite a través de la programación orientada a objetos, gestionar lógicas y controles.</li>
                    <li><b>Alertas y notificaciones</b>: El software SEAL permite, a través de la programación orientada a objetos, gestionar lógicas y controles como: comandos, automatizaciones, alarmas, umbrales, temporizadores, informes con la posibilidad de configurar y actualizar totalmente los dispositivos GSM de forma remota a través de SIM o IP estática.</li>
                    <li><b>Supervisión centralizada</b>: Todos los datos recopilados se integran en la plataforma IoT de SENECA, que permite supervisar el estado de los componentes en tiempo real y realizar análisis predictivos. Esto asegura que el mantenimiento se programe de manera eficiente, evitando fallas imprevistas.</li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema</p>
                <ul class="light-black text-justify">
                    <li><b>Automatización Integral</b>: La integración de sensores avanzados y software de procesamiento garantiza la eficiencia y precisión en las pruebas.
                    <li><b>Conectividad Continua y Confiable</b>: Los dispositivos conectados ofrecen monitoreo ininterrumpido.</li>
                    <li><b>Mantenimiento Predictivo</b>: Detecta y previene fallas antes de que ocurran, reduciendo tiempos de inactividad y costos.</li>
                    <li><b>Monitoreo y Respuesta en Tiempo Real</b>: Las alertas automáticas permiten acciones inmediatas ante riesgos o condiciones críticas.</li>
                    <li><b>Gestión Centralizada de Datos</b>: Proporciona una visión holística del desempeño de los componentes, mejorando la toma de decisiones estratégicas.</li>
                    <li><b>Optimización de Procesos</b>: Los datos detallados y correlacionados facilitan ajustes precisos en los sistemas probados, mejorando la calidad general.</li>
                </ul>
                <p class="light-black text-justify">Este sistema asegura altos estándares de calidad y seguridad en la industria automotriz mediante la automatización y el uso de tecnología avanzada.</p>
                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LCM100.jpg" alt="LCM100" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LCM100</p>
                <p>Celda de carga en línea</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-en-linea-lcm100" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LCB200.jpg" alt="LCB200" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LCB200</p>
                <p>Celda de carga de tipo extremo de varilla roscada</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-barra-lcb200" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04720.jpg" alt="USB225" width="150px">
                <p class="font-weight-bold mt-2 mb-0">USB225</p>
                <p>Kit de salida USB de alta resolucón y velocidad</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/PMP300-PRESSURE-SENSOR-OEM-11-1.jpg" alt="Serie PMP300" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie PMP300</p>
                <p>Sensor de presión (OEM)</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-sensores-de-presion-pmp300" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH04404-1.jpg" alt="Serie LAU220" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LAU220</p>
                <p>Sensor de fuerza de tipo pedal</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-pedal-lau220" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH04720.jpg" alt="USB520" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Módulo USB</p>
                <p>USB de alta resolución</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-instrumentos-modulos-usb" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/qsh02025%201.jpg" alt="IAA100" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IAA100</p>
                <p>Amplificador analógico de galgas extensométricas con salida de voltaje</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/z-lte-ww.jpg" alt="Z-LTE-WW" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Z-LTE-WW</p>
                <p>Controlador IoT</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/rftctemp2000a-mp.jpg" alt="RFTCTEMP2000A-MP" width="150px">
                <p class="font-weight-bold mt-2 mb-0">RFTCTEMP2000A</p>
                <p>Registrador de datos inalambrico de temperatura</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-registradores-registradores-inalambricos-temperatura-rftctemp2000a-mp" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/rfrtdtemp2000a_3.png" alt="RFRTDTEMP2000A" width="150px">
                <p class="font-weight-bold mt-2 mb-0">RFRTDTEMP2000A</p>
                <p>Registrador de datos inalambrico de temperatura</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RFRTDTEMP2000A_p_7641.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://www.logicbus.com.mx/imagenes/software/MadgeTech.png" alt="MadgeTech 4 Standard" width="150px">
                <p class="font-weight-bold mt-2 mb-0">MadgeTech 4 Standard</p>
                <p>Software de configuración y descarga de datos para Registradores</p>
                <a class="button button-circle-orange" href="https://www.logicbus.com.mx/madgetech-4-standard" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/aisX7PO1X18?si=hzzl0XzQlY3Wmgrp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/oODYfSQy058?si=FvMAz2IZ0dMGVI0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/oIDCmSgTINc?si=-QnbZVriJlCl1cYQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/automatizacion-de-pruebas-de-calidad-en-automoviles/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/Automatizacion-de-Pruebas-de-Calidad-en-Automoviles.png" alt="Automatización de Pruebas de Calidad en Automóviles: Innovación para una Industria Más Segura y Eficiente" width="100%">
                    Automatización de Pruebas de Calidad en Automóviles: Innovación para una Industria Más Segura y Eficiente
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/optimizacion-energetica-en-trenes-la-clave-para-un-futuro-sostenible/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Optimizacion-Energetica-en-Trenes-La-Clave-para-un-Futuro-Sostenible.png" alt="Optimización Energética en Trenes: La Clave para un Futuro Sostenible" width="100%">
                    Optimización Energética en Trenes: La Clave para un Futuro Sostenible
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/iot-y-comunicacion-en-los-nuevos-trenes-de-mexico-la-conectividad-del-futuro/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/IoT-y-Comunicacion-en-los-Nuevos-Trenes-de-Mexico-La-Conectividad-del-Futuro.png" alt="IoT y Comunicación en los Nuevos Trenes de México: La Conectividad del Futuro" width="100%">
                    IoT y Comunicación en los Nuevos Trenes de México: La Conectividad del Futuro
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sistema-de-control-de-accesos-y-seguridad-en-infraestructura-ferroviaria-proteccion-monitoreo-y-automatizacion-centralizada/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Sistema-de-Control-de-Accesos-y-Seguridad-en-Infraestructura-Ferroviaria-Proteccion-Monitoreo-y-Automatizacion-Centralizada.png" alt="Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria: Protección, Monitoreo y Automatización Centralizada" width="100%">
                    Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria: Protección, Monitoreo y Automatización Centralizada
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/mantenimiento-predictivo-y-monitoreo-en-tiempo-real-en-la-industria-ferroviaria/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Mantenimiento-Predictivo-y-Monitoreo-en-Tiempo-Real-en-la-Industria-Ferroviaria.png" alt="Mantenimiento Predictivo y Monitoreo en Tiempo Real en la Industria Ferroviaria" width="100%">
                    Mantenimiento Predictivo y Monitoreo en Tiempo Real en la Industria Ferroviaria
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
                    <a class="text-white" href="../academia-e-investigacion">
                        <img src="../img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);" alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../agricultura">
                        <img src="../img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);" alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../alimentos-y-bebidas">
                        <img src="../img/industrias/alimentosybebidas.webp" class="card-img" style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../automotriz">
                        <img src="../img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);" alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../construccion">
                        <img src="../img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);" alt="Construcción">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Construcción</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../oem">
                        <img src="../img/industrias/oem.webp" class="card-img" style="filter: brightness(0.5);" alt="OEM">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">OEM</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../ensayos-de-materiales">
                        <img src="../img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);" alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../manufactura">
                        <img src="../img/industrias/manufactura.webp" class="card-img" style="filter: brightness(0.5);" alt="Manufactura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Manufactura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../farmaceutica-y-laboratorio">
                        <img src="../img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../robotica.php">
                        <img src="../img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);" alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="./">
                        <img src="../img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);" alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../espacial-defensa-y-aeronautica.php">
                        <img src="../img/industrias/aeronautica.webp" class="card-img" style="filter: brightness(0.5);" alt="Aeronautica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Aeronautica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="./ferroviaria.php">
                        <img src="../img/industrias/ferroviario.webp" class="card-img" style="filter: brightness(0.5);" alt="Ferroviaria">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ferroviaria</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="./maritima.php">
                        <img src="../img/industrias/maritimo.webp" class="card-img" style="filter: brightness(0.5);" alt="Maritima">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Maritima</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL DIAGRAMA -->
    <div class="modal fade" id="Diagrama1ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama1ModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="Automatización de Pruebas de Calidad en Automóviles" width="100%">
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
                </div>
            </div>
        </div>
    </div>

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
    <?php require("../../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>