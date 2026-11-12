<?php
require("../../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento Predictivo en Infraestructura Ferroviaria | Logicbus</title>
    <meta name="description" content="En la industria ferroviaria, la prevención de fallos y el mantenimiento eficiente son cruciales para asegurar la seguridad y la continuidad operativa.">
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
                <li class="breadcrumb-item"><a href="./ferroviaria.php" class="blue link-orange">Ferroviaria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mantenimiento Predictivo en Infraestructura Ferroviaria</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/ferroviaria.png" alt="Banner" alt="Mantenimiento Predictivo en Infraestructura Ferroviaria" class="hide-mobile">
        <img src="../img/ferroviaria-mobile.webp" alt="Banner-mobile" alt="Mantenimiento Predictivo en Infraestructura Ferroviaria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="title white font-weight-bold mb-0">Mantenimiento Predictivo en Infraestructura Ferroviaria</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="../img/Mantenimiento-Predictivo-y-Monitoreo-en-Tiempo-Real-en-la-Industria-Ferroviaria.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../../futek"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                    <a href="../../madgetech"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/madgetech.webp" alt="MadgeTech" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">En la industria ferroviaria, la prevención de fallos y el mantenimiento eficiente son cruciales para asegurar la seguridad y la continuidad operativa. Implementar un sistema de mantenimiento predictivo y monitoreo en tiempo real puede ayudar a identificar problemas antes de que se conviertan en fallos críticos, optimizando así los costos de mantenimiento y reduciendo el tiempo de inactividad.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Sensores de Vibración y Temperatura</b>: Se instalan sensores como el <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-registradores-registradores-inalambricos-temperatura-rftctemp2000a-mp" target="_blank" rel="noopener noreferrer">RFTCTemp2000A</a> y el <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/Shock300_p_26250.html" target="_blank" rel="noopener noreferrer">Shock300</a> en áreas críticas del tren, tales como motores y ejes, para monitorear de forma continua vibraciones y temperatura. Estos indicadores son clave para detectar el estado y rendimiento de los componentes.</li>
                    <li class="mb-3"><b>Monitoreo de Temperatura en el Sistema de Frenado y Refrigeración</b>: Con los registradores de temperatura basados en termopares de MadgeTech, es posible recibir alertas cuando el sistema de frenado presenta un sobrecalentamiento, indicando una posible falla. De igual forma, se monitorea el sistema de refrigeración del motor, asegurando que mantenga el motor en un rango de temperatura seguro.</li>
                    <li class="mb-3"><b>Celdas de Carga de FUTEK para Monitoreo de Peso y Distribución</b>: Las celdas de carga de FUTEK, como las familias <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton" target="_blank" rel="noopener noreferrer">LLB</a> o <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-pancake" target="_blank" rel="noopener noreferrer">LCF</a>, se instalan en los ejes o en puntos estratégicos de los vagones para medir el peso y la distribución de la carga en tiempo real. Al conectarlas a una caja sumadora con salida de voltaje <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/FSH02126_p_10162.html" target="_blank" rel="noopener noreferrer">IAC200</a>, se permite que el <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-registradores-registradores-inalambricos-voltaje-rfvolt2000a-15v" target="_blank" rel="noopener noreferrer">RFVolt2000A</a> de MadgeTech monitoree y registre estos datos, aportando una visión clara de la carga y su distribución para optimizar la operación y la seguridad.</li>
                    <li class="mb-3"><b>Sensores de Torque de FUTEK</b>: Los sensores de torque rotatorios, como los modelos <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio" target="_blank" rel="noopener noreferrer">TRS</a> y <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio" target="_blank" rel="noopener noreferrer">TRD</a> de FUTEK, se colocan en motores y ejes de transmisión, midiendo el torque dinámico en tiempo real. Estos sensores permiten detectar cambios en el torque, que pueden ser indicativos de desgaste o desajuste en los componentes de rotación.</li>
                    <li class="mb-3"><b>Sistema de Adquisición de Datos</b>: Los datos recolectados por los sensores son enviados al <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/RFC1000_p_4446.html" target="_blank" rel="noopener noreferrer">RFC1000</a> Cloud Relay, un módulo de adquisición de datos que centraliza la información a través de Ethernet y permite la conexión de sensores de radiofrecuencia para la transmisión de datos en tiempo real a la nube.</li>
                    <li class="mb-3"><b>Gateway Industrial para Comunicación IoT</b>: El Gateway IoT <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/IRT5300L-5T2D-2P1236_p_36757.html" target="_blank" rel="noopener noreferrer">IRT5300L-5T2D-2P12_36</a> de 3onedata actúa como un enrutador 4G avanzado, proporcionando una conexión continua a Internet. A través de este gateway, el RFC Cloud Relay puede transmitir y recibir los datos de los sensores en tiempo real hacia y desde la nube, haciendo que estos datos sean accesibles en dispositivos móviles o cualquier dispositivo con acceso a Internet.</li>
                    <li class="mb-3"><b>Plataforma de Monitoreo y Análisis de Datos</b>: La plataforma <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/MadgeTech_4_Standard" target="_blank" rel="noopener noreferrer">MadgeTech 4</a> se utiliza para visualizar y analizar los datos recopilados. Este software permite a los operadores configurar alarmas, analizar tendencias históricas y observar gráficos en tiempo real, mejorando la capacidad de respuesta ante problemas potenciales.
                    <li class="mb-3"><b>Controladores de Alarmas</b>: Con el software <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/MadgeTech_4_Standard" target="_blank" rel="noopener noreferrer">MadgeTech 4</a> es posible configurar alertas visuales y sonoras, así como notificaciones por correo electrónico, lo que permite a los operadores reaccionar de forma rápida ante fallos detectados, sin importar dónde se encuentren.</li>
                </ol>
            </div>
            <div class="container text-center">
                <p class="text-center light-black font-weight-bold">Proceso Paso a Paso</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Recolección de Datos</b>: Los sensores de vibración y temperatura <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-registradores-registradores-inalambricos-temperatura-rftctemp2000a-mp" target="_blank" rel="noopener noreferrer">RFTCTemp2000A</a> y <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/Shock300_p_26250.html" target="_blank" rel="noopener noreferrer">Shock300</a> recopilan datos de los componentes críticos del tren en tiempo real.</li>
                    <li class="mb-3"><b>Centralización de Datos</b>: Estos datos se envían al <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/RFC1000_p_4446.html" target="_blank" rel="noopener noreferrer">RFC1000</a> Cloud Relay, que centraliza la información y permite el envío de los datos a través de Ethernet.</li>
                    <li class="mb-3"><b>Transmisión a la Nube</b>: El Gateway IoT <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/IRT5300L-5T2D-2P1236_p_36757.html" target="_blank" rel="noopener noreferrer">IRT5300L-5T2D-2P12_36</a> convierte los datos en información digital y los envía a la nube para su análisis.</li>
                    <li class="mb-3"><b>Visualización y Alerta</b>: El software <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/MadgeTech_4_Standard" target="_blank" rel="noopener noreferrer">MadgeTech 4</a> procesa y visualiza los datos, permitiendo a los operadores monitorear gráficos, indicadores y configurar alarmas para identificar rápidamente cualquier anomalía.</li>
                    <li class="mb-3"><b>Acciones ante Anomalías</b>: Si se detectan condiciones anormales, el sistema de alarmas del <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/MadgeTech_4_Standard" target="_blank" rel="noopener noreferrer">MadgeTech 4</a> envía notificaciones y activa señales visuales y sonoras para alertar al personal de mantenimiento. Esto permite actuar de inmediato y reducir los riesgos operativos del tren.</li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema:</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Prevención de Fallos y Mayor Seguridad</b>: Detecta problemas temprano, reduciendo el riesgo de accidentes y aumentando la seguridad.</li>
                    <li class="mb-3"><b>Optimización de Costos y Eficiencia</b>: Minimiza los costos de mantenimiento y extiende la vida útil de los componentes, evitando reparaciones innecesarias.</li>
                    <li class="mb-3"><b>Reducción de Inactividad</b>: Anticipa fallos y programa mantenimientos en momentos oportunos, maximizando la disponibilidad operativa.</li>
                    <li class="mb-3"><b>Monitoreo en Tiempo Real desde Cualquier Ubicación</b>: Permite responder rápidamente a alertas y supervisar remotamente desde dispositivos conectados.</li>
                    <li class="mb-3"><b>Toma de Decisiones Basada en Datos</b>: Facilita decisiones informadas al analizar tendencias y datos históricos.</li>
                    <li class="mb-3"><b>Alertas Proactivas Configurables</b>: Envía alertas inmediatas para una reacción rápida ante desviaciones, protegiendo los equipos.</li>
                </ol>
                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/rftctemp2000a-mp.jpg" alt="RFTCTEMP2000A-MP" width="150px">
                <p class="font-weight-bold mt-2 mb-0">RFTCTEMP2000A</p>
                <p>Registrador de datos inalambrico de temperatura</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-registradores-registradores-inalambricos-temperatura-rftctemp2000a-mp" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/Shock300.jpg" alt="Shock300" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Shock300</p>
                <p>Registrador de datos de impacto triaxial con tres rangos de aceleración integrados.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Shock300_p_26250.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LLB250.jpg" alt="Serie LLB" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LLB</p>
                <p>Celda de carga de tipo botón</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LCF456.jpg" alt="Serie LCF" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LCF</p>
                <p>Celda de carga de tipo pancake</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-pancake" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/rfvolt2000a.jpg" alt="RFVolt2000A" width="150px">
                <p class="font-weight-bold mt-2 mb-0">RFVolt2000A</p>
                <p>Registrador de voltaje inalámbrico de dos vías con LCD</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-registradores-registradores-inalambricos-voltaje-rfvolt2000a-15v" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/TRS300.jpg" alt="Serie TRS" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie TRS</p>
                <p>Sensor de torque sin contacto con codificador</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/TRD305.jpg" alt="Serie TRD" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie TRD</p>
                <p>Sensor de torque sin contacto con codificador</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/rfc1000_1.jpg" alt="RFC1000" width="150px">
                <p class="font-weight-bold mt-2 mb-0">RFC1000</p>
                <p>Transceptor inalámbrico para las series RFOT y RF2000A</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RFC1000_p_4446.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/16/irt5300l-5t1d.jpg" alt="IRT5300L-5T2D-2P12_36" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IRT5300L-5T2D-2P12_36</p>
                <p>Router 4G industrial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/IRT5300L-5T2D-2P1236_p_36757.html" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/abvBjQr_nL4?si=omZ4o3v_eLW3YH8I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/P5yT_M-XIdk?si=c7OdCynj-8m_Bed1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/ZTvVOXNnRsg?si=AYj3lxlFFlNDYYiy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/mantenimiento-predictivo-y-monitoreo-en-tiempo-real-en-la-industria-ferroviaria/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Mantenimiento-Predictivo-y-Monitoreo-en-Tiempo-Real-en-la-Industria-Ferroviaria.png" alt="Blog 1" width="100%">
                    Mantenimiento Predictivo y Monitoreo en Tiempo Real en la Industria Ferroviaria
                </a>
            </div>
            
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sistema-de-saneamiento-ferroviario-de-alta-velocidad-2/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/11/bbnn-16.png" alt="Blog 3" width="100%">
                    Sistema de saneamiento ferroviario de alta velocidad Rev.
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sistema-ferroviario-velocidad-fatek-plc/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2021/01/image3.png" alt="Blog 4" width="100%">
                    Sistema de saneamiento ferroviario de alta velocidad con Fatek
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
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="Mantenimiento Predictivo en Infraestructura Ferroviaria" width="100%">
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