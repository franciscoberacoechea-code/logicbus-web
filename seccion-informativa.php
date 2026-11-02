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

  <script>
    gtag('config', 'AW-1007518778/wX-hCOLx9YQDELqItuAD', {

      'phone_conversion_number': '33-3854-5975'

    });
  </script>
  <title>Sección de Articulos Notas e Información Técnica - Logicbus</title>
  <meta name="author" content="Logicbus">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, 
Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, productos, products, marca, categorias, articulos, seccion informativa, seccion, informativa">
  <meta name="description" content="Logicbus: Seeción de Artículos">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
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

  <section class="my-5 container-fluid">
    <h1 class="title blue">Sección de Articulos, Notas e Información Técnica</h1>
    <div class="cards-article">
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/compuert_log.png" class="card-img-top" alt="Compuertas Lógicas">
        <div class="card-body text-center">
          <h5 class="card-title">Compuertas Lógicas</h5>
          <p class="card-text text-justify">Las Compuertas Lógicas son circuitos electrónicos conformados internamente por transistores que se...</p>
          <a href="compuertas-logicas" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Resistencia1.jpg" class="card-img-top" alt="La Ley de Ohm">
        <div class="card-body text-center">
          <h5 class="card-title">La Ley de Ohm</h5>
          <p class="card-text text-justify">La ley de Ohm es un elemento fundamental para la explicación de ciertos fenómenos relacionados con la...</p>
          <a href="ley-de-ohm" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/protocolos-industrial.jpg" class="card-img-top" alt="Protocolos de Comunicación Industrial">
        <div class="card-body text-center">
          <h5 class="card-title">Protocolos de Comunicación Industrial</h5>
          <p class="card-text text-justify">En este artículo se hablará acerca de los protocolos Industriales de comunicación, los tipos que hoy en día existen...</p>
          <a href="Protocolos-de-comunicaciones-industriales" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/banner-historia-industria%204.0.png" class="card-img-top" alt="Historia de la Industria 4.0">
        <div class="card-body text-center">
          <h5 class="card-title">Historia de la Industria 4.0</h5>
          <p class="card-text text-justify">Gracias a la Revolución Industrial ocurrida en Gran Bretaña en el siglo VIII, y al invento de nuevas máquinas que...</p>
          <a href="historia-industria-4.0.php" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/MODBUS.jpg" class="card-img-top" alt="Protocolo de Comunicación Modbus">
        <div class="card-body text-center">
          <h5 class="card-title">Protocolo de Comunicación Modbus</h5>
          <p class="card-text text-justify">El presente artículo se expondrá de uno de los protocolos de comunicación utilizado a nivel industrial...</p>
          <a href="Protocolo-Modbus" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/robot-arm.jpg" class="card-img-top" alt="¿Qué es la Automatización?">
        <div class="card-body text-center">
          <h5 class="card-title">¿Qué es la Automatización?</h5>
          <p class="card-text text-justify">La automatización es el conjunto de elementos o procesos informáticos, mecánicos y electromecánicos...</p>
          <a href="automatizacion" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/sensores-torque.png" class="card-img-top" alt="Los Robots y los Sensores de Torque">
        <div class="card-body text-center">
          <h5 class="card-title">Los Robots y los Sensores de Torque</h5>
          <p class="card-text text-justify">El uso de robots hoy en día se hace más popular y en muy distintos ámbitos, teniendo tal impacto...</p>
          <a href="Los-robots-y-los-sensores-de-Torque" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/celda-de-carga-panqueque.png" class="card-img-top" alt="Celdas de Carga de Panqueques - Pruebas de Durabilidad del Asiento Automotriz">
        <div class="card-body text-center">
          <h5 class="card-title">Celdas de Carga de Panqueques - Pruebas de Durabilidad del Asiento Automotriz</h5>
          <p class="card-text text-justify">Las celdas de carga se emplean en distintos sectores de la industria, las ciencias, etc. Ésta es esencialmente...</p>
          <a href="Celdas-de-carga-de-panqueques" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Internet-de-las-cosas-Medicina.png" class="card-img-top" alt="Internet de las Cosas Dentro de la Medicina">
        <div class="card-body text-center">
          <h5 class="card-title">Internet de las Cosas Dentro de la Medicina</h5>
          <p class="card-text text-justify">El internet de las cosas es uno de los temas que ha vuelto recurrente en los artículos de tecnología y en los esquemas de solución...</p>
          <a href="Internet-de-las-cosas-dentro-de-la-Medicina" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/banner-sensores-fotoelectricos.png" class="card-img-top" alt="Sensores Fotoeléctricos">
        <div class="card-body text-center">
          <h5 class="card-title">Sensores Fotoeléctricos</h5>
          <p class="card-text text-justify">Cuando usamos un sensor, la cual ella emplea una luz de haz, este prototipo ha sido muy popular hoy en día. El sensor fotoeléctrico...</p>
          <a href="Sensores-Fotoelectricos-logicbus" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/images/banner/www/banner-industria-4.0.png" class="card-img-top" alt="Industria 4.0">
        <div class="card-body text-center">
          <h5 class="card-title">Industria 4.0</h5>
          <p class="card-text text-justify">La Industria 4.0 es un concepto que fue desarrollado desde el 2010 por el gobierno alemán para describir una visión de la...</p>
          <a href="que-es-la-industria-4-0" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/30/RTD.jpg" class="card-img-top" alt="Sensores de Temperatura RTD">
        <div class="card-body text-center">
          <h5 class="card-title">Sensores de Temperatura RTD</h5>
          <p class="card-text text-justify">Los termómetros de resistencia o termómetros a resistencia son transductores de temperatura, los cuales se basan en la...</p>
          <a href="sensor-temperatura-RTD" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/224/encoder04.png" class="card-img-top" alt="Encoders">
        <div class="card-body text-center">
          <h5 class="card-title">Encoders</h5>
          <p class="card-text text-justify">Todo lazo de control requiere de una retroalimentación, y el control de movimiento no es la excepción. Para medir la posición...</p>
          <a href="info_encoders" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/PyMe.jpg" class="card-img-top" alt="¿Cómo Describir a una PyME?">
        <div class="card-body text-center">
          <h5 class="card-title">¿Cómo Describir a una PyME?</h5>
          <p class="card-text text-justify">PyME: Pequeñas y Medianas Empresas; quiere decir, las empresas que cuentan con un personal laboral no mayor a 250 trabajadores en total y una facturación...</p>
          <a href="caracteristicas-pymes-tecnologicas" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/flujo.jpg" class="card-img-top" alt="Flujo de Corriente">
        <div class="card-body text-center">
          <h5 class="card-title">Flujo de Corriente</h5>
          <p class="card-text text-justify">Los electrones de las órbitas externas del átomo son atraídos hacia el núcleo con la fuerza menor que los electrones cuyas órbitas están más próximas a él...</p>
          <a href="flujo-de-corriente" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/iiot.jpg" class="card-img-top" alt="Tres Áreas Clave Donde la Automatización de IIoT está Elevando los Trabajos de Fabricación">
        <div class="card-body text-center">
          <h5 class="card-title">Tres Áreas Clave Donde la Automatización de IIoT está Elevando los Trabajos de Fabricación</h5>
          <p class="card-text text-justify">El presente artículo expone los retos de la industria con la llegada de IoT, así como los nuevos roles laborales que en un futuro pueden implementarse...</p>
          <a href="IoT-la-internet-industrial-de-las-cosas" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Automatizacion.jpg" class="card-img-top" alt="Evolución de la Automatización">
        <div class="card-body text-center">
          <h5 class="card-title">Evolución de la Automatización</h5>
          <p class="card-text text-justify">En este artículo se hablará en como la automatización junto con el IoT (Internet de las Cosas) fue evolucionando de una manera impresionante, por medio...</p>
          <a href="Evolucion-de-la-automatizacion" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/profinet.jpg" class="card-img-top" alt="Protocolo de Comunicación Profinet">
        <div class="card-body text-center">
          <h5 class="card-title">Protocolo de Comunicación Profinet</h5>
          <p class="card-text text-justify">El presente artículo se expondrá de uno de los protocolos de comunicación conocidos y utilizados actualmente, Profinet, se mencionará como ha surgido dentro...</p>
          <a href="Protocolo-Profinet" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/EtherCat.jpg" class="card-img-top" alt="Protocolo de Comunicación EtherCat">
        <div class="card-body text-center">
          <h5 class="card-title">Protocolo de Comunicación EtherCat</h5>
          <p class="card-text text-justify">A lo largo de los años ha existido la necesidad de un bus de control digital abierto de bajo costo para automatización y control de movimiento...</p>
          <a href="Protocolo-Ethercat" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Bacnet-a-modbus.png" class="card-img-top" alt="Convertidor de Protocolos - BACnet a Modbus">
        <div class="card-body text-center">
          <h5 class="card-title">Convertidor de Protocolos - BACnet a Modbus</h5>
          <p class="card-text text-justify">En las últimas décadas, las necesidades en los edificios ya sean corporativas, industriales, comerciales o de las viviendas, han llegado...</p>
          <a href="Convertidor-de-protocolos-bacnet-modbus" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Encoders-aplicaciones-en-la-Industria.png" class="card-img-top" alt="Encoders, Aplicaciones en la Industria">
        <div class="card-body text-center">
          <h5 class="card-title">Encoders, Aplicaciones en la Industria</h5>
          <p class="card-text text-justify">Dentro de la industria son muy utilizados los encoders para el control de movimiento, específicamente por fabricantes de cintas transportadoras...</p>
          <a href="encoder-app-industria" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Sensores-Aplicaciones-en-la-Industria.png" class="card-img-top" alt="Sensores, Aplicaciones en la Industria">
        <div class="card-body text-center">
          <h5 class="card-title">Sensores, Aplicaciones en la Industria</h5>
          <p class="card-text text-justify">Anteriormente la detección y clasificación de productos en las industrias era utilizando el recurso humano, en donde este tenia que estar al pendiente...</p>
          <a href="sensores-tritronics" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/images/banner/www/banner-importancia-plc.png" class="card-img-top" alt="La Importancia de los PLC's">
        <div class="card-body text-center">
          <h5 class="card-title">La Importancia de los PLC's</h5>
          <p class="card-text text-justify">Para quienes hayan visto la película de Hacker: Amenaza en la Red (Blackhat), la cual trata de unos agentes norteamericanos que se ven obligados...</p>
          <a href="importancia-del-plc" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/diagrama-implementacion.jpg" class="card-img-top" alt="Logicbus VS Agricultura">
        <div class="card-body text-center">
          <h5 class="card-title">Logicbus VS Agricultura</h5>
          <p class="card-text text-justify">El presente artículo expone algunas de las necesidades básicas para el diseño de un invernadero automatizado, así como la propuesta de componentes...</p>
          <a href="Logicbus-VS-Agricultura" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Analisis-de-virbaciones.png" class="card-img-top" alt="Análisis de Vibración">
        <div class="card-body text-center">
          <h5 class="card-title">Análisis de Vibración</h5>
          <p class="card-text text-justify">Con el avance y crecimiento de la tecnología, dentro del mercado industrial se consiguen equipos analizadores de vibración y paquetes informáticos...</p>
          <a href="analisis-vibraciones" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/vision-artificial.jpg" class="card-img-top" alt="Vision Artificial">
        <div class="card-body text-center">
          <h5 class="card-title">Vision Artificial</h5>
          <p class="card-text text-justify">Hay muchas tecnologías que utilizan la visión artificial o por computadora, entre las cuales se encuentran el reconocimiento de objetos, la detección...</p>
          <a href="vision-artificial" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/WebDAQ-504_500.jpg" class="card-img-top" alt="Datalogger">
        <div class="card-body text-center">
          <h5 class="card-title">Datalogger</h5>
          <p class="card-text text-justify">Un Datalogger es un dispositivo electrónico que hace registrar mediciones ordenadas en el tiempo, que viene proveniente de diferentes sensores...</p>
          <a href="registro-de-datos-datalogger" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/dataloger.jpg" class="card-img-top" alt="Registradores, el Reto del Almacenamiento">
        <div class="card-body text-center">
          <h5 class="card-title">Registradores, el Reto del Almacenamiento</h5>
          <p class="card-text text-justify">En la actualidad requerimos medir y controlar condiciones tales como la temperatura, la humedad, presión, voltaje, entre otros, llegando a utilizar...</p>
          <a href="registradores-el-reto-del-almacenamiento" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/display-led.jpg" class="card-img-top" alt="Anuncios Led">
        <div class="card-body text-center">
          <h5 class="card-title">Anuncios Led</h5>
          <p class="card-text text-justify">La tecnología se mantiene en constante cambio, con frecuencia nos ofrece mejores herramientas para nuestro uso. El lenguaje verbal siempre será el...</p>
          <a href="Anuncios-Led" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Domotica.png" class="card-img-top" alt="Domótica: Vivienda Inteligente">
        <div class="card-body text-center">
          <h5 class="card-title">Domótica: Vivienda Inteligente</h5>
          <p class="card-text text-justify">Dentro de los avances tecnológicos, en el transcurso del tiempo que se vienen realizando en las áreas de telecomunicación, informática y electrónica...</p>
          <a href="domotica-vivienda-inteligente" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/CELDAS-DE-CARGA.png" class="card-img-top" alt="Celdas de Carga">
        <div class="card-body text-center">
          <h5 class="card-title">Celdas de Carga</h5>
          <p class="card-text text-justify">Las Celda de Carga (Load Cell o Loadcell) son un tipo de transductor de fuerza que convierte una fuerza mecánica de entrada, como carga, peso...</p>
          <a href="celdas-de-carga" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Auto-iot-mundial.png" class="card-img-top" alt="Automatización e IoT en el Mundial Rusia 2018">
        <div class="card-body text-center">
          <h5 class="card-title">Automatización e IoT en el Mundial Rusia 2018</h5>
          <p class="card-text text-justify">La tecnología avanza de manera cada vez más rápida, abarcando diferentes áreas del quehacer humano como el trabajo, entretenimiento, labores del hogar...</p>
          <a href="automatizacion-rusia-2018" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/casinos.jpg" class="card-img-top" alt="Automatización e IoT en el Mundial Rusia 2018">
        <div class="card-body text-center">
          <h5 class="card-title">Casino, Tecnología en Vanguardia</h5>
          <p class="card-text text-justify">Nos podemos imaginar cómo serían los casinos sin las pantallas LED brillantes. Los casinos abrazaron completamente la tecnología de pantallas LED...</p>
          <a href="Casino-Tecnologia-en-Vanguardia" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/281/lbl1000-281.png" class="card-img-top" alt="Robots Colaborativos">
        <div class="card-body text-center">
          <h5 class="card-title">Robots Colaborativos</h5>
          <p class="card-text text-justify">Los AMR´s, conocidos como robots móviles autónomos (Autonomous Mobile Robots en inglés), son dispositivos que transportan objetos de manera autónoma...</p>
          <a href="robots-colaborativos" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Osciloscopios-Analogicas-vs-Digitales.png" class="card-img-top" alt="Osciloscopios Analógicas vs Digitales">
        <div class="card-body text-center">
          <h5 class="card-title">Osciloscopios Analógicas vs Digitales</h5>
          <p class="card-text text-justify">La tecnología va evolucionando considerablemente con el paso de los años, pero lo cierto es que incluso se siguen utilizando herramientas...</p>
          <a href="osciloscopios-analogicas-vs-digitales" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/INDUSTRIA5.0.png" class="card-img-top" alt="Industria 5.0">
        <div class="card-body text-center">
          <h5 class="card-title">Industria 5.0</h5>
          <p class="card-text text-justify">Hace ya una década que existe un movimiento global para crear configuraciones de producción inteligente y automatizada, y hacen que las...</p>
          <a href="Industria-5.0.php" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/banner-acondicionador-de-senales.png" class="card-img-top" alt="Acondicionador de Señales">
        <div class="card-body text-center">
          <h5 class="card-title">Acondicionador de Señales</h5>
          <p class="card-text text-justify">La señal de salida de la celda de carga de un sistema de medición en general se debe procesar de una forma adecuada para la siguiente etapa de la operación...</p>
          <a href="acondicionador-de-senales" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/images/banner/www/analizador-de-espectro.png" class="card-img-top" alt="Analizador de Espectro">
        <div class="card-body text-center">
          <h5 class="card-title">Analizador de Espectro</h5>
          <p class="card-text text-justify">En todos los ámbitos del estudio de la señal, hay diversos tipos de onda: periódicas, no periódicas, deterministas, etc., para poder caracterizar una onda...</p>
          <a href="analizador-espectro" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/raspberry.png" class="card-img-top" alt="Medición de Voltaje DAQ HAT para Raspberry Pi®">
        <div class="card-body text-center">
          <h5 class="card-title">Medición de Voltaje DAQ HAT para Raspberry Pi®</h5>
          <p class="card-text text-justify">En aplicaciones reales, las señales del voltaje medido son formas de onda complejas que contienen múltiples componentes de frecuencia. El análisis de sonido...</p>
          <a href="instrumento-de-medicion-voltaje" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/instrumentos-de-medicion.png" class="card-img-top" alt="Instrumentos de Medición">
        <div class="card-body text-center">
          <h5 class="card-title">Instrumentos de Medición</h5>
          <p class="card-text text-justify">Medir es un trabajo que surgió con el propósito de ordenar pertenecías como territorios, combinado con la elaboración de objetos y estructuras...</p>
          <a href="instrumento-de-medicion" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/robots-colaborativos-campo-laboral.png" class="card-img-top" alt="Robot Colaborativo - Un Complemento al Campo Laboral">
        <div class="card-body text-center">
          <h5 class="card-title">Robot Colaborativo - Un Complemento al Campo Laboral</h5>
          <p class="card-text text-justify">En el campo industrial es muy común observar el empleo de robots, que llevan a cabo tareas simples o en su caso complejas, ayudando a realizar de manera más ágil...</p>
          <a href="robots-colaborativos-campo-laboral" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/zegbee1.png" class="card-img-top" alt="Protocolo Zigbee Industrial vs Domótica">
        <div class="card-body text-center">
          <h5 class="card-title">Protocolo Zigbee Industrial vs Domótica</h5>
          <p class="card-text text-justify">Hace años atrás, las comunicaciones sin hilo estaban disponibles, pero solo se utilizaban para la transmisión de voz, y se hablan de los teléfonos inalámbricos...</p>
          <a href="protocolo-zigbee" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/images/banner/www/la-vida-util-de-los-equipos-dentro-de-una-planta-industrial.png" class="card-img-top" alt="La Vida Útil de los Equipos Dentro de una Planta Industrial">
        <div class="card-body text-center">
          <h5 class="card-title">La Vida Útil de los Equipos Dentro de una Planta Industrial</h5>
          <p class="card-text text-justify">Para una planta industrial la vida útil de los equipos empleados para las labores diarias, es de suma importancia, ya que son los principales medios con los cuales...</p>
          <a href="Vida-util-equipos" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Big-Data2.jpg" class="card-img-top" alt="¿Cómo Usar la Big Data para Expandir su Negocio?">
        <div class="card-body text-center">
          <h5 class="card-title">¿Cómo Usar la Big Data para Expandir su Negocio?</h5>
          <p class="card-text text-justify">Para entender qué significa realmente "Big Data", resulta útil conocer ciertos antecedentes históricos. Estos antecedentes datan algunos años atrás aproximadamente...</p>
          <a href="big-data" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/fuentes-de-poder-importacia.jpg" class="card-img-top" alt="Fuentes, Importancia en la Industria">
        <div class="card-body text-center">
          <h5 class="card-title">Fuentes, Importancia en la Industria</h5>
          <p class="card-text text-justify">Los aparatos electrónicos que utilizamos a diario, televisores, ordenadores, etc. se conectan a la red eléctrica a 230V de tensión en corriente alterna (C.A)...</p>
          <a href="fuentes-importancia-industria" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/control-sistemas-GSM.png" class="card-img-top" alt="Control de Sistemas GSM">
        <div class="card-body text-center">
          <h5 class="card-title">Control de Sistemas GSM</h5>
          <p class="card-text text-justify">El Sistema Global para las comunicaciones Móviles “Global System for Mobile communications”, es un sistema estándar digital inalámbrico abierto (sin propietario)...</p>
          <a href="controlador-GSM" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/limpieza-teclado.jpg" class="card-img-top" alt="Usos y Beneficios de los Teclados Industriales">
        <div class="card-body text-center">
          <h5 class="card-title">Usos y Beneficios de los Teclados Industriales</h5>
          <p class="card-text text-justify">Cuando nosotros utilizamos un ordenador, el componente de entrada, es el teclado para tener una Iteración con él, ordenando que realizar, pero si en dado caso...</p>
          <a href="beneficios-usos-teclados-industriales" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/CIUDADES-INTELIGENTES-BANNER.png" class="card-img-top" alt="Ciudades Inteligentes">
        <div class="card-body text-center">
          <h5 class="card-title">Ciudades Inteligentes</h5>
          <p class="card-text text-justify">La tecnología evoluciona exponencialmente, una de las ramas principales que ha estado creciendo, es la Automatización, teniendo ejemplos como lo son cuestiones...</p>
          <a href="Ciudades-Inteligentes" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/energia-inalambrica-BANNER.png" class="card-img-top" alt="Energía Inalámbrica: Una Tecnología Futurista que Energiza Ciudades Inteligentes">
        <div class="card-body text-center">
          <h5 class="card-title">Energía Inalámbrica: Una Tecnología Futurista que Energiza Ciudades Inteligentes</h5>
          <p class="card-text text-justify">La batería del dispositivo móvil tiene muchas demandas a suministrar: desde la toma de fotos, visualización de mapas, la ejecución de aplicaciones como...</p>
          <a href="energia-inalambrica-art" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Sistema-control-datos.png" class="card-img-top" alt="Supervisión y Gestión de Centros de Datos con InduSoft Web Studio">
        <div class="card-body text-center">
          <h5 class="card-title">Supervisión y Gestión de Centros de Datos con InduSoft Web Studio</h5>
          <p class="card-text text-justify">El centro de datos en Rusia mejora la eficiencia y la seguridad de los equipos de Tecnología de la información con el nuevo sistema de monitoreo de centros...</p>
          <a href="supervision-gestion-datos" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/sistema-monitoreo-alarma-banner.png" class="card-img-top" alt="Sistema de Alarma y Monitoreo de la Contaminación del Aire">
        <div class="card-body text-center">
          <h5 class="card-title">Sistema de Alarma y Monitoreo de la Contaminación del Aire</h5>
          <p class="card-text text-justify">Con una industria altamente desarrollada y el gran uso de energía fósil, la calidad de vida humana ha sido cambiada. El escape de los parque industriales...</p>
          <a href="Sistema-alarma-monitoreo-aire" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/adquisicion-ondas.png" class="card-img-top" alt="Adquirir una Forma de Onda Analógica con MCC DA">
        <div class="card-body text-center">
          <h5 class="card-title">Adquirir una Forma de Onda Analógica con MCC DA</h5>
          <p class="card-text text-justify">Al hablar de los sistemas de adquisición de datos, estamos refiriéndonos a los productos o procesos que se usan para recoger información para documentar...</p>
          <a href="adquirir-onda-analogica" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/sensores-calex.png" class="card-img-top" alt="UE CALOR! ¿Porqué Usar el Procesamiento Peak and Valley Hold?">
        <div class="card-body text-center">
          <h5 class="card-title">UE CALOR! ¿Porqué Usar el Procesamiento Peak and Valley Hold?</h5>
          <p class="card-text text-justify">Existen hoy en día muchos sensores de temperatura infrarrojos que tienen una función llamada Procesamiento Peak and Valley Hold...</p>
          <a href="procesamiento-peak" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/elevadores-plc.png" class="card-img-top" alt="Elevadores, Interrupción de alta velocidad">
        <div class="card-body text-center">
          <h5 class="card-title">Elevadores, Interrupción de alta velocidad</h5>
          <p class="card-text text-justify">Todos conocemos que son los ascensores o elevadores, pues bien, los ascensores son sin duda uno de los transportes que hoy en día son los más utilizados...</p>
          <a href="elevadores-plc" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/DATALOGGERS.png" class="card-img-top" alt="Advanced Datalogger (Registradores de Datos Avanzados)">
        <div class="card-body text-center">
          <h5 class="card-title">Advanced Datalogger (Registradores de Datos Avanzados)</h5>
          <p class="card-text text-justify">En uno de los artículos anteriores, se expuso acerca de los dataloggers (registradores de datos), la cual un Datalogger es un dispositivo electrónico...</p>
          <a href="smart-dataloggers" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/29/fvdesigner.png" class="card-img-top" alt="FvDesigner">
        <div class="card-body text-center">
          <h5 class="card-title">FvDesigner</h5>
          <p class="card-text text-justify">Software para programar las HMIs de Fatek...</p>
          <a href="FvDesigner" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/Produccion-industrial.png" class="card-img-top" alt="Industria 4.0 - Producción Industrial Inteligente">
        <div class="card-body text-center">
          <h5 class="card-title">Industria 4.0 - Producción Industrial Inteligente</h5>
          <p class="card-text text-justify">Con el rápido desarrollo de la red e inteligente, la estructura industrial está cambiando, el impacto de la Industria-4.0 se ha reflejado en la industria...</p>
          <a href="Industria-4.0-Produccion-industrial-inteligente.php" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/EQUIPO.jpg" class="card-img-top" alt="Equipos con Pilas de Respaldo">
        <div class="card-body text-center">
          <h5 class="card-title">Equipos con Pilas de Respaldo</h5>
          <p class="card-text text-justify">¿Qué tan grave podría ser el daño cuando ocurre una falla repentina de energía?, pondremos un escenario, imagina que estás jugando en una máquina...</p>
          <a href="equipos-con-pilas-respaldo" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/29/diagrama-de-software-fvrt.png" class="card-img-top" alt="FvRT">
        <div class="card-body text-center">
          <h5 class="card-title">FvRT</h5>
          <p class="card-text text-justify">Software SCADA de Fatek. Software para programar las HMIs de Fatek...</p>
          <a href="FvRT" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/AutomotorVsGraphtec1.jpg" class="card-img-top" alt="Automotor VS Graphtec">
        <div class="card-body text-center">
          <h5 class="card-title">Automotor VS Graphtec</h5>
          <p class="card-text text-justify">Los registradores de datos varían entre los de propósito general para una amplia gama de aplicaciones a los dispositivos de medición muy específicos ...</p>
          <a href="AutomotorVsGraphtec" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/AutomotorVSGraphtec-2.jpg" class="card-img-top" alt="Automotor VS Graphtec Art GL980 Parte 2">
        <div class="card-body text-center">
          <h5 class="card-title">Automotor VS Graphtec Art GL980 Parte 2</h5>
          <p class="card-text text-justify">Los registradores de datos varían entre los de propósito general para una amplia gama de aplicaciones a los dispositivos de medición...</p>
          <a href="AutomotorVSGraphtecArtGL980" class="btn btn-orange">Ver más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.logicbus.com.mx/imagenes/articulo/AutomotorVSGraphtec-3.jpg" class="card-img-top" alt="Automotor VS Graphtec Parte 3">
        <div class="card-body text-center">
          <h5 class="card-title">Automotor VS Graphtec Parte 3</h5>
          <p class="card-text text-justify">Los registradores de datos varían entre los de propósito general para una amplia gama de aplicaciones a los dispositivos de medición muy específicos...</p>
          <a href="AutomotorVSGraphtecParte3" class="btn btn-orange">Ver más</a>
        </div>
      </div>
    </div>
  </section>
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $popper_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>