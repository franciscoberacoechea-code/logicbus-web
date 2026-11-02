<?php
require ("admin/config.php");
include ("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Protocolo de Comunicación Profinet - Logicbus S.A de C.V.</title>
    <meta name="description"
        content="(La influencia de las tecnologías de la información en el caso del ambiente industrial a través de la tecnología digital para el intercambio de datos, tuvieron la necesidad de realizar conexiones ...">
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta name="keywords"
        content="Profinet, Protocolo Profinet, Ethernet, Protocolos de comunicacion, PLC, profine RT, Profine IRT, Profinet i/o, seguridad Profinet, IoT, IIoT, lOGICBUS, TI, Profinet Series, PNF-2019, ICPDAS.">
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
                        <li class="breadcrumb-item active" aria-current="page">Protocolo de Comunicación Profinet</li>
                    </ol>
                </nav>
                <div class="griditemContA">
                    <img class="img-fluid"
                        src="https://www.logicbus.com.mx/imagenes/articulo/banner-protocolo-profinet.png"
                        alt="Protocolo de Comunicación Profinet" title="Protocolo de Comunicación Profinet">
                    <p class="mt-4 paragraph text-justify"><b>Resumen:</b> El presente artículo se expondrá de uno de
                        los
                        protocolos de comunicación conocidos y utilizados actualmente, Profinet, se mencionará como ha
                        surgido dentro del Internet Industrial de las cosas (IIoT), comunicaciones Profinet que lo
                        conforman, que tanto ha avanzado en estos últimos años en las industrias, sobre su seguridad y
                        recomendaciones para no ser un protocolo vulnerable y que productos existen en la empresa
                        Logicbus relación a este protocolo.</p>
                    <center><img src="https://www.logicbus.com.mx/imagenes/articulo/profinet.jpg"
                            class="image_productos" width="60%" alt="Protocolo Profinet" title="Protocolo Profinet">
                    </center>
                </div>
            </div>
        </div>
        <div class="container paragraph text-justify">
            <h2 class="subtitle blue text-center">Introducción</h2>
            <p>La influencia de las tecnologías de la información en el caso del ambiente industrial a través de la
                tecnología digital para el intercambio de datos, tuvieron la necesidad de realizar conexiones por redes
                mediante conectores, de allí en adelante han sido varias tecnologías de redes industriales que han ido
                surgiendo basado en comunicación serial. A raíz del desarrollo de los PLC’s cuando la compañía Modicon
                desarrolló Modbus y se produjo un repunte en lo referente a los buses de campo convirtiéndose en un
                pilar de la automatización ya que ha permitido reducir cableado de entrada y salida.</p>
            <p>Muchos de los protocolos patentados para las aplicaciones industriales tienen un límite y es que el
                fabricante no permite al usuario final intercambiar los instrumentos de un fabricante por otro similar.
                Es claro que estas tecnologías cerradas tienden a desaparecer, ya que actualmente es necesario el
                intercambio de sistemas y aparatos y así tener la capacidad de mejorar sistemas abiertos y
                estandarizados. Con la mejora de los protocolos de comunicación es ahora posible reducir el tiempo
                necesario para la transferencia de datos, asegurando la comunicación, garantizando el tiempo de
                sincronización y el tiempo real de respuesta en algunas aplicaciones, es así como Profinet fue
                comercializado por primera vez, este bus no es solamente un bus para Ethernet si no que utiliza un mayor
                ancho de banda en la red, con un modelo cliente/servidor, alta velocidad de transmisión, tiempo real,
                alta seguridad, mayor cantidad de datos, con posibilidad de comunicación inalámbrica, control de
                movimiento y gran flexibilidad para integrar los productos y dispositivos existentes, es por esta razón
                que muchas empresas en la actualidad están empleando red industrial y muchas otras están migrando a este
                sistema de comunicación.</p>
            <p>La automatización industrial ha tenido un desarrollo decisivo gracias a Profinet, trabaja sobre las bases
                de Ethernet y en comparación es claramente más rápida que otros protocolos. Profinet garantiza libertad
                para la instalación y también cableado simplificado y configuración central. Todo ello supone un ahorro
                de tiempo y en el costo, de modo que simplemente con la tecnología de conexión es posible mejorar la
                calidad del proceso.</p>
            <h2 class="subtitle blue text-center">Profinet</h2>
            <p>El protocolo de comunicación Profinet ha sido descrito como el “Industrial Ethernet Integral” ya que se
                puede utilizar para prácticamente cualquier función requerida en la automatización: discreta, proceso,
                movimiento, integración punto a punto, integración vertical, seguridad y más. Debido a que Profinet se
                basa en el protocolo Profibus y en Ethernet IP utilizando el estándar IEEE802.3, funciona perfectamente
                a través de medios inalámbrico.</p>
            <p>Profinet no es solo un sistema de comunicación óptico para la automatización basada en Ethernet
                industrial, es una estándar comprensivo que llena todas las demandas para el uso de Ethernet en la
                automatización industrial, cubriendo la comunicación en el nivel de control, automatización estándar,
                hasta poderosas aplicaciones de control de movimiento. De ahí que Profinet es adecuado para todas las
                aplicaciones de automatización. El desarrollo de Profinet continua hasta ahora en la actualidad, se
                trabaja en el progreso de definiciones de temas de seguridad, operaciones de mantenimiento. Con respecto
                al proceso de automatización, existen grupos de trabajo conformados por ingenieros de muchas empresas
                que siguen avanzando en la tecnología Profinet. Profinet cuenta también con un certificado del producto
                casi desde sus inicios, esto es una medida que garantiza una alta calidad de estándar para los productos
                Profinet pues certifica que haya calidad en el desarrollo tecnológico.</p>
            <p>Los sistemas Profinet están diseñados para permitir una configuración rápida y sencilla. Permite crear
                nuevas especificaciones diseñadas por el fabricante para expansiones. Esto es así porque Profinet
                diferencia entre la fase de programación de la lógica y la configuración general para la aplicación.</p>
            <p>El modelo de comunicación Profinet define un proveedor estándar independiente para la comunicación en
                redes Ethernet convencionales de TI. Se utiliza el protocolo TCP/IP y COM/DCOM, los estándares más
                comunes del mundo, proporciona acceso directo desde la oficina hasta el nivel de automatización y
                viceversa. Existe un mecanismo de comunicación optimizado disponible para áreas de aplicación con duros
                requisitos de tiempo real, Los dispositivos que funcionan en ETHERNET requiere la implementación de
                mecanismo de comunicación de acuerdo con el estándar Profinet.</p>
            <p>Este nuevo concepto permite disponer de una tecnología común: Ethernet TCP/IP. Esto hace posible aplicar
                soluciones y desarrollos orientados hasta ahora sólo al mundo informático. A modo de ejemplo,
                tecnologías como el acceso inalámbrico y el diagnóstico web pueden implementarse como solución para la
                transmisión remota. Así mismo, también se puede acceder a drives o dispositivos inteligentes como HMI’s
                u otros PLC’s y realizar diagnóstico de estaciones en aplicaciones web u otras aplicaciones comunes;
                todo esto siempre garantizando la transmisión confiable y los estándares de seguridad originales</p>
            <h2 class="subtitle blue text-center">Comunicación de Profinet</h2>
            <p>PROFINET responde a todas las necesidades de tiempo real impuestas en las tareas de automatización,
                incluso las de tipo isócrono. PROFINET también resulta ideal para las aplicaciones especialmente
                complejas, como las aplicaciones de control de movimiento. La comunicación Profinet puede ser vista en
                dos pasos importantes:</p>
            <p class="med">A. Tiempo real (RT)</p>
            <p>La funcionalidad de tiempo real se utiliza para datos de proceso donde el tiempo resulta crítico, es
                decir, con datos útiles cíclicos o alarmas (interrupciones) controladas por eventos. PROFINET utiliza un
                canal de comunicaciones en tiempo real optimizado para las necesidades de tiempo real de los procesos de
                automatización. Así se minimizan los tiempos de ejecución y se aumenta el rendimiento a la hora de
                actualizar los datos de proceso.</p>
            <p>Las prestaciones son comparables a las de los buses de campo, permitiendo unos tiempos de reacción de
                entre 1 y 10 ms. Al mismo tiempo se reduce considerablemente la potencia de procesador necesaria en el
                dispositivo para la comunicación. En esta solución es posible utilizar componentes de red estándar.</p>
            <p>Las capas TCP/IP no son utilizadas para dar un rendimiento determinista a las aplicaciones de
                automatización, funcionando con unos tiempos de retardo en el rango 1-10ms. Este hecho representa una
                solución basada en software adecuada para aplicaciones típicas de E/S, incluyendo control de movimiento
                y requisitos de alto rendimiento.</p>
            <p class="med">B. Tiempo real isócrono(IRT)</p>
            <p>Para aplicaciones especialmente exigentes, como las de control de movimiento, se dispone de Isochronous
                Real-Time (Tiempo Real IsócronoIRT). Con IRT se consigue un tiempo de ciclo de menos de 1 ms con una
                fluctuación de menos de 1 µs. Así, el ciclo de comunicación se divide en una parte determinista y otra
                abierta. En el canal determinista se transportan los telegramas IRT cíclicos, mientras que en el canal
                abierto lo hacen los telegramas TCP/IP y RT. Así, ambos tipos de transferencia resultan independientes,
                sin que uno afecte al otro. Por ejemplo, es posible acceder a los datos del dispositivo con un ordenador
                portátil desde cualquier punto de la instalación, sin que esto afecte a la regulación isócrona.</p>
            <p>Un ejemplo de una aplicación es el ASIC ERTEC (controlador Ethernet de tiempo real mejorado) soporta
                estos dos tipos de tiempo real y constituye la tecnología de base para las soluciones de sistema
                integradas con PROFINET. El ASIC ERTEC se integra en terminales y componentes de red.</p>
            <p class="med">C. Profinet I/O</p>
            <p>PROFINET I / O es un estándar industrial basado en Ethernet desarrollado por PROFIBUS Internacional para
                la creación de sistemas de automatización integrados y compactos. La tecnología PROFINET es aplicable en
                dos áreas. El primero, PROFINET I/O, cubre el dominio de los dispositivos de campo, la segunda solución
                se llama PROFINET CBA (Component Based Automation) y muestra sus fortalezas en la comunicación entre
                controladores (PLC).</p>
            <p>Usa una tecnología de conmutador que permite que todas las estaciones puedan tener el acceso a la red en
                cualquier momento, puede realizar varias comunicaciones simultáneamente desde diferentes puntos de
                partida de la red gracias al modo dúplex que se puede manejar desde los swicht, de esta manera se logra
                un uso efectivo en la red con una velocidad muy elevada.</p>
            <h2 class="subtitle blue text-center">Seguridad en Profinet</h2>
            <p>La accesibilidad proporcionada por PROFINET lo hace un protocolo muy expuesto a Internet, por lo que es
                necesario mejorar la ciberseguridad de las redes en las que se despliega.</p>
            <p>Los Equipos Profinet carecen de funciones de seguridad nativas, entendiéndolo como seguridad del punto
                final, por lo que la prevención de ataque a equipos Profinet es la clave. Las medidas incorporadas por
                el protocolo se centran en mejorar la disponibilidad del sistema y la fiabilidad, así como la robustez
                de los equipos ante alto volúmenes de tráficos puntuales. En el documento “PROFINET SECURYTY GUIDELINE”
                se realizan recomendaciones para prevenir los posibles ataques a estos sistemas, donde se incluyen
                recomendaciones del mundo IT, como la segmentación de las redes mediante VLAN o el establecimiento de
                DMZ.</p>
            <p>Al igual que con otros protocolos creados originalmente para comunicación a través de Fieldbus la
                ausencia de autenticación y la falta de seguridad del protocolo, existe el aislamiento del resto de la
                red. Adicionalmente, el uso del método IT para autenticar los componentes de la red, junto con el
                cifrado de las comunicaciones de la misma es una buena práctica. La seguridad perimetral debería ser muy
                estricta para evitar cualquier tráfico no autorizado o sospechoso.</p>
            <h2 class="subtitle blue text-center">Profinet dentro del mundo IOT</h2>
            <p>El Internet de las Cosas es la red de objetos físicos (dispositivos, vehículos, edificios y otros
                elementos integrados con componentes electrónicos, software, sensores y conectividad de red) que permite
                que estos objetos recopilen e intercambien datos. El IoT permite que los objetos sean detectados y
                controlados remotamente a través de la infraestructura de red existente, creando oportunidades para una
                integración más directa del mundo físico en los sistemas basados en computadora, y resultando en una
                mejor eficiencia, precisión y beneficio económico. Cuando IoT se amplía con sensores y actuadores, la
                tecnología se convierte en una instancia de la clase más general de sistemas ciberfísicos que también
                abarca tecnologías tales como redes inteligentes, hogares inteligentes, transporte inteligente, y
                ciudades inteligentes. Cada cosa es identificable de forma única a través de su sistema informático
                integrado, pero es capaz de interpretar dentro de la infraestructura de Internet existente.</p>
            <p>El estándar para redes industriales en automatización, PROFINET, es fundamental para proporcionar acceso
                a datos, tiempo de actividad y apertura para satisfacer las necesidades del IIoT. Conecta dispositivos,
                sistemas y células, lo que facilita una fabricación más rápida, segura, menos costosa y de mayor
                calidad. Integra fácilmente los sistemas y equipos existentes al mismo tiempo que lleva la rica
                funcionalidad de Ethernet al piso de la fábrica.</p>
            <p>PROFINET ha evolucionado a lo largo de los años a un estado estable para el protocolo de comunicación,
                mientras que el trabajo continúa en los perfiles de aplicación, los "objetos" que organizan los datos de
                forma coherente. Asegura que los datos se entreguen en los intervalos necesarios al tiempo que indican
                su calidad. Las arquitecturas industriales que utilizan PROFINET están estructuradas para garantizar que
                la topología no cambie inesperadamente.</p>
            <h2 class="subtitle blue text-center">Productos relacionados con el protocolo Profinet</h2>
            <p>PROFINET se basa en estándares de TI acreditados y ofrece funcionalidad de TCP/IP completa para la
                transferencia de datos en toda la empresa y a todos los niveles. Además, los usuarios gozan de las
                ventajas de los diagnósticos integrados y las comunicaciones de seguridad positiva, que ofrecen una
                disponibilidad del sistema óptima, que abarca desde los conceptos de máquinas modulares para conseguir
                la máxima flexibilidad hasta las velocidades de transferencia más rápidas y aplicaciones WLAN. En su
                conjunto, estas capacidades le ofrecen un rendimiento considerablemente superior.</p>
            <p>Logicbus cuenta con productos de la marca ICP DAS que son útiles dentro de la automatización, un buen
                rendimiento en tiempo real y tiene una buena estabilidad para la comunicación, entre los cuales hablemos
                de uno de los productos utilizados:</p>
            <p class="med">A. Profinet series - PFN-2019</p>
            <p>El PFN-2019 proviene de la familia de series Profinet. Esta serie permite la integración de sistemas de
                bus de campo existentes como PROFIBUS DP, PROFIBUS PA, AS-Interface, INTERBUS y DeviceNet sin cambios en
                los dispositivos de campo existentes. Significa que las inversiones de dispositivos de campo y
                aplicaciones están todas protegidas. Proporciona el Protocolo de comunicación PROFINET IO con cualquier
                controlador PROFINET IO. Tiene 10 canales de entrada analógica universal con tipos de entrada de tensión
                y corriente. Proporciona una precisión extrema medición de termopar y compensación automática de la
                unión fría para cada canal. Su resolución de este producto es de 16 bits y su frecuencia de muestreo es
                de 10 Hz, también proporciona la función de búsqueda del dispositivo para poder acceder. Al aplicar este
                producto, los usuarios pueden acceder y configurar fácilmente una red PROFINET con otros controladores
                PROFINET IO.</p>
            <h2 class="subtitle blue text-center">Conclusiónes</h2>
            <p>Podemos determinar que la red Profinet es de gran importancia actualmente en la industria debido a que es
                una solución de automatización distribuida, además de que nos ofrece una amplia gama de aplicaciones, un
                manejo fácil y una instalación Sencilla, además de las grandes ventajas en cuanto al mantenimiento y al
                cambio de equipos dañados, sin necesidad de realizar paros innecesarios durante la operación de trabajo.
            </p>
            <p>PROFINET nos permite conectar equipos desde el nivel del campo (Plcs y otros dispositivos) hasta el nivel
                de gestión (sistemas informáticos e internet). Profinet integra los sistemas actuales de profibus sin
                ninguna modificación.</p>
            <p>Con una explicación sencilla del concepto que involucra PROFINET, se refiere a la modernización de las
                redes de campo que incluyen PLCs y los sistemas de comunicación entre estos dispositivos a la Red
                Ethernet pero aportando un alto rendimiento en la respuestas y seguridad requeridas en las instalaciones
                industriales.</p>
            <p class="blue text-center"><a class="link-orange" href="pdf/articulos/Profinet.pdf" target="_blank"
                    title="Protocolo de Comunicacion Ethercat" alt="Protocolo de Comunicacion Ethercat">Leer Artículo
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