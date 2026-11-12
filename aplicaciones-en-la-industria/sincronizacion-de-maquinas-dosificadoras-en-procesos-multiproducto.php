<?php

require("../admin/config.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sincronización de Máquinas Dosificadoras en Procesos Multiproducto | Logicbus</title>

    <meta name="description"

        content="Sincroniza dosificadores en líneas multiproducto con recetas automáticas, control por PLC y trazabilidad total. Más precisión, menos errores y cero paros.">

    <meta name="keywords"

        content="sincronización de dosificadores, líneas multiproducto, automatización industrial, dosificación automática, PLC industrial, control de procesos, recetas automáticas, RFID industrial, trazabilidad en producción, SCADA MES, celdas de carga, sistema dosificador inteligente, cambio de lote automático, control por volumen y peso, eficiencia en producción">

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

                    Sincronización de Máquinas Dosificadoras en Procesos Multiproducto </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Sincronización de Máquinas Dosificadoras en Procesos Multiproducto" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Sincronización de Máquinas Dosificadoras en Procesos Multiproducto" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Sincronización de Máquinas Dosificadoras en Procesos

                Multiproducto

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/sincronizacion-de-maquinas-dosificadoras-en-procesos-multiproducto.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"

                            alt="fatek" width="200px"></a>

                    <a href="../madgetech"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/madgetech.webp" alt="madgetech" width="200px"></a>

                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"

                            alt="futek" width="200px"></a>

                    <a href="../rfid"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/rfid.webp"

                            alt="rfid" width="200px"></a>

                    <a href="../cimon"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cimon.webp"

                            alt="cimon" width="200px"></a>

                    <a href="../3onedata"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>



                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">La sincronización de máquinas dosificadoras en líneas multiproducto

                    permite adaptar automáticamente parámetros de llenado, tiempos de dosificación y rutas de transporte

                    según el producto en curso. Esta solución asegura continuidad operativa sin necesidad de cambio

                    manual entre lotes distintos, reduce errores humanos y garantiza exactitud tanto en el volumen como

                    en la secuencia del proceso.

                    El sistema integra PLCs industriales, sensores de identificación de producto (por código de lote o

                    RFID), válvulas inteligentes y sistemas SCADA/MES para gestionar recetas, ajustes automáticos y

                    sincronización precisa entre dosificadores conectados.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Identificación Automática del Producto y Lote</b> <br>

                        Cada unidad o batch de producto que entra al área de dosificación es identificado

                        automáticamente usando tags como el <a

                            href="https://tienda.logicbus.com.mx/F11009_p_37989.html">F11009</a> en productos

                        entarimados ó el <a href="https://tienda.logicbus.com.mx/ML8343_p_25924.html">ML8343</a> para

                        los

                        costales solos, al momento de entrar al batch para su mezclado un lector RFID <a

                            href="https://tienda.logicbus.com.mx/SPRA18-8080-12C_p_35075.html">SPR/A18-8080-12C</a>

                        obtiene el ID de los ingredientes. Esto activa la carga automática de la receta correspondiente

                        (volumen, tiempo de dosificación, número de válvulas activas, etc.).

                    </li>

                    <li><b>Sincronización de Dosificadores y Válvulas</b> <br>

                        El PLC central <a

                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac">FBs-60MCR2-AC</a>

                        ajusta de forma dinámica los parámetros operativos de cada

                        dosificador según la receta: apertura de válvulas, caudal objetivo, velocidad de motor, peso o

                        volumen deseado. Todos los dosificadores se activan con temporización milisegundo a milisegundo

                        para asegurar que ningún envase sea llenado con parámetros de un producto diferente.

                    </li>

                    <li class="mb-3"><b>Control en Tiempo Real por Peso o Volumen</b> <br>

                        Durante la dosificación, las celdas de carga <a

                            href="https://tienda.logicbus.com.mx/FSH04521_p_35079.html">FSH04521</a> conectadas a

                        módulos de

                        pesaje como el

                        <a href="https://tienda.logicbus.com.mx/FBS-1LC_p_3143.html">FBs-1LC</a> miden en tiempo real el

                        llenado en el PLC <a

                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac">FBs-60MCR2-AC</a>.

                        Si un valor se desvía de la

                        tolerancia programada, el dosificador se detiene automáticamente y se genera una alerta,

                        garantizando que cada envase cumpla los estándares de calidad.

                    </li>

                    <li class="mb-3"><b>Cambio Rápido entre Productos</b> <br>

                        Cuando se detecta un cambio de producto (nuevo lote o SKU), el sistema activa un ciclo de purga

                        o limpieza automática, ajusta las válvulas, parámetros de velocidad, y carga una nueva receta

                        sin necesidad de intervención del operario. Esto reduce los tiempos muertos entre series.

                    </li>

                    <li class="mb-3"><b>Supervisión, Registro y Trazabilidad</b>

                        <br>

                        Toda la información de sincronización, tiempos de apertura, caudales y peso dosificado se

                        registra automáticamente en el SCADA <a

                            href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html">Ultimate Access

                            Web</a>. Los operadores pueden monitorear el

                        estado de cada dosificador desde la HMI <a

                            href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html">P5070NB</a>, visualizar

                        tendencias, generar

                        reportes por

                        lote y recibir alertas de sincronización fallida. Tanto la HMI, SCADA, lectores RFID y como los

                        PLCs (estos tienen su módulo <a

                            href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html">FBs-CBEH(8)</a>)

                        se mantienen en comunicación mediante el protocolo

                        Modbus TCP y con ayuda de switches Ethernet como el <a

                            href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a>.

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Cambio de Producto Sin Detener la Línea: </b> Gracias a la identificación

                        automática y ajuste de receta, se pueden procesar distintos productos de forma continua.

                    </li>

                    <li class="mb-3"><b>Precisión en Dosificación Sincronizada: </b>Coordinación milimétrica entre

                        máquinas dosificadoras, válvulas y sensores garantiza llenado homogéneo incluso en líneas de

                        alta velocidad.

                    </li>

                    <li class="mb-3"><b>Reducción de Desperdicio y Reproceso: </b> La medición en tiempo real y las

                        alarmas automáticas evitan errores de llenado y contaminación cruzada.

                    </li>

                    <li class="mb-3"><b>Trazabilidad Total y Reportes Automáticos: </b>Todos los parámetros por lote

                        quedan registrados con fecha, hora y operador, facilitando auditorías y cumplimiento normativo.

                    </li>

                    <li class="mb-3"><b>Escalabilidad y Modularidad: </b>Sistema preparado para escalar a más

                        dosificadores, incluir nuevos SKUs o integrarse con líneas de envasado y empaquetado.

                    </li>

                    <li class="mb-3"><b>Integración con ERP/MES: </b>Comunicación con sistemas superiores permite

                        agendar producciones, generar reportes automáticos y habilitar flujos de aprobación por receta.

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

                <img src="https://tienda.logicbus.com.mx/assets/images/292/f11009.jpg" alt="F11009" width="150px">

                <p class="font-weight-bold mt-2 mb-0">F11009</p>

                <p>Tag para montaje en panel, ofrece una siluetadas ha más elegante para las necesidades que requieren

                    una opción de perfil bajo. Esta etiqueta también es capaz de resistir temperatura de hasta 200°C

                    (392°F) indefinidamente y más allá dependiendo del tiempo de exposición.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/F11009_p_37989.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/292/807-0020-ML8343.jpg" alt="ML8343"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">ML8343</p>

                <p>Etiqueta de montaje metálico en rollo, 83x43x.86mm, UHF 902-928 MHz RFID pasivo

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/ML8343_p_25924.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/292/spra18-8080-12c.jpg" alt="SPR/A18-8080-12C"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">SPR/A18-8080-12C</p>

                <p>Modelo SPR/A18-8080-12C Combinación de antena/lector RFID UHF de 915 MHz de una sola pieza, 18"

                    cuadradas, Modbus TCP/USB/Serial, 12dBi, polarización circular

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/SPRA18-8080-12C_p_35075.html" target="_blank">Comprar</a>

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

                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04521.jpg" alt="FSH04521" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FSH04521</p>

                <p>LSM305 , 10 lb , Celda de carga de paralelogramo con TEDS y PT1000 RTD , Cumple con RoHS , Material -

                    2024-T4 , #10-32-Thread , Protección contra sobrecarga , 8 posiciones 0.039" (1.00mm) Conector JST

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04521_p_35079.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-1lc_2.jpg" alt="FBS-1LC" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-1LC</p>

                <p>Modulo de expansión para PLC FBs con 1 entrada para celda de carga (2/ 5/ 10 y 20 mV/V) y voltaje de

                    excitación para celda de carga de 5V. Alimentación de 24 Vdc

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-1LC_p_3143.html"

                    target="_blank">Comprar</a>

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

                <p>Sin administrar, 5*10/100/1000Base-T (x) RJ45, Fuente de alimentación dual 9 ~ 60VDC, Montaje de riel

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html" target="_blank">Comprar</a>

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

                        alt="Sincronización de Máquinas Dosificadoras en Procesos Multiproducto" width="100%">

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