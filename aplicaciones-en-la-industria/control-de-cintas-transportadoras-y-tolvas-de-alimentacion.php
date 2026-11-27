<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Control de Cintas Transportadoras y Tolvas de Alimentación | Logicbus</title>

    <meta name="description"

        content="Automatización del transporte de materias primas en procesos industriales de cemento, cal y yeso mediante sensores, PLCs y relevadores inteligentes. Mejora la eficiencia, seguridad y control de bandas transportadoras y tolvas.">

    <meta name="keywords"

        content="automatización industrial, transporte de materias primas, bandas transportadoras, tolvas, sensores industriales, PLC CONTROLLINO, relevadores inteligentes, SCADA, control de procesos, industria cemento, cal, yeso">

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

                    Control de Cintas Transportadoras y Tolvas de Alimentación </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Control de Cintas Transportadoras y Tolvas de Alimentación" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Control de Cintas Transportadoras y Tolvas de Alimentación" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Control de Cintas Transportadoras y Tolvas de

                Alimentación

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/control-de-cintas-transportadoras-y-tolvas-de-alimentacion.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../tri-tronics"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>

                    <a href="../controllino"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/controllino.webp" alt="controllino" width="200px"></a>

                    <a href="../taicenn"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/taicenn.webp" alt="taicenn" width="200px"></a>

                    <a href="../3onedata"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>

                    <a href="../reign_power"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/reignpower.webp" alt="reign power" width="200px"></a>

                    <a href="../cimon"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/cimon.webp" alt="cimon" width="200px"></a>

                    <a href="../seneca"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/seneca.webp" alt="seneca" width="200px"></a>



                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">En procesos industriales como la producción de cemento, cal y yeso,

                    el transporte automatizado de materias primas —como caliza, yeso, arena, o clinker— es clave para

                    mantener un flujo continuo y seguro de materiales. Esta aplicación permite automatizar el arranque,

                    parada, monitoreo y control de cintas transportadoras y tolvas de alimentación mediante sensores

                    industriales, PLCs programables y relevadores inteligentes. El sistema garantiza una dosificación

                    eficiente, evita derrames o atascos, y mejora la eficiencia del proceso productivo.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Detección de Material en Tolvas o Cintas</b> <br>

                        Sensores fotoeléctricos retroreflectivos como el modelo <a

                            href="https://tienda.logicbus.com.mx/PMIRC-18_p_36510.html">PMIRC-18</a> de <a

                            href="https://tienda.logicbus.com.mx/tri-tronics">TRI-TRONICS</a> se

                        colocan en

                        puntos estratégicos de las tolvas y bandas para detectar presencia de material, bloqueos o nivel

                        mínimo/máximo. <br>

                        En las bandas transportadoras, se pueden colocar sensores de alineación ópticos como el modelo

                        <a href="https://tienda.logicbus.com.mx/BF-A-240RS_p_25783.html">BF-A-240RS</a> de <a

                            href="https://tienda.logicbus.com.mx/tri-tronics">TRI-TRONICS</a>

                        para prevenir fallas mecánicas.

                        <br>

                        Estos sensores generan señales digitales que se envían a entradas del sistema de control.

                    </li>

                    <li><b>Automatización con PLC</b> <br>

                        Un <b>PLC</b> <a

                            href="https://tienda.logicbus.com.mx/prueba-y-medicion-laboratorio-academico-100-102-00">100-102-00</a>

                        de <a href="https://tienda.logicbus.com.mx/controllino">CONTROLLINO</a> recibe las señales de

                        los

                        sensores y controla

                        los motores de

                        las cintas, vibradores de tolvas y compuertas dosificadoras. <br>

                        El PLC gestiona la lógica de control secuencial para:

                        <ul>

                            <li>Activar automáticamente la cinta cuando hay material disponible y la tolva de destino

                                está vacía.</li>

                            <li>Detener la banda si no hay material o si la tolva receptora está llena.</li>

                            <li>Sincronizar múltiples bandas transportadoras en cascada para mantener flujo continuo de

                                material.</li>

                            <li>Gestionar la descarga secuencial de diferentes tolvas (por ejemplo, alimentación

                                alternada de yeso, caliza y aditivos).</li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Control de Potencia y Seguridad</b> <br>

                        El encendido/apagado de motores trifásicos y actuadores se realiza a través de <b>relevadores

                            integrados al PLC</b> <a

                            href="https://tienda.logicbus.com.mx/prueba-y-medicion-laboratorio-academico-100-102-00">100-102-00</a>

                        de <a href="https://tienda.logicbus.com.mx/controllino">CONTROLLINO</a> (cuenta con 5 salidas a

                        16 Amperios), y para

                        supervisar la corriente consumida y detectar sobrecargas o fallos de motor se utilizan

                        transformadores de corriente como el <a

                            href="https://tienda.logicbus.com.mx/T201DCH100-LP_p_12734.html">T201DCH100-LP</a> de <a

                            href="https://tienda.logicbus.com.mx/seneca">SENECA

                            S.R.L.</a> <br>

                        Estos relevadores automatizan el sistema y permiten acciones oportunas ante condiciones

                        anormales.

                    </li>

                    <li class="mb-3"><b>Interfaz de Usuario y Supervisión</b> <br>

                        Una <b>pantalla HMI</b> <a

                            href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html">P5070NB</a> de

                        <a href="https://tienda.logicbus.com.mx/fatek">FATEK</a> y un <b>Panel PC industrial</b>

                        <a href="https://www.logicbus.com.mx/pdf/290/TPC-DCS215T_V3.2.pdf">TPC-DCS215T</a> de

                        <a href="https://tienda.logicbus.com.mx/taicenn">TAICENN</a>

                        se instala en

                        la sala de control para:

                        <ul>

                            <li>Visualizar el estado de cada banda y tolva (en operación, detenida, error).</li>

                            <li>Ver niveles de carga, alarmas activas y estadísticas de operación (ciclos, tiempo

                                activo, fallos).</li>

                            <li>Permitir el arranque manual o automático, según el modo operativo seleccionado.</li>

                            <li>Ajustar la secuencia o el orden de operación desde la interfaz gráfica.</li>

                        </ul>

                        Tanto la <b>HMI</b> como el <b>Panel PC</b> se conectan al <b>PLC</b> usando un <b>switch

                            ethernet</b>

                        como el

                        <a href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a> de

                        <a href="https://tienda.logicbus.com.mx/3onedata">3onedata Technology</a>. <br>

                        <b>Los equipos mencionados (excepto el Panel PC) se pueden alimentar con una fuente de poder de

                            uso

                            industrial como el modelo <a

                                href="https://tienda.logicbus.com.mx/LP1150D-24MADA_p_13274.html">LP1150D-24MADA</a> de

                            <a href="https://tienda.logicbus.com.mx/reign-power">Reign Power</a>.</b>

                    </li>

                    <li class="mb-3"><b>Generación de Reportes y Trazabilidad</b>

                        <br>

                        La información se registra en un sistema SCADA como Ultimate Access Web de CIMON vía protocolos

                        como Modbus TCP/IP. <br>

                        Esto permite generar reportes sobre consumo de energía, ciclos de carga, eficiencia operativa y

                        tiempos de parada, útiles para mantenimiento predictivo y mejora continua.



                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Operación Continua y Sin Interrupciones: </b> Automatiza el transporte de

                        materiales sólidos, asegurando alimentación constante al molino, horno o mezcladora.

                    </li>

                    <li class="mb-3"><b>Reducción de Riesgos Mecánicos: </b>El monitoreo de alineación, nivel y carga

                        evita atascos, derrames y daños a la banda.

                    </li>

                    <li class="mb-3"><b>Optimización de la Producción: </b> El sistema sincroniza múltiples cintas para

                        lograr un flujo balanceado y eficiente.

                    </li>

                    <li class="mb-3"><b>Menor Intervención Humana: </b>La automatización minimiza el uso de operarios

                        para arranque y monitoreo, mejorando la seguridad en planta.

                    </li>

                    <li class="mb-3"><b>Protección del Sistema Eléctrico: </b>Relevadores inteligentes detectan

                        sobrecargas y protegen motores y variadores.

                    </li>

                    <li class="mb-3"><b>Adaptabilidad: </b>Se puede expandir fácilmente para incluir nuevas tolvas,

                        sensores o integrar con sistemas de pesaje y dosificación.

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/226/pmirc-18.jpg" alt="PMIRC-18"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">PMIRC-18</p>

                <p>Sensor retrorreflectante, fuente de luz LED infrarroja invisible, transistor de salida PNP, conector

                    M8 de 4 pines, carcasa de 18 mm. El rango de detección máximo es de 15´ (3,8 m) o 35´ (8,8 m) cuando

                    se utiliza con un reflector de alto rendimiento AR82.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PMIRC-18_p_36510.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/BF-A-240RS.jpg" alt="BF-A-240RS"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">BF-A-240RS</p>

                <p>Fibra óptica de vidrio bifurcada, (A) 0.093 ", 240" de largo, vista lateral derecha, cubierta de

                    acero inoxidable.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/BF-A-240RS_p_25783.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/265/100-102-00.jpg"

                    alt="100-102-00" width="150px">

                <p class="font-weight-bold mt-2 mb-0">100-102-00</p>

                <p>El MAXI es el modelo más vendido de nuestra gama CONTROLLINO y ahora disponible como variante, el

                    Controllino MAXI Power con 5 salidas a relevador de hasta 16 amperios. Es el compromiso perfecto

                    entre tamaño compacto y gran número de entrada y salida. La competencia central es su flexibilidad.

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/prueba-y-medicion-laboratorio-academico-100-102-00"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/290/tpc-dcs215t.jpg"

                    alt="T201DCH100-LP" width="150px">

                <p class="font-weight-bold mt-2 mb-0">T201DCH100-LP</p>

                <p>Transformador de corriente alterna/directa (TRMS) de nucleo cerrado con entrada para +/-100A AC/DC,

                    configurable por DIP switch, salida de 4 a 20mA, diametro de 21 mm, alimentacion 9 a 28Vdc, Incluye

                    2 x A-DIN-T201 para montaje en Riel DIN

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/T201DCH100-LP_p_12734.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/44/t201dch100-lp.jpg"

                    alt="TPC-DCS215T" width="150px">

                <p class="font-weight-bold mt-2 mb-0">TPC-DCS215T</p>

                <p>21.5” FHD Panel PC with Intel Tiger Lake UP3;

                    Front IP65 rated; 2 GbE, 6 USB, 2 HDMI, 2 COM;

                    Pcap. Touch; DC 12V; 2 M.2 expansion slots.

                </p>

                <a class="button button-circle-orange" href="https://www.logicbus.com.mx/pdf/290/TPC-DCS215T_V3.2.pdf"

                    target="_blank">PDF</a>

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/LP1150D-24MADA.jpg"

                    alt="LP1150D-24MADA" width="150px">

                <p class="font-weight-bold mt-2 mb-0">LP1150D-24MADA</p>

                <p>Fuente de poder AC -> DC de 24VDC, 6.2 A y 150 W con montaje en riel DIN o con tornillos. Frecuencia

                    de entrada 47-63 Hz. Aprobacion UL 508 y certificado 80PLUS.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LP1150D-24MADA_p_13274.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/309/ultimate-access-web.jpg"

                    alt="T201DCH100-LP" width="150px">

                <p class="font-weight-bold mt-2 mb-0">Ultimate Access Web</p>

                <p>software de SCADA Ultime Access Web

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html" target="_blank">Comprar</a>

            </div>

        </div>

    </section>



    <!--VIDEOS-->

    <section class="container-fluid py-5">

        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

        <div class="row justify-content-center my-5">

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/Tclj-_f4pEE?si=C6u3kNbnyvDSRomQ"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/dpG28nEyW7s?si=V-duFfNfVdlJBQKG"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/2PmrCWk8OYY?si=V1L9uGB88gjLt6Ni"

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

                    href="https://www.logicbus.com.mx/blog/medicion-de-nivel-en-silos-de-cemento-y-clinker/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Medicion-de-Nivel-en-Silos-de-Cemento-y-Clinker.jpg"

                        alt="Medición de Nivel en Silos de Cemento y Clinker" width="100%">

                    Medición de Nivel en Silos de Cemento y Clinker

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/logistica-autonoma-con-youibot-revolucionando-los-almacenes-con-robots-moviles/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Logistica-autonoma-con-Youibot-Revolucionando-los-almacenes-con-robots-moviles-scaled.jpg"

                        alt="Logística autónoma con Youibot: Revolucionando los almacenes con robots móviles"

                        width="100%">

                    Logística autónoma con Youibot: Revolucionando los almacenes con robots móviles

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/automatizacion-del-sistema-de-envasado-y-ensacado-de-cemento/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Automatizacion-del-Sistema-de-Envasado-y-Ensacado-de-Cemento-scaled.jpg"

                        alt="Automatización del Sistema de Envasado y Ensacado de Cemento" width="100%">

                    Automatización del Sistema de Envasado y Ensacado de Cemento

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/precision-en-la-produccion-registradores-de-datos-para-la-optimizacion-del-proceso-de-fabricacion/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Precision-en-la-produccion-Registradores-de-datos-para-la-optimizacion-del-proceso-de-fabricacion-scaled.jpg"

                        alt="Precisión en la producción: Registradores de datos para la optimización del proceso de fabricación"

                        width="100%">

                    Precisión en la producción: Registradores de datos para la optimización del proceso de

                    fabricación</a>

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

                        alt="Control de Cintas Transportadoras y Tolvas de Alimentación" width="100%">

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