<?php

require("../admin/config.php");

?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solución de Validación de Rendimiento para Componentes Automotrices | Logicbus</title>

    <meta name="description"

        content="Solución de validación de rendimiento para componentes automotrices que integra sensores de fuerza, torque, vibración y temperatura con sistemas de adquisición y control. Permite evaluar durabilidad, seguridad y cumplimiento normativo en pruebas de frenos, amortiguadores, direcciones y más.">

    <meta name="keywords"

        content="validación de componentes automotrices, pruebas de frenos, pruebas de amortiguadores, validación de dirección, validación de bombas de combustible, sistemas de suspensión, sensores FUTEK, celdas de carga LTH300, sensores de torque TRS600, sensores de temperatura CALEX, PLC FATEK, pruebas automotrices ISO SAE, durabilidad automotriz, seguridad automotriz, adquisición de datos automotriz">

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

                    Solución de Validación de Rendimiento para Componentes Automotrices </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Solución de Validación de Rendimiento para Componentes Automotrices" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Solución de Validación de Rendimiento para Componentes Automotrices" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Solución de Validación de Rendimiento para Componentes

                Automotrices

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/solucion-validacion-rendimiento-para-componentes-automotrices.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../futek"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/futek.webp" alt="futek" width="200px"></a>

                    <a href="../fatek"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/fatek.webp" alt="fatek" width="200px"></a>

                    <a href="../cincoze"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/cincoze.webp" alt="cincoze" width="200px"></a>



                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">En la industria automotriz, los componentes como frenos,

                    amortiguadores, direcciones, bombas de combustible o sistemas de suspensión deben someterse a

                    rigurosas pruebas de validación antes de su implementación en vehículos. Una solución de validación

                    de rendimiento integra sensores de fuerza, torque, vibración y temperatura con sistemas de

                    adquisición y control, permitiendo evaluar la durabilidad, seguridad y cumplimiento de normativas

                    internacionales.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Instrumentación de los Componentes</b> <br>

                        <ul>

                            <li>Se instalan celdas de carga <a

                                    href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-dona-lth300">LTH300</a>

                                y sensores de torque rotativos <a

                                    href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio-trs600">TRS600</a>

                                marca <a href="https://www.logicbus.com.mx/futek">FUTEK</a> en

                                piezas críticas para medir esfuerzos durante las pruebas.</li>

                            <li>Se integran sensores de temperatura infrarrojos marca CALEX en puntos de fricción o en

                                componentes sujetos a calentamiento.</li>

                        </ul>

                    </li>

                    <li><b>Adquisición de Datos en Tiempo Real</b> <br>

                        <ul>

                            <li>Los sensores transmiten las señales a través de <b>amplificadores de voltaje o

                                    amperaje</b>

                                (<a href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html">IAA100</a>, <a

                                    href="https://tienda.logicbus.com.mx/FSH03864_p_11906.html">IAA200</a>), que

                                acondicionan y amplifican las señales analógicas.</li>

                            <li><b>Un PLC industrial</b> <a

                                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac">FBs-20MCR2-AC</a>

                                <b>y su modulo de entradas analógicas</b> <a

                                    href="https://tienda.logicbus.com.mx/FBS-4A2D_p_3352.html">FBs-4A2D</a> <b>marca</b>

                                <a href="https://www.logicbus.com.mx/fatek">FATEK</a>

                                recopila los datos y sincroniza los parámetros de prueba (velocidad, ciclos, carga

                                aplicada).

                            </li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Automatización del Proceso de Prueba</b> <br>

                        <ul>

                            <li>El sistema activa actuadores eléctricos o hidráulicos que reproducen condiciones reales

                                de operación, como ciclos de frenado, golpes en suspensión o giros en dirección.</li>

                            <li>Los algoritmos en el PLC controlan la repetición de ciclos de carga y el tiempo total de

                                prueba según las normas de validación (ej. ISO, SAE).</li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Visualización y Control en Tiempo Real</b> <br>

                        <ul>

                            <li>Los resultados se muestran en una <b>HMI</b> <a

                                    href="https://tienda.logicbus.com.mx/P5070SB_p_31659.html">P5070SB</a> o <b>Panel

                                    PC</b> <a

                                    href="https://tienda.logicbus.com.mx/CV-108C-R10_p_23742.html">CV-108C-R10</a> donde

                                los

                                ingenieros pueden observar curvas de carga, ciclos de fatiga, comportamiento térmico y

                                desviaciones.</li>

                            <li>En caso de detectar fallos, desviaciones críticas o riesgo de daño, el sistema detiene

                                automáticamente la prueba para preservar seguridad y registrar el evento.</li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Registro y Generación de Informes</b>

                        <br>

                        <ul>

                            <li>Todos los datos se almacenan en una base local y/o en la nube mediante plataformas como

                                <a

                                    href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-plataforma-iot-fatek">FATEK

                                    IoT</a>.

                            </li>

                            <li>Se generan informes completos con curvas de esfuerzo-deformación, ciclos hasta la falla,

                                temperaturas máximas y comportamiento dinámico.</li>

                        </ul>



                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Cumplimiento Normativo: </b> Asegura que los componentes automotrices cumplan

                        con normas internacionales de seguridad y calidad.

                    </li>

                    <li class="mb-3"><b>Reducción de Riesgos: </b>Detecta fallos antes de la producción masiva, evitando

                        devoluciones o accidentes en campo.

                    </li>

                    <li class="mb-3"><b>Optimización de Diseño: </b> Permite a ingenieros ajustar materiales y

                        geometrías basados en datos de validación.

                    </li>

                    <li class="mb-3"><b>Automatización Total: </b>Reduce la intervención humana y asegura repetibilidad

                        en las pruebas.

                    </li>

                    <li class="mb-3"><b>Trazabilidad Completa: </b>Registra todos los parámetros por lote, pieza y fecha

                        para auditorías y certificaciones.

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/36/fsh03959.jpg" alt="LTH300"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">LTH300</p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-dona-lth300"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy"

                    src="https://tienda.logicbus.com.mx/assets/images/TRS600-NON-CONTACT-ROTARY-TORQUE-SENSOR-1.jpg"

                    alt="TRS600" width="150px">

                <p class="font-weight-bold mt-2 mb-0">TRS600</p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio-trs600"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/36/fsh03863.jpg" alt="FSH03863"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FSH03863</p>

                <p>IAA100, Amplificador de voltaje de acondicionamiento de señal de galga extensométrica de puente

                    completo, +/- 5 VCC, +/- 10 VCC de salida, Interruptor DIP de compensación de 5 VCC, Ancho de banda

                    de hasta 25 kHz, Conectores de terminales de tornillo desmontables, Caja metálica, Clip DIN de 35 mm

                    integrado

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/36/fsh03864.jpg" alt="FSH03864"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FSH03864</p>

                <p>IAA200, Transmisor de corriente de acondicionamiento de señal de galga extensométrica de puente

                    completo, salida de 4-20 mA, interruptor DIP de compensación de 12 mA, ancho de banda de hasta 25

                    kHz, conectores de terminales de tornillo desmontables, caja metálica, clip DIN de 35 mm integrado

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03864_p_11906.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/FBs-20MCR2-AC.jpg"

                    alt="FBS-20MCR2-AC" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-20MCR2-AC</p>

                <p>PLC Industrial con 12 entradas digitales de 24Vdc con velocidad alta (200KHz) y medio alta (20KHz y

                    5KHz), 8 salidas de relevador/ puerto de comunicación RS-232. Alimentacion de 100~240VAC y reloj de

                    tiempo real integrado.

                    <a class="button button-circle-orange"

                        href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac"

                        target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/29/fbs-4a2d.png" alt="FBS-4A2D"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-4A2D</p>

                <p>Modulo de expansion de entradas/salidas analogicas para PLC serie FBs con 4 entradas analogicas de 14

                    bits y 2 salidas analogicas de 14 bits (-10V~0V~+10V or -20mA~0mA~+20mA), configuracion por medio de

                    jumpers para proporcionar variedades de salida

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-4A2D_p_3352.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/P5070SB.jpg" alt="P5070SB"

                    width="150px">

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/cv-108.jpg" alt="CV-108C-R10"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">CV-108C-R10</p>

                <p>Modulo Display LCD de 8.4", pantalla capacitiva multitáctil de 10 puntos, resolucion 800x600, LED 400

                    nits. Superficie plana, protección IP65 contra polvo y agua en parte frontal. No funciona por sí

                    solo, requiere módulo monitor o módulo PC para Panel PC.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/CV-108C-R10_p_23742.html"

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
                    <iframe src="https://www.youtube.com/embed/rGYSA3xKuQo?si=juPZItKLU4xsjktz"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 2 -->
            <div style="width:300px;">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/8tKPTOdPsvA?si=z2aCX7Udvf-GgcHU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 3 -->
            <div style="width:300px;">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/Tclj-_f4pEE?si=C6u3kNbnyvDSRomQ"
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

                    href="https://www.logicbus.com.mx/blog/solucion-de-validacion-de-rendimiento-para-componentes-automotrices/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Solucion-de-Validacion-de-Rendimiento-para-Componentes-Automotrices-scaled.jpg"

                        alt="Solución de Validación de Rendimiento para Componentes Automotrices" width="100%">

                    Solución de Validación de Rendimiento para Componentes Automotrices

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/computadoras-industriales-resistentes-para-ambientes-hostiles-la-propuesta-de-cincoze/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Computadoras-industriales-resistentes-para-ambientes-hostiles-la-propuesta-de-CINCOZE.jpg"

                        alt="Computadoras industriales resistentes para ambientes hostiles: la propuesta de CINCOZE"

                        width="100%">

                    Computadoras industriales resistentes para ambientes hostiles: la propuesta de CINCOZE

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/control-de-cintas-transportadoras-y-tolvas-de-alimentacion-en-procesos-industriales/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Control-de-Cintas-Transportadoras-y-Tolvas-de-Alimentacion-en-Procesos-Industriales-2048x1024.jpg"

                        alt="Control de Cintas Transportadoras y Tolvas de Alimentación en Procesos Industriales"

                        width="100%">

                    Control de Cintas Transportadoras y Tolvas de Alimentación en Procesos Industriales

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/asegurando-la-cadena-de-frio-en-logistica-alimentaria-con-dataloggers-madgetech-hitemp140/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Asegurando-la-cadena-de-frio-en-logistica-alimentaria-con-dataloggers-MadgeTech-HiTemp140-scaled.jpg"

                        alt="Asegurando la cadena de frío en logística alimentaria con dataloggers MadgeTech HiTemp140"

                        width="100%">

                    Asegurando la cadena de frío en logística alimentaria con dataloggers MadgeTech HiTemp140</a>

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

                        alt="Solución de Validación de Rendimiento para Componentes Automotrices" width="100%">

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