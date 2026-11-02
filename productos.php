<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-1007518778');
    </script>

    <script>
        gtag('config', 'AW-1007518778/wX-hCOLx9YQDELqItuAD', {

            'phone_conversion_number': '33-3854-5975'

        });
    </script>
    <title>Productos Logicbus para Automatización Industrial</title>

    <meta name="description" content="Productos: adquisicion de datos,computadoras industriales, convertidor de protocolos, fuentes de poder, instrumentos de medición, laboratorio académico, PLC...">

    <meta name="keywords" content="Logicbus,venta, distribucion, asesoria, acondicionadores de señal, senal, adquisición, adquisicion de datos, BACnet, clemas, conectores, computadoras industriales, comunicación celular, comunicacion celular, control de movimiento, controladores autónomos programables, PAC, convertidores de protocolos, ethernet, fuentes de poder, GPIB, IEEE-488, GPS, HART, inalámbricos, instrumentos de medición, laboratorio académico, PLC, profibus, registradores, sensores, software, transductores, Mexico, Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Automatización, Automatizacion, Consultoría, Consultoria">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <?php echo $var_headers;  ?>
    <link rel="stylesheet" type="text/css" href="libreria/menu-acordeon.css">
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div id="main" class="">
        <center>
            <div class="seccion" id="">
                <div class="col-center">
                    <h1><span>Productos</span></h1>
                </div>
            </div>
        </center>
        <div class="divCentrado" align="center">
            <p class="h3 separator"><span>Por Marca</span></p>
            <br>
            <button class="btnAP" role="button"><span><a href="marcas-logicbus" style="color: #ffffff; text-decoration: none;">Ver todas las Marcas</a></span></button><br><br>
            <p class="h3 separator"><span>Categorías</span></p>
            <br>
            <div class="mb-5 d-flex flex-wrap justify-content-center">
                <button id="todas" class="btn btn-blue btn-lg m-1 d-flex on" onclick="categoriasMarcas_('todas');" type="button">
                    <p class="my-0">TODAS</p>
                </button>
                <button id="adquisicion" class="btn btn-blue btn-lg m-1 d-flex" onclick="categoriasMarcas_('adquisicion');" type="button">
                    <img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg" alt="Adquisición y Registro de datos - DAQ" title="Adquisición y Registro de Datos - DAQ" width="30px">
                    <p class="gridoOcultarMB ml-3 my-0">Adquisición y Registro de Datos - DAQ</p>
                </button>
                <button id="automatizacion" class="btn btn-blue btn-lg m-1 d-flex" onclick="categoriasMarcas_('automatizacion');" type="button">
                    <img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg" alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos" width="30px">
                    <p class="gridoOcultarMB ml-3 my-0">Automatización y Control de Procesos</p>
                </button>
                <button id="energia" class="btn btn-blue btn-lg m-1 d-flex" onclick="categoriasMarcas_('energia');" type="button">
                    <img class="ImgIcon" src="assets/consumo-y-analisis-de-energia-electrica.svg" alt="Consumo y Análisis de Energía Eléctrica" title="Consumo y Análisis de Energía Eléctrica" width="30px">
                    <p class="gridoOcultarMB ml-3 my-0">Consumo y Análisis de Energía Eléctrica</p>
                </button>
                <button id="computo" class="btn btn-blue btn-lg m-1 d-flex" onclick="categoriasMarcas_('computo');" type="button">
                    <img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg" alt="PCs y Comunicaciones Industriales" title="PCs y Comunicaciones Industriales" width="30px">
                    <p class="gridoOcultarMB ml-3 my-0">PC's y Comunicaciones Industriales</p>
                </button>
                <button id="medicion" class="btn btn-blue btn-lg m-1 d-flex" onclick="categoriasMarcas_('medicion');" type="button">
                    <img class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición" title="Prueba y Medición" width="30px">
                    <p class="gridoOcultarMB ml-3 my-0">Prueba y Medición</p>
                </button>
                <button id="sensores" class="btn btn-blue btn-lg m-1 d-flex" onclick="categoriasMarcas_('sensores');" type="button">
                    <img class="ImgIcon" src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores" title="Sensores y Transductores" width="30px">
                    <p class="gridoOcultarMB ml-3 my-0">Sensores y Transductores</p>
                </button>
                <button id="software" class="btn btn-blue btn-lg m-1 d-flex" onclick="categoriasMarcas_('software');" type="button">
                    <img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg" alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo" width="30px">
                    <p class="gridoOcultarMB ml-3 my-0">Software y Herramientas de Desarrollo</p>
                </button>
                <button id="cursos" class="btn btn-blue btn-lg m-1 d-flex" onclick="categoriasMarcas_('cursos');" type="button">
                    <img class="ImgIcon" src="https://www.logicbus.com/assets/images/resources/categories/webinarios.png" alt="Cursos" title="Cursos" width="30px">
                    <p class="gridoOcultarMB ml-3 my-0">Cursos</p>
                </button>
            </div>

            <div class="container">
                <p class="h2 subtitle blue" id="text"></p>
            </div>

            <div id="subs" class="d-flex flex-wrap justify-content-center">
                <a class="sub link-orange adquisicion" href="adquisicion-de-datos"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Adquisicion-de-datos-.webp" style="max-width: 180px;" alt="Adquisición de datos"><br><b>Adquisición de Datos</b> </a>
                <a class="sub link-orange adquisicion" href="multicanales-logger"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Graficadores-.webp" style="max-width: 180px;" alt="Graficadores"><br><b>Graficadores</b> </a>
                <a class="sub link-orange adquisicion" href="datalogger"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Registradores-.webp" style="max-width: 180px;" alt="Registradores"><br><b>Registradores</b> </a>
                <a class="sub link-orange adquisicion" href="transductores_temp_humedad"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Transductores-de-temperatura-y-humedad-.webp" style="max-width: 180px;" alt="Transductores de temperatura y humedad"><br><b>Transductores de Temperatura y Humedad</b> </a>

                <a class="sub link-orange automatizacion" href="robots-colaborativos"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/robots.webp" style="max-width: 180px;" style="max-width: 180px;" alt="Robots colaborativos"><br><b>Robots colaborativos</b> </a>
                <a class="sub link-orange automatizacion" href="robots-moviles-autonomos-amr-agv"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/forwardx.webp" style="max-width: 180px;" style="max-width: 180px;" alt="Robots Móviles Autónomos (AMR)"><br><b>Robots Móviles Autónomos (AMR)</b> </a>
                <a class="sub link-orange automatizacion" href="vision-artificial"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Vision-artificial-.webp" style="max-width: 180px;" alt="Visión artificial"><br><b>Vision Artificial</b> </a>
                <a class="sub link-orange automatizacion" href="plc"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/PLC-.webp" style="max-width: 180px;" alt="PCL"><br><b>PLC (Controlador Lógico Programable)</b> </a>
                <a class="sub link-orange automatizacion" href="fuentes-de-poder"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/REIGNPOWER-.webp" style="max-width: 180px;" alt="PCL"><br><b>Fuentes de Poder</b> </a>

                <a class="sub link-orange energia" href="transductores-de-corriente-electrica"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Transductores-de-Corriente-electrica-.webp" style="max-width: 180px;" alt="Transductores"><br><b>Transductores de Corriente Eléctrica</b> </a>
                <a class="sub link-orange energia" href="Donas-de-corriente"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Donas-de-corriente-.webp" style="max-width: 180px;" alt="Donas de corriente"><br><b>Donas de Corriente</b> </a>
                <a class="sub link-orange energia" href="medidores-consumo-electrico-montaje-Riel-Din"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Medidores-de-consumo-electrico-para-montajes-en-riel-din-.webp" style="max-width: 180px;" alt="Medidores de consumo eléctrico para montajes en el riel din"><br><b>Medidores de Consumo Eléctrico para Montaje en Riel Din</b> </a>

                <a class="sub link-orange computo" href="computadoras-industriales"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Computadoras-industriales-.webp" style="max-width: 180px;" alt="Computadoras industriales"><br><b>Computadoras Industriales</b> </a>
                <a class="sub link-orange computo" href="computadoras-para-panel"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Panel-PC-.webp" style="max-width: 180px;" alt="Panel PC"><br><b>Panel PC - Todo en Uno</b> </a>
                <a class="sub link-orange computo" href="tablet-pc-resistentes"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Tablets-PC-.webp" style="max-width: 180px;" alt="Tablets PC"><br><b>Tablets PC - Resistentes</b> </a>
                <a class="sub link-orange computo" href="pantallas-industriales"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Pantallas-y-monitores-industriales-.webp" style="max-width: 180px;" alt="Pantallas y monitores industriales"><br><b>Pantallas y Monitores Industriales</b> </a>
                <a class="sub link-orange computo" href="teclados-indice"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Teclados-industriales-.webp" style="max-width: 180px;" alt="Teclados industriales"><br><b>Teclados Industriales</b> </a>
                <a class="sub link-orange computo" href="touchpad-trackball-industriales"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Apuntadores-y-mouse-industriales-.webp" style="max-width: 180px;" alt="Apuntadores y mouse industriales"><br><b>Apuntadores y Mouse Industriales</b> </a>
                <a class="sub link-orange computo" href="escaner-lector-de-codigos"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Lector-de-codigos-.webp" style="max-width: 180px;" alt="Lector de códigos"><br><b>Escáner - Lector de Códigos</b> </a>
                <a class="sub link-orange computo" href="convertidores-protocolos"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Convertidores-de-protocolos-.webp" style="max-width: 180px;" alt="Convertidores de protocolo"><br><b>Convertidores de Protocolos</b> </a>
                <a class="sub link-orange computo" href="hub-usb-industrial"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Hub-usb-industrial-.webp" style="max-width: 180px;" alt="Hub USB industrial"><br><b>Hub USB Industrial</b> </a>
                <a class="sub link-orange computo" href="switch-ethernet-industrial"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Switches-ethernet-industriales-.webp" style="max-width: 180px;" alt="Switches ethernet industriales"><br><b>Switches Ethernet Industriales</b> </a>

                <a class="sub link-orange medicion" href="stand-osciloscopios"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Osciloscopios-.webp" style="max-width: 180px;" alt="Osciloscopios"><br><b>Osciloscopios</b> </a>
                <a class="sub link-orange medicion" href="fuentes-programables"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Fuentes-de-alimentacion-cc-programables-.webp" style="max-width: 180px;" alt="Fuentes de programación programables"><br><b>Fuentes de Alimentación de CC Programables</b> </a>
                <a class="sub link-orange medicion" href="generadores-de-funciones"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Osciloscopios-con-un-canal-generador-de-funciones-.webp" style="max-width: 180px;" alt="Osciloscopios con un canal generador de funciones"><br><b>Osciloscopios con un Canal Generador de Funciones</b> </a>
                <a class="sub link-orange medicion" href="academia-prod"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Equipos-academicos-.webp" style="max-width: 180px;" alt="Equipos académicos"><br><b>Equipos Académicos</b> </a>
                <a class="sub link-orange medicion" href="multimetros"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Multimetros-.webp" style="max-width: 180px;" alt="Multímetros"><br><b>Multímetros</b> </a>


                <a class="sub link-orange sensores" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-acelerometros" target="_blank"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/acelerometros-.webp" style="max-width: 180px;" alt="Acelerómetros"><br><b>Acelerómetros</b> </a>
                <a class="sub link-orange sensores" href="celdas-de-carga"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Celdas-de-carga-.webp" style="max-width: 180px;" alt="Celdas de carga"><br><b>Celdas de Carga</b> </a>
                <a class="sub link-orange sensores" href="https://tienda.logicbus.com.mx/Sensores-Capacitivos_c_5848.html" target="_blank"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Sensor-capacitivo-.webp" style="max-width: 180px;" alt="Sensores Capacitivos"><br><b>Sensores Capacitivos</b> </a>
                <a class="sub link-orange sensores" href="https://tienda.logicbus.com.mx/Sensores-Inductivos_c_5849.html" target="_blank"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/inductivo-removebg-preview-.webp" style="max-width: 180px;" alt="Sensores Inductivos"><br><b>Sensores Inductivos</b> </a>
                <a class="sub link-orange sensores" href="torque-sensor"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Sensores-de-torque-.webp" style="max-width: 180px;" alt="Sensores de torque"><br><b>Sensores de Torque</b> </a>
                <a class="sub link-orange sensores" href="sensores-fotoelectricos"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Sensores-fotoelectricos-.webp" style="max-width: 180px;" alt="Sensores fotoelectrivos"><br><b>Sensores Fotoeléctricos</b> </a>
                <a class="sub link-orange sensores" href="lord-sensing-microstrain"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Sensores-de-deteccion-inercial-.webp" style="max-width: 180px;" alt="Sensores Inerciales y de Posicionamiento"><br><b>Sensores Inerciales y de Posicionamiento</b> </a>
                <a class="sub link-orange sensores" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-sensores-de-posicion-y-distancia" target="_blank"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/sensores-posicion-distancia-.webp" style="max-width: 180px;" alt="Sensores de Posición y Distancia"><br><b>Sensores de Posición y Distancia</b> </a>
                <a class="sub link-orange sensores" href="sensores-temperatura"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Sensores-de-temperatura-.webp" style="max-width: 180px;" alt="Sensores de temperatura"><br><b>Sensores de Temperatura</b> </a>
                <a class="sub link-orange sensores" href="encoder"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Encoder-.webp" style="max-width: 180px;" alt="Encoder"><br><b>encoder</b> </a>
                <a class="sub link-orange sensores" href="power-transducers"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Potencia-electrica-.webp" style="max-width: 180px;" alt="Potencia eléctrica"><br><b>Potencia Eléctrica</b> </a>
                <a class="sub link-orange sensores" href="transductores_temperatura"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Transductores-de-temperatura-.webp" style="max-width: 180px;" alt="Transductores de temperatura"><br><b>Transductores de Temperatura</b> </a>
                <a class="sub link-orange sensores" href="transductores_presion"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Transductores-de-senal-de-presion-.webp" style="max-width: 180px;" alt="Transductores de señal de presión"><br><b>Transductores de Señal para Presión</b> </a>
                <a class="sub link-orange sensores" href="acondicionador-de-senal"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Acondicionador-de-senal-.webp" style="max-width: 180px;"><br><b>Acondicionador de Señales</b> </a>
                <a class="sub link-orange sensores" href="signal6"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Acondicionador-de-senales-digitales-.webp" style="max-width: 180px;" alt="Acondicionador de señales digitales"><br><b>Acondicionador de Señales Digitales</b> </a>
                <a class="sub link-orange sensores" href="acond_corriente"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Acondicionador-de-corriente-.webp" style="max-width: 180px;" alt="Acondicionador de corriente"><br><b>Acondicionadores de Corriente</b> </a>
                <a class="sub link-orange sensores" href="acond_voltaje"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Acondicionador-de-voltaje-.webp" style="max-width: 180px;" alt="Acondicionador de voltaje"><br><b>Acondicionadores de Voltaje</b> </a>
                <a class="sub link-orange sensores" href="acondicionadores"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Acondicionador-de-senal-universal-.webp" style="max-width: 180px;" alt="Acondicionador de señal universal"><br><b>Acondicionador de Señal Universal</b> </a>

                <a class="sub link-orange software" href="FvDesigner"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/FvDesigner-.webp" style="max-width: 180px;" alt="FvDesigner"><br><b>FvRT</b> </a>
                <a class="sub link-orange software" href="dasylab"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/DASYLab-.webp" style="max-width: 180px;" alt="DASY Lab"><br><b>DASYLab</b> </a>
                <a class="sub link-orange software" href="universal-library"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/Universal-library-.webp" style="max-width: 180px;" alt="Universal library"><br><b>Universal Library</b> </a>
                <a class="sub link-orange software" href="DAQFlex"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/DAQFlex-.webp" style="max-width: 180px;" alt="DAQ flex"><br><b>DAQFlex</b> </a>
                <a class="sub link-orange software" href="software-winpro"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/WinProladder-.webp" style="max-width: 180px;" alt="WinProladder"><br><b>WinProladder</b> </a>
                <a class="sub link-orange software" href="madgetech-4-standard"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/MadgeTech-4-standard-.webp" style="max-width: 180px;" alt="Madgetech 4 standar"><br><b>MadgeTech 4 Standard</b> </a>
                <a class="sub link-orange software" href="madgetech-4-secure"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/MadgeTech-4-secure-.webp" style="max-width: 180px;" alt="Madgetech 4 secure"><br><b>MadgeTech 4 Secure</b> </a>
                <a class="sub link-orange software" href="madgetech-cloud-services"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/MadgeTech-cloud-services-.webp" style="max-width: 180px;" alt="Madgetech cloud services"><br><b>MadgeTech Cloud Services</b> </a>

                <a class="sub link-orange cursos" href="https://tienda.logicbus.com.mx/plc-trn-auto.html" target="_blank"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/PLC-TRN-.webp" style="max-width: 180px;" alt="PLC TRN"><br><b>PLC-TRN-AUTO</b> </a>
                <a class="sub link-orange cursos" href="PLC-TRN"><img src="https://www.logicbus.com.mx/images/categorias/Productos-categorias/PLC-TRN-.webp" style="max-width: 180px;" alt="PLC TRN"><br><b>PLC-TRN</b> </a>
                <a class="sub link-orange cursos" href="https://tienda.logicbus.com.mx/HMI-TRN_p_11925.html" target="_blank"><img src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/categorias/automatizacion_control_procesos/touchscreen_hmi.jpg" style="max-width: 180px;" alt="HMI-TRN"><br><b>HMI-TRN</b> </a>
            </div>


        </div>
    </div>
    <h2 class="sr-only">Contactanos</h2>
    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <script>
        function categoriasMarcas_(valor) {
            var activada = document.getElementById(valor);
            var hasClase;
            var listado = document.getElementById('subs');
            var contenedores = listado.getElementsByClassName('sub');
            var categorias = document.getElementsByClassName("btn btn-blue btn-lg m-1 d-flex");
            for (m = 0; m < contenedores.length; m++) {
                if (valor == "todas") {
                    contenedores[m].style.display = 'block';
                } else if (contenedores[m].classList.contains(valor)) {
                    contenedores[m].style.display = 'block';
                } else {
                    contenedores[m].style.display = 'none';
                }
            }
            for (j = 0; j < categorias.length; j++) {
                var hasClase = categorias[j].classList.contains('on');
                if (hasClase) {
                    categorias[j].classList.remove("on");
                }
            }
            activada.classList.add('on');

            if (valor == "adquisicion") {
                document.getElementById("text").innerHTML = "Adquisición y Registro de Datos - DAQ";
            } else if (valor == "automatizacion") {
                document.getElementById("text").innerHTML = "Automatización y Control de Procesos";
            }else if (valor == "energia") {
                document.getElementById("text").innerHTML = "Consumo y Análisis de Energía Eléctrica";
            }else if (valor == "computo") {
                document.getElementById("text").innerHTML = "PC's y Comunicaciones Industriales";
            }else if (valor == "medicion") {
                document.getElementById("text").innerHTML = "Prueba y Medición";
            }else if (valor == "sensores") {
                document.getElementById("text").innerHTML = "Sensores y Transductores";
            }else if (valor == "software") {
                document.getElementById("text").innerHTML = "Software y Herramientas de Desarrollo";
            }else if (valor == "cursos") {
                document.getElementById("text").innerHTML = "Cursos";
            }else {
                document.getElementById("text").innerHTML = "";
            }
        }
    </script>
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>