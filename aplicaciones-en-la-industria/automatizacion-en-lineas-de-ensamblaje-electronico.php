<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatización en Líneas de Ensamblaje Electrónico | Logicbus</title>
    <meta name="description" content="La automatización en líneas de ensamblaje electrónico es esencial para optimizar la producción, garantizar la calidad de los productos y reducir costos operativos.">
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
                <li class="breadcrumb-item active" aria-current="page">Automatización en Líneas de Ensamblaje Electrónico</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Automatización en Líneas de Ensamblaje Electrónico" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Automatización en Líneas de Ensamblaje Electrónico" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Automatización en Líneas de Ensamblaje Electrónico</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Automatizacion-en-Lineas-de-Ensamblaje-Electronico.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../robots-siasun.php"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/siasun.webp" alt="Siasun" width="200px"></a>
                    <a href="../tri-tronics.php"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="Tri-tronics" width="200px"></a>
                    <a href="../calex.php"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/calex.webp" alt="Calex" width="200px"></a>
                    <a href="../futek.php"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Tri-tronics" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">La automatización en líneas de ensamblaje electrónico es esencial para optimizar la producción, garantizar la calidad de los productos y reducir costos operativos. Esta aplicación integra tecnología avanzada para automatizar tareas repetitivas, mejorar la precisión en los procesos y aumentar la eficiencia general del sistema.</p>

                <h2 class="paragraph text-center light-black font-weight-bold">¿Cómo funciona?</h2>
                <ol class="light-black">
                    <li><b>Trazabilidad Inteligente en el Ensamble Electrónico:</b>
                        Al inicio de la línea, los componentes electrónicos con etiquetas RFID UHF Model C0404-H3 son identificados y clasificados automáticamente mediante el lector portátil Model <a class="link-orange" href="https://tienda.logicbus.com.mx/806-0068-00_p_25760.html" target="_blank" rel="noopener noreferrer">3048E UHF</a>, que registra el lote y las especificaciones de cada PCB. Estas etiquetas, diseñadas para resistir altas temperaturas y montarse sobre superficies metálicas, permiten una trazabilidad precisa y sin contacto en el proceso de ensamble electrónico.</li>
                    <li><b>Montaje Automático de Componentes:</b>
                        Se utilizan robots colaborativos (cobots) de <a class="link-orange" href="../robots-siasun.php" target="_blank" rel="noopener noreferrer">SIASUN</a>, para la manipulación y alimentación precisa de componentes en las estaciones de ensamblaje. Estos cobots trabajan en conjunto con operarios humanos, reduciendo la carga física y mejorando la velocidad del proceso.</li>
                    <li><b>Optimización del montaje Automatizado:</b>
                        En el montaje automatizado, los <a class="link-orange" href="../sensores-fotoelectricos.php" target="_blank" rel="noopener noreferrer">sensores fotoeléctricos</a> de TriTronics como el <a class="link-orange" href="https://tienda.logicbus.com.mx/SLVC_p_16040.html" target="_blank" rel="noopener noreferrer">SmartDoT</a> conectado al PLC, detecta con precisión la presencia y alineación de piezas, asegurando su correcta posición antes del ensamblaje. Los <a class="link-orange" href="../encoder.php" target="_blank" rel="noopener noreferrer">encoders</a> de Photocraft como el <a class="link-orange" href="https://tienda.logicbus.com.mx/R20-P240AJ8-30S3-RC_p_35197.html" target="_blank" rel="noopener noreferrer">R20-P240AJ8-30S3 RC</a> mide el desplazamiento y velocidad en transportadores, permitiendo una sincronización óptima del proceso. Juntos, estos dispositivos mejoran la precisión, reducen errores y garantizan un ensamblaje eficiente.</li>
                    <li><b>Soldadura y Ensamblaje Final:</b>
                        La integración de robots móviles autónomos (AMRs) La integración de robots móviles autónomos, como el modelo <a class="link-orange" href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html" target="_blank" rel="noopener noreferrer">C2 de Quasi</a>, permite el transporte eficiente de lotes de componentes electrónicos desde el área de almacenamiento hasta las estaciones de soldadura. Una vez completado el proceso de soldado, un sistema de control térmico con <a class="link-orange" href="../infrarrojos.php" target="_blank" rel="noopener noreferrer">sensores infrarrojos</a> como el <a class="link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocube-sx" target="_blank" rel="noopener noreferrer">PryoCube XS</a> monitorea en tiempo real la temperatura de los componentes electrónicos. La medición se muestra directamente en un display y, además, se transmite mediante una salida analógica a un PLC o sistema DAQ para su registro y análisis. Esto permite un control preciso de la temperatura, asegurando la integridad y desempeño de los componentes en el ensamblaje.</li>
                    <li><b>Pruebas y Control de Calidad:</b>
                        En las etapas finales, los productos ensamblados pasan por un proceso de prueba automatizado. Celdas de carga en tensión, compresión <a class="link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-s-lsb205" target="_blank" rel="noopener noreferrer">LSB205</a> conectado al instrumento <a class="link-orange" href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank" rel="noopener noreferrer">USB225</a> para el monitoreo en PC y sensores de torque <a class="link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio-trh300" target="_blank" rel="noopener noreferrer">TRH300</a> de FUTEK conectados a un amplificador <a class="link-orange" href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html" target="_blank" rel="noopener noreferrer">IAA100</a>, verifican la resistencia mecánica y funcionalidad de los ensamblajes, asegurando mediciones precisas de fuerza en distintos puntos del producto. Mientras tanto, el software de análisis como <a class="link-orange" href="https://tienda.logicbus.com.mx/FSH04877_p_36733.html" target="_blank" rel="noopener noreferrer">SENSIT</a> centraliza los resultados de las pruebas para garantizar el cumplimiento con los estándares de calidad.</li>
                    <li><b>Monitoreo y Supervisión en Tiempo Real:</b>
                        Una <a class="link-orange" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales" target="_blank" rel="noopener noreferrer">computadora industrial</a> conecta todos los sistemas, permitiendo a los operarios visualizar métricas de producción, detectar anomalías y ajustar parámetros en tiempo real. Los datos generados por la línea se sincronizan con servicios en la nube, como la <a class="link-orange" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-plataforma-iot-fatek" target="_blank" rel="noopener noreferrer">Plataforma IoT de FATEK</a>, facilitando el análisis de tendencias y la toma de decisiones informadas.</li>
                    <li><b>Interacción Humana y Ajustes Manuales:</b>
                        En caso de requerir ajustes o intervención directa, los técnicos pueden utilizar un <a class="link-orange" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-teclados-industriales" target="_blank" rel="noopener noreferrer">teclado industrial</a> como el <a class="link-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=D-87PB&search=" target="_blank" rel="noopener noreferrer">D-87PB</a>, diseñado para operar en ambientes de producción exigentes. Su resistencia y ergonomía permiten una interacción segura y eficiente, facilitando la configuración del sistema.</li>
                </ol>
                <h2 class="paragraph text-center light-black font-weight-bold">Ventajas de la Aplicación:</h2>
                <ul class="light-black">
                    <li><b>Trazabilidad y Control Preciso:</b>
                        Las etiquetas RFID C0404-H3 y el lector <a class="link-orange" href="https://tienda.logicbus.com.mx/806-0068-00_p_25760.html" target="_blank" rel="noopener noreferrer">3048E UHF</a> garantizan identificación automática y sin errores desde el inicio del proceso.</li>
                    <li><b>Automatización para Mayor Eficiencia:</b>
                        Los cobots de <a class="link-orange" href="../robots-siasun.php" target="_blank" rel="noopener noreferrer">SIASUN</a> agilizan el ensamblaje, mientras que el AMR <a class="link-orange" href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html" target="_blank" rel="noopener noreferrer">C2 de Quasi</a> optimiza el transporte de materiales, reduciendo tiempos muertos.</li>
                    <li><b>Ensambles Precisos y Control de Calidad:</b>
                        Sensores como el <a class="link-orange" href="https://tienda.logicbus.com.mx/SLVC_p_16040.html" target="_blank" rel="noopener noreferrer">SmartDoT</a> de TriTronics y el <b>encoder Photocraft</b> <a class="link-orange" href="https://tienda.logicbus.com.mx/R20-P240AJ8-30S3-RC_p_35197.html" target="_blank" rel="noopener noreferrer">R20-P240AJ8-30S3 RC</a> aseguran alineación exacta, mientras que las celdas de carga <a class="link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-s-lsb205" target="_blank" rel="noopener noreferrer">LSB205</a> y sensores de torque <a class="link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio-trh300" target="_blank" rel="noopener noreferrer">TRH300</a> FUTEK verifican resistencia y funcionalidad.</li>
                    <li><b>Monitoreo Inteligente en Tiempo Real:</b>
                        El sensor infrarrojo <a class="link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrousb-version-nueva" target="_blank" rel="noopener noreferrer">PryoUSB</a> supervisa temperaturas en soldadura y envía datos al PLC o DAQ, permitiendo ajustes inmediatos.</li>
                    <li><b>Supervisión Centralizada y Análisis de Datos:</b>
                        El software <a class="link-orange" href="https://tienda.logicbus.com.mx/FSH04877_p_36733.html" target="_blank" rel="noopener noreferrer">SENSIT</a> recopila y analiza datos de pruebas para garantizar calidad, mientras que una <a class="link-orange" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales" target="_blank" rel="noopener noreferrer">computadora industrial</a> gestiona la producción con visualización en tiempo real, complementada por el teclado industrial <a class="link-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=D-87PB&search=" target="_blank" rel="noopener noreferrer">D-87PB</a> para ajustes manuales eficientes.</li>
                </ul>
                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/806-0068.jpg" alt="806-0068-00" width="150px">
                <p class="font-weight-bold mt-2 mb-0">806-0068-00</p>
                <p>Lector RFID UHF portátil</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/806-0068-00_p_25760.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/226/SLVC.jpg" alt="SLVC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">SLVC</p>
                <p>Sensor Laser SMARTEYE SmartDoT</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/SLVC_p_16040.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/226/r20-p240aj8-30s3%20rc.jpg" alt="R20-P240AJ8-30S3 RC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">R20-P240AJ8-30S3 RC</p>
                <p>Codificador de eje R20 programable</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/R20-P240AJ8-30S3-RC_p_35197.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/331/model-c2.jpg" alt="QC2-00001" width="150px">
                <p class="font-weight-bold mt-2 mb-0">QC2-00001</p>
                <p>Carro de entrega autónomo robot model C2 AMR</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_xs/pyrocube_xs.jpg" alt="PyroCube XS" width="150px">
                <p class="font-weight-bold mt-2 mb-0">PyroCube XS</p>
                <p>Sensor de temperatura infrarrojo con óptica enfocada para medir objetivos extremadamente pequeños.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocube-sx" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LSB205.jpg" alt="LSB205" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LSB205</p>
                <p>El LSB205 es uno de los sensores de fuerza en miniatura más solicitados de FUTEK.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-s-lsb205" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/TRH300-HEX-DRIVE-ROTARY-TORQUE-SENSOR-1.jpg" alt="TRH300" width="150px">
                <p class="font-weight-bold mt-2 mb-0">TRH300</p>
                <p>Sensor de par giratorio de accionamiento hexagonal.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio-trh300" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04720.jpg" alt="FSH04720" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH04720</p>
                <p>USB225 es un acondicionador de señal optimizado de una sola unidad.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh03863.jpg" alt="FSH03863" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH03863</p>
                <p>Amplificador de voltaje de acondicionamiento de señal de galga extensométrica de puente completo.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04877.jpg" alt="FSH04877" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH04877</p>
                <p>Software de prueba y medición SENSIT®.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04877_p_36733.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/IOT.jpg" alt="FSH04877" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Plataforma IoT Fatek</p>
                <p>Licencia para IoT</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-plataforma-iot-fatek" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/298/LBD-29887PB.jpg" alt="D-87PB" width="150px">
                <p class="font-weight-bold mt-2 mb-0">D-87PB</p>
                <p>Teclado industrial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=D-87PB&search=" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6 mt-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/rc1uvanTcTg?si=0mNtqdQ30PEnAWY1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/qjQcF59wlqM?si=0aBJueMeAPtQeERP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/al6aXxsQzFs?si=MKVADN2YN5itlm4R" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/uS1SJ9ujjx0?si=g7YSvIVPJwABw0MJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5 text-center">
            <div class="col-12 col-md-4">
                <a class="blue link-orange paragraph" href="https://www.logicbus.com.mx/blog/automatizacion-en-lineas-de-ensamblaje-electronico/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/02/Automatizacion-en-Lineas-de-Ensamblaje-Electronico.png" alt="Automatización en Líneas de Ensamblaje Electrónico" width="100%">Automatización en Líneas de Ensamblaje Electrónico
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a class="blue link-orange paragraph" href="https://www.logicbus.com.mx/blog/nanotemp125-la-nueva-frontera-en-registro-de-temperatura-compacto/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/01/NanoTemp125-La-Nueva-Frontera-en-Registro-de-Temperatura-Compacto.png" alt="NanoTemp125: La Nueva Frontera en Registro de Temperatura Compacto" width="100%">NanoTemp125: La Nueva Frontera en Registro de Temperatura Compacto
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a class="blue link-orange paragraph" href="https://www.logicbus.com.mx/blog/light101a-de-madgetech-revolucionando-el-monitoreo-de-fotoperiodos/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/01/Light101A-de-MadgeTech-Revolucionando-el-Monitoreo-de-Fotoperiodos.png" alt="Light101A de MadgeTech: Revolucionando el Monitoreo de Fotoperíodos" width="100%">Light101A de MadgeTech: Revolucionando el Monitoreo de Fotoperíodos
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a class="blue link-orange paragraph" href="https://www.logicbus.com.mx/blog/deteccion-de-fallos-en-equipos-medicos/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/01/Deteccion-de-Fallos-en-Equipos-Medicos-Garantizando-la-Continuidad-Operativa-scaled.png" alt="Detección de Fallos en Equipos Médicos" width="100%">Detección de Fallos en Equipos Médicos
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
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);" alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);" alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img src="img/industrias/alimentosybebidas.webp" class="card-img" style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);" alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);" alt="Construcción">
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
                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);" alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);" alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);" alt="Transporte">
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