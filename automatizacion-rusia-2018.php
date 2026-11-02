<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>

  <title>Automatización e IoT en el Mundial Rusia 2018 - Logicbus S.A de C.V.</title>
  <meta name="description" content="La tecnología avanza de manera cada vez más rápida, abarcando diferentes áreas del quehacer humano como el trabajo, entretenimiento, labores del hogar, entre otras, y el deporte no está exento de esta transformación. ...">

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
            <li class="breadcrumb-item active" aria-current="page">Automatización e IoT en el Mundial Rusia 2018</li>
          </ol>
        </nav>
        <div class="griditemContA paragraph text-justify">
          <h1 class="title blue">Automatización e IoT en el Mundial Rusia 2018</h1>
          <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Auto-iot-mundial.png" class="image_productos" width="40%" alt="Automatización e IoT en el Mundial Rusia 2018" title="Automatización e IoT en el Mundial Rusia 2018"></center>
          <p class="mt-5"><b>Resumen:</b> El presente artículo se expondrá acerca del mundial que se está despuntando en Rusia 2018, hablaremos como el internet de las cosas ha llegado al futbol, como ha crecido la tecnología para los estadios y partidos de la justa mundialista, se mencionará las tecnologías al utilizar en cada juego, tecnología para la seguridad, tecnología en el balón oficial y de los estadios inteligentes.</p>
        </div>
      </div>
    </div>
    <div class="container paragraph text-justify">
      <h2 class="subtitle blue text-center my-5">Introducción</h2>
      <p>La tecnología avanza de manera cada vez más rápida, abarcando diferentes áreas del quehacer humano como el trabajo, entretenimiento, labores del hogar, entre otras, y el deporte no está exento de esta transformación.</p>
      <p>Además de ser el evento deportivo más esperado y con mayor audiencia a nivel global, la copa del mundo de futbol, que se realiza cada 4 años en un país diferente, es una de las grandes oportunidades para que el país anfitrión, con el apoyo de empresas, exhiba aquellos adelantos que crecientemente, serán adoptados por los consumidores, por esta razón, el mundial de Rusia 2018 será el que brinde una mayor evolución tecnológica.</p>
      <p>El futbol es uno de los deportes que más ha evolucionado gracias a la tecnología: desde los balones y camisetas hasta transmisiones y tecnología arbitral.</p>
      <p>En este artículo estaremos mencionando como el deporte y la tecnología es una de las fórmulas más exitosas que van agarrados de la mano desde los últimos años, con el uso de las tecnologías del Árbitro asistente de video (VAR), las redes celular 5G, los estadios inteligentes, entre otras tecnologías.</p>
      <h2 class="subtitle blue text-center my-5">IoT en el futbol</h2>
      <p>El futbol es uno de los deportes que por la necesidad de validar las jugadas y/o movimientos de los jugadores, requiere de una precisión más exacta, con ayuda de la tendencia IoT se puede lograr.</p>
      <p>Poco a poco el futbol está evolucionando gracias a la tecnología, el IoT en el deporte cada vez tiene mayor protagonismo y el futbol lo está integrando en el día a día.</p>
      <p>Con el tiempo, las tecnologías se están utilizando en estadios de nueva construcción como por ejemplo el nuevo estadio de futbol del Totheham, y por esa razón, el internet de las cosas ya se está utilizando en las ligas de futbol, como por ejemplo, la mexicana, la alemana, la inglesa, entre otras. Gracias al internet de las cosas ha llegado las nuevas tecnologías a Rusia, y con el uso de la tecnología, el mundial de Rusia será la primera en utilizar los siguientes prototipos:</p>
      <p class="med">Fan ID</p>
      <p>El Fan ID es un documento de identidad aprobado por la FIFA y emitido por las autoridades rusas, está integrado por un chip que permite reconocer fácilmente a los usuarios. Este Gafete está permitido a la entrada de extranjeros sin visa al país solo que tengan entradas a los partidos de la copa del mundo.</p>
      <p>Es obligatorio y es válido para ingresar y permanecer en el país 10 días antes del evento inaugural hasta 10 días después del último encuentro mundialista.</p>
      <p>Las autoridades rusas a través del Fan ID, obtienen información de los usuarios en tiempo real, y son controlados para la seguridad total del país, una de las ventajas de su uso, es que puede utilizar gratis los medios de transportes públicos en los días de los partidos de la copa del mundo.</p>
      <p class="med">Balón oficial inteligente Telstar 18</p>
      <p>Una de las marcas más reconocidas a nivel mundial es Adidas, estos crearon un balón inteligente para la justa mundialista, el balón Telstar 18. Esta tecnología permite a un Smartphone o cualquier dispositivo inteligente interactuar con el balón si necesidad de descargar alguna aplicación específica. Para esta nueva generación de futbolistas modernos, Adidas también le integró un sensor de comunicación de campo cercano (NFC), NFC es un protocolo de comunicación cercana, donde el dispositivo con dicho protocolo tiene que estar a 4 centímetros o menos de la distancia del balón para poder comunicarse.</p>
      <p>Acercando el Smartphone al balón tendrá el acceso a la experiencia Telstar 18, ya que obtendremos información vinculada con la ubicación del usuario así como varios desafíos para hacer con el balón. El balón Telstar 18 solamente te muestra la información de la ficha técnica del producto.</p>
      <p>El chip que tiene instalado el balón Telstar 18 no está diseñado para guardar datos de telemetría del balón, tampoco se podrá medir la distancia, velocidad, la intensidad de golpeo, o su posición en el campo. Esto quiere decir que esta tecnología NFC no se usará para mejorar la forma de jugar de los deportistas, auxiliar a los árbitros en la toma de decisiones, o proveer estadísticas interesantes que pueden ser usados durante la transmisión de los partidos.</p>
      <p class="med">VAR (Árbitro asistente de video)</p>
      <p>Hasta ahora, en el mundial de futbol, todo el arbitraje quedaba en manos de los árbitros, el Mundial 2018, será el primero en contra con videoarbitraje, más conocido como VAR. Esto no se trata de un robot que arbitra, sino un conjunto de cámaras y ordenadores que captan muchos ángulos en una jugada.</p>
      <h2 class="subtitle blue text-center my-5">Estadios Inteligentes</h2>
      <p>Son muchos los avances tecnológicos que cualquier fanático y turista puede encontrar en los 12 estadios que tendrá esta justa mundialista.</p>
      <p>Podemos mencionar de ejemplos de usos tecnológicos en los estadios, por ejemplo el ojo de halcón, que está compuesta por una red de cámaras de alta resolución situados en diversos puntos del estadio, que siguen la trayectoria del balón en todo momento, todos los datos registrados por el sistema, son analizados desde una base de datos que envía una señal al reloj del árbitro cuando el balón ha sobrepasado la línea de gol.</p>
      <p>La inteligencia de los estadios empieza desde la construcción y planificación. Cuenta por lo tanto, con una arquitectura también inteligente que hace que se elijan materiales respetuosos con el medio ambiente y su uso sea transformable.</p>
      <p>Los sistemas de climatización también están controlados de forma inteligente para conseguir la eficiencia perfecta, por ejemplo, el hermoso estadio de san Petersburgo conocida como Estadio Krestovsky, que fue diseñado por el arquitecto japonés Kisho Kurokawa, este estadio que se asemeja a un velero blanco, contiene un techo retráctil con estructura de membrana inflada con aire caliente para derretir la nieve en el invierno y controla un sistema de campo deslizante para mantener el césped fresco, y es el estado más sustentable en Rusia, y otra de sus características tecnológicas es sus sistema de climatización conocida como HVAC (Ventilación, calefacción y aire acondicionado) el cual mantiene una temperatura interior constante de 15°C, en una ciudad que en temporada de invierno alcanza una temperatura de los 10°C.</p>
      <h2 class="subtitle blue text-center my-5">Conclusiones</h2>
      <p>El uso de la tecnología ha penetrado en casi todos los aspectos de la vida cotidiana, entre ellos, el deporte, y más específicamente el fútbol, que está de moda desde años atrás. Con esto, más allá de ser un deporte de 11 contra 11, el balompié también se convierte en una lucha en la que la tecnología juega un papel fundamental al momento de analizar el funcionamiento del propio equipo, de definir el entrenamiento y de escoger a los jugadores más competitivos.</p>
      <p>El Mundial de Fútbol Rusia 2018 ha implementado muchos avances tecnológicos para facilitar la vida a todos. Los jugadores, los árbitros y más importante aún los fanáticos, resultaran beneficiados de los cambios que se verán en este mundial. Aun así sólo queda esperar como acaba la inclusión de toda esta tecnología en un torneo del que se tiene grandes expectativas.</p>
      <p class="text-center blue"><a class="link-orange" href="https://www.logicbus.com.mx/pdf/articulos/Mundial-Rusia-2018.pdf" target="_blank" title="Automatización e IoT en el Mundial Rusia 2018" alt="Automatización e IoT en el Mundial Rusia 2018">Leer Artículo Completo</a></p>
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