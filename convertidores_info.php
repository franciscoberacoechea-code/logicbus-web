<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-1007518778');
    </script>
    <title>Convertidores de protocolos - Logicbus S.A de C.V</title>
    <meta name="description"
        content="Convertidores de protocolos. Un protocolo es un conjunto de reglas usadas por computadoras o dispositivos para comunicarse unas con otras.">
    <meta name="keywords"
        content="Convertidores, protocolo, Serial, Asíncrono, Síncrono, Comunicación, Repetidores, Hub, USB, Ethernet, Fibra Óptica, tarjetas, CAN, DeviceNET, WAN, RS-232, RS-422, RS-485, RS-530, FR-Net, Baud Rate, Chip, UART, alámbrico, inalámbrico, PCI, bajo perfil, PCMCIA, ISA, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
    <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="language" content="Spanish">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="libreria/diagramas.css" rel="stylesheet">
    <!--- Estilos Necesarios-->
    <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
    <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
    <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
    <!--------------->
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="libreria/ie-emulation-modes-warning.js"></script>
    <script language="javascript">

        function menu_actual() {
            document.getElementById("productos").className = "dropdown active";
        };
    </script>

    <style>
        * a {
            cursor: pointer;
        }

        p {
            text-align: justify;
            text-justify: inter-word;
        }
    </style>
</head>

