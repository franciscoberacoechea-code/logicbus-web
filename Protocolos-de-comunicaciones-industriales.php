<?php
require ("admin/config.php");
include ("libreria/libreria.php");
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

    <title>Protocolos de Comunicación Industrial - Logicbus S.A de C.V.</title>
    <meta name="description"
        content="En este artículo se hablará acerca de los protocolos Industriales de comunicación...">
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta name="keywords"
        content="Industrial, Redes, Protocolos, Ethernet, Comunicacion Industrial, EtherCat, Modelos de protocolo, Sensores, Actuadores, Modbus, SAS.">
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
    <?php require ("libreria/header.view.php"); ?>
    <section>
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php
        menucategorias();
        ?>
            </div>
            <div class="griditemContA">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="seccion-informativa"
                                class="blue link-orange">Artículos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Protocolos de Comunicación Industrial
                        </li>
                    </ol>
                </nav>
                <div class="text-aling-center">
                    <img class="img-fluid"
                        src="https://www.logicbus.com.mx/imagenes/articulo/banner-protocolos-comunicacion-industrial.png"
                        alt="Banner protocolos comunicación industrial">
                </div>
                <br>
                <p class="paragraph text-justify"><b>Resumen: </b>En este artículo se hablará acerca de los protocolos
                    Industriales de comunicación, los tipos que hoy en día existen, desde el primer protocolo hasta el
                    actual, como han evolucionado en el paso del tiempo y como le han favorecido en el ambiente
                    industrial.</p>
                <center><img src="https://www.logicbus.com.mx/imagenes/articulo/protocolos.png" class="image_productos"
                        width="50%" alt="modelos de protocolos de comunicación industrial"
                        title="modelos de protocolos de comunicación industria"></center><br>

            </div>
        </div>
        <div class="container text-justify">

            <h2 class="subtitle blue text-center my-5">Introducción</h2>
            <p class="paragraph">La necesidad de la comunicación entre dos humanos está presente desde el hombre
                primitivo. Se puede pensar que antes se comunicaban con sonidos, olor, señales luminosas u otras formas,
                por mostrar algunos ejemplos.</p>
            <p class="paragraph">Si pensamos en la comunicación entre los equipos que utilizamos, como por ejemplo el
                primer celular que fue creada por Alexander Graham Bell, otro ejemplo es la red de comunicación que hoy
                en día utilizamos para conectarnos con internet.</p>
            <p class="paragraph">Todos estos procesos de comunicación tienen básicamente la misma estructura y el mismo
                objetivo: intercambiar datos o información entre dos entidades.</p>
            <p class="paragraph">En los últimos años, las aplicaciones industriales, basadas en la automatización de
                procesos industrializados se han incrementado, dando paso a las comunicaciones o conexión de sensores,
                actuadores y equipos de control, de esta manera, la comunicación entre la sala de control y los
                instrumentos de campo se ha convertido en realidad.</p>
            <p class="paragraph">En los siguientes párrafos abordaremos los principales protocolos de comunicación que
                se desarrollan en la actualidad.</p>

            <h2 class="subtitle blue text-center my-5">Protocolos Industriales Actuales</h2>
            <p class="paragraph">Muchas veces se ha escuchado la palabra protocolo de comunicación industrial, pero no
                se ha quedado claro a que se está refiriendo, para entender este concepto, un protocolo de comunicación
                industrial son un conjunto de reglas que permiten las interferencias e intercambios de datos entre
                varios dispositivos que forman una red.</p>
            <p class="paragraph">A medida que la tecnología ha avanzado, estos van teniendo un proceso de evolución, las
                comunicaciones a este nivel debe de poseer unas características particulares para responder a las
                necesidades de intercomunicación en tiempo real.</p>
            <p class="paragraph">Los protocolos que se usan en la industria provienen, por un lado, de la evolución de
                los antiguos protocolos basados en comunicaciones serie, y, por otro, de la creación de nuevos
                estándares basados en nuevas tecnologías. </p>
            <p class="paragraph">Como ejemplo de evolución de los antiguos protocolos se pueden citar Modbus/TCP, DNP3,
                Profinet, etc. Estos protocolos se aprovechan de las ventajas funcionales y de seguridad que ofrecen
                tanto Ethernet como TCP/IP para ofrecer mejores capacidades de trasferencia de información en los
                sistemas de control. Así, la mayoría de ellos se basan en encajar la parte de datos del protocolo
                original en la parte de datos de una trama Ethernet.</p>
            <p class="paragraph">Existen protocolos que tienen mayor presencia dentro del entorno industrial y son las
                siguientes:</p>

            <p class="med blue">A. Ethernet/IP</p>
            <p class="paragraph">Ethernet/IP es un protocolo de red en niveles para aplicaciones de automatización
                industrial. Que se basa en los protocolos estándar TCP/IP, utiliza los ya bastante conocidos hardware y
                software Ethernet para establecer un nivel de protocolo para configurar, acceder y controlar
                dispositivos de automatización industrial. Ethernet/IP clasifica los nodos de acuerdo a los tipos de
                dispositivos preestablecidos, con sus actuaciones específicas. Ethernet/IP ofrece un sistema integrado
                completo, enterizo, desde la planta industrial hasta la red central de la empresa.</p>

            <p class="med blue">B. DeviceNet</p>
            <p class="paragraph">DeviceNet es un protocolo de comunicación usado en la industria de la automatización
                para interconectar dispositivos de control para intercambio de datos. Un protocolo de comunicación que
                permite que dispositivos individuales (Arrancadores, Sensores Fotoeléctricos, escáner, etc.) Comuniquen
                con el controlador de red.</p>
            <p class="paragraph">Una forma de verlo es que el término Capa de aplicación implica que DeviceNet trata más
                con los datos de la aplicación que un nivel más bajo o un protocolo de capa que no es de aplicación.</p>

            <p class="med blue">C. AS-Interface</p>
            <p class="paragraph">Es un sistema de cableados avanzados que fue diseñado para cambiar los cables discretos
                que son conectado a un controlador programable como son los sensores y actuadores. Este protocolo
                proporciona un sistema de cable único, que su uso es rápido, fácil conectar y de operar, creado para los
                dispositivos más simples.</p>
            <p class="paragraph">Una de las características del AS-INTERFACE es que con el PLC se puede conectar de
                manera sencilla y directa y también puede funcionar como enlace descentralizado con sistemas de bus
                situados aguas arriba.</p>

            <p class="med blue">D. Modbus TCP/IP vs Modbus RTU</p>
            <p class="paragraph">El protocolo Modbus es una estructura de mensajería creada por Modicon. Este protocolo
                se usa para establecer una comunicación entre cliente y servidor en los dispositivos. Pero existen dos
                que son los más utilizados actualmente: Modbus TCP/IP y el RTU.</p>
            <p class="paragraph">El protocolo Modbus TCP/IP es un protocolo de comunicación diseñado que permite a
                equipos industriales tales como PLCs, PC, drivers para motores y otros tipos de dispositivos físicos de
                entrada/salida, comunicarse sobre una red Ethernet, Mientras que el Modbus RTU que es una representación
                binaria compacta de los datos.</p>
            <p class="paragraph">El protocolo Modbus permite el control de una red de dispositivos, por ejemplo un
                equipo de medición temperatura y humedad puede comunicar los resultados a una PC. Modbus también se usa
                para la conexión de un PC de supervisión con una unidad remota (RTU) en sistemas de supervisión de
                adquisición de datos (SCADA).</p>

            <p class="med blue">E. PROFINET</p>
            <p class="paragraph">Profinet está basado en Ethernet Industrial, TCP/IP y algunos estándares de
                comunicación pertenecientes al mundo TI. Entre sus características destaca que es Ethernet en tiempo
                real, donde los dispositivos que se comunican por el bus de campo acuerdan cooperar en el procesamiento
                de solicitudes que se realizan dentro del bus.</p>
            <p class="paragraph">Existen varios protocolos definidos dentro del contexto PROFINET como son:</p>
            <ul class="paragraph">
                <li><b>PROFINET/CBA:</b> Protocolo asociado a las aplicaciones de automatización distribuida en entornos
                    industriales.</li>
                <li><b>PROFINET/DCP:</b> Descubrimiento y configuración básica. Es un protocolo basado en la capa de
                    enlace, utilizado para configurar nombres de dispositivos y direcciones IP.</li>
                <li><b>PROFINET/IO:</b> A veces llamado INET-RT (RealTime), es utilizado comunicaciones con periferias
                    entralizadas.</li>
                <li><b>PROFINET/MRP:</b> Protocolo utilizado para la redundancia de medios. Utiliza los principios
                    básicos para la reestructuración de las redes en caso de sufrir un fallo cuando la red posee una
                    topología en anillo.</li>
                <li><b>PROFINET/MRRT:</b> Su objetivo es dar soluciones a la redundancia de medios para PROFINET/RT</li>
                <li><b>PROFINET/PTCP:</b> Protocolo de Control de Precisión de Tiempo basado en la capa de enlace, para
                    sincronizar señales de reloj/tiempo en varios PLC</li>
                <li><b>PROFINET/RT:</b> Transferencia de datos en tiempo real.</li>
                <li><b>PROFINET/IRT:</b>Transferencia de datos isócrono en tiempo real.</li>
            </ul>

            <p class="med blue">F. PROFIBUS</p>
            <p class="paragraph">PROFIBUS es un estándar de red de campo abierto e independiente de proveedores, donde
                la interfaz de ellos permite amplia aplicación en procesos, fabricación y automatización predial.</p>
            <p class="paragraph">Profibus proporciona tres versiones diferentes de protocolos de comunicación:</p>
            <ul class="paragraph">
                <li><b>Profibus-DP: </b>este protocolo está optimizado para conseguir una alta velocidad de transmisión.
                    Está especialmente diseñado para establecer la comunicación entre el controlador programable y los
                    dispositivos de entrada/ salida a nivel campo.</li>
                <li><b>Profibus-PA: </b>está especialmente diseñada para conseguir una comunicación fiable a alta
                    velocidad en ambientes expuestos a peligro de explosión.</li>
                <li><b>Profibus-FMS: </b>se utiliza para la comunicación a nivel célula, donde lo principal es el
                    volumen de información y no el tiempo de respuesta.</li>
            </ul>

            <p class="med blue">G. SERIAL ATACHED SCSI</p>
            <P class="paragraph">El Serial Attached SCSI (SAS) es una tecnología de transferencias de datos hacia
                dispositivos de almacenamiento (disco duro, unidades de CDROM, etc.), es el sucesor del protocolo SCSI,
                su velocidad aumenta y permite la conexión y desconexión de forma rápida. Una de sus características es
                que puede gestionar una tasa de transferencias, al aumentar la cantidad de dispositivos conectados, más
                rápido serán las transferencias.</P>
            <p class="paragraph">SAS cuenta con tres tipos de protocolos de comunicación que son:</p>
            <ul class="paragraph">
                <li><b>SSP (Serial SCSI Protocol), </b> que permite el transporte de comandos SCSI entre dispositivos
                    SCSI.</li>
                <li><b>STP (Serial ATA Tunneled Protocol), </b>que permite el transporte de comandos ATA hacia múltiples
                    dispositivos SATA.</li>
                <li><b>SMP (Serial Management Protocol), </b>que permite el transporte de las funciones de gestión del
                    dominio.</li>
            </ul>

            <p class="med blue">H. ETHERNETCAT</p>
            <p class="paragraph">Ethercat es un protocolo de código abierto para informática y tiene un alto rendimiento
                que pretende usar protocolos Ethernet en el ambiente Industrial y es uno de los protocolos más rápidos
                en la actualidad. Por ejemplo, con el método de transmisión de EtherCat, el paquete de Ethernet se
                recibe, después es copiado en el dispositivo, se interpreta y se procesa.</p>
            <p class="paragraph">Los medios de EtherCAT encajan bien para los ambientes industriales o de control puesto
                que puede ser accionado con o sin interruptores. EtherCAT es un estándar abierto que se ha publicado
                como especificación del IEC basada en entrada del grupo de la tecnología de EtherCAT.</p>
            <p class="paragraph">EtherCAT es especialmente adecuado para aplicaciones rápidas. Entre las aplicaciones
                características se incluyen máquinas de embalar, máquinas de fundición y centros de mecanizado CNC.</p>
            <p class="paragraph">Sus capacidades de sincronización y utilización completa del ancho de banda son muy
                atractivas para aplicaciones de movimiento donde se requiere la sincronización de un gran número de
                unidades. Ahorra gastos de instalación al eliminar tanto la topología de inicio de Ethernet como todos
                los conmutadores, enrutadores y concentradores. EtherCAT encaja en el espectro de capas de aplicaciones
                de Ethernet donde el rendimiento, la topología y el costo general de implementación son factores
                determinantes.</p>

            <p class="med blue">I. BACNET</p>
            <p class="paragraph">Es un protocolo de comunicación de datos que define los servicios utilizados para la
                comunicación de los dispositivos de automatización de los edificios y los sistemas de control.</p>
            <p class="paragraph">En los días de comienzo de BACnet, Ethernet no se usaba en la construcción y la
                aplicación industrial como lo es hoy en día. En ese momento, se usaban varias capas físicas / de enlace
                de datos en esas aplicaciones. Para satisfacer las necesidades del conjunto de aplicaciones más amplio
                posible, BACnet se diseñó para admitir varias capas físicas y de enlace diferentes, que incluyen:</p>
            <ul class="paragraph">
                <li><b>PTP (Punto a Punto) </b>- proporciona comunicación interconectadas en módems y líneas telefónicas
                    de voz.</li>
                <li><b>MS/TP (master slave / token passing) </b>- Es una LAN blindada de par trenzado, que opera las
                    velocidades</li>
                <li><b>ARCNET </b>- es un estándar de bus token, y los dispositivos generalmente lo soportan usando
                    chips de fuente única que manejan las comunicaciones de red.</li>
                <li><b>LONtalk </b>- es el único tipo de LAN, que se requiere de herramientas especiales y un conjunto
                    de chip patentando para implementar.</li>
            </ul>

            <p class="med blue text-center my-5">Conclusión</p>
            <p class="paragraph">Los protocolos de comunicación nos ayudan a establecer la comunicación entre los
                diferentes dispositivos ya sean para el fin de automatizar, de videojuegos, de controlar, etc. Y
                dependiendo de la necesidad de respuesta o de fabricación se emplean unos.</p>
            <p class="paragraph">Al conocer las diferentes ventajas de estos, los fabricantes pueden seleccionar con
                cual protocolo desarrollan algún dispositivo, teniendo en cuenta que la rapidez, la compatibilidad con
                la mayor cantidad de dispositivos que sean posibles, así como los software que existe en el mercado.</p>
            <p class="paragraph">Lo anterior puede dar un punto de decisión al consumidor para poder comprar un
                producto, ya que en la implementación existen protocolos que son más difíciles de entablar comunicación
                con otras interfaces.</p>

            <p class="paragraph blue my-5 text-center"><a class="link-orange"
                    href="https://www.logicbus.com.mx/pdf/articulos/Protocolos-de-Comunicaci%C3%B3n-Industrial.pdf"
                    target="_blank">Artículo Completo</a></p>
        </div>
    </section>
    <!-- PIE DE PAGINA -->
    <?php require ("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>