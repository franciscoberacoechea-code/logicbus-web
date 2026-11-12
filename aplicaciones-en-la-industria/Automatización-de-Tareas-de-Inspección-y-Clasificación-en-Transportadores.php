<?php

require("../admin/config.php");

?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>  Automatización de Tareas de Inspección y Clasificación en Transportadores | Logicbus</title>

    <meta name="description"
        content="Optimización energética en la industria automotriz: monitoreo en tiempo real de consumos, reducción de costos, sostenibilidad e integración con sistemas MES/ERP para una producción más eficiente.">

    <meta name="keywords"
        content="eficiencia energética automotriz, gestión de energía, ahorro de energía en plantas, SENECA S711EROGETH45, LoggerFlex BLXULT, LoggerFlex CLOUD, CONTROLLINO PLC, Modbus TCP/IP, MQTT, ISO 50001, optimización energética, industria automotriz">

    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />



    <!--- Estilos Necesarios-->

    <?php echo $css_bundle; ?>



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

                <li class="breadcrumb-item active" aria-current="page">

                     Automatización de Tareas de Inspección y Clasificación en Transportadores </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt=" Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"
            alt=" Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0">  Automatización de Tareas de Inspección y Clasificación en Transportadores
            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/Automatización_de_Tareas_de_Inspección_y_Clasificación_en_Transportadores.webp"
                    alt="Diagrama" width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../industrial-shields"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/industrial-shields.webp" alt="industrial-shields"
                            width="200px"></a>

                    <a href="../tri-tronics"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>
                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify"> Esta aplicación automatiza el proceso de inspección y clasificación de 
                    productos en una banda transportadora. El sistema identifica los productos basándose en características 
                    visuales (color, presencia de etiqueta de sellado, altura) y los clasifica en diferentes contenedores o 
                    líneas, todo controlado por un sistema de lógica robusto y fácil de programar.
                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Detección de Producto:</b> <br>

                        Un sensor fotoeléctrico retroreflectivo <a href="https://tienda.logicbus.com.mx/MDHRCR5_p_10872.html">MDHRCR5</a> 
                        de <a href="https://www.logicbus.com.mx/tri-tronics?campaignid=755818946&adgroupid=40407670780&keyword=tri%20tronics&device=c&gad_source=1&gad_campaignid=755818946&gclid=CjwKCAiAlfvIBhA6EiwAcErpyXzuvVyWlg3S-ecUZmIB6VlZ4edY-YFT4w0wps9WvdDNhfzoIgC8LhoCMfEQAvD_BwE">TRI-TRONICS</a> detecta la llegada de un producto a la zona de inspección.

                    </li>

                    <li><b>Inspección y Clasificación</b> <br>
                        <ul>
                            <li>
                                <b>Por Color:</b> Un sensor de color <a href="https://www.logicbus.com.mx/sensor-fotoelectrico-de-marca-de-registro-CMS-2BV1G">CMS-2BV1G</a> 
                                de <a href="https://www.logicbus.com.mx/tri-tronics?campaignid=755818946&adgroupid=40407670780&keyword=tri%20tronics&device=c&gad_source=1&gad_campaignid=755818946&gclid=CjwKCAiAlfvIBhA6EiwAcErpyXzuvVyWlg3S-ecUZmIB6VlZ4edY-YFT4w0wps9WvdDNhfzoIgC8LhoCMfEQAvD_BwE">
                                identifica si el producto es (ej. Rojo, Verde o Azul).
                            </li>

                            <li>
                                <b>Por Etiqueta:</b> Un sensor de luminiscencia UV <a href="https://tienda.logicbus.com.mx/UVS-1_p_11664.html"> UVS-1</a> de <a href="https://www.logicbus.com.mx/tri-tronics?campaignid=755818946&adgroupid=40407670780&keyword=tri%20tronics&device=c&gad_source=1&gad_campaignid=755818946&gclid=CjwKCAiAlfvIBhA6EiwAcErpyXzuvVyWlg3S-ecUZmIB6VlZ4edY-YFT4w0wps9WvdDNhfzoIgC8LhoCMfEQAvD_BwE">TRI-TRONICS</a> 
                                verifica la presencia de una etiqueta de sellado de seguridad.
                            </li>

                            <li>
                                <b>Por Altura: </b> Con sensores de barrera <a href="https://tienda.logicbus.com.mx/MLSRC_p_11005.html">MLSRC</a> (emisor) y <a href="https://tienda.logicbus.com.mx/PMRC_p_11148.html">PMRC</a> (receptor) 
                                de TRI-TRONICS se puede usar para diferenciar entre productos altos y bajos. 
                            </li>
                        </ul>
                    </li>


                    <li class="mb-3"><b>Lógica de Control Abierta: </b> <br>

                        Si la temperatura o humedad se desvían de los umbrales predefinidos (p. ej., 2–8 °C para
                        refrigeración, -18 °C para congelación), el sistema activa alarmas y notifica automáticamente al
                        personal designado vía correo, SMS o notificaciones push.


                    </li>

                    <li class="mb-3"><b>Interfaz de Usuario y Acceso Remoto</b> <br>

                        Un PLC basado en Arduino <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-controllino-100-200-10">100-200-10</a> de <a href="https://www.logicbus.com.mx/industrial-shields">Industrial Shields</a> 
                        recibe las señales de los sensores <a href="https://www.logicbus.com.mx/tri-tronics?campaignid=755818946&adgroupid=40407670780&keyword=tri%20tronics&device=c&gad_source=1&gad_campaignid=755818946&gclid=CjwKCAiAlfvIBhA6EiwAcErpyXzuvVyWlg3S-ecUZmIB6VlZ4edY-YFT4w0wps9WvdDNhfzoIgC8LhoCMfEQAvD_BwE">TRI-TRONICS.</a> 
                        Al estar basado en una plataforma abierta (Arduino), permite a los ingenieros programar lógicas de clasificación complejas de forma rápida y flexible.

                    </li>

                    <li class="mb-3"><b>Accionamiento:</b> <br>
                        El PLC de <a href="https://www.logicbus.com.mx/industrial-shields">Industrial Shields</a> activa los actuadores (pistones neumáticos, desviadores) a través de sus salidas de relé de grado industrial para enviar el producto al contenedor correcto.


                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Flexibilidad de programación gracias a la plataforma abierta de <a href="https://www.logicbus.com.mx/industrial-shields">Industrial Shields.</a></b>

                    </li>

                    <li class="mb-3"><b>Sensores de alta velocidad y precisión (<a href="https://www.logicbus.com.mx/tri-tronics?campaignid=755818946&adgroupid=40407670780&keyword=tri%20tronics&device=c&gad_source=1&gad_campaignid=755818946&gclid=CjwKCAiAlfvIBhA6EiwAcErpyXzuvVyWlg3S-ecUZmIB6VlZ4edY-YFT4w0wps9WvdDNhfzoIgC8LhoCMfEQAvD_BwE">TRI-TRONICS</a>) para inspecciones complejas (color, UV).</b>

                    </li>

                    <li class="mb-3"><b>Reduce a cero los errores de clasificación manual.</b>

                    </li>

                    <li class="mb-3"><b>Aumenta drásticamente la velocidad de la línea.</b>

                    </li>

                    <li class="mb-3"><b>Solución robusta con E/S de grado industrial (diferente de un Arduino de prototipo).</b>

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

                <img loading="lazy" src="https://www.logicbus.com.mx/assets/images/226/CMS-2BV1G.jpg" alt="CMS-2BV1G"
                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">CMS-2BV1G</p>

                <p>

                    COLORMARK II, sin pulsador, LED verde, bloque óptico V1G. 12-24 VDC polaridad protegida. Convergente. El rango máximo de detección es de 2 pulgadas (50.8 mm)

                </p>

                <a class="button button-circle-orange" href="https://www.logicbus.com.mx/sensor-fotoelectrico-de-marca-de-registro-CMS-2BV1G"
                    target="_blank">Comprar</a>

            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/226/UVS-1.jpg"
                    alt="UVS-1" width="150px">
                <p class="font-weight-bold mt-2 mb-0">UVS-1</p>
                <p>Sensor lumínico SMARTEYE STEALTH-UV, salida digital NPN/PNP 10-30VCD, protección sobrevoltaje, distancia focal de 0.5" y rango de 5 pulgadas, área de medición 0.067".
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/UVS-1_p_11664.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/226/MDHRCR5.jpg" alt="MDHRCR5"
                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">MDHRCR5</p>

                <p>Punto de acceso inalámbrico industrial

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/MDHRCR5_p_10872.html"
                    target="_blank">Comprar</a>

            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/226/MLSRC.jpg"
                    alt="MLSRC" width="150px">

                <p class="font-weight-bold mt-2 mb-0">MLSRC</p>

                <p>MINI-EYE es una línea completa de sensores fotoeléctricos en miniatura muy económicos para tareas generales de
                    detección. Los resistentes sensores MINI-EYE son resistentes al agua y están encerrados en carcasas de 
                    plástico de alto impacto

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/MLSRC_p_11005.html"
                    target="_blank">Comprar</a>

            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy"
                    src="https://tienda.logicbus.com.mx/assets/images/226/PMRC.jpg"
                    alt="PMRC" width="150px">

                <p class="font-weight-bold mt-2 mb-0">PMRC</p>

                <p>General Purpose Photoelectric Sensor Minieye, Receiver, PNP, M8

                </p>

                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/PMRC_p_11148.html"
                    target="_blank">Comprar</a>

            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy"
                    src="https://tienda.logicbus.com.mx/assets/images/100-200-10.jpg"
                    alt="100-200-10" width="150px">

                <p class="font-weight-bold mt-2 mb-0">100-200-10</p>

                <p>PLC Controllino Mega Pure Compatible con Arduino; 16DI/AI, 5DI, 24DO (15 PWM) a 2A, 16 Salidas a relevador; Interfaz Ethernet, RS-485; RTC; Alimentación 12/24Vdc

                </p>

                <a class="button button-circle-orange"
                    href="  https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-controllino-100-200-10l"
                    target="_blank">Comprar</a>

            </div>

          


        </div>

    </section>


