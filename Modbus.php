<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-1007518778');
    </script>
    <title>Logicbus / Protocolo / Que es Modbus
    </title>
    <meta name="description" content="Logicbus Modbus: Es un protocolo de comunicaciones, basado en la arquitectura maestro/esclavo o cliente/servidor, diseñado en 1979 por Modicon para su gama de controladores lógicos programables (PLCs).">
    <meta name="keywords" content="Convertidores, protocolo, Serial, Asincrono, Sincrono, Comunicacion, Repetidores, Hub, USB, Ethernet, Fibra Optica, tarjetas, CAN, DeviceNET, WAN, RS-232, RS-422, RS-485, RS-530, FR-Net, Baud Rate, Chip, UART, alambrico, inalambrico, PCI, bajo perfil, PCMCIA, ISA, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">

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
    <?php echo $var_headers; ?>

</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div>
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php
                menucategorias();
                ?>
            </div>
            <div class="griditemContA">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                        <li class="breadcrumb-item"><a href="ethernet_daq" class="blue link-orange">Ethernet</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modbus RTU/TCP</li>
                    </ol>
                </nav>
                <!-- NOMBRE DE LA CATEGORIA -->
                <h1 align="center" class="titulo_producto"> ¿Qué es Modbus? </h1>

                <br>
                <div class="row justify-content-center mb-3">
                    <div align="center">
                        <img src="imagenes/Modbus.png" alt="Modbus" title="Modbus" width="100%">
                    </div>
                </div>
                <br>
                <h2><strong>¿Qué es el protocolo Modbus RTU?</strong></h2>
                <p>Modbus es un protocolo de comunicaciones, basado en la arquitectura maestro/esclavo o
                    cliente/servidor, diseñado en 1979 por Modicon para su gama de controladores lógicos programables
                    (PLCs).</p>

                <p>Debido a que este protocolo fue público, de fácil uso y que requiere poco desarrollo (maneja bloques
                    de datos sin suponer restricciones) se convirtió en un protocolo de comunicaciones estándar en la
                    industria. Es el protocolo de mayor disponibilidad para la conexión de dispositivos electrónicos
                    industriales.<br>
                    El protocolo Modbus permite el control de una red de dispositivos, por ejemplo un equipo de medición
                    temperatura y humedad puede comunicar los resultados a una PC. Modbus también se usa para la
                    conexión de un PC de supervisión con una unidad remota (RTU) en sistemas de supervisión de
                    adquisición de datos (SCADA). Existen versiones del protocolo Modbus para puerto serial y Ethernet
                    (Modbus/TCP).</p>

                <div class="row justify-content-center mb-3">
                    <div class="col" align="center">
                        <img src="imagenes/Red-Modbus-RTU.png" alt="Red Modbus RTU" title="Red Modbus RTU" width="90%">
                    </div>
                </div>

                <br>
                <h2><strong>¿Qué es el protocolo Modbus TCP?</strong></h2>
                <p>Modbus/TCP es un protocolo de comunicación diseñado que permite a equipos industriales tales como
                    PLCs, PC, drivers para motores y otros tipos de dispositivos físicos de entrada/salida, comunicarse
                    sobre una red Ethernet. Fue introducido por Schneider Automation como una variante de la familia de
                    protocolos MODBUS, ampliamente usada para la supervisión y el control de equipo de automatización.
                    Específicamente el protocolo define el uso de mensajes MODBUS en un entorno intranet o internet
                    usando los protocolos TCP/IP.</p>

                <p>La especificación Modbus/TCP define un estándar interoperable en el campo de la automatización
                    industrial, el cual es simple de implementar para cualquier dispositivo que soporte sockets TCP/IP.
                    Todas las solicitudes son enviadas vía TCP sobre el puerto registrado 502 y normalmente usando
                    comunicación half-duplex sobre una conexión dada. Es decir, no hay beneficio en enviar solicitudes
                    adicionales sobre una conexión única mientras una respuesta está pendiente.</p>

                <p>Modbus/TCP básicamente encapsula una trama MODBUS dentro de una trama TCP en una manera simple como
                    se muestra en la figura a continuación.</p>


                <div class="row justify-content-center mb-3">
                    <div class="col" align="center">
                        <img src="imagenes/modbus04.jpg" alt="Red Modbus RTU" title="Red Modbus RTU" width="90%">
                    </div>
                </div>

                <br>

                <h2><strong>¿Qué software soporta los protocolos Modbus RTU o TCO?</strong></h2>
                <p>La mayoría de los software SCADA (Supervisor Control And Data Acuisition) soportan Modbus por
                    ejemplo: Citect, ICONICS, iFIX, <em><a href="indusoft" target="new"><strong>InduSoft</strong></a></em>, Intouch, Entivity Studio, Entivity Live,
                    Entivity VLC, Trace Mode, Wizcon, Wonderware, etc.</p>
                <br>
                <h2><strong>¿Cuáles son los beneficios de utilizar el protocolo Modbus RTU/TCP?</strong></h2>
                <p>
                <ul>
                    <li>De código abierto, no se requiere pagar por licencia.</li>
                    <li>Ampliamente soportado por HMIs o softwares SCADA</li>
                    <li>Fácil de usar</li>
                    <li>Se pueden integrar varios equipos fácilmente</li>
                    <li>Bajo costo de desarrollo</li>
                    <li>Conocido ampliamente en la industria</li>
                </ul>
                </p>
                <br><br>

                <h2>Productos Modbus</h2>


                <div class="tabla_subcategorias_grid mt-3">


                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="I-7232D">
                                <img src="imagenes/02/I-7232D.jpg" alt="Gateway esclavo CANopen a maestro Modbus RTU: I-7232D" title="Gateway esclavo CANopen a maestro Modbus RTU: I-7232D" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
                            <a href="I-7232D">
                                <h2>I-7232D</h2>
                            </a>
                            <p>Gateway esclavo CANopen a maestro Modbus RTU. En la red CANopen el I-7232D puede ser
                                esclavo NMT, servidor SDO, productor PDO y consumidor PDO. Soporta hasta 10 modulos
                                Modbus RTU para expansión de E/S. Montaje en Riel DIN. Requiere alimentación 10~30 Vdc
                            </p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/I-7232D_p_1507.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>


                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="tGW-715">
                                <img src="imagenes/02/tGW-715.jpg" alt="Módulo Modbus: tGW-715" title="Módulo Modbus: tGW-715" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
                            <a href="tGW-715">
                                <h2>tGW-715</h2>
                            </a>
                            <p>Módulo Modbus / TCP a RTU / ASCII gateway, 1 puerto RS 485/422, puerto Ethernet (10/100
                                Base-TX) con PoE.</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/tGW-715_p_1461.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>


                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="tGW-718">
                                <img src="imagenes/02/tGW-718.png" alt="Módulo Modbus: tGW-718" title="Módulo Modbus: tGW-718" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
                            <a href="tGW-718">
                                <h2>tGW-718</h2>
                            </a>
                            <p>Tiny Modbus / TCP a RTU / ASCII gateway con PoE y 1 puerto RS-232/422/485 (RoHS).</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/tGW-718_p_1462.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>


                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="tGW-722">
                                <img src="imagenes/02/tGW-722.jpg" alt="Módulo Modbus: tGW-722" title="Módulo Modbus: tGW-722" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
                            <a href="tGW-722">
                                <h2>tGW-722</h2>
                            </a>
                            <p>Tiny Modbus / TCP a RTU / ASCII gateway con PoE y 2 puertos RS-232 (RoHS).</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/tGW-722_p_1463.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>


                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="tGW-725">
                                <img src="imagenes/02/tGW-725.jpg" alt="Módulo Modbus: tGW-725" title="Módulo Modbus: tGW-725" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
                            <a href="tGW-725">
                                <h2>tGW-725</h2>
                            </a>
                            <p>Tiny Modbus / TCP a RTU / ASCII gateway con PoE y 2 puertos RS-485 (RoHS).</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/tGW-725_p_1464.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>


                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="GW-7473">
                                <img src="imagenes/02/GW-7473.jpg" alt="Módulo Modbus: GW-7473" title="Módulo Modbus: GW-7473" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
                            <a href="GW-7473">
                                <h2>GW-7473</h2>
                            </a>
                            <p>Modbus esclavo a la puerta de enlace Ethernet / IP.</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/GW-7473_p_13809.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>


                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="GW-7662">
                                <img src="imagenes/02/GW-7662.jpg" alt="Módulo Modbus: GW-7662" title="Módulo Modbus: GW-7662" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
                            <a href="GW-7662">
                                <h2>GW-7662</h2>
                            </a>
                            <p>Convertidor (Gateway) de PROFINET a Modbus RTU/ASCII. Protección electrostática de 1. 4
                                kV en cualquier terminal. CPU de 32-bit 32MB de RAM / 4MB Flash / 8 KB EEPROM. Rango de
                                operación -25°C~75°C (13°F ~167°F).</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/GW-7662_p_14018.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>