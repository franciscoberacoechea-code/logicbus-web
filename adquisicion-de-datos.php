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
    <title>Soluciones Profesionales en Adquisición de Datos (DAQ) para Automatización Industrial | Logicbus
    </title>
    <meta name="description" content="Explora nuestra amplia gama de dispositivos DAQ: desde tarjetas USB y PCI hasta sistemas inalámbricos y basados en IoT. Ideales para monitoreo, control y análisis en tiempo real de procesos industriales.">

    <meta name="keywords" content="adquisicion de datos,tarjetas DAQ,adquisición de datos basados en PC,tarjetas de adquisión de datos por Ethernet,tarjetas USB,Tecnología Cloud-IoT,Solución en la nube para centralización de datos,Cloud Services,productos de adquisición de datos Wi-Fi, conectividad inalámbrica en los sistemas de monitoreo,modulos Wi-Fi,protocolo ZigBee,Raspberry Pi,módem inalámbrico,adquisición y control de datos,Unidad GSM/GPRS de telecontrol para aplicaciones domésticas,bus PCI,tarjetas DAQ PCI,software para las tarjetas PCI,Sistemas de Adquisición de Datos,software de adquisicion de datos,Logicbus,MCC Mexico,MCC,Measurement Computing">
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

    <div id="main">
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php
                menucategorias();
                ?>
            </div>
            <div class="griditemContA" id="subir">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                        <li class="breadcrumb-item"><a href="Adquisicion-y-registro-de-datos-DAQ" class="blue link-orange">Adquisición y registro de datos - DAQ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adquisición de datos</li>
                    </ol>
                </nav>
                <div align="center">
                    <h1>Adquisición de Datos</h1>
                    <img src="https://www.logicbus.com.mx/images/banner/www/banner-adquisicion-datos.png" class="image_productos" class="img-responsive" width="100%" alt="La importancia de los PLC's" title="La importancia de los PLC's">
                </div>
                <br>
                <p>Todos los sistemas de adquisición de datos basados ​​en PC registrarán datos extremadamente precisos,
                    repetibles, confiables y sin errores, siempre que estén conectados y funcionen de acuerdo con las
                    prácticas
                    recomendadas por el fabricante. Estas prácticas incluyen seleccionar los <a href="https://tienda.logicbus.com.mx/Sensores_c_3006.html">sensores</a> correctos para la
                    aplicación, el
                    cable apropiado y el cable blindado; capturar las señales en la magnitud, rango y frecuencia
                    adecuados; y
                    prestando especial atención a la conexión a tierra y al blindaje, en particular eliminando los
                    bucles de
                    tierra. Los elementos adicionales incluyen elegir la <a href="https://tienda.logicbus.com.mx/Multimetros-de-Banco_c_2959.html">impedancia correcta</a> y
                    usar
                    entradas de doble extremo (diferencial) en lugar de un solo extremo cuando sea posible. También se
                    debe
                    considerar el medio ambiente, especialmente para <a href="https://tienda.logicbus.com.mx/Temperatura_c_634.html">temperaturas extremas</a>, golpes y
                    <a href="https://tienda.logicbus.com.mx/Lord-Sensing-MicroStrain_bymfg_162-7-1.html">vibraciones</a>
                </p>
                <br>
                <nav class="navMenuSuper">
                    <ul>
                        <li>
                            <a href="https://tienda.logicbus.com.mx/Adquisici%C3%B3n-de-Datos_c_3333.html" target="_blank">Ver en
                                Tienda</a>
                        </li>
                        <li>
                            <a href="#produ">Productos</a>
                        </li>
                        <li>
                            <a href="https://www.logicbus.com.mx/contacto">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <br>
        <div style="overflow-x:auto;">
            <center>
                <table class="tablaDG" style="background: url('https://www.logicbus.com.mx/imagenes/diagramas/DAQ/diagrama-daq.png'); background-size: contain;background-repeat: no-repeat;">
                    <tr>
                        <th></th>
                        <th></th>
                        <th>
                            <a href="https://www.logicbus.com.mx/computadoras-para-panel" target="_blank"><img src="https://www.logicbus.com.mx/imagenes/diagramas/DAQ/display.png" alt="Display" class="imgp" title="" width="90%" height="120%">
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://www.logicbus.com.mx/celdas-de-carga" target="_blank">
                                <img src="https://www.logicbus.com.mx/imagenes/diagramas/DAQ/celda-de-carga.png" alt="Celda de carga" class="imgp" title="" width="90%">
                            </a><br>
                        </td>
                        <td>
                            <a href="https://www.logicbus.com.mx/usb-categorias" target="_blank">
                                <img src="https://www.logicbus.com.mx/imagenes/diagramas/DAQ/usb-daq.png" class="imgp" title="" width="100%" alt="Dispositivo de Adquisición de Datos (DAQ)">
                            </a>
                        </td>
                        <td>
                            <a href="https://tienda.logicbus.com.mx/laptops-industriales.html" target="_blank">
                                <img src="https://www.logicbus.com.mx/imagenes/diagramas/DAQ/laptop-industrial.png" alt="Laptopo industrial" class="imgp" title="" width="100%">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: 10%;">
                            <img id="myflecha" src="https://www.logicbus.com.mx/imagenes/diagramas/DAQ/flecha-vertical.png" alt="Flecha vertical" class="punteroD" width="20%"><br><img id="" src="https://www.logicbus.com.mx/imagenes/diagramas/DAQ/texto.png" alt="Texto" class="textoD" width="80%"><br><br><br><br><br><img class="dedo" id="" src="https://www.logicbus.com.mx/imagenes/diagramas/DAQ/dedo-izquierda.png" alt="Dedo Izquierda" class="textoD" width="20%">
                        </td>
                        <td>
                            <a href="https://www.logicbus.com.mx/applied-motion-products" target="_blank">
                                <img src="https://www.logicbus.com.mx/imagenes/diagramas/DAQ/actuador.png" alt="Actuador" class="imgp" title="" width="100%">
                            </a>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </center>
            <br>
            <center>
                <div class="seccion" id="produ">
                    <div class="col-center">
                        <h2><span>Productos de adquisición de datos (DAQ)</span></h2>
                    </div>
                </div>
            </center>
            <div class="divCentrado">
                <div class="tabla_subcategorias_grid mt-3">
                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="usb-categorias">
                                <img src="assets/images/categorias/USB-DAQ.jpg" alt="Dispositivos de Aquisición de Datos por USB" title="Dispositivos de Aquisición de Datos por USB" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="usb-categorias">
                                <h2>USB</h2>
                            </a>
                            <p>La interfaz USB es el bus más popular para adquisición de datos. Gracias a su tecnología
                                plug-and-play
                                permite conectar uno o múltiples dispositivos fácilmente. Además esta interfaz permite
                                que el
                                dispositivo se alimente de la misma computadora.</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/USB_c_1367.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%">
                            </a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="ethernet-daq">
                                <img src="assets/images/categorias/alta_densidad.png" alt="Dispositivos de Aquisición de Datos Ethernet" title="Dispositivos de Aquisición de Datos Ethernet" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="ethernet-daq">
                                <h2>Ethernet</h2>
                            </a>
                            <p>Las tarjetas de adquisión de datos por Ethernet, cuentan con la misma disponibilidad que
                                las tarjetas
                                USB, donde se pueden encontrar con entradas y salidas análogas, E/S digitales y
                                contadores/timers.</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Ethernet_c_1486.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="Serial-IO-Modules">
                                <img src="assets/images/categorias/TMtiny.png" alt="Serial" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="Serial-IO-Modules">
                                <h2>Serial</h2>
                            </a>
                            <p>Las tarjetas de adquisición de datos por puerto serie ofrecen versatilidad con entradas y
                                salidas analógicas, E/S digitales, y contadores/timers. Su conexión serial brinda
                                disponibilidad similar a las tarjetas USB, facilitando la integración con múltiples
                                dispositivos y sistemas.</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Serial_c_1366.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="tecnologia-cloud-iot">
                                <img src="assets/images/categorias/Cloud-iot.jpg" alt="Tecnología Cloud-IoT" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="tecnologia-cloud-iot">
                                <h2>Tecnología Cloud-IoT</h2>
                            </a>
                            <p>Solución en la nube para centralización de datos, gestión de conexiones remotas, edición
                                de páginas de
                                supervisión personalizada multiusuario.<br>
                                Cloud Services proporciona supervisión de datos a pedido de las instalaciones,
                                tranquilidad y
                                flexibilidad para adaptarse a instalaciones de todos los tamaños y necesidades de
                                aplicación.</p>

                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Tecnolog%C3%ADa-Cloud-IoT_c_4290.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="Dispositivos-DAQ-Wi-fi">
                                <img src="assets/images/categorias/Wi-fi.jpg" alt="Wi-fi" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="Dispositivos-DAQ-Wi-fi">
                                <h2>Wi-fi</h2>
                            </a>
                            <p>Con la popularidad de la infraestructura de red 802.11 y el Internet de las cosas (IoT)
                                que enlaza
                                todos los dispositivos conectados via Wi-fi.<br>
                                Los productos de adquisición de datos Wi-Fi proporcionan una manera fácil de incorporar
                                conectividad
                                inalámbrica en los sistemas de monitoreo y control. Los módulos Wi-Fi admiten una
                                distancia de
                                comunicación de hasta 100 metros (328 pies) </p>

                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Wi-fi_c_2112.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="Dispositivos-DAQ-tipo-Zigbee">
                                <img src="assets/images/categorias/zigbee.png" alt="Adquisición de datos ZigBee" title="Adquisición de datos ZigBee" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="Dispositivos-DAQ-tipo-Zigbee">
                                <h2>ZigBee</h2>
                            </a>
                            <p>ZigBee es un protocolo de alto nivel de comunicación inalámbrica de bajo consumo, basada
                                en el estándar
                                IEEE 802.15.4 (Wireless Personal Area Network, WPAN).</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Zigbee_c_771.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="https://tienda.logicbus.com.mx/Para-Raspberry_c_2779.html">
                                <img src="assets/images/categorias/forRaspberry.png" alt="Radiofrecuencia - Modems RF" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="https://tienda.logicbus.com.mx/Para-Raspberry_c_2779.html">
                                <h2>Para Raspberry</h2>
                            </a>
                            <p>Raspberry Pi es la tercera plataforma de computadora de propósito general más vendida,
                                solo por detrás
                                de Microsoft® Windows® PC y Apple® Macintosh®<br>La potencia y las capacidades de la
                                Raspberry Pi están
                                comenzando a ser ampliamente utilizadas en toda la industria, incluso por Measurement
                                Computing, donde
                                se integra en el diseño de su serie de registradores de datos WebDAQ <br>Raspberry Pi 3
                                Modelo B +
                                ofrece un procesador ARM de cuatro núcleos de 64 bits, gigabit ethernet, inalámbrico,
                                Bluetooth, 4
                                puertos USB, ranura micro SD y salida HDMI.</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Para-Raspberry_c_2779.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="https://tienda.logicbus.com.mx/Radiofrecuencia--Modems-RF_c_4289.html">
                                <img src="assets/images/categorias/Modem-RF.jpg" alt="Radiofrecuencia - Modems RF" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="https://tienda.logicbus.com.mx/Radiofrecuencia--Modems-RF_c_4289.html">
                                <h2>Radiofrecuencia - Modems RF</h2>
                            </a>
                            <p>Un módem inalámbrico es un tipo de convertidor de radio que puede convertir la
                                información que existe
                                en una red cableada, como una conectada mediante una interfaz RS-232 o RS-485, etc., a
                                una red
                                inalámbrica. El módem inalámbrico está diseñado para aplicaciones de adquisición y
                                control de datos
                                entre un host y cualquier sensor remoto que esté conectado a la red. También es útil
                                para aquellas
                                aplicaciones donde es inconveniente o poco práctico instalar un cable físico. No solo se
                                puede usar un
                                módem inalámbrico en modo punto a punto, sino que también se puede usar en una
                                estructura multipunto.
                            </p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Radiofrecuencia--Modems-RF_c_4289.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="Dispositivos-DAQ-GSM-GPRS">
                                <img src="assets/images/categorias/GSM.png" alt="GSM / GPRS" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="Dispositivos-DAQ-GSM-GPRS">
                                <h2>GSM / GPRS</h2>
                            </a>
                            <P>Unidad GSM/GPRS de telecontrol para aplicaciones domésticas y de edificios, plantas
                                industriales y
                                máquinas a través de simples comandos enviados por mensajes de texto SMS o correos
                                electrónicos. Este
                                dispositivo es también un registrador de datos confiable que puede guardar y compartir
                                datos a través de
                                tarjeta microSD, correo electrónico o un servidor FTP. Aplicaciones móviles gratuitas
                                relacionadas con
                                estos productos están disponibles en las tiendas de móviles para la mejorar tu
                                experiencia de usuario.
                            </P>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Control-V%C3%ADa-Celular_c_2832.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="pci">
                                <img src="assets/images/categorias/PCI-Multifuncional.jpg" alt="Adquisición de datos PCI" title="Adquisición de datos PCI" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="pci">
                                <h2>PCI</h2>
                            </a>
                            <p>El bus PCI (Interconexión de Componentes Periféricos) es uno de los buses internos más
                                comunes
                                utilizados en la actualidad. Puede tener un ancho de banda compartido de hasta 132 MB/s.
                                Contamos con
                                una gran variedad de tarjetas DAQ PCI para satisfacer cualquier necesidad de pruebas o
                                automatización.
                            </p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/PCI_c_1368.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%">
                            </a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="pci_express">
                                <img src="assets/images/categorias/PCIe-ES-Digital.jpg" alt="Adquisición de datos PCI Express" title="Adquisición de datos PCI Express" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="pci_express">
                                <h2>PCI Express</h2>
                            </a>
                            <p>El software para las tarjetas PCI estándar también funciona con las nuevas PCI Express,
                                lo que
                                simplifica su transición a esta nueva generación de bus PCI.</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/PCI-express_c_1369.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>

                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="Sistemas-de-Adquisicion-de-Datos">
                                <img src="assets/images/categorias/sistemas-DAQ.jpg" alt="Sistemas de Adquisición de Datos" title="Sistemas de Adquisición de Datos" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="Sistemas-de-Adquisicion-de-Datos">
                                <h2>Sistemas de Adquisición de Datos</h2>
                            </a>
                            <p>Sistema, Tarjetas, Caja para tarjetas, Accesorios para cableado, Tarjetas opcional con
                                filtro
                                anti-aliasing, Cajas de adquisición de datos, Tarjetas controladoras, Aislamiento
                                óptico, Fuente de
                                poder, Software, Soportes de montaje, Resistencias shunt, USB y Cables DB25.</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Sistemas-de-Adquisición-de-Datos_c_3334.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>


                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="buses-especiales-legacy">
                                <img src="assets/images/categorias/legacy.jpg" alt="Buses Especiales y Legacy" title="Buses Especiales y Legacy" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="buses-especiales-legacy">
                                <h2>Buses Especiales y Legacy</h2>
                            </a>
                            <P>
                                De cientos de placas, tomando placas de bus PCI, por ejemplo; Se clasifican en tres
                                series: PCI, PISO y
                                PIO. Las series PCI son de primera línea y alcanzan un rendimiento increíble con
                                múltiples funciones y
                                altas resoluciones; La serie PISO está haciendo hincapié en su capacidad de protección
                                para evitar que
                                la entrada de señal sufra un impacto directo; La serie PIO son formas rentables para uso
                                general y,
                                además, son adecuadas para aplicaciones de transmisión de alta velocidad.<br>

                            </P>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="buses-especiales-legacy" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%">
                            </a>
                        </div>
                    </div>


                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="https://tienda.logicbus.com.mx/Software_c_2432.html">
                                <img src="assets/images/categorias/Software-y-Licencias.jpg" alt="Software" title="Software" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="https://tienda.logicbus.com.mx/Software_c_2432.html">
                                <h2>Software</h2>
                            </a>
                            <p>Adquiera datos, registre datos en el disco, grafique y muestre lecturas, lea un archivo
                                de datos
                                grabados y exporte datos a aplicaciones de terceros.El software de registro de datos
                                QuickDAQ y análisis
                                FFT admite la adquisición de datos (DAQ) y la visualización desde todos los dispositivos
                                USB y Ethernet
                                de traducción de datos que admiten la transmisión de entrada analógica. <br>
                            </p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Software_c_2432.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%">
                            </a>
                        </div>
                    </div>




                    <div class="row row-striped tabla_subcategorias_row">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                            <a href="accesorios-DAQ">
                                <img src="assets/images/categorias/accesorios-cablesseriales.png" alt="Software" title="Software" width="80%">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8" align="left">
                            <a href="accesorios-DAQ">
                                <h2>Accesorios</h2>
                            </a>
                            <p>Desde Cables para la adquision de Datos, Antenas, Accesorios para Familia SEA I/O (Módulo
                                de expansión
                                SeaI/O de salida de relé en forma C), Conectores para la adquisicion de Datos, Tarjetas
                                de terminales de
                                tornillo y adaptadores BNC, Herramientas y otros hadwares</p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="https://tienda.logicbus.com.mx/Cables-y-accesorios_c_906.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>
</body>

</html>