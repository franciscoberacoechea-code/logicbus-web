<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Como usar la Big Data para expandir su negocio - Logicbus S.A de C.V.</title>
  <meta name="description" content="En cuanto a la definición del Big Data no existe un estándar  sin embrago se puede hacer referencia como una colección de datos grande, complejos, muy difícil de procesar a través de herramientas de Gestión y procesamiento de datos tradicionales."><!-- Descripcion delo tema -->
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="bigdata,bases de datos, domotica, algoritmos,tendencias, 2018, modelo, normalización, adquisicion, datos. IEE802.15.4, MCC,logicbus">
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
            <li class="breadcrumb-item active" aria-current="page">¿Cómo usar la Big Data para expandir su negocio?</li>
          </ol>
        </nav>
        <h1 class="title blue">¿Cómo usar la Big Data para expandir su negocio?</h1>

        <center><img src="https://www.logicbus.com.mx/imagenes/articulo/bigdata.png" class="image_productos" width="45%" alt="¿Cómo usar la Big Data para expandir su negocio?" title="¿Cómo usar la Big Data para expandir su negocio?"></center>
      </div>
    </div>
    <div class="container text-justify paragraph">
      <h2 class="subtitle blue text-center mt-5 mb-3">Introducción</h2>
      <p>Para entender qué significa realmente "Big Data", resulta útil conocer ciertos antecedentes históricos. Estos antecedentes datan algunos años atrás aproximadamente en los años setenta y principios de los ochenta el funcionamiento de los negocios era con base en el uso de informes de mercado quincenales de ACNielsen. En donde se podía observar datos de la competencia y mercado por ejemplo: promociones, publicidad, gastos, estrategias, planes y gastos. Tiempo después, Information Inc. (IRI) ofreció instalar escáneres gratuitos en puntos de ventas (POS) en ubicaciones minoristas a cambio de datos residuales del escáner. Este intercambio favoreció en gran mayoría a los minoristas debido a que la mano de obra tiene un mayor coste a diferencia del coste del valor de los datos de escáneres de POS. Los cuales se consideraban Big Data en ese momento, provocando un gran cambio en el mundo tecnológico.</p>
      <p>Estos datos se fueron incrementando, pasando de megabytes a terabytes, por lo que se surgió la necesidad de plataformas de almacenamiento y servidores. Estos equipos se trataran a detalle más adelante, así como las aplicaciones que tiene hoy en día.</p>
      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Big-Data2.jpg" class="image_productos" width="40%" alt="Figura 1. Imagen ilustrativa de conceptualización del Big Data." title="Figura 1. Imagen ilustrativa de conceptualización del Big Data."></center>
      <p class="text-center"><b>Figura 1. Imagen ilustrativa de conceptualización del Big Data.</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3">¿Qué es el Big Data?</h2>
      <p>En cuanto a la definición del Big Data no existe un estándar sin embrago se puede hacer referencia como una colección de datos grande, complejos, muy difícil de procesar a través de herramientas de Gestión y procesamiento de datos tradicionales. Otra definición provisional es el Big Data como datos cuyo volumen, diversidad y complejidad requieren nueva arquitectura, técnicas, algoritmos y análisis para gestionar y extraer valor y conocimiento oculto en ellos. También en el 2011 Manyika J. junto con otros investigadores definen Big Data como el conjunto de datos cuyo tamaño va más allá de la capacidad de captura, almacenado, gestión y análisis de las herramientas de base de datos.</p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Importancia del Big Data</h2>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/bigdata-01.JPG" class="image_productos" width="40%" alt="Figura 2. Características de importancia del Big Data" title="Figura 2. Características de importancia del Big Data"></center>
      <p class="text-center"><b>Figura 2. Características de importancia del Big Data</b></p>

      <p>Una base de datos es un conjunto de datos interrelacionados. Cuando se habla de base de datos relacional se hace referencia a la teoría del modelo de datos relacional obra del investigador de IBM Edgar Codd en 1970 y que goza de una fuerte base matemática. El modelo relacional se caracteriza a muy grandes rasgos por disponer que toda la información que debe de estar contenida en tablas, y las relaciones entre datos deben ser representadas explícitamente de ese mismo modo. Lo que se consigue con este modelo es trabajar siempre sobre tablas relacionadas entre sí. Evitando duplicidad de registros y garantizando la integridad referencial, es decir, que si se elimina un registro, se eliminan todos los relacionados. El gran inconveniente que presenta es el tiempo necesario para manejar grandes cantidades de datos, pero esto se logra gracias al Big Data.</p>
      <p>Por otro lado lo que se consigue al trabajar con bases de datos es combinar diferentes tipos de datos y de una manera formalizada. Por lo tanto las ventajas de una base de datos relacional se podrían definir en:</p>
      <ul>
        <li>Integridad referencial (sin duplicidad...)</li>
        <li>Normalización (surgen estándar SQL...)</li>
        <li>Permite establecer roles (permisos de entradas a tablas)</li>
      </ul>
      <h2 class="subtitle blue text-center mt-5 mb-3">Tratamiento del Big Data</h2>

      <p>Como se ha venido comentando, el tratamiento de Big Data ha exigido el desarrollo de soluciones computacionales que permitan afrontar las necesidades y retos que traen consigo los grandes volúmenes de datos, su variedad de fuentes y la velocidad con que se generan. A continuación, se da una breve descripción de algunas tecnologías y técnicas de Big Data, los artículos referenciados en esta sección comprenden algunos de los documentos “ramas” encontrados en la exploración con la herramienta ToS, otros hacen parte de la búsqueda inicial en Scopus y otros son fuentes adicionales consultadas por los autores para ampliar el tema y cubrir el objetivo de brindar una visión del estado del arte referente a la temática abordada</p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Beneficios del Big Data</h2>
      <p>Gestión del cambio:</p>
      <ul>
        <li>Búsqueda de nuevas oportunidades de negocio través de segmentación mejorada y venta cruzada de productos (mejora de la estrategia).</li>
        <li>Mediante la aplicación de análisis y modelado predictivo a los datos de cuentas de clientes e historial de transacción, la solución permite a los agentes llevar a cabo una segmentación basada en la probabilidad de que el cliente contrate servicios o productos complementarios, o contratar servicios de mayor valor (mejora de segmentación).</li>
        <li>Mediante el análisis de consumo de los servicios y productos de los clientes, la empresa puede optimizar las estrategias de venta cruzada, afinar mensajes de marketing y proporcionar ofertas específicas. Se puede predecir con mayor exactitud qué productos son los más apropiados para cada cliente (mejora de la estrategia).</li>
        <li>Ofrecer la combinación adecuada de servicios y productos mejora la eficacia y la eficiencia de la fuerza de ventas de la compañía, mientras que el toque más personalizado ayuda a los agentes a forjar lazos más estrechos con clientes, lo cual mejora la lealtad (mejora de la estrategia).</li>
        <li>Mejoras Operativas: Mayor capacidad de visibilidad del negocio a través de informes más detallados.</li>
        <li>Análisis de navegación web y hábitos de consumo online:</li>
        <li>Análisis de Redes Sociales: Determinar los círculos sociales de los clientes a partir de interacciones telefónicas y redes sociales online genera una visión completa de los clientes, identificando el papel que desempeñan en sus círculos y su grado de influencia.</li>
        <li>Marketing Viral (marketing que explota redes sociales…): Detecta clientes más influyentes, roles sociales… para maximizar la difusión de tus productos y servicios (mejor conocimiento de clientes y del mercado en redes sociales).</li>
        <li>Análisis de datos de navegación: Analiza la navegación Web y hábitos de consumo online: extrae nuevas y valiosas perspectivas de los clientes. Se identifica al usuario (localización, estado del terminal, servicios de acceso), se monitorizan sitios y búsquedas por palabra, urls visitadas, tiempo de navegación, etc. (mejor conocimiento del cliente).</li>
        <li>Cuadro de Mandos en tiempo real, la información siempre está disponible sin esperas de actualización de los datos (información en tiempo real).</li>
        <li>Anticipación a los problemas:Un sistema predictivo de análisis y cruce de datos nos permite poder anticiparnos a posibles problemas que puede surgir en el futuro, como por ejemplo una predicción de riesgo de catástrofes que permitiría ajustar la política de precios y aprovisionar fondos para posibles pagos (utilidad para ver la veracidad de los datos ante datos imprecisos) .</li>
        <li>Mejoras de Procesos:Permite la simplificación de procesos actuales y control del negocio (reducción de costes).</li>
        <li>Análisis de Seguridad. Analítica proactiva que permite la reducción de riesgos y pérdidas frente a fraudes (reducción de costes).</li>
        <li>Permite detectar patrones complejos de fraude en tiempo real analizando los datos históricos, el patrón de uso de información de geolocalización, análisis de transacciones y operaciones sospechosas (reducción de costes).</li>
        <li>Soporte a la toma de decisiones a través de algoritmos automáticos. </li>
        <li>Una analítica sofisticada que analice todos los informes y datos, ayuda a la toma de decisiones, reduciendo los riesgos y descubre información que antes podría estar oculta, pero a la vez importante (ayuda a la toma de decisiones).</li>
        <li>Reducción de costes.</li>
        <li>Reducción de tiempos.</li>
        <li>Desarrollo de nuevos productos.</li>
        <li>Ofertas optimizadas y personalizadas.</li>
        <li>Tomas de decisiones más inteligentes que con los anteriores sistemas Business Intelligence. • Filtros inteligentes de seguridad en el negocio electrónico</li>
      </ul>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/bigdata-03.jpg" class="image_productos" width="40%" alt="Figura 3.  Fotografía del producto ZT-2060-IOG de la marca ICP DAS" title="Figura 3.  Gráfica de medición de beneficios del Big Data"></center>
      <p class="text-center"><b>Figura 3. Gráfica de medición de beneficios del Big Data</b></p>
      <h2 class="subtitle blue text-center mt-5 mb-3">Algunas tendencias del Big Data para este año</h2>
      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/bigdata.jpg" class="image_productos" width="40%" alt="Figura 4. Aplicaciones del Big Data" title="Figura 4. Aplicaciones del Big Data"></center>
      <p class="text-center"><b>Figura 4. Aplicaciones del Big Data</b></p>
      <p>A continuación se hará mención de algunas de las tendencias que se implementaron o se pretenden implementaran en este 2018.</p>
      <ul>
        <li>Cazar oportunidades en ventas: Se parte desde el hecho en que los datos pueden ser segmentados, por lo tanto a partir de estas segmentaciones se puede ver a más detalle cómo cambian los clientes y localizar las oportunidades de negocios en base a ello. Por ejemplo, podemos ver que producto ha visitado el cliente o ha comprado y recomendarle otro producto similar o complementario (venta cruzada).</li>
        <li>Tomar decisiones en tiempo real: Estas decisiones son tomadas a partir del análisis de resultados en conjunto con el real time y el Big Data, obtenidos tras poner un producto en venta en una hora y lugar determinado.</li>
        <li>Detectar y evitar la pérdida de clientes: Por medio de patrones de comportamiento de los clientes se puede detectar qué va hacer que el cliente abandone la compra o la termine realizando.</li>
        <li>Detectar fraudes: E cuestión de seguridad se puede detectar las vulnerabilidades de pagos de clientes y tomar decisiones a partir de este hecho.</li>
        <li>Seguimiento de tendencias en el mercado: Con ayuda de estos datos se puede observar el proceso en el cual las personas desarrollan sentimientos sobre cierta marca, producto.</li>
      </ul>
      <h2 class="subtitle blue text-center mt-5 mb-3">Generadores de datos</h2>
      <p>Otra vertiente que se tienen en el mundo de los negocios, es la generación de las bases de datos a analizar. En este caso, expondremos equipos de uso general que ayudan a obtener información para posteriormente ser analizadas.</p>
      <p>La marca MCC de Logicbus ofrece los siguientes productos los cuales ofrecen tratamiento de gran cantidad de datos y adquisición de datos, los cuales son los siguientes:</p>
      <ul>
        <li><a class="blue link-orange" href="https://tienda.logicbus.com.mx/MCC-118_p_17390.html">MCC 118</a>
          <p>Tarjeta DAQ HAT para Raspberry Pi. 8 Entradas Analogas de terminal comun, 12 bit, 100KS/s. Rango + -10VDC. Alimentacion: 333 V proporcionada por la Raspberry pi. Se pueden apilar hasta ocho dispositivos MCC 118. Raspberry Pi no incluida</p>
          <center><a class="blue link-orange" href="https://tienda.logicbus.com.mx/MCC-118_p_17390.html"><img src="assets/images/MCC-118.jpg" width="30%" alt="MCC-118"></a></center>
        </li>

        <li><a class="blue link-orange" href="https://tienda.logicbus.com.mx/DT7816_p_12351.html">DT7816</a>
          <p>Tarjeta DAQ HAT para Raspberry Pi. 8 Entradas Analogas de terminal comun, 12 bit, 100KS/s. Rango + -10VDC. Alimentacion: 333 V proporcionada por la Raspberry pi. Se pueden apilar hasta ocho dispositivos MCC 118. Raspberry Pi no incluida</p>
          <center><a class="blue link-orange" href="https://tienda.logicbus.com.mx/DT9834-16-4-16-BNC_p_12411.html"><img src="assets/images/233/DT7816.jpg" width="30%" alt="DT7816"></a></center>
        </li>

        <li><a class="blue link-orange" href="https://tienda.logicbus.com.mx/DT9834-16-4-16-BNC_p_12411.html">DT7816</a>
          <p>El DT9834 es una serie de módulos de adquisición de datos USB (DAQ) de alta velocidad y alto rendimiento. Estos módulos DAQ USB están disponibles en una variedad de configuraciones, lo que le permite elegir la cantidad de canales de E / S analógicos y el empaque que se adapte a su aplicación.</p>
          <center><a class="blue link-orange" href="https://tienda.logicbus.com.mx/DT9834-16-4-16-BNC_p_12411.html"><img src="assets/images/233/DT9834.jpg" width="30%" alt="DT9834"></a></center>
        </li>

        <li><a class="blue link-orange" href="https://tienda.logicbus.com.mx/USB-TC_p_3494.html">USB-TC</a>
          <p>La combinación de la USB-TC con el Software DAQ totalmente gratuito te brinda una solución completa de adquisición de datos que te ayudan a realizar mediciones de temperatura en minutos. El dispositivo es completamente "plug and play" y fácil de utilizar. Obtiene todos sus requerimientos de energía del puerto USB, por lo tanto no requiere conexión de energía adicional.</p>
          <center><a class="blue link-orange" href="https://tienda.logicbus.com.mx/USB-TC_p_3494.html"><img src="https://tienda.logicbus.com.mx/assets/images/USB-TC.jpg" width="30%" alt="USB-TC"></a></center>
        </li>
      </ul>
      <p>Ademas de existir software como IoTstar desarrollado por ICP DAS para su uso en la supervisión y gestión remota de los controladores PMC / WISE en una variedad de aplicaciones industriales. IoTstar ofrece una interfaz web fácil de usar e intuitiva que permite a los usuarios implementar la configuración del sistema y la supervisión en los controladores remotos con unos pocos clics; no se requiere programación.</p>
      <p>Después de que la conexión de red se genera entre los controladores remotos PMC / WISE y el IoTstar a través de la red Ethernet / 3G, el IoTstar puede comunicarse con los controladores remotos para implementar la configuración del sistema, monitoreo de estado y actualización de firmware (funciona incluso si el controlador en un entorno de configuración de Dominio de IP Privado, por ejemplo: Localizar detrás del Cortafuegos o usar una IP virtual dinámica).</p>

      <p>Con la tarjeta microSD, el controlador puede proporcionar la función del registrador de datos a los datos de registro en tiempo real de los sensores y módulos de E / S y enviar los archivos de registro de datos a la IoTstar a través del protocolo FTP. Cuando IoTstar recibe los archivos de registro de datos de los controladores remotos PMC / WISE, importará el contenido de estos archivos en la base de datos. Y luego, estos datos grabados se pueden recuperar directamente de la base de datos para el análisis futuro de la información mediante el software SCADA, la herramienta de análisis de datos (por ejemplo: Microsoft Power BI, Google Data Studio) o el servicio en la nube.</p>

      <p>IoTstar se puede instalar en una plataforma general de PC y funciona como un sistema de nube privada. También se puede instalar en Microsoft Azure, IBM Bluemix o Amazon AWS, etc. y funciona como un sistema de nube pública. Al usar IoTstar, es fácil construir un sistema de monitoreo remoto y administración de la nube IoT, y durante todo el proceso de desarrollo del sistema; no se requiere programación; solo realiza algunas configuraciones en el controlador PMC / WISE y en IoTstar; luego, los usuarios podrían integrar rápidamente el sensor y los datos del módulo de E / S con el sistema IoT Cloud. Es una solución IoT Cloud fácil de usar y fácil de construir para las aplicaciones IoT y Big Data.</p>

      <p class="med">Cloud Service</p>
      <p>Los sevicios de almacenamiento en la nube son de gran ayuda para mantener el control de los registros. Los beneficios que ofrece son contar con los productos necesarios de manera inmediata para la implementacion de sus proyectos, reduciendo drasticamente el tiempo de salida al mercado.</p>
      <p class="med">InduSoft Web</p>
      <p>Es un entorno de desarrollo integrado, la cual le permite diseñar, desarrollar, buscar soluciones, y hacer mantenimiento de sus aplicaciones HMI/SCADA, además implementarlos en diferentes plataformas (Sistemas Operativos). A pesar de que el entorno de desarrollo (y su proyecto) es el mismo para cualquier plataforma, Indusoft ofrece diferentes ediciones de runtime adecuadas para limitaciones técnicas y comerciales en cada plataforma, por ejemplo runtime versión full InduSoft Web Studio, runtime en EmbeddedView y runtime en CEView.</p>
      <h2 class="subtitle blue text-center mt-5 mb-3">Conclusiones</h2>
      <p>Gracias a las aplicaciones que ha ido teniendo el Big Data hoy en día el proceso de buscar posicionamiento y gusto hacia los mercados de negocios, es práctico y más aún por los equipos que existen hoy en día para la adquisición y procesamiento de datos que ayudan a llevar a cabo estos cálculos estadísticos tediosos y en ocasiones complejos, dependiendo del tamaño de los datos.</p>
      <p>Al mismo tiempo en los estudios de mercado actuales se pueden tener en forma rápida retroalimentación del mismo, incluso a nivel mundial sin tener que esperar mucho tiempo, que era lo que se hacía antes con un “focus group” o encuesta.</p>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/grafica-bigdata.jpg" class="image_productos" width="40%" alt="Figura 5. Arquitectura IoTstar" title="Figura 5. Arquitectura IoTstar"></center>
      <p class="text-center"><b>Figura 5. Arquitectura IoTstar</b></p>

      <p class="text-center"><a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/articulos/Big-data.pdf" target="_blank" title="Como usar la Big Data para expandir su negocio" alt="Como usar la Big Data para expandir su negocio">Leer Artículo Completo</a></p>
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