<?php

require("../admin/config.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Medición de Nivel en Silos de Cemento y Clinker | Logicbus</title>

    <meta name="description"

        content="Sistema automatizado para monitoreo preciso del nivel en silos de cemento y clinker, con sensores industriales, PLCs y visualización en tiempo real, evitando sobrellenados, fugas y paros de producción.">

    <meta name="keywords"

        content="control de nivel en silos, sensores industriales de nivel, monitoreo de silos de cemento, PLC Fatek, radar ultrasonido silos, prevención sobrellenado clinker, SCADA monitoreo silos, automatización silos cementeras, sensores Waycon, medición nivel industrial">

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

                <li class="breadcrumb-item active" aria-current="page">

                    Medición de Nivel en Silos de Cemento y Clinker </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Medición de Nivel en Silos de Cemento y Clinker" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Medición de Nivel en Silos de Cemento y Clinker"

            class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Medición de Nivel en Silos de Cemento y Clinker

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/medicion-de-nivel-en-silos-de-cemento-y-clinker.png" alt="Diagrama" width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"

                            alt="fatek" width="200px"></a>

                    <a href="../3onedata"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>

                    <a href="../taicenn"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/taicenn.webp"

                            alt="taicenn" width="200px"></a>

                    <a href="../waycon"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/waycon.webp"

                            alt="waycon" width="200px"></a>



                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">En plantas de producción de cemento, el control preciso del nivel en

                    silos de almacenamiento de cemento y clinker es esencial para evitar sobrellenados que pueden dañar

                    el equipo o causar fugas, así como prevenir detenciones de la producción por falta de material. Esta

                    solución emplea sensores industriales de nivel, PLCs y sistemas de visualización que permiten

                    conocer en tiempo real la capacidad disponible en cada silo, automatizando alarmas, registros y

                    acciones correctivas.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Instalación de Sensores de Nivel sin Contacto</b> <br>

                        Se instalan sensores de nivel tipo radar o ultrasonido en la parte superior de cada silo.

                        Equipos como los sensores ultrasónicos <a

                            href="https://tienda.logicbus.com.mx/UPA-6000-420A-SR_p_36428.html">UPA-6000-420A-SR</a> o

                        los sensores láser

                        <a href="https://tienda.logicbus.com.mx/LAR-70-5V_p_25772.html">LAR-70-5V</a> de <a

                            href="https://www.logicbus.com.mx/waycon">Waycon</a>

                        se utilizan para detectar la distancia entre el sensor y la superficie del material almacenado.

                        Estos dispositivos están diseñados para trabajar en ambientes con mucho polvo, altas

                        temperaturas y condiciones industriales exigentes.

                    </li>

                    <li><b>Transmisión y Conversión de Señal</b> <br>

                        Los sensores envían señales analógicas (por ejemplo, 4–20 mA o 0–10 V) que corresponden al nivel

                        detectado. Estas señales son recibidas por un módulo de entradas análogas como el <a

                            href="https://tienda.logicbus.com.mx/promociones-best-seller-fbs-6ad">FBs-6AD</a> de

                        <a href="https://tienda.logicbus.com.mx/fatek">Fatek</a>, que acondicionan la señal para ser

                        leída por un sistema de control (PLC o

                        sistema SCADA).

                    </li>

                    <li class="mb-3"><b>Procesamiento de Datos en el PLC</b> <br>

                        El PLC industrial <a

                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac">FBs-20MCR2-AC</a>

                        de <a href="https://tienda.logicbus.com.mx/fatek">Fatek</a> recibe los valores convertidos y los

                        transforma en

                        unidades de volumen o porcentaje de llenado, con base en las dimensiones del silo. El sistema

                        puede generar alarmas si el nivel cae por debajo de un umbral crítico (nivel mínimo) o si se

                        acerca al 100% de capacidad, evitando sobrellenado.

                    </li>

                    <li class="mb-3"><b>Visualización en Tiempo Real y Alertas</b> <br>

                        Mediante un puerto Ethernet <a

                            href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html">FBs-CBEH(8)</a> del PLC y a

                        través de un switch ethernet

                        como el

                        <a href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a> de

                        <a href="https://tienda.logicbus.com.mx/3onedata">3onedata Technology</a> se visualizan en

                        tiempo real los datos

                        obtenidos por el

                        sistema, en una pantalla HMI como la <a

                            href="https://tienda.logicbus.com.mx/P5070SB_p_31659.html">P5070SB</a> de <a

                            href="https://tienda.logicbus.com.mx/fatek">Fatek</a> o mediante

                        un panel PC

                        industrial como el

                        <a href="https://www.logicbus.com.mx/pdf/290/TPC-DCS215T_V3.2.pdf">TPC-DCS215T</a> de la marca

                        <a href="https://tienda.logicbus.com.mx/taicenn">TAICENN</a>, los operadores visualizan el nivel

                        actual, la

                        capacidad

                        restante, la tendencia de consumo y los eventos históricos. Las alertas visuales y sonoras se

                        activan automáticamente si se detectan niveles fuera de los rangos configurados.

                    </li>

                    <li class="mb-3"><b>Automatización de Procesos Relacionados</b>

                        <br>

                        El sistema puede integrarse con válvulas de alimentación, bandas transportadoras o extractores

                        automáticos. Por ejemplo, si un silo alcanza su nivel mínimo, el PLC puede detener la línea de

                        alimentación hasta que se complete el llenado, o activar un proceso de reposición automatizado

                        desde un silo secundario o sistema de transporte neumático.

                    </li>

                    <li><b>Registro de Datos y Comunicación Industrial<br></b>Los datos de nivel se almacenan y

                        sincronizan con una plataforma SCADA mediante comunicación <b>Modbus RTU/TCP, Ethernet/IP o

                            MQTT</b>,

                        permitiendo análisis históricos, generación de reportes y control remoto desde un centro de

                        supervisión.</li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Prevención de sobrellenados y fugas: </b> Evita derrames que pueden dañar

                        equipos o representar riesgos de seguridad industrial.

                    </li>

                    <li class="mb-3"><b>Evita paros por falta de material: </b>El sistema alerta antes de que el

                        material se agote, permitiendo una reposición oportuna sin interrumpir la producción.

                    </li>

                    <li class="mb-3"><b>Mayor seguridad operativa: </b> El monitoreo sin contacto elimina la necesidad

                        de que el personal acceda físicamente a zonas peligrosas como techos de silos.

                    </li>

                    <li class="mb-3"><b>Optimización del inventario: </b>Permite una planificación más eficiente de

                        compras y producción gracias al monitoreo continuo de niveles.

                    </li>

                    <li class="mb-3"><b>Trazabilidad y análisis histórico: </b>Los datos registrados permiten

                        identificar tendencias de consumo y evaluar el rendimiento de la logística interna.

                    </li>

                    <li class="mb-3"><b>Integración con sistemas existentes: </b>El sistema se adapta fácilmente a

                        líneas de producción nuevas o ya operativas, y puede escalarse según el número de silos.

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

                <img src="https://tienda.logicbus.com.mx/assets/images/282/upa-600-420a-sr.jpg" alt="UPA-6000-420A-SR"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">UPA-6000-420A-SR</p>

                <p>Sensor ultrasónico rango de operación 600-6000mm, salida analógica 4-20mA, alimentación: 15 - 30 VDC,

                    error de linealidad: < 0.5, temperatura de trabajo: -20...+70°C, salida a conector M12-5 pines,

                        IP65. </p>

                        <a class="button button-circle-orange"

                            href="https://tienda.logicbus.com.mx/UPA-6000-420A-SR_p_36428.html"

                            target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/lar-70-5v-1.png" alt="LAR-70-5V" width="150px">

                <p class="font-weight-bold mt-2 mb-0">LAR-70-5V</p>

                <p>Sensor de desplazamiento láser con un rango de medición de 65 a 135 mm, temperatura de trabajo de

                    -10ºC a 45ºC. Salida análoga de 0 a 5 V y 4..20 mA. Salida de control PNP. IP67.



                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LAR-70-5V_p_25772.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-6ad.png" alt="FBs-6AD" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBs-6AD</p>

                <p>Módulo de PLC de entradas analógicas

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/promociones-best-seller-fbs-6ad" target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/FBs-20MCR2-AC.jpg" alt="FBS-20MCR2-AC"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-20MCR2-AC</p>

                <p>PLC Industrial con 12 entradas digitales de 24Vdc con velocidad alta (200KHz) y medio alta (20KHz y

                    5KHz), 8 salidas de relevador/ puerto de comunicación RS-232. Alimentacion de 100~240VAC y reloj de

                    tiempo real integrado.

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-cbeh(16).jpg" alt="FBs-CBEH(8)"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBs-CBEH(8)</p>

                <p>Tarjeta Comunicación para la Serie FBs, 1xPuerto Ethernet 10/100 BaseT(Port1 y Port2) RJ45, Modo

                    Servidor/cliente, Protocolo aplicación: FATEK y Modbus/TCP, Web-Server, Soporte TCP/IP 8

                    conexiones(modo servidor)

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/16/IES2300SL-5GT-2LV.jpg" alt="IES2300SL-5GT-2LV"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">IES2300SL-5GT-2LV</p>

                <p>La serie IES2300SL son conmutadores Ethernet industriales no gestionados Gigabit de 5/8/16 puertos.

                    Esta serie serie ofrece 4 productos y admite puertos Gigabit de cobre. Adoptan el montaje en carril

                    DIN para satisfacer los requisitos de diferentes escenarios de aplicación.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-1LC_p_3143.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/P5070SB.jpg" alt="P5070SB" width="150px">

                <p class="font-weight-bold mt-2 mb-0">P5070SB</p>

                <p>Pantalla HMI Avanzada de Fatek Serie P5B 7"TFT LCD Flash 256Mb RAM 128Mb CPU 32bit con RTC, Serial

                    1(RS-232) 2(RS-422/485,RS-485) USB 2.0 Mini USB PLC port, Alimentacion 24Vdc(12.48W), carcasa

                    plastica, soporta Fatek IoT

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/P5070SB_p_31659.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/290/tpc-dcs215t.jpg" alt="TPC-DCS215T"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">TPC-DCS215T</p>

                <a class="button button-circle-orange" href="https://www.logicbus.com.mx/pdf/290/TPC-DCS215T_V3.2.pdf"

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

                    <iframe src="https://www.youtube.com/embed/9i3pFE4_rsY?si=h7gOHcagaOQCxbqv"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/cvhAs3xziSE?si=LZfR_50Kl2b-z8Cl"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/j2_IDnYDpkQ?si=JHGasN3zceJ-RooE"

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

                    href="https://www.logicbus.com.mx/blog/panel-pcs-con-procesadores-de-12va-generacion-de-taicenn/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/taicenn-4.png"

                        alt="Panel PCs con procesadores de 12va Generación de TAICENN" width="100%">

                    Panel PCs con procesadores de 12va Generación de TAICENN

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/nuevos-osciloscopios-sds7000a-ap-de-siglent-rendimiento-de-hasta-8-ghz-para-aplicaciones-avanzadas-de-prueba-y-analisis/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Nuevos-osciloscopios-SDS7000AAP-de-SIGLENT-scaled.jpg"

                        alt="Nuevos osciloscopios SDS7000A/AP de SIGLENT: rendimiento de hasta 8 GHz para aplicaciones avanzadas de prueba y análisis"

                        width="100%">

                    Nuevos osciloscopios SDS7000A/AP de SIGLENT: rendimiento de hasta 8 GHz para aplicaciones avanzadas

                    de prueba y análisis

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/por-que-siglent-es-el-aliado-ideal-para-laboratorios-de-ingenieria-y-desarrollo-electronico/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Por-que-SIGLENT-es-el-aliado-ideal-para-laboratorios-de-ingenieria-y-desarrollo-electronico-2048x1024.jpg"

                        alt="¿Por qué SIGLENT es el aliado ideal para laboratorios de ingeniería y desarrollo electrónico?"

                        width="100%">

                    ¿Por qué SIGLENT es el aliado ideal para laboratorios de ingeniería y desarrollo electrónico?

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/davo-lin-teclados-industriales-de-alta-resistencia-distribuidos-por-logicbus/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/DAVO-LIN-Teclados-Industriales-de-Alta-Resistencia-Distribuidos-por-Logicbus-scaled.jpg"

                        alt="DAVO LIN: Teclados Industriales de Alta Resistencia Distribuidos por Logicbus"

                        width="100%">

                    DAVO LIN: Teclados Industriales de Alta Resistencia Distribuidos por Logicbus</a>

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

                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg"

                        alt="Medición de Nivel en Silos de Cemento y Clinker" width="100%">

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

    <?php require("../libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>

    <?php echo $popper_js; ?>

    <?php echo $bootstrap_js; ?>

    <?php echo $own_file_js; ?>

    <?php echo $flickity_js; ?>



</body>

<?php echo $var_footer; ?>



</html>