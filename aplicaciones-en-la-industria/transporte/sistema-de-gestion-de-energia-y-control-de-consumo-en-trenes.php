<?php
require("../../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Energía y Control de Consumo en Trenes | Logicbus</title>
    <meta name="description" content="Esta solución permite gestionar y optimizar el consumo energético de los trenes, proporcionando visibilidad en tiempo real de los datos de energía.">
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
                <li class="breadcrumb-item active" aria-current="page">Sistema de Gestión de Energía y Control de Consumo en Trenes</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/ferroviaria.png" alt="Banner" alt="Sistema de Gestión de Energía y Control de Consumo en Trenes" class="hide-mobile">
        <img src="../img/ferroviaria-mobile.webp" alt="Banner-mobile" alt="Sistema de Gestión de Energía y Control de Consumo en Trenes" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="title white font-weight-bold mb-0">Sistema de Gestión de Energía y Control de Consumo en Trenes</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="../img/Sistema-de-Gestion-de-Energia-y-Control-de-Consumo-en-Trenes.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../../seneca"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/seneca.webp" alt="Seneca" width="200px"></a>
                    <a href="../../cincoze"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/cincoze.webp" alt="Cincoze" width="200px"></a>
                    <a href="../../fatek"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/fatek.webp" alt="Fatek" width="200px"></a>
                    <a href="../../davo-lin"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/davo-lin.webp" alt="Davo Lin" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">Esta solución permite gestionar y optimizar el consumo energético de los trenes, proporcionando visibilidad en tiempo real de los datos de energía, automatizando el control de sistemas de alto consumo y emitiendo alertas cuando se superan los límites de eficiencia. La red de control y monitoreo se centraliza en una plataforma, permitiendo a los operadores ajustar parámetros de energía para mejorar la eficiencia operativa.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Monitoreo en Tiempo Real del Consumo Energético</b>: Para la monitorización del consumo de energía de los sistemas eléctricos a bordo, se emplean módulos de monitoreo de potencia <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/R203-2-H_p_36404.html" target="_blank" rel="noopener noreferrer">R203</a> de <b>Seneca</b>. Estos dispositivos están diseñados para registrar el consumo en tiempo real y enviar estos datos a un sistema de control central. Cada módulo <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/R203-2-H_p_36404.html" target="_blank" rel="noopener noreferrer">R203</a> está conectado a diferentes subsistemas del tren (HVAC, iluminación, motores auxiliares), permitiendo un análisis detallado del consumo.</li>
                    <li class="mb-3"><b>Control Centralizado y Visualización con Paneles Integrados</b>: Para la supervisión y control de la gestión energética, se utiliza una computadora industrial como las de la Serie <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/DS-1400_p_36333.html" target="_blank" rel="noopener noreferrer">DS-1400</a> de <b>Cincoze</b>. y al integrar un monitor que puede ser de <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-sistema-incorporado-convertible-modulo-de-pantalla-convertible-serie-cv-100" target="_blank" rel="noopener noreferrer">tamaño de 8.4” o hasta 24”</a> este panel permite visualizar el estado del consumo de cada sistema en una interfaz gráfica, facilitando la interpretación de datos energéticos en tiempo real y el ajuste de parámetros para optimizar la eficiencia. Los datos se almacenan localmente y pueden integrarse en sistemas de gestión más amplios.</li>
                    <li class="mb-3"><b>Automatización y Control del Consumo de Energía</b>: Un PLC <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac" target="_blank" rel="noopener noreferrer">FBs-60MCR2-AC</a> de <b>Fatek</b> se encarga de automatizar los sistemas de control de energía a bordo. Este PLC puede gestionar la iluminación, el HVAC y otros sistemas de consumo a través de programas preestablecidos, ajustando automáticamente los parámetros para reducir el consumo cuando no son necesarios (por ejemplo, atenuar las luces en horario nocturno o apagar ciertos sistemas en estaciones).</li>
                    <li class="mb-3"><b>Control Manual mediante Teclados Industriales</b>: Los operadores pueden utilizar un <b>teclado industrial</b> <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/D-8605_p_31777.html" target="_blank" rel="noopener noreferrer">D-8605</a> de <b>Davo</b> integrado en la cabina para ajustar manualmente ciertos parámetros, como encender o apagar el aire acondicionado o ajustar la iluminación. El teclado está diseñado para condiciones industriales, asegurando durabilidad y fiabilidad.</li>
                    <li class="mb-3"><b>Supervisión y Alertas de Consumo Anormal</b>: Los módulos de monitoreo remoto de <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/R203-2-H_p_36404.html" target="_blank" rel="noopener noreferrer">R203</a>, proporcionan una capa adicional de supervisión. Este controlador de gestión de energía monitorea constantemente los datos de consumo en busca de patrones de uso inusuales o picos de demanda y envía alertas al operador o al sistema central si detecta irregularidades. Estos datos se integran en el panel de la serie <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/DS-1400_p_36333.html" target="_blank" rel="noopener noreferrer">DS-1400</a> para un acceso y revisión rápida.</li>
                    <li class="mb-3"><b>Transmisión de Datos y Registro Histórico</b>: Todos los datos recogidos por los sensores y controladores se transmiten y almacenan en una base de datos centralizada en la computadora serie <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/DS-1400_p_36333.html" target="_blank" rel="noopener noreferrer">DS-1400</a> de <b>Cincoze</b> con soporte para procesadores Intel de 12va y 13va generación. Los operadores pueden acceder a informes históricos y realizar análisis de eficiencia energética a lo largo del tiempo, facilitando la identificación de oportunidades de ahorro.</li>
                </ol>
                <p class="text-center light-black font-weight-bold">Proceso Paso a Paso</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Medición del Consumo Energético</b>: Los módulos <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/R203-2-H_p_36404.html" target="_blank" rel="noopener noreferrer">R203</a> monitorean el consumo de energía en cada subsistema del tren (HVAC, motores, iluminación) en tiempo real.</li>
                    <li class="mb-3"><b>Visualización Centralizada</b>: Las computadoras de la serie <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/DS-1400_p_36333.html" target="_blank" rel="noopener noreferrer">DS-1400</a> de Cincoze recopila y muestra los datos en un monitor de tamaño de 8.4” o hasta 24” con pantalla táctil, permitiendo a los operadores tener una visión en tiempo real del consumo y realizar ajustes si es necesario.</li>
                    <li class="mb-3"><b>Automatización del Control de Energía</b>: El PLC <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac" target="_blank" rel="noopener noreferrer">FBs-60MCR2-AC</a> de Fatek ajusta automáticamente los sistemas de alto consumo en función de las condiciones del tren y las necesidades operativas, reduciendo así el gasto energético.</li>
                    <li class="mb-3"><b>Control Manual por Teclado</b>: El operador utiliza el teclado <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/D-8605_p_31777.html" target="_blank" rel="noopener noreferrer">D-8605</a> de Davo para realizar ajustes manuales cuando sea necesario, proporcionando flexibilidad para cambios inmediatos en el consumo.</li>
                    <li class="mb-3"><b>Alertas de Consumo Excesivo</b>: El <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/R203-2-H_p_36404.html" target="_blank" rel="noopener noreferrer">R203</a> detecta patrones de consumo elevados o anómalos y envía notificaciones para revisión, ayudando a mantener un consumo óptimo y a prevenir el uso excesivo de energía.</li>
                    <li class="mb-3"><b>Registro Histórico para Análisis y Mejora</b>: La computadora Cincoze <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/DS-1400_p_36333.html" target="_blank" rel="noopener noreferrer">DS-1400</a> guarda los datos de consumo a lo largo del tiempo, lo que permite realizar análisis de eficiencia y ajustar las políticas de ahorro de energía.</li>
                </ol>
            </div>
            <div class="container text-center">
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema:</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Reducción del Consumo Energético</b> La automatización del control permite optimizar el consumo en función de la demanda real, evitando el uso innecesario de energía.</li>
                    <li class="mb-3"><b>Monitoreo en Tiempo Real</b> Los datos de consumo energético son accesibles en tiempo real, facilitando ajustes rápidos y respuestas inmediatas a condiciones inusuales.</li>
                    <li class="mb-3"><b>Alertas Preventivas</b> Las notificaciones en caso de consumo elevado permiten al personal tomar decisiones antes de que se conviertan en problemas operativos.</li>
                    <li class="mb-3"><b>Flexibilidad de Control</b> La posibilidad de ajustar manualmente los parámetros con el teclado Davo permite a los operadores intervenir en situaciones especiales.</li>
                    <li class="mb-3"><b>Análisis Histórico y Mantenimiento Predictivo</b> La recopilación de datos históricos facilita la implementación de estrategias de mantenimiento predictivo y de ahorro de energía.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/44/r203-2-h.jpg" alt="R203-2-H" width="150px">
                <p class="font-weight-bold mt-2 mb-0">R203-2-H</p>
                <p>Módulo de monitoreo de potencia</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/R203-2-H_p_36404.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/272/ds-1400.jpg" alt="DS-1400" width="150px">
                <p class="font-weight-bold mt-2 mb-0">DS-1400</p>
                <p>Computadora industrial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/DS-1400_p_36333.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/CV-W124R-P2002-i5-8G-64G-GST120-2.jpg" alt="Monitor Industrial" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Monitor Industrial</p>
                <p>Módulo de pantalla convertible (Serie CV-100)</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-sistema-incorporado-convertible-modulo-de-pantalla-convertible-serie-cv-100" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-60mcr2-ac.jpg" alt="FBs-60MCR2-AC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBs-60MCR2-AC</p>
                <p>PLC</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-60mcr2-ac" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/LBD-2988605-1.jpg" alt="D-8605" width="150px">
                <p class="font-weight-bold mt-2 mb-0">D-8605</p>
                <p>Teclado industrial en español</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/D-8605_p_31777.html" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/zL-v95miDDQ?si=mQYWIW5BxNijNzbw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/q2IxuG8huJ8?si=lJy10CdEsl5DQVXP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/abvBjQr_nL4?si=itMdFpWZvcDf34y1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/optimizacion-energetica-en-trenes-la-clave-para-un-futuro-sostenible/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Optimizacion-Energetica-en-Trenes-La-Clave-para-un-Futuro-Sostenible.png" alt="Blog 6" width="100%">
                    Optimización Energética en Trenes: La Clave para un Futuro Sostenible
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/iot-y-comunicacion-en-los-nuevos-trenes-de-mexico-la-conectividad-del-futuro/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/IoT-y-Comunicacion-en-los-Nuevos-Trenes-de-Mexico-La-Conectividad-del-Futuro.png" alt="Blog 5" width="100%">
                    IoT y Comunicación en los Nuevos Trenes de México: La Conectividad del Futuro
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/mantenimiento-predictivo-y-monitoreo-en-tiempo-real-en-la-industria-ferroviaria/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Mantenimiento-Predictivo-y-Monitoreo-en-Tiempo-Real-en-la-Industria-Ferroviaria.png" alt="Blog 1" width="100%">
                    Mantenimiento Predictivo y Monitoreo en Tiempo Real en la Industria Ferroviaria
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sistema-de-saneamiento-ferroviario-de-alta-velocidad-2/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/11/bbnn-16.png" alt="Blog 3" width="100%">
                    Sistema de saneamiento ferroviario de alta velocidad Rev.
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
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
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="Sistema de Gestión de Energía y Control de Consumo en Trenes" width="100%">
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