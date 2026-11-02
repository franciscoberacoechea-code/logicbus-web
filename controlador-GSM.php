<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Control de Sistemas GSM - Logicbus S.A de C.V.</title>
  <meta name="description" content="El Sistema Global para las comunicaciones Móviles “Global System for Mobile communications”, es un sistema estándar digital inalámbrico abierto (sin propietario) de comunicaciones de segunda generación (2G) para telefonía celular..."><!-- Descripcion delo tema -->
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="Controlador GSM, red celular, arquitectura de una red GSM, áplicaciones de la tecnologia GSM">
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
    <div class="gridContArriba ">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Control de sistemas GSM</li>
          </ol>
        </nav>
        <h1 class="title blue">Control de Sistemas GSM </h1>

        <center><img src="https://www.logicbus.com.mx/imagenes/articulo/control-sistemas-GSM.png" class="image_productos" width="45%" alt="Control de sistemas GSM" title="Control de sistemas GSM"></center>
        <p class="paragraph text-justify mt-5"><b>Resumen:</b> En el presente artículo se abordara un tema muy interesante, GSM nació ante la necesidad de mejorar la sencillez y disminuir las limitaciones que tenía la tecnología de primera generación de tecnología móvil analógica llamada AMPS (Advanced Mobile Phone System o Sistema Avanzado de Telefonía Móvil), la cual permitía solo la transmisión de voz.</p>
      </div>
    </div>
    <div class="container paragraph text-justify">
      <h2 class="subtitle blue text-center mt-5 mb-3">Introducción</h2>
      <p>El Sistema Global para las comunicaciones Móviles “Global System for Mobile communications”, es un sistema estándar digital inalámbrico abierto (sin propietario) de comunicaciones de segunda generación (2G) para telefonía celular más expandido en el mundo, que presta servicios de voz de alta calidad y servicios de datos conmutados por circuitos en una amplia gama de bandas o rangos de frecuencia espectrales.</p>
      <p>Su definición se originó en el oriente como “un estándar europeo abierto para que una red digital de teléfono móvil soporte voz, datos, mensajes de texto y roaming en varios países alrededor del mundo”.</p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Historia</h2>
      <p>La tecnología GSM nació ante la necesidad de mejorar la sencillez y disminuir las limitaciones que tenía la tecnología de primera generación de tecnología móvil analógica llamada AMPS (Advanced Mobile Phone System o Sistema Avanzado de Telefonía Móvil), la cual permitía solo la transmisión de voz. Dicha tecnología fue creado por Laboratorios Bell e implementada en los Estados Unidos en 1982, y posteriormente en Inglaterra bajo el nombre de TACS (Total Access Communications System o sistema de comunicación de acceso total).</p>
      <p>Desde 1982 se crea el Grupo de trabajo (Groupe Spécial Mobile o GSM), con el objetivo de desarrollar un estándar europeo de telefonía móvil que se encargo de la configuración técnica de una norma de transmisión y recepción para la telefonía celular europea, en la cual participaron 26 compañías de telecomunicaciones europeas. Para el año 1991 se presentan los primeros prototipos de equipos telefónicos GSM y en 1992 las redes europeas implementan la tecnología y lanzan al mercado, en noviembre, el Nokia 1001 siendo el primer teléfono celular GSM.</p>
      <p>En la década de los 90s, empresas de operadores móviles que implementaron técnicas como TDMA (Acceso múltiple por división de tiempo) y CDMA (acceso múltiple por división de código) sobre sus redes de tecnología AMPS, convirtiéndolas en redes de señal digital (D-AMPS), tuvieron una gran ventaja al no tener que invertir en nuevas torres, cableado, antenas y demás, ya que se podía transmitir en los mismos canales y frecuencias de radio existentes de la red analógica. Esta conversión hizo posible la técnica de multiplexion permitiendo transmitir varias conversaciones simultáneas por en la misma celda.</p>
      <p>En esa época el estándar europeo GSM marco el inicio de la segunda generación (2G), se introdujo la capacidad de transmitir voz y datos a una velocidad de 9,6 kbit/s, lo que permitió proveer el servicio de mensajes cortos (SMS) diseñado como parte del estándar GSM. Esta tecnología tan conocida nació bajo principios de:</p>
      <ul>
        <li>Buena calidad de voz (gracias la señal digital).</li>
        <li>Habilitar el servicio de Itinerancia o roaming.</li>
        <li>Deseo de implantación internacional.</li>
        <li>Terminales “teléfonos celulares” realmente portátiles a un precio accesible.</li>
        <li>Compatibilidad con la Red Digital de Servicios Integrados (RDSI).</li>
      </ul>
      <h2 class="subtitle blue text-center mt-5 mb-3">GSM</h2>
      <p>Es un Sistema Global para las telecomunicaciones móviles. Sistema Global para Comunicaciones Móviles es una tecnología inalámbrica de segunda generación (2G) que presta servicios de voz de alta calidad, así como servicios de datos conmutados por circuitos en una amplia gama de bandas de espectro, entre ellas las de 850, 900, 1800 y 1900 MHz. “El 82% de los terminales mundiales lo usa, 3.000 millones de usuarios en 212 países distintos.”</p>

      <h2 class="subtitle blue text-center mt-5 mb-3">¿Qué es el estándar GSM?</h2>
      <p>La red GSM es un Sistema global de comunicaciones móviles, a comienzos del siglo XXI, el estándar más usado en Europa. Se denomina estándar de segunda generación (2G) porque, a diferencia de la primera generación de teléfonos portátiles, las comunicaciones se producen de un modo completamente digital.</p>
      <p>En 1982, cuando fue estandarizado por primera vez, fue denominado Groupe Spécial Mobile y en 1991 se convirtió en un estándar internacional llamado Sistema Global de Comunicaciones Móviles.</p>
      <p>En Europa, el estándar GSM usa las bandas de frecuencia de 900 MHz y 1.800 MHz. Sin embargo, en los Estados Unidos se usa la banda de frecuencia de 1.900 MHz. Por esa razón, los teléfonos portátiles que funcionan tanto en Europa como en los Estados Unidos se llaman tribanda y aquellos que funcionan solo en Europa se denominan bibanda.</p>
      <p>El estándar GSM permite un rendimiento máximo de 9,6 kbps, que permite transmisiones de voz y de datos digitales de volumen bajo, por ejemplo, mensajes de texto (SMS, Servicio de mensajes cortos) o mensajes multimedia (MMS, Servicio de mensajes multimedia).</p>
      <h2 class="subtitle blue text-center mt-5 mb-3">Red celular</h2>
      <p>Las redes de telefonía móvil se basan en el concepto de celdas, es decir zonas circulares que se superponen para cubrir un área geográfica.</p>
      <p>Las redes celulares se basan en el uso de un transmisor-receptor central en cada celda, denominado estación base (o Estación base transceptora, BTS). Cuanto menor sea el radio de una celda, mayor será el ancho de banda disponible. Por lo tanto, en zonas urbanas muy pobladas, hay celdas con un radio de unos cientos de metros mientras que en zonas rurales hay celdas enormes de hasta 30 kilómetros que proporcionan cobertura.</p>
      <p>En una red celular, cada celda está rodeada por 6 celdas contiguas (por esto las celdas generalmente se dibujan como un hexágono). Para evitar interferencia, las celdas adyacentes no pueden usar la misma frecuencia. En la práctica, dos celdas que usan el mismo rango de frecuencia deben estar separadas por una distancia equivalente a dos o tres veces el diámetro de la celda.</p>
      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/red_de_celdas.png" class="image_productos" width="40%" alt="Figura 1. Diagrama de red celular" title="Figura 1. Diagrama de red celular"></center>
      <p class="text-center"><b>Figura 1. Diagrama de red celular</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3">CARACTERÍSTICAS</h2>
      <p>La tecnología GSM es usada por más de 4 billones de usuarios GSM en varios países alrededor del mundo, lo que representa 85% del mercado mundial de telefonía móvil, aproximadamente 234 países. Es considerada como una tecnología de segunda generación por su velocidad de transmisión de 9.6 kbit/s y otras características importantes como:</p>
      <ul>
        <li>Tecnología libre y abierta que presta servicios de voz de alta calidad y servicios de datos conmutados por circuitos.</li>
        <li>Trabaja en una amplia gama de bandas de espectro con frecuencias de 850, 900, 1800 y 1900 MHz.</li>
        <li>Permite que varios usuarios compartan un mismo canal al hacer llamadas simultáneamente sin interferir con las demás.</li>
        <li>Permite el servicio de mensajería texto (SMS).</li>
        <li>Utiliza una técnica llamada “frequency hopping o salto de frecuencias” que minimiza la interferencia de las fuentes externas y hace que las escuchas no autorizadas sean imposibles.</li>
        <li>Capacidad de servicio internacional roaming o itenerancia.</li>
      </ul>

      <h2 class="subtitle blue text-center mt-5 mb-3">Arquitectura de una red GSM</h2>
      <p>Todas las redes GSM se pueden dividir en cuatro partes fundamentales y bien diferenciadas:</p>
      <ol>
        <li>La Estación Móvil o Mobile Station (MS): Consta a su vez de dos elementos básicos, por un lado el terminal o equipo móvil y por otro lado el SIM o Subscriber Identity Module.</li>
        <p>El SIM es una pequeña tarjeta inteligente que sirve para identificar las características de nuestro terminal. Esta tarjeta se inserta en el interior del móvil y permite al usuario acceder a todos los servicios que haya disponibles por su operador, sin la tarjeta SIM el terminal no nos sirve de nada por que no podemos hacer uso de la red.</p>
        <li>La Estación Base o Base Station Subsystem (BSS): Sirve para conectar a las estaciones móviles con los NSS, además de ser los encargados de la transmisión y recepción. Como los MS también constan de dos elementos diferenciados: La Base Transceiver Station (BTS) o Base Station y la Base Station Controller (BSC).</li>
        <li>El Subsistema de Conmutación y Red o Network and Switching Subsystem (NSS): Este sistema se encarga de administrar las comunicaciones que se realizan entre los diferentes usuarios de la red; para poder hacer este trabajo la NSS se divide en siete sistemas diferentes, cada uno con una misión dentro de la red:</li>
        <p>Mobile Services Switching Center (MSC): Es el componente central del NSS y se encarga de realizar las labores de conmutación dentro de la red, así como de proporcionar conexión con otras redes.</p>
        <p> Gateway Mobile Services Switching Center (GMSC): Un gateway es un dispositivo traductor puede ser software o hardware que se encarga de interconectar dos redes haciendo que los protocolos de comunicaciones que existen en ambas redes se entiendan. Bien, la misión del GMSC es esta misma, servir de mediador entre las redes de telefonía fijas y la red GSM.</p>
        <p>Home Location Registrer (HLR): El HLR es una base de datos que contiene información sobre los usuarios conectados a un determinado MSC. Entre la información que almacena el HLR tenemos fundamentalmente la localización del usuario y los servicios a los que tiene acceso.</p>
        <p>Visitor Location Registrer (VLR): Contiene toda la información sobre un usuario necesaria para que dicho usuario acceda a los servicios de red. Forma parte del HLR con quien comparte funcionalidad.</p>
        <p>Authentication Center (AuC): Proporciona los parámetros necesarios para la autentificación de usuarios dentro de la red; también se encarga de soportar funciones de encriptación.</p>
        <p>Equipment Identy Registrer (EIR): También se utiliza para proporcionar seguridad en las redes GSM pero a nivel de equipos válidos. La EIR contiene una base de datos con todos los terminales que son válidos para ser usados en la red</p>
        <p>GSM Interworking Unit (GIWU): Sirve como interfaz de comunicación entre diferentes redes para comunicación de datos</p>
        <li>Los Subsistemas de soporte y Operación u Operation and Support Subsystem (OSS): Los OSS se conectan a diferentes NSS y BSC para controlar y monitorizar toda la red GSM.</li>
      </ol>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/slide_6.jpg" class="image_productos" width="50%" alt="Figura 2. Estructura de sistemas GSM" title="Figura 2. Estructura de sistemas GSM"></center>
      <p class="text-center"><b>Figura 2. Estructura de sistemas GSM</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Aplicaciones</h2>
      <ul>
        <li>Mensajes Multimedia (MMS)</li>
        <li>Imagen</li>
        <li>El MMS (Mensajes Multimedia) es un servicio de mensajería para el ambiente móvil, muy similar a los mensajes de texto, pero queincluye imágenes, sonido y texto.</li>
      </ul>
      Esta tecnología te permite:
      <ul>
        <li>Enviar mensajes entre teléfonos móviles con imagen, sonido y texto.</li>
        <li>Enviar mensajes desde teléfonos móviles a e-mails.</li>
        <li>Enviar fotografías digitales entre teléfonos con pantalla a color. Ver y enviar pequeños cortos de video. A continuación se mencionan las aplicaciones típicas de esta Tecnología, aunque la principal es la domótica.</li>
      </ul>
      <ol>
        <li>Aplicaciones del sistema de alarma de seguridad;</li>
        <li>Supervisión y monitoreo de sistemas de alarma;</li>
        <li>Sistema de monitoreo automático;</li>
        <li>Protección de seguridad de las máquinas expendedoras;</li>
        <li>Estaciones de bombeo, tanques, aceite o niveles de agua;</li>
        <li>Edificios y bienes inmuebles;</li>
        <li>Estaciones meteorológicas;</li>
        <li>Monitoreo del río y control de inundaciones;</li>
        <li>Oleoductos y gasoductos;</li>
        <li>Protección contra la corrosión</li>
        <li>Temperaturas, aplicaciones de fuga de agua;</li>
        <li>Wellheads, barco, vehículo;</li>
        <li>Ahorro de energía, sistema de control de luces de la calle;</li>
        <li>Controles de válvula;</li>
        <li>Estaciones de transformadores;</li>
        <li>Salas de máquinas no tripuladas;</li>
        <li>Aplicación de sala de control;</li>
        <li>Sistema de automatización, M2M;</li>
        <li>Sistema de control de acceso GSM, GSM Gate Abridor, etc.</li>
      </ol>

      <p>Logicbus ofrece los siguientes dispositivos que permiten implementar los sistemas antes mencionados:</p>

      <h2 class="subtitle blue text-center mt-5 mb-3"><a class="link-orange" href="https://tienda.logicbus.com.mx/B-ALARM_p_17532.html">B-ALARM</a></h2>
      <p>B-ALARM es un dispositivo GSM diseñado para la gestión remota de alarmas en hogares, edificios, plantas, máquinas de producción a través de comandos simples enviados con mensajes SMS. Con cualquier teléfono inteligente es posible controlar el encendido y apagado de la caldera, activar un contacto, etc. El dispositivo está equipado con un módulo GSM en su interior que se comporta como cualquier otro terminal telefónico en una red celular. La unidad permite operar con comandos a costo cero a través del timbre, así como con comandos rápidos con código numérico y cronometrado. También tiene 1 entrada digital y 1 relé de salida SPDT con una capacidad de 3 A / 250 Vac. B-ALARM puede contar con un libro de comandos para 5 usuarios (1 de los cuales es un administrador) y una guía telefónica SIM que se extiende hasta 250 usuarios (comandos que suenan). La configuración en línea está garantizada por el software plug and play EASY SETUP y parcialmente de forma remota a través de SMS.</p>
      <center><a href="https://tienda.logicbus.com.mx/B-ALARM_p_17532.html"><img src="https://tienda.logicbus.com.mx/assets/images/B-ALARM.jpg" class="image_productos" width="30%" alt="Seneca" title="Seneca"></a></center>
      <p class="text-center"><b>Controlador GSM con 1 entrada digital y 1 salida de relevador SPDT 3A / 250 Vac</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3"><a class="link-orange" href="https://tienda.logicbus.com.mx/LBRTU315024_p_10042.html">LBRTU315024</a></h2>
      <p>Módulo GSM con 1 salida de relevador NO/NC (3A/240Vac) para abrir puerta automáticas con una llamada de celular o mensaje SMS. Frecuencia GSM 850/900/1800/1900. Almacena 200 números autorizados, incluye antena, manual y adaptador de 120 a 12VDC/2A.</p>
      <center><a class="link-orange" href="https://tienda.logicbus.com.mx/LBRTU315024_p_10042.html"><img src="https://tienda.logicbus.com.mx/assets/images/31/LBRTU315024.jpg" class="image_productos" width="20%" alt="control-gsm" title="precise-automation"></a></center>
      <p class="text-center"><b>Módulo GSM con 1 salida de relevador NO/NC (3A/240Vac) para abrir puerta automáticas con una llamada de celular o mensaje SMS.</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3"><a class="link-orange" href="https://tienda.logicbus.com.mx/MY2G-R-0-M-G_p_7421.html">MY2G-R-0-M-G</a></h2>
      <p>MyALARM2 GPS (MY2G) incluye algunas funciones de seguimiento en la versión estándar MY2. MY2G permite establecer vallas virtuales y alarmas de velocidad, así como la activación de la "función" del rastreador. MyALARM2 puede transmitir su posición GPS para identificar la localización de vehículos móviles como automóviles y barcos. MY2G también puede enviar coordenadas de GPS en el sistema de mapas de Google Maps ™ a través de SMS o correo electrónico. Para aplicaciones en interiores, o con poca potencia, puede conectar una antena GPS externa.</p>
      <p>*La configuración de MYALARM2 realizada con versiones anteriores de EASY MYALARM2 3.12 puede no ser compatible con la última versión.
      <p>Características:</p>
      <ul>
        <li>Datalogger con antena GPS integrada</li>
        <li>Función de rastreo</li>
        <li>Alarma en cerca virtual y velocidad</li>
        <li>Localización GPS con enlace entero a Google Maps.</li>
        <li>Tarjeta Micro SD incluida</li>
        <li>Aplicaciones típicas: localización de unidades móviles, localización de barco y vehículos, encendido y apagado de luces mediante las funciones de crepúsculo.</li>
      </ul>
      <center><a href="https://tienda.logicbus.com.mx/MY2G-R-0-M-G_p_7421.html"><img src="https://tienda.logicbus.com.mx/assets/images/my2g-r-0-m-g.jpg" class="image_productos" width="20%" alt="control-gsm" title="control-gsm"></a></center>
      <p class="text-center"><b>Unidad de control remoto GSM/GPRS para registro de datos y gestión y notificación.</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3"><a class="link-orange" href="https://tienda.logicbus.com.mx/MY2B-0-0-M-B_p_13003.html">MY2B-0-0-M-B</a></h2>
      <p>MyAlarm2 es una unidad de telecontrol GSM / GPRS para aplicaciones domésticas y de construcción, plantas industriales y máquinas a través de comandos simples enviados por mensajes de texto SMS, timbres telefónicos, correos electrónicos. Funciona con cualquier teléfono celular o teléfono inteligente. Con MyAlarm2 es posible encender / apagar una caldera, encender / apagar un contacto, etc. El dispositivo tiene un módulo GSM / GPRS dentro que funciona como un terminal telefónico en cualquier red celular.</p>
      <p>*La configuración de MYALARM2 realizada con versiones anteriores de EASY MYALARM2 3.12 puede no ser compatible con la última versión.</p>
      <center><a href="https://tienda.logicbus.com.mx/MY2B-0-0-M-B_p_13003.html"><img src="https://tienda.logicbus.com.mx/assets/images/MY2B-0-0-M-B.jpg" class="image_productos" width="30%" alt="control-gsm" title="control-gsm"></a></center>
      <p class="text-center"><b>Modulo de alarma GSM MY2B|Versión básica</b></p>
      <h2 class="subtitle blue text-center mt-5 mb-3">Conclusión</h2>

      <p>El avance tecnológico que traen estos dispositivos facilita la vida cotidiana y son prácticos al utilizarlos. Las personas que no están acostumbradas a la tecnología, es fácil intruducirlas en estos equipos, ya que la mayoría utiliza equipos celulares, con los que pueden enviar mensajes de Texto, Aquí es donde entran los diseñadores, en donde tendrán la tarea de implementar funciones fáciles de reconocer.</p>
      <p>En otro aspecto, si se pretende hacer sistemas elaborados y complejos, también son útiles estos equipos.</p>
      <p>Otro dato interesante que traen estos dispositivos, es que se pueden controlar desde cualquier parte del mundo, derivado a que son controlados mediante chips, elimina la parte de la red, y se le deja a las compañías dedicadas a la red móvil.</p>
      <p>En General, estos equipos están trayendo muchas posibilidades, y simplicidad de procesos.</p>

      <p class="text-center"><a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/articulos/Control-Sistemas- GSM.pdf" target="_blank" title="Control de Sistemas GSM" alt="Control de Sistemas GSM">Leer Artículo Completo</a></p>
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