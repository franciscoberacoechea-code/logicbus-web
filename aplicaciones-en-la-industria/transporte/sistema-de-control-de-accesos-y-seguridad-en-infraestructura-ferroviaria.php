<?php
require("../../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria | Logicbus</title>
    <meta name="description" content="Para proteger las instalaciones ferroviarias, este sistema asegura un control de acceso restringido, autenticación avanzada, monitoreo en tiempo real, y detección de intrusos.">
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
                <li class="breadcrumb-item active" aria-current="page">Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/ferroviaria.png" alt="Banner" alt="Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria" class="hide-mobile">
        <img src="../img/ferroviaria-mobile.webp" alt="Banner-mobile" alt="Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="title white font-weight-bold mb-0">Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4 text-center">
                <img src="../img/Sistema-de-Control-de-Accesos-y-Seguridad-en-Infraestructura-Ferroviaria.webp" alt="Diagrama" width="100%">
                <h3 class="blue mt-5 font-weight-bold">Marcas recomendadas</h3>
                <div class="d-flex justify-content-center flex-wrap">
                    <a href="../../litum"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/litum.webp" alt="Litum" width="200px"></a>
                    <a href="../../blyott"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/blyott.webp" alt="Blyott" width="200px"></a>
                    <a href="../../rfid-inc"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/rfid.webp" alt="RFID Inc." width="200px"></a>
                    <a href="../../fatek"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/fatek.webp" alt="Fatek" width="200px"></a>
                    <a href="../../davo-lin"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/davo-lin.webp" alt="Davo Lin" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">Para proteger las instalaciones ferroviarias, este sistema asegura un control de acceso restringido, autenticación avanzada, monitoreo en tiempo real, y detección de intrusos. Los dispositivos de acceso se integran mediante una red de comunicación segura, permitiendo la supervisión centralizada y automatización de barreras de seguridad.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Control de Acceso mediante Identificación RFID y Rastreo de Personal</b>: Los empleados y visitantes son identificados mediante tarjetas RFID 800-0224-01 proporcionadas por <b>RFID Inc.</b>. Para mayor seguridad, los dispositivos de rastreo <a href="../../litum" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">LITUM</a> <b>Real-Time Location System (RTLS)</b>, basados en tecnología RFID, permiten monitorear la ubicación de personal autorizado en tiempo real. Los tags RFID, al pasar por zonas de acceso controlado, se autentican mediante las antenas de RFID.</li>
                    <li class="mb-3"><b>Integración de Teclados Industriales para Control Manual</b>: Los <b>teclados numéricos industriales</b>, por ejemplo el <a href="https://tienda.logicbus.com.mx/D-8203-USB_p_34077.html" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">D-8203-USB</a> de Davo permiten ingresar manualmente códigos de acceso o realizar operaciones de control en ubicaciones específicas. Estos teclados son resistentes a ambientes industriales y ofrecen una opción adicional para la autenticación manual en puertas o áreas restringidas.</li>
                    <li class="mb-3"><b>Red de Comunicación Segura</b>: La comunicación de datos de acceso, cámaras, y sensores se centraliza en una red robusta a través del <b>Switch Industrial</b> <a href="https://tienda.logicbus.com.mx/IES6300-8GT2GS2HS-2DI2DO-2P48_p_36631.html" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">IES6300-8GT2GS2HS-2DI2DO-2P48</a> <b>de 3onedata</b>. Este switch garantiza la conexión segura y continua de todos los dispositivos y es adecuado para entornos ferroviarios, con funciones de redundancia que aseguran que la red no se interrumpa.</li>
                    <li class="mb-3"><b>Monitoreo de Cámaras de Seguridad y Sensores de Intrusión</b>: Las cámaras IP, se integran en el sistema de red para monitorear visualmente las áreas restringidas. Los sensores de presencia térmica detectan cualquier movimiento no autorizado en zonas de acceso crítico y activan una alarma que alerta al personal de seguridad en caso de intrusión.</li>
                    <li class="mb-3"><b>Automatización de Puertas y Barreras de Seguridad</b>: Se utiliza el módulo <a href="https://tienda.logicbus.com.mx/FBS-DAP-BR_p_3444.html" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">FBS-DAP-BR</a> de <b>Fatek</b> para controlar puertas y barreras automáticas. Este controlador permite abrir o cerrar accesos físicos basándose en la autenticación previa del sistema RFID o el teclado de <b>Davo</b>, permitiendo solo el paso de personal autorizado.
                    <li class="mb-3"><b>Gestión y Monitoreo Centralizado con Blyott</b>: Un sistema más compacto y seguro al igual se puede gestionar en la plataforma de <a href="../../blyott" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">Blyott</a>, que permite visualizar la ubicación de personal, monitorear alertas de intrusión, y mantener un registro de los eventos de acceso. Blyott permite generar reportes de acceso, realizar auditorías de seguridad y enviar alertas automáticas al personal correspondiente.</li>
                </ol>
                <p class="text-center light-black font-weight-bold">Proceso Paso a Paso</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Autenticación RFID y Rastreo en Tiempo Real</b>: Los empleados pasan su tarjeta <b>RFID</b> en los lectores 800-0232-31-PJ de RFID. Otra forma de autentificar al usuario es por medio del sistema de <a href="../../litum" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">LITUM</a> RTLS que identifica y rastrea su ubicación en tiempo real para supervisar su desplazamiento dentro de las instalaciones.</li>
                    <li class="mb-3"><b>Entrada mediante Teclado Industrial</b>: En ubicaciones específicas, el personal autorizado puede ingresar un código en el <b>teclado numérico industrial</b> <a href="https://tienda.logicbus.com.mx/D-8203-USB_p_34077.html" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">D-8203-USB</a> de <b>Davo</b> para acceder manualmente a ciertas áreas, proporcionando un nivel adicional de seguridad.</li>
                    <li class="mb-3"><b>Transmisión de Datos</b>: Todos los datos de cámaras, sensores, y dispositivos de acceso se transmiten a través del Switch Industrial <a href="https://tienda.logicbus.com.mx/IES6300-8GT2GS2HS-2DI2DO-2P48_p_36631.html" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">IES6300-8GT2GS2HS-2DI2DO-2P48</a> de <b>3onedata</b>, asegurando una conexión continua y segura.</li>
                    <li class="mb-3"><b>Detección de Intrusiones</b>: Por medio de sensores de presencia térmica, se detecta cualquier movimiento no autorizado y envían una alerta automática a la plataforma de <a href="../../blyott" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">Blyott</a>, donde el evento se registra para su monitoreo.</li>
                    <li class="mb-3"><b>Automatización de Barreras</b>: El módulo <a href="https://tienda.logicbus.com.mx/FBS-DAP-BR_p_3444.html" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">FBS-DAP-BR</a> de <b>Fatek</b> junto con su PLC controla las puertas y barreras en función de los datos de acceso autorizados, permitiendo el paso únicamente a personal con autorización.</li>
                    <li class="mb-3"><b>Monitoreo Centralizado y Registro de Eventos</b>: Otro sistema similar permite que todos los datos de acceso, alarmas y eventos se gestionan y registren en <a href="../../blyott" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">Blyott</a>, permitiendo una supervisión en tiempo real y la generación de reportes de acceso y seguridad.</li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas del Sistema:</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Monitoreo en Tiempo Real</b>: El sistema LITUM RTLS permite ubicar a cada individuo en tiempo real, ideal para instalaciones ferroviarias donde el seguimiento preciso es fundamental.
                    <li class="mb-3"><b>Autenticación Flexible y Seguridad Adicional</b>: La integración de RFID, teclados industriales y control mediante PLC permite un acceso controlado y versátil, adaptado a diferentes necesidades de seguridad.
                    <li class="mb-3"><b>Red de Comunicación Confiable</b>: Los switches <a href="https://tienda.logicbus.com.mx/IES6300-8GT2GS2HS-2DI2DO-2P48_p_36631.html" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">IES6300-8GT2GS2HS-2DI2DO-2P48</a> de <b>3onedata</b> mantienen una red robusta para la transmisión continua de datos y video.
                    <li class="mb-3"><b>Gestión Centralizada y Alertas Inmediatas</b>: Blyott permite supervisar y documentar todos los eventos, facilitando respuestas rápidas a situaciones críticas y manteniendo registros detallados de acceso.
                    <li class="mb-3"><b>Automatización Inteligente de Accesos</b>: El control mediante el módulo <a href="https://tienda.logicbus.com.mx/FBS-DAP-BR_p_3444.html" class="blue link-orange font-weight-bold" target="_blank" rel="noopener noreferrer">FBS-DAP-BR</a> garantiza que el acceso se restringe a personal autorizado en áreas específicas.
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
                <img src="https://tienda.logicbus.com.mx/assets/images/16/IES6300-8GT2GS2HS-2DI2DO-2P48.jpg" alt="IES6300-8GT2GS2HS-2DI2DO-2P48" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IES6300-8GT2GS2HS-2DI2DO-2P48</p>
                <p>Switch Industrial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/IES6300-8GT2GS2HS-2DI2DO-2P48_p_36631.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-dap-animado.gif" alt="FBS-DAP-BR" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBS-DAP-BR</p>
                <p>Panel de acceso a datos, lector y programador de tarjetas RFID para PLC serie FBs</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-DAP-BR_p_3444.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-40mcr2-ac.png" alt="FBs-40MCR2-AC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBs-40MCR2-AC</p>
                <p>PLC Industrial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-40mcr2-ac" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/298/lbd-2988203.jpg" alt="D-8203-USB" width="150px">
                <p class="font-weight-bold mt-2 mb-0">D-8203-USB</p>
                <p>Teclado numérico de acero inoxidable 304 con protección IP65</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/D-8203-USB_p_34077.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/p5070n.jpg" alt="P5070S" width="150px">
                <p class="font-weight-bold mt-2 mb-0">P5070S</p>
                <p>Pantalla HMI Avanzada de Fatek</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-pantallas-hmi-pantallas-hmi-con-plc-p5070s" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/FYvHdbtocxI?si=BevW-tVnC4S8tIsz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/P5yT_M-XIdk?si=c7OdCynj-8m_Bed1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/IXmmXJJ44E4?si=PdI_tqxr2gnUDiWy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sistema-de-control-de-accesos-y-seguridad-en-infraestructura-ferroviaria-proteccion-monitoreo-y-automatizacion-centralizada/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Sistema-de-Control-de-Accesos-y-Seguridad-en-Infraestructura-Ferroviaria-Proteccion-Monitoreo-y-Automatizacion-Centralizada.png" alt="Blog 5" width="100%">
                    Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria: Protección, Monitoreo y Automatización Centralizada
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/mantenimiento-predictivo-y-monitoreo-en-tiempo-real-en-la-industria-ferroviaria/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Mantenimiento-Predictivo-y-Monitoreo-en-Tiempo-Real-en-la-Industria-Ferroviaria.png" alt="Blog 1" width="100%">
                    Mantenimiento Predictivo y Monitoreo en Tiempo Real en la Industria Ferroviaria
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sistema-de-saneamiento-ferroviario-de-alta-velocidad-2/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/11/bbnn-16.png" alt="Blog 3" width="100%">
                    Sistema de saneamiento ferroviario de alta velocidad Rev.
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
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
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria" width="100%">
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