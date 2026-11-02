<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ICP-DAS | Soluciones IoT | Logicbus</title>
    <meta name="description"
        content="Soluciones en: IIoT · Fábricas inteligentes · Manufactura inteligente · Gestión energética · Automatización de edificios · Agricultura inteligente · Transporte inteligente">
    <meta name="keywords"
        content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, icp das, icp-das, icpdas México, icp das mexico, icp das guadalajara, m-7000, Módulos Analógicos, Módulos Digitales, I-7000, Módulos Analógicos, Módulos Digitales, ET-7000, ódulos E/S Digitales y Análogas, Tm-7000, TM Tiny, Zigbee, Daq Wifi, Eip, Módulos EtherNet/IP, controladores de E/S remotos avanzados, módulos de E/S distribuidos, placas de adquisición de datos de E/S, daq, data aquisicion, adquisicion de datos">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $carrusel_productos; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        /* Barra */
        #leftBar {
            display: none;
        }

        /* Scroll */
        body,
        html {
            overflow-x: hidden;
            max-width: 100%;
        }

        /* Videos */
        .video-container {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #000;
            width: 100%;
        }

        /* Imagen */
        .video-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: none;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        /* Iframe */
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Boton */
        .video-container .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Triangulo */
        .video-container .play-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 54%;
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 12px 0 12px 20px;
            border-color: transparent transparent transparent white;
        }

        /* Hover */
        @media (hover: hover) {
            .video-container:hover img {
                opacity: 1;
            }

            .video-container:hover .play-button {
                background-color: var(--lb-accent);
                transform: translate(-50%, -50%) scale(1.1);
            }
        }

        .btn-wsp {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            padding: 0 !important;
            text-decoration: none !important;
        }

        .btn-wsp .icono {
            margin: 0 !important;
            padding: 0 !important;
            line-height: 1 !important;
            display: block !important;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3" id="subir">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">ICP-DAS</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <img loading="lazy" src="https://www.logicbus.com.mx/images/banner/www/PorMarca/BANNER-ICPDAS-MZ23.webp"
            alt="ICP-DAS" title="ICP-DAS" style="width: 100%;">
    </div>

    <h1 class="main-title sr-only">ICP-DAS - Adquisición de Datos</h1>
    <h2 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Hardware de adquisición de
            datos y control</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">ICP
            DAS</span>
    </h2>

    <div class="container mb-5">
        <p class="intro-text text-justify">ICP DAS es un fabricante líder de hardware de adquisición de datos, software,
            control y automatización industrial. Ofrecen una amplia gama de soluciones flexibles, confiables y rentables
            diseñadas para las necesidades de diversas industrias tales como: producción de energía (tradicional y
            renovable), manufactura, empaque, equipo pesado, agricultura, aeroespacial, petróleo y gas, y más.</p>
        <p class="intro-text text-justify">Nuestros productos incluyen controladores M2M e IoT, HMI, PC y monitores
            industriales, convertidores de protocolo y módulos de E/S de adquisición de datos remotos; todos compatibles
            con protocolos como Modbus RTU, Modbus TCP, bus CAN, Profibus, Profinet, Ethernet/IP, HART, EtherCAT,
            DeviceNet, BACnet, Wi-Fi y Zigbee.</p>
        <p class="intro-text text-justify">Además, se ofrecen más de 200 tarjetas de PC para adquisición de datos,
            control de movimiento y comunicación industrial. La mayoría de ellos se suministran con controladores
            confiables de Windows y Linux y programas de demostración con código fuente.</p>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/icpdas" target="_blank">Ver en Tienda MX</a>
        <a class="btn-circle" href="#productos">Categorías</a>
        <a class="btn-circle" href="#daq">Adquisición DAQ</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#videos">Videos</a>
    </nav>

    <h2 class="section-title mt-5" id="productos">Categorías de Productos</h2>
    <div class="container mb-5">
        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/tasbleros-pc.webp" alt="PC BOARD"
                    class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">PC BOARD</h3>
                <p class="text-justify text-muted">Se ofrecen más de 200 tarjetas de PC para adquisición de datos,
                    control de movimiento y comunicación industrial. La mayoría de ellos se suministran con
                    controladores confiables de Windows, Linux y programas de demostración con código fuente.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-tableros-de-pc"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-pc-boards"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/pacs.webp" alt="PACS"
                    class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">PACS</h3>
                <p class="text-justify text-muted">Los productos PAC combinan la funcionalidad y la apertura de la PC,
                    la confiabilidad de un PLC y la inteligencia de los módulos de E/S con herramientas de software
                    flexibles para control de procesos, energía y gestión de edificios.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-pacs"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-pacs"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/productos-panel.webp"
                    alt="PRODUCTOS PANEL" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">PRODUCTOS DE PANEL</h3>
                <p class="text-justify text-muted">Desde una simple pantalla de mensajes LED, dispositivos HMI táctiles
                    hasta un PC/PAC de panel táctil complejo, ICP DAS brinda las opciones más diversas y el mejor valor
                    para sus proyectos.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-productos-de-panel"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-panel-products"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/iiot.webp" alt="IIOT"
                    class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">IIOT</h3>
                <p class="text-justify text-muted">Industrial Internet of Things (IIoT) es la nueva tendencia en la nube
                    que hace que todos los dispositivos se comuniquen entre sí en aplicaciones de automatización
                    industrial.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-iiot"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-iiot"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/automatizacion-de-maquinas.webp"
                    alt="AUTOMATIZACIÓN DE MÁQUINAS" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">AUTOMATIZACIÓN DE MÁQUINAS</h3>
                <p class="text-justify text-muted">Amplia gama de soluciones de movimiento para sistemas de
                    automatización, incluidas soluciones basadas en PC, PAC integradas y soluciones remotas con EtherCAT
                    o CANopen para sistemas distribuidos.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-automatizacion-de-maquinas"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-machine-automation"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/modulo-de-unidades.webp"
                    alt="MÓDULOS E/S" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">MÓDULOS Y UNIDADES DE E/S</h3>
                <p class="text-justify text-muted">Los módulos de Entradas/Salidas remotas admiten una amplia gama de
                    señales de campo que incluyen corriente, voltaje, termistor, termopar, RTD y galgas extensométricas
                    con múltiples protocolos.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-modulos-y-unidades-de-entradas-salidas-remotas"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-remote-io-module-and-unit"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/comunicacion-industrial.webp"
                    alt="COMUNICACIÓN INDUSTRIAL" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">COMUNICACIÓN INDUSTRIAL</h3>
                <p class="text-justify text-muted">Para conectar e intercambiar datos entre varios dispositivos de
                    automatización, ICP DAS proporciona una variedad de productos para admitir protocolos e interfaces
                    ampliamente utilizados en la industria.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-comunicacion-industrial"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-industrial-communication"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/comunicacion-inalambrica.webp"
                    alt="COMUNICACIÓN INALÁMBRICA" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">COMUNICACIÓN INALÁMBRICA</h3>
                <p class="text-justify text-muted">La gestión y el control inalámbrico se ha convertido en un enfoque
                    prometedor. Se ofrecen productos industriales robustos compatibles con ZigBee, Wi-Fi, 3G / 4G,
                    Bluetooth, IR, LoRa, NB-IoT.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-comunicacion-inalambrica"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-wireless-communication"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/gestion-de-energia.webp"
                    alt="GESTIÓN DE ENERGÍA" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">GESTIÓN DE ENERGÍA</h3>
                <p class="text-justify text-muted">Soluciones innovadoras que incluyen medidores de potencia,
                    concentradores, herramientas de software para bases de datos (PMC Data Server), InduSoft SCADA e
                    IoTstar Cloud Management.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-gestion-de-energia"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-energy-management"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy"
                    src="https://www.logicbus.com.mx/images/categorias/modulos-de-acondicionamiento-de-senales.webp"
                    alt="MÓDULOS DE ACONDICIONAMIENTO" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">ACONDICIONAMIENTO DE SEÑALES</h3>
                <p class="text-justify text-muted">Estos módulos pueden convertir señales del mundo real para que sean
                    adecuadas para sistemas de medición y adquisición de datos mediante amplificación, filtrado, ajuste
                    de rango o aislamiento.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-modulos-de-acondicionamiento-de-senales"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-signal-conditioning-modules"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light rounded shadow-sm border overflow-hidden p-4 mb-4">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/software-icpdas.webp"
                    alt="SOFTWARE" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 style="color: var(--lb-primary); font-weight: bold;">SOFTWARE</h3>
                <p class="text-justify text-muted">Vea o descargue información sobre varios software diseñados para
                    comenzar con los productos ICP DAS, desarrollar sistemas de control y recopilar datos a través de
                    interfaces de comunicación.</p>
                <div>
                    <a class="btn-circle d-inline-block mr-2"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-icp-das-software"
                        target="_blank" style="padding: 8px 20px;">Tienda MX <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn-circle d-inline-block"
                        href="https://www.logicbus.com/data-acquisition-data-logging-daq-data-acquisition-daq-icp-das-software"
                        target="_blank" style="padding: 8px 20px; background-color: var(--lb-primary);">Tienda USA <i
                            class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>

    </div>

    <h2 class="section-title mt-5" id="daq">Adquisición de Datos DAQ</h2>
    <div class="container mb-5">
        <div class="products-grid">

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-serial-dcon-familia-m-7000-analogos"
                    target="_blank">
                    <img loading="lazy" src="./imagenes/02/m-7017r-a5.webp" alt="Módulos Analógicos M-7000">
                </a>
                <h4 class="mt-3">M-7000 Analógicos</h4>
                <p class="small text-muted text-justify flex-grow-1">Módulos de adquisición de datos para lectura y
                    control de señales analógicas.</p>
                <div class="d-flex justify-content-center gap-2 mt-auto">
                    <a class="btn-circle"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-serial-dcon-familia-m-7000-analogos"
                        target="_blank"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    <a class="btn-circle" href="./sub_data3-1" style="background-color: var(--lb-primary);"><i
                            class="fa fa-info-circle"></i> Info</a>
                </div>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-serial-dcon-familia-m-7000-digitales"
                    target="_blank">
                    <img loading="lazy" src="./imagenes/02/M-7015P.webp" alt="Módulos Digitales M-7000">
                </a>
                <h4 class="mt-3">M-7000 Digitales</h4>
                <p class="small text-muted text-justify flex-grow-1">Módulos robustos para integración de señales
                    digitales en entornos industriales.</p>
                <div class="d-flex justify-content-center gap-2 mt-auto">
                    <a class="btn-circle"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-serial-dcon-familia-m-7000-digitales"
                        target="_blank"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    <a class="btn-circle" href="./sub_data3-2" style="background-color: var(--lb-primary);"><i
                            class="fa fa-info-circle"></i> Info</a>
                </div>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-ethernet-modbus-tcp-familia-et-7000"
                    target="_blank">
                    <img loading="lazy" src="./imagenes/02/et-7002-g.webp" alt="ET-7000">
                </a>
                <h4 class="mt-3">ET-7000 Distribuida</h4>
                <p class="small text-muted text-justify flex-grow-1">Familia compacta distribuida para Entradas y
                    Salidas Digitales y Análogas.</p>
                <div class="d-flex justify-content-center gap-2 mt-auto">
                    <a class="btn-circle"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-ethernet-modbus-tcp-familia-et-7000"
                        target="_blank"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    <a class="btn-circle" href="./et-7000_familia" style="background-color: var(--lb-primary);"><i
                            class="fa fa-info-circle"></i> Info</a>
                </div>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-zigbee"
                    target="_blank">
                    <img loading="lazy" src="./imagenes/02/ZT-2550_1.webp" alt="Tecnología Zigbee">
                </a>
                <h4 class="mt-3">Tecnología Zigbee</h4>
                <p class="small text-muted text-justify flex-grow-1">Adquisición y transmisión inalámbrica confiable
                    para automatización.</p>
                <div class="d-flex justify-content-center gap-2 mt-auto">
                    <a class="btn-circle"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-zigbee"
                        target="_blank"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    <a class="btn-circle" href="./wireless_convertidores"
                        style="background-color: var(--lb-primary);"><i class="fa fa-info-circle"></i> Info</a>
                </div>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/consumo-y-analisis-de-energia-electrica-medidores-de-consumo-electrico-para-montaje-en-riel-din-incluye-ct"
                    target="_blank">
                    <img loading="lazy" src="./imagenes/02/PM-3133-360P.webp" alt="Medidores PM-3000">
                </a>
                <h4 class="mt-3">Medidores PM-3000</h4>
                <p class="small text-muted text-justify flex-grow-1">Medidores de potencia inteligente para montaje en
                    riel DIN.</p>
                <a class="btn-circle mt-auto mx-auto"
                    href="https://tienda.logicbus.com.mx/consumo-y-analisis-de-energia-electrica-medidores-de-consumo-electrico-para-montaje-en-riel-din-incluye-ct"
                    target="_blank"><i class="fa fa-shopping-cart"></i> Comprar</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/search.asp?keyword=WF-20&search=" target="_blank">
                    <img loading="lazy" src="./imagenes/02/WF-2019.webp" alt="Daq Wifi">
                </a>
                <h4 class="mt-3">Módulos Daq Wifi</h4>
                <p class="small text-muted text-justify flex-grow-1">Dispositivos de adquisición de datos mediante
                    conexión WiFi.</p>
                <div class="d-flex justify-content-center gap-2 mt-auto">
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/search.asp?keyword=WF-20&search="
                        target="_blank"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    <a class="btn-circle" href="./adquisicion_ethernet" style="background-color: var(--lb-primary);"><i
                            class="fa fa-info-circle"></i> Info</a>
                </div>
            </div>


            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-ethernet-protocolo-ethernet-ip"
                    target="_blank">
                    <img loading="lazy" src="./imagenes/02/eip-2042.webp" alt="DAQ EtherNet/IP">
                </a>
                <h4 class="mt-3">DAQ EtherNet/IP</h4>
                <p class="small text-muted text-justify flex-grow-1">Adquisición de datos industriales bajo el protocolo
                    EtherNet/IP.</p>
                <div class="d-flex justify-content-center gap-2 mt-auto">
                    <a class="btn-circle"
                        href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-adquisicion-de-datos-ethernet-protocolo-ethernet-ip"
                        target="_blank"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    <a class="btn-circle" href="./EIP-2000" style="background-color: var(--lb-primary);"><i
                            class="fa fa-info-circle"></i> Info</a>
                </div>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-convertidores-de-protocolos-serial-hub"
                    target="_blank">
                    <img loading="lazy" src="./imagenes/02/TSH-735.webp" alt="Convertidores TSH-700">
                </a>
                <h4 class="mt-3">Convertidores TSH-700</h4>
                <p class="small text-muted text-justify flex-grow-1">Convertidores en serie TSH-700 para hubs seriales
                    industriales.</p>
                <a class="btn-circle mt-auto mx-auto"
                    href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-convertidores-de-protocolos-serial-hub"
                    target="_blank"><i class="fa fa-shopping-cart"></i> Comprar</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/GW-7472_p_1530.html" target="_blank">
                    <img loading="lazy" src="./imagenes/02/GW-7472.webp" alt="Gateways GW-7472">
                </a>
                <h4 class="mt-3">Gateways GW-7472 / GW-7473</h4>
                <p class="small text-muted text-justify flex-grow-1">Pasarelas de comunicación avanzadas para
                    integración de sistemas.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/GW-7472_p_1530.html"
                    target="_blank"><i class="fa fa-shopping-cart"></i> Comprar</a>
            </div>

        </div>
    </div>

    <h2 class="section-title mt-5" id="catalogos">Catálogos y Manuales</h2>
    <div class="catalog-wrap mb-5">
        <a href="https://www.logicbus.com.mx/pdf/02/icp-das-Line-Card%202023-SPANISH.pdf" target="_blank"
            class="catalog-item">
            <span class="pdf-badge">PDF</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/02/linecard-icp-das-2023.webp"
                alt="Line Card ICP-DAS">
            <h4>Line Card ICP-DAS</h4>
        </a>
        <a href="https://www.logicbus.com.mx/pdf/catalogos/Full_Product_Catalog_ICPDAS.pdf" target="_blank"
            class="catalog-item">
            <span class="pdf-badge">PDF</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/Full_Product_Catalog_ICPDAS.webp"
                alt="Full Product Catalog">
            <h4>Full Product Catalog</h4>
        </a>
        <a href="https://www.logicbus.com.mx/pdf/catalogos/Remote_IO-ICPDAS.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/Remote_IO-ICPDAS.webp"
                alt="Remote IO Modules">
            <h4>Remote IO Modules</h4>
        </a>
        <a href="https://www.logicbus.com.mx/pdf/catalogos/IOC-ICPDAS.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/IOC-ICPDAS.webp"
                alt="PC Based I/O Boards">
            <h4>PC Based I/O Boards</h4>
        </a>
        <a href="https://www.logicbus.com.mx/pdf/catalogos/Fieldbus-ICPDAS.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/Fieldbus-ICPDAS.webp"
                alt="Industrial Fieldbus">
            <h4>Industrial Fieldbus</h4>
        </a>
        <a href="https://www.logicbus.com.mx/pdf/catalogos/PAC-ICPDAS.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/PAC-ICPDAS.webp" alt="PAC Catalog">
            <h4>PAC Catalog</h4>
        </a>
    </div>

    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&amp;tagArray%5B%5D=icp+das" class="ghost-manual-box"
            style="text-decoration: none;">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación"
                style="width: 150px; margin-bottom: 15px;">
            <span class="d-block" style="font-weight: bold; color: var(--lb-primary); font-size: 1.1rem;">Ver
                Documentación Oficial</span>
        </a>
    </div>

    <h2 class="section-title mt-5" id="articulos">Artículos</h2>
    <div class="articles-list mb-4">

        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/adquisicion-de-datos/" target="_blank">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/02/Presentacion-proyecto-fin-de-grado-profesional-en-color-azul-1-1.webp"
                        alt="¿Qué es la Adquisición de Datos?">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/adquisicion-de-datos/" target="_blank"
                    style="text-decoration: none;">
                    <h3>¿Qué es la Adquisición de Datos?</h3>
                </a>
                <p>Descubre los fundamentos y conceptos básicos detrás de los sistemas de adquisición de datos (DAQ)
                    para procesos industriales.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/adquisicion-de-datos/"
                        target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/almacenamiento-frio/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/07/BANNER-66.webp"
                        alt="Almacenamiento en frío en una planta de bebidas">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/almacenamiento-frio/" target="_blank"
                    style="text-decoration: none;">
                    <h3>Almacenamiento en frío en una planta de bebidas</h3>
                </a>
                <p>Caso de éxito: Cómo optimizar el control de temperatura y monitoreo en entornos de almacenamiento
                    frío utilizando tecnología de vanguardia.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/almacenamiento-frio/"
                        target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/solucion-de-monitoreo-y-almacenamiento-de-vacunas/"
                    target="_blank">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/07/Mesa-de-trabajo-1-1.webp"
                        alt="Solución de monitoreo y almacenamiento de vacunas">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/solucion-de-monitoreo-y-almacenamiento-de-vacunas/"
                    target="_blank" style="text-decoration: none;">
                    <h3>Solución de monitoreo y almacenamiento de vacunas</h3>
                </a>
                <p>La importancia del registro preciso de datos para mantener la cadena de frío segura y eficiente en el
                    sector farmacéutico.</p>
                <div class="btn-container">
                    <a class="btn-circle"
                        href="https://www.logicbus.com.mx/blog/solucion-de-monitoreo-y-almacenamiento-de-vacunas/"
                        target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

    </div>

    <h2 class="section-title mt-5" id="videos">Videos</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="aRcayDijSoQ">
                    <img loading="lazy" src="https://img.youtube.com/vi/aRcayDijSoQ/hqdefault.jpg"
                        alt="ICP DAS UNBOXING">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="wutC1TkUeWc">
                    <img loading="lazy" src="https://img.youtube.com/vi/wutC1TkUeWc/hqdefault.jpg"
                        alt="Registrador de calidad de aire interior">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="rDfrjIHhLGY">
                    <img loading="lazy" src="https://img.youtube.com/vi/rDfrjIHhLGY/hqdefault.jpg"
                        alt="Registrador de aire, prueba de fuego">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="LecIfBM3HlI">
                    <img loading="lazy" src="https://img.youtube.com/vi/LecIfBM3HlI/hqdefault.jpg"
                        alt="Controlador con pantalla táctil y HMI">
                    <div class="play-button"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN SOBRE
                ICP-DAS?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Déjanos ayudarte! Estamos aquí
                para encontrar las mejores soluciones de IoT, comunicación y adquisición de datos para tu
                proyecto.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe loading="lazy" src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0"
                    allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>

    <script>
        // JAVASCRIPT PARA CARGAR VIDEOS DE YOUTUBE AL HACER CLIC
        document.addEventListener('DOMContentLoaded', function () {
            var videoContainers = document.querySelectorAll('.video-container');

            videoContainers.forEach(function (container) {
                container.addEventListener('click', function () {
                    var videoId = this.dataset.videoId;
                    var iframe = document.createElement('iframe');
                    iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
                    iframe.setAttribute('title', 'YouTube video player');
                    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                    iframe.setAttribute('allowfullscreen', '');

                    this.innerHTML = '';
                    this.appendChild(iframe);
                });
            });
        });
    </script>
</body>
<?php echo $var_footer; ?>

</html>