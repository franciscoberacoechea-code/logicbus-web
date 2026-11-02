<?php
require ("admin/config.php");
include ("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Protocolo de Comunicación Modbus - Logicbus S.A de C.V.</title>
    <meta name="description"
        content="(Desde que el hombre aparece en la tierra, los seres humanos hemos tenido la necesidad de comunicarnos entre nosotros, y con el medio que nos rodea; a veces incluso, la necesidad de registrarlo ...">
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta name="keywords"
        content="Modbus, Protocolo de comunicacion, Internet de las cosas, PLC, ModbusRTU, ModbusASCII, Cliente/Servidor, FBS-PLC, ADLINK, Modbus y los PLC, Importancia de Modbus, Maestro/Esclavo.">
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
                        <li class="breadcrumb-item"><a href="seccion-informativa"
                                class="blue link-orange">Artículos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Protocolo de Comunicación Modbus</li>
                    </ol>
                </nav>
                <div class="griditemContA">
                    <img class="img-fluid" src="https://www.logicbus.com.mx/imagenes/articulo/banner-modbus.png"
                        alt="Banner Protocolo de Comunicación Modbus">
                    <p class="paragraph text-justify mt-5">El presente artículo se expondrá de uno de los protocolos de
                        comunicación utilizado a nivel industrial, estamos hablando del protocolo Modbus. Se mencionará
                        como ha influenciado este protocolo en lo industrial, que posicionamiento se encuentra entre
                        todos los protocolos conocidos a nivel mundial, qué relación tiene este protocolo y que
                        porcentaje trae en los usos en los PLC's.</p><br>



                </div>
            </div>
        </div>
        <div class="container text-justify">

            <h2 class="subtitle blue text-center my-5">Introducción</h2>
            <p class="paragraph">Desde que el hombre aparece en la tierra, los seres humanos hemos tenido la necesidad
                de comunicarnos entre nosotros, y con el medio que nos rodea; a veces incluso, la necesidad de
                registrarlo.</p>
            <p class="paragraph">Y es aquí, donde nace la necesidad de regir y dar forma a lo que queremos decir,
                colocando reglas y estándares, esto con el propósito de no confundir la intención original con el que se
                trasmitió el mensaje.</p>
            <p class="paragraph">En la actualidad esa necesidad de información no ha cesado; al contrario, las personas
                necesitamos saber cada vez más y en menos tiempo posible lo que sucede a nuestro alrededor, para así
                poder ser más eficientes en la toma de nuestras decisiones.</p>
            <p class="paragraph">En la Industria vamos a encontrar una gran cantidad de protocolos de comunicación y
                tiene sentido si se entiende como comenzó todo, en sus inicios surgen los primeros PLC’s y evidentemente
                la necesidad de comunicarlos era imperante, se podrán imaginar que cada fabricante plantea la solución a
                su requerimiento de comunicación y crea su protocolo de comunicación.</p>
            <p class="paragraph">Uno de estos protocolos de comunicación que estaremos hablando en este artículo es el
                denominado Modbus, en este documento se explica la especificación Modbus de forma general, sin entrar en
                mucho detalle en algunas de sus particularidades, no obstante su contenido ha de ser más que suficiente
                para aquellos que deseen comprender el funcionamiento general de este estándar.</p>
            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/como-funciona modbus.png" class="img-fluid"
                    alt="protocolo Ethercat" title="protocolo Ethercat">
            </center>

            <h2 class="subtitle blue text-center my-5">Protocolos de comunicación más utilizados</h2>
            <p class="paragraph">Los protocolos de comunicación son la plataforma sobre la cual dos o más dispositivos
                se comunican en una red, sea esta de cualquier complejidad. Los instrumentos de medición, protección y
                control de una planta industrial se rigen bajo el mismo concepto: una serie de reglas y normas de las
                cuales se comunicarán, responderán y actuarán.</p>
            <p class="paragraph">En el área de las comunicaciones en el entorno industria, la estandarización de
                protocolos es un tema en permanente discusión, donde intervienen los problemas no solo lo técnico sino
                también en lo comercial. Cada uno de estos protocolos de comunicación están optimizados para diferentes
                niveles de automatización y en consecuencia responden al interés de diferentes proveedores.</p>
            <p class="paragraph">En la actualidad, existen diversos protocolos que son los más utilizados en las
                industrias, que han favorecido y conlleva una mayor presencia en el área de control y automatización que
                son: hart, Profibus, Fieldbus, Devicenet y Modbus.</p>

            <h2 class="med blue pl-5">A. MODBUS</h2>
            <p class="paragraph">Modbus es un protocolo que se encuentra ubicado en el nivel 7 del modelo OSI
                (Interconexión de sistema abierto), basado en la arquitectura cliente/servidor, en el que el servidor
                cada vez que envía una solicitud es tratada de una forma independiente por el cliente. Esto le facilita
                a proveer transacciones de datos resistentes a rupturas, requiriendo la mínima información de
                recuperación para poder mantener una de las transacciones de manera firme en cualquiera de las dos
                terminales.</p>
            <p class="paragraph">Modbus especifica el procedimiento que el controlador y el cliente utilizan para
                intercambiar datos, el formato de estos datos, y como se tratan los errores. No especifica estrictamente
                el tipo de red de comunicaciones a utilizar, por lo que se puede implementar sobre redes basadas en
                Ethernet, RS-485, RS-232 etc.</p>
            <p class="paragraph">Dentro del protocolo, Modbus cuenta con los modos de transmisión, donde definen como se
                envía el paquete de datos entre Cliente/Servidor, y a continuación son definidos de la siguiente manera:
            </p>

            <h2 class="med blue pl-5">B. Modbus ASCII</h2>
            <p class="paragraph">Este protocolo es parte de la familia Modbus que opera en la capa de red en serie. Con
                la ayuda de un cliente, podemos configurar y recuperar los datos ASCII de Modbus desde su dispositivo y
                ponerlos a disposición de otros dispositivos, o podemos emular un Servidor Modbus y enviar datos a su
                dispositivo Modbus desde otros dispositivos que no sean Modbus.</p>
            <p class="paragraph">Estos protocolos son utilizados en una gran variedad de equipos, llegando a
                estandarizarse el manejo del mismo en el ambito industrial. El uso ya sea de Modbus RTU o Modbus ASCII
                depende principalmente en función de la r1obustez, capacidad, caracteristicas de los equipos
                involucrados, etc.</p>

            <h2 class="subtitle blue text-center my-5">MODBUS y los PLC's</h2>
            <p class="paragraph">El PLC es un dispositivo que fue creado por un propósito, que es remplazar los
                circuitos secuenciales relevadores para el control de la maquinaria. Su funcionamiento básico consiste
                en que sus salidas estarán en On/Off dependiendo de los estados de su entrada, el usuario debe
                introducir un programa, usualmente via software para obtener los resultado deseados.</p>
            <p class="paragraph">El protocolo Modbus es superior a otros protocolos de comunicación en el uso de los
                PLC's, ya que fue diseñado en el año de 1979 por "Modicon" con el fin de controlar sus gamas de
                controladores lógico programables, tal como se le conoce como PLC.</p>
            <p class="paragraph">Dentro del ambiente de la automatización, la empresa Logicbus cuenta con PLC's que son
                compatibles con el protocolo de comunicación Modbus, dentro de estos PLC'S se puede destacar:</p>

            <h2 class="med blue pl-5">A. Serie FB's</h2>
            <p class="paragraph">La serie FBs de PLCs tiene más de 300 instrucciones las cuales adoptan una estructura
                de función de multi-salida y multi-entrada amigable para el usuario y de lectura fácil. Con su
                estructura de funciones multi-salida el usuario puede derivar muchos tipos de funcionabilidad, las
                cuales, otros tipos de PLC requieren el uso de muchas instrucciones para lograr esto.</p>
            <p class="paragraph">Las unidades básicas de PLC Serie FBs están diseñadas para realizar trabajos básicos de
                la industria. Son PLC compactos y económicos, para efectivizar el espacio, realizar proyectos con mejor
                rentabilidad y todo eso sin perder calidad.</p>
            <p class="paragraph">El FBs-PLC es el único PLC de esta clase que proporciona temporizadores de alta
                velocidad de 0.1 ms, cuenta con 16 bits y 4 conjuntos de HST de 32 bits. Actualmente, es la base de
                tiempo más rápida de los temporizadores de alta velocidad utilizados en otras marcas de PLC es de 1 ms.
                Al incorporar la función de interrupción del FBs-PLC, la precisión de 0.1mS el temporizador de alta
                velocidad basado en el tiempo de FBs-PLC se mejora aún más y puede fácilmente lograr una detección de
                velocidad más precisa o puede usarse como un medidor de frecuencia. En la mayoría de los casos, el
                costoso equipo de detección de velocidad puede ser reemplazado por FBs-PLC económico.</p>
            <p class="paragraph">El protocolo de comunicación abierto del FBsPLC es compatible con todas las principales
                marcas de software de supervisión (Scada) y terminales de operador (HMI) y proporciona 16 puntos de
                interrupciones externas. La interrupción es borde impulsado y el usuario puede definir qué borde
                desencadena la interrupción y puede ser positivo, negativo o ambos bordes.</p>

            <h2 class="subtitle blue text-center my-5">IMPORTANCIA DEL PROTOCOLO MODBUS EN IOT</h2>
            <p class="paragraph">El protocolo de Modbus se usa para transmitir información a través de líneas seriales
                entre dispositivos electrónicos. El dispositivo que solicita información se denomina "maestro" y los
                "esclavos" son los dispositivos que suministran información. En una red Modbus estándar, hay un maestro
                y hasta 247 esclavos, cada uno con una dirección de esclavo única del 1 al 247</p>
            <p class="paragraph">La comunicación entre un maestro y un esclavo ocurre en un marco que indica un código
                de función. El código de función identifica la acción a realizar, como leer una entrada discreta; leer
                una cola de primero en entrar, primero en salir; o realice una función de diagnóstico. El esclavo
                responde, en función del código de función recibido, con una respuesta indicada por un conjunto de
                bytes. Los esclavos pueden, por lo tanto, ser dispositivos inteligentes o simples dispositivos que
                representan un solo sensor.</p>
            <p class="paragraph">Debido a esta operación, los sistemas basados en el protocolo de Modbus son partes
                críticas de la "Internet de las cosas" industriales para la automatización y el control, que contienen
                información valiosa que puede ser desbloqueada y utilizada por los sistemas de análisis y de empresa.
            </p>
            <p class="paragraph">El protocolo de comunicación se usa comúnmente en IoT como una interfaz local para
                administrar dispositivos. Es un protocolo abierto en el que los fabricantes pueden construir sus equipos
                de forma gratuita, y ahora es el medio más común de conectar dispositivos electrónicos industriales.</p>
            <p class="paragraph">Dado que Modbus es un protocolo de comunicación predominante orientado a la industria,
                su rol en el área de IoT (Internet of Things) es inevitable y prevalece significativamente en el área de
                IIoT (Industrial IoT / Industry 4.0). Los sistemas basados en el protocolo Modbus juegan un papel
                importante en la conectividad de internet para las industrias de automatización y control.
                Posteriormente en estas industrias, los protocolos Modbus se utilizan principalmente para la interfaz de
                sistemas SCADA o BMS.</p>
            <p class="paragraph">Un protocolo Modbus habilitado IoT o literalmente un 'Thing'; Modbus está conectado a
                un dispositivo a través de una plataforma IoT (básicamente una puerta de enlace IIoT) que controla
                numerosos dispositivos de comunicación Modbus, estableciendo una conexión de canal dúplex seguro a
                través de Internet. Este tipo de conexión dúplex segura a través del protocolo de comunicación Modbus
                ayuda a superar la necesidad de utilizar VPN, firewalls y otras redes complejas. Además, el impacto del
                protocolo Modbus en la industria de IIoT ha aumentado considerablemente el rendimiento, la robustez, la
                eficiencia y la conectividad de las organizaciones industriales, reduciendo así los esfuerzos de costos
                y tiempos y aumentando la productividad general para la industria manufacturera.</p>

            <h2 class="subtitle blue text-center my-5">Conclusión</h2>
            <p class="paragraph">Modbus lleva mucho tiempo desde su creación y ha sufrido una evolución evidente hasta
                tener una versión basada en Ethernet, es tan popular en el ambiente industrial que no creo que pierda su
                posición dominante en un futuro.</p>
            <p class="paragraph">Es un Protocolo abierto con el cual se pueden obtener competencias genéricas acerca del
                funcionamiento de las redes industriales y lo considero un camino obligado de transitar, para entender
                el mágico mundo de las comunicaciones propias de equipos de industria</p>
            <p class="paragraph">Las principales razones por el uso de Modbus es que se trata de un protocolo de
                comunicación público y gratuito, es fácil de implementar, requiere poco desarrollo y maneja bloques de
                datos sin restricciones.</p>
            <p class="paragraph">Modbus es un protocolo de aplicación, lo que significa que puede implementarse sobre
                diferentes capas físicas. Es por ello que podemos encontrar versiones TCP/IP, o también serie como RTU y
                ASCII. Por lo tanto, podremos usar Modbus tanto con cables de red como con cables serie, siempre que los
                dispositivos con los que interactuemos estén preparados para ello.</p>

            <p class="paragraph text-center blue"><a class="link-orange"
                    href="https://www.logicbus.com.mx/pdf/articulos/Modbus.pdf" target="_blank"
                    title="Protocolo de Comunicación Modbus" alt="Protocolo de Comunicación Modbus">Leer Artículo
                    Completo</a></p>

        </div>
    </div>

    <!-- PIE DE PAGINA -->
    <?php require ("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>