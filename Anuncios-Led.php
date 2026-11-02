<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Anuncios Led - Logicbus S.A de C.V.</title>
  <link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
  <meta name="description" content="La tecnología se mantiene en constante cambio, con frecuencia nos ofrece mejores herramientas para nuestro uso. El lenguaje verbal siempre será el mismo, cuando nos comunicamos habrá un emisor, un mensaje y un receptor ...">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="Pantallas Led, Display Led, Led Industrial, Tecnología Led, Ikan, Icpdas, Logicbus, Bus LED Display, Modbus, ASCII, Ikan-116, led display estacionamiento.">

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
            <li class="breadcrumb-item active" aria-current="page">Anuncios LED</li>
          </ol>
        </nav>
        <div class="griditemContA paragraph text-justify">
          <h1 class="title blue">Anuncios LED</h1>
          <center><img src="https://www.logicbus.com.mx/imagenes/articulo/display-led.jpg" class="image_productos" width="60%" alt="Anuncios Led" title="Anuncios Led"></center>
          <p class="mt-5"><b>Resumen:</b> En este artículo nos enfocaremos acerca de los anuncios publicitarios que son mostrados en LED's industriales con uno de los protocolos de comunicación ModBus, con la cual hablaremos de diferentes productos de la marca ICPDAS que ofrece la empresa Logicbus para presentar mensajes en diferentes áreas del mundo industrial, estos productos pertenecen a la familia de pantallas LED iKAN.</p>
        </div>
      </div>
    </div>
    <div class="container paragraph text-justify">
      <h2 class="subtitle blue text-center my-5">Introducción</h2>
      <p>La tecnología se mantiene en constante cambio, con frecuencia nos ofrece mejores herramientas para nuestro uso. El lenguaje verbal siempre será el mismo, cuando nos comunicamos habrá un emisor, un mensaje y un receptor. No obstante, la forma en cómo se transmite el mensaje se ha modernizado. Las palabras siguen siendo esenciales, pero hay nuevos elementos que complementan ese mensaje, y lo más importante, los medios para transmitir ese mensaje.</p>
      <p>Hoy en día, es común ver, cuando vamos por las vías públicas, pantallas LED industriales que transmiten mensajes constantemente, ya que estas pantallas son un medio impactante y muy práctico para comunicar información y mensajes industriales. Su uso ha impactado hoy en día, ya que al utilizarlo comunica información en tiempo real y capta la atención del público en general hacia determinados sectores. Estas pantallas, a través de gráficos y textos, permiten visualizar cualquier tipo de información como por ejemplo, ofertas, horarios, seguridad industrial o datos de contacto. Son adecuados para las salas de espera, estaciones de autobuses entre otros sectores comerciales y empresas.</p>
      <h2 class="subtitle blue text-center my-5">Display LED industrial</h2>
      <p>Los tableros industriales de LED's, también se les conoce como Display Led Industrial, es el instrumento perfecto para la visualización y control de tareas enfocadas a las producciones. Obtener un indicador que emplee tecnología LED para el monitoreo de actividades como por ejemplo, el análisis y el control de lo que se puede fabricar en una empresa, medición de trabajo, control de producción e inventarios, entre otros, estos puntos le será de gran utilidad para operar eficientemente en el menor tiempo necesario.</p>
      <p>A través del uso de estas pantallas con la tecnología LED, se aumenta la productividad y los registros, también son utilizados para el control de la seguridad del trabajo el control de los indicadores industriales en tecnología de led se puede utilizar para todas las interfaces estándar y sistema de bus de campo, esto asegura la integración en casi cualquier red de automatización industrial.</p>
      <p>Podemos mencionar algunos ejemplos del uso de los display Led Industrial:</p>
      <p class="med">A. Bus LED Display</p>
      <p>LED Display para autobuses de alta luminancia para exterior. Están diseñados para facilitar información sobre el nº de la línea a que corresponde el transporte, el trayecto, destino y cualquier otro tipo de dato en forma alfanumérica.</p>
      <p class="med">B. LED Display de llegadas y salidas ferrocarril</p>
      <p>El Led Display de llegadas y salidas muestra de forma resumida la información de las llegadas y salidas de los trenes en un gran display a LED fácilmente legible. Comparado con otros sistemas electromecánicos convencionales, este displays a LED garantiza una legibilidad máxima y un mínimo mantenimiento.</p>
      <p class="med">C. LED Display de estacionamiento interiores y exteriores</p>
      <p>El sistema de guía para el estacionamiento es una red de displays emplazados por toda la ciudad para guiar a los conductores a los aparcamientos públicos más cercanos con espacios abiertos. El sistema permite a los conductores encontrar rápidamente un aparcamiento, mejorando la fluidez del tráfico y reduciendo el nivel de emisiones de escape de los coches. El display recibe información actualizada de los aparcamientos a través de un controlador central.</p>
      <h2 class="subtitle blue text-center my-5">Pantalla LED iKAN industrial Modbus</h2>
      <p>La serie iKAN de la marca ICPDAS, es una familia de dispositivos de visualización LED Modbus industriales que ofrecen capacidades antirruido de grado industrial, así como confiabilidad y estabilidad. Los caracteres ASCII y los caracteres Unicode, que se pueden usar para mostrar varios idiomas, son compatibles para la presentación de mensajes formateados.</p>
      <p>Se proporciona soporte para el popular protocolo industrial Modbus, lo que significa que los dispositivos de visualización iKAN se pueden integrar fácilmente en entornos PLC y SCADA existentes. La serie iKAN permite que los datos escritos desde una PC o un PLC se muestren en un mensaje formateado en tiempo real.</p>
      <p>Los mensajes se pueden editar utilizando un navegador web estándar, como Google Chrome, Firefox o IE, etc., en una PC, dispositivo móvil o teléfono inteligente sin limitaciones relacionadas con herramientas o programas de control específicos.</p>
      <p>Un ejemplo para el uso de uno de los productos de ADLINK que la empresa Logicbus proporciona es la iKAN-116, este producto puede emplearse como una HMI grande con un almacenamiento de memoria de hasta 64 mensajes comunes y 10 mensajes instantáneos, cada uno de los cuales puede usarse para mostrar información generada por un PLC, cuenta con 7 colores para el texto, ya que con estos colores puede usarse para indicar advertencias o alarmas. La mayoría de los dispositivos utilizados en el campo industrial son compatibles con el protocolo Modbus. La pantalla iKAN también es compatible con el protocolo Modbus TCP / Modbus RTU, que reduce la curva de aprendizaje requerida al usar por primera vez la pantalla iKAN, y garantiza una fácil integración de la pantalla en un sistema nuevo o existente.</p>
      <h2 class="subtitle blue text-center my-5">Conclusión</h2>
      <p>El desarrollo de las tecnologías de la información y comunicación (TIC), y su implementación en los procesos productivos trajo aparejado la incorporación de tecnología led. Todos los sectores industriales se vieron beneficiados con los dispositivos led. Actualmente se emplean en luminarias de áreas comerciales, oficinas, despachos, almacenes, líneas de producción, zona de carga y en el perímetro de fábricas y empresas. La maquinaria moderna utiliza monitores led para controlar la marcha y los dispositivos asociados a la cadena de montaje. Los operarios disponen de pantallas led para consultar planos y toda la información del proceso de fabricación. Es muy común observar pantallas led en salas de espera, aeropuertos, farmacias, gasolineras, cajeros automáticos y supermercados. Estos monitores led son para uso profesional y tienen características diferentes de las utilizadas en el hogar. Son diseñados para funcionar de forma ininterrumpida durante muchas horas y en condiciones extremas. Muchos entornos laborales requieren de pantallas led profesionales, que proporcionen imágenes muy nítidas de alta resolución, a pleno sol, con viento, lluvia o nieve. Es el caso de los monitores utilizados en pistas de aeropuertos o en aplicaciones militares.</p>
      <p class="text-center blue"><a class="link-orange" href="https://www.logicbus.com.mx/pdf/articulos/Anuncios-Led.pdf" target="_blank" title="Registradores, el reto del almacenamiento" alt="Registradores, el reto del almacenamiento">Leer Artículo Completo</a></p>
      <h2 class="subtitle blue text-center my-5">Productos relacionados</h2>
      <div class="card-deck text-center justify-content-center flex-wrap">
        <div class="card bg-light" style="max-width: 40vh;">
          <img src="https://www.logicbus.com.mx/assets/images/iKAN-116.jpg" class="card-img-top" alt="iKAN-116">
          <div class="card-body">
            <h5 class="card-title med">iKAN-116</h5>
            <p class="card-text text-justify">Pantalla LED industrial Modbus con interfaz de usuario basada en web y RTC integrado. Soporta protocolos Modbus TCP Slave y Modbus RTU Slave. Se puede controlar de forma remota utilizando un dispositivo móvil. Admite 16 caracteres ASCII y 8 caracteres Uniccode.</p>
            <a href="https://tienda.logicbus.com.mx/iKAN-116_p_16914.html" target="_blank" class="btn btn-orange">Ver producto</a>
          </div>
        </div>

        <div class="card bg-light" style="max-width: 40vh;">
          <img src="https://www.logicbus.com.mx/imagenes/articulo/DL-302a.jpg" class="card-img-top" alt="DL-302">
          <div class="card-body">
            <h5 class="card-title med">DL-302</h5>
            <p class="card-text text-justify">Registrador de datos de CO2, temperatura y humedad con pantalla táctil.</p>
            <a href="https://tienda.logicbus.com.mx/DL-302_p_13836.html" target="_blank" class="btn btn-orange">Ver producto</a>
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