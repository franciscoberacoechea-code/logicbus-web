<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
require ("admin/config.php");
include ("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Protocolo de Comunicación EtherCat - Logicbus S.A de C.V.</title>
    <meta name="description"
        content="(A lo largo de los años ha existido la necesidad de un bus de control digital abierto de bajo costo para automatización y control de movimiento ...">
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta name="keywords"
        content="EtherCat, IEEE 802.33, Protocolos, Ethernet, PLC, Protocolo EtherCat, ICP DAS, UEI, SERIE ECAT, SERIE DNA-ECAT, Profibus, Modbus, Industrias 4.0, Internet de las cosas, IoT, Profinet, automatización, sistema Ethernet, tecnología Ethercat, aplicaciones, IP, Seguridad EtherCat.">
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
                        <li class="breadcrumb-item active" aria-current="page">Protocolo de Comunicación EtherCat</li>
                    </ol>
                </nav>
                <div class="griditemContA">
                    <img src="https://www.logicbus.com.mx/imagenes/articulo/banner-protocolo-ethercat.png"
                        class="img-fluid" alt="Protocolo de Comunicación EtherCat"
                        title="Protocolo de Comunicación EtherCat">
                    <p class="paragraph mt-4 text-justify"><b>Resumen:</b> En este artículo nos enfocaremos a uno de los
                        protocolos de comunicación, el protocolo EtherCat, hablaremos de su definición y porqué es más
                        utilizado en Europa, abordando las ventajas que ofrece en el ámbito industrial, se explicara los
                        casos de éxitos que ha favorecido utilizando EtherCat, y que productos ofrece la empresa
                        Logicbus en donde se puede utilizar este tipo de protocolo.</p>
                </div>
            </div>
        </div>
        <div class="container text-justify paragraph">
            <h2 class="subtitle blue text-center my-5">Introducción</h2>
            <p>A lo largo de los años ha existido la necesidad de un bus de control digital abierto de bajo costo para
                automatización y control de movimiento. Algunos estaban disponibles pero tenían tecnología propia. Con
                la introducción de EtherCAT, se ha convertido en el estándar abierto aceptado para los buses de control
                basados en Ethernet.</p>
            <p>EtherCAT es actualmente una tecnología líder en el mercado en el dominio de transmisión de datos atreves
                de Ethernet en tiempo real utilizando diferentes combinación en el armado del cableado. La empresa
                iniciadora y desarrolladora es Beckhoff, que se ha convertido en un importante proveedor de equipo
                avanzado para la automatización industrial.</p>
            <p>El movimiento hacia Ethernet como la comunicación básica en plataforma se basa en la excelente relación
                precio/ rendimiento/ tecnología. Sin embargo, hay áreas en donde el rendimiento es la prioridad,
                implementando el protocolo de Ethernet aumento del hardware o desarrollando aplicaciones. Dentro de
                estos dispositivos podremos mencionar los componentes usados en la robótica, sistemas PLC de alto
                rendimiento, motores para sistemas de control e instrumentación y sistemas de E/S. El común denominador
                a todos estos equipos es la comunicación en tiempo real, latencia baja, rendimiento extremo, por lo
                anterior EtherCat se desarrolló para dar el servicio y solucionar el requerimiento que presentan estos
                equipos.</p>
            <h2 class="subtitle blue text-center my-5">EtherCAT</h2>
            <p>En la actualidad se usan distintos sistemas basados en el estándar Ethernet, bien conocido en las
                comunicaciones de oficina. Sin embargo a menudos los resultados no fueron eficientes, ya que no se hace
                uso de una gran parte del ancho de banda disponible.</p>
            <p>Con la idea de solventar estos problemas, se llevó a cabo un estudio donde se pueda desarrollar un
                sistema de bus de campo, será capaz de trabajar en tiempo real y que se hiciera un buen uso del ancho de
                banda en los protocolos estándares, y los resultados fueron positivos y apareció el protocolo EtherCat
            </p>
            <p>El protocolo EtherCat es un protocolo de código abierto informático y tiene un alto rendimiento en el
                uso, que pretende utilizar protocolos de Ethernet en el entorno industrial. En sus principios
                funcionales, cuando EtherCat estaba en ejecución, hacía que el sistema en el que estaba operando fuese
                más rápido y eficiente, con el tiempo este sistema se ha convertido en un estándar abierto y se ha
                publicado como especificación del IEC (Comisión Electrotécnica Internacional) basada en la entrada del
                grupo de la tecnología de EtherCat.</p>
            <p>El funcionamiento de EtherCat se basa en transportar datos directamente dentro de la trama Ethernet sin
                que se modifique su estructura básica, cuando el controlador Cliente/Servidor están en la misma subred,
                simplemente EtherCat remplaza el protocolo de Internet IP en la trama Ethernet.</p>
            <p>La tecnología EtherCat es sumamente compatible con el protocolo Ethernet, es abierta, con un alto
                rendimiento y es muy fácil de implementar, sus capacidades de sincronización y la utilización plena de
                ancho de banda son muy atractivas en el uso de sincronización de aplicaciones en donde hay un buen
                número de unidades en movimiento.</p>
            <p>Un ejemplo que podemos considerar con el EtherCat, es que se puede manejar otros protocolos en la misma
                red física, en este caso un switch está trabajando como un dispositivo de dos capas, que encamina las
                tramas participantes en función de la información de su dirección. De esta manera, las diversas
                tecnologías de internet, EtherCat también puede ser aplicados entornos como: Servidores Web Integrados,
                Correos Electrónicos, Transferencia de datos FTP, etc.</p>
            <p>Dentro de la seguridad, al ser EtherCat un protocolo derivado al Ethernet es apto a cualquiera de las
                vulnerabilidades de Ethernet, por lo tanto Vulnerable a cualquier ataque de denegación de servicio.
                Dentro del servicio de EtherCat puede alterar fácilmente mediante una inserción de paquetes Ethernet a
                la red de forma que interfiera con la sincronización y es vulnerable a falsificaciones, debido a la
                falta de autenticación, por lo que es recomendado separar la red EtherCat del Resto del sistema
                Ethernet.</p>
            <h2 class="subtitle blue text-center my-5">Ventajas del protocolo Ethernet</h2>
            <ul>
                <li>Una de las ventajas dentro del Protocolo EtherCat es compatible con cualquier topología, por lo cual
                    resulta apto para una variedad de aplicaciones con topología de estrella Ethernet basado en
                    conmutadores estándar. Con esto EtherCat se convierte en un sistema muy flexible, en lo que respecta
                    al cableado, y permite su uso fácilmente distintos cables, de esta manera, resulta sencillo utilizar
                    el ancho de banda completo en una red Ethernet combinando con conmutadores o convertidores de
                    medios.</li>
                <li>Otra ventaja de Ethernet es que permite la combinación de protocolos sobre un único cable. Aunque el
                    protocolo más común para funcionar en IP de Ethernet, otros protocolos pueden utilizar Ethernet.
                    Ethernet permite múltiples conexiones de alta velocidad entre ordenadores.</li>
                <li>La mayor ventaja de Ethernet es que tiene la capacidad de funcionar a alta velocidad a bajo costo.
                    Ethernet se ha convertido en un estándar universal para que el costo de las interfaces se ha
                    reducido hasta el punto en que se incluyen en cada equipo en la construcción. Velocidad de hasta 1
                    gigabit por segundo son estándar en la mayoría de los PCs y el trabajo continúa para hacer 10
                    Gigabit y Terabit Ethernet 100 Gigabit disponibles a bajo costo. Dado que Ethernet es abundan las
                    opciones de una norma universal, fabricante y del producto.</li>
            </ul>
            <h2 class="subtitle blue text-center my-5">Productos relacionados con EtherCAT</h2>
            <p>Dentro del mundo industrial, hay variedad de prototipos que son útiles en caso de adquisición de datos,
                la empresa Logicbus cuenta con productos de la marca ICP DAS y UEI (United Electronic Industries) que
                son compatibles para el uso de conexión del Ethernet, ha sido favorable en su uso y son sencillas de
                usar, en su configuración y son implementados, en diversas aplicaciones de una manera fácil.</p>
            <p class="med">A. ICP DAS - Serie ECAT-2000</p>
            <p>El ECAT-2000 está equipado con el protocolo EtherCat e instalado mediante una conexión en cadena que
                permite la flexibilidad en la instalación de los dispositivos y reduce los costos de infraestructura y
                operación. Todos los módulos se pueden implementar en las topologías de red, como estrella, línea o
                anillo. El diseño de entrada y salida de aislamiento protege al ECAT-2000 contra la interferencia
                perjudicial y el medio ambiente.</p>
            <p>Dentro de esta serie se encuentra este producto ECAT-2045 es un módulo de entrada y salida, este producto
                está equipado con EtherCat, se instala mediante una conexión de cadena tipo margarita que proporciona un
                sistema más escalable con menos cables. Los usuarios pueden obtener el estado de entrada y salida no
                solo a través de los procesos de datos sino también a través de sus indicadores LED. El ECAT-2045 ha
                pasado y fue verificado por una herramienta de prueba de conformidad, por lo tanto, el maestro o
                configurador de EtherCat elegible puede ser manipulado de forma sencilla y se puede implementar sus
                diversas aplicaciones fácilmente.</p>
            <p class="med">B. UEI - Serie DNA-ECAT</p>
            <p>La serie DNA-ECAT de entrada y salida se basa en los populares cubos de la serie DNA de UEI, pero incluye
                un nuevo módulo de CPU específicamente diseñado para funcionar como un esclavo EtherCAT. El DNA-ECAT
                ofrece toda la flexibilidad de E/S de los cubos de ADN, incluida la compatibilidad con más de 60
                tarjetas de E/S diferentes y también proporciona el cumplimiento de EtherCAT completo. Los
                desarrolladores de EtherCAT ahora pueden aprovechar la potencia y la flexibilidad del cubo. El cubo
                EtherCAT es ideal para una amplia variedad de aplicaciones de adquisición y control de datos
                industriales y aeroespaciales. En general, Ethernet no es ideal para monitoreo y respuesta de control en
                tiempo real, aunque hay varias maneras de hacerlo en tiempo real. EtherCAT es una implementación
                especial de Ethernet diseñada para admitir aplicaciones en tiempo real.</p>
            <p>El módulo de CPU ocupa la parte superior del cubo y proporciona la CPU, el controlador de interfaz de red
                Ethernet (NIC), las luces indicadoras, la interfaz de sincronización / disparo, los puertos de
                configuración y la fuente de alimentación interna. Es el cerebro del Cubo y controla las operaciones de
                la unidad, incluida la interfaz con el Controlador de host (y otros Cubos), así como la supervisión de
                la actividad de las placas de E / S. El módulo de la CPU también incluye interruptores giratorios que
                configuran la dirección del dispositivo EtherCAT del cubo. Si el interruptor está configurado en la
                dirección 0, la dirección de la unidad es programada por cualquier maestro EtherCAT.</p>
            <h2 class="subtitle blue text-center my-5">Reparto del mercado de protocolos industriales a nivel mundial
            </h2>
            <p>Según informes y conclusiones de HMS Networks Prifibus ha sido en protocolo más utilizada en el mundo
                pero existen varios protocolos que se les acerca, como por ejemplo Profinet y Ethernet/IP compiten por
                el primer puesto dentro del Ethernet Industrial.</p>
            <p>Si se analiza los nuevos nodos instalados en el entorno de la automatización industrial en todo el mundo,
                los buses de campo siguen siendo el tipo de red más utilizado, con un 66% del mercado. Un hecho
                interesante es que HMS detecten que los buses de campo crezcan un 7% al año aproximadamente. Los
                principales catalizadores del crecimiento de los buses de campo son su sencillez, tradición y
                fiabilidad. El bus de campo dominante es PROFIBUS (18% del mercado mundial, incluyendo Ethernet
                industrial), seguido de Modbus (7%), DeviceNet (6%) y CC-Link (6%).</p>
            <p>Las redes Ethernet industrial suman el 34% del mercado y crecen con mayor rapidez que los buses de campo
                (17% al año), pero HMS concluye que pasará algún tiempo hasta que Ethernet industrial crezca más que los
                buses de campo. Los principales catalizadores del crecimiento de Ethernet son sus mayores prestaciones y
                la integración de redes de oficinas. PROFINET y EtherNet/IP son las dos mayores redes Ethernet con un 8%
                del mercado actual para cada una de ellas. A continuación se sitúan EtherCAT, Modbus-TCP y POWERLINK.
            </p>
            <p>En Europa y Oriente Medio (EMEA), PROFIBUS es la red dominante, mientras que PROFINET obtiene la tasa más
                rápida de crecimiento. Les siguen Modbus y EtherCAT.</p>
            <p>El mercado estadounidense está dominado por las redes CIP, entre las cuales EtherNet/IP está superando a
                DeviceNet en cuota de mercado. A continuación se encuentran PROFIBUS y EtherCAT. Además PROFINET gana
                cuota de mercado y Modbus sigue siendo popular.</p>
            <p>En Asia no destaca ninguna red como verdadero líder del mercado, pero PROFIBUS, DeviceNet y Modbus son
                muy utilizadas. CC-Link domina en Japón y EtherCAT también está cobrando impulso.</p>
            <h2 class="subtitle blue text-center my-5">Conclusiónes</h2>
            <p>EtherCAT continúa ganando más y más aceptación por parte de los proveedores de componentes de
                automatización y control como el bus digital de elección con la mayor tasa de adopción e implementación
                de cualquier red de control industrial. Las ventajas incluyen, el mayor rendimiento que presenta en
                comparativa a los procesos que realiza Ethernet, estos puestos en ejecución; dando como resultado el
                reducir los costos de ejecución, simplicidad de comunicación entre el servidor y las terminales. Además,
                los nodos se agregan fácilmente a un sistema existente para aumentar el número de conexiones de E/S del
                sistema.</p>
            <p>Existe una funcionalidad de diagnóstico distintiva en todos los niveles de la comunicación EtherCAT, por
                lo tanto, proporciona una visión general completa y detallada del estado de la red. Esta funcionalidad
                inherente al protocolo EtherCAT puede ser centralizada por el maestro, usando algunos comandos
                adicionales. Estos mecanismos de diagnóstico se implementan en hardware como se define en la
                especificación básica de EtherCAT.</p>

            <p class="text-center blue"><a class="link-orange" href="pdf/articulos/EtherCat.pdf" target="_blank"
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