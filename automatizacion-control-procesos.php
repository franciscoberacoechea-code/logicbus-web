<?php
require("admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
    <title>Automatización y control de procesos - Logicbus</title>
    <meta name="description"
        content="Soluciones en automatización y control de procesos industriales. Encuentra PLCs, sensores, interfaces y sistemas SCADA para optimizar tu operación. ¡Envío en todo México!">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="canonical" href="https://www.logicbus.com.mx/automatizacion-control-procesos">
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
    <?php require("libreria/header.view.php"); ?>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Automatización y control de procesos</li>
            </ol>
        </nav>
    </div>

    <div class="mb-5">
        <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/automatizacion.png">
            <source src="https://www.logicbus.com.mx/assets/videos/automatizacion.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container-fluid my-5">
        <h1 class="banner-title blue font-weight-bolder mb-5">Automatización y<b class="banner-title light-orange">
                Control
                de Procesos</b></h1>
        <p class="light-black paragraph text-justify px-md-5 px-1">Transforma tu industria con nuestras soluciones de
            vanguardia. La categoría de Automatización y Control de Procesos en Logicbus abarca una amplia gama de
            soluciones
            tecnológicas diseñadas para optimizar y mejorar la eficiencia en entornos industriales. Estas soluciones
            incluyen
            sistemas avanzados que permiten la integración y automatización de tareas, facilitando la monitorización, el
            control y la gestión de procesos industriales de manera precisa y eficiente. Con tecnologías como robots
            colaborativos, visión artificial, controladores lógicos programables (PLC), pantallas HMI, y más, buscamos
            transformar la manera en que las industrias operan, incrementando la productividad, reduciendo costos y
            garantizando la seguridad y calidad en cada operación.</p>
    </div>

    <!-- BOTONES -->
    <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
        <a class="button-text" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos"
            target="_blank"><button class="button button-white">Ver en Tienda</button></a>
        <a class="button-text" href="#marcas"><button class="button button-white">Marcas</button></a>
        <a class="button-text" href="#articulos"><button class="button button-white">Artículos</button></a>
        <a class="button-text" href="#doc"><button class="button button-white">Catálogos</button></a>
        <a class="button-text" href="#video"><button class="button button-white">Videos</button></a>
    </div>

    <!-- MARCAS -->
    <section id="marcas">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">MARCAS</h2>
        </div>
        <div class="container-fluid my-5">
            <div class="d-flex flex-wrap justify-content-center">
                <a href="controllino"><img class="m-3 gray-filter"
                        src="./images/nuestras_marcas/webp/controllino.webp" alt="Controllino" width="200px"></a>
                <a href="fatek"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/fatek.webp"
                        alt="Fatek" width="200px"></a>
                <a href="reign_power"><img class="m-3 gray-filter"
                        src="./images/nuestras_marcas/webp/reignpower.webp" alt="Reign Power" width="200px"></a>
                <a href="teracom"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/teracom.webp"
                        alt="Teracom" width="200px"></a>
                <a href="rfid-inc"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/rfid.webp"
                        alt="RFDI Inc" width="200px"></a>
                <a href="sealevel"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/sealevel.webp"
                        alt="Sealevel" width="200px"></a>
                <a href="applied-motion-products"><img class="m-3 gray-filter"
                        src="./images/nuestras_marcas/webp/applied-motion.webp" alt="Applied Motion Products"
                        width="200px"></a>
                <a href="icp-das"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/icpdas.webp"
                        alt="ICP DAS" width="200px"></a>
                <a href="seneca"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/seneca.webp"
                        alt="Seneca" width="200px"></a>
                <a href="national-control-devices-ncd"><img class="m-3 gray-filter"
                        src="./images/nuestras_marcas/webp/ncd.webp" alt="National Control Devices" width="200px"></a>
                <a href="quasi"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/quasi.webp"
                        alt="Quasi" width="200px"></a>
                <a href="youibot"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/youibot.webp"
                        alt="Youibot" width="200px"></a>
            </div>
        </div>
    </section>

    <!-- PRODUCTOS -->
    <section class="container-fluid" id="productos">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">PRODUCTOS</h2>
        </div>
        <div class="row justify-content-center m-3">
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/robots-colaborativos.jpg"
                            alt="Robots Colaborativos" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Robots Colaborativos</h3>
                        <p class="light-black">Los Cobots, más conocidos como Robots Colaborativos, es la generación de
                            la robótica
                            que se integra con los humanos en el entorno de fabricación, permitiendo trabajar de una
                            manera estrecha
                            al personal y con el apoyo de estos robots sin restricciones de seguridad requeridas en
                            aplicaciones
                            típicas de la robótica industrial.</p>
                        <div class="text-center">
                            <a class="m-3" href="robots-colaborativos"><button class="section-blue white med ico"><i
                                        class="fas fa-info" aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-colaborativos"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/categorias/forwardx.jpg"
                            alt="Robots Móviles Autónomos" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Robots Móviles Autónomos</h3>
                        <p class="light-black">Los AMR's o AGV's, conocidos como robots móviles autónomos (Autonomous
                            Mobile Robots
                            en inglés), son dispositivos que transportan objetos de manera autónoma, prescindiendo de la
                            intervención
                            humana requerida con elementos convencionales como patines hidráulicos, montacargas
                            manuales, racks de
                            ruedas manipulados por operadores, etc.</p>
                        <div class="text-center">
                            <a class="m-3" href="robots-moviles-autonomos-amr-agv"><button
                                    class="section-blue white med ico"><i class="fas fa-info"
                                        aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-moviles-autonomos"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/vision-artificial.jpg"
                            alt="Visión artificial" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Visión artificial</h3>
                        <p class="light-black">La visión artificial o visión por computadora es una disciplina
                            científica que
                            incluye métodos para adquirir, procesar, analizar y comprender las imágenes del mundo real
                            con el fin de
                            producir información numérica o simbólica para que puedan ser procesadas por una
                            computadora.</p>
                        <div class="text-center">
                            <a class="m-3" href="vision-artificial"><button class="section-blue white med ico"><i
                                        class="fas fa-info" aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-vision-artificial"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/plc.png"
                            alt="PLC (Controlador Lógico Programable)" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">PLC (Controlador Lógico Programable)</h3>
                        <p class="light-black">Un PLC o Controlador Lógico Programable son dispositivos electrónicos muy
                            usados en
                            Automatización Industrial. Un PLC controla la lógica de funcionamiento de maquinas, plantas
                            y procesos
                            industriales, procesan y reciben señales digitales y analógicas y pueden aplicar estrategias
                            de control.
                            Programmable Logic Controller o Controlador lógico programable.</p>
                        <div class="text-center">
                            <a class="m-3" href="plc"><button class="section-blue white med ico"><i
                                        class="fas fa-info" aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/pantallas-hmi.png"
                            alt="Pantallas HMI" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Pantallas HMI</h3>
                        <p class="light-black">La pantalla HMI (interfaz hombre-máquina) es ideal para poner en marcha
                            aplicaciones
                            de entorno de trabajo limitadas debido a que hereda características de sus predecesoras
                            haciéndola
                            estable, confiable, fácil de usar y al mismo tiempo mantiene un diseño eléctrico fino en su
                            estructura
                            interna, así como un amplio rango de temperatura de operación y amplio rango de alimentación
                            que le
                            permiten adaptarse a las más duras condiciones de trabajo.</p>
                        <div class="text-center">
                            <a class="m-3" href="hmi-con-touchscreen"><button class="section-blue white med ico"><i
                                        class="fas fa-info" aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-pantallas-hmi"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/pac.png"
                            alt="Controladores Autónomos Programables (PAC)" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Controladores Autónomos Programables (PAC)</h3>
                        <p class="light-black">Este controlador combina eficientemente la fiabilidad de control de un
                            autómata junto
                            a la flexibilidad de monitorización y cálculo de un PC. Los PACs pueden utilizarse en el
                            ámbito
                            investigador, pero es sobre todo en el industrial, para control de máquinas y procesos,
                            donde más se
                            utiliza.</p>
                        <div class="text-center">
                            <a class="m-3" href="programmable_automation"><button
                                    class="section-blue white med ico"><i class="fas fa-info"
                                        aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-tarjetas-de-prueba-y-desarrollo-tarjetas"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/pantallas-industriales.png"
                            alt="Pantallas industriales" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Pantallas industriales</h3>
                        <p class="light-black">Esta categoria incluye monitores LCD, monitores LCD táctiles, televisores
                            LCD y
                            lectores de tarjetas de memoria MPEG 4 para computadoras de escritorio y televisores
                            domésticos. Todos los
                            productos tienen aprobación FCC, ROHS y CE. Contamos varios tamaños para ofrecer, desde 15",
                            17", 19",
                            20", 32", 37" y 42".</p>
                        <div class="text-center">
                            <a class="m-3" href="industrial_touchscreens"><button
                                    class="section-blue white med ico"><i class="fas fa-info"
                                        aria-hidden="true"></i></button></a>
                            <a class="m-3" href="https://tienda.logicbus.com.mx/Pantallas-industriales_c_723.html"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/control-movimiento.png"
                            alt="Control de Movimiento" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Control de Movimiento</h3>
                        <p class="light-black">El software y hardware de control de movimiento simplifican el desarrollo
                            de todas
                            sus aplicaciones de control de movimiento y proporcionan una fácil integración con productos
                            de
                            adquisición de datos y visión. Desde la automatización de equipos de pruebas y laboratorios
                            de
                            investigación hasta el control de máquinas biomédicas, de empaquetado y de producción.</p>
                        <div class="text-center">
                            <a class="m-3" href="control_movimiento"><button class="section-blue white med ico"><i
                                        class="fas fa-info" aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-control-de-movimiento"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/control-celular.png"
                            alt="Control Vía Celular (GSM)" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Control Vía Celular (GSM)</h3>
                        <p class="light-black">Los sistemas de control de telefonía celular es una tecnología que ha
                            dado pasos
                            importantes en sistemas de automatización, monitoreo remoto y control de consumo de energía.
                            Con base en
                            la tecnología GSM (Global System for Mobile communications) es posible controlar salidas
                            digitales
                            (Switches on/off) y obtener valores analógicos (presión, temperatura, etc).</p>
                        <div class="text-center">
                            <a class="m-3" href="control-via-celular-industrial"><button
                                    class="section-blue white med ico"><i class="fas fa-info"
                                        aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-control-via-celular"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/instrumentos-panel.png"
                            alt="Instrumentos para panel" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Instrumentos para panel</h3>
                        <p class="light-black">Un panel de instrumentos o tablero de instrumentos es el conjunto de
                            elementos que
                            sirven para medir, controlar o registrar variables de un proceso con el fin de optimizar los
                            recursos
                            utilizados en éste.</p>
                        <div class="text-center">
                            <a class="m-3" href="instrumentos-panel"><button class="section-blue white med ico"><i
                                        class="fas fa-info" aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-instrumentos-para-panel"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 m-3">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
                    style="height: 100%;">
                    <div class="col-6 col-md-4"><img
                            src="https://www.logicbus.com.mx/images/categorias/2022/automatizacion-control/fuentes-de-poder.png"
                            alt="Fuentes de Poder" width="100%"></div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Fuentes de Poder</h3>
                        <p class="light-black">Una fuente de alimentación o de poder es un dispositivo electrónico que
                            sirve para
                            abastecer de electricidad a diferentes circuitos o dispositivos electrónicos, el ejemplo más
                            común es la
                            computadora. Para lograr esto una fuente de poder transforma el voltaje alterno de la
                            energía eléctrica
                            casera en corriente directa, controlando además que solo se suministre la cantidad necesaria
                            para el
                            correcto funcionamiento del dispositivo.</p>
                        <div class="text-center">
                            <a class="m-3" href="power_supply"><button class="section-blue white med ico"><i
                                        class="fas fa-info" aria-hidden="true"></i></button></a>
                            <a class="m-3"
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-fuentes-de-poder"
                                target="_blank"><button class="section-orange white med ico"><i
                                        class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VIDEOS -->
    <div class="container my-5" id="video">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">VIDEOS</h2>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 my-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/puIRpVsK1mE?si=Pl-c3fOujSoq6Tew"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/IjVWOOd9HCc?si=PZDOoJZ2IUVOwVqF"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/ypDeR4C4XDo?si=4CMWh9bg_H3zvSYW"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- ARTICULOS -->
    <section class="container-fluid" id="articulos">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">ARTICULOS</h2>
        </div>
        <div class="text-center">
            <div class="d-flex justify-content-center flex-wrap">
                <div class="m-3">
                    <a href="https://www.logicbus.com.mx/blog/descubre-el-controllino-io-bean-integracion-perfecta-de-e-s-en-tu-proyecto/"
                        target="_blank"><img
                            src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/Descubre-el-Controllino-IO-BEAN-Integracion-Perfecta-de-ES-en-tu-Proyecto-scaled.jpg"
                            alt="Descubre el Controllino IO-BEAN: Integración Perfecta de E/S en tu Proyecto"
                            width="350px" height="190px" class="imgBorde"></a>
                </div>
                <div class="m-3">
                    <a href="https://www.logicbus.com.mx/blog/la-era-de-los-vehiculos-electricos-navegando-la-manufactura-automotriz-con-amrs/"
                        target="_blank"><img
                            src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/05/La-Era-de-los-Vehiculos-Electricos-Navegando-la-Manufactura-Automotriz-con-AMRs-scaled.jpg"
                            alt="La Era de los Vehículos Eléctricos: Navegando la Manufactura Automotriz con AMRs"
                            width="350px" height="190px" class="imgBorde"></a>
                </div>
                <div class="m-3">
                    <a href="https://www.logicbus.com.mx/blog/componentes-internos-de-un-robot-amr/"
                        target="_blank"><img
                            src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/03/COMPONENTES-INTERNOS-DE-UN-AMR-1-scaled.png"
                            alt="COMPONENTES INTERNOS DE UN ROBOT AMR" width="350px" height="190px"
                            class="imgBorde"></a>
                </div>
            </div>
            <a class="button button-circle-whiteb button-text my-3"
                href="https://www.logicbus.com.mx/blog/category/plcs-y-convertidores-de-protocolo/" target="_blank">Ver
                todos</a>
        </div>
    </section>

    <!-- CATALOGOS -->
    <section id="doc" class="mb-5 ">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">CATÁLOGOS</h2>
        </div>
        <div class="d-flex flex-wrap justify-content-center text-center">

            <div class="m-3">
                <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/catalogos/seneca_en_1810en_r2.pdf"
                    target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/catalogos/seneca_en_1810en_r2.jpg" alt="Ver archivo pdf"
                        class="imgBorde" width="250px" height="325px"><br>
                    Seneca
                </a>
            </div>
            <div class="m-3">
                <a class="blue link-orange"
                    href="https://www.logicbus.com.mx/pdf/02/icp-das-Line-Card%202023-SPANISH.pdf" target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/02/linecard-icp-das-2023.PNG" alt="Ver archivo pdf"
                        class="imgBorde" width="250px" height="325px"><br>
                    ICP DAS
                </a>
            </div>
            <div class="m-3">
                <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/Teracom/Catalog-TERACOM.pdf"
                    target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/Teracom/Catalog-TERACOM.jpg" alt="Ver archivo pdf"
                        class="imgBorde" width="250px" height="325px"><br>
                    Teracom
                </a>
            </div>
            <div class="m-3">
                <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/265/CONTROLLINO-ES.pdf"
                    target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/265/controllino-es-portada.png" alt="Ver archivo pdf"
                        class="imgBorde" width="250px" height="325px"><br>
                    Controllino
                </a>
            </div>
            <div class="m-3">
                <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/catalogos/Applied-Motion.pdf"
                    target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/catalogos/applied-motion.PNG" alt="Ver archivo pdf"
                        class="imgBorde" width="250px" height="325px"><br>
                    Applied Motion Products
                </a>
            </div>
            <div class="m-3">
                <a class="blue link-orange"
                    href="https://www.logicbus.com.mx/pdf/Futek/B1B1z_PLC_Catalog_en_compressed.pdf" target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/Futek/economical-and-high-quality-plc.PNG"
                        alt="Ver archivo pdf" class="imgBorde" width="250px" height="325px"><br>
                    Fatek
                </a>
            </div>
        </div>
    </section>

    <!--Contacto-->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white text-uppercase">Conoce más sobre la automatización industrial</h2>
            <span class="paragraph white">Estamos aquí para ayudarle a encontrar las mejores soluciones para su
                proyecto</span>
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

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>