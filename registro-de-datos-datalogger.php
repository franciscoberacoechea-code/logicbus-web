<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Registro de Datos: Datalogger - Logicbus S.A de C.V.</title>
  <meta name="description" content="(Un Datalogger es un dispositivo electrónico que hace registrar mediciones ordenadas en el tiempo, que viene proveniente de diferentes sensores. Cada una de las mediciones son almacenados en una memoria, junto con su hora y fecha ...">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="datalogger, registro de datos, temperatura, humedad, industria, webDAQ.">
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
            <li class="breadcrumb-item active" aria-current="page">Datalogger</li>
          </ol>
        </nav>
        <div class="griditemContA paragraph text-justify">
          <h1 class="title blue">Datalogger</h1>
          <center><img src="https://www.logicbus.com.mx/imagenes/articulo/WebDAQ-504_500.jpg" class="image_productos" width="300px" alt="Visión artificial" title="Visión artificial"></center>
          <p class="mt-5"><b>Resumen:</b> El presente artículo explica lo que es un Datalogger o un registrador de datos, el uso y un ejemplo de cómo se puede controlar mediante aplicaciones móviles utilizando Android como lenguaje de programación.</p>
        </div>
      </div>
    </div>
    <div class="container text-justify paragraph">
      <h2 class="subtitle blue text-center my-5">Introducción</h2>
      <p> A medida que ha evolucionado la tecnología se han creado necesidades para ir midiendo y controlando actividades, tales como el medio ambiente, de seguridad, de confort, entre otros.</p>
      <p>En el afán de registrar los eventos se pueden generar equipos que guarden los valores en determinados periodos, dando lugar a la creación de los Datalogger, los cuales, dependiendo para lo que son diseñados, pueden registrar temperatura, humedad, presión, voltaje, etc.</p>
      <p>En lo sucesivo, estaremos abordando algunos equipos de la marca "Measurement Computing", desde equipos de control remoto, acceso mediante una conexión inalámbrica, así como entradas análogas y/o digitales.</p>
      <h2 class="subtitle blue text-center my-5">Datalogger y sus variantes</h2>
      <p>Un Datalogger es un dispositivo electrónico que hace registrar mediciones ordenadas en el tiempo, que viene proveniente de diferentes sensores. Cada una de las mediciones son almacenados en una memoria, junto con su hora y fecha, estos son pequeños, se atraen con baterías y están formados por un microcontrolador, una memoria para acumulación de los datos y diferentes sensores, y la gran mayoría utilizan la pc como interfaz para sistematizar al dispositivo y consultar la información recogida.</p>
      <p>El primordial beneficio del uso de los registradores es el saber para recopilar datos automáticamente durante las 24 horas del día. Tras haberse activado, los registradores de datos normalmente se dejan sin supervisión para poder medir y registrar los datos durante todo el tiempo del periodo de seguimiento, ya que esto permite ver una visión global y precisa en las condiciones del ambiente, tales como por ejemplo, la temperatura del aire y la humedad.</p>
      <p>El Datalogger es una herramienta valiosa para cualquier persona que quiera monitorear continuamente las condiciones sin tener que estar en el sitio. Los consultores ambientales, administradores de edificios, los auditores de energía, científicos investigadores y muchos profesionales confían en los registradores de datos debido a su bajo costo, facilidad de uso, por la seguridad y los datos de fecha y hora.</p>
      <p>Un ejemplo simple es el proceso de medir la temperatura en una habitación como un valor digital usando un sensor. Los sistemas modernos de adquisición de datos pueden incluir la adición de software de informes y análisis de datos, conectividad de red y opciones de control remoto y monitoreo.</p>
      <p>Todos los sistemas de adquisición de datos constan de tres elementos esenciales: sensor, acondicionamiento de señal y convertidor analógico a digital (ADC).</p>
      <h2 class="subtitle blue text-center my-5">Uso Datalogger en la industria</h2>
      <p>En los últimos años, el desarrollo industrial va creciendo de manera exponencial a un ritmo impresionante. Esto ha permitido la realización de instrumentos que permitirán mejorar la serie de pasos de producción, reduciendo gastos, las perdidas y mejorando la productividad obteniendo una buena calidad. Este desarrollo no solamente se usa en el mundo industrial, también es utilizado en el campo, la ganadería, e incluso en el cuidado de materiales que se ha visto beneficiado por estas herramientas, que entre otras cosas son utilizadas para la medición de humedad y temperatura.</p>
      <p>En el mundo industrial, las herramientas de medición son fundamentales, pues la serie de pasos de producción, almacenamiento y la de transportación debe de ser muy preciso. Entre muchas herramientas utilizadas, una de las más importantes es el DATALOGGER, los registros de datos es muy útil en la industria, pues es capaz de recolectar datos específicos de diversas fuentes que le permita analizar todas y cada una de las posibles situaciones que puedan existir dentro de una empresa.</p>
      <p>Se puede dar mención de que los registradores de datos con sensores de temperatura por ejemplo, son implementados en muchas de las industrias especialmente en producciones y almacenamiento de alimentos, pues dentro de ese sector se requiere un control exacto para las temperaturas, ya que si no cuidan ese factor alimenticio, es probable que inicie su proceso natural de descomposición.</p>
      <p>Hasta el día de hoy, hay muchas empresas que se han dedicado a la fabricación de registradores de datos, aunque sus procesos de calidad es de muy baja, situación que hace reducir la vida útil del producto y puede generar pérdidas en las empresas.</p>
      <h2 class="subtitle blue text-center my-5">Productos datalogger - WebDAQ</h2>
      <p>Los Datalogger se registran por el uso de interfaz de comunicación que es utilizado para acoplarse a los requisitos variantes de las diversas industrias en donde son aplicados. Existen tres tips de interfaz de comunicación, una de las más utilizadas en la industria son las de USB, debido a que es compatible para todas las computadoras por el tipo de entrada e incluye un puerto para su conexión, por otro lado se encuentran lo que utilizan WIFI, como interfaz son de las más utilizadas diariamente, una de sus desventajas es que para su operación dependerá del uso de un modem, y por último se encuentran las gamas de registradores de datos inalámbricos, estos utilizan ondas de radio y otro tipo de frecuencia o conexión que es de gran utilidad para la comunicación.</p>
      <p>En la empresa logicbus, cuenta con productos diseñados por la marca "Measurement Computing", que ha sido de gran utilidad para el almacenamiento de datos y monitoreo de variables ambientales, existe una familia datalogger recomendada, se trata de la familia WebDAQ, El registrador de datos habilitado para internet WebDAQ ofreció una solución que les permite realizar las medidas que necesitan a través de una interfaz web simple que podría ser monitoreada y configurada desde cualquier dispositivo conectado a la misma red. Podrían configurar el dispositivo en el sitio de un cliente, luego monitorear las mediciones y ajustar la configuración de prueba desde su oficina en casa conectándose a la red del cliente. Además, WebDAQ es una solución industrial robusta con fiabilidad garantizada, a diferencia del pequeño dispositivo Bluetooth que usaban anteriormente, que duraría un máximo de 3 años antes de necesitar ser reemplazado. Y, según la aplicación, podrían conectar diferentes sensores al dispositivo, eliminando la restricción previa de un acelerómetro incorporado. Una de las mejores características de WebDAQ es que puede acceder a la interfaz en un dispositivo móvil, como un teléfono o una tableta.</p>
      <p>Los dos primeros dispositivos de esta serie son el WebDAQ 316, un registrador de datos de temperatura de alta resolución, y el WebDAQ 504, un registrador de datos de vibración y acústico para la medición directa de sensores IEPE.</p>
      <p>El WebDAQ 316 es un registrador de temperatura autónomo y el WebDAQ 504 es un registrador acústico y de vibración autónomo diseñados para monitoreo y control remoto. Toda la inteligencia está integrada en WebDAQ, eliminando la necesidad de una PC o software adicional. Al utilizar el servidor web WebDAQ incorporado, los usuarios pueden configurar fácilmente aplicaciones simples o sofisticadas, registrar datos de temperatura, actualizar salidas digitales y enviar notificaciones en función de las condiciones de alarma, y ver datos en tiempo real desde cualquier ubicación y cualquier dispositivo con un navegador web.</p>
      <center>
        <strong>The WebDAQ 316 y The WebDAQ 504</strong><br>
        <a href="https://tienda.logicbus.com.mx/WebDAQ-316_p_14100.html"><img src="https://www.logicbus.com.mx/assets/images/01/WebDAQ-316.jpg" alt="WebDAQ-316" title="WebDAQ-316" width="30%" class="image_productos"></a>
        <a href="https://tienda.logicbus.com.mx/WebDAQ-504_p_14101.html"><img src="https://www.logicbus.com.mx/assets/images/01/WebDAQ-504.jpg" alt="WebDAQ-504" title="WebDAQ-504" width="30%" class="image_productos"></a>
      </center>
      <h2 class="subtitle blue text-center my-5">Conclusiones</h2>
      <p>Los registradores de datos están cambiando más rápido ahora que nunca. El modelo original de un registrador de datos autónomo está cambiando a uno de un dispositivo que recopila datos pero también tiene acceso a comunicaciones inalámbricas para la alarma de eventos, informes automáticos de datos y control remoto. Los registradores de datos están empezando a servir páginas web para las lecturas actuales, enviar sus alarmas por correo electrónico y enviar sus resultados diarios por FTP a bases de datos, utilizando los dispositivos móviles o directamente a los usuarios.</p>
      <p>Con el avance tecnológico, Un registrador de datos puede ser un dispositivo independiente de una sola unidad que cabe en la palma de la mano, o puede ser un instrumento de recolección de datos multicanal equipado con uno o más sensores externos.</p>
      <p>Con los años, el registrador de datos se ha convertido en una ayuda indispensable en el control del transporte. Más allá de la industria del transporte, por ejemplo para fluidos o materiales peligrosos de todo tipo, el registrador desempeña una función esencial en los procedimientos de medición y prueba en la industria, donde los sensores más pequeños en superficies de pocos centímetros cuadrados pueden registrar y almacenar una variedad de valores físicos.</p>
      <p class="text-center blue"><a class="link-orange" href="pdf/articulos/11Datalogger.pdf" target="_blank" title="Datalogger" alt="Datalogger">Leer Artículo Completo</a></p>
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