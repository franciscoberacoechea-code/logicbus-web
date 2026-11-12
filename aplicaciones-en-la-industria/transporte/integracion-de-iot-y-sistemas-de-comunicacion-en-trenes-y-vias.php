<?php
require("../../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integración de IoT y Sistemas de Comunicación en Trenes y Vías | Logicbus</title>
    <meta name="description" content="Este sistema IoT permite la comunicación entre trenes y la infraestructura ferroviaria mediante una red de sensores y dispositivos de control conectados.">
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
                <li class="breadcrumb-item active" aria-current="page">Integración de IoT y Sistemas de Comunicación en Trenes y Vías</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/ferroviaria.png" alt="Banner" alt="Integración de IoT y Sistemas de Comunicación en Trenes y Vías" class="hide-mobile">
        <img src="../img/ferroviaria-mobile.webp" alt="Banner-mobile" alt="Integración de IoT y Sistemas de Comunicación en Trenes y Vías" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="title white font-weight-bold mb-0">Integración de IoT y Sistemas de Comunicación en Trenes y Vías</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="../img/Integración-de-IoT-y-Sistemas-de-Comunicación-en-Trenes-y-Vías.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../../seneca"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/seneca.webp" alt="Seneca" width="200px"></a>
                    <a href="../../teracom"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/teracom.webp" alt="Teracom" width="200px"></a>
                    <a href="../../fatek"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/fatek.webp" alt="Fatek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">Este sistema IoT permite la comunicación entre trenes y la infraestructura ferroviaria mediante una red de sensores y dispositivos de control conectados. La integración de dispositivos IoT proporciona datos de operación y mantenimiento en tiempo real, mejorando la eficiencia y seguridad en las operaciones ferroviarias.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Monitoreo de Condiciones Ambientales y de Operación:</b> Los módulos <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/TSH330_p_34314.html" target="_blank" rel="noopener noreferrer">TSH330</a> de <b>Teracom</b> son sensores ambientales que monitorean temperatura y humedad tanto en trenes como en instalaciones ferroviarias. Estos sensores recopilan datos y los envían a un controlador central para su análisis.</li>
                    <li class="mb-3"><b>Controlador de Red para Transmisión de Datos IoT</b>: Para la comunicación de los datos, se utiliza el <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank" rel="noopener noreferrer">Controlador IoT Z-LTE-WW</a> de Seneca. Este dispositivo permite la transmisión de datos desde sensores y dispositivos en el tren a través de redes celulares o Ethernet, garantizando una conexión continua. El <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank" rel="noopener noreferrer">Z-LTE-WW</a> también soporta la conexión de otros módulos IoT y facilita la transmisión de datos entre trenes y centros de monitoreo.</li>
                    <li class="mb-3"><b>Sistema de Control y Monitoreo en Trenes</b>: Dentro de los trenes, el <b>PLC <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac" target="_blank" rel="noopener noreferrer">FBs-60MCR2-AC</a> de Fatek</b> controla y monitorea varios subsistemas, incluyendo sistemas de iluminación, control de puertas y sistemas de HVAC (calefacción, ventilación y aire acondicionado). Este PLC recopila y envía datos sobre el funcionamiento de los sistemas del tren a la interfaz HMI <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html" target="_blank" rel="noopener noreferrer">P5070NB</a>, optimizando así la gestión de recursos y seguridad.</li>
                    <li class="mb-3"><b>Monitoreo de Estado de las Vías</b>: Se utilizan módulos de entrada/salida remotos como el <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/R-PASS-W-2-0_p_34475.html" target="_blank" rel="noopener noreferrer">R-PASS-W-2-0</a> de <b>Seneca</b> para recolectar datos de sensores instalados a lo largo de las vías, que detectan condiciones críticas como el desgaste o la vibración excesiva de los rieles. Esta información se envía al sistema central, permitiendo una respuesta rápida ante cualquier anomalía en la infraestructura.</li>
                    <li class="mb-3"><b>Alerta y Notificaciones en Tiempo Real</b>: El sistema utiliza la <b>Unidad de Alarma</b> <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/TCW242_p_35436.html" target="_blank" rel="noopener noreferrer">TCW242</a> de <b>Teracom</b>, un dispositivo GSM/GPRS que emite alertas automáticas vía SMS o notificaciones remotas en caso de que las condiciones de temperatura, vibración o posición del tren superen los límites establecidos. Esto permite al personal de operación reaccionar de manera proactiva a situaciones que podrían afectar la operación del tren.</li>
                    <li class="mb-3"><b>Gestión y Supervisión Centralizada de Datos</b>: Toda la información recolectada de los sensores de las vías y del tren se almacena y gestiona en la plataforma IoT de <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-plataforma-iot-fatek" target="_blank" rel="noopener noreferrer">FATEK (IMonitor, IAccess, ILocation)</a>. Los datos transmitidos a través de la red IoT permiten la supervisión en tiempo real del estado de los trenes y las vías, además de facilitar el análisis de tendencias para el mantenimiento predictivo.</li>
                </ol>
                <p class="text-center light-black font-weight-bold">Proceso Paso a Paso</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Recopilación de Datos de Sensores</b>: Los sensores <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/TSH330_p_34314.html" target="_blank" rel="noopener noreferrer">TSH330</a> de <b>Teracom</b> monitorean condiciones ambientales, mientras que los módulos <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank" rel="noopener noreferrer">Z-LTE-WW</a> de <b>Seneca</b> registran datos críticos de las vías.</li>
                    <li class="mb-3"><b>Control y Monitoreo a Bordo</b>: El <b>PLC <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac" target="_blank" rel="noopener noreferrer">FBs-60MCR2-AC</a> de Fatek</b> gestiona sistemas a bordo y envía datos a la interfaz HMI <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html" target="_blank" rel="noopener noreferrer">P5070NB</a>.</li>
                    <li class="mb-3"><b>Transmisión de Datos</b>: El Controlador <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank" rel="noopener noreferrer">Z-LTE-WW</a> de <b>Seneca</b> consolida la información de sensores y PLCs y la transmite a un centro de control a través de redes celulares o Ethernet.</li>
                    <li class="mb-3"><b>Alertas en Tiempo Real</b>: La unidad <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/TCW242_p_35436.html" target="_blank" rel="noopener noreferrer">TCW242</a> de <b>Teracom</b> emite alertas en tiempo real ante eventos críticos, asegurando que el personal esté informado inmediatamente de condiciones peligrosas.</li>
                    <li class="mb-3"><b>Supervisión Centralizada y Mantenimiento Predictivo</b>: Los datos se analizan en la plataforma IoT de <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-plataforma-iot-fatek" target="_blank" rel="noopener noreferrer">FATEK (IMonitor, IAccess, ILocation)</a> y en tiempo real para monitorear tendencias de desgaste o fallas, permitiendo a los operadores tomar decisiones de mantenimiento predictivo y evitar interrupciones.</li>
                </ol>
            </div>
            <div class="container text-center">
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema:</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Conectividad Confiable y Continua</b> La infraestructura IoT permite la comunicación entre dispositivos en movimiento (trenes) y sistemas estáticos (vías), manteniendo un flujo constante de datos.</li>
                    <li class="mb-3"><b>Mantenimiento Predictivo</b> Los datos de sensores y sistemas de monitoreo en tiempo real permiten anticipar el desgaste o las fallas, reduciendo tiempos de inactividad y costes de reparación.</li>
                    <li class="mb-3"><b>Monitoreo Remoto y Respuesta Rápida</b> Las alertas automáticas permiten una respuesta inmediata a condiciones que puedan representar riesgos.</li>
                    <li class="mb-3"><b>Gestión Centralizada de Información</b> Toda la información del tren y las vías se consolida en una sola plataforma, mejorando la visibilidad del estado de la infraestructura ferroviaria.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/297/tsh330.jpg" alt="TSH330" width="150px">
                <p class="font-weight-bold mt-2 mb-0">TSH330</p>
                <p>Sensor de temperatura y humedad IP54</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TSH330_p_34314.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/z-lte-ww.jpg" alt="Z-LTE-WW" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Z-LTE-WW</p>
                <p>Controlador IoT</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-60mcr2-ac.jpg" alt="FBs-60MCR2-AC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBs-60MCR2-AC</p>
                <p>PLC Industrial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/P5070SB.jpg" alt="P5070NB" width="150px">
                <p class="font-weight-bold mt-2 mb-0">P5070NB</p>
                <p>Pantalla HMI</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/44/r-pass-w-2-0.png" alt="R-PASS-W-2-0" width="150px">
                <p class="font-weight-bold mt-2 mb-0">R-PASS-W-2-0</p>
                <p>Módulos de entrada/salida remoto</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/R-PASS-W-2-0_p_34475.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/297/tcw242-2.jpg" alt="TCW242" width="150px">
                <p class="font-weight-bold mt-2 mb-0">TCW242</p>
                <p>Módulo Industrial IoT</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TCW242_p_35436.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/IOT.jpg" alt="Serie TRD" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IOT-IMON</p>
                <p>Plataforma IoT Fatek</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-plataforma-iot-fatek" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/IXmmXJJ44E4?si=PdI_tqxr2gnUDiWy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/DL-4dX-TL_4?si=IJkCLcvmOPdrokL3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/zL-v95miDDQ?si=htbxRHWvFsjM8VF-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/iot-y-comunicacion-en-los-nuevos-trenes-de-mexico-la-conectividad-del-futuro/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/IoT-y-Comunicacion-en-los-Nuevos-Trenes-de-Mexico-La-Conectividad-del-Futuro.png" alt="Blog 5" width="100%">
                    IoT y Comunicación en los Nuevos Trenes de México: La Conectividad del Futuro
                </a>
            </div>
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
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="Integración de IoT y Sistemas de Comunicación en Trenes y Vías" width="100%">
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