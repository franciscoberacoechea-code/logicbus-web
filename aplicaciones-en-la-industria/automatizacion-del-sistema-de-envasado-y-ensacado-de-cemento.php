<?php

require("../admin/config.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Automatización del Sistema de Envasado y Ensacado de Cemento | Logicbus</title>

    <meta name="description"

        content="Sistema automatizado de envasado y ensacado de cemento con control de peso, sellado, transporte y trazabilidad por lote. Alta precisión, mínima intervención humana y compatibilidad SCADA.">

    <meta name="keywords"

        content="envasado de cemento, ensacado de cemento, sistema automatizado, control de peso, celdas de carga, PLC FATEK, SCADA, bandas transportadoras, sellado de sacos, trazabilidad industrial">

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

                    Automatización del Sistema de Envasado y Ensacado de Cemento </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Automatización del Sistema de Envasado y Ensacado de Cemento" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Automatización del Sistema de Envasado y Ensacado de Cemento" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0">Automatización del Sistema de Envasado y Ensacado de

                Cemento

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/automatizacion-del-sistema-de-envasado-y-ensacado-de-cemento.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a

                        href="../sensores-capacitivos-sensores-de-proximidad-inductivos-magnetorresistivos-y-controladores"><img

                            class="m-3 gray-filter" src="../images/nuestras_marcas/webp/rechner-sensors.webp"

                            alt="rechner" width="200px"></a>

                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"

                            alt="fatek" width="200px"></a>

                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"

                            alt="futek" width="200px"></a>

                    <a href="../applied-motion"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/applied-motion.webp" alt="applied-motion"

                            width="200px"></a>

                    <a href="../cimon"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cimon.webp"

                            alt="cimon" width="200px"></a>

                    <a href="../taicenn"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/taicenn.webp"

                            alt="taicenn" width="200px"></a>

                    <a href="../davo-lin"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/davo-lin.webp" alt="davo-lin" width="200px"></a>

                    <a href="../3onedata"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>

                    <a href="../tri-tronics"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>

                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">En la industria del cemento, el proceso de envasado y ensacado debe

                    ser rápido, preciso y confiable, ya que cualquier desviación en el peso o fallos en la manipulación

                    pueden provocar pérdidas económicas, sanciones por incumplimiento de etiquetado, y riesgos

                    operativos. Este sistema automatizado controla el llenado, pesaje, sellado y despacho de sacos de

                    cemento mediante sensores de peso, celdas de carga, válvulas de dosificación, bandas transportadoras

                    y controladores programables (PLC). Permite una operación continua con mínima intervención humana,

                    alta repetibilidad y trazabilidad completa por lote.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Posicionamiento Automático del Saco Vacío</b> <br>

                        Los sacos de papel kraft o polietileno se colocan automáticamente (o mediante asistencia

                        semiautomática) sobre una boquilla de llenado. Sensores fotoeléctricos como el modelo <a

                            href="https://tienda.logicbus.com.mx/PMIRC-18_p_36510.html">PMIRC-18</a>

                        de <a href="https://tienda.logicbus.com.mx/tri-tronics">TRI-TRONICS</a> detectan la correcta

                        colocación del saco. Sensores de proximidad inductivos como

                        el <a

                            href="https://tienda.logicbus.com.mx/IAS-60-A13-S-M18-PPOMS-Z02-0_p_34435.html">IAS-60-A13-S-M18-PPO/MS-Z02-0</a>

                        de Rechner verifican el contacto adecuado entre el saco y la

                        boquilla antes de iniciar el llenado.

                    </li>

                    <li><b>Dosificación del Cemento con Control por Peso</b> <br>

                        El PLC <a

                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac">FBs-60MCR2-AC</a>

                        de <a href="https://tienda.logicbus.com.mx/fatek">FATEK</a> inicia el proceso de llenado

                        activando una válvula dosificadora

                        neumática o un tornillo sinfín. A medida que el cemento fluye, una celda de carga industrial

                        tipo plataforma como <a href="https://tienda.logicbus.com.mx/FSH04167_p_14535.html">FSH04167</a>

                        de <a href="https://tienda.logicbus.com.mx/futek">FUTEK</a> mide en tiempo real el peso del

                        saco, la celda se conecta

                        al módulo <a

                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-modulos-de-expansion-a-la-derecha-fbs-2lc">FBS-2LC</a>

                        del PLC. Cuando se alcanza el peso objetivo programado (por

                        ejemplo, 50.00 kg

                        ± 100 g), el PLC cierra la válvula inmediatamente para evitar sobrellenado.

                    </li>

                    <li class="mb-3"><b>Verificación y Compensación de Peso</b> <br>

                        El sistema está calibrado para compensar errores derivados de vibraciones, densidad variable del

                        cemento o inercia del flujo. El PLC <a

                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac">FBs-60MCR2-AC</a>

                        de <a href="https://tienda.logicbus.com.mx/fatek">FATEK</a> analiza las últimas mediciones y

                        ajusta dinámicamente la dosificación en los siguientes ciclos para mantener la consistencia. Se

                        integra con los sistemas de control (HMI, Panel PC, SCADA, etc…) mediante su puerto Ethernet

                        <a href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html">FBs-CBEH(8)</a> y a través de un

                        switch ethernet como el <a

                            href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a>

                        de <a href="https://tienda.logicbus.com.mx/3onedata">3onedata Technology</a>.

                    </li>

                    <li class="mb-3"><b>Transporte y Sellado del Saco Lleno</b> <br>

                        Una banda transportadora controlada por servomotor integrado como el <a

                            href="https://tienda.logicbus.com.mx/MDXT83GNBIPB000_p_38178.html">MDXT83GNBIPB000</a> de <a

                            href="https://tienda.logicbus.com.mx/applied-motion">Applied

                            Motion</a> desplaza el saco hacia la estación de sellado. Si se emplean sacos valvulados, se

                        incluye

                        un sistema de prensado o compresión neumática controlado desde el mismo PLC para asegurar el

                        cierre hermético.

                    </li>

                    <li class="mb-3"><b>Rechazo de Sacos Incorrectos</b>

                        <br>

                        Antes del apilado, el sistema realiza una verificación de peso final mediante otra celda de

                        carga ubicada en la banda de salida. Si el saco no cumple con el peso establecido, un actuador

                        neumático lo desvía hacia un canal de rechazo. Este mecanismo está controlado por una salida

                        digital del PLC.

                    </li>

                    <li><b>Registro de Producción y Trazabilidad</b><br>Cada saco queda vinculado a un número de lote,

                        turno y peso. Estos datos son almacenados en una base de datos local y sincronizados con un

                        servidor central mediante interfaces de comunicación industrial (Modbus TCP/IP o MQTT). La

                        plataforma <a href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html">SCADA

                            Ultimate Access Web</a> de <a href="https://tienda.logicbus.com.mx/cimon">CIMON</a> puede

                        utilizarse para el monitoreo y análisis de

                        producción.</li>

                    <li><b>Visualización y Control Operativo</b><br>El operario puede visualizar todos los datos del

                        sistema en una HMI <a href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html">P5070NB</a> de

                        <a href="https://tienda.logicbus.com.mx/fatek">FATEK</a> o en un

                        panel industrial tipo <a

                            href="https://www.logicbus.com.mx/pdf/290/TPC-DCS215T_V3.2.pdf">TPC-DCS215T</a> de <a

                            href="https://tienda.logicbus.com.mx/taicenn">TAICENN</a>.

                        Desde

                        allí puede seleccionar recetas de dosificación, verificar alarmas, hacer ajustes de peso

                        objetivo y consultar registros históricos. El sistema también puede operar manualmente mediante

                        teclados industriales como el modelo <a

                            href="https://tienda.logicbus.com.mx/D-8607_p_31698.html">D-8607</a> de <a

                            href="https://tienda.logicbus.com.mx/davo-lin">DAVO LIN</a>.

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Precisión de Llenado: </b> Las celdas de carga integradas garantizan que cada

                        saco cumpla con el peso nominal, minimizando pérdidas por sobrellenado o sanciones por

                        subllenado.

                    </li>

                    <li class="mb-3"><b>Automatización Total del Proceso: </b>Desde la colocación del saco hasta el

                        apilado, el sistema puede operar con mínima intervención humana, reduciendo errores y aumentando

                        la productividad.

                    </li>

                    <li class="mb-3"><b>Reducción de Polvo y Riesgos Laborales: </b> La automatización minimiza el

                        contacto humano con el cemento, mejorando las condiciones de higiene y seguridad en planta.

                    </li>

                    <li class="mb-3"><b>Escalabilidad para Alta Demanda: </b>El sistema puede adaptarse a múltiples

                        estaciones de llenado y líneas de producción, ajustando su rendimiento a volúmenes industriales.

                    </li>

                    <li class="mb-3"><b>Trazabilidad por Lote: </b>Cada unidad producida queda registrada, lo que

                        facilita auditorías, control de calidad y análisis de eficiencia.

                    </li>

                    <li class="mb-3"><b>Compatibilidad con SCADA: </b>Gracias a sus protocolos abiertos, el sistema

                        puede integrarse fácilmente a plataformas de monitoreo industrial y planificación de recursos.

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

                <img src="https://tienda.logicbus.com.mx/assets/images/226/pmirc-18.jpg" alt="PMIRC-18" width="150px">

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

                <img src="https://tienda.logicbus.com.mx/assets/images/308/601000db.jpg"

                    alt="IAS-60-A13-S-M18-PPO/MS-Z02-0" width="150px">

                <p class="font-weight-bold mt-2 mb-0">IAS-60-A13-S-M18-PPO/MS-Z02-0</p>

                <p>Sensor inductivo Serie 60 - CA/CC Sensor inductivo M18 x 1 con salida normalmente abierta

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/IAS-60-A13-S-M18-PPOMS-Z02-0_p_34435.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-60mcr2-ac.jpg" alt="FBs-60MCR2-AC"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBs-60MCR2-AC</p>

                <p>PLC Industrial con 36 entradas digitales/ 24 salidas de relevador/ puerto de comunicación RS-232.

                    Alimentacion de 100~240VAC y reloj de tiempo real integrado.

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04167.jpg" alt="FSH04167" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FSH04167</p>

                <p>LCF450 , 300 lb , Low Profile Universal Pancake , RoHS Compliant, Material - 17-4 PH S.S. ,

                    5/8-18-Thread , 6 Pin Bendix Receptacle, PT02E-10-6P.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04167_p_14535.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-2lc.jpg" alt="FBS-2LC" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-2LC</p>

                <p>Módulo para medición de celdas de carga con dos canales, resolución de 16-bit, para PLCs de la serie

                    FBs

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-modulos-de-expansion-a-la-derecha-fbs-2lc"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-cbeh(16).jpg" alt="FBs-CBEH(8)"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBs-CBEH(8)</p>

                <p>Tarjeta Comunicación para la Serie FBs, 1xPuerto Ethernet 10/100 BaseT(Port1 y Port2) RJ45, Modo

                    Servidor/cliente, Protocolo aplicación: <a href="https://tienda.logicbus.com.mx/fatek">FATEK</a> y

                    Modbus/TCP, Web-Server, Soporte TCP/IP 8

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

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html" target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/309/ultimate-access-web.jpg"

                    alt="Ultimate Access Web" width="150px">

                <p class="font-weight-bold mt-2 mb-0">Ultimate Access Web</p>

                <p>Sistema SCADA MES para monitoreo y control de procesos industriales, permite la integración de

                    dispositivos Modbus TCP/RTU, gestión de alarmas, reportes y trazabilidad en tiempo real.

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html" target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/P5070SB.jpg" alt="P5070NB" width="150px">

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

                <img src="https://tienda.logicbus.com.mx/assets/images/LBD-2988607-1.jpg" alt="D-8607" width="150px">

                <p class="font-weight-bold mt-2 mb-0">D-8607</p>

                <p>Teclado industrial en español con 65 teclas + 2 botones grabados con laser, incluye tecla "ñ", teclas

                    de funciones (con tecla FN) y touchpad. Interfaz USB. Acero inoxidable 304, proteccion IP65 panel

                    frontal. Montaje por atras de panel. Dim. 392 x 110 mm </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/D-8607_p_31698.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/278/mdxt83gnbipb000.jpg" alt="MDXT83GNBIPB000"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">MDXT83GNBIPB000</p>

                <p>Servomotor Integrado MDX+ de 750W, IP65 con Encoder Absoluto de 17 bits

                    El MDX+ reduce la complejidad con su integración optimizada de un motor, un drive y un encoder en un

                    diseño compacto. El MDXT83GNBIPB000 está diseñado para comunicación EtherNet/IP y cuenta con un

                    encoder absoluto multivuelta con protección IP65.</p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/MDXT83GNBIPB000_p_38178.html" target="_blank">Comprar</a>

            </div>

        </div>

    </section>



    <!--VIDEOS-->

    <section class="container-fluid py-5">

        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

        <div class="row justify-content-center my-5">

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/dpG28nEyW7s?si=-ggbqkPxdR17Sl6v"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/2PmrCWk8OYY?si=auiIXOQwBC0A6ACr"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/9i3pFE4_rsY?si=Ax1QGlcugsj7WK7B"

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

                    href="https://www.logicbus.com.mx/blog/logistica-autonoma-con-youibot-revolucionando-los-almacenes-con-robots-moviles/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Logistica-autonoma-con-Youibot-Revolucionando-los-almacenes-con-robots-moviles-scaled.jpg"

                        alt="Logística autónoma con Youibot: Revolucionando los almacenes con robots móviles"

                        width="100%">

                    Logística autónoma con Youibot: Revolucionando los almacenes con robots móviles

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/precision-en-la-produccion-registradores-de-datos-para-la-optimizacion-del-proceso-de-fabricacion/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Precision-en-la-produccion-Registradores-de-datos-para-la-optimizacion-del-proceso-de-fabricacion-scaled.jpg"

                        alt="Precisión en la producción: Registradores de datos para la optimización del proceso de fabricación"

                        width="100%">

                    Precisión en la producción: Registradores de datos para la optimización del proceso de fabricación

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/sincronizacion-de-maquinas-dosificadoras-en-procesos-multiproducto-2/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Sincronizacion-de-Maquinas-Dosificadoras-en-Procesos-Multiproducto-scaled.jpg"

                        alt="Sincronización de Máquinas Dosificadoras en Procesos Multiproducto" width="100%">

                    Sincronización de Máquinas Dosificadoras en Procesos Multiproducto

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/integracion-de-sistemas-de-monitorizacion-de-fabricas-de-alimentos-para-una-trazabilidad-integral-de-la-produccion/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Integracion-de-sistemas-de-monitorizacion-de-fabricas-de-alimentos-para-una-trazabilidad-integral-de-la-produccion.jpg"

                        alt="Integración de sistemas de monitorización de fábricas de alimentos para una trazabilidad integral de la producción"

                        width="100%">

                    Integración de sistemas de monitorización de fábricas de alimentos para una trazabilidad integral de

                    la producción</a>

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

                        alt="Automatización del Sistema de Envasado y Ensacado de Cemento" width="100%">

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