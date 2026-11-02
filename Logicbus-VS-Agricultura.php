<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Logicbus VS Agricultura - Logicbus SA de CV </title>
  <meta name="description" content="Al construir un invernadero debemos propiciar las condiciones óptimas para el desarrollo de los cultivos, traduciendo esto en el control y monitoreo de las condiciones ambientales óptimas en el sembrado en el interior de estos sistemas...">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="Logicbus, Invernadero, Sensores, Plc, Control de temperaturas, InduSoft, Plc FBs-32MCU, PLCs FBs, serie IDG500, SCADA, DAQ, DataLogger, OBDC, DDE, NetDDE, OPC, TCP/IP.">
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
            <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Logicbus VS Agricultura</li>
          </ol>
        </nav>
        <div class="griditemContA paragraph text-justify">
          <h1 class="title blue">Logicbus VS Agricultura</h1>
          <p class=""><b>Resumen:</b> El presente artículo expone algunas de las necesidades básicas para el diseño de un invernadero automatizado, así como la propuesta de componentes para la integración teniendo la posibilidad de implementar un sistema IoT, relacionando algunos productos que Logicbus ofrece en el desarrollo de este tipo de proyectos.</p>

          <h3 class="subtitle blue text-center my-5">I. INTRODUCCIÓN</h3>

          <p>Al construir un invernadero debemos propiciar las condiciones óptimas para el desarrollo de los cultivos, traduciendo esto en el control y monitoreo de las condiciones ambientales óptimas en el sembrado en el interior de estos sistemas para el cultivo seleccionado. </p>
          <p>Aunado a estas condiciones, le podremos sumar las necesidades de monitoreo en tiempo real desde cualquier localidad donde se encuentre el operador. </p>
          <p><b>LOGICBUS</b> es una empresa dedicada a la comercialización de equipo que ofrece al mercado productos útiles para la automatización, medición y control, por lo que en este artículo expondremos las necesidades principales para la automatización de un invernadero y los productos que Logicbus oferta para el control y monitoreo. </p>
        </div>
      </div>
    </div>
    <div class="container paragraph text-justify">
      <h3 class="subtitle blue text-center my-5">II. PRINCIPALES VARIABLES A MONITOREAR Y CONTROLAR DENTRO DE LOS INVERNADEROS.</h3>
      <h4 class="med mt-5">A. Control de temperaturas</h4>

      <p>El control de la temperatura se basa en sensores para la medición de las condiciones ambientales internas. Tomando en consideración la cantidad y ubicación de estos, así como los actuadores y controladores que se requieren para determinada área.</p>
      <p>El principal dato a evaluar dentro de los invernaderos es la temperatura, debido a que requiere de más sistemas mecánicos de actuación para su control.</p>

      <h4 class="med mt-5">B. Humidificación</h4>
      <p>Los niveles adecuados de humedad son de suma importancia para el desarrollo de las plantas, la falta o exceso de humedad en los sembradíos provoca alteraciones en la fotosíntesis. Para el control de los niveles de humedad es requerido utilizar sensores de humedad y humidificadores.</p>

      <h4 class="med mt-5">C. Riego</h4>

      <p>El sistema de riego presenta grandes benefició para los invernaderos y en general para el medio ambiente, ya que permite la aplicación de agua y químicos de manera controlada, evitando así el consumo excesivo de agua y a su vez que los sembradío sufran de inundación o sequias.</p>


      <h4 class="med mt-5">D. Otras condiciones</h4>

      <p>Existen más condiciones, como es la parte mecánica para abrir compuertas, la fertilización del suelo, el control de plagas, entre otros, los cuales no se abordan dentro del artículo, pero deben estar presentes en el diseño del mismo.</p>

      <h3 class="subtitle blue text-center my-5">III. PROPUESTAS TECNOLOGÍAS</h3>
      <h4 class="med mt-5">A. Sensores</h4>

      <p>Derivado a las necesidades para censar las condiciones ambientales, en Logicbus presenta algunos productos que pueden ayudar para el desarrollo e implementación de los invernaderos como es el caso de registrador, es un dispositivo electrónico que registra datos en el tiempo o en relación a la ubicación por medio de instrumentos y sensores propios o conectados externamente. Casi todos están basados en microcontroladores.</p>
      <p>Los registradores de datos varían entre los de propósito general para una amplia gama de aplicaciones a los dispositivos de medición muy específicos para medir en un medio ambiente o aplicación particular. </p>
      <p>Uno de los principales beneficios del uso de registradores de datos es la capacidad para recopilar automáticamente datos las 24 horas del día. Tras la activación, los registradores de datos normalmente se dejan sin vigilancia para medir y registrar la información durante toda la duración del período de seguimiento. Esto permite una visión global y precisa de las condiciones ambientales objeto de seguimiento, tales como la temperatura del aire y la humedad relativa.</p>


      <center class="my-5"><img src="https://www.logicbus.com.mx/imagenes/articulo/DL-302.jpg" class="image_productos" width="40%" alt=" Registrador de datos de CO2, temperatura y humedad con pantalla táctil modelo DL-302." title=" Registrador de datos de CO2, temperatura y humedad con pantalla táctil modelo DL-302."><img src="https://www.logicbus.com.mx/imagenes/articulo/DL-302-1.jpg" class="image_productos" width="30%" alt=" Registrador de datos de CO2, temperatura y humedad con pantalla táctil modelo DL-302." title=" Registrador de datos de CO2, temperatura y humedad con pantalla táctil modelo DL-302."><br><b>Fig. 1. Fotografia de un Registrador de datos de CO2, temperatura y humedad con pantalla táctil modelo DL-302.</b></center>


      <p>La serie DL-300 de dispositivos Data Logger se puede utilizar para registrar información de CO, CO2, temperatura, humedad y punto de rocío, incluidas las marcas de fecha y hora, y puede almacenar hasta 450,000 registros descargables. Se puede acceder a los datos en tiempo real desde el registrador de datos DL-300 desde cualquier lugar y en cualquier momento utilizando el software gratuito que proporciona el fabricante para Windows, iOS o Android. </p>

      <p>Cuenta con la comunicación mediante protocolos industriales como DCON, Modbus RTU y Modbus TCP, así como también para el protocolo emergente de conectividad máquina a máquina (M2M) /) IoT (Internet of Things) - MQTT. El registrador de datos DL-300 se puede conectar a través de interfaces de comunicación ampliamente utilizadas, como RS-485, Ethernet y PoE, lo que significa que el dispositivo se puede integrar fácilmente en sistemas HMI o SCADA existentes y es fácil de mantener en un sistema de control distribuido. </p>

      <h4 class="med mt-5">B. PLC </h4>
      <p>Derivado a que el sensor de la serie DL-300 se comunica mediante el protocolo Modbus RTU2, se puede conectar a un PLC, por lo que la familia FBs nos sirve en la comunicación del sensor y la PC, para la activación de las válvulas, compuertas, o dispositivos que se requieren para la implementación del invernadero. </p>


      <center class="my-5"><img src="https://www.logicbus.com.mx/imagenes/articulo/FBs-32MCU.jpg" class="image_productos" width="40%" alt=" PLC de la familia FBs-32MCU" title="PLC de la familia FBs-32MCU"><br><b>Fig.2 Fotografia de un PLC de la familia FBs-32MCU</b><br></center>


      <p>Los PLCs serie FBs tienen un temporizador de alta velocidad que provee 0.1ms de resolución y capacidad de tener interrupciones en tiempo real. Comparado con otras marcas de PLCs que tienen 1ms de resolución, los PLCs FBs son 10 veces más precisos. Estos pueden manejar fácilmente tiempos de alta precisión o aplicaciones de detección de velocidad. Tienen un temporizador de alta velocidad de 16-bit a 0.1ms y cuatro temporizadores de alta velocidad de 32-bit a 0.1ms. </p>
      <p>Un PLC serie FBs puede tener hasta 16 puntos de entradas de interrupción externas. Estas interrupciones pueden ser activadas con el cambio del estado de la entrada que puede ser positivo/negativo o ambos. Cuando se usan las funciones de interrupción de entrada, las operaciones de alta velocidad pueden ser detectadas en la entrada las cuales pueden perderse en un escaneo de entradas y salidas normal.</p>
      <p>Adicional al hardware, se tiene un software para la configuración del PLC denominado WinProladder, la cual es una aplicación basada en Windows con ambiente amigable al usuario y fácil aprendizaje, que pueden utilizar usuarios novatos o avanzados.</p>

      <h4 class="med mt-5">C. Comunicación con otros dispositivos.</h4>
      <p>En este punto, ya contamos con la información de la temperatura, humedad, y utilizando el PLC podemos controlar sistemas adicionales como lo es la parte mecánica (apertura de ventanas para la ventilación, activar el sistema de humidificación), en este punto se nos presenta la situación del cómo dar las instrucciones al PLC, por lo que tenemos que hacer la comunicación hacia un equipo portátil, para ello utilizaremos un equipo de comunicación inalámbrica que es un M2M Cellular Gateway, el cual nos brinda la posibilidad de realizar la conexión entre el PLC y un equipo portátil mediante dos medios, utilizando una conexión inalámbrica (con una tarjeta SIM) o alámbrica (mediante una conexión Ethernet).</p>


      <center class="my-5"><img src="https://www.logicbus.com.mx/imagenes/articulo/M2M-Cellular-Gateway.jpg" class="image_productos" width="40%" alt="M2M-Cellular-Gateway" title="M2M-Cellular-Gateway"><br><b>Fig. 3. Fotografia de un M2M Cellular Gateway modelo IDG500-01001.</b><br></center>


      <p>El producto de la serie IDG500 proporciona un puerto RJ45 para conectar Ethernet a 10 / 100Mbps. Puede detectar automáticamente la velocidad de transmisión en la red y configurarse automáticamente, o se puede realizar configuraciones avanzadas como por ejemplo realizar una VPN.</p>

      <h4 class="med mt-5">D. Software</h4>
      <p>Un software denominado SCADA por sus siglas en inglés (Supervisory Control And Data Acquisition) es empleado para ordenadores que permite controlar y supervisar procesos industriales a distancia. Facilita retroalimentación en tiempo real con los dispositivos de campo (sensores y actuadores), y controla el proceso automáticamente. Provee de toda la información que se genera en el proceso productivo (supervisión, control calidad, control de producción, almacenamiento de datos, etc.) y permite su gestión e intervención. </p>

      Logicbus se cuenta con 3 niveles de Software:
      <ol>
        <li>SCADA, siendo robusto y configurable, el cual es especial en proyectos industriales donde se requiere confiabilidad y gestión remota.
        <li>Software o aplicaciones para ambientes de programación y desarrollo donde se puede generar código a la medida, es decir estos programas tienen muchas utilerías que puede ayudarle al desarrollar proyectos de medición y automatización en poco tiempo. Por mencionar algunos como DasyLab, HMIware, Win ProLadder, entre otros.
        <li>Aplicaciones listas donde se puede visualizar señales de las tarjetas DAQ o registradores de datos, así como funcionalidades como exportar a Excel, generar alarmas, enviar emails y visualizar históricos. Algunas aplicaciones son SensIT, EZ DataLogger, DAQami y TracerDAQ Pro.</li>
      </ol>


      <center class="my-5"><img src="https://www.logicbus.com.mx/imagenes/articulo/indusoft.jpg" class="image_productos" width="60%" alt="Logotivo del Software de Indusoft" title="Logotivo del Software de Indusoft"><br><b>Fig. 4. Logotivo del Software de Indusoft</b><br></center>


      <p>InduSoft Web Studio, es un potente conjunto de herramientas de automatización totalmente modular para el desarrollo de cualquier tipo de aplicación, desde modernas interfaces Hombre-Máquina (HMI) hasta completos sistemas de Supervisión, Control y Adquisición de Datos (SCADA), bajo cualquier plataforma basada en Windows como NT, 2000, XP, Windows 7, CE o CE.net y para Internet o Intranet. Su entorno de desarrollo le permitirá trasladar los más complejos comportamientos de sus procesos industriales a aplicaciones.</p>
      <p>Las aplicaciones de IWS (InduSoft Web Studio) se ejecutan en microcomputadoras conectadas a máquinas o procesadores mediante controladores programables, dispositivos E/S remotos y otros equipos de adquisición de datos en tiempo real. Estas aplicaciones consisten en pantallas animadas que sirven de interfaz con el operador, drivers para PLC y otros dispositivos de E/S controlables, una base de datos de etiquetas para aplicaciones, y módulos opcionales tales como monitores para alarmas, gráficas de tendencia, recetas, planificadores de tareas, y un sistema de seguridad. Las aplicaciones de IWS interactúan con sistemas industriales de E/S y con otras aplicaciones de Windows durante la ejecución de la aplicaciónutilizando los siguientes protocolos:
      <ul>
        <li>ODBC (Open Database Connectivity)</li>
        <li>DDE (Dynamic Data Exchange)</li>
        <li>NetDDE (Network Dynamic Data Exchange)</li>
        <li>OPC (Open Connectivity)</li>
        <li>TCP/ IP (Transmission Control Protocol / Internet Protocol) </li>
      </ul>
      </p>

      <p>Después de desarrollar la aplicación, esta puede ser ejecutada en el mismo equipo en el que fue desarrollada o descargar la aplicación a otro equipo (utilizado una conexión serial o TCP/IP) y ejecutarla usando InduSoft Web Studio o un software de ejecución *CEView. El equipo procesa los datos de los dispositivos conectados de acuerdo a los parámetros definidos en la aplicación y reacciona de acuerdo a estos, los muestra, guarda y permite descargarlos.</p>

      <h3 class="subtitle blue text-center my-5">IV. CONCLUSIÓN</h3>
      <p>Un invernadero se puede implementar utilizando Sensores DL-302, conectándose mediante el protocolo de Modbus hacia el PLC, al configurar el PLC podremos colocar los pulsos que activaran los sistemas como son de riego, abrir y cerrar ventanas para el control de temperatura, entre otros, trasmitiendo los datos de control mediante el M2M Cellular Gateway con el modelo IDG500-01001 hacia un equipo portátil o de escritorio mediante una VPN (esta conexión es requerida para poder controlar el equipo desde cualquier ubicación), y mediante el diseño realizado en InduSoft que el usuario requiera, ya sea para poder solamente controlar los componentes remotamente o almacenar datos estadísticos, como por ejemplo el grado de humedad de la localidad, podrá servir para analizar qué tipo de cultivo es más productivo sembrar. Así mismo en la PC podremos conectarnos y manipular o extraer información del invernadero utilizando un celular (En las referencias se encuentra un artículo para desarrollar aplicaciones con Android y protocolos de Modbus).</p>


      <center class="my-5"><img src="https://www.logicbus.com.mx/imagenes/articulo/diagrama-implementacion.jpg" class="image_productos" width="60%" alt="Diagrama de la Implementacion Logicbus" title="Diagrama de la Implementacion Logicbus"><br><b>Fig. 5. Diagrama de la implementación propuesta deinvernadero utilizando productos Logicbus.</b><br></center>


      <p>Las propuestas presentadas en el anterior párrafo, se puede enriquecer según la necesidad del cliente, desarrollando un sin número de variantes, ya que los equipos y aplicaciones tienen la capacidad de implementar varios tipos de soluciones y maneras de colocarlos, la presentada en este artículo es un ejemplo de cómo se pueden interconectar los componentes, ya dependerá del usuario la complejidad que se presente al momento del desarrollo del proyecto.</p>


      <p class="blue text-center"><a class="link-orange" href="https://www.logicbus.com.mx/pdf/articulos/Logicbus-VS-Agricultura.pdf" target="_blank">Leer Artículo Completo</a></p>
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