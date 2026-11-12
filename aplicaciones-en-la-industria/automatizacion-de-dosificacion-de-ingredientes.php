<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatización de Dosificación de Ingredientes | Logicbus</title>
    <meta name="description"
        content="Dosificación precisa de ingredientes con PLC y celdas de carga para garantizar calidad, trazabilidad y ahorro en industrias alimentaria y farmacéutica.">
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
                <li class="breadcrumb-item active" aria-current="page">Automatización de Dosificación de Ingredientes
                </li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt="Automatización de Dosificación de Ingredientes" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Automatización de Dosificación de Ingredientes"
            class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Automatización de Dosificación de Ingredientes</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Automatizacion-de-Dosificacion-de-Ingredientes.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
                            alt="Futek" width="200px"></a>
                    <a href="../cimon-software-scada-industrial"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/cimon.webp" alt="CIMON" width="200px"></a>
                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                            alt="fatek" width="200px"></a>
                    <a href="../3onedata"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7">
                <p class="light-black text-justify">En la industria alimentaria, farmacéutica o cosmética, <b>la
                        dosificación precisa de ingredientes líquidos o en polvo</b> es crucial para garantizar la
                    calidad del
                    producto final, reducir el desperdicio de materias primas y asegurar la repetibilidad de recetas.
                    <br><br>
                    Este sistema automatizado permite controlar la cantidad exacta de cada componente en mezclas como:
                </p>
                <ul>
                    <li>Bebidas (jugos, salsas, bebidas energéticas)</li>
                    <li>Aderezos y cremas</li>
                    <li>Polvos (mezclas para hornear, suplementos, harinas fortificadas)</li>
                    <li>Jarabes o concentrados</li>
                </ul>
                <p class="light-black text-justify">Gracias al uso de <b> celdas de carga, válvulas o bombas controladas
                        por
                        PLC</b> y una interfaz de usuario amigable, se logra un proceso preciso, rápido y repetible.
                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Pesaje inicial con celdas de carga</b> <br>
                        Se coloca el carril de llenado sobre una o varias <b>celdas de carga</b> <a
                            href="https://tienda.logicbus.com.mx/FSH04521_p_35079.html">FSH04521</a>. La celda se
                        conecta
                        al módulo <a href="https://tienda.logicbus.com.mx/FBS-1LC_p_3143.html">FBs-1LC</a>
                        incorporado
                        al <b>PLC Fatek</b> <a
                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac">FBs-60MCR2-AC</a>.
                        El controlador finalmente se
                        conecta a
                        una HMI <a href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html">P5070NB</a> mediante
                        su
                        tarjeta Ethernet <a href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html">FBs-CBEH(8)</a>
                        para visualizar los datos y operar el
                        PLC (usando un switch Ethernet <a
                            href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a>).
                        <br>
                        Estas celdas detectan con alta precisión el peso del recipiente vacío y posteriormente <b>
                            cada
                            incremento de peso conforme se agregan los ingredientes.</b>

                    </li>
                    <li class="mb-3"><b>Inicio del ciclo de dosificación automática</b> <br>
                        El operario selecciona la receta deseada desde una pantalla HMI <a
                            href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html">P5070NB</a>, donde están
                        predefinidos los pesos exactos para cada ingrediente. <br>
                        El sistema da la orden al <b>PLC Fatek</b> <a
                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac">FBs-60MCR2-AC</a>
                        para iniciar la dosificación en el
                        orden
                        correcto. Este controla:
                        <ul>
                            <li>Válvulas solenoides (si se usan tanques presurizados o gravedad)</li>
                            <li>Bombas peristálticas o dosificadoras (si se manejan líquidos viscosos o aditivos en
                                baja
                                cantidad)
                            </li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Control preciso por peso en tiempo real:</b> <br>
                        A medida que fluye cada ingrediente hacia el recipiente, el PLC <a
                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac">FBs-60MCR2-AC</a>
                        <b>lee en
                            tiempo
                            real
                            los datos de la celda de carga</b> <a
                            href="https://tienda.logicbus.com.mx/FSH04521_p_35079.html">FSH04521</a>.
                        Cuando el peso alcanza el valor exacto programado (ej. 1.788 kg de agua, 0.2 kg de jarabe,
                        0.012
                        kg de CO2 para gasificación), <b>el flujo se detiene automáticamente.</b> <br>
                        Este proceso se repite para cada ingrediente hasta completar toda la receta.
                    </li>
                    <li class="mb-3"><b>Verificación final del lote</b>
                        <br>
                        Una vez completada la dosificación de todos los ingredientes, el sistema <b> verifica que el
                            peso
                            total coincida con el previsto</b> (por ejemplo, 2 kg). Si hay alguna desviación, el
                        sistema
                        puede:
                        <ul>
                            <li>Solicitar confirmación manual del operario.</li>
                            <li>Registrar el lote como no conforme.</li>
                            <li>Detener el proceso para evitar errores aguas abajo.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Visualización, monitoreo y registro de datos</b>
                        <br>
                        Toda la operación se monitorea desde un panel HMI <a
                            href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html">P5070NB</a> o una plataforma
                        como un <a
                            href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada">SCADA</a>
                        (usando
                        un switch Ethernet <a
                            href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a>),
                        que:
                        <ul>
                            <li>Muestra el progreso del lote y cada paso de dosificación.</li>
                            <li>Genera reportes automáticos con fecha, hora, lote, operador y pesos registrados.
                            </li>
                            <li>Permite auditoría para trazabilidad e inocuidad alimentaria.</li>
                        </ul>
                    </li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema </p>
                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Ahorro de insumos:</b> Cada lote tiene siempre las mismas proporciones,
                        garantizando uniformidad.</li>
                    <li class="mb-3"><b>Mejora de calidad y sabor:</b>La detección temprana de fallos permite
                        planificar paradas técnicas, evitando interrupciones inesperadas.</li>
                    <li class="mb-3"><b>Repetibilidad total:</b> Las recetas pueden ejecutarse con exactitud, incluso en
                        distintos turnos o plantas.</li>
                    <li class="mb-3"><b>Menor desperdicio:</b> Si el lote no es conforme, se detecta antes de que se
                        mezcle o procese más adelante.</li>
                    <li class="mb-3"><b>Datos para trazabilidad:</b> Cada dosificación queda registrada, lo cual es
                        esencial para normas como ISO, HACCP o FDA.</li>
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
                    excitación para celda de carga de 5V. Alimentación de 24 Vdc</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-1LC_p_3143.html"
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
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/software/scada_cimon_.jpg" alt="SCADA"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">SCADA</p>
                <p>SCADA se encarga de recopilar datos en tiempo real de diversos dispositivos y sensores ubicados en
                    una planta o instalación industrial, como válvulas, motores, sensores de temperatura, entre otros.
                </p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada"
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
                    <iframe src="https://www.youtube.com/embed/j2_IDnYDpkQ?si=JHGasN3zceJ-RooE"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/EN-0RhMm7P8?si=cfuA0DVYt3fTA3d0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/q0M43g7Dpk0?si=DJGzl5l1ua0EkUi_"
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
                    href="https://www.logicbus.com.mx/blog/opc-ua-para-la-transferencia-de-datos-en-tiempo-real-desde-la-planta-de-produccion/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/06/OPC-UA-para-la-transferencia-de-datos-en-tiempo-real-desde-la-planta-de-produccion-2048x1024.jpg"
                        alt="OPC UA para la transferencia de datos en tiempo real desde la planta de producción"
                        width="100%">
                    OPC UA para la transferencia de datos en tiempo real desde la planta de producción
                </a>

            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/optimizacion-del-rendimiento-del-ahumadero-con-registradores-de-datos/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/06/Optimizacion-del-rendimiento-del-ahumadero-con-registradores-de-datos.jpg"
                        alt="Aprovechando los registradores de datos para una monitorización eficiente de la refrigeración en la industria alimentaria"
                        width="100%">
                    Optimización del rendimiento del ahumadero con registradores de datos
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/carros-de-reparto-roboticos-en-la-educacion-un-caso-de-estudio-en-riverstone-academy/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/06/Carros-de-Reparto-Roboticos-en-la-Educacion-Un-Caso-de-Estudio-en-Riverstone-Academy.jpg"
                        alt="Mantenimiento Predictivo en Motores y Equipos Industriales" width="100%">
                    Carros de Reparto Robóticos en la Educación: Un Caso de Estudio en Riverstone Academy
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/control-remoto-de-instrumentos-de-medicion/" target="_blank"
                    rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/05/Control-Remoto-de-Instrumentos-de-Medicion.png"
                        alt="Dashboards e indicadores para la mejora de la eficiencia en la Gestión de Mantenimiento Hospitalario"
                        width="100%">
                    Control Remoto de Instrumentos de Medición: SCPI y Comunicación por Ethernet
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
                        alt="Automatización de Dosificación de Ingredientes" width="100%">
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
        <!-- BEGIN Podio web form -->
        <div class="podio-webform-container"></div>
        <div align="center">
            <script src="https://podio.com/webforms/14800971/993400.js"></script>
            <script type="text/javascript">
                _podioWebForm.render("993400")
            </script>
            <noscript>
                <a href="https://podio.com/webforms/14800971/993400" target="_blank">Por favor, rellena el
                    formulario</a>
            </noscript>
        </div>
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