<body onLoad="menu_actual();">
    <?
  arriba();
  ?>

    <div id="main">
        <div class="gridContArriba" id="subir">
            <div class="griditemContA">
                <?
        menucategorias();
        ?>
            </div>
            <div class="griditemContA">
                <div class="container-fluid">
                    <a href="productos">Productos</a>-&gt;<a
                        href="https://www.logicbus.com.mx/convertidores_protocolos">Convertidores de Protocolos</a>
                    <br>

                    <div class="" align="center">
                        <h1 align="center">Convertidores de Protocolos</h1><br>
                        <img src="https://www.logicbus.com.mx/images/banner/www/convertidores-de-protocolos.png"
                            width="100%" alt="Tablets PC Logicbus" title="Tablets PC Logicbus">
                    </div><br>
                    <p id="lista">
                        Un protocolo es un conjunto de reglas usadas por computadoras o dispositivos para comunicarse
                        unas con otras a través de una red por medio de intercambio de mensajes. A su vez, una interfaz
                        es un puerto o circuito físico a través del cual se envían o reciben señales desde un sistema a
                        otro.<br>
                        En ocasiones estos protocolos o interfaces no son similares por lo que requerimos de utilizar un
                        convertidor de señal para realizar la interconexión entre dos dispositivos.<br>
                        Un protocolo X puede viajar en diferentes interfaces, por lo que es importante tener bien claro
                        que es lo que se requiere convertir, si el protocolo o la interfaz.<br>
                        Podemos tener por ejemplo protocolo Modbus sobre RS-485 y un equipo que maneja Modbus por
                        RS-232, en este caso se requiere un convertidor de interfaz de RS-232 a RS-485.<br>
                        Otro ejemplo sería un equipo que hable Profinet por Ethernet y un equipo que hable Modbus TCP
                        igual por Ethernet, aquí se requiere de un convertidor de protocolos de Profinet a Modbus.
                    </p>
                    <nav class="navMenuSuper">
                        <ul>
                            <li>
                                <a href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-convertidores-de-protocolos"
                                    target="_blank">Ver en Tienda</a>
                            </li>
                            <li>
                                <a href="#interfaces">Interfaces</a>
                            </li>
                            <li>
                                <a href="#protocolos">Protocolos</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="gridContMitad">
                        <div class="griditemContB">
                            <p>Ejemplos de<strong> Interfaces</strong> son:</p>
                            <ul>
                                <li><a href="#RS-232">RS-232</a></li>
                                <li><a href="#RS-422">RS-422</a></li>
                                <li><a href="#RS-485">RS-485</a></li>
                                <li>USB</li>
                                <li>Ethernet</li>
                                <li>ZigBee</li>
                                <li>GSM</li>
                            </ul>
                        </div>
                        <div class="griditemContB">
                            <p>Ejemplos de <strong>protocolos</strong> son:</p> <a name="RS-232"></a>
                            <ul>
                                <li><a href="#Modbus">Modbus</a></li>
                                <li><a href="#HART">Hart</a></li>
                                <li><a href="#CAN">CAN</a></li>
                                <li><a href="#PROFIBUS">Profibus</a></li>
                                <li>Dcon</li>
                                <li>FBs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <div class="seccion" id="interfaces">
                <div class="col-center">
                    <h2><span>Interfaces</span></h2>
                </div>
            </div>
        </center>
        <div class="divCentrado">
            <h3 align="center"><b>RS-232</b></h3>
            <p>
                El <strong>RS-232 (Recommended Standard 232)</strong>, en español: “Estándar Recomendado 232” también
                conocido como <strong>EIA/TIA RS-232C</strong>, es una interfaz que designa una norma para el
                intercambio de una serie de datos binarios entre un “Equipo Terminal de Datos”) y un  Equipo de
                Comunicación de Datos.<br>
                El RS-232 consiste en un conector tipo <strong>DB-25 (de 25 pines)</strong>, aunque es normal encontrar
                la versión de <strong>9 pines (DE-9, o popularmente mal denominados DB-9)</strong>, más barato e incluso
                más extendido para cierto tipo de periféricos (como el ratón serie de la PC).
            </p> <br><br>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12 col-lg-3">
                        <img src="https://www.logicbus.com.mx/imagenes/rs232_1.jpg" alt="Conector DB9"
                            title="Conector DB9" width="100%">
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <img src="https://www.logicbus.com.mx/imagenes/rs232_2.jpg" alt="Conector DB25"
                            title="Conector DB25" width="100%">
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <img src="https://www.logicbus.com.mx/imagenes/rs232_3.jpg" alt="Convertidor RS-422 a RS-232"
                            title="Convertidor RS-422 a RS-232" width="100%">
                    </div>
                </div>
            </div> <br><br> <a name="RS-422"></a>

            <h3 align="center"><b>RS-422</b></h3>
            <p>
                En el bus <strong>RS-422</strong> la señal diferencial puede transmitir datos a velocidades de hasta 10
                millones de bits por segundo o puede enviar datos por cable, siempre y cuando no supere los 1200
                metros.<br><br>
                En una interfaz diferencial, los niveles lógicos son definidos por la diferencia de voltaje entre una
                pareja de señales de entrada o de salida. En contraste, una interfaz de una sola terminación, por
                ejemplo RS-232, define los niveles lógicos como la diferencia de voltaje entre una señal eléctrica y una
                conexión de masa común. Las interfaces diferenciales tienen típicamente mayor inmunidad al ruido o a
                picos de tensión que pudieran tener lugar en las líneas de comunicación.
            </p><br><br>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12 col-lg-6">
                        <img src="https://www.logicbus.com.mx/imagenes/rs422_1.jpg" alt="Bus RS-422" title="Bus RS-422"
                            width="100%">
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <img src="https://www.logicbus.com.mx/imagenes/rs422_2.jpg" alt="Voltajes diferenciales"
                            title="Voltajes diferenciales" width="100%">
                    </div>
                </div>
            </div> <br><br> <a name="RS-485"></a>

            <h3 align="center"><b>RS-485</b></h3>
            <p>
                Está definido como un sistema en bus de transmisión multipunto diferencial.<br>
                Es ideal para transmitir a altas velocidades sobre largas distancias <strong>(35 Mbit/s hasta 10 metros
                    y 100 kbit/s en 1200 metros)</strong> y a través de canales ruidosos, ya que reduce los ruidos que
                aparecen en los voltajes producidos en la línea de transmisión.<br>
                El medio físico de transmisión es un par entrelazado y la comunicación es half-duplex (semiduplex).
            </p><br><br>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12 col-lg-6">
                        <img src="https://www.logicbus.com.mx/imagenes/rs485_1.jpg" alt="Conexión en serie" title=""
                            width="100%">
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <img src="https://www.logicbus.com.mx/imagenes/rs485_2.jpg" alt="Bus RS-485" title=""
                            width="100%">
                    </div>
                </div>
            </div><br><br> <a name="Modbus"></a>

            <center>
                <nav class="navMenuSuper">
                    <ul>
                        <li>
                            <a href="#subir">Ir al principio</a>
                        </li>
                    </ul>
                </nav>
            </center>
        </div>
        <center>
            <div class="seccion" id="protocolos">
                <div class="col-center">
                    <h2><span>Protocolos</span></h2>
                </div>
            </div>
        </center>
        <div class="divCentrado">
            <h3 align="center"><b>Modbus</b></h3>
            <p>
                Modbus es un protocolo de comunicaciones, basado en la arquitectura maestro/esclavo o
                cliente/servidor,
                diseñado en 1979 por Modicon para su gama de controladores lógicos programables (PLCs).<br>
                Debido a que este protocolo fue público, de fácil uso y que requiere poco desarrollo (maneja
                bloques de
                datos sin suponer restricciones) se convirtió en un protocolo de comunicaciones estándar en la
                industria.
            </p>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12 col-lg-4">
                        <img src="https://www.logicbus.com.mx/imagenes/Modbus.png" alt="Logo Modbus" title="Logo Modbus"
                            width="100%">
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <img src="https://www.logicbus.com.mx/imagenes/Red-Modbus-RTU.png" alt="Red Modbus"
                            title="Red Modbus" width="100%">
                    </div>
                </div>
            </div><br><br>

            <h3 align="center"><b>Hart</b></h3>
            <p>
                El <strong>protocolo HART</strong> (acrónimo en inglés de highway addressable remote transducer)
                es un protocolo abierto de uso común en los sistemas de control, que se emplea para la configuración
                remota y supervisión de datos con instrumentos de campo.<br>
                Este protocolo permite comunicar con un instrumento de campo sobre un lazo de corriente 4-20 mA,
                tanto los datos de configuración y parámetros como las medidas de proceso como temperatura, caudal,
                presión o cualquier otra.
            </p><br><br>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12 col-lg-4">
                        <img src="https://www.logicbus.com.mx/imagenes/hart_1.jpg" alt="Señal Modulada"
                            title="Señal Modulada" width="100%">
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <img src="https://www.logicbus.com.mx/imagenes/hart_2.jpg" alt="Señal mA" title="Señal mA"
                            width="100%">
                    </div>
                </div>
            </div>
            <br><br>

            <h3 align="center"><b>CAN</b></h3>
            <p>
                <strong>CAN</strong> (acrónimo del inglés Controller Area Network) es un protocolo de
                comunicaciones desarrollado por la firma alemana Robert Bosch GmbH, basado en una topología bus
                para la
                transmisión de mensajes en entornos distribuidos.<br>
                Este protocolo es muy utilizado en la Industria Automotriz.<br>
                Al igual que el RS-485 viaja en 2 hilos
            </p> <br><br>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12 col-lg-4">
                        <img src="https://www.logicbus.com.mx/imagenes/can1_1.jpg" alt="Industria Automotriz"
                            title="Industria Automotriz" width="100%">
                    </div>
                </div>
            </div> <br><br>

            <h3 align="center"><b>Profibus</b></h3>
            <p>
                <strong>Profibus</strong> es un estándar de comunicaciones para bus de campo. Deriva de las
                palabras
                PROcess FIeld BUS.<br>
                Fue utilizado por primera vez en 1989 por el BMBF (departamento alemán de educación e
                investigación) y
                luego utilizado por Siemens. PROFIBUS se publica abiertamente como parte de la norma IEC 61158.
            </p>
            <br><br>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12 col-lg-3">
                        <img src="https://www.logicbus.com.mx/imagenes/profibus_1.jpg" alt="PROFIBUS" title="PROFIBUS"
                            width="100%">
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <img src="https://www.logicbus.com.mx/imagenes/profibus_2.jpg" alt="Conexión en serie"
                            width="100%">
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <img src="https://www.logicbus.com.mx/imagenes/profibus_3.jpg" alt="Conexión en serie"
                            width="100%">
                    </div>
                </div>
            </div>

            <center>
                <nav class="navMenuSuper">
                    <ul>
                        <li>
                            <a href="#subir">Ir al principio</a>
                        </li>
                        <li>
                            <a href="https://www.logicbus.com.mx/convertidores-protocolos">Regersar a
                                Principal</a>
                        </li>
                    </ul>
                </nav>
            </center>
        </div>
    </div>
    <?
  abajo();
  ?>
</body>

</html>