<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento Predictivo en Motores y Equipos Industriales | Logicbus</title>
    <meta name="description"
        content="Optimiza la producción con mantenimiento predictivo: anticipa fallas, evita paros costosos y mejora la eficiencia monitoreando variables críticas en equipos industriales.">
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
                <li class="breadcrumb-item active" aria-current="page">Mantenimiento Predictivo en Motores y Equipos
                    Industriales</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt="Mantenimiento Predictivo en Motores y Equipos Industriales" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile"
            alt="Mantenimiento Predictivo en Motores y Equipos Industriales" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Mantenimiento Predictivo en Motores y Equipos
                Industriales</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Mantenimiento-Predictivo-en-Motores-y-Equipos-Industriales.png" alt="Diagrama"
                    width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../national-control-devices-ncd"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/ncd.webp" alt="national-control-devices-ncd"
                            width="200px"></a>
                    <a href="../cimon-software-scada-industrial"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/cimon.webp" alt="CIMON" width="200px"></a>
                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                            alt="fatek" width="200px"></a>
                    <a href="../cincoze"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cincoze.webp"
                            alt="cincoze" width="200px"></a>
                    <a href="../taicenn-equipo-industrial"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/taicenn.webp" alt="taicenn" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">El mantenimiento predictivo es una estrategia clave para la
                    industria moderna, ya que permite anticipar fallas antes de que ocurran, evitando paros de
                    producción costosos y mejorando la eficiencia operativa. A través del monitoreo continuo de
                    variables críticas como vibraciones, temperatura, corriente eléctrica y consumo energético, es
                    posible identificar comportamientos anómalos en motores, bombas, compresores, transportadores y
                    otros equipos industriales, permitiendo intervenciones precisas y oportunas.<br><br>
                    Este enfoque no solo reduce los costos de reparación, sino que también prolonga la vida útil de los
                    activos, mejora la seguridad en planta y optimiza la planificación del mantenimiento basado en
                    condiciones reales de operación.
                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Monitoreo de Parámetros Críticos:</b>
                        <ul>
                            <li>Se <b>instalan sensores</b> de vibración como <a
                                    href="https://tienda.logicbus.com.mx/PR55-61E_p_33049.html">PR55-61E</a> y
                                <b>acelerómetros</b> como el <a
                                    href="https://tienda.logicbus.com.mx/PR49-24D_p_27719.html">PR49-24D</a>
                                directamente en motores, cajas reductoras o rodamientos para detectar desequilibrios,
                                desalineaciones o desgaste mecánico progresivo.
                            </li>
                            <li><b>Sensores de temperatura</b> como <a
                                    href="https://tienda.logicbus.com.mx/PR55-61E_p_33049.html">PR55-61E</a> permiten
                                monitorear el calor generado en bobinas,
                                cojinetes y zonas críticas del equipo, detectando sobrecalentamientos que podrían
                                derivar en fallas.</li>
                            <li><b>Medidores de corriente eléctrica</b> como <a
                                    href="https://tienda.logicbus.com.mx/PR55-26CPWR_p_34291.html">PR55-26C_PWR</a>
                                analizan el consumo de energía y
                                detectan sobrecargas, picos de arranque o variaciones en el rendimiento que indiquen un
                                problema incipiente.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Adquisición y Procesamiento de Datos:</b>
                        <ul>
                            <li>Todos los datos recogidos por los sensores son transmitidos a un <b>Gateway (para
                                    adquisición de datos y muestreo)</b> como <a
                                    href="https://tienda.logicbus.com.mx/NCD-Edge-CR_p_36101.html">NCD-Edge-CR</a> que
                                los procesa en tiempo real.</li>
                            <li>Posteriormente, esta información es transferida a un sistema SCADA como <a
                                    href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html">Ultimate
                                    Access
                                    Web</a> y del mismo enviar los comandos a un <b>PLC (Controlador Lógico
                                    Programable)</b>
                                como
                                <a
                                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-40mcr2-ac">FBs-40MCR2-AC</a>
                                para control automático ó a una <b>computadora industrial</b> como <a
                                    href="https://tienda.logicbus.com.mx/DX-1100-R10_p_23239.html">DX-1100-R10</a>
                                para análisis y registro histórico.
                            </li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Análisis y Detección de Fallas:</b>
                        <ul>
                            <li>A través de un <b>Panel PC Industrial</b> como <a
                                    href="https://www.logicbus.com.mx/pdf/290/TPC-DCM150A.pdf">TPC-DCM150A1</a>, se usan
                                programas con algoritmos
                                de mantenimiento predictivo y técnicas de análisis de tendencias, con los cuales el
                                sistema identifica comportamientos anormales o patrones que preceden a una falla.</li>
                            <li>Mediante un <b>PLC</b> como <a
                                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-40mcr2-ac">FBs-40MCR2-AC</a>,
                                en caso de que una variable sobrepase los límites
                                operativos definidos, se generan alertas automáticas para que el equipo de mantenimiento
                                intervenga antes de que ocurra una parada crítica.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Gestión de Mantenimiento y Reportes:</b>
                        <ul>
                            <li>Un sistema SCADA como <a
                                    href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html">Ultimate
                                    Access
                                    Web</a> puede ser implementado como un <b>software
                                    especializado de mantenimiento predictivo</b> para planificar las tareas de
                                mantenimiento de
                                forma inteligente, basándose en los datos reales de funcionamiento en lugar de
                                calendarios fijos.</li>
                            <li>El sistema SCADA puede integrarse con plataformas CMMS (Computerized Maintenance
                                Management System) para la generación automática de órdenes de trabajo, programación de
                                paros técnicos y trazabilidad de mantenimiento histórico (usando un protocolo como
                                OPC/UA).</li>
                        </ul>
                    </li>
                </ol>
                <p class="text-center light-black font-weight-bold">Beneficios </p>
                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Reducción de Costos por Reparaciones Inesperadas:</b> Al detectar problemas de
                        forma anticipada, se evitan reparaciones de emergencia que suelen implicar mayores costos y
                        tiempos muertos extensos.</li>
                    <li class="mb-3"><b>Aumento en la Vida Útil de los Equipos:</b>El monitoreo constante y el
                        mantenimiento oportuno reducen el desgaste prematuro y evitan daños estructurales graves.</li>
                    <li class="mb-3"><b>Mayor Eficiencia Energética:</b> Identificar motores ineficientes o
                        sobredimensionados ayuda a optimizar el consumo de energía.
                    </li>
                    <li class="mb-3"><b>Disponibilidad Operacional Mejorada:</b> Los equipos tienen mayor tiempo de
                        funcionamiento continuo, lo que mejora la productividad global de la planta.</li>
                    <li class="mb-3"><b>Trazabilidad y Cumplimiento Normativo:</b> El registro automatizado de datos y
                        eventos facilita auditorías técnicas, inspecciones de seguridad y cumplimiento con normativas
                        industriales.</li>
                    <li class="mb-3"><b>Planificación Inteligente:</b> Permite a los responsables de mantenimiento tomar
                        decisiones basadas en datos, optimizando recursos humanos y materiales.
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
                <img src="https://tienda.logicbus.com.mx/assets/images/286/pr55-61e.jpg" alt="PR55-61E" width="150px">
                <p class="font-weight-bold mt-2 mb-0">PR55-61E</p>
                <p>Sensor de temperatura y vibración de 1 canal industrial inalámbrico IoT, rango de vibración ±16g
                    (Ancho de banda 1.56Hz~6.4 kHz), rango de temperatura -40 a 125°C, alcance de señal 2 millas, IP65,
                    usa 6 pilas AA (no incluidas).</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PR55-61E_p_33049.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/286/PR49-24D.jpg" alt="PR49-24D" width="150px">
                <p class="font-weight-bold mt-2 mb-0">PR49-24D </p>
                <p>Acelerómetro inalámbrico de largo alcance IoT Gyro Magneto y sensor de temperatura. </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PR49-24D_p_27719.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/286/pr55-61e.jpg" alt="PR55-61E" width="150px">
                <p class="font-weight-bold mt-2 mb-0">PR55-61E </p>
                <p>Sensor de temperatura y vibración de 1 canal industrial inalámbrico IoT, rango de vibración ±16g
                    (Ancho de banda 1.56Hz~6.4 kHz), rango de temperatura -40 a 125°C, alcance de señal 2 millas, IP65,
                    usa 6 pilas AA (no incluidas).</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PR55-61E_p_33049.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/286/pr55-4a_200a.jpg" alt="PR55-26C_PWR"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">PR55-26C_PWR </p>
                <p>Sensor de Monitorización de Corriente Alterna Inalámbrico IoT Industrial de 3 Canales </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PR55-26CPWR_p_34291.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/286/ncd-edge-cr.jpg" alt="NCD-Edge-CR"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">NCD-Edge-CR</p>
                <p>Gateway Empresarial IIoT </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/NCD-Edge-CR_p_36101.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/309/ultimate-access-web.jpg"
                    alt="Ultimate Access Web " width="150px">
                <p class="font-weight-bold mt-2 mb-0">Ultimate Access Web </p>
                <p>Ultime Access Web Servidor web basado en HTML 5</p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html" target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/FBs-40MCJ2-AC.jpg" alt="FBs-40MCR2-AC"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBs-40MCR2-AC </p>
                <p>PLC Industrial con 24 entradas digitales de 24Vdc con velocidad de 200, 20, 5 KHz y 0.47ms, 16
                    salidas de relevador, 1 puerto RS232 o USB (Expandible a 5 puertos), E/S expandibles hasta 256,
                    alimentacion de 100 a 240Vac y RTC integrado
                </p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-40mcr2-ac"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/272/DX-1100-R10.jpg" alt="DX-1100-R10 "
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">DX-1100-R10 </p>
                <p>Procesadores Intel® Xeon® y Core™ de novena y octava generación, estación de trabajo resistente
                    compacta, modular y de rendimiento extremo. </p>
                <a class="button button-circle-orange" href="http://tienda.logicbus.com.mx/DX-1100-R10_p_23239.html"
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
                    <iframe src="https://www.youtube.com/embed/-YfaqOYb4cI?si=nELGzDutZL6IX3pF"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/gt-yR2UcBsI?si=It05Y3UbVM6jKOrp"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/wAldLaqY7AU?si=QZAu3xWgTqUbT4jv"
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
                    href="https://www.logicbus.com.mx/blog/como-el-software-de-madgetech-simplifica-el-analisis-de-datos-para-todas-las-industrias/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/04/Como-el-Software-de-MadgeTech-Simplifica-el-Analisis-de-Datos-para-Todas-las-Industrias-_1_-2048x1024.webp"
                        alt="Cómo el Software de MadgeTech Simplifica el Análisis de Datos para Todas las Industrias"
                        width="100%">
                    Cómo el Software de MadgeTech Simplifica el Análisis de Datos para Todas las Industrias
                </a>

            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/aprovechando-los-registradores-de-datos-para-una-monitorizacion-eficiente-de-la-refrigeracion-en-la-industria-alimentaria/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/04/Aprovechando-los-registradores-de-datos-para-una-monitorizacion-eficiente-de-la-refrigeracion-en-la--2048x1024.webp"
                        alt="Aprovechando los registradores de datos para una monitorización eficiente de la refrigeración en la industria alimentaria"
                        width="100%">
                    Aprovechando los registradores de datos para una monitorización eficiente de la refrigeración en la
                    industria alimentaria
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/mantenimiento-predictivo-en-motores-y-equipos-industriales/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/04/Mantenimiento-Predictivo-en-Motores-y-Equipos-Industriales-2048x1024.webp"
                        alt="Mantenimiento Predictivo en Motores y Equipos Industriales" width="100%">
                    Mantenimiento Predictivo en Motores y Equipos Industriales
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/dashboards-e-indicadores-para-la-mejora-de-la-eficiencia-en-la-gestion-de-mantenimiento-hospitalario-2/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/04/Dashboards-e-indicadores-para-la-mejora-de-la-eficiencia-en-la-Gestion-de-Mantenimiento-Hospitalario-2048x1024.webp"
                        alt="Dashboards e indicadores para la mejora de la eficiencia en la Gestión de Mantenimiento Hospitalario"
                        width="100%">
                    Dashboards e indicadores para la mejora de la eficiencia en la Gestión de Mantenimiento Hospitalario
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
                        alt="Monitoreo y Control de Máquinas CNC" width="100%">
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