<section class="container-fluid py-5">
    <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

        <!-- FILA FLEX DE 3 VIDEOS -->
        <div style="display:flex;justify-content:center;gap:20px;flex-wrap:wrap;align-items:flex-start;margin:2rem 0;">

            <!-- VIDEO 1 -->
            <div style="flex:0 0 320px;max-width:320px;">
                <iframe loading="lazy"
                    src="https://www.youtube.com/embed/KbzLqpWYMDs?si=_xKtB9d54vS6FMWY"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    style="width:100% !important;
                        height:180px !important;
                        min-height:180px !important;
                        max-height:180px !important;
                        display:block !important;">
                </iframe>
            </div>

            <!-- VIDEO 2 -->
            <div style="flex:0 0 320px;max-width:320px;">
                <iframe loading="lazy"
                    src="https://www.youtube.com/embed/MvQt1wrHta4?si=sHkZrhWs-Oobdzpj"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    style="width:100% !important;
                        height:180px !important;
                        min-height:180px !important;
                        max-height:180px !important;
                        display:block !important;">
                </iframe>
            </div>

            <!-- VIDEO 3 -->
            <div style="flex:0 0 320px;max-width:320px;">
                <iframe loading="lazy"
                    src="https://www.youtube.com/embed/207J4XAp1iw?si=0YZzB3bidG4n4dIq"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    style="width:100% !important;
                        height:180px !important;
                        min-height:180px !important;
                        max-height:180px !important;
                        display:block !important;">
                </iframe>
            </div>

        </div>
    </section>

    



    <!--ARTICULOS-->

    <section class="container-fluid py-5">

        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>

        <div class="row justify-content-center my-5">

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/ventanas-protectores-para-sensores-infrarrojos-calex-guia-completa-para-elegir-entre-plastico-y-silicio/"
                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/11/Ventanas-Protectores-para-Sensores-Infrarrojos-Calex-Guia-Completa-para-Elegir-entre-Plastico-y-Silicio-1536x768.jpg"
                        alt="Ventanas Protectores para Sensores Infrarrojos Calex: Guía Completa para Elegir entre Plástico y Silicio" width="100%">

                    Ventanas Protectores para Sensores Infrarrojos Calex: Guía Completa para Elegir entre Plástico y Silicio

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/retos-de-deteccion-en-alta-velocidad-cuando-usar-un-sensor-fotoelectrico-y-cuando-uno-de-fibra-optica/"
                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/11/Retos-de-Deteccion-en-Alta-Velocidad-%C2%BFCuando-usar-un-sensor-fotoelectrico-y-cuando-uno-de-fibra-optica-scaled.jpg"
                        alt="Retos de Detección en Alta Velocidad: ¿Cuándo usar un sensor fotoeléctrico y cuándo uno de fibra óptica?" width="100%">

                    Retos de Detección en Alta Velocidad: ¿Cuándo usar un sensor fotoeléctrico y cuándo uno de fibra óptica?

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/monitoreo-de-temperatura-en-procesos-de-forja-y-termoformado-la-clave-para-una-produccion-precisa-y-segura/"
                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/11/Monitoreo-de-Temperatura-en-Procesos-de-Forja-y-Termoformado-La-Clave-para-una-Produccion-Precisa-y-Segura-scaled.jpg"
                        alt="Monitoreo de Temperatura en Procesos de Forja y Termoformado: La Clave para una Producción Precisa y Segura"
                        width="100%">

                   Monitoreo de Temperatura en Procesos de Forja y Termoformado: La Clave para una Producción Precisa y Segura

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
                        alt=" Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación"
                        width="100%">

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