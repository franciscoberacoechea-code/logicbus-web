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
  <title>Acondicionador de señales - Logicbus S.A de C.V.</title>
  <meta name="description" content="Un acondicionador de señal son pasos de adquisición de datos que es llevado acabo con un dispositivo que puede convertir un tipo de señal electrónica a otra...">

  <meta name="author" content="Logicbus">
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
            <li class="breadcrumb-item active" aria-current="page">Acondicionador de señales</li>
          </ol>
        </nav>

        <h1 class="title blue">Acondicionador de señales</h1>
        <div align="center">
          <img src="https://www.logicbus.com.mx/imagenes/articulo/banner-acondicionador-de-senales.png" class="image_productos" width="70%" alt="Acondicionador de señales" title="Acondicionador de señales">
        </div>
        <p class="paragraph text-justify mt-5"><b>Resumen:</b>El presente artículo se expondrá acerca de los acondicionamientos de señales, cual es la función fundamentas, en donde se aplica, que tan importante se utiliza en las celdas de carga, y se presentara un producto de la marca SENECA que la empresa Logicbus proporciona para la conversión de las celdas de carga.</p>
      </div>
    </div>

    <div class="container text-justify paragraph">

      <h2 class="subtitle blue text-center">Introducción</h2>
      <p>La señal de salida de la celda de carga de un sistema de medición en general se debe procesar de una forma adecuada para la siguiente etapa de la operación. La señal puede ser, por ejemplo, demasiado pequeña, y sería necesario amplificarla; podría contener interferencias que eliminar; ser no lineal y requerir su linealización; ser analógica y requerir su digitalización; ser digital y convertirla en analógica; ser un cambio en el valor de la resistencia, y convertirla a un cambio en corriente; consistir en un cambio de voltaje y convertirla en un cambio de corriente de magnitud adecuada, etcétera. A todas estas modificaciones se les designa en general con el término acondicionamiento de señal.</p>
      <p></p>

      <h2 class="subtitle blue text-center"><a class="link-orange" href="external_signal">Acondicionador de señales</a></h2>

      <p>Cuando deseamos realizar una medida, lo primordial es tener un <a class="link-orange" href="transductores-sensores">transductor</a> que pueda transformar la medida física en una medida eléctrica, Esa medida eléctrica es necesario acondicionarla. Para entender esto, acondicionar una señal significa realizar el siguiente proceso: Convertir la señal, modificar el nivel de la señal, linealizacion para una respuesta y por ultimo filtrar la señal. Un acondicionador de señal son pasos de adquisición de datos que es llevado acabo con un dispositivo que puede convertir un tipo de señal electrónica a otra. Su principal objetivo es convertir una señal que puede ser difícil de leer y convertirlas a otro formato para que tengan de una manera fácil de leer los datos adquiridos. Las tecnologías claves para acondicionamiento de señales mejoran de forma general obteniendo un buen rendimiento del sistema de adquisición de datos.</p>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/adquisicion-de-datos.png" class="image_productos" width="70%" alt="Sistemas de adquisición de datos" title="Sistemas de adquisición de datos"></center>
      <p class="text-center"><b>Figura 1. Sistemas de <a class="link-orange" href="adquisicion-de-datos">adquisición de datos</a></b></p>

      <p>La mayoría de estas señales requieren de alguna manera de preparación antes de que sean digitalizadas. Por ejemplo las señales de un <a class="link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-temperatura-termopares">termopar</a>, estas señales proporcionan unos niveles muy pequeños de tensión que deben ser amplificados antes que sean digitalizados. Podemos mencionar de otros sensores, como detectores de temperatura mediante resistencia (RTD), los termistores, las galgas extensiométricas y los acelerómetros, toda esta tecnología que se requiere un trabajo de preparación conlleva un acondicionador de señales.</p>

      <h2 class="subtitle blue text-center">II. Etapas del Acondicionamiento de señales</h2>

      <ol type="A">
        <li><strong>Amplificación</strong></li>
        <p>En este punto se realiza cuando se considera que el nivel típico de salida de la señal es demasiado bajo. Esto es realizado con la ayuda de un amplificador operacional, la cual es requerida de una serie de características importantes de entrada para poder ser minimizados los efectos de carga en la señal de salida</p>

        <li><strong>Filtrado</strong></li>
        <p>Este punto consiste en eliminar ciertas bandas de frecuencia de una señal, y les abre puertas a otros para su transmisión. El intervalo de frecuencia que deja pasar un filtro se le conoce como banda de paso, el intervalo que no se deja pasar se le conoce como banda de rechazo y los límites entre ambos intervalos es conocida como frecuencia de cortes.</p>

        <li><strong>Linealizacion</strong></li>
        <p>En este punto consiste en obtener una señal de salida que puede variar linealmente con la variable que se desea medir, un ejemplo de su uso es en el caso de un sensor donde su salida varía de una forma exponencial con respecto a la variable a medir.</p>

        <li><strong>Conversión de señal</strong></li>
        <p>Los Cobots son muy fáciles de usar y programar, a diferencia de los robots industriales, se requieren de habilidades de programación especializada, hasta algunos de los modelos de Cobots aprenden de forma independiente.<br> Por ejemplo, un técnico puede realizar un movimiento con el brazo Cobot, y este entonces realiza el movimiento automáticamente, otros reciben instrucciones de trabajo sin codificación utilizando una interfaz gráfico, asi los empleados pueden programar un Cobot de forma fácil y utilizarlo para una variable de tareas.
        </p>

        <li><strong>Multiplexores</strong></li>
        <p>Es un circuito que tiene el poder de recibir datos que son provenientes de diversas fuentes, al momento de seleccionar un canal de entrada, pueda producir una salida correspondiente a un solo de ellos, en este caso, en el término de adquisición de datos, consiste en tomar datos de los sensores e introducirlos en una computadora para poder ser procesado.</p>

        <center><img src="https://www.logicbus.com.mx/imagenes/articulo/acondicionamiento-de-senal.png" class="image_productos" width="60%" alt="Etapas para el acondicionamiento de señales" title="Etapas para el acondicionamiento de señales">
        </center>
        <p class="text-center"><b>Figura 2. Etapas para el acondicionamiento de señales</b></p>
      </ol>
      <h2 class="subtitle blue text-center">Transductores de celdas de carga en las básculas</h2>
      <p>Una <a class="link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek">celda de carga</a> es un transductor que es utilizado para convertir una fuerza en una señal eléctrica. Por ejemplo en las básculas digitales, ya que para ellos la celda de carga es uno de los elementos más importantes, ya que estas celdas de carga son encargadas de traducir la fuerza de una señal de voltaje (celda de carga analógica), la celda de carga analógica con galgas extensiométricas es la que más se utiliza en las básculas.</p>
      <p>Una celda de carga por lo general está compuesta por 4 galgas extensiométricas que son conectadas en una configuración tipo puente de Wheatstone.</p>
      <p>Puente de Wheatstone es un arreglo de cuatro resistencias para determinar el valor de una resistencia desconocida, y es utilizado comúnmente en las celdas de carga.</p>
      <p>La señal que se obtiene es de mili volts y tiene que ser amplificada a voltaje, corriente 0~20m Amp o 4~20m Amp e incluso a una señal análoga con un amplificador de instrumentación mediante puertos RS232 o RS485. La salida del transductor se toma para realizar cálculos necesarios para obtener la fuerza aplicada al transductor.</p>
      <p>La señal de la celda, galga o célula de carga se lleva a un indicador análogo-digital para convertirla a un valor numérico digital, este valor se multiplica por un factor para convertirlo en unidades de pesaje como kg, lb, etc.; las básculas miden la fuerza que genera un objeto y como la Fuerza es igual a la Masa por la aceleración (F=m.a) y la aceleración es una constante (la gravedad de la tierra) se puede decir que la Masa es directamente proporcional a la Fuerza. El factor es el que se ajusta en una calibración de ganancia y de esta forma nos da un dato exacto.</p>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Ejemplo-de-la-aplicacion-sistema-de-adquisicion-de-datos.png" class="image_productos" width="60%" alt="Ejemplo de la aplicación" title="Ejemplo de la aplicación"></center>
      <p class="text-center"><b>Figura 3. Ejemplo de la aplicación</b></p>

      <p>Para poder procesar la conversión de la celda de carga, la empresa Logicbus proporciona un convertidor de señal extensiométricas de celdas de carga con salida análoga de 4 a 6 hilos, es el producto de la marca SENECA <a class="link-orange" href="https://tienda.logicbus.com.mx/Z-SG_p_4195.html"> Z-GS</a>, este producto contiene una comunicación con el <a class="link-orange" href="Protocolo-Modbus">protocolo Modbus</a> RTU, tiene una sensibilidad de 1 a 64 mV / V, configurable por interruptor DIP para valores enteros, a través de software para valores reales / enteros. Indicación de peso estable a través del registro Modbus / salida digital y su entrada y salida puede ser configurable mediante su puerto RS-232.</p>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Imagen-del-producto-Z-GS-de-la-marca-SENECA.png" class="image_productos" width="30%" alt="Imagen del producto Z-SG de la marca SENECA" title="Imagen del producto Z-SG de la marca SENECA"></center>
      <p class="text-center"><b>Figura 4. Imagen del producto <a class="link-orange" href="https://tienda.logicbus.com.mx/Z-SG_p_4195.html"> Z-GS</a> de la marca SENECA</b></p>

      <h2 class="subtitle blue text-center">Conclusiones</h2>

      <p>Un acondicionador de señal para el uso de la célula de carga extensiométrica, es en realidad un amplificador para extensiométrica, que se emplea para acondicionar señales procedentes de bandas extensiométricas. Estas bandas extensiométricas son montadas dentro de la célula y miden la fuerza a tracción o compresión, mediante la deformación de dichas bandas.</p>
      <p>Los formatos disponibles son diferentes, aunque los más habituales son las electrónicas en carril DIN, existiendo también la disponibilidad de visualizadores para puente wheatstone, sin olvidar las opciones de montaje en rack escalable para adquisición simultánea de múltiples bandas extensiométricas.</p>
      <p>Cuando se usan para extensiométrica, estos módulos siempre acondicionan puente completo. Si se quiere hacer ensayos con bandas extensiométricas, es mejor usar módulos específicos que nos permitan hacer el complemento del puente, equilibrado y calibración automáticamente.</p>

      <p class="text-center"><a class="link-orange" href="pdf/articulos/Acondicionador-de-señales.pdf" target="_blank" title="Acondicionador de señales" alt="Acondicionador de señales">Ver Artículo Completo</a></p>
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