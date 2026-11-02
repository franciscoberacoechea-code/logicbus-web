<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fabricantes de equipos de automatizacion - Logicbus</title>
    <meta name="description"
        content="Marcas Logicbus - En Logicbus te ofrecemos una vida libre de estrés y preocupaciones. Somos proveedores de los mejores productos para automatizar, medir y controlar todos los procesos de tu empresa.">
    <meta name="keywords"
        content="Logicbus,Applied Motion Products,CALEX Sensores de Temperatura,CINCOZE Sistemas informáticos industriales,CONTROLLINO PLC industrial compatible con Arduino,Hardware y software de Adquisición de Datos,dispositivos avanzados DAQ,sensores industriales inalámbricos,EMDOOR,tablets de uso rudo,laptops industriales,FATEK fabricante y desarrollador PLC,FUTEK Advanced Sensor Technology Inc,Instrumentos de adquisición y registro de datos,Graphtec,Adquisición directa de datos del sensor,ICP DAS Adquisición de Datos,Teclados Industriales,LAUMAS Pesaje y dosificación industrial,LoggerFlex proporciona soluciones de adquisición de datos,madgetech soluciones de data logger,registrar datos de presión,MCC,NATIONAL CONTROL DEVICES - NCD,industria de IoT - NCD,equipos de montaje industriales inteligentes,OnRobot brazo de colaboración,PHOTOCRAFT Control de movimiento,Pico Technology osciloscopios de PC y los registradores de datos,Robots Colaborativos Precise Automation,Reign Power Fuentes de poder fijas de montaje en riel DIN,RFID Inc. sistemas de lectura y etiquetas RFID,RTA convertidores de protocolos/gateways,Sealevel soluciones de E/S serie y digitales,SENECA acondicionadores de voltaje,Robots Colaborativos SIASUN,SIGLENT TECHNOLOGIES osciloscopio,sensores 3D,dispositivos de Teracom para el monitoreo remoto de Ethernet,sensores de alta calidad e instrumentos de monitoreo para medir la presión,TRI-TRONICS® diseña y fabrica sensores fotoeléctricos de alto rendimiento,WayCon sensores compactos son rápidos y fáciles de montar,especialmente aplicaciones de LCD,YOUIBOT ROBOTICS, robots móviles (AMR),equipos de automatización y control, equipos de automatizacion industrial, distribuidores de equipos de automatizacion,venta de equipos de automatizacion, proveedores de equipos de automatizacion industrial,automatizacion Mexico,distribuidores de Mexico,utomatización de fábrica y logística en el sitio,Proporcionar soluciones de inspección, mantenimiento, automatización, fundición, comercio e industrias de transporte público,Logicbus mexico">
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>
    <div align="center"> <img src="images/banner/marcas-logicbus-automatizacion-industrial.webp" alt="Nuestras Marcas"
            title="Nuestras Marcas" width="100%"> </div>
    <h1 class="sr-only">Nuestras marcas</h1>
    <section class="my-3 text-center">
        <div class="gridoOcultarMB">
            <p class="paragraph blue"><b>Buscar por Nombre:</b></p>
            <input type="text" class="inputP" id="inputApp" onclick="buscadorMarcas();" onkeyup="buscadorMarcas();"
                placeholder="Marca" title="Marcas por nombre">
        </div>
        <div class="">
            <p class="paragraph blue mt-3 "><b>Buscar por Categoría:</b></p>
            <div class="mb-5 filtro-categorias gridoOcultarMB">
                <button id="todas" class="btn btn-blue btn-lg m-1 on" onclick="todas();" type="button">
                    TODAS
                </button>
                <button id="adquisicion" class="btn btn-blue btn-lg m-1"
                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button">
                    <img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                        alt="Adquisición y Registro de Datos DAQ" title="Adquisición y Registro de Datos DAQ"
                        width="30px">
                    ADQUISICIÓN Y REGISTRO DE DATOS DAQ
                </button>
                <button id="automatizacion" class="btn btn-blue btn-lg m-1"
                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button">
                    <img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                        alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                        width="30px">
                    AUTOMATIZACIÓN Y CONTROL DE PROCESOS
                </button>
                <button id="biotecnologia" class="btn btn-blue btn-lg m-1"
                    onclick="BuscarMarcas('biotecnologia','biotecnologia');" type="button">
                    <img class="ImgIcon" src="assets/biotecnologia.svg" alt="Biotecnología/Hospitales"
                        title="Biotecnología/Hospitales" width="30px"> BIOTECNOLOGÍA/HOSPITALES
                </button>
                <button id="energia" class="btn btn-blue btn-lg m-1" onclick="BuscarMarcas('energia','energia');"
                    type="button">
                    <img class="ImgIcon" src="assets/consumo-y-analisis-de-energia-electrica.svg"
                        alt="Consumo y Análisis de Energía" title="Consumo y Análisis de Energía" width="30px"> CONSUMO
                    Y ANÁLISIS DE ENERGÍA
                </button>
                <button id="iot" class="btn btn-blue btn-lg m-1" onclick="BuscarMarcas('iot','iot');" type="button">
                    <img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="30px"> IOT
                </button>
                <button id="oee" class="btn btn-blue btn-lg m-1" onclick="BuscarMarcas('oee','oee');" type="button">
                    <img class="ImgIcon" src="assets/oee.svg" alt="OEE y Productividad" title="OEE y Productividad"
                        width="30px">
                    OEE Y PRODUCTIVIDAD
                </button>
                <button id="computo" class="btn btn-blue btn-lg m-1" onclick="BuscarMarcas('computo','computo');"
                    type="button">
                    <img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                        alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                        width="30px"> PC'S Y
                    COMUNICACIONES INDUSTRIALES
                </button>
                <button id="prueba" class="btn btn-blue btn-lg m-1" onclick="BuscarMarcas('prueba','pruebasm');"
                    type="button">
                    <img class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                        title="Prueba y Medición" width="30px"> PRUEBA Y MEDICIÓN
                </button>
                <button id="robotica" class="btn btn-blue btn-lg m-1" onclick="BuscarMarcas('robotica','robotica');"
                    type="button">
                    <img class="ImgIcon" src="assets/vision-artificial-y-robots.svg" alt="Robótica y Visión Artificial"
                        title="Robótica y Visión Artificial" width="30px"> ROBÓTICA y VISIÓN ARTIFICIAL
                </button>
                <button id="sensores" class="btn btn-blue btn-lg m-1" onclick="BuscarMarcas('sensores','sensores');"
                    type="button">
                    <img class="ImgIcon" src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                        title="Sensores y Trnasductores" width="30px"> SENSORES Y TRANSDUCTORES
                </button>
                <button id="software" class="btn btn-blue btn-lg m-1" onclick="BuscarMarcas('software','software');"
                    type="button">
                    <img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                        alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo"
                        width="30px">
                    SOFTWARE Y HERRAMIENTAS DE DESARROLLO
                </button>
            </div>
            <div class="container gridoOcultarPC">
                <select id="filtroMobile" class="selectCM" onchange="categoriasMarcas()">
                    <option value="todas" id="todas" name="todas" selected>TODAS</option>
                    <option value="adquisiciond" id="adquisiciond" name="adquisiciond">ADQUISICIÓN Y REGISTRO DE DATOS
                        DAQ</option>
                    <option value="automatizacion" id="automatizacion" name="automatizacion">AUTOMATIZACIÓN Y CONTROL DE
                        PROCESOS</option>
                    <option value="biotecnologia" id="biotecnologia" name="biotecnologia">BIOTECNOLOGÍA/HOSPITALES
                    </option>
                    <option value="energia" id="energia" name="energia">CONSUMO Y ANÁLISIS DE ENERGÍA</option>
                    <option value="iot" id="iot" name="iot">IoT</option>
                    <option value="oee" id="oee" name="oee">OEE Y PRODUCTIVIDAD</option>
                    <option value="computo" id="computo" name="computo">PC'S Y COMUNICACIONES INDUSTRIALES</option>
                    <option value="pruebasm" id="pruebasm" name="pruebasm">PRUEBA Y MEDICIÓN</option>
                    <option value="robotica" id="robotica" name="robotica">ROBÓTICA y VISIÓN ARTIFICIAL</option>
                    <option value="sensores" id="sensores" name="sensores">SENSORES Y TRANSDUCTORES</option>
                    <option value="software" id="software" name="software">SOFTWARE Y HERRAMIENTAS DE DESARROLLO
                    </option>
                </select>
            </div>
        </div>
    </section>
    <div class="gridoOcultarMB">
        <div class="gridContMitadPC " id="divmarca">
            <!--#-->
            <section class="sectionMar computo software iot">
                <div class="marcaMainM">
                    <div class="marcaProductM ">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="3onedata"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/3ONEDATA.webp" alt="3onedata"
                                        title="3onedata"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="3onedata">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp"
                            alt="China">
                        <a href="3onedata"> <img class="imgLogoM" src="images/nuestras_marcas/3ONEDATA.webp"
                                alt="3onedata" title="3onedata"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">3ONEDATA</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Comunicación Industrial y Gestión de Redes</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Switches industriales</li>
                                <li>Convertidores de interfaz</li>
                                <li>comunicacion inalámbrica</li>
                                <li>Conectividad serial</li>
                                <li>Convertidores de protocolos</li>
                                <li>Softwares para gestión de redes</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                                <button id="software" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('software','software');" type="button"><img class="ImgIcon"
                                        src="assets/software-y-herramientas-de-desarrollo.svg"
                                        alt="Software y Herramientas de Desarrollo"
                                        title="Software y Herramientas de Desarrollo" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--A-->
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="aicsys"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/AICSYS.webp"
                                        alt="AICSYS Computadoras industriales para montaje en rack"
                                        title="AICSYS Computadoras industriales para montaje en rack"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="aicsys">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/taib.webp"
                            alt="Taiwan">
                        <a href="aicsys"> <img class="imgLogoM" src="images/nuestras_marcas/AICSYS.webp"
                                alt="AICSYS Computadoras industriales para montaje en rack"
                                title="AICSYS Computadoras industriales para montaje en rack"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">AICSYS</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Computadoras Industriales para Montaje en Rack</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>IPC para montaje en rack 1U, 2U, 3U y 4U</li>
                                <li>IPC para montaje en pared</li>
                                <li>Chasis industrial con ranuras 5.25”, 3.5” y 2.5”</li>
                                <li>Soporte para tarjetas Mini-ITX y Micro-ATX</li>
                                <li>SBC full-length PICMG o de medio tamaño bus ISA</li>
                                <li>Backplane con slots ISA, PCI y PCIe</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sectionMar automatizacion robotica">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="https://www.logicbus.com.mx/allybot">
                                    <img class="imgMain"
                                        src="https://www.logicbus.com.mx/images/nuestras_marcas/productos-marca/allybot.webp"
                                        alt="ALLYBOT" title="ALLYBOT">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span>
                                        <a href="https://www.logicbus.com.mx/allybot">Ver Marca</a>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM">
                        <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp" alt="China">
                        <a href="https://www.logicbus.com.mx/allybot">
                            <img class="imgLogoM" src="https://www.logicbus.com.mx/images/nuestras_marcas/allybot.webp"
                                alt="Soluciones de Limpieza Autónoma Inteligente"
                                title="Soluciones de Limpieza Autónoma Inteligente">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">ALLYBOT</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Soluciones de Limpieza Autónoma Inteligente</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Robots comerciales de limpieza</li>
                                <li>Barrido, aspirado y fregado automatizado</li>
                                <li>Navegación autónoma con IA</li>
                                <li>Operación continua 24/7</li>
                                <li>Monitoreo y gestión remota</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="robotica" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('robotica','robotica');" type="button">
                                    <img class="ImgIcon" src="assets/vision-artificial-y-robots.svg"
                                        alt="Robótica y Visión Artificial" title="Robótica y Visión Artificial"
                                        width="40px">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sectionMar automatizacion robotica">
                <div class="marcaMainM">
                    <div class="marcaProductM ">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="applied-motion-products"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/APPLIED-MOTION.webp"
                                        alt="Applied Motion Products control de movimiento"
                                        title="Applied Motion Products control de movimiento"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="applied-motion-products">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="applied-motion-products"> <img class="imgLogoM"
                                src="images/nuestras_marcas/APPLIED-MOTION.webp"
                                alt="Applied Motion Products control de movimiento"
                                title="Applied Motion Products control de movimiento"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">APPLIED MOTION</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Soluciónes de Control de Movimiento para la
                                Automatización </b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Motores a paso</li>
                                <li>Servomotores</li>
                                <li>Drivers</li>
                                <li>Motores</li>
                                <li>Controladores</li>
                                <li>Reductores</li>
                                <li>Fuentes de alimentación</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="robotica" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('robotica','robotica');" type="button"><img class="ImgIcon"
                                        src="assets/vision-artificial-y-robots.svg" alt="Robótica y Visión Artificial"
                                        title="Robótica y Visión Artificial" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="arbor"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/ARBOR.webp"
                                        alt="Arbor Computación Embebida y Soluciones IoT"
                                        title="Arbor Computación Embebida y Soluciones IoT"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="arbor">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/taib.webp"
                            alt="Taiwan">
                        <a href="arbor"> <img class="imgLogoM" src="images/nuestras_marcas/ARBOR.webp"
                                alt="Arbor Computación Embebida y Soluciones IoT"
                                title="Arbor Computación Embebida y Soluciones IoT">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">ARBOR</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Computación Embebida y Soluciones IoT</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Computadoras industriales</li>
                                <li>Sistemas embebidos</li>
                                <li>Soluciones IoT</li>
                                <li>Tablets robustas</li>
                                <li>PDAs industriales</li>
                                <li>Monitores industriales</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="arestech"><img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/ARESTECH.webp"
                                        alt="Arestech PC PANEL MONITOR INDUSTRIAL"
                                        title="Arestech PC PANEL MONITOR INDUSTRIAL"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="arestech">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/taib.webp"
                            alt="Taiwan">
                        <a href="arestech"> <img class="imgLogoM" src="images/nuestras_marcas/ARESTECH.webp"
                                alt="Arestech PC PANEL MONITOR INDUSTRIAL" title="Arestech PC PANEL MONITOR INDUSTRIAL">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">ARESTECH</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Monitores y Computadoras Industriales</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Computadoras embebidas</li>
                                <li>Paneles PC industriales</li>
                                <li>Monitor táctil</li>
                                <li>Productos de diseño modular</li>
                                <li>Soporte para Atom, Pentium, Celeron, Core i3, Core i5 y Core i7</li>
                                <li>Opción con ranuras PCI y PCIe y compatibilidad con GPU</li>
                                <li>Monitores y panel PC con protección IP65, IP66 e IP69K</li>
                                <li>Pantallas con tamaño de 10.4" a 24"</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg" alt="Cómputo industrial"
                                        title="Cómputo industrial" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sectionMar iot oee software">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="auk-industries"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/img-single-asset-deep-dive-desktop.webp"
                                        alt="Auk industries Sistema digital para el monitoreo de la Eficiencia General de los Equipos (OEE) sencillo y escalable"
                                        title="Auk industries Sistema digital para el monitoreo de la Eficiencia General de los Equipos (OEE) sencillo y escalable">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="auk-industries">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/singapur.webp"
                            alt="Singapur">
                        <a href="auk-industries"> <img class="imgLogoM" src="images/nuestras_marcas/AUK-INDUSTRIES.webp"
                                alt="Auk industries Sistema digital para el monitoreo de la Eficiencia General de los Equipos (OEE) sencillo y escalable"
                                title="Auk industries Sistema digital para el monitoreo de la Eficiencia General de los Equipos (OEE) sencillo y escalable">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">AUK INDUSTRIES</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Sistema Digital para el Monitoreo de la Eficiencia
                                General de los Equipos (OEE) Sencillo y Escalable</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>OEE</li>
                                <li>Tiempo de ciclo de las máquinas</li>
                                <li>Utilización</li>
                                <li>Process parameters</li>
                                <li>Relación de productos defectuosos y más</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="oee" class="btn p-0 btnIcon" onclick="BuscarMarcas('oee','oee');"
                                    type="button"><img class="ImgIcon" src="assets/oee.svg" alt="OEE y Productividad"
                                        title="OEE y Productividad" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                                <button id="software" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('software','software');" type="button"><img class="ImgIcon"
                                        src="assets/software-y-herramientas-de-desarrollo.svg"
                                        alt="Software y Herramientas de Desarrollo"
                                        title="Software y Herramientas de Desarrollo" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion robotica">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="https://www.logicbus.com.mx/autoxing-technology"> <img class="imgMain"
                                        src="https://www.logicbus.com.mx/images/nuestras_marcas/productos-marca/autoxing-producto.webp"
                                        alt="AUTOXING" title="AUTOXING">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span>
                                        <a href="https://www.logicbus.com.mx/autoxing-technology">Ver Marca</a>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp"
                            alt="China">
                        <a href="https://www.logicbus.com.mx/autoxing-technology"> <img class="imgLogoM"
                                src="https://www.logicbus.com.mx/images/nuestras_marcas/autoxing.webp"
                                alt="Robótica móvil autónoma para la entrega en entornos comerciales e industriales"
                                title="Robótica móvil autónoma para la entrega en entornos comerciales e industriales">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">AUTOXING</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Robótica móvil autónoma para la entrega en entornos
                                comerciales e industriales</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>AMR industriales</li>
                                <li>Robots de Entrega</li>
                                <li>Montacargas inteligente</li>
                                <li>Robots de Desinfección</li>
                                <li>Accesorios y Componentes</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="robotica" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('robotica','robotica');" type="button"><img class="ImgIcon"
                                        src="assets/vision-artificial-y-robots.svg" alt="Robótica y Visión Artificial"
                                        title="Robótica y Visión Artificial" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--B-->
            <section class="sectionMar adquisiciond">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="brainchild"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/BRAINCHILD.webp"
                                        alt="BrainChild Registradores de datos"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="brainchild">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/taib.webp"
                            alt="Taiwan">
                        <a href="brainchild"> <img class="imgLogoM" src="images/nuestras_marcas/Brainchild.webp"
                                alt="BrainChild Registradores de datos" title="BrainChild Registradores de datos"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">BRAINCHILD</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Controladores y Registradores de Alta Precisión</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Registradores de gráfica en pantalla</li>
                                <li>Registradores de pantalla táctil</li>
                                <li>Registradores de datos sin papel</li>
                                <li>Accesorios y componentes</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button"><img
                                        class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición y Registro de Datos DAQ"
                                        title="Adquisición y Registro de Datos DAQ" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--C-->
            <section class="sectionMar sensores">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="calex"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/CALEX.webp"
                                        alt="CALEX Sensores de Temperatura" title="CALEX Sensores de Temperatura"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="calex">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/ukb.webp"
                            alt="Reino Unido">
                        <a href="calex"> <img class="imgLogoM" src="images/nuestras_marcas/CALEX.webp"
                                alt="CALEX Sensores de Temperatura" title="CALEX Sensores de Temperatura"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">CALEX</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Sensores de Temperatura Infrarrojos</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Sensores de temperatura infrarrojos</li>
                                <li>Registradores de datos de temperatura por infrarrojos</li>
                                <li>Indicadores de temperatura</li>
                                <li>Controladores PID</li>
                                <li>Calibradores de cuerpo negro</li>
                                <li>Termopares</li>
                                <li>Termómetros de resistencia</li>
                                <li>Convertidores DC/DC</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="chainway"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/CHAINWAY.webp"
                                        alt="CHAINWAY Tablets y Handhels Industriales"
                                        title="CHAINWAY Tablets y Handhels Industriales" width=""> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="chainway">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp"
                            alt="China">
                        <a href="chainway"> <img class="imgLogoM" src="images/nuestras_marcas/CHAINWAY.webp"
                                alt="CHAINWAY Tablets y Handhels Industriales"
                                title="CHAINWAY Tablets y Handhels Industriales"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">CHAINWAY</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Tablets y Handhelds</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Computadoras móviles</li>
                                <li>Escáneres</li>
                                <li>Lectores RFID</li>
                                <li>Tabletas</li>
                                <li>Lectores biométricos</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar iot computo oee">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="cimon-software-scada-industrial"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/CIMON.webp"
                                        alt="CIMON Automatización industrial y Control de sistemas"
                                        title="CIMON Automatización industrial y Control de sistemas"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="cimon-software-scada-industrial">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/cosb.webp"
                            alt="Corea del Sur">
                        <a href="cimon-software-scada-industrial"> <img class="imgLogoM"
                                src="images/nuestras_marcas/CIMON.webp"
                                alt="CIMON Automatización industrial y Control de sistemas"
                                title="CIMON Automatización industrial y Control de sistemas"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">CIMON</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Automatización Industrial y Control de Sistemas</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Sistema SCADA</li>
                                <li>PLCs modulares</li>
                                <li>HMIs y HMIs hibrídos</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                                <button id="oee" class="btn p-0 btnIcon" onclick="BuscarMarcas('oee','oee');"
                                    type="button"><img class="ImgIcon" src="assets/oee.svg" alt="OEE y Productividad"
                                        title="OEE y Productividad" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="cincoze"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/CINCOZE.webp"
                                        alt="CINCOZE Sistemas informáticos industriales"
                                        title="CINCOZE Sistemas informáticos industriales">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="cincoze">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/taib.webp"
                            alt="Taiwan">
                        <a href="cincoze"> <img class="imgLogoM" src="images/nuestras_marcas/CINCOZE.webp"
                                alt="CINCOZE Sistemas informáticos industriales"
                                title="CINCOZE Sistemas informáticos industriales">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">CINCOZE</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Computadoras, Panel PCs y Monitores Industriales</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Computadoras compactas industriales</li>
                                <li>Paneles PC industriales</li>
                                <li>Monitor táctil</li>
                                <li>Productos de diseño modular</li>
                                <li>Procesadores Atom, Pentium, Celeron, Core i3, Core i5, Core i7, Core i9</li>
                                <li>Opción con ranuras PCI, PCIe y soporte con GPU</li>
                                <li>Monitores y panel PC cpn protección IP65</li>
                                <li>Pantallas con tamaño de 8.4" a 24"</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                                <button id="oee" class="btn p-0 btnIcon" onclick="BuscarMarcas('oee','oee');"
                                    type="button"><img class="ImgIcon" src="assets/oee.svg" alt="OEE y Productividad"
                                        title="OEE y Productividad" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="controllino"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/CONTROLLINO.webp"
                                        alt="CONTROLLINO PLC industrial compatible con Arduino"
                                        title="CONTROLLINO PLC industrial compatible con Arduino"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="controllino">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/espana.webp"
                            alt="Austria">
                        <a href="controllino"> <img class="imgLogoM" src="images/nuestras_marcas/CONTROLLINO.webp"
                                alt="CONTROLLINO PLC industrial compatible con Arduino"
                                title="CONTROLLINO PLC industrial compatible con Arduino"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">CONTROLLINO</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">PLC's de Grado Industrial Compatible 100% con Arduino</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Controllino Mini</li>
                                <li>Controllino Maxi</li>
                                <li>Controllino Maxi Power</li>
                                <li>Controllino Maxi Automation</li>
                                <li>Controllino Mega</li>
                                <li>Controllino Neo</li>
                                <li>Training Kit</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--D-->
            <section class="sectionMar iot sensores">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="daviteq"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/DAVITEQ.webp"
                                        alt="DAVITEQ Sensores IoT (Sub-GHz, LoRaWAN, Sigfox, NB-IoT)"
                                        title="DAVITEQ Sensores IoT (Sub-GHz, LoRaWAN, Sigfox, NB-IoT)"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span>
                                        <a href="daviteq">Ver Marca</a>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/vieb.webp"
                            alt="Vietnam">
                        <a href="daviteq"> <img class="imgLogoM" src="images/nuestras_marcas/DAVITEQ.webp"
                                alt="DAVITEQ Sensores IoT (Sub-GHz, LoRaWAN, Sigfox, NB-IoT)"
                                title="DAVITEQ Sensores IoT (Sub-GHz, LoRaWAN, Sigfox, NB-IoT)"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">DAVITEQ</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Sensores IoT (Sub-GHz, LoRaWAN, Sigfox, NB-IoT)</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Sensores y actuadores inalámbricos</li>
                                <li>Productos IoT</li>
                                <li>Convertidores IoT</li>
                                <li>Paquetes de soluciones de IoT</li>
                                <li>Sub-GHz</li>
                                <li>LoRaWAN</li>
                                <li>Sigfox</li>
                                <li>NB-IoT</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="davo-lin"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/DAVO.webp"
                                        alt="DAVO Lin Teclados Industriales" title="DAVO Lin Teclados Industriales">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span>
                                        <a href="davo-lin">Ver Marca</a>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp"
                            alt="China">
                        <a href="davo-lin"> <img class="imgLogoM" src="images/nuestras_marcas/DAVO-LIN.webp"
                                alt="DAVO Lin Tevlados industriales" title="DAVO Lin Tevlados industriales"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">DAVO LIN</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Teclados Industriales, Númericos, Trackball, Touchpad</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Teclados de uso rudo</li>
                                <li>Teclados metalicos</li>
                                <li>Teclados de silicón</li>
                                <li>Teclados con trackball, trackpoint, joystick y con o sin touchpad</li>
                                <li>Teclados con conexión inalámbrica</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar adquisiciond pruebasm">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="digilent"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/DIGILENT.webp"
                                        alt="DIGILENT Dispositivos electrónicos de prueba, medición y desarrollo"
                                        title="DIGILENT Dispositivos electrónicos de prueba, medición y desarrollo">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span>
                                        <a href="digilent">Ver Marca</a>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="digilent"> <img class="imgLogoM" src="images/nuestras_marcas/DIGILENT.webp"
                                alt="DIGILENT Dispositivos electrónicos de prueba, medición y desarrollo"
                                title="DIGILENT Dispositivos electrónicos de prueba, medición y desarrollo"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">DIGILENT</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Dispositivos Electrónicos de Prueba, Medición y
                                Desarrollo</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Dispositivos digitales de prueba y medición (analizador y generador de patrones
                                    digitales) </li>
                                <li>Dispositivos análogos de prueba y medición (osciloscopio, analizador lógico y fuente
                                    de alimentación variable)</li>
                                <li>Placas FPGA</li>
                                <li>Módulos JTAG</li>
                                <li>Software</li>
                                <li>Accesorios</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button"><img
                                        class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición y Registro de Datos DAQ"
                                        title="Adquisición y Registro de Datos DAQ" width="40px"></button>
                                <button id="prueba" class="btn p-0 btnIcon" onclick="BuscarMarcas('prueba','pruebasm');"
                                    type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg"
                                        alt="Prueba y Medición" title="Prueba y Medición" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion robotica">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="dorna-robotics"> <img class="imgMain"
                                        src="https://www.logicbus.com.mx/images/nuestras_marcas/productos-marca/dorna.webp"
                                        alt="Dorna Robotics" title="Dorna Robotics">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span>
                                        <a href="dorna-robotics">Ver Marca</a>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="dorna-robotics"> <img class="imgLogoM"
                                src="https://www.logicbus.com.mx/images/nuestras_marcas/dorna-robotics.webp"
                                alt="Robots de Sobremesa Compactos para Automatización Industrial, Académica y de Investigación"
                                title="Robots de Sobremesa Compactos para Automatización Industrial, Académica y de Investigación">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">DORNA ROBOTICS</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Robots compactos y versátiles para automatización
                                industrial inteligente</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Robots de 5 ejes multipropósito</li>
                                <li>Sistemas de automatización para escritorio</li>
                                <li>Accesorios: pinzas, cámaras, transportadores</li>
                                <li>Controladores abiertos con API y SDK</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="robotica" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('robotica','robotica');" type="button"><img class="ImgIcon"
                                        src="assets/vision-artificial-y-robots.svg" alt="Robótica y Visión Artificial"
                                        title="Robótica y Visión Artificial" width="40px"></button>
                            </div>
                        </div>
                    </div>
            </section>
            <!--E-->
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="emdoor-laptops-industriales"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/EMDOO.webp"
                                        alt="Emdoor,tablets de uso rudo, laptops industriales"
                                        title="Emdoor,tablets de uso rudo, laptops industriales"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="emdoor-laptops-industriales">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp"
                            alt="China">
                        <a href="emdoor-laptops-industriales"> <img class="imgLogoM"
                                src="images/nuestras_marcas/EMDOOR.webp"
                                alt="Emdoor ,tablets de uso rudo,laptops industriales"
                                title="Emdoor ,tablets de uso rudo,laptops industriales"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">EMDOOR</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Tablets, Laptops Industriales y Robustas</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Handhelds con display de 4", 5", 6"</li>
                                <li>Tablets robustas con display de 8" 10.1" y 12.1"</li>
                                <li>Laptops industriales con display desde 12" hasta 15.6"</li>
                                <li>Panel PCs con display de 10.1", 15.6" y 21.5"</li>
                                <li>Compatibles con Windows y Android</li>
                                <li>Soporte con WIFI, Bluetooth, GPS, RFID, 4G LTE, lectores de códigos de barra</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar sensores iot">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="https://www.logicbus.com.mx/ems-kontrol">
                                    <img class="imgMain" src="images/nuestras_marcas/productos-marca/ems-kontrol.webp"
                                        alt="EMS KONTROL Sensores Industriales para Monitoreo"
                                        title="EMS KONTROL Sensores Industriales para Monitoreo">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="https://www.logicbus.com.mx/ems-kontrol">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM">
                        <!-- Asumí el nombre 'turquia.webp' para la bandera, cámbialo si tu archivo se llama diferente -->
                        <img class="imgBanderaM" src="images/nuestras_marcas/bandera/turb.webp" alt="Turquía">
                        <a href="https://www.logicbus.com.mx/ems-kontrol">
                            <img class="imgLogoM" src="images/nuestras_marcas/ems-kontrol-logo.webp"
                                alt="EMS KONTROL Sensores Industriales para Monitoreo"
                                title="EMS KONTROL Sensores Industriales para Monitoreo">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">EMS KONTROL</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Sensores Industriales para Monitoreo Ambiental y de
                                Procesos</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Sensores de temperatura y humedad</li>
                                <li>Sensores de dióxido de carbono (CO2)</li>
                                <li>Sensores de presión diferencial</li>
                                <li>Sensores de gases (amoniaco, etileno, SO2, CO, O2)</li>
                                <li>Sensores portátiles con pantalla</li>
                                <li>Dispositivos de control de pared y panel</li>
                                <li>Sistema de rastreo de zonas Or-Tak con app móvil</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button">
                                    <img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                                        alt="Sensores y Transductores" title="Sensores y Transductores" width="40px">
                                </button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button">
                                    <img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--F-->
            <section class="sectionMar automatizacion software iot">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="fatek"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/FATEK.webp"
                                        alt="FATEK fabricante y desarrollador PLC"
                                        title="FATEK fabricante y desarrollador PLC"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="fatek">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/taib.webp"
                            alt="Taiwan">
                        <a href="fatek"> <img class="imgLogoM" src="images/nuestras_marcas/FATEK.webp"
                                alt="FATEK fabricante y desarrollador PLC" title="FATEK fabricante y desarrollador PLC">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">FATEK</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">PLC's Industriales Expandibles y HMI's</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>PLC</li>
                                <li>HMI</li>
                                <li>HMI con PLC</li>
                                <li>Plataforma IoT</li>
                                <li>Software SCADA</li>
                                <li>Servidor OPC</li>
                                <li>Fuente de alimentación</li>
                                <li>Servos</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="software" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('software','software');" type="button"><img class="ImgIcon"
                                        src="assets/software-y-herramientas-de-desarrollo.svg"
                                        alt="Software y Herramientas de Desarrollo"
                                        title="Software y Herramientas de Desarrollo" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar sensores software pruebasm">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="futek"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/FUTEK.webp"
                                        alt="FUTEK sensor de torque y celdas de carga"
                                        title="FUTEK sensor de toruqe y celdas de carga">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="futek">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="futek"> <img class="imgLogoM" src="images/nuestras_marcas/FUTEK.webp"
                                alt="FUTEK sensor de torque y celdas de carga"
                                title="FUTEK sensor de toruqe y celdas de carga"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">FUTEK</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Celdas de Carga y Sensores de Torque</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Celdas de carga y sensores de fuerza</li>
                                <li>Sensores de torque</li>
                                <li>Sensores de presión</li>
                                <li>Sensores multieje</li>
                                <li>Sensores y electrónica personalizados</li>
                                <li>Sensores OEM</li>
                                <li>Sensores nano de fuerza</li>
                                <li>Instrumentos y amplificadores</li>
                                <li>Software</li>
                                <li>Servicios de calibración</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                                <button id="software" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('software','software');" type="button"><img class="ImgIcon"
                                        src="assets/software-y-herramientas-de-desarrollo.svg"
                                        alt="Software y Herramientas de Desarrollo"
                                        title="Software y Herramientas de Desarrollo" width="40px"></button>
                                <button id="prueba" class="btn p-0 btnIcon" onclick="BuscarMarcas('prueba','pruebasm');"
                                    type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg"
                                        alt="Prueba y Medición" title="Prueba y Medición" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--G-->
            <section class="sectionMar adquisiciond iot pruebasm">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="graphtec"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/GRAPHTEC.webp"
                                        alt="Graphtec Instrumentos de adquisicion y registro de datos" title="Graphtec">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="graphtec">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/japb.webp"
                            alt="Japón">
                        <a href="graphtec"> <img class="imgLogoM" src="images/nuestras_marcas/GRAPHTEC.webp"
                                alt="Graphtec Instrumentos de adquisicion y registro de datos" title="Graphtec"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">GRAPHTEC</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Registradores de Datos Portátiles</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Registrador de datos autónomo multicanal (hasta 200 entradas)</li>
                                <li>Registrador de datos de alta velocidad/voltaje</li>
                                <li>Plataforma de adquisición de datos</li>
                                <li>Registrador de datos de CO2</li>
                                <li>Registrador de datos de luz/UV</li>
                                <li>Registrador de datos de temperatura/humedad</li>
                                <li>Registrador de datos de vibración/aceleración</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button"><img
                                        class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición y Registro de Datos DAQ"
                                        title="Adquisición y Registro de Datos DAQ" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                                <button id="prueba" class="btn p-0 btnIcon" onclick="BuscarMarcas('prueba','pruebasm');"
                                    type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg"
                                        alt="Prueba y Medición" title="Prueba y Medición" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--I-->
            <section class="sectionMar automatizacion adquisiciond energia software pruebasm iot">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="icp-das"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/ICPDAS.webp"
                                        alt="ICP DAS Adquisición de Datos" title="ICP DAS Adquisición de Datos"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="icp-das">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/taib.webp"
                            alt="Taiwan">
                        <a href="icp-das"> <img class="imgLogoM" src="images/nuestras_marcas/ICPDAS.webp"
                                alt="ICP DAS Adquisición de Datos" title="ICP DAS Adquisición de Datos"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">ICP DAS</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Adquisición y Registro de Datos</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Controladores M2M e IoT</li>
                                <li>HMI</li>
                                <li>PC industriales y monitores</li>
                                <li>Convertidores de protocolo</li>
                                <li>Módulos de E/S de adquisición de datos remotos</li>
                                <li>Modbus RTU, Modbus TCP, bus CAN, Profibus, Profinet, Ethernet/IP, HART, EtherCAT,
                                    DeviceNet, BACnet, Wi-Fi y Zigbee</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button"><img
                                        class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición de datos" title="Adquisición de datos" width="40px"></button>
                                <button id="energia" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('energia','energia');" type="button"><img class="ImgIcon"
                                        src="assets/consumo-y-analisis-de-energia-electrica.svg"
                                        alt="Consumo y Análisis de Energía" title="Consumo y Análisis de Energía"
                                        width="40px"></button>
                                <button id="software" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('software','software');" type="button"><img class="ImgIcon"
                                        src="assets/software-y-herramientas-de-desarrollo.svg"
                                        alt="Software y Herramientas de Desarrollo"
                                        title="Software y Herramientas de Desarrollo" width="40px"></button>
                            </div>
                            <div class="d-flex justify-content-around mt-3">
                                <button id="prueba" class="btn p-0 btnIcon" onclick="BuscarMarcas('prueba','pruebasm');"
                                    type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg"
                                        alt="Prueba y Medición" title="Prueba y Medición" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="./industrial-shields"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/INDUSTRIAL-SHIELDS.webp"
                                        alt="Industrial Shields Hardware Industrial Basado en Plataformas de Código Abierto"
                                        title="Industrial Shields Hardware Industrial Basado en Plataformas de Código Abierto">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="./industrial-shields">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/espana.webp"
                            alt="España">
                        <a href="./industrial-shields"> <img class="imgLogoM"
                                src="images/nuestras_marcas/INDUSTRIAL-SHIELDS.webp"
                                alt="Industrial Shields Hardware Industrial Basado en Plataformas de Código Abierto"
                                title="Industrial Shields Hardware Industrial Basado en Plataformas de Código Abierto">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">INDUSTRIAL SHIELDS</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Hardware Industrial Basado en Plataformas de Código
                                Abierto</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>PLCs basado en Arduino</li>
                                <li>PLCs basado en Raspberry Pi</li>
                                <li>PLCs basado en ESP32</li>
                                <li>Plataformas de entradas y salidas</li>
                                <li>Expandibles</li>
                                <li>Accesorios y complementos</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="./ipdisplays"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/ipdisplays-products.webp"
                                        alt="IP Displays Pantallas Inteligentes Industriales para Visualización y Control"
                                        title="IP Displays Pantallas Inteligentes Industriales para Visualización y Control">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="./ipdisplays">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="USA">
                        <a href="./ipdisplays"> <img class="imgLogoM" src="images/nuestras_marcas/ip-displays.webp"
                                alt="IP Displays Pantallas Inteligentes Industriales para Visualización y Control"
                                title="IP Displays Pantallas Inteligentes Industriales para Visualización y Control">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">IP DISPLAYS</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Pantallas Inteligentes Industriales para Visualización y
                                Control</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Pantallas LED para interiores</li>
                                <li>Pantallas LED para exteriores</li>
                                <li>Software</li>
                                <li>Conectividad Ethernet 10/100 integrada</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--K-->
            <section class="sectionMar automatizacion robotica">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="https://www.logicbus.com.mx/kokobots">
                                    <img class="imgMain"
                                        src="https://www.logicbus.com.mx/images/nuestras_marcas/productos-marca/KOKOBOTS.webp"
                                        alt="KOKOBOTS">
                                </a>
                            </div>
                            <br>
                            <div class="text-center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="https://www.logicbus.com.mx/kokobots">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM">
                        <!-- Nota: Se dejó la bandera original. Si Kokobots es de otro país, recuerda cambiar "chib.webp" -->
                        <img class="imgBanderaM"
                            src="https://www.logicbus.com.mx/images/nuestras_marcas/bandera/chib.webp" alt="China">
                        <a href="https://www.logicbus.com.mx/kokobots">
                            <img class="imgLogoM" src="https://www.logicbus.com.mx/images/nuestras_marcas/KOKOBOTS.webp"
                                alt="KOKOBOTS">
                        </a>
                        <div class="tituloMarcaM">
                            <b style="font-size:1.5em;">KOKOBOTS</b>
                        </div>
                        <div class="tituloMarcaM">
                            <b>Robots móviles autónomos (AMR) especializados en limpieza profesional para entornos de
                                alto tráfico</b><br>
                        </div>
                        <div>
                            <ul class="marcasCarac">
                                <li>AMR para Limpieza Profesional</li>
                                <li>Navegación inteligente y mapeo (SLAM)</li>
                                <li>Monitoreo y conectividad en la nube</li>
                                <li>Reducción de costos operativos</li>
                                <li>Para hospitales, aeropuertos e industria</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button class="btn p-0 btnIcon" onclick="BuscarMarcas('robotica','robotica');"
                                    type="button">
                                    <img class="ImgIcon"
                                        src="https://www.logicbus.com.mx/assets/vision-artificial-y-robots.svg"
                                        alt="Robótica" width="40px">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--L-->
            <section class="sectionMar sensores iot">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="loggerflex"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/LOGGERFLEX.webp"
                                        alt="LOGGERFLEX proporciona soluciones de adquisición de datos"
                                        title="LOGGERFLEX  proporciona soluciones de adquisición de datos"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="LoggerFlex">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/canb.webp"
                            alt="Canada">
                        <a href="LoggerFlex"> <img class="imgLogoM" src="images/nuestras_marcas/LOGGERFLEX.webp"
                                alt="LOGGERFLEX proporciona soluciones de adquisición de datos"
                                title="LOGGERFLEX  proporciona soluciones de adquisición de datos"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">LOGGERFLEX</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Registradores con Conexion a la Nube por Wi-Fi</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Temperatura ambiente y sonda</li>
                                <li>Humedad</li>
                                <li>Dióxido de carbono</li>
                                <li>Intensidad de luz</li>
                                <li>Cualquier salida analógica</li>
                                <li>Marcador automático</li>
                                <li>Presión de aire y tubería</li>
                                <li>Detector de inundaciones y fugas</li>
                                <li>Corriente AC</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="teclados-indice"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/LOGICBUS-TECLADOS.webp"
                                        alt="Logicbus teclados industriales" title="Logicbus"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="teclados-indice">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="teclados-indice"> <img class="imgLogoM" src="images/nuestras_marcas/LOGICBUS.webp"
                                alt="Logicbus teclados industriales" title="Logicbus"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">LOGICBUS TECLADOS INDUSTRIALES </b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Teclados Industriales</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Teclado metálico industrial</li>
                                <li>Teclado numérico metálico</li>
                                <li>Teclado a prueba de explosiones</li>
                                <li>Teclado a prueba de agua</li>
                                <li>Trackball de metal y ratón con panel táctil</li>
                                <li>Teclado de silicón</li>
                                <li>Teclado de membrana</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button id="computo" class="btn p-0 btnIcon" onclick="BuscarMarcas('computo','computo');"
                                type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                                    alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                                    width="40px"></button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar adquisiciond">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="registradores-logicbus"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/LOGICBUS-GRAFICADORES.webp"
                                        alt="Logicbus graficadores" title="Logicbus"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="registradores-logicbus">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="registradores-logicbus"> <img class="imgLogoM"
                                src="images/nuestras_marcas/LOGICBUS.webp" alt="Logicbus graficadores" title="Logicbus">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">LOGICBUS GRAFICADORES</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Graficadores Digitales Sin Papel</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Pantallas de 4.3", 12.1" y 5.6"</li>
                                <li>Hasta 48 entradas analógicas universales</li>
                                <li>100 mseg. tasa de muestreo</li>
                                <li>Canales externos (Modbus)</li>
                                <li>Pantallas personalizada</li>
                                <li>FDA 21 CFR parte 11</li>
                                <li>Servidor web</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button"><img
                                        class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición y Registro de Datos DAQ"
                                        title="Adquisición y Registro de Datos DAQ" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--M-->
            <section class="sectionMar adquisiciond software iot sensores biotecnologia">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="madgetech"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/MADGETECH.webp"
                                        alt="MADGETECH soluciones de data logger"
                                        title="MADGETECH  soluciones de data logger"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="madgetech">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="madgetech"> <img class="imgLogoM" src="images/nuestras_marcas/MADGETECH.webp"
                                alt="MADGETECH soluciones de data logger" title="MADGETECH  soluciones de data logger">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">MADGETECH</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Registradores de Alta Gama para la Industria con Software
                                de Análisis de Datos</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Temperatura</li>
                                <li>Humedad, presión</li>
                                <li>Pulso / evento / estado</li>
                                <li>Voltaje / corriente</li>
                                <li>Choque / vibración</li>
                                <li>Nivel de agua, viento, pH</li>
                                <li>Galgas / celdas de carga</li>
                                <li>Dióxido de carbono</li>
                                <li>Software gratuito en la nube, transmite datos en tiempo real a la nube</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button"><img
                                        class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición y Registro de Datos DAQ"
                                        title="Adquisición y Registro de Datos DAQ" width="40px"></button>
                                <button id="software" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('software','software');" type="button"><img class="ImgIcon"
                                        src="assets/software-y-herramientas-de-desarrollo.svg"
                                        alt="Software y Herramientas de Desarrollo"
                                        title="Software y Herramientas de Desarrollo" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                                <button id="biotecnologia" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('biotecnologia','biotecnologia');" type="button"><img
                                        class="ImgIcon" src="assets/biotecnologia.svg" alt="Biotecnología/Hospitales"
                                        title="Biotecnología/Hospitales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar pruebaymedicion automatizacion adquisiciond software">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="https://www.logicbus.com.mx/micsig">
                                    <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/micsig-products.webp"
                                        alt="MICSIG Osciloscopios y Sondas de Precisión" title="MICSIG">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="https://www.logicbus.com.mx/micsig">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM">
                        <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp" alt="China">
                        <a href="https://www.logicbus.com.mx/micsig">
                            <img class="imgLogoM" src="images/nuestras_marcas/micsig-logo.webp"
                                alt="MICSIG Osciloscopios y Sondas" title="MICSIG">
                        </a>
                        <div class="tituloMarcaM">
                            <b style="font-size:1.5em;">MICSIG</b>
                        </div>
                        <div class="tituloMarcaM">
                            <b class="">Osciloscopios y Sondas de Precisión para Diagnóstico Electrónico</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Osciloscopios de alta resolución de 12 bits</li>
                                <li>Osciloscopios tipo tablet de 8 bits</li>
                                <li>Osciloscopios automotrices</li>
                                <li>Sonda aislada de fibra óptica</li>
                                <li>Sonda diferencial de alto voltaje</li>
                                <li>Sonda de corriente CA/CD</li>
                                <li>Sonda de corriente Rogowski</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <!-- Categoría: Prueba y Medición -->
                                <button id="pruebas" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('pruebas','pruebaymedicion');" type="button">
                                    <img class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                                        title="Prueba y Medición" width="40px">
                                </button>
                                <!-- Categorías agregadas del ejemplo original -->
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button">
                                    <img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px">
                                </button>
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button">
                                    <img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición de datos" title="Adquisición de datos" width="40px">
                                </button>
                                <button id="software" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('software','software');" type="button">
                                    <img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                                        alt="Software y Herramientas de Desarrollo"
                                        title="Software y Herramientas de Desarrollo" width="40px">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--N-->
            <section class="sectionMar automatizacion sensores software iot">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="national-control-devices-ncd"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/NCD.webp"
                                        alt="National Control Devices industria de IoT ncd"
                                        title="National Control Devices industria de IoT ncd"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="national-control-devices-ncd">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="national-control-devices-ncd"> <img class="imgLogoM"
                                src="images/nuestras_marcas/NCD.webp"
                                alt="National Control Devices industria de IoT ncd"
                                title="National Control Devices industria de IoT ncd"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">NATIONAL CONTROL DEVICES</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Sensores de Monitoreo y Control IoT</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Sensores: químicos, gas, ambientales, movimiento, energía</li>
                                <li>Módems: Ethernet, USB, RS-232, RS-485</li>
                                <li>Gateways: AWS, Azure, Losant, MQTT</li>
                                <li>Transmisor y receptor inalámbrico 0-10V/4~20mA</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                                <button id="software" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('software','software');" type="button"><img class="ImgIcon"
                                        src="assets/software-y-herramientas-de-desarrollo.svg"
                                        alt="Software y Herramientas de Desarrollo"
                                        title="Software y Herramientas de Desarrollo" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                            </div>
                        </div>
                    </div>
            </section>
            <!--P-->
            <section class="sectionMar sensores">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="photocraft"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/PHOTOCRAFT.webp"
                                        alt="PHOTOCRAFT Control de movimiento" title="PHOTOCRAFT Control de movimiento">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="photocraft">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="photocraft"> <img class="imgLogoM" src="images/nuestras_marcas/TRI-TRONICS.webp"
                                alt="PHOTOCRAFT Control de movimiento" title="PHOTOCRAFT Control de movimiento"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">PHOTOCRAFT</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Encoders de Rueda, Eje y Absolutos</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Encoders de eje</li>
                                <li>Eje hueco</li>
                                <li>Encoders de rueda</li>
                                <li>Encoders absolutos</li>
                                <li>Encoders de alta resolución</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar energia pruebasm">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="pico-technology"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/PICOTECH.webp"
                                        alt="PICO TECHNOLOGY osciloscopios de PC y los registradores de datos"
                                        title="PICO TECHNOLOGY osciloscopios de PC y los registradores de datos"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="pico-technology">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/ukb.webp"
                            alt="Reino Unido">
                        <a href="pico-technology"> <img class="imgLogoM"
                                src="images/nuestras_marcas/PICO-TECHNOLOGY.webp"
                                alt="PICO TECHNOLOGY osciloscopios de PC y los registradores de datos"
                                title="PICO TECHNOLOGY osciloscopios de PC y los registradores de datos"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">PICO TECHNOLOGY</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Osciloscopios y Registradores para PC</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Osciloscopios para PC</li>
                                <li>5MHz a 30GHz</li>
                                <li>1 a 8 Canales</li>
                                <li>Osciloscopios automotrices</li>
                                <li>Analizadores de redes vectoriales pico</li>
                                <li>Sintetizadores de señal</li>
                                <li>Generadores de pulsos</li>
                                <li>Registradores de datos</li>
                                <li>Sondas de osciloscopio</li>
                                <li>Prueba de RF y accesorios de microondas</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="energia" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('energia','energia');" type="button"><img class="ImgIcon"
                                        src="assets/consumo-y-analisis-de-energia-electrica.svg"
                                        alt="Consumo y Análisis de Energía" title="Consumo y Análisis de Energía"
                                        width="40px"></button>
                                <button id="prueba" class="btn p-0 btnIcon" onclick="BuscarMarcas('prueba','pruebasm');"
                                    type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg"
                                        alt="Prueba y Medición" title="Prueba y Medición" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Q-->
            <section class="sectionMar robotica biotecnologia">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="quasi"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/QUASI.webp"
                                        alt="QUASI Soluciones en Robótica Autónoma Móvil con AI"
                                        title="QUASI Soluciones en Robótica Autónoma Móvil con AI"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="quasi">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="quasi"> <img class="imgLogoM" src="images/nuestras_marcas/QUASI.webp"
                                alt="QUASI Soluciones en Robótica Autónoma Móvil con AI"
                                title="QUASI Soluciones en Robótica Autónoma Móvil con AI"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">QUASI</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Soluciones en Robótica Autónoma Móvil con AI</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Robot autonomo móvil (AMR)</li>
                                <li>Sistema de control de flotillas</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="robotica" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('robotica','robotica');" type="button"><img class="ImgIcon"
                                        src="assets/vision-artificial-y-robots.svg" alt="Robótica y Visión Artificial"
                                        title="Robótica y Visión Artificial" width="40px"></button>
                                <button id="biotecnologia" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('biotecnologia','biotecnologia');" type="button"><img
                                        class="ImgIcon" src="assets/biotecnologia.svg" alt="Biotecnología/Hospitales"
                                        title="Biotecnología/Hospitales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--R-->
            <section class="sectionMar sensores">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a
                                    href="sensores-capacitivos-sensores-de-proximidad-inductivos-magnetorresistivos-y-controladores">
                                    <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/RECHNER-SENSOR.webp"
                                        alt="RECHNER SENSORS sensores capacitivos" title="RECHNER SENSORS"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a
                                            href="sensores-capacitivos-sensores-de-proximidad-inductivos-magnetorresistivos-y-controladores">Ver
                                            Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/aleb.webp"
                            alt="Alemania">
                        <a
                            href="sensores-capacitivos-sensores-de-proximidad-inductivos-magnetorresistivos-y-controladores">
                            <img class="imgLogoM" src="images/nuestras_marcas/RECHNER-SENSORS.webp"
                                alt="RECHNER SENSORS sensores capacitivos" title="RECHNER SENSORS"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">RECHNER SENSORS</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Sensores de Proximidad y Nivel para la Industria</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Sensores capacitivos</li>
                                <li>Sensores capacitivos con distancia de detección extremadamente larga</li>
                                <li>Sistemas de medida de nivel capacitivos</li>
                                <li>Sensores magnetorresistivos</li>
                                <li>Sensores inductivos</li>
                                <li>Fuentes de alimentación / amplificadores aislados</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion sensores pruebasm">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="reign-power"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/REIGNPOWER.webp"
                                        alt="REIGN POWER Fuentes de poder fijas de montaje en riel DIN"
                                        title="REIGN POWER Fuentes de poder fijas de montaje en riel DIN"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="reign-power">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/taib.webp"
                            alt="Taiwan">
                        <a href="reign-power"> <img class="imgLogoM" src="images/nuestras_marcas/REIGN-POWER.webp"
                                alt="REIGN POWER Fuentes de poder fijas de montaje en riel DIN"
                                title="REIGN POWER Fuentes de poder fijas de montaje en riel DIN"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">REIGN POWER</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Fuentes de Alimentación Conmutadas</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Doble montaje, tornillo o riel DIN</li>
                                <li>Consumo de energía sin carga inferior a 0.3W</li>
                                <li>Pantalla digital inteligente, voltaje, corriente</li>
                                <li>Se puede conectar en serie o en paralelo</li>
                                <li>Voltaje de salida 5V, 12V, 24V, 48V</li>
                                <li>Potencia de 25W a 500W</li>
                                <li>Protección contra cortocircuitos y sobrecargas</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                                <button id="prueba" class="btn p-0 btnIcon" onclick="BuscarMarcas('prueba','pruebasm');"
                                    type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg"
                                        alt="Prueba y medición" title="Prueba y medición" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion sensores biotecnologia">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="rfid-inc"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/RFID.webp"
                                        alt="RFID Inc. sistemas de lectura y etiquetas RFID"
                                        title="RFID Inc. sistemas de lectura y etiquetas RFID"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="rfid-inc">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="rfid-inc"> <img class="imgLogoM" src="images/nuestras_marcas/RFID.webp"
                                alt="RFID Inc. sistemas de lectura y etiquetas RFID"
                                title="RFID Inc. sistemas de lectura y etiquetas RFID"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">RFID</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Lectores y Etiquetas de Radiofrecuencia</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Etiquetas RFID</li>
                                <li>Antenas RFID</li>
                                <li>Lectores RFID</li>
                                <li>Lectores RFID OEM</li>
                                <li>Interfaces RFID</li>
                                <li>Programadores RFID</li>
                                <li>Dispositivos de mano RFID</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                                <button id="biotecnologia" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('biotecnologia','biotecnologia');" type="button"><img
                                        class="ImgIcon" src="assets/biotecnologia.svg" alt="Biotecnología/Hospitales"
                                        title="Biotecnología/Hospitales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="rta"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/RTA.webp"
                                        alt="RTA convertidores de protocolos/gateways Real Time Automation"
                                        title="RTA convertidores de protocolos/gateways Real Time Automation"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="rta">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="rta"> <img class="imgLogoM" src="images/nuestras_marcas/RTA.webp"
                                alt="RTA convertidores de protocolos/gateways Real Time Automation"
                                title="RTA convertidores de protocolos/gateways Real Time Automation"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">RTA</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Convertidores de Protocolos</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Allen-Bradley PLC</li>
                                <li>ASCII / Escáner de código de barras</li>
                                <li>BACnet/IP & MS/TP </li>
                                <li>DF1 Devices</li>
                                <li>Ethernet TCP/IP</li>
                                <li>EtherNet/IP</li>
                                <li>Modbus RTU / TCP</li>
                                <li>MQTT</li>
                                <li>OPC UA Client</li>
                                <li>Profibus / Profinet</li>
                                <li>Siemens S7 PLC</li>
                                <li>USB</li>
                                <li>Interfaz web / XML</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion adquisiciond iot">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="sealevel"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/SEALEVEL.webp"
                                        alt="SEALEVEL soluciones de E/S serie y digitales"
                                        title="SEALEVEL soluciones de E/S serie y digitales"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="sealevel">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="sealevel"> <img class="imgLogoM" src="images/nuestras_marcas/SEALEVEL.webp"
                                alt="SEALEVEL soluciones de E/S serie y digitales"
                                title="SEALEVEL soluciones de E/S serie y digitales">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">SEALEVEL</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Adquisición de Datos, Convertidores e Interfaces
                                Multipuertos</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Adquisición de datos distribuido por RS232M RS485, USB, ethernet y WiFi</li>
                                <li>Entradas y salidas digitales por PCI y PCIe</li>
                                <li>Servidores seriales ethernet a 1, 2, 4, 8 hasta 16 puertos RS232, RS422 o RS485</li>
                                <li>HUBs USB industriales de alta velocidad y robustos con 4 o 7 puertos USB aislados
                                    ópticamente</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button"><img
                                        class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición de datos" title="Adquisición de datos" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion adquisiciond energia sensores iot">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="seneca"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/SENECA.webp"
                                        alt="SENECA acondicionadores de voltaje"
                                        title="SENECA acondicionadores de voltaje"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="seneca">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/itab.webp"
                            alt="Italia">
                        <a href="seneca"> <img class="imgLogoM" src="images/nuestras_marcas/SENECA.webp"
                                alt="SENECA acondicionadores de voltaje" title="SENECA acondicionadores de voltaje">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">SENECA</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Adquisición de Datos y Comunicación Industrial</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Automatización / Adquisición de datos (Modbus, CANopen, Ethernet / TCP-IP, OPC UA,
                                    IEC 61131 / SoftPLC / Straton, Instrumentos virtuales / Visual studio, SEAL, Z-NET,
                                    EASY) </li>
                                <li>Comunicación / Control remoto (GSM / 3G / Wireless, VPN, Redes, Servidor web, Fibra
                                    óptica, Convertidores serial)</li>
                                <li>Energía (MID, M-BUS, Rogowski, Efecto Hall, Estándar de eficiencia energética)</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button"><img
                                        class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición de datos" title="Adquisición de datos" width="40px"></button>
                                <button id="energia" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('energia','energia');" type="button"><img class="ImgIcon"
                                        src="assets/consumo-y-analisis-de-energia-electrica.svg"
                                        alt="Consumo y Análisis de Energía" title="Consumo y Análisis de Energía"
                                        width="40px"></button>
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar robotica">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="robots-siasun"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/SIASUN.webp"
                                        alt="SIASUN robots Colaborativos" title="SIASUN robots Colaborativos"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="robots-siasun">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp"
                            alt="China">
                        <a href="robots-siasun"> <img class="imgLogoM" src="images/nuestras_marcas/SIASUN-DUCO.webp"
                                alt="SIASUN robots Colaborativos" title="SIASUN robots Colaborativos"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">SIASUN</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Robots para Aplicaciones Industriales</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Robot colaborativo, carga útil de 1Kg a 20Kg, 6/7 ejes</li>
                                <li>Robots móviles, AMRs</li>
                                <li>Logística inteligente</li>
                                <li>Robot industrial hasta 300Kg de carga útil</li>
                                <li>Robot paralelo</li>
                                <li>Pick and place</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="robotica" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('robotica','robotica');" type="button"><img class="ImgIcon"
                                        src="assets/vision-artificial-y-robots.svg" alt="Robótica y Visión Artificial"
                                        title="Robótica y Visión Artificial" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar pruebasm">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="siglent"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/SIGLENT.webp"
                                        alt="SIGLENT osciloscopio" title="SIGLENT osciloscopio"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="siglent">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp"
                            alt="China">
                        <a href="siglent"> <img class="imgLogoM" src="images/nuestras_marcas/SIGLENT.webp"
                                alt="SIGLENT osciloscopio" title="SIGLENT osciloscopio"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">SIGLENT</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Pruebas Electrónicas y Sistemas de Medición</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Osciloscopios digitales: 2/4 canales, hasta 2GHz</li>
                                <li>Osciloscopios portatiles: hasta 200MHz</li>
                                <li>Generadores de funciones/formas de onda arbitrarias</li>
                                <li>Generadores RF: hasta 20GHz</li>
                                <li>Fuentes de alimentación DC: hasta 1080W</li>
                                <li>Multímetros digitales: hasta 6 1/2 dígitos</li>
                                <li>Analizadores de espectros: hasta 26.5 GHz</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="prueba" class="btn p-0 btnIcon" onclick="BuscarMarcas('prueba','pruebasm');"
                                    type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg"
                                        alt="Prueba y Medición" title="Prueba y Medición" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar sensores">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="https://www.logicbus.com.mx/suco">
                                    <img class="imgMain"
                                        src="https://www.logicbus.com.mx/images/nuestras_marcas/productos-marca/suco.webp"
                                        alt="SUCO">
                                </a>
                            </div>
                            <br>
                            <div class="text-center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="https://www.logicbus.com.mx/suco">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM">
                        <img class="imgBanderaM" src="images/nuestras_marcas/bandera/aleb.webp" alt="Alemania">
                        <a href="https://www.logicbus.com.mx/suco">
                            <img class="imgLogoM" src="https://www.logicbus.com.mx/images/nuestras_marcas/suco.webp"
                                alt="SUCO">
                        </a>
                        <div class="tituloMarcaM">
                            <b style="font-size:1.5em;">SUCO</b>
                        </div>
                        <div class="tituloMarcaM">
                            <b>Sensores e Interruptores de Presión para Aplicaciones Industriales e Hidráulicas</b><br>
                        </div>
                        <div>
                            <ul class="marcasCarac">
                                <li>Interruptores de presión mecánicos</li>
                                <li>Interruptores de presión electrónicos</li>
                                <li>Sensores y transmisores de presión</li>
                                <li>Embragues y frenos industriales</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button class="btn p-0 btnIcon" onclick="BuscarMarcas('sensores','sensores');"
                                    type="button">
                                    <img class="ImgIcon"
                                        src="https://www.logicbus.com.mx/assets/sensores-y-transductores.svg"
                                        alt="Sensores" width="40px">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar computo">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="taicenn-equipo-industrial"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/TAICENN.webp"
                                        alt="TAICENN PC Pantallas Panel Computadoras Industriales"
                                        title="TAICENN PC Pantallas Panel Computadoras Industriales"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="taicenn-equipo-industrial">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp"
                            alt="China">
                        <a href="taicenn-equipo-industrial"> <img class="imgLogoM"
                                src="images/nuestras_marcas/TAICENN.webp"
                                alt="TAICENN PC Pantallas Panel Computadoras Industriales"
                                title="TAICENN PC Pantallas Panel Computadoras Industriales"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">TAICENN</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Computadoras, Monitores y Paneles PC's Industriales</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Computadoras industriales</li>
                                <li>Monitores con touch multitáctil</li>
                                <li>Panel PC's y HMIs robustas</li>
                                <li>Procesadores Atom, Celeron, Core i3, Core i5, Core i7</li>
                                <li>Opción con ranuras PCI, PCIe y soporte con GPU</li>
                                <li>Monitores y Panel PC protección IP65 industrial,</li>
                                <li>Panel PC's en acero inoxidable completamente sellados</li>
                                <li>Pantallas con tamaño de 10.4" a 21.5"</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar automatizacion adquisiciond iot">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="teracom"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/TERACOM.webp"
                                        alt="Teracom para el monitoreo remoto de Ethernet"
                                        title="Teracom para el monitoreo remoto de Ethernet"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="teracom">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/bulb.webp"
                            alt="Bulgaria">
                        <a href="teracom"> <img class="imgLogoM" src="images/nuestras_marcas/TERACOM.webp"
                                alt="Teracom para el monitoreo remoto de Ethernet"
                                title="Teracom para el monitoreo remoto de Ethernet">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">TERACOM</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Soluciones de Control Remoto para la Automatización</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Monitoreo remoto a través de Ethernet (servidor web, Modbus TCP/IP, SNMP v1 y v2,
                                    HTTP via API)</li>
                                <li>Monitoreo remoto sobre redes celulares (GPRS, 3G y 4G LTE, HTTP via API, MQTT y SMS)
                                </li>
                                <li>Sensores, detectores y transmisores (sensores 1-Wire, sensores RS-485 y detectores
                                    de temperatura, humedad, corriente, voltaje, transmisores 0-20/4-20mA, presión
                                    barométrica, humo, etc.)</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="automatizacion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('automatizacion','automatizacion');" type="button"><img
                                        class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                                        alt="Automatización y Control de Procesos"
                                        title="Automatización y Control de Procesos" width="40px"></button>
                                <button id="adquisicion" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('adquisicion','adquisiciond');" type="button"><img
                                        class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                        alt="Adquisición de datos" title="Adquisición de datos" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar sensores">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="tri-tronics"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/TRITRONICS.webp"
                                        alt="TRI-TRONICS diseña y fabrica sensores fotoeléctricos de alto rendimiento"
                                        title="TRI-TRONICS diseña y fabrica sensores fotoeléctricos de alto rendimiento">
                                </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="tri-tronics">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="tri-tronics"> <img class="imgLogoM" src="images/nuestras_marcas/TRI-TRONICS.webp"
                                alt="TRI-TRONICS diseña y fabrica sensores fotoeléctricos de alto rendimiento"
                                title="TRI-TRONICS diseña y fabrica sensores fotoeléctricos de alto rendimiento"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">TRI-TRONICS</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Sensores Fotoeléctricos de Alta Calidad</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Carcasa estándar / miniatura</li>
                                <li>Sensores difusos, retrorreflectantes y emisor / reflector</li>
                                <li>Detección de ranura/etiqueta</li>
                                <li>Sensor de Herradura</li>
                                <li>Objetos transparentes</li>
                                <li>Detección de contraste</li>
                                <li>UV-Luminescencia</li>
                                <li>Fibra óptica, bloques ópticos</li>
                                <li>Cables, soportes de montaje, reflectores</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar pruebasm">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="vitrek"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/VITREK.webp"
                                        alt="VITREK Equipos DAQ de alta valocidad"
                                        title="VITREK Equipos DAQ de alta valocidad"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="vitrek">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/usab.webp"
                            alt="Estados Unidos">
                        <a href="vitrek"> <img class="imgLogoM" src="images/nuestras_marcas/VITREK.webp"
                                alt="VITREK Equipos DAQ de alta valocidad" title="VITREK Equipos DAQ de alta valocidad">
                        </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">VITREK</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Prueba, Medición y Adquisición de Datos</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Probadores de hipot y seguridad eléctrica</li>
                                <li>Analizadores de potencia</li>
                                <li>Medidor de alto voltaje de precisión</li>
                                <li>Sistema de conmutación de alto voltaje</li>
                                <li>Teraohmímetro</li>
                                <li>Probador de resistencia de aislamiento</li>
                                <li>Carga electrónica de DC</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="prueba" class="btn p-0 btnIcon" onclick="BuscarMarcas('prueba','pruebasm');"
                                    type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg"
                                        alt="Prueba y Medición" title="Prueba y Medición" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar sensores">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="waycon"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/WAYCON.webp"
                                        alt="WayCon sensores compactos son rápidos y fáciles de montar"
                                        title="WayCon sensores compactos son rápidos y fáciles de montar"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="waycon">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/aleb.webp"
                            alt="Alemania">
                        <a href="waycon"> <img class="imgLogoM" src="images/nuestras_marcas/WAYCON.webp"
                                alt="WayCon sensores compactos son rápidos y fáciles de montar"
                                title="WayCon sensores compactos son rápidos y fáciles de montar"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">WAYCON</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Sensores de Posición y Distancia Precisos</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Sensores de cable</li>
                                <li>Sensores láser</li>
                                <li>Potenciómetro lineal</li>
                                <li>Sensores de cinta magnética</li>
                                <li>Sensores inductivos sin contacto</li>
                                <li>Transmisor de distancia magnetostrictivo</li>
                                <li>Encoder y sensores de ángulo</li>
                                <li>Sensores de ultrasonido</li>
                                <li>Sensores de distancia capacitivos</li>
                                <li>Convertidor de señal</li>
                                <li>Indicadores de posición</li>
                                <li>Sensores de velocidad</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--W-->
            <section class="sectionMar computo iot software sensores">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="https://www.logicbus.com.mx/womaster"> <img class="imgMain"
                                        src="https://www.logicbus.com.mx/images/nuestras_marcas/productos-marca/womaster.webp"
                                        alt="WOMASTER Comunicación Industrial y Soluciones IIoT" title="WOMASTER"> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="https://www.logicbus.com.mx/womaster">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/taib.webp"
                            alt="Taiwan">
                        <a href="https://www.logicbus.com.mx/womaster"> <img class="imgLogoM"
                                src="https://www.logicbus.com.mx/images/nuestras_marcas/womaster.webp" alt="WOMASTER"
                                title="WOMASTER"> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">WOMASTER</b>
                        </div>
                        <div class="tituloMarcaM"> <b class="">Comunicación Industrial y Soluciones IIoT</b>
                            <br>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Redes Ethernet industriales</li>
                                <li>Switches PoE y Layer 2/Layer 3</li>
                                <li>Routers LTE/WLAN industriales</li>
                                <li>Gateways IoT y LPWAN</li>
                                <li>Sensores para Smart Cities</li>
                                <li>Conectividad serial industrial</li>
                                <li>Software para gestión de redes</li>
                            </ul>
                            <div class="d-flex justify-content-around mt-3">
                                <button id="computo" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('computo','computo');" type="button"><img class="ImgIcon"
                                        src="assets/pcs-y-comunicaciones-industriales.svg"
                                        alt="PC's y Comunicaciones Industriales"
                                        title="PC's y Comunicaciones Industriales" width="40px"></button>
                                <button id="iot" class="btn p-0 btnIcon" onclick="BuscarMarcas('iot','iot');"
                                    type="button"><img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT"
                                        width="40px"></button>
                                <button id="software" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('software','software');" type="button"><img class="ImgIcon"
                                        src="assets/software-y-herramientas-de-desarrollo.svg"
                                        alt="Software y Herramientas de Desarrollo"
                                        title="Software y Herramientas de Desarrollo" width="40px"></button>
                                <button id="sensores" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('sensores','sensores');" type="button"><img class="ImgIcon"
                                        src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                                        title="Sensores y Transductores" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionMar robotica">
                <div class="marcaMainM">
                    <div class="marcaProductM">
                        <div class="marcaProductC">
                            <div class="productoMainM">
                                <a href="youibot"> <img class="imgMain"
                                        src="images/nuestras_marcas/productos-marca/YOUIBOT.webp"
                                        alt="YOUIBOT robots móviles (AMR) " title="YOUIBOT  robots móviles (AMR) "> </a>
                            </div>
                            <br>
                            <div class="" align="center">
                                <button class="button btn btn-orange px-3" role="button">
                                    <span><a href="youibot">Ver Marca</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/chib.webp"
                            alt="China">
                        <a href="youibot"> <img class="imgLogoM" src="images/nuestras_marcas/YOUIBOT.webp"
                                alt="YOUIBOT robots móviles (AMR) " title="YOUIBOT  robots móviles (AMR) "> </a>
                        <div class="tituloMarcaM"> <b style="font-size:1.5em;">YOUIBOT</b>
                            <div class="tituloMarcaM"> <b class="">AMR's Industriales y Soluciones de Control de Flota
                                    de AMR's</b></div>
                        </div>
                        <div class="">
                            <ul class="marcasCarac">
                                <li>Serie de elevación</li>
                                <li>Serie plataforma</li>
                                <li>Serie operación</li>
                                <li>Serie de carros automáticos</li>
                                <li>Carga útil: 100Kg a 1,000Kg</li>
                            </ul>
                            <div class="d-flex justify-content-around">
                                <button id="robotica" class="btn p-0 btnIcon"
                                    onclick="BuscarMarcas('robotica','robotica');" type="button"><img class="ImgIcon"
                                        src="assets/vision-artificial-y-robots.svg" alt="Robótica y Visión Artificial"
                                        title="Robótica y Visión Artificial" width="40px"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="gridoOcultarPC">
        <!-- Anteriores --- Movil--->
        <div class="d-flex flex-wrap justify-content-center" id="marcasMobile">
            <!--#-->
            <div class="boxMarcaP bblue computo software iot">
                <center>
                    <a href="3onedata"> <img class="" src="images/nuestras_marcas/3ONEDATA.webp" alt="3onedata"
                            title="3onedata" width="150px"> </a> <img class="imgbandera"
                        src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">3ONEDATA</p>
                <p class="pTitulo">Comunicación industrial y gestión de redes</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                    <button id="software" class="btn p-0 btnIcon" onclick="categoriasMarcas_('software')"
                        type="button"><img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                            alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo"
                            width="40px"></button>
                </div>
            </div>
            <!--A-->
            <div class="boxMarcaP bblue computo">
                <center>
                    <a href="aicsys"> <img class="" src="images/nuestras_marcas/AICSYS.webp"
                            alt="AICSYS fabricante de chasis industriales y computadoras de placa única"
                            title="AICSYS fabricante de chasis industriales y computadoras de placa única"
                            width="150px"> </a>
                    <img class="imgbandera" src="images/nuestras_marcas/bandera/taib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">AICSYS</p>
                <p class="pTitulo">Sistemas informáticos industriales avanzados</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion robotica">
                <center>
                    <a href="https://www.logicbus.com.mx/allybot">
                        <img src="https://www.logicbus.com.mx/images/nuestras_marcas/allybot.webp" alt="ALLYBOT"
                            title="ALLYBOT" width="150px">
                    </a>
                    <img class="imgbandera" src="images/nuestras_marcas/bandera/chib.webp" alt="China">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">ALLYBOT</p>
                <p class="pTitulo">Soluciones de Limpieza Autónoma Inteligente</p>
                <div class="d-flex justify-content-around pb-3 flex-wrap">
                    <button id="robotica" class="btn p-0 btnIcon" onclick="categoriasMarcas_('robotica')" type="button">
                        <img class="ImgIcon" src="assets/vision-artificial-y-robots.svg"
                            alt="Robótica y Visión Artificial" title="Robótica y Visión Artificial" width="40px">
                    </button>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion robotica">
                <center>
                    <a href="applied-motion-products"> <img class="" src="images/nuestras_marcas/APPLIED-MOTION.webp"
                            alt="Applied Motion Products control de movimiento"
                            title="Applied Motion Products control de movimiento" width="150px"> </a> <img
                        class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">APPLIED MOTION PRODUCTS</p>
                <p class="pTitulo">Soluciónes de control de movimiento para la automatización</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button"><img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px"></button>
                    <button id="robotica" class="btn p-0 btnIcon" onclick="categoriasMarcas_('robotica')"
                        type="button"><img class="ImgIcon" src="assets/vision-artificial-y-robots.svg"
                            alt="Robótica y Visión Artificial" title="Robótica y Visión Artificial"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue computo">
                <center>
                    <a href="arbor"> <img class="" src="images/nuestras_marcas/ARBOR.webp"
                            alt="Arbor Computación Embebida y Soluciones IoT"
                            title="Arbor Computación Embebida y Soluciones IoT" width="150px"> </a> <img
                        class="imgbandera" src="images/nuestras_marcas/bandera/taib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">ARBOR</p>
                <p class="pTitulo">Computación embebida y soluciones IoT</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue computo">
                <center>
                    <a href="arestech"> <img class="" src="images/nuestras_marcas/ARESTECH.webp"
                            alt="Arestech PC PANEL MONITOR INDUSTRIAL" title="Arestech PC PANEL MONITOR INDUSTRIAL"
                            width="150px">
                    </a> <img class="imgbandera" src="images/nuestras_marcas/bandera/taib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">ARESTECH</p>
                <p class="pTitulo">Monitores y computadoras industriales</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                </div>
            </div>

            <div class="boxMarcaP bblue iot oee software">
                <center>
                    <a href="auk-industries"> <img class="" src="images/nuestras_marcas/AUK-INDUSTRIES.webp"
                            alt="Sistema digital para el monitoreo de la Eficiencia General de los Equipos (OEE) sencillo y escalable"
                            title="Sistema digital para el monitoreo de la Eficiencia General de los Equipos (OEE) sencillo y escalable"
                            width="150px"> </a> <img class="imgbandera"
                        src="images/nuestras_marcas/bandera/singapur.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">AUK INDUSTRIES</p>
                <p class="pTitulo">Sistema digital para el monitoreo de la eficiencia general de los equipos (OEE)
                    sencillo y escalable</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="oee" class="btn p-0 btnIcon" onclick="categoriasMarcas_('oee')" type="button"><img
                            class="ImgIcon" src="assets/oee.svg" alt="OEE y Productividad" title="OEE y Productividad"
                            width="40px"></button>
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                    <button id="software" class="btn p-0 btnIcon" onclick="categoriasMarcas_('software')"
                        type="button"><img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                            alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion robotica">
                <center>
                    <a href="https://www.logicbus.com.mx/autoxing-technology"> <img class=""
                            src="images/nuestras_marcas/autoxing.webp" alt="AUTOXING" title="AUTOXING" width="150px">
                    </a>
                    <img class="imgbandera" src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">AUTOXING</p>
                <p class="pTitulo">Robótica móvil autónoma para la entrega en entornos comerciales e industriales</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="robotica" class="btn p-0 btnIcon" onclick="categoriasMarcas_('robotica')"
                        type="button"><img class="ImgIcon" src="assets/vision-artificial-y-robots.svg"
                            alt="Robótica y Visión Artificial" title="Robótica y Visión Artificial"
                            width="40px"></button>
                </div>
            </div>
            <!--B-->
            <div class="boxMarcaP bblue adquisiciond">
                <center>
                    <a href="brainchild"><img src="images/nuestras_marcas/Brainchild.webp"
                            alt="Brainchild Controladores y registradores de alta precisión"
                            title="Brainchild Controladores y registradores de alta precisión" width="150px"> </a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/taib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">BRAINCHILD</p>
                <p class="pTitulo">Controladores y registradores de alta precisión</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisiciond')"
                        type="button"><img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                            alt="Adquisición y Registro de Datos DAQ" title="Adquisición y Registro de Datos DAQ"
                            width="40px"></button>
                </div>
            </div>
            <!--C-->
            <div class="boxMarcaP bblue sensores">
                <center>
                    <a href="calex"><img class="" src="images/nuestras_marcas/CALEX.webp"
                            alt="CALEX Sensores de Temperatura" title="CALEX Sensores de Temperatura" width="150px">
                    </a><img class="imgbandera" src="images/nuestras_marcas/bandera/ukb.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">CALEX</p>
                <p class="pTitulo">Sensores de temperatura infrarrojos</p>
                <div class="d-flex justify-content-around pb-3">
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas__('sensores')" type="button"><img
                            class="ImgIcon" src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                            title="Sensores y Transductores" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue computo">
                <center>
                    <a href="chainway"><img class="" src="images/nuestras_marcas/CHAINWAY.webp"
                            alt="CHAINWAY Tablets y Handhels Industriales"
                            title="CHAINWAY Tablets y Handhels Industriales" width="150px"> </a><img class="imgbandera"
                        src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">CHAINWAY</p>
                <p class="pTitulo">Tablets y handhelds</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue iot computo oee">
                <center>
                    <a href="cimon-software-scada-industrial"><img src="images/nuestras_marcas/CIMON.webp"
                            alt="CIMON Automation procesos datos " title="CIMON Automation" width="150px"> </a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/cosb.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">CIMON</p>
                <p class="pTitulo">Automatización industrial y control de sistemas</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                    <button id="oee" class="btn p-0 btnIcon" onclick="categoriasMarcas_('oee')" type="button"><img
                            class="ImgIcon" src="assets/oee.svg" alt="OEE y Productividad" title="OEE y Productividad"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue computo">
                <center>
                    <a href="cincoze"><img class="" src="images/nuestras_marcas/CINCOZE.webp"
                            alt="CINCOZE Sistemas informáticos industriales"
                            title="CINCOZE Sistemas informáticos industriales" width="150px"> </a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/taib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">CINCOZE</p>
                <p class="pTitulo">Computadoras, panel PC's y monitores industriales</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion">
                <center>
                    <a href="controllino"><img class="" src="images/nuestras_marcas/CONTROLLINO.webp"
                            alt="CONTROLLINO PLC industrial compatible con Arduino"
                            title="CONTROLLINO PLC industrial compatible con Arduino" width="150px"> </a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/espana.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">CONTROLLINO</p>
                <p class="pTitulo">PLC's de grado industrial compatible 100% con Arduino</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button"><img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px"></button>
                </div>
            </div>
            <!--D-->
            <div class="boxMarcaP bblue iot sensores">
                <center>
                    <a href="daviteq"><img class="" src="images/nuestras_marcas/DAVITEQ.webp"
                            alt="DAVITEQ Sensores gateways iot" title="DAVITEQ Sensores gateways iot" width="150px">
                    </a><img class="imgbandera" src="images/nuestras_marcas/bandera/vieb.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">DAVITEQ</p>
                <p class="pTitulo">Sensores LoraWan de largo alcance y gateways con tecnología IoT</p>
                <div class="d-flex justify-content-around pb-3">
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas__('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas__('sensores')" type="button"><img
                            class="ImgIcon" src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                            title="Sensores y Transductores" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue computo">
                <center>
                    <a href="davo-lin"><img class="" src="images/nuestras_marcas/DAVO-LIN.webp"
                            alt="DAVO Lin Teclados Industriales" title="DAVO Lin Teclados Industriales" width="150px">
                    </a><img class="imgbandera" src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">DAVO LIN</p>
                <p class="pTitulo">Teclados industriales, númericos, trackball, touchpad</p>
                <div class="d-flex justify-content-around">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue adquisiciond pruebasm">
                <center>
                    <a href="digilent"><img class="" src="images/nuestras_marcas/DIGILENT.webp"
                            alt="DIGILENT Placas/kits de desarrollo FPGA/SoC basados en Xilinx y dispositivos portátiles de prueba y medición USB"
                            title="DIGILENT Placas/kits de desarrollo FPGA/SoC basados en Xilinx y dispositivos portátiles de prueba y medición USB"
                            width="150px"> </a><img class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">DIGILENT</p>
                <p class="pTitulo">Placas/kits de desarrollo, dispositivos portátiles de prueba y medición USB</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisiciond')"
                        type="button"><img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                            alt="Adquisición y Registro de Datos DAQ" title="Adquisición y Registro de Datos DAQ"
                            width="40px"></button>
                    <button id="prueba" class="btn p-0 btnIcon" onclick="categoriasMarcas_('pruebasm')"
                        type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                            title="Prueba y Medición" width="40px"></button>
                </div>
            </div>
            <!--E-->
            <div class="boxMarcaP bblue computo">
                <center>
                    <a href="emdoor-laptops-industriales"><img class="" src="images/nuestras_marcas/EMDOOR.webp"
                            alt="Emdoor ,tablets de uso rudo,laptops industriales"
                            title="Emdoor ,tablets de uso rudo,laptops industriales" width="150px"></a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">EMDOOR</p>
                <p class="pTitulo">Tablets y laptops industriales y robustas</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue sensores iot">
                <center>
                    <a href="https://www.logicbus.com.mx/ems-kontrol">
                        <img class="" src="images/nuestras_marcas/ems-kontrol-logo.webp"
                            alt="EMS KONTROL Sensores Industriales para Monitoreo"
                            title="EMS KONTROL Sensores Industriales para Monitoreo" width="150px">
                    </a>
                    <img class="imgbandera" src="images/nuestras_marcas/bandera/turb.webp" alt="Turquía">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">EMS KONTROL</p>
                <p class="pTitulo">Sensores Industriales para Monitoreo Ambiental y de Procesos</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')" type="button">
                        <img class="ImgIcon" src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                            title="Sensores y Transductores" width="40px">
                    </button>
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button">
                        <img class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px">
                    </button>
                </div>
            </div>
            <!--F-->
            <div class="boxMarcaP bblue automatizacion software iot">
                <center>
                    <a href="fatek"><img src="images/nuestras_marcas/FATEK.webp"
                            alt="FATEK fabricante y desarrollador PLC" title="FATEK fabricante y desarrollador PLC"
                            width="150px"></a><img class="imgbandera" src="images/nuestras_marcas/bandera/taib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">FATEK</p>
                <p class="pTitulo">PLC's industriales expandibles y HMI's</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button"><img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px"></button>
                    <button id="software" class="btn p-0 btnIcon" onclick="categoriasMarcas_('software')"
                        type="button"><img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                            alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo"
                            width="40px"></button>
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue sensores software pruebasm">
                <center>
                    <a href="futek"><img src="images/nuestras_marcas/FUTEK.webp"
                            alt="FUTEK sensor de torque y celdas de carga"
                            title="FUTEK sensor de toruqe y celdas de carga" width="150px"></a><img class="imgbandera"
                        src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">FUTEK</p>
                <p class="pTitulo">Celdas de carga y sensores de torque</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')"
                        type="button"><img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                            alt="Sensores y Transductores" title="Sensores y Transductores" width="40px"></button>
                    <button id="software" class="btn p-0 btnIcon" onclick="categoriasMarcas_('software')"
                        type="button"><img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                            alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo"
                            width="40px"></button>
                    <button id="prueba" class="btn p-0 btnIcon" onclick="categoriasMarcas_('pruebasm')"
                        type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                            title="Prueba y Medición" width="40px"></button>
                </div>
            </div>
            <!--G-->
            <div class="boxMarcaP bblue adquisiciond iot pruebasm">
                <center>
                    <a href="graphtec"><img src="images/nuestras_marcas/GRAPHTEC.webp"
                            alt="Graphtec Instrumentos de adquisicion y registro de datos," title="Graphtec,"
                            width="150px"></a><img class="imgbandera" src="images/nuestras_marcas/bandera/japb.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">GRAPHTEC</p>
                <p class="pTitulo">Registradores de datos portátiles</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisiciond')"
                        type="button"><img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                            alt="Adquisición y Registro de Datos DAQ" title="Adquisición y Registro de Datos DAQ"
                            width="40px"></button>
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                    <button id="prueba" class="btn p-0 btnIcon" onclick="categoriasMarcas_('pruebasm')"
                        type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                            title="Prueba y Medición" width="40px"></button>
                </div>
            </div>
            <!--I-->
            <div class="boxMarcaP bblue automatizacion adquisiciond energia software pruebasm iot">
                <center>
                    <a href="icp-das"><img src="images/nuestras_marcas/ICPDAS.webp" alt="ICP DAS Adquisición de Datos"
                            title="ICP DAS Adquisición de Datos" width="150px"></a><img class="imgbandera"
                        src="images/nuestras_marcas/bandera/taib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">ICP DAS</p>
                <p class="pTitulo">Adquisición y registro de datos</p>
                <div class="d-flex justify-content-around pb-3">
                    <div class="d-flex justify-content-around pb-3">
                        <button id="automatizacion" class="btn p-0 btnIcon"
                            onclick="categoriasMarcas_('automatizacion')" type="button"><img class="ImgIcon"
                                src="assets/automatizacion-y-control-de-procesos.svg"
                                alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                                width="40px"></button>
                        <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisiciond')"
                            type="button"><img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                                alt="Adquisición de datos" title="Adquisición de datos" width="40px"></button>
                        <button id="energia" class="btn p-0 btnIcon" onclick="categoriasMarcas_('ernergia')"
                            type="button"><img class="ImgIcon" src="assets/consumo-y-analisis-de-energia-electrica.svg"
                                alt="Consumo y Análisis de Energía" title="Consumo y Análisis de Energía"
                                width="40px"></button>
                        <button id="software" class="btn p-0 btnIcon" onclick="categoriasMarcas_('software')"
                            type="button"><img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                                alt="Software y Herramientas de Desarrollo"
                                title="Software y Herramientas de Desarrollo" width="40px"></button>
                    </div>
                    <div class="d-flex justify-content-around pb-3">
                        <button id="prueba" class="btn p-0 btnIcon" onclick="categoriasMarcas_('pruebasm')"
                            type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg"
                                alt="Prueba y Medición" title="Prueba y Medición" width="40px"></button>
                        <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                                class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                    </div>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion computo">
                <center>
                    <a href="./industrial-shields"><img src="images/nuestras_marcas/INDUSTRIAL-SHIELDS.webp"
                            alt="Industrial Shields Hardware Industrial Basado en Plataformas de Código Abierto"
                            title="Industrial Shields Hardware Industrial Basado en Plataformas de Código Abierto"
                            width="150px"></a><img class="imgbandera" src="images/nuestras_marcas/bandera/espana.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">INDUSTRIAL SHIELDS</p>
                <p class="pTitulo">Hardware Industrial Basado en Plataformas de Código Abierto</p>
                <div class="d-flex justify-content-around pb-3">
                    <div class="d-flex justify-content-around pb-3">
                        <button id="automatizacion" class="btn p-0 btnIcon"
                            onclick="categoriasMarcas_('automatizacion')" type="button"><img class="ImgIcon"
                                src="assets/automatizacion-y-control-de-procesos.svg"
                                alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                                width="40px"></button>
                        <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                            type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                                alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                                width="40px"></button>
                    </div>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion computo">
                <center>
                    <a href="./ipdisplays"><img src="images/nuestras_marcas/ip-displays.webp"
                            alt="Pantallas Inteligentes Industriales para Visualización y Control"
                            title="Pantallas Inteligentes Industriales para Visualización y Control"
                            width="150px"></a><img class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">IP DISPLAYS</p>
                <p class="pTitulo">Pantallas Inteligentes Industriales para Visualización y Control</p>
                <div class="d-flex justify-content-around pb-3">
                    <div class="d-flex justify-content-around pb-3">
                        <button id="automatizacion" class="btn p-0 btnIcon"
                            onclick="categoriasMarcas_('automatizacion')" type="button"><img class="ImgIcon"
                                src="assets/automatizacion-y-control-de-procesos.svg"
                                alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                                width="40px"></button>
                    </div>
                </div>
            </div>
            <!--K-->
            <div class="boxMarcaP bblue robotica">
                <center>
                    <a href="kokobots"><img src="images/nuestras_marcas/KOKOBOTS.webp" alt="Kokobots (AMR)"
                            title="Kokobots (AMR)" width="150px"></a><img class="imgbandera"
                        src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">KOKOBOTS</p>
                <p class="pTitulo">Robótica autónoma para limpieza y operación en entornos comerciales e industriales
                </p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="robotica" class="btn p-0 btnIcon" onclick="categoriasMarcas_('robotica')"
                        type="button"><img class="ImgIcon" src="assets/vision-artificial-y-robots.svg"
                            alt="Robótica y Visión Artificial" title="Robótica y Visión Artificial"
                            width="40px"></button>
                </div>
            </div>
            <!--L-->
            <div class="boxMarcaP bblue sensores iot">
                <center>
                    <a href="LoggerFlex"><img src="images/nuestras_marcas/LOGGERFLEX.webp"
                            alt="LOGGERFLEX proporciona soluciones de adquisición de datos"
                            title="LOGGERFLEX  proporciona soluciones de adquisición de datos" width="150px"> </a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/canb.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">LOGGERFLEX</p>
                <p class="pTitulo">Registradores con conexion a la nube por Wi-Fi</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')"
                        type="button"><img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                            alt="Sensores y Transductores" title="Sensores y Transductores" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue computo">
                <center>
                    <a href="teclados-indice"><img src="images/nuestras_marcas/LOGICBUS.webp"
                            alt="Logicbus teclados industriales" title="Logicbus" width="150px"></a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">LOGICBUS TECLADOS INDUSTRIALES</p>
                <p class="pTitulo">Teclados de uso rudo</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue adquisiciond">
                <center>
                    <a href="registradores-logicbus"><img src="images/nuestras_marcas/LOGICBUS.webp"
                            alt="Logicbus registradores" title="Logicbus" width="150px"></a><img class="imgbandera"
                        src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">LOGICBUS GRAFICADORES</p>
                <p class="pTitulo">Graficadores digitales sin papel</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisiciond')"
                        type="button"><img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                            alt="Adquisición de datos" title="Adquisición de datos" width="40px"></button>
                </div>
            </div>
            <!--M-->
            <div class="boxMarcaP bblue adquisiciond software iot sensores biotecnologia">
                <center>
                    <a href="madgetech"><img src="images/nuestras_marcas/MADGETECH.webp"
                            alt="MADGETECH soluciones de data logger" title="MADGETECH  soluciones de data logger"
                            width="150px"></a>
                    <!-- LOGO MARCA --><img class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">MADGETECH</p>
                <p class="pTitulo">Registradores de alta gama para la industria con software de analisis de datos</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisiciond')"
                        type="button"><img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                            alt="Adquisición y Registro de Datos DAQ" title="Adquisición y Registro de Datos DAQ"
                            width="40px"></button>
                    <button id="software" class="btn p-0 btnIcon" onclick="categoriasMarcas_('software')"
                        type="button"><img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                            alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo"
                            width="40px"></button>
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')"
                        type="button"><img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                            alt="Sensores y Transductores" title="Sensores y Transductores" width="40px"></button>
                    <button id="biotecnologia" class="btn p-0 btnIcon" onclick="categoriasMarcas_('biotecnologia')"
                        type="button"><img class="ImgIcon" src="assets/biotecnologia.svg" alt="Biotecnología/Hospitales"
                            title="Biotecnología/Hospitales" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue pruebaymedicion automatizacion adquisiciond software">
                <center>
                    <a href="https://www.logicbus.com.mx/micsig">
                        <img class="" src="images/nuestras_marcas/micsig-logo.webp" alt="MICSIG Osciloscopios y Sondas"
                            title="MICSIG" width="150px">
                    </a>
                    <img class="imgbandera" src="images/nuestras_marcas/bandera/chib.webp" alt="China">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">MICSIG</p>
                <p class="pTitulo">Osciloscopios y Sondas de Precisión para Diagnóstico Electrónico</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="pruebas" class="btn p-0 btnIcon" onclick="categoriasMarcas_('pruebas')" type="button">
                        <img class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                            title="Prueba y Medición" width="40px">
                    </button>
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button">
                        <img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px">
                    </button>
                    <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisicion')"
                        type="button">
                        <img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                            alt="Adquisición de datos" title="Adquisición de datos" width="40px">
                    </button>
                    <button id="software" class="btn p-0 btnIcon" onclick="categoriasMarcas_('software')" type="button">
                        <img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                            alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo"
                            width="40px">
                    </button>
                </div>
            </div>
            <!--N-->
            <div class="boxMarcaP bblue automatizacion sensores software iot">
                <center>
                    <a href="national-control-devices-ncd"><img src="images/nuestras_marcas/NCD.webp"
                            alt="National Control Devices industria de IoT ncd"
                            title="National Control Devices industria de IoT ncd" width="150px"></a> <img
                        class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">NATIONAL CONTROL DEVICES</p>
                <p class="pTitulo">Sensores de monitoreo y control IoT</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button"><img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px"></button>
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')"
                        type="button"><img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                            alt="Sensores y Transductores" title="Sensores y Transductores" width="40px"></button>
                    <button id="software" class="btn p-0 btnIcon" onclick="categoriasMarcas_('software')"
                        type="button"><img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                            alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo"
                            width="40px"></button>
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                </div>
            </div>
            <!--P-->
            <div class="boxMarcaP bblue sensores">
                <center>
                    <a href="photocraft"><img src="images/nuestras_marcas/PHOTOGRAPH-TRITRONICS.webp"
                            alt="PHOTOCRAFT Control de movimiento" title="PHOTOCRAFT Control de movimiento"
                            width="150px"></a>
                    <!-- LOGO MARCA --><img class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">PHOTOCRAFT</p>
                <p class="pTitulo">Encoders de rueda, eje y absolutos</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')"
                        type="button"><img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                            alt="Sensores y Transductores" title="Sensores y Transductores" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue energia pruebasm">
                <center>
                    <a href="pico-technology"><img src="images/nuestras_marcas/PICO-TECHNOLOGY.webp"
                            alt="PICO TECHNOLOGY osciloscopios de PC y los registradores de datos"
                            title="PICO TECHNOLOGY osciloscopios de PC y los registradores de datos" width="150px"></a>
                    <!-- LOGO MARCA --><img class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">PICO TECHNOLOGY</p>
                <p class="pTitulo">Osciloscopios y registradores para PC</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="energia" class="btn p-0 btnIcon" onclick="categoriasMarcas_('ernergia')"
                        type="button"><img class="ImgIcon" src="assets/consumo-y-analisis-de-energia-electrica.svg"
                            alt="Consumo y Análisis de Energía" title="Consumo y Análisis de Energía"
                            width="40px"></button>
                    <button id="prueba" class="btn p-0 btnIcon" onclick="categoriasMarcas_('pruebasm')"
                        type="button"><img class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                            title="Prueba y Medición" width="40px"></button>
                </div>
            </div>
            <!--Q-->
            <div class="boxMarcaP bblue robotica biotecnologia">
                <center>
                    <a href="quasi"><img src="images/nuestras_marcas/QUASI.webp" alt="QUASI (AMR)" title="QUASI (AMR)"
                            width="150px"></a><img class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">QUASI</p>
                <p class="pTitulo">Soluciones en robótica autónoma móvil con AI</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="robotica" class="btn p-0 btnIcon" onclick="categoriasMarcas_('robotica')"
                        type="button"><img class="ImgIcon" src="assets/vision-artificial-y-robots.svg"
                            alt="Robótica y Visión Artificial" title="Robótica y Visión Artificial"
                            width="40px"></button>
                    <button id="biotecnologia" class="btn p-0 btnIcon" onclick="categoriasMarcas_('biotecnologia')"
                        type="button"><img class="ImgIcon" src="assets/biotecnologia.svg" alt="Biotecnología/Hospitales"
                            title="Biotecnología/Hospitales" width="40px"></button>
                </div>
            </div>
            <!--R-->
            <div class="boxMarcaP bblue sensores">
                <center>
                    <a href="sensores-capacitivos-sensores-de-proximidad-inductivos-magnetorresistivos-y-controladores"><img
                            src="images/nuestras_marcas/RECHNER-SENSORS.webp" alt="RECHNER SENSORS sensores capacitivos"
                            title="RECHNER SENSORS" width="150px"></a>
                    <!-- LOGO MARCA --><img class="imgbandera" src="images/nuestras_marcas/bandera/aleb.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">RECHNER SENSORS</p>
                <p class="pTitulo">Sensores de proximidad y nivel para la industria</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')"
                        type="button"><img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                            alt="Sensores y Transductores" title="Sensores y Transductores" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion sensores pruebasm">
                <center>
                    <a href="reign-power"><img src="images/nuestras_marcas/REIGN-POWER.webp"
                            alt="REIGN POWER Fuentes de poder fijas de montaje en riel DIN"
                            title="REIGN POWER Fuentes de poder fijas de montaje en riel DIN" width="150px"></a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/taib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">REIGN POWER</p>
                <p class="pTitulo">Fuentes de alimentación conmutadas</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button"><img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px"></button>
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas__('pruebasm')" type="button"><img
                            class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                            title="Prueba y Medición" width="40px"></button>
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')"
                        type="button"><img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                            alt="Sensores y Transductores" title="Sensores y Transductores" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion sensores biotecnologia">
                <center>
                    <a href="rfid-inc"><img src="images/nuestras_marcas/RFID.webp"
                            alt="RFID Inc. sistemas de lectura y etiquetas RFID"
                            title="RFID Inc. sistemas de lectura y etiquetas RFID" width="150px"></a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">RFID</p>
                <p class="pTitulo">Lectores y etiquetas de radiofrecuencia</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button"><img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px"></button>
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas__('sensores')" type="button"><img
                            class="ImgIcon" src="assets/sensores-y-transductores.svg" alt="Sensores" title="Sensores"
                            width="40px"></button>
                    <button id="biotecnologia" class="btn p-0 btnIcon" onclick="categoriasMarcas_('biotecnologia')"
                        type="button"><img class="ImgIcon" src="assets/biotecnologia.svg" alt="Biotecnología/Hospitales"
                            title="Biotecnología/Hospitales" width="40px"></button>
                </div>
            </div>

            <div class="boxMarcaP bblue computo">
                <center>
                    <a href="rta"><img src="images/nuestras_marcas/RTA.webp"
                            alt="RTA convertidores de protocolos/gateways Real Time Automation"
                            title="RTA convertidores de protocolos/gateways Real Time Automation" width="150px"></a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">RTA</p>
                <p class="pTitulo">Convertidores de protocolos</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion adquisiciond iot">
                <center>
                    <a href="sealevel"><img src="images/nuestras_marcas/SEALEVEL.webp"
                            alt="SEALEVEL soluciones de E/S serie y digitales"
                            title="SEALEVEL soluciones de E/S serie y digitales" width="150px"></a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">SEALEVEL</p>
                <p class="pTitulo">Adquisición de datos, convertidores e interfaces multipuertos</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button"><img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px"></button>
                    <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisiciond')"
                        type="button"><img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                            alt="Adquisición de datos" title="Adquisición de datos" width="40px"></button>
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas__('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion adquisiciond energia sensores iot">
                <center>
                    <a href="seneca"><img src="images/nuestras_marcas/SENECA.webp"
                            alt="SENECA acondicionadores de voltaje" title="SENECA acondicionadores de voltaje"
                            width="150px"></a><img class="imgbandera" src="images/nuestras_marcas/bandera/itab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">SENECA</p>
                <p class="pTitulo">Adquisición de datos y comunicación industrial</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button"><img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px"></button>
                    <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisiciond')"
                        type="button"><img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                            alt="Adquisición de datos" title="Adquisición de datos" width="40px"></button>
                    <button id="energia" class="btn p-0 btnIcon" onclick="categoriasMarcas_('ernergia')"
                        type="button"><img class="ImgIcon" src="assets/consumo-y-analisis-de-energia-electrica.svg"
                            alt="Consumo y Análisis de Energía" title="Consumo y Análisis de Energía"
                            width="40px"></button>
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')"
                        type="button"><img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                            alt="Sensores y Transductores" title="Sensores y Transductores" width="40px"></button>
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue robotica">
                <center>
                    <a href="robots-siasun"><img src="images/nuestras_marcas/SIASUN-DUCO.webp"
                            alt="SIASUN robots Colaborativos" title="SIASUN robots Colaborativos" width="150px"></a><img
                        class="imgbandera" src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">SIASUN</p>
                <p class="pTitulo">Robots para aplicaciones industriales</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="robotica" class="btn p-0 btnIcon" onclick="categoriasMarcas_('robotica')"
                        type="button"><img class="ImgIcon" src="assets/vision-artificial-y-robots.svg"
                            alt="Robótica y Visión Artificial" title="Robótica y Visión Artificial"
                            width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue pruebasm">
                <center>
                    <a href="siglent"><img src="images/nuestras_marcas/SIGLENT.webp" alt="SIGLENT osciloscopio"
                            title="SIGLENT osciloscopio" width="150px"></a> <img class="imgbandera"
                        src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">SIGLENT</p>
                <p class="pTitulo">Pruebas electrónicas y sistemas de medición</p>
                <div class="d-flex justify-content-around pb-3">
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas__('pruebasm')" type="button"><img
                            class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                            title="Prueba y Medición" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue sensores">
                <center>
                    <a href="https://www.logicbus.com.mx/suco">
                        <img src="https://www.logicbus.com.mx/images/nuestras_marcas/suco.webp" alt="SUCO" title="SUCO"
                            width="150px">
                    </a>
                    <img class="imgbandera" src="images/nuestras_marcas/bandera/aleb.webp" alt="Alemania">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">SUCO</p>
                <p class="pTitulo">Sensores e Interruptores de Presión para Aplicaciones Industriales e Hidráulicas</p>
                <div class="d-flex justify-content-around pb-3 flex-wrap">
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')" type="button">
                        <img class="ImgIcon" src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                            title="Sensores y Transductores" width="40px">
                    </button>
                </div>
            </div>
            <div class="boxMarcaP bblue computo iot">
                <center>
                    <a href="taicenn-equipo-industrial"><img src="images/nuestras_marcas/TAICENN.webp"
                            alt="TAICENN PC Pantallas Panel Computadoras Industriales"
                            title="TAICENN PC Pantallas Panel Computadoras Industriales" width="150px"></a> <img
                        class="imgbandera" src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">TAICENN</p>
                <p class="pTitulo">Computadoras, monitores y panel PC's Industriales</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue automatizacion adquisiciond iot">
                <center>
                    <a href="teracom"><img src="images/nuestras_marcas/TERACOM.webp"
                            alt="Teracom para el monitoreo remoto de Ethernet"
                            title="Teracom para el monitoreo remoto de Ethernet" width="150px"></a> <img
                        class="imgbandera" src="images/nuestras_marcas/bandera/bulb.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">TERACOM</p>
                <p class="pTitulo">Soluciones de control remoto para la automatización</p>
                <div class="d-flex justify-content-around pb-3">
                    <button id="automatizacion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('automatizacion')"
                        type="button"><img class="ImgIcon" src="assets/automatizacion-y-control-de-procesos.svg"
                            alt="Automatización y Control de Procesos" title="Automatización y Control de Procesos"
                            width="40px"></button>
                    <button id="adquisicion" class="btn p-0 btnIcon" onclick="categoriasMarcas_('adquisiciond')"
                        type="button"><img class="ImgIcon" src="assets/adquisicion-y-registro-de-datos-daq.svg"
                            alt="Adquisición de datos" title="Adquisición de datos" width="40px"></button>
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue sensores">
                <center>
                    <a href="tri-tronics"><img src="images/nuestras_marcas/TRI-TRONICS.webp"
                            alt="TRI-TRONICS diseña y fabrica sensores fotoeléctricos de alto rendimiento"
                            title="TRI-TRONICS diseña y fabrica sensores fotoeléctricos de alto rendimiento"
                            width="150px"></a>
                    <!-- LOGO MARCA --><img class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">TRI-TRONICS</p>
                <p class="pTitulo">Sensores fotoeléctricos de alta calidad</p>
                <div class="d-flex justify-content-around pb-3">
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')" type="button"><img
                            class="ImgIcon" src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                            title="Sensores y Transductores" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue pruebasm">
                <center>
                    <a href="vitrek"><img src="images/nuestras_marcas/VITREK.webp"
                            alt="VITREK Equipos DAQ de alta valocidad" title="VITREK Equipos DAQ de alta valocidad"
                            width="150px"> </a><img class="imgbandera" src="images/nuestras_marcas/bandera/usab.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">VITREK</p>
                <p class="pTitulo">Prueba, medición y adquisición de datos</p>
                <div class="d-flex justify-content-around pb-3">
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas_('pruebasm')" type="button"><img
                            class="ImgIcon" src="assets/prueba-y-medicion.svg" alt="Prueba y Medición"
                            title="Prueba y Medición" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue sensores">
                <center>
                    <a href="waycon"><img src="images/nuestras_marcas/WAYCON.webp"
                            alt="WayCon sensores compactos son rápidos y fáciles de montar"
                            title="WayCon sensores compactos son rápidos y fáciles de montar" width="150px"></a> <img
                        class="imgbandera" src="images/nuestras_marcas/bandera/aleb.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">WAYCON</p>
                <p class="pTitulo">Sensores de posición y distancia precisos</p>
                <div class="d-flex justify-content-around pb-3">
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')" type="button"><img
                            class="ImgIcon" src="assets/sensores-y-transductores.svg" alt="Sensores y Transductores"
                            title="Sensores y Transductores" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue computo iot software sensores">
                <center>
                    <a href="https://www.logicbus.com.mx/womaster"><img
                            src="https://www.logicbus.com.mx/images/nuestras_marcas/womaster.webp" alt="WOMASTER"
                            title="WOMASTER" width="150px"></a>
                    <img class="imgbandera" src="images/nuestras_marcas/bandera/taib.webp" alt="Taiwan">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">WOMASTER</p>
                <p class="pTitulo">Comunicación Industrial y Soluciones IIoT</p>
                <div class="d-flex justify-content-around pb-3 flex-wrap">
                    <button id="computo" class="btn p-0 btnIcon" onclick="categoriasMarcas_('computo')"
                        type="button"><img class="ImgIcon" src="assets/pcs-y-comunicaciones-industriales.svg"
                            alt="PC's y Comunicaciones Industriales" title="PC's y Comunicaciones Industriales"
                            width="40px"></button>
                    <button id="iot" class="btn p-0 btnIcon" onclick="categoriasMarcas_('iot')" type="button"><img
                            class="ImgIcon" src="assets/iot.svg" alt="IoT" title="IoT" width="40px"></button>
                    <button id="software" class="btn p-0 btnIcon" onclick="categoriasMarcas_('software')"
                        type="button"><img class="ImgIcon" src="assets/software-y-herramientas-de-desarrollo.svg"
                            alt="Software y Herramientas de Desarrollo" title="Software y Herramientas de Desarrollo"
                            width="40px"></button>
                    <button id="sensores" class="btn p-0 btnIcon" onclick="categoriasMarcas_('sensores')"
                        type="button"><img class="ImgIcon" src="assets/sensores-y-transductores.svg"
                            alt="Sensores y Transductores" title="Sensores y Transductores" width="40px"></button>
                </div>
            </div>
            <div class="boxMarcaP bblue robotica">
                <center>
                    <a href="youibot"><img src="images/nuestras_marcas/YOUIBOT.webp" alt="YOUIBOT robots móviles (AMR) "
                            title="YOUIBOT  robots móviles (AMR) " width="150px"></a><img class="imgbandera"
                        src="images/nuestras_marcas/bandera/chib.webp">
                </center>
                <br>
                <p class="pTitulo" style="font-size:1.5em;">YOUIBOT</p>
                <p class="pTitulo">AMR's industriales y soluciones de control de flota de AMR's</p>
                <div class="d-flex justify-content-around pb-3">
                    <button class="btn p-0 btnIcon" onclick="categoriasMarcas_('robotica')" type="button"><img
                            class="ImgIcon" src="assets/vision-artificial-y-robots.svg"
                            alt="Robótica y Visión Artificial" title="Robótica y Visión Artificial"
                            width="40px"></button>
                </div>
            </div>
        </div>
    </div>
    <div align="center">
        <a href="pdf/catalogos/LINE-CARD-WEB.pdf" download="Linecard MX - Logicbus S.A. de C.V.pdf"> <img
                src="https://www.logicbus.com.mx/imagenes/line-card-logicbus-descarga.webp" alt="LineCard"
                title="LineCard" width="100%"> </a>
    </div>
    <h2 class="sr-only">Conoce más sobre nosotros</h2>
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $own_file_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <script>
        function categoriasMarcas() {
            var hasClase;
            listado = document.getElementById('marcasMobile');
            contenedores = listado.getElementsByClassName('boxMarcaP');
            for (m = 0; m < contenedores.length; m++) {
                if (document.getElementById("filtroMobile").value == "todas") {
                    contenedores[m].style.display = 'block';
                } else if (contenedores[m].classList.contains(document.getElementById("filtroMobile").value)) {
                    contenedores[m].style.display = 'block';
                } else {
                    contenedores[m].style.display = 'none';
                }
            }
        }

        function categoriasMarcas_(valor) {
            var hasClase;
            listado = document.getElementById('marcasMobile');
            contenedores = listado.getElementsByClassName('boxMarcaP');
            for (m = 0; m < contenedores.length; m++) {
                if (valor == "todas") {
                    contenedores[m].style.display = 'block';
                } else if (contenedores[m].classList.contains(valor)) {
                    contenedores[m].style.display = 'block';
                } else {
                    contenedores[m].style.display = 'none';
                }
            }
        }

        function buscadorMarcas() {
            var input, filter, btn, a, e;
            input = document.getElementById("inputApp");
            filter = input.value.toUpperCase();
            btn = document.getElementsByClassName("sectionMar");
            for (e = 0; e < btn.length; e++) {
                a = btn[e].getElementsByTagName("img")[0];
                if (a.alt.toUpperCase().indexOf(filter) > -1) {
                    btn[e].style.display = "block";
                } else {
                    btn[e].style.display = "none";
                }
            }
        }

        function todas() {
            var marcas = document.getElementsByClassName("sectionMar");
            var activada = document.getElementById("todas");
            var categorias = document.getElementsByClassName("btn btn-blue btn-lg m-1");

            for (i = 0; i < marcas.length; i++) {
                marcas[i].style.display = "block";
            }

            for (j = 0; j < categorias.length; j++) {
                var hasClase = categorias[j].classList.contains('on');
                if (hasClase) {
                    categorias[j].classList.remove("on");
                }
            }
            activada.classList.add('on');
        }

        function BuscarMarcas(categoria, classCategoria) {
            var hasClase;
            var marcas = document.getElementsByClassName("sectionMar");
            var activada = document.getElementById(categoria);
            var categorias = document.getElementsByClassName("btn btn-blue btn-lg m-1");

            for (i = 0; i < marcas.length; i++) {
                hasClase = marcas[i].classList.contains(classCategoria);
                if (hasClase) {
                    marcas[i].style.display = "block";
                } else {
                    marcas[i].style.display = "none";
                }
            }

            for (j = 0; j < categorias.length; j++) {
                var hasClase = categorias[j].classList.contains('on');
                if (hasClase) {
                    categorias[j].classList.remove("on");
                }
            }
            activada.classList.add('on');
        }

        function BuscarMarcasMobile(categoria, classCategoria) {
            var hasClase;
            var marcas = document.getElementById("marcasMobile");
            var categorias = document.getElementsByClassName("dropdown-item");

            for (i = 0; i < marcas.length; i++) {
                hasClase = marcas[i].classList.contains(classCategoria);
                if (hasClase) {
                    marcas[i].style.display = "block";
                } else {
                    marcas[i].style.display = "none";
                }
            }

            for (j = 0; j < categorias.length; j++) {
                var hasClase = categorias[j].classList.contains('active');
                if (hasClase) {
                    categorias[j].classList.remove("active");
                }
            }
            categoria.classList.add('active');
        }
    </script>
</body>
<?php echo $var_footer; ?>

</html>