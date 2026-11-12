<?php

require("../admin/config.php");

?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Control de Llenado de Botellas o Contenedores de Líquidos | Logicbus</title>

    <meta name="description"

        content="Solución de detección de fallas y picos eléctricos en sistemas automatizados con sensores industriales, analizadores y PLCs FATEK. Permite monitoreo en tiempo real, alarmas automáticas y análisis histórico para prevenir daños y asegurar continuidad operativa. Distribuido por Logicbus.">

    <meta name="keywords"

        content="detección de fallas eléctricas, picos eléctricos, monitoreo eléctrico, picos de voltaje, transitorios eléctricos, FATEK PLC, S711E, donas Rogowski, análisis de energía, SCADA, mantenimiento predictivo, automatización industrial, IEC 61000, ISO 50001, Logicbus, monitoreo en tiempo real, protección de equipos, sistemas eléctricos industriales">

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

                    Control de Llenado de Botellas o Contenedores de Líquidos </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Control de Llenado de Botellas o Contenedores de Líquidos" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Control de Llenado de Botellas o Contenedores de Líquidos" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Control de Llenado de Botellas o Contenedores de

                Líquidos

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/control-de-llenado-de-botellas-o-contenedores-de-liquidos.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../tri-tronics"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>

                    <a href="../fatek"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/fatek.webp" alt="fatek" width="200px"></a>

                    <a href="../futek"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/futek.webp" alt="futek" width="200px"></a>

                    <a href="../rechner-sensors"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/rechner-sensors.webp" alt="rechner-sensors"

                            width="200px"></a>

                    <a href="../3onedata"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>

                </div>

            </div>

            <div class="col-12 col-md-7">

                <p class="light-black text-justify"> Esta aplicación automatiza y supervisa el llenado de líquidos en

                    botellas o contenedores con alta precisión y consistencia. Es esencial en industrias como alimentos

                    y bebidas, farmacéutica, cosmética y química, donde el llenado exacto por volumen o peso es crítico

                    para control de calidad, eficiencia y cumplimiento normativo. El sistema integra sensores, válvulas,

                    bombas dosificadoras y PLCs, asegurando operaciones precisas, higiénicas y repetibles, soportando

                    cambios de receta y trazabilidad por lote.

                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Detección y Posicionamiento de Botellas</b> <br>

                        Fotoeléctricos o láseres como el <a

                            href="https://tienda.logicbus.com.mx/SLVC_p_16040.html">SLVC</a> de <a

                            href="https://tienda.logicbus.com.mx/tri-tronics">TRI-TRONICS CO. INC</a> detectan presencia

                        y alineación.

                        Una vez confirmado, el PLC <a

                            href="https://tienda.logicbus.com.mx/ME1C1-1616T_p_37943.html">ME1C1-1616T</a> de <a

                            href="https://tienda.logicbus.com.mx/fatek">FATEK</a>

                        inicia la secuencia de llenado.

                    </li>

                    <li><b>Llenado Preciso de Líquidos</b> <br>

                        <ul>

                            <li><b>Gravimétrico:</b> Celdas de carga tipo S <a

                                    href="https://tienda.logicbus.com.mx/FSH04521_p_35079.html">FSH04521</a> de <a

                                    href="https://tienda.logicbus.com.mx/futek">FUTEK</a>.

                                La botella

                                se coloca en

                                una

                                balanza de precisión, y el líquido se dispensa hasta alcanzar el peso objetivo, se

                                conecta al PLC mediante el módulo <a

                                    href="https://tienda.logicbus.com.mx/M02LCR_p_37909.html">M02LCR</a> de <a

                                    href="https://tienda.logicbus.com.mx/fatek">FATEK</a>.</li>

                            <li><b>Volumétrico:</b> Sensores capacitivos como el <a

                                    href="https://tienda.logicbus.com.mx/KAS-80-35-A-M32-PTFE-120C-Z02-1-HP_p_33573.html">KAS-80-35-A-M32-PTFE-120C-Z02-1-HP</a>

                                de

                                <a href="https://tienda.logicbus.com.mx/rechner-sensors">Rechner

                                    sensors</a> miden el volumen exacto. El PLC regula apertura y caudal vía válvulas,

                                ajustando

                                dinámicamente según viscosidad, temperatura o tipo de producto.

                            </li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Verificación de Tolerancia y Manejo de Rechazos</b> <br>

                        El sistema comprueba que cada envase esté dentro de la tolerancia (±0.5%). Los envases fuera de

                        especificación se desvían automáticamente para re-inspección o descarte.

                    </li>

                    <li class="mb-3"><b>Gestión de Recetas y Control de Lotes</b> <br>

                        Desde una HMI como la <a href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html">P5070NB</a>

                        de <a href="https://tienda.logicbus.com.mx/fatek">FATEK</a>, los

                        operadores seleccionan parámetros específicos de

                        llenado (volumen, tiempo de válvula, ciclos de purga). Las recetas se almacenan y trazan por ID

                        de lote o login de operador.

                    </li>

                    <li class="mb-3"><b>Registro de Datos y Cumplimiento</b> <br>

                        Todos los datos de llenado (peso, volumen, hora, ID de producto) se registran y pueden

                        exportarse para trazabilidad, control de calidad y cumplimiento normativo (GMP, FDA 21 CFR Parte

                        11). Los datos recopilados por el PLC y la HMI se pueden enviar hacia la red industrial usando

                        un switch Ethernet como el <a

                            href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a>

                        de <a href="https://tienda.logicbus.com.mx/3onedata">3onedata Technology</a> y un router como el

                        <a

                            href="https://tienda.logicbus.com.mx/IAP3600S-2225-2GT-PDP1248_p_37396.html">IAP3600S-2225-2GT-PDP12_48</a>

                        de <a href="https://tienda.logicbus.com.mx/3onedata">3onedata Technology</a>.

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Alta precisión y repetibilidad.</b>

                    </li>

                    <li class="mb-3"><b>Adaptable a múltiples productos y tamaños de envase.</b>

                    </li>

                    <li class="mb-3"><b>Cumplimiento normativo y trazabilidad completa.</b>

                    </li>

                    <li class="mb-3"><b>Reducción de desperdicio y tiempos muertos.</b>

                    </li>

                    <li class="mb-3"><b>Escalable e integrable con automatización upstream/downstream (tapado,

                            etiquetado, empaquetado).</b>

                    </li>

                    <li class="mb-3"><b>Monitoreo y control remoto con integración hacia sistemas como un SCADA o

                            equivalente.

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/226/SLVC.jpg" alt="SLVC"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">SLVC</p>

                <p>

                    Sensor Laser SMARTEYE SmartDoT con temporizador avanzado.. Rango corto de proximidad, 6" distancia

                    focal, .05" x .03" @ 6" tamaño de haz de luz. 10 a 30 VDC, polaridad protegida. Conector 6" M12 de 5

                    pin.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/SLVC_p_16040.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/29/ME1C1-1616T.jpg"

                    alt="ME1C1-1616T" width="150px">

                <p class="font-weight-bold mt-2 mb-0">ME1C1-1616T</p>

                <p>Unidad principal Fatek serie M, Motion avanzado, 16 entradas digitales y 16 salidas a transistor SINK

                    (NPN) 200KHz, E/S máximas: 1024/128, 11 ejes de control, 1 puerto Ethernet + 2 puertos RS-485

                    Maestro/Esclavo, 1 puerto USB Type C (2.0), 24 VCD.



                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/ME1C1-1616T_p_37943.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/36/fsh04521.jpg" alt="FSH04521"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FSH04521</p>

                <p>LSM305 , 10 lb , Celda de carga de paralelogramo con TEDS y PT1000 RTD , Cumple con RoHS , Material -

                    2024-T4 , #10-32-Thread , Protección contra sobrecarga , 8 posiciones 0.039" (1.00mm) Conector JST



                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04521_p_35079.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/29/M02LCR.jpg" alt="M02LCR"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">M02LCR</p>

                <p>Módulo de Expansión de Entradas para celdas de carga Lado Derecho para PLCs de Fatek serie M, módulo

                    de entrada de celda de carga de 2 canales, convertidor A/D utilizado: 24 bits, precisión: ±0,01%?25°

                    C±5° C.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/M02LCR_p_37909.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy"

                    src="https://tienda.logicbus.com.mx/assets/images/308/kas-80-35-a-m32-ptfe-120c-z02-1-hp.jpg"

                    alt="KAS-80-35-A-M32-PTFE-120C-Z02-1-HP" width="150px">

                <p class="font-weight-bold mt-2 mb-0">KAS-80-35-A-M32-PTFE-120C-Z02-1-HP</p>

                <p>Sensores capacitivos (KAS) Rosca / Conexión al proceso M32 x 1.5

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/KAS-80-35-A-M32-PTFE-120C-Z02-1-HP_p_33573.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/P5070SB.jpg" alt="P5070NB"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">P5070NB</p>

                <p>Pantalla HMI Avanzada de Fatek Serie P5B 7" TFT LCD Flash 256Mb RAM 128Mb CPU 32bit con RTC, Serial

                    1(RS-232) 2(RS-422/485,RS-485) Ethernet(10M/100M) USB2.0 Mini USB PLC port, Audio, Alimentacion

                    24Vdc(12.48W), carcasa plastica, soporta Fatek IoT

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html"

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/16/iap3600s-2225-2gt-pdp12_48.jpg"

                    alt="IAP3600S-2225-2GT-PDP12_48" width="150px">

                <p class="font-weight-bold mt-2 mb-0">IAP3600S-2225-2GT-PDP12_48</p>

                <p>Model IAP3600S-2225-2GT-PDP12_48 Wi-Fi 6, 2*10/100/1000 Base-T(X) RJ45 (1*48VDC PoE input), 2*2.4G

                    N-K antenna interface, 2*5.8G N-K antenna interface, power supply:12~48VDC, EMC 4 grade, IP68,

                    pole/wall mounting

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/IAP3600S-2225-2GT-PDP1248_p_37396.html"

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

                    href="https://www.logicbus.com.mx/blog/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Monitoreo-Remoto-de-Procesos-de-Fermentacion-Pasteurizacion-o-Coccion-scaled.jpg"

                        alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" width="100%">

                    Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/comparacion-entre-sensores-de-fuga-de-agua-puntuales-y-de-cuerda-cual-es-el-ideal-para-tu-aplicacion/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Comparacion-entre-Sensores-de-Fuga-de-Agua-Puntuales-y-de-Cuerda-%C2%BFCual-es-el-Ideal-para-tu-Aplicacion-1-scaled.jpg"

                        alt="Comparación entre Sensores de Fuga de Agua Puntuales y de Cuerda: ¿Cuál es el Ideal para tu Aplicación?"

                        width="100%">

                    Comparación entre Sensores de Fuga de Agua Puntuales y de Cuerda: ¿Cuál es el Ideal para tu

                    Aplicación?

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/deteccion-de-fallas-y-picos-electricos-en-sistemas-automatizados-prevencion-inteligente-para-la-continuidad-operativa/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Deteccion-de-Fallas-y-Picos-Electricos-en-Sistemas-Automatizados-scaled.jpg"

                        alt="Detección de Fallas y Picos Eléctricos en Sistemas Automatizados: Prevención Inteligente para la Continuidad Operativa"

                        width="100%">

                    Detección de Fallas y Picos Eléctricos en Sistemas Automatizados: Prevención Inteligente para la

                    Continuidad Operativa

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

                        alt=" Control de Llenado de Botellas o Contenedores de Líquidos" width="100%">